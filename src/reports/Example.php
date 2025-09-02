<?php declare(strict_types=1);

/*
  This report does not do anything. It is just an example of how the
  report should be implemented.

  Custom report is very simple way to make different views on your Hubleto
  data. For more complex use cases, consider creating your own app.
*/

namespace HubletoProject\Report;

class Example extends \Hubleto\Framework\Report
{

  // Sample report URL slug. This report will be accessible under HubletoAccount/reports/my-report
  protected string $urlSlug = 'my-report';

  // Sample report name
  public string $name = 'My revenue this month';

  public string $modelClass = Deal::class;

  public function getReportConfig(): array
  {
    $config = [];

    // Sample implementation. Uncomment and modify to your needs.

    // $model = $this->getService(Deal::class);
    // $config['groupsBy'] = [
    //   ["field" => "id_customer", "title" => "Customer"],
    // ];
    // $config['returnWith'] = [
    //   ["type" => "total", "field" => "price", "title" => "Total price of deals"]
    // ];

    // $config["searchGroups"] = [
    //   ["fieldName" => "id_owner", "field" => $model->getColumn("id_owner"), "option" => 1,  "value" => $this->authProvider()->getUser()["id"],],
    //   ["fieldName" => "date_created", "field" => $model->getColumn("date_created"), "option" => 6,  "value" => date("Y-m-01"), "value2" => date('Y-m-t')],
    // ];

    return $config;
  }


}