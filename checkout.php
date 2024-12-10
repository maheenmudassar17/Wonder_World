<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <?php
    include 'header.php';
    ?>
    <style>
           
           :root{
     
     --white: #fff;
     --black: rgb(55, 52, 52);
     --blue: rgb(9, 37, 78);
     --light-color:#666;
     --box-shadow:0 .1rem 1rem rgb(83, 83, 83);
     --border:2rem solid rgba(0,0,0.1);
     --outline:.1rem solid rgba(0,0,0.1);
 
 }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 8rem;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
            text-align: center;
        }

        .cart-item {
            display: flex;
            justify-content: space-between;
            padding: 5px 0;
        }

        .total-amount {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
        }

        .checkout-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: var(--blue);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .checkout-btn:hover {
            background-color: var(--light-color);
        }
        .checkout-btn2{
            display: block;
            width: 100%;
            padding: 10px;
            background-color: var(--blue);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px; 
        }
        .checkout-btn2 a{
            text-decoration: none;
            color:var(--white);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <div id="cart-items"></div>
        <div class="total-amount">Total: $<span id="total-amount">0.00</span></div>
        <form id="checkout-form" action="payment.php" method="GET">
            <input type="hidden" name="cartItems" id="cartItems">
            <input type="hidden" name="totalAmount" id="totalAmount">
            <a class="checkout-btn2" href="products.php">Add More Product</a>
            <button type="submit" class="checkout-btn">Proceed to Payment</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cartItemsContainer = document.getElementById('cart-items');
            const totalAmountElement = document.getElementById('total-amount');
            const cartItemsInput = document.getElementById('cartItems');
            const totalAmountInput = document.getElementById('totalAmount');

            function renderCartItems() {
                let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
                cartItemsContainer.innerHTML = '';
                let totalAmount = 0;

                cartItems.forEach((item, index) => {
                    totalAmount += item.price;

                    const cartItem = document.createElement('div');
                    cartItem.classList.add('cart-item');
                    cartItem.innerHTML = `
                        <span>${item.name}</span>
                        <span>$${item.price.toFixed(2)}</span>
                    `;

                    cartItemsContainer.appendChild(cartItem);
                });

                totalAmountElement.textContent = totalAmount.toFixed(2);
                cartItemsInput.value = JSON.stringify(cartItems);
                totalAmountInput.value = totalAmount.toFixed(2);
            }

            renderCartItems();
        });
    </script>

<?php
include'footer.php';
?>
</body>

</html>
