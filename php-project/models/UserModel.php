<?php
class UserModel {
    // Mock user data
    public function getAllUsers() {
        return [
            ['name' => 'John Doe', 'email' => 'john@example.com', 'age' => 25],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'age' => 30],
            ['name' => 'Mike Johnson', 'email' => 'mike@example.com', 'age' => 35],
        ];
    }
}
?>
