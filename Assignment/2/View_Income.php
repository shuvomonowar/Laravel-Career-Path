<?php

declare(strict_types=1);

class View_Income
{
    private array $loadArray;
    private array $titleArray;

    public function loadFromDatabase(): void {
        $loadData = new Data_Store();
        $this->loadArray = $loadData->loadFromDatabase();

        $this->titleArray = array(
          "Name:", "Type:", "Amount:"
        );

        for ($i = 0; $i < count($this->loadArray)-1; $i++) {
            if ($this->loadArray[$i][1] === Categories::INCOME->value) {
                for ($j = 0; $j < count($this->titleArray); $j++) {
                    printf($this->titleArray[$j] . $this->loadArray[$i][$j] . "  ");
                }

                printf("\n");
            } else {
                continue;
            }

        }

        printf("\n");
    }
}