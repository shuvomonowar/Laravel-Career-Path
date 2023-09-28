<?php

declare(strict_types=1);

require_once "./Income_Expense.php";

class Add_Expense implements Income_Expense
{
    private string $name;
    private int $amount;
    private Expense $expense;
    private Data_Store $data_Store;
    private array $dataArray;


    function takeAction(): void {
        $this->expense = new Expense();

        printf("Enter expense source name: ");
        $this->name = readline();
        $this->expense->setName($this->name);
        $this->dataArray[0] = $this->expense->getName();

        $this->expense->setCategories(Categories::EXPENSE);
        $this->dataArray[1] = $this->expense->getCategories()->value;

        printf("Enter expense amount: ");
        $this->amount = intval(readline());
        $this->expense->setAmount($this->amount);
        $this->dataArray[2] = $this->expense->getAmount();

        $this->data_Store = new Data_Store();
        $this->data_Store->storeToDatabase($this->dataArray);

        printf("\nExpense added successfully.\n\n");
    }
}