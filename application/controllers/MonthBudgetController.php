<?php
class MonthBudgetController extends BaseController
{
    protected string $template = "month_budget.php";

    protected function get()
    {
        echo "GET request received.";
        $this->context["title"] = "月予算管理";
    }
}
