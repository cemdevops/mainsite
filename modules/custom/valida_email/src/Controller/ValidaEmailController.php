<?php

namespace Drupal\valida_email\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
* An example controller.
*/
class ValidaEmailController extends ControllerBase {

/**
* Returns a render-able array for a test page.
*/
  public function content(Request $request) {
    // Create an object of type Select
    $connection = \Drupal::database();
    $query = $connection->select('webform_submission_data', 'webform');
  
    // Add extra detail to this query object: a condition, fields and a range
    $query->condition('webform.name', 'e_mail', '=');
    $query->fields('webform', ['value']);
    $result = $query->execute();
    foreach ($result as $record) {
      $data = $record->value;
    }
    $response['data'] = $data;
    $response['method'] = 'GET';
  return new JsonResponse( $response );
  }

}