<?php
class User {
    private $name;
    private $email;
    private $age;

    // Constructor
    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    // Getters and Setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    // Static Method
    public static function getGreeting() {
        return "Welcome to the User Management System!";
    }
}
?>
