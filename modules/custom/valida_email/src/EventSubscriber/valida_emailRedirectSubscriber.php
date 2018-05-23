<?php

namespace Drupal\valida_email\EventSubscriber;

use Drupal\Core\Url;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class valida_emailRedirectSubscriber implements EventSubscriberInterface {

/**
* {@inheritdoc}
*/
    public function checkForRedirection(GetResponseEvent $event) {
        kint($event);
        die();
        if ($event->getRequest()->query->get('redirect-me')) {
            $event->setResponse(new RedirectResponse('http://example.com/'));
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents() {
        $events[KernelEvents::REQUEST][] = array('checkForRedirection');
        return $events;
    }


}