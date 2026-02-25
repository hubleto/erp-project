<?php

// bootstrap
require_once(__DIR__ . "/boot.php");

$mcpServer = new \Hubleto\McpServer\Builder($hubleto)->build();

$mcpServer->run();