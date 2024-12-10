<?php
include'conn.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wwdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Enable error reporting for MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get customer details from the POST request
    $cardName = $_POST['card-name'];
    $cardNumber = $_POST['card-number'];
    $expiryDate = $_POST['expiry-date'];
    $cvv = $_POST['cvv'];
    $email = $_POST['email'];
    $cartItemsStr = $_POST['cartItems'];
    $totalAmount = $_POST['totalAmount'];

    // Decode cart items from JSON string
    $cartItems = json_decode($cartItemsStr, true);

    // Start a transaction
    $conn->begin_transaction();

    try {
        // Insert order details into the orders table
        $stmt = $conn->prepare("INSERT INTO orders (card_name, card_number, expiry_date, cvv, email, total_amount) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssd", $cardName, $cardNumber, $expiryDate, $cvv, $email, $totalAmount);
        $stmt->execute();
        $orderId = $stmt->insert_id; // Get the last inserted order ID
        $stmt->close();

        // Insert each item into the order_items table
        $stmt = $conn->prepare("INSERT INTO order_items (order_id, name, price) VALUES (?, ?, ?)");
        foreach ($cartItems as $item) {
            $stmt->bind_param("isd", $orderId, $item['name'], $item['price']);
            $stmt->execute();
        }
        $stmt->close();

        // Commit the transaction
        $conn->commit();
        echo "<p>Order completed successfully!</p>";
        header("location:confirmation.php");
    } catch (Exception $e) {
        // Rollback the transaction if something went wrong
        $conn->rollback();
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }

    // Close the connection
    $conn->close();
} else {
    // Retrieve cart items and total amount from the GET request
    $cartItemsStr = isset($_GET['cartItems']) ? $_GET['cartItems'] : '';
    $totalAmount = isset($_GET['totalAmount']) ? $_GET['totalAmount'] : '0.00';

    // Decode cart items from JSON string
    $cartItems = json_decode($cartItemsStr, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <?php
include'header.php';
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
            padding: 10px;
            margin-top:4rem;
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment</h2>
        <div id="cart-items">
            <?php foreach ($cartItems as $item): ?>
                <div class="cart-item">
                    <span><?php echo htmlspecialchars($item['name']); ?></span>
                    <span>$<?php echo number_format($item['price'], 2); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="total-amount">Total: $<?php echo number_format($totalAmount, 2); ?></div>
        <form id="payment-form" action="payment.php" method="POST">
            <div class="form-group">
                <label for="card-name">Cardholder Name</label>
                <input type="text" id="card-name" name="card-name" required>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="number" id="card-number" name="card-number" required>
            </div>
            <div class="form-group">
                <label for="expiry-date">Expiry Date (MM/YY)</label>
                <input type="text" id="expiry-date" name="expiry-date" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="number" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <input type="hidden" name="cartItems" value='<?php echo htmlspecialchars($cartItemsStr); ?>'>
            <input type="hidden" name="totalAmount" value="<?php echo htmlspecialchars($totalAmount); ?>">
            <button type="submit" class="checkout-btn">Complete Purchase</button>
        </form>
    </div>
</body>

<?php
include'footer.php';
?>
</html>