<?php

require_once("vendor/autoload.php");

// load hubleto
$config['projectFolder'] = __DIR__;
$config['sessionSalt'] = 'hubleto-cli-agent';

$hubleto = new \Hubleto\Erp\Loader($config);
$hubleto->init();

// simulate `php hubleto init init-config-dev.yaml`
$hubleto->getService(\Hubleto\Erp\Cli\Agent\CommandInit::class)
  ->setArguments([
    null,
    null,
    'init-config-dev.yaml'
  ])
  ->run()
;

// modify config as needed

$hubleto->terminal()->white("\n");
$hubleto->terminal()->white("Applying project default configuration.\n");

// APPLY YOUR PROJECT-SPECIFIC CONFIG, FOR EXAMPLE:
// $hubleto->config()->save('apps/Hubleto\\App\\Community\\Deals/sidebarOrder', '0');

$hubleto->terminal()->white("DONE.");
