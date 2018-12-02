<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;


class livros_importController extends ControllerBase {

    public function import_livros() {

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
        $publicacoes = $filePath . "/part2_books-pt-br-single-rows.csv";
        $h =fopen($publicacoes, "r");
        $base = [];
        while (($data = fgetcsv($h, 100000, "|")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
//        $base = array_slice($base,5,1);  // Payload de teste
//        kint($base);
//        exit();
        $head  = array_shift($base);
        $autor = array();
        $count = 0;
        foreach($base as $value) {
            if($value[1] == 'Livro'):
                $file = [6];
                $description = $value[7];
                $count++;
                $node = Node::create(['type' => 'livros']);
                $documentos = [];
                $file_source = $filePath . "/publicacoes-migrated-files-mari/" . $file;
                if(file_exists($file_source) && is_file($file_source)) {
                    $uri = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $documentos = [
                        'target_id'   => $files->id(),
                        'description' => $description,
                    ];
                    $node->set('field_publicacoes_arquivo', $documentos);
                }
                // Imagem capa do livro
                $file_source_image = $filePath . "/publicacoes-migrated-files-mari/" . $value[9];
                if (file_exists($file_source_image) && is_file($file_source_image)) {
                    $uri = file_unmanaged_copy($file_source_image, 'public://' . $value[9], FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $imagem_capa = [
                        'target_id' => $files->id(),
                        'alt' => 'Imagem Capa do Livro',
                        'title' => 'Imagem Capa do Livro'
                    ];
                    $node->set('field_publicacoes_thumbnail', $imagem_capa);
                }

                if(!empty($value[1])) {
                    $node->set('title', $value[7]);
                } else {
                    $node->set('title', 'SEM TITULO');
                }
                $body = [
                    'value' => $value[2],
                    'format' => 'full_html',
                ];
                $node->set('body', $body);

                $node->set('field_ano_de_publicacao', $value[3]);

                $link = [
                    'uri' => $value[4],
                    'title' => !empty($value[5]) ?$value[5] : "Título",
                ];
                if(!empty($value[4])){
                    $node->set('field_publicacoes_link', $link);
                }

                $node->set('field_publicacoes_autores', $value[8]);
                $node->set('uid', 1);
                $node->status = 1;
                $node->langcod = 'pt-br';
                $node->enforceIsNew();
                $node->save();
            endif;
        }
        drupal_set_message("Foram registrados" . $count .  " nodes!\n");
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Importação realizada com sucesso!'),
        ];

    }


}
