<!-- src/views/home.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stat Page</title>
    <link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
<main>
    <section id="featured">
        <h2>Stat Content</h2>
        <ul>
            <?php
            if (isset($statItems) && is_array($statItems)) {
                foreach ($statItems as $item) {
                    echo "<li>" . htmlspecialchars($item['title']) . "</li>";
                }
            } else {
                echo "<li>No featured items available at the moment.</li>";
            }
            ?>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2024 Our Website</p>
</footer>
</body>
</html>