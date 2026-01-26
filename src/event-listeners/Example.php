<?php

/*
  This event listener does not do anything. It is just an example of how the
  event listener should be implemented.
*/

namespace HubletoProject\EventListeners;

use Hubleto\Erp\Controller;

class Example extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{

  public function onControllerSetView(Controller $controller, string $view): void
  {
    // This method is invoked ater a $eventManager()->fire('onControllerSetView')
    // Do anything you want here.
  }

}