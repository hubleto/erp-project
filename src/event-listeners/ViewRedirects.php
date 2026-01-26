<?php

/*
  This event listener redirects views. Use it, if you want to
  make your custom view for already existing controller
  and route. Uncomment examples and modify to your needs.
*/

namespace HubletoProject\EventListeners;

class ViewRedirects extends \Hubleto\Framework\EventListener implements \Hubleto\Framework\Interfaces\EventListenerInterface
{

  // Uncomment and modify the `onControllerSetView()` method to customize
  // look & feel of your Hubleto.

  // public function onControllerSetView(string $controller, string $view): void
  // {
  //   switch ($view) {
  //     case '@Hubleto:App:Community:Settings/Dashboard.twig':
  //       $controller->setView('@Hubleto:App:Custom:Settings/Dashboard.twig');
  //     break;
  //   }
  // }

}