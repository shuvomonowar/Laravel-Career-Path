<?php

declare(strict_types=1);

require_once "./Income_Expense.php";

class Add_Income implements Income_Expense
{
    private string $name;
    private int $amount;
    private Income $income;
    private Data_Store $data_Store;
    private array $dataArray;


    function takeAction(): void {
        $this->income = new Income();

        printf("Enter income source name: ");
        $this->name = readline();
        $this->income->setName($this->name);
        $this->dataArray[0] = $this->income->getName();

        $this->income->setCategories(Categories::INCOME);
        $this->dataArray[1] = $this->income->getCategories()->value;

        printf("Enter income amount: ");
        $this->amount = intval(readline());
        $this->income->setAmount($this->amount);
        $this->dataArray[2] = $this->income->getAmount();

        $this->data_Store = new Data_Store();
        $this->data_Store->storeToDatabase($this->dataArray);

        printf("\nIncome added successfully.\n\n");
    }
}