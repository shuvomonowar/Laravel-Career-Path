<?php

declare(strict_types=1);

require_once "./ActionToDatabase.php";

class Data_Store implements ActionToDatabase
{
    private string $database_path = "./model/remuneration_data.txt";

    private array $loadData;

    private array $dataArray;

    function storeToDatabase(array $dataArray): void
    {
        $this->dataArray = $dataArray;
        file_put_contents($this->database_path, serialize($this->dataArray) . PHP_EOL, FILE_APPEND);
    }

    function loadFromDatabase(): array
    {
        $tmpData = file_get_contents($this->database_path);
        $sep_line = explode(PHP_EOL, $tmpData);

        foreach ($sep_line as $load_data) {
            $this->loadData[] = unserialize($load_data);
        }

        return $this->loadData;
    }
}