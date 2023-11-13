<?php

declare(strict_types=1);

class Income
{
    private string $name;
    private Categories $categories;
    private int $amount;

    function getName(): string
    {
        return $this->name;
    }

    function setName(string $name): void
    {
        $this->name = $name;
    }

    function getCategories(): Categories
    {
        return $this->categories;
    }

    function setCategories(Categories $categories): void
    {
        $this->categories = $categories;
    }

    function getAmount(): int
    {
        return $this->amount;
    }

    function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }
}