<?php

// To activate this dependency, add following line to
// your ConfigEnv file:
//
// $config['dependencies'][\Hubleto\App\Community\Desktop\Controllers\Desktop::class]
//   = \HubletoProject\Dependency\Controllers\Desktop::class;

namespace HubletoProject\Dependency\Controllers;

class Desktop extends \Hubleto\App\Community\Desktop\Controllers\Desktop
{
  public function prepareView(): void
  {
    parent::prepareView();

    // Do your custom code each time when desktop is rendered
    // E.g.:
    //   - log usage to a file
    //   - redirect to your view with `$this->setView('@project/Desktop.twig');`
  }
}