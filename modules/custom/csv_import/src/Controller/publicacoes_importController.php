<?php

namespace Drupal\publicacoes_import\Controller;

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
        $publicacoes = $filePath . "/publicacoes.csv";
        $h =fopen($publicacoes, "r");

        while (($data = fgetcsv($h, 100000, ";")) !== FALSE) {
            $base[] = $data;
        }
        fclose($h);
        $head  = array_shift($base);
        $autor = array();
        $count = 0;
        foreach($base as $value) {

            $files       = explode('#', $value[8]);
            $description = explode('#', $value[7]);
            if(count($files) != count($description)){
                echo "A quantidade de descrição não está igual a quantiade de arquivos: linha: " . $count;
            }{
                $file_entity = array_combine($files, $description);
            }
            $count++;
            $node = Node::create(['type' => 'publicacoes']);
            $documentos  = array();

            foreach($file_entity as $file => $descricao){

                $file_source = $filePath . "/arquivos-para-migrar/publicacoes/" . $file;

                if(file_exists($file_source) && is_file($file_source)) {
                    $uri = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
                    $files = File::Create(['uri' => $uri]);
                    $files->save();
                    $documentos[] = [
                        'target_id' => $files->id(),
                        'description' => $descricao,
                    ];
                    $node->set('field_publicacoes_arquivo', $documentos);
                }
                if(file_exists($file_source)) {
                    $log = $filePath . '/logs/arquivos-faltantes-publicacoes.txt';
                    $current = file_get_contents($log);
                    $current .= "{$file}\n";
                    file_put_contents($log, $current);
                }
            }
            if(!empty($value[1])){
                $node->set('title', $value[1]);
            }else{
                $logs = $filePath .'/title.txt';
                $currents = file_get_contents($logs);
                file_put_contents($logs, "");
                $currents .= "{$value[1]}\n";
                file_put_contents($logs, $currents);
                $node->set('title', 'SEM TITULO');
            }
            $body = [
                'value' => $value[5],
                'format' => 'full_html',
            ];
            $node->set('body', $body);

			$field_infor = [
                'value' => $value[5],
                'format' => 'full_html',
            ];
            $node->set('field_infor', $field_infor);
            $node->set('uid', 1);

            $node->set('field_ano_de_publicacao', $value[9]);
            $node->set('field_data_de_publicacao', $value[10]);
            $node->set('field_publicacoes_link', $value[10]);
            $node->set('field_nome_da_revista', $value[10]);
            
            $autor     = explode('#', $value[4]);
            $categoria = explode('#', $value[4]);
        
            foreach($autor as $value){
                $autor[] = getTidByName($value, 'autor');
            }

            foreach($categoria as $value){
                $categoria[] = getTidByName($value, 'categoria_publicacoes');
            }

            $node->set('field_publicacoes_categoria', $categoria);
            $node->set('field_publicacoes_autor', $autor);
            $categoria = array();
            $autor     = array();

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
