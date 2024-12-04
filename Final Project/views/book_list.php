<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Tracker</title>
    <link rel="stylesheet" href="public/style.css">
</head>
<body>
    <header>
        <h1>Online Book Tracker</h1>
    </header>

    <section>
        <h2>Add a New Book</h2>
        <form action="index.php" method="POST">
            <input type="hidden" name="action" value="create">
            <input type="text" name="title" placeholder="Enter book title" required>
            <input type="text" name="author" placeholder="Enter author name" required>
            <input type="text" name="genre" placeholder="Genre (optional)">
            <textarea name="description" placeholder="Book description (optional)"></textarea>
            <button type="submit">Add Book</button>
        </form>
    </section>

    <section>
        <h2>Book List</h2>
        <ul>
            <!-- Loop through books and display them -->
            <?php foreach ($books as $book): ?>
                <li>
                    <strong><?= htmlspecialchars($book['title']) ?></strong> by <?= htmlspecialchars($book['author']) ?>
                    <p><em>Genre:</em> <?= htmlspecialchars($book['genre']) ?: "N/A" ?></p>
                    <p><em>Description:</em> <?= htmlspecialchars($book['description']) ?: "No description available" ?></p>

                    <!-- Delete form -->
                    <form action="index.php" method="POST" style="display: inline;">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?= $book['id'] ?>">
                        <button type="submit">Delete</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>
