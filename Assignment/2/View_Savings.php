<?php

declare(strict_types=1);

class View_Savings
{
    private array $loadArray;
    private array $titleArray;
    private int $income_amount = 0;
    private int $expense_amount = 0;
    private int $saving_amount = 0;

    private array $ies_amount = array(
        "Income"=>0,
        "Expense"=>0,
        "Savings"=>0
    );

    public function loadFromDatabase(): void {
        $loadData = new Data_Store();
        $this->loadArray = $loadData->loadFromDatabase();

        for ($i = 0; $i < count($this->loadArray)-1; $i++) {
            if ($this->loadArray[$i][1] === Categories::INCOME->value) {
                $this->income_amount += $this->loadArray[$i][2];
                $this->ies_amount["Income"] = $this->income_amount;
            }
            else if ($this->loadArray[$i][1] === Categories::EXPENSE->value) {
                $this->expense_amount += $this->loadArray[$i][2];
                $this->ies_amount["Expense"] = $this->expense_amount;
            }
        }

        if ($this->income_amount > $this->expense_amount) {
            $this->saving_amount = $this->income_amount - $this->expense_amount;
        }
        else {
            $this->saving_amount = 0;
        }

        $this->ies_amount["Savings"] = $this->saving_amount;


        foreach ($this->ies_amount as $temp_title=>$temp_amount) {
            printf($temp_title . ":" . $temp_amount . "  ");
        }

        printf("\n\n");
    }
}