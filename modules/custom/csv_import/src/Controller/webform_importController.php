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

class webform_importController extends ControllerBase {
  
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
  
  }












