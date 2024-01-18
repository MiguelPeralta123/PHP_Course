<?php
class Router {
    // handle takes the method, path and filename
    public static function handle(string $method = 'GET', string $path = '/', string $filename = '') {
        // If the methods are different, return false
        if ($method != $_SERVER['REQUEST_METHOD']) {
            echo 'Methods do not match';
            return false;
        }
        // If the paths match, import the requested filename
        $root = '/php_course/project_7';
        if ($root . $path == $_SERVER['REQUEST_URI']) {
            require_once $filename;
            exit();
        }
    }
}