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
  
  
    $term_name = getTidByName('BASE DE DADOS', 'tags');
  
  
    $filePath = \Drupal::service('file_system')
      ->realpath(file_default_scheme() . "://");
    $base_de_dados = $filePath . '\documents.csv';
  
   
    $csv = new Csv($base_de_dados);
  
//    $csv->encoding('UTF-8', 'UTF-8');
    $csv->delimiter = ";";
  
    $h = fopen($base_de_dados, "r");
    while (($data = fgetcsv($h, 100000, ";")) !== FALSE)
    {
  
      kint($data);
    }

    die();
    
      foreach($csv->data as $value) {
        $filename = $filePath . '/arquivos-para-migrar/vcnapuc.jpg';
        $file = file_save_data($filename, "public://vcnapuc.png", FILE_EXISTS_REPLACE);
        $node = Node::create(['type' => 'documentos']);
        $node->set('title', $value['titulo']);
      
        $body = [
          'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor',
          'format' => 'basic_html',
        ];
        $node->set('body', $body);
        $node->set('uid', 1);
        $documentos[] = [
          'target_id' => $file->id(),
          'alt' => 'teste do teste do teste',
          'title' => 'vamos ver isso',
        ];
        $node->set('field_documento', $documentos);
        $node->set('field_documento_data_ref', 'Ut enim ad minima veniam');
        $tags = [118, 123, 122];
        getTidByName('BASE DE DADOS', 'tags');
        $fontes = [];
        $temas = [];
        $tipos = [];
        $node->set('field_documento_tags', $tags);
        $node->set('field_documento_fontes', $fontes);
        $node->set('field_documento_temas', $temas);
        $node->set('field_documento_tags', $tags);
        $node->set('field_documento_data_lancamento', $value['data_lancamento']);
        $node->status = 1;
        $node->langcod = 'pt-br';
        $node->enforceIsNew();
        $node->save();
      }
      drupal_set_message("Node with nid " . $node->id() . " saved!\n");
    
      return [
        '#type' => 'markup',
        '#markup' => $this->t('Importação realizada com sucesso!'),
      ];
    
    }
  
  }












