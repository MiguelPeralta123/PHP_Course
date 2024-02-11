<?php

// Import the router.php file to access to the "Router" class methods
require_once '../routes/router.php';

Router::get('/student', 'studentController', 'selectAll');
Router::get('/student/[0-9]*', 'studentController', 'selectById');
Router::get('/student/create', 'studentController', 'insert');