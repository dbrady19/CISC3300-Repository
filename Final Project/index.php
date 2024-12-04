<?php
// Include the controller class
require_once 'controllers/BookController.php';

$controller = new BookController();

// Handle form submission (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'create':
                $controller->createBook();
                break;
            case 'delete':
                $controller->deleteBook();
                break;
        }
    }
} else {
    $controller->listBooks();
}
?>
