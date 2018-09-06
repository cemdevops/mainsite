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

class csv_importController extends ControllerBase {
  
  public function import_webform_csv() {
    $filePath = \Drupal::service('file_system')->realpath(file_default_scheme() . "://");
    $filename = $filePath . '/tabela_usuarios_cem4.csv';
    $csv = new Csv($filename);
    $webform_id = 'cadastro_curso';
    $values = array();
    foreach($csv->data as $value) {
      $values[] = [
        'webform_id' => $webform_id,
        'entity_type' => NULL,
        'entity_id' => NULL,
        'in_draft' => FALSE,
        'uid' => 1,
        'langcode' => 'pt-br',
        'token' => 'O56qkNgoP9IOH6ohhYriW7SI3rgZdCnhEZFRkJqvZUE',
        'uri' => '/pt-br/webform/cadastro_curso/api',
        'remote_addr' => '::1',
        'data' => array(
          'nome' => $value['nome'],
          'e_mail' => $value['email'],
          'instituicao' => $value['instituicao'],
          'cidade' => $value['municipio'],
        ),
      ];
    }
    // Check webform is open.
    $webform = Webform::load($webform_id);
    if ($webform != NULL) {
      $is_open = WebformSubmissionForm::isOpen($webform);
      if ($is_open === TRUE) {
        // Submit values and get submission ID.
        foreach($values as $var) {
          $errors = \Drupal\webform\WebformSubmissionForm::validateFormValues($var);
          // Check there are no validation errors.
          if(empty($errors)) {
            $webform_submission = \Drupal\webform\WebformSubmissionForm::submitFormValues($var);
          }
        }
      }
    }
   return [
      '#type' => 'markup',
      '#markup' => $this->t('Importação realizada com sucesso!'),
    ];
  }
  
  public function import_base_dados() {
    
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
    $base_de_dados = $filePath . "/dados_1.csv";
    $h =fopen($base_de_dados, "r");
    
    while (($data = fgetcsv($h, 100000, ";")) !== FALSE) {
      $base[] = $data;
    }
    fclose($h);
    $head = array_shift($base);
    $tag   = array();
    $fonte = array();
    $tema  = array();
    $tipo  = array();
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
        $node = Node::create(['type' => 'documentos']);
        foreach($file_entity as $file => $descricao){
          $documentos  = array();
          $file_source = $filePath . "/arquivos-para-migrar/dados/" . $file;
          
          if(file_exists($file_source) && is_file($file_source)):
            $uri   = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
            $files = File::Create(['uri' => $uri]);
            $files->save();
            $documentos[] = [
              'target_id' => $files->id(),
              'description' => $descricao,
            ];
            $node->set('field_documento', $documentos);
           else:
              $log = $filePath .'/logs/arquivos-faltantes-dados.txt';
              $current = file_get_contents($log);
              $current .= "{$file}\n";
              file_put_contents($log, $current);
           endif;
        }
        if(!empty($value[1])){
          $node->set('title', $value[1]);
        }else{
          $logs = $filePath .'/title.txt';
          $currents = file_get_contents($logs);
          $currents .= "{$value[1]}\n";
          file_put_contents($logs, $currents);
          $node->set('title', 'SEM TITULO');
        }
        $body = [
          'value' => $value[5],
          'format' => 'basic_html',
        ];
        $node->set('body', $body);
        $node->set('uid', 1);

        $node->set('field_documento_data_ref', $value[9]);
        $node->set('field_documento_data_lancamento', $value[10]);
        
        $tags   = explode('#', $value[4]);
        $fontes = explode('#', $value[3]);
        $temas  = explode('#', $value[2]);
        $tipos  = explode('#', $value[6]);

        foreach($tags as $value){
          $tag[] = getTidByName($value, 'tags_base_dados');
        }
        foreach($fontes as $value){
          $fonte[] = getTidByName($value, 'fontes');
        }
        foreach($temas as $value){
          $tema[] = getTidByName($value, 'temas');
        }
        foreach($tipos as $value){
          $tipo[] = getTidByName($value, 'tipos');
        }
        $node->set('field_documento_tags', $tag);
        $node->set('field_documento_fontes', $fonte);
        $node->set('field_documento_temas', $tema);
        $node->set('field_documento_tipos', $tipo);

        $tag        = array();
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
    $mapoteca = $filePath . "/mapoteca.csv";
    $h =fopen($mapoteca, "r");
    
    while (($data = fgetcsv($h, 100000, ";")) !== FALSE) {
      $base[] = $data;
    }
    fclose($h);;
    $head = array_shift($base);
    $fonte      = array();
    $tema       = array();
    $tipo       = array();
    $divisao    = array();
    $documentos = array();
    $count = 0;
    foreach($base as $value) {
      $files       = explode('#', $value[8]);
      $description = explode('#', $value[7]);
      $file_entity    = array_combine($files, $description);
      if(count($files) != count($description)){
        echo "A quantidade de descrição não está igual a quantiade de arquivos: linha: " . $count;
      }{
        $file_entity = array_combine($files, $description);
      }
      $count++;
      $node = Node::create(['type' => 'mapas_prontos']);
      foreach($file_entity as $file => $descricao){
        $file_source = $filePath . "/arquivos-para-migrar/mapoteca/" . $file;
        if(file_exists($file_source) && is_file($file_source)):
          $uri   = file_unmanaged_copy($file_source, 'public://' . $file, FILE_EXISTS_REPLACE);
          $files = File::Create(['uri' => $uri]);
          $files->save();
          $documentos[] = [
            'target_id' => $files->id(),
            'description' => $descricao,
          ];
          $node->set('field_documento', $documentos);
        else:
          $log = $filePath .'/logs/arquivos-faltantes-mapoteca.txt';
          $current = file_get_contents($log);
          $current .= "{$file}\n";
          file_put_contents($log, $current);
        endif;
      }
      $node->set('title', $value[1]);
      $body = [
        'value' => $value[5],
        'format' => 'basic_html',
      ];
      $node->set('body', $body);
      $node->set('uid', 1);
      $node->set('field_documento_data_ref', $value[9]);
      $node->set('field_documento_data_lancamento', $value[10]);

      $fontes   = explode('#', $value[3]);
      $temas    = explode('#', $value[2]);
      $tipos    = explode('#', $value[6]);
      $divisoes = explode('#', $value[4]);
      
      foreach($fontes as $value){
        $fonte[] = getTidByName($value, 'fontes_mapas_prontos');
      }
      foreach($temas as $value){
        $tema[] = getTidByName($value, 'temas_mapas_prontos');
      }
      foreach($tipos as $value){
        $tipo[] = getTidByName($value, 'tipos_mapas_prontos');
      }
      foreach($divisoes as $value){
        $divisao[] = getTidByName($value, 'divisao_territorial_do_brasil');
      }

      $node->set('field_documento_fontes', $fonte);
      $node->set('field_documento_temas', $tema);
      $node->set('field_documento_tipos', $tipo);
      $node->set('field_documento_divisao', $divisao);
      
      $fonte        = array();
      $tema         = array();
      $tipo         = array();
      $node->status = 1;
      $node->langcod = 'pt-br';
      $node->enforceIsNew();
      $node->save();
    }
//    die();
    drupal_set_message("foram registrados " . $count . " nodes!\n");
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Importação realizada com sucesso!'),
    ];
    
  }
  
  }












