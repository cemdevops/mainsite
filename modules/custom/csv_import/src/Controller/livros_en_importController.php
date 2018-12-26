<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;


class livros_en_importController extends ControllerBase
{

    public function import_livros_en()
    {

        function getTidByName($name = NULL, $vid = NULL)
        {
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
        $publicacoes = $filePath . "/part2_books-en-single-rows.csv";
        $h = fopen($publicacoes, "r");
        $base = [];
        while (($data = fgetcsv($h, 100000, "|")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
//      $base = array_slice($base,795,4);  // Payload de teste
//        kint($base);
//        exit();
        $head = array_shift($base);
        $autor = array();
        $nid   = 6022;
        $count = 0;
        foreach ($base as $value) {

            if($value[1] == 'Book'):
                $file = $value[6];
                $description = $value[7];
                $count++;
                $node = Node::load($nid);
                $nid++;
                $translated_fields = [];
                $documentos = [];

                $file_source = $filePath . "/publicacoes-migrated-files-mari/" . $file;

                if (file_exists($file_source) && is_file($file_source)) {
                    $uri = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $documentos = [
                        'target_id' => $files->id(),
                        'description' => $description,
                    ];
                    $translated_fields['field_publicacoes_arquivo'] = $documentos;
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
                    'title' => !empty($value[5]) ? $value[5] : "Título"
                ];
                $file_source_img = $filePath . "/publicacoes-migrated-files-mari/" . $value[9];
                if(file_exists($file_source_img) && is_file($file_source_img)) {
                    $uri = file_unmanaged_copy($file_source_img, 'public://' . $value[9], FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $imagem_capa = [
                        'target_id' => $files->id(),
                        'alt' => 'Imagem Capa do Livro',
                        'title' => 'Imagem Capa do Livro'
                    ];
                    $translated_fields['field_publicacoes_thumbnail'] = $imagem_capa;
                }
                $translated_fields['field_publicacoes_autores'] = $value[8];
                $translated_fields['body'] = $body;
                if(!empty($value[4])){
                    $translated_fields['field_publicacoes_link'] = $link;
                }
                $translated_fields['field_ano_de_publicacao'] = $value[3];
                $node->addTranslation('en', $translated_fields)->save();
            endif;
        }
        drupal_set_message("Foram registrados" . $count . " nodes!\n");
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Importação realizada com sucesso!'),
        ];
    }
}



