<?php

// bootstrap
require_once(__DIR__ . "/boot.php");

// auth user with ID = 1
$main->setParam('login', 'admin@example.com');
$main->setParam('password', 'admin');
$main->authProvider()->auth();
