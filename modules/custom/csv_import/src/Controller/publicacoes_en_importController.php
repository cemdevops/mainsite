<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;


class publicacoes_en_importController extends ControllerBase {

    public function import_publicacoes_en() {

        function getTidByName($name = NULL, $vid = NULL) {
            $properties = [];
            if (!empty($name)) {
                $properties['name'] = $name;
            }
            if (!empty($vid)) {
                $properties['vid'] = $vid;
            }
            $terms = \Drupal::entityManager()
                ->getStorage('taxonomy_term')
                ->loadByProperties($properties);
            $term = reset($terms);
            return !empty($term) ? $term->id() : 0;
        }

        $filePath = \Drupal::service('file_system')->realpath(file_default_scheme() . "://");
        $publicacoes = $filePath . "/puclicacao-import-en.csv";
        $h =fopen($publicacoes, "r");
        $base = [];
        $terms = [
            'Artigo'            => 'Paper',
            'Apresentação'      => 'Presentation',
            'Capítulo de Livro' =>'Book Chapter',
            'Tese'              => 'Thesis',
            'Dissertação'       => 'Dissertation',
            'Working Paper'     => 'Working Paper',
            'Monografia'        => 'Monographs',
        ];

        while (($data = fgetcsv($h, 100000, "|")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
        $head  = array_shift($base);
//        $base = array_slice($base,0,6);  // Payload de teste
//        kint($base);
//        exit();
        $autor = array();
        $count = 0;
        $nid   = 7520;
        foreach($base as $value) {

                $file =  $value[6];
                $description = $value[7];
                $count++;
//                kint($nid);
//                exit();
                $node = Node::load($nid);
                $nid++;
                $translated_fields = [];
                $documentos        = [];

                $file_source = $filePath . "/publicacoes-migrated-files-mari/" . $file;

                if (file_exists($file_source) && is_file($file_source)) {
                    $uri = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $documentos = [
                        'target_id' => $files->id(),
                        'description' => $description,
                    ];
                    $translated_fields['field_publicacoes_arquivo'] =  $documentos;
                }


                if (!empty($value[1])) {
                    $translated_fields['title'] = $value[7];
                } else {
                    $translated_fields['title'] = 'SEM TITULO';
                }
                $body = [
                    'value' => $value[2],
                    'format' => 'full_html',
                ];
                $link = [
                    'uri' => $value[4],
                    'title' => isset($value[5]) ? $value[5] : "Sem título",
                ];
                if (!empty($value[4])) {
                    $translated_fields['field_publicacoes_link'] = $link;
                }
                $termo = array_search($value[1], $terms);
                $categoria = getTidByName($termo, 'categoria_publicacoes');
                $translated_fields['field_publicacoes_categoria'] = $categoria;

                $translated_fields['field_publicacoes_autores']   = $value[8];
                $translated_fields['body']                        = $body;
                $translated_fields['field_ano_de_publicacao']     = $value[3];

                $node->addTranslation('en', $translated_fields)->save();
        }
        drupal_set_message("Foram registrados" . $count .  " nodes!\n");
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Importação realizada com sucesso!'),
        ];

    }


}
