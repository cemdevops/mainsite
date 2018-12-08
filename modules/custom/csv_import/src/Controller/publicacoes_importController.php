<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;


class publicacoes_importController extends ControllerBase {

    public function import_publicacoes() {

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
        $publicacoes = $filePath . "/publicaco-import-pt.csv";
        $h =fopen($publicacoes, "r");
        $base = [];
        while (($data = fgetcsv($h, 10000, "|")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
//        $base = array_slice($base,0,4);  // Payload de teste
//        kint($base);
//        exit();
        $head  = array_shift($base);
        $autor = array();
        $count = 0;
        foreach($base as $value) {
            $file = $value[6];
            $description = $value[7];

            $count++;
            $node = Node::create(['type' => 'publicacoes']);
            $documentos = array();
            $file_source = $filePath . "/publicacoes-migrated-files-mari/" . $file;

            if (file_exists($file_source) && is_file($file_source)) {
                $uri = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
                $files = File::Create(['uri' => $uri]);
                $files->save();
                $documentos = [
                    'target_id' => $files->id(),
                    'description' => $description,
                ];
                $node->set('field_publicacoes_arquivo', $documentos);
            }
            if (!empty($value[1])) {
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
                'title' => $value[5],
            ];
            if (!empty($value[4])) {
                $node->set('field_publicacoes_link', $link);
            }
            $categoria = getTidByName($value[1], 'categoria_publicacoes');

            $node->set('field_publicacoes_categoria', $categoria);
            $node->set('field_publicacoes_autores', $value[8]);

            $node->set('uid', 1);
            $node->status = 1;
            $node->langcod = 'pt-br';
            $node->enforceIsNew();
            $node->save();
        }

        drupal_set_message("Foram registrados" . $count .  " nodes!\n");
        return [
            '#type' => 'markup',
            '#markup' => $this->t('Importação realizada com sucesso!'),
        ];
    }
}
