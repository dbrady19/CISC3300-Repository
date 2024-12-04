<?php
class Book {
    private static function connect() {
        // Change your database connection details here
        $pdo = new PDO('mysql:host=localhost;port=8889;dbname=book_tracker', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }

    // Get all books from the database
    public static function getAll() {
        $stmt = self::connect()->query("SELECT * FROM books");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Create a new book in the database
    public static function create($data) {
        $stmt = self::connect()->prepare("INSERT INTO books (title, author, genre, description) VALUES (:title, :author, :genre, :description)");
        $stmt->execute([
            ':title' => htmlspecialchars($data['title']),
            ':author' => htmlspecialchars($data['author']),
            ':genre' => htmlspecialchars($data['genre']),
            ':description' => htmlspecialchars($data['description']),
        ]);
    }

    // Delete a book from the database
    public static function delete($id) {
        $stmt = self::connect()->prepare("DELETE FROM books WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }
}
?>
