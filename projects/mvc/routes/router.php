<?php

class Router {
    // handle takes the method, path and controller
    public static function handle(string $method = 'GET', string $path = '/', $controller = '', string $action = null) {
        // If the methods are different, return false
        if ($method != $_SERVER['REQUEST_METHOD']) {
            echo 'Methods do not match';
            return false;
        }

        // If controller is a function, call it
        if (is_callable($controller)) {
            $controller();
        }
        // Otherwise, require the file
        else {
            $pattern = '#^'.$path.'$#siD';
            if (preg_match($pattern, $_SERVER['REQUEST_URI'])) {
                // If the paths match, import the requested controller
                require_once '../controllers/' . $controller . '.php';
                $controller = new $controller;
                $controller->$action();
                exit();
            }
        }
    }

    public static function get(string $path = '/', $controller = '', $action = null) {
        // To call a static method in the same file, use self::methodName();
        return self::handle('GET', $path, $controller, $action);
    }

    public static function post(string $path = '/', $controller = '', $action = null) {
        return self::handle('POST', $path, $controller, $action);
    }

    public static function put(string $path = '/', $controller = '', $action = null) {
        return self::handle('PUT', $path, $controller, $action);
    }

    public static function patch(string $path = '/', $controller = '', $action = null) {
        return self::handle('PATCH', $path, $controller, $action);
    }

    public static function delete(string $path = '/', $controller = '', $action = null) {
        return self::handle('DELETE', $path, $controller, $action);
    }
}