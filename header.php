<?php
session_start(); // Ensure session is started

// Check if user is logged in
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WONDER WORLD the toyshop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="logo">
            <i class="fas fa-snowman"></i>Wonder World</a>
        <nav class="navbar">
            <ul>
            <a href="index.php">Home</a>
            <a href="categories.php">Categories</a>
            <a href="products.php">Products</a>
            <a href="blog.php">Blog</a>
            <a href="about.php">About Us</a>
            <a href="contactus.php">Contact Us</a>
        

            <?php
            // Debugging: Display the status of the session variable
            if (isset($_SESSION['loggedin'])) {
                echo "<!-- Logged in status: " . $_SESSION['loggedin'] . " -->";
            } else {
                echo "<!-- Logged in status: not set -->";
            }

            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                                <li><a href="checkout.php">View Cart</a></li>

                <li><a href="logout.php">Log Out</a></li>
            <?php else: ?>
                <li><a href="login.php">Sign In</a></li>
            <?php endif; ?>
            </ul>
        </nav>
    </header>

    <!-- Your main content here -->

  
    <!-- Your JavaScript and other scripts here -->
</body>
</html>
