<?php
// .htaccess file redirects all requests to this file, so that we can handle them right here

// Import the router.php file and call the method to check if the path matches any of the routes
require_once './router.php';
Router::handle('GET', '/about', 'about.php');
Router::handle('GET', '/contact', 'contact.php');

// If no matches were found, print a message
echo 'Path does not match any routes';