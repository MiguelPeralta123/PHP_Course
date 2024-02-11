<?php
class Router {
    // handle takes the method, path and filename
    public static function handle(string $method = 'GET', string $path = '/', string $filename = '') {
        // If the methods are different, return false
        if ($method != $_SERVER['REQUEST_METHOD']) {
            echo 'Methods do not match';
            return false;
        }
        // With XAMMP, use "($root . $path == $_SERVER['REQUEST_URI'])"
        //$root = '/php_course/project_7';
        // Without XAMMP, use "($path == $_SERVER['REQUEST_URI'])"
        if ($path == $_SERVER['REQUEST_URI']) {
            // If the paths match, import the requested filename
            require_once $filename;
            exit();
        }
    }
}