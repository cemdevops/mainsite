<?php

namespace Drupal\valida_email\EventSubscriber;

//use Drupal\Core\Url;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class valida_emailRedirectSubscriber implements EventSubscriberInterface {

/**
* {@inheritdoc}
*/
    public function checkForRedirection(GetResponseEvent $event) {

        $request = $event->getRequest();

        // This is necessary because this also gets called on
        // node sub-tabs such as "edit", "revisions", etc.  This
        // prevents those pages from redirected.
        if ($request->attributes->get('_route') !== 'entity.node.canonical') {
            return;
        }
        // Only redirect a certain content type.
        if ($request->attributes->get('node')->getType() !== 'page') {
            return;
        }
        if ($request->attributes->get('node')->get('field_controle_de_acesso')->getValue()[0]['value'] == FALSE) {
            return;
        }
        //$session = \Drupal::request()->getSession()->get('usuario_validado');

        // This is where you set the destination.
        //$redirect_url = Url::fromUri('entity:node/123');
        $response = new RedirectResponse('/controle-acesso', 301);
        $event->setResponse($response);
    }
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents() {
        $events[KernelEvents::REQUEST][] = array('checkForRedirection');
        return $events;
    }


}