<?php
class Router {
    // handle takes the method, path and filename to require
    public static function handle(string $method = 'GET', string $path = '/', string $filename = '') {
        // If the methods are different, return false
        if ($method != $_SERVER['REQUEST_METHOD']) {
            echo 'Methods are not the same';
            return false;
        }
        // If the paths are the same, require the corresponding file
        $root = '/php_course/project_7';
        if ($root . $path == $_SERVER['REQUEST_URI']) {
            require_once $filename;
            exit();
        }
    }
}