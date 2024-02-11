<?php
// Run "cd projects\mvc\public"
// Then run "php -S localhost:8000"

// .htaccess file redirects all requests to this file, so that we can handle them right here
// As .htaccess and index.php are in the same folder, RewriteBase is "/"

require_once '../app/init.php';