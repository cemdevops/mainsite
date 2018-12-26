<?php

namespace Drupal\csv_import\Controller;

use Drupal\Core\Controller\ControllerBase;
use \Drupal\node\Entity\Node;
use \Drupal\file\Entity\File;


class dados_importController extends ControllerBase {

  public function import_base_dados() {
    
    function getTidByName($name = NULL, $vid = NULL) {
      $properties = [];
      if (!empty($name)) {
        $properties['name'] = utf8_encode($name);
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
    $base_de_dados = $filePath . "/dados/dados-single-rows-pt-br.csv";
    $h =fopen($base_de_dados, "r");

    while (($data = fgetcsv($h, 100000, "|")) !== FALSE) {
      $base[] = $data;
    }
    fclose($h);
    $base = array_slice($base,0,5);
 //    kint($base);
//    exit();
    $head = array_shift($base);
    $count = 0;

      foreach($base as $value) {
        $files       = explode('#', utf8_encode($value[7]));
        $description = explode('#', utf8_encode($value[6]));

        if(count($files) != count($description)){
            echo "A quantidade de descrição não está igual a quantiade de arquivos: linha: " . $count;
        }{
          $file_entity = array_combine($files, $description);
        }
        $count++;
        $node = Node::create(['type' => 'documentos']);
        $documentos  = array();
        
        foreach($file_entity as $file => $descricao){

          $file_source = $filePath . "/data-migrated-files/" . $file;

          if(file_exists($file_source) && is_file($file_source)) {
            $uri = file_unmanaged_copy($file_source, 'public://user_files/dados/documento' . $file, FILE_EXISTS_REPLACE);
            $files = File::Create(['uri' => $uri]);
            $files->save();
            $documentos[] = [
              'target_id' => $files->id(),
              'description' => !empty($descricao) ? $descricao : "sem descrição",
            ];
            $node->set('field_documento', $documentos);
          }
          if(file_exists($file_source)) {
            $log = $filePath . '/logs/arquivos-faltantes-dados.txt';
            $current = file_get_contents($log);
            $current .= "{$file}\n";
            file_put_contents($log, $current);
          }
        }
        if(!empty($value[1])){
            $node->set('title',utf8_encode($value[1]));
        }else{
          $node->set('title', 'SEM TITULO');
        }
        $body = [
            'value'  =>  utf8_encode($value[5]),
            'format' => 'full_html',
          ];
        $node->set('body', $body);
        $node->set('uid', 1);

        $node->set('field_documento_data_ref', utf8_encode($value[8]));
        $date_format = explode('/',utf8_encode($value[9]));
        $expression = '%s-%s-%s';
        $date = [
           'value' => sprintf($expression,$date_format[2],$date_format[1],$date_format[0]),
        ];
        $node->set('field_documento_data_lancamento', $date);

        $fontes = explode('#', $value[4]);
        $temas  = explode('#', $value[3]);
        $tipos  = explode('#', $value[2]);

        foreach($fontes as $value){
          $fonte[] = getTidByName($value, 'fontes');
        }
        foreach($temas as $value){
          $tema[] = getTidByName($value, 'temas');
        }
        foreach($tipos as $value){
          $tipo[] = getTidByName($value, 'tipos');
        }
        $node->set('field_documento_fontes', $fonte);
        $node->set('field_documento_temas', $tema);
        $node->set('field_documento_tipos', $tipo);

        $fonte      = array();
        $tema       = array();
        $tipo       = array();

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












