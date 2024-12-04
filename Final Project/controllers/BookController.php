=<?php
require_once 'models/Book.php';

class BookController {
    // Display all books
    public function listBooks() {
        $books = Book::getAll();
        include 'views/book_list.php';
    }

    // Add a new book
    public function createBook() {
        if ($_POST['title'] && $_POST['author']) {
            Book::create($_POST);
        }
        header('Location: index.php');
    }

    // Delete a book
    public function deleteBook() {
        if ($_POST['id']) {
            Book::delete($_POST['id']);
        }
        header('Location: index.php');
    }
}
?>
