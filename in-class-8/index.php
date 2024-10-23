<?php

// Require the necessary files
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controllers/UserController.php';

use controllers\UserController; // Importing the UserController namespace

// Instantiate the UserController and call the index method
$controller = new UserController();
$controller->index();
