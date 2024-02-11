<?php

class Controller {
    protected function view(string $filename = '', array $data = []) {
        require_once '../views/' . $filename . '.php';
    }
}