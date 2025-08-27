<?php

/*
  This hook redirects views. Use it, if you want to
  make your custom view for already existing controller
  and route. Uncomment examples and modify to your needs.
*/

namespace HubletoProject\Hook;

class ViewRedirects extends \Hubleto\Erp\Hook
{

  // Uncomment and modify the `run()` method to customize
  // look & feel of your Hubleto.

  // public function run(string $event, array $args): void
  // {
  //   if ($event == 'controller:set-view') {
  //     list($controller, $view, $viewParams) = $args;
  //     switch ($view) {
  //       case '@Hubleto:App:Community:Settings/Dashboard.twig': $controller->setView('@Hubleto:App:Custom:Settings/Dashboard.twig'); break;
  //     }
  //   }
  // }

}