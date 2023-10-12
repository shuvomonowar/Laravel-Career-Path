<?php 

namespace App\src\route;

use Closure;

class Router {
    private array $list = [];

    public function get(string $page_name, Closure $closure): void {
        $this->list[] = [
            "req_uri" => $page_name,
            "req_method" => "GET",
            "return_element" => $closure
        ];
    }

    public function post(string $page_name, Closure $closure): void {
        $this->list[] = [
            "req_uri" => $page_name,
            "req_method" => "POST",
            "return_element" => $closure
        ];
    }

    public function run(): void {
        $req_method = $_SERVER["REQUEST_METHOD"];
        $req_uri = trim($_SERVER["REQUEST_URI"], "/");

        foreach($this->list as $item) {
            if($item["req_uri"] === $req_uri && $item["req_method"] === $req_method) {
                $item["return_element"]();
                return;
            }
        }

        die("Item not found :(");
    }

}