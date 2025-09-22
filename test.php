<?php

// bootstrap
require_once(__DIR__ . "/boot.php");

// auth user with ID = 1
$hubleto->router()->setRouteVars(['login' => 'admin@example.com', 'password' => 'admin']);
$hubleto->authProvider()->auth();
