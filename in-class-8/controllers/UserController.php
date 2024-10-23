<?php

namespace controllers;

use models\User; // Referencing the User model from the models namespace

class UserController {
    public function index() {
        // Instantiate a User object and get all users
        $user = new User();
        var_dump($user->getAllUsers());
    }
}
