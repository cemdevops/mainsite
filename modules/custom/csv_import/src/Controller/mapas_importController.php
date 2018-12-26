<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\webform\Entity\Webform;
use Drupal\webform\Entity\WebformSubmission;
use Drupal\webform\WebformSubmissionForm;
use \Symfony\Component\HttpFoundation\Response;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;
use ParseCsv\Csv;

class mapas_importController extends ControllerBase {

    public function import_mapoteca() {

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
        $mapoteca = $filePath . "/dados/single-rows-mapoteca-pt-br.csv";


        $h =fopen($mapoteca, "r");

        while (($data = fgetcsv($h, 100000, ";")) !== FALSE) {
          $base[] = $data;
        }
        fclose($h);
        $base = array_slice($base,0,5);
//        kint($base);
//        exit();
        $head = array_shift($base);
        $divisao    = array();
        $count = 0;

        foreach($base as $value) {
          $files       = explode('#', $value[6]);
          $description = explode('#', $value[5]);
          $file_entity    = array_combine($files, $description);
          if(count($files) != count($description)){
            echo "A quantidade de descrição não está igual a quantiade de arquivos: linha: " . $count;
          }{
            $file_entity = array_combine($files, $description);
          }
          $count++;
          $node = Node::create(['type' => 'mapas_prontos']);
          $documentos = array();
          foreach($file_entity as $file => $descricao){
            $file_source = $filePath . "/new-mapoteca-migrated-files-mari/" . $file;
            if(file_exists($file_source) && is_file($file_source)) {
              $uri = file_unmanaged_copy($file_source, 'public://user_files/mapas_prontos/documento' . $file, FILE_EXISTS_REPLACE);
              $files = File::Create(['uri' => $uri]);
              $files->save();
              $documentos[] = [
                'target_id' => $files->id(),
                'description' => !empty($descricao) ? $descricao : "sem descrição",
              ];
              $node->set('field_documento', $documentos);
            }
            if(file_exists($file_source)) {
              $log = $filePath . '/logs/arquivos-faltantes-mapoteca.txt';
              file_put_contents($log, "");
              $current = file_get_contents($log);
              $current .= "{$file}\n";
              file_put_contents($log, $current);
            };
          }
            if(!empty($value[1])){
                $node->set('title', $value[1]);
            }else{
                $node->set('title', 'SEM TITULO');
            }
            $body = [
                'value'  => $value[2],
                'format' => 'full_html',
            ];
            $node->set('body', $body);
            $node->set('uid', 1);
            $node->set('field_documento_data_ref', $value[8]);

            $date_format = explode('-',$value[9]);
            $expression = '%s-%s-%s';
            $date = [
                'value' => sprintf($expression,$date_format[2],$date_format[1],$date_format[0]),
            ];

            $node->set('field_documento_data_lancamento', $date);

            $node->set('field_ano_de_publicacao',$value[3]);

            $file_source_img = $filePath . "/new-mapoteca-migrated-files-mari/" . $value[7];
            if(file_exists($file_source_img) && is_file($file_source_img)) {
                $uri = file_unmanaged_copy($file_source_img, 'public://user_files/mapas_prontos/imagens' . $value[7], FILE_EXISTS_REPLACE);
                $files = File::Create(['uri' => $uri]);
                $files->save();
                $imagem_capa = [
                    'target_id' => $files->id(),
                    'alt' => 'Imagem Capa do Livro',
                    'title' => 'Imagem Capa do Livro'
                ];
                $node->set('field_imagem_mapas', $imagem_capa);
            }
            $divisoes = explode('#', $value[4]);

          foreach($divisoes as $value){
            $divisao[] = getTidByName($value, 'divisao_territorial_do_brasil');
          }

          $node->set('field_documento_divisao', $divisao);

          $node->status = 1;
          $node->langcod = 'pt-br';
          $node->enforceIsNew();
          $node->save();
    }
    drupal_set_message("foram registrados " . $count . " nodes!\n");
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Importação realizada com sucesso!'),
    ];
    
  }
  
  }












