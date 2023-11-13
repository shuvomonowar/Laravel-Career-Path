<?php

declare(strict_types=1);

class Show_Options
{
    private array $options = array(
        Options::ADD_INCOME->value => "Add Income",
        Options::ADD_EXPENSE->value => "Add Expense",
        Options::VIEW_INCOMES->value => "View Incomes",
        Options::VIEW_EXPENSES->value => "View Expenses",
        Options::VIEW_SAVINGS->value => "View Savings",
        Options::VIEW_CATEGORIES->value => "View Categories",
        Options::EXIT->value => "Exit"
    );

    function show_options(): void
    {
        while (true) {
            foreach ($this->options as $opt => $val) {
                printf("%d. %s\n", $opt, $val);
            }

            printf("----------------\n");
            printf("Enter Option: ");
            $select_option = readline();

            if($select_option == $this->options[Options::ADD_INCOME->value] || $select_option == Options::ADD_INCOME->value) {
                $add_income = new Add_Income();
                $add_income->takeAction();
            }
            else if($select_option == $this->options[Options::ADD_EXPENSE->value] || $select_option == Options::ADD_EXPENSE->value) {
                $add_expense = new Add_Expense();
                $add_expense->takeAction();
            }
            else if($select_option == $this->options[Options::VIEW_INCOMES->value] || $select_option == Options::VIEW_INCOMES->value) {
                $view_income = new View_Income();
                $view_income->loadFromDatabase();
            }
            else if($select_option == $this->options[Options::VIEW_EXPENSES->value] || $select_option == Options::VIEW_EXPENSES->value) {
                $view_expense = new View_Expense();
                $view_expense->loadFromDatabase();
            }
            else if($select_option == $this->options[Options::VIEW_SAVINGS->value] || $select_option == Options::VIEW_SAVINGS->value) {
                $view_savings = new View_Savings();
                $view_savings->loadFromDatabase();
            }
            else if($select_option == $this->options[Options::VIEW_CATEGORIES->value] || $select_option == Options::VIEW_CATEGORIES->value) {
                $view_categories = new View_Categories();
                $view_categories->loadFromDatabase();
            }
            else {
                printf("\nThank you!\n");
                break;
            }
        }
    }
}