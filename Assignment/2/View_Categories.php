<?php

declare(strict_types=1);

class View_Categories
{
    private array $loadArray;
    private array $titleArray;

    public function loadFromDatabase(): void {
        $loadData = new Data_Store();
        $this->loadArray = $loadData->loadFromDatabase();

        $this->titleArray = array(
            "Name:", "Type:"
        );

        for ($i = 0; $i < count($this->loadArray)-1; $i++) {
            for ($j = 0; $j < count($this->titleArray); $j++) {
                printf($this->titleArray[$j] . $this->loadArray[$i][$j] . "  ");
            }

            printf("\n");
        }

        printf("\n");
    }
}