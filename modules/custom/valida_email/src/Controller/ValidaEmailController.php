<?php

namespace Drupal\valida_email\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;

/**
* An example controller.
*/
class ValidaEmailController extends ControllerBase {

  public function content(Request $request) {

      if(isset($_POST['email']) && !empty($_POST['email'])){

        $connection = \Drupal::database();
        $query = $connection->select('webform_submission_data', 'webform');
        $query->condition('webform.name', 'e_mail', '=');
        $query->condition('webform.value', $_POST['email'], '=');
        $query->fields('webform', ['value']);
        $result = $query->execute();
        foreach ($result as $record) {
          if(!empty($record->value)){
              $data = TRUE;
             // $value = $session->get('usuario_validado', 'default');
          }else{
              $session = \Drupal::request()->getSession();
              $session->set('usuario_validado', 'sim');
              kint($session->get('usuario_validado'));
              die();
              $data = FALSE;
          }
        }
       
      }else {
          $data = FALSE;
      }
      $response['retorno'] = $data;
      return new JsonResponse( $response );
  }

    public function form() {
        return [
            '#theme' => 'my_template'
        ];
    }



}
