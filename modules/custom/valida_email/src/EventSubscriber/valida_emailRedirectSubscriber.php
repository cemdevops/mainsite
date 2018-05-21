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
public static function getSubscribedEvents() {
// This announces which events you want to subscribe to.
// We only need the request event for this example.  Pass
// this an array of method names
return(
  [KernelEvents::REQUEST => [
    ['redirectMyContentTypeNode'],
  ]
  ]);
}

/**
* Redirect requests for my_content_type node detail pages to node/123.
*
* @param GetResponseEvent $event
* @return void
*/
public function redirectMyContentTypeNode(GetResponseEvent $event) {
$request = $event->getRequest();

// This is necessary because this also gets called on
// node sub-tabs such as "edit", "revisions", etc.  This
// prevents those pages from redirected.
if ($request->attributes->get('_route') !== 'entity.node.canonical') {
return;
}

// Only redirect a certain content type.
if ($request->attributes->get('node')->getType() !== 'my_content_type') {
return;
}

// This is where you set the destination.
$redirect_url = Url::fromUri('entity:node/123');
$response = new RedirectResponse($redirect_url->toString(), 301);
$event->setResponse($response);
}

}