<?php

interface ActionToDatabase
{
    public function storeToDatabase(array $dataArray): void;
    public function loadFromDatabase(): array;
}