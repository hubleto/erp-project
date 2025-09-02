<?php

// bootstrap
require_once(__DIR__ . "/boot.php");

// run cron
$main->cronManager()->init();
$main->cronManager()->run();
