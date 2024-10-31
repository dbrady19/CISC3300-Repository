<?php
require_once __DIR__ . '/controllers/UserController.php';

$controller = new UserController();

// Routing based on URI and request method
if ($_SERVER['REQUEST_URI'] === '/users' && $_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->getJsonData(); // Serve JSON data
} else {
    $controller->getHtmlPage(); // Serve HTML page
}
?>
