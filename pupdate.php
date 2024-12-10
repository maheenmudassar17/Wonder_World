<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(aboutus.jpg);

            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
        .form-container {
            border: 2px solid #880e5d; /* Dark pink border */
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-container fieldset {
            border: none;
            margin-bottom: 20px;
        }
        .form-container legend {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .form-container label {
            display: block;
            margin-bottom: 5px;
        }
        .form-container input[type="text"],
        .form-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-container input[type="submit"] {
            background-color: #ff1493;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .form-container input[type="submit"]:hover {
            background-color: #e01280;
        }
        .back-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 1em;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        .back-btn:hover {
            background-color: #45a049;
        }
    </style>
    <button onclick="window.location.href='pview.php'" class="btn btn-info">Back</button>
</head>
<body>
<header>
    <center>
        <h1><u>UPDATE PAGE:</u></h1>
    </center>
    </header>
    <div class="container">
        <div class="form-container">
            <?php
            include "conn.php"; // Include your database connection file
                session_start();

if(!isset($_SESSION["email"])){
    header("location:login.php");
 }
            
            // Handle form submission
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = $_POST['id'];
                $cardName = $_POST['card-name'];
                $cardNumber = $_POST['card-number'];
                $expiryDate = $_POST['expiry-date'];
                $cvv = $_POST['cvv'];
                $email = $_POST['email'];
                $totalAmount = $_POST['totalAmount'];
                
                // Update order details in the database
                $sql = "UPDATE orders SET card_name=?, card_number=?, expiry_date=?, cvv=?, email=?, total_amount=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssdsi", $cardName, $cardNumber, $expiryDate, $cvv, $email, $totalAmount, $id);
                
                if ($stmt->execute()) {
                    echo "<p>Order updated successfully!</p>";
                    echo '<a href="pview.php" class="back-btn">Back to Orders</a>';
                    exit(); // Stop further execution
                } else {
                    echo "<p>Error updating order: " . $stmt->error . "</p>";
                }
                
                $stmt->close();
            }
            
            // Display the update form
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                
                // Retrieve order details from the database
                $sql = "SELECT * FROM orders WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $cardName = $row['card_name'];
                    $cardNumber = $row['card_number'];
                    $expiryDate = $row['expiry_date'];
                    $cvv = $row['cvv'];
                    $email = $row['email'];
                    $totalAmount = $row['total_amount'];
            ?>
            <h2>Update Order Details</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Payment Information:</legend>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <label for="card-name">Cardholder Name:</label>
                    <input type="text" id="card-name" name="card-name" value="<?php echo htmlspecialchars($cardName); ?>" required>
                    <br>
                    <label for="card-number">Card Number:</label>
                    <input type="text" id="card-number" name="card-number" value="<?php echo htmlspecialchars($cardNumber); ?>" required>
                    <br>
                    <label for="expiry-date">Expiry Date (MM/YY):</label>
                    <input type="text" id="expiry-date" name="expiry-date" value="<?php echo htmlspecialchars($expiryDate); ?>" required>
                    <br>
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" value="<?php echo htmlspecialchars($cvv); ?>" required>
                    <br>
                    <label for="email">Email Address:</label>
                    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    <br>
                    <label for="totalAmount">Total Amount:</label>
                    <input type="text" id="totalAmount" name="totalAmount" value="<?php echo htmlspecialchars($totalAmount); ?>" required>
                    <br><br>
                  <center>  <input type="submit" value="Update Order" name="update"> </center>
                </fieldset>
            </form>
            <?php
                } else {
                    echo "<p>No order found with ID: $id</p>";
                    echo '<a href="pview.php" class="back-btn">Back to Orders</a>';
                }
                
                $stmt->close();
            } else {
                echo "<p>No order ID specified.</p>";
                echo '<a href="pview.php" class="back-btn">Back to Orders</a>';
            }
            ?>
        </div>
    </div>
</body>
</html>