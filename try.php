<!DOCTYPE html>
<html>
<head>
    <title>WONDER WORLD the toyshop</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" text="text/css" href="css/style.css">
    <style>
        .cart-container {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #fff;
            border-radius: 10px;
            width: 300px;
        }

        .cart-container h2 {
            color: #333;
            text-align: center;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .remove-from-cart {
            background-color: #ff4d4d;
            border: none;
            color: #fff;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
            margin-left: 10px;
        }

        .remove-from-cart:hover {
            background-color: #ff1a1a;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }

        .checkout {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px 20px;
            background-color: var(--blue);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .checkout:hover {
            background-color: var(--light-color);
        }

        .popup-message {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .popup-message.show {
            display: block;
        }
    </style>
</head>

<?php
// This is the main PHP file where you want to include another PHP file
include 'header.php';
?>
<body>
<center>
    <h1>Our Products</h1>
</center>

<div class="product-heading">
    <h2>Stuff Toys</h2>
</div>
<section id="stuff-toys">
    <section class="main-content">
        <div class="product">
            <img src="image/cuddlycocomelon.webp" alt="Product 1">
            <h3>Cuddle Cocomelon</h3>
            <h3 class="price">$15</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/stuffbear.jpg" alt="Product 2">
            <h3>Stuff Bear</h3>
            <h3 class="price">$20</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/stuff1.webp" alt="Product 3">
            <h3>2-feet Teddy Bear</h3>
            <h3 class="price">$70</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/stuff2.webp" alt="Product 4">
            <h3>Stuff Mickey Mouse</h3>
            <h3 class="price">$70</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/stuff3.webp" alt="Product 5">
            <h3>Stuff Jerry</h3>
            <h3 class="price">$30</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/stuff4.jpg" alt="Product 6">
            <h3>5-feet Teddy Bear</h3>
            <h3 class="price">$150</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>
    </section>
</section>

<div class="product-heading">
    <center>
        <h2>Baby Accessories</h2>
    </center>
</div>
<section id="baby-accessories">
    <section class="main-content">
        <div class="product">
            <img src="image/babycarseat.webp" alt="Product 1">
            <h3>Baby Car Seat</h3>
            <h3 class="price">$240</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/babystroller.webp" alt="Product 2">
            <h3>Baby Stroller</h3>
            <h3 class="price">$300</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/babyswing.webp" alt="Product 3">
            <h3>Baby Swing</h3>
            <h3 class="price">$130</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/babyfeeding.webp" alt="Product 4">
            <h3>Baby Feeding Set</h3>
            <h3 class="price">$170</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/babycarrier.webp" alt="Product 5">
            <h3>Baby Carrier</h3>
            <h3 class="price">$30</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/babywalker.webp" alt="Product 6">
            <h3>Baby Walker</h3>
            <h3 class="price">$180</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>
    </section>
</section>

<div class="product-heading">
    <center>
        <h2>Other Toys</h2>
    </center>
</div>
<section id="other-toys">
    <section class="main-content">
        <div class="product">
            <img src="image/blocks.jpg" alt="Product 1">
            <h3>Blocks</h3>
            <h3 class="price">$240</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/kitchen-set.jpg" alt="Product 2">
            <h3>Kitchen Set</h3>
            <h3 class="price">$300</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/carforkids.jpg" alt="Product 3">
            <h3>Car for Kids</h3>
            <h3 class="price">$130</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/hoverboard.jpg" alt="Product 4">
            <h3>Hoverboard</h3>
            <h3 class="price">$170</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/toycashregister.jpg" alt="Product 5">
            <h3>Toy Cash Register</h3>
            <h3 class="price">$30</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>

        <div class="product">
            <img src="image/dollhouse.jpg" alt="Product 6">
            <h3>Doll House</h3>
            <h3 class="price">$180</h3>
            <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true): ?>
                <button class="add-to-cart" type="submit">Add to Cart</button>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to add to cart.</p>
            <?php endif; ?>
        </div>
    </section>
</section>

<div class="cart-container">
    <h2>Cart</h2>
    <div class="cart-item">
        <span>Item 1</span>
        <span>$10</span>
        <button class="remove-from-cart">Remove</button>
    </div>
    <div class="cart-item">
        <span>Item 2</span>
        <span>$20</span>
        <button class="remove-from-cart">Remove</button>
    </div>
    <div class="total-amount">Total: $30</div>
    <a href="checkout.php" class="checkout">Checkout</a>
</div>

<div class="popup-message" id="popup-message">
    Added to cart successfully!
</div>

<script>
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', () => {
            const popup = document.getElementById('popup-message');
            popup.classList.add('show');
            setTimeout(() => {
                popup.classList.remove('show');
            }, 2000); // Hide the message after 2 seconds
        });
    });
</script>

<?php
include 'footer.php';
?>
</body>
</html>
