<?php

namespace Drupal\valida_email\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
* An example controller.
*/
class ValidaEmailController extends ControllerBase {

/**
* Returns a render-able array for a test page.
*/
public function content() {
$build = [
'#markup' => t('olá sou a página que vai validar o email do usuário!'),
];
return $build;
}

}