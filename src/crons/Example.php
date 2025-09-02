<?php

/*
  This cron does not do anything. It is just an example of how the
  cron should be implemented.
*/

namespace HubletoProject\Cron;

class Example extends \Hubleto\Erp\Cron
{

  // CRON-formatted string specifying the scheduling pattern
  public string $schedulingPattern = '0 0 * * *';

  public function run(): void
  {
    $this->logger()->info("Sample cron started.");
  }

}