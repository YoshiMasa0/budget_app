<?php
class MonthBudgetController extends BaseController
{
    protected string $template = "month_budget.php";

    protected function get()
    {
        $this->context["title"] = "月予算管理";
        parent::get();
    }
}
