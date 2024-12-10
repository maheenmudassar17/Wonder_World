<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>

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
            padding: 0;
            margin-top:5rem;

        }

        .container {
            margin-top:4rem;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        p {
            color: #666;
        }
        .button 
        {
         padding:1rem;
         margin:1rem;
         background-color: var(--blue);
         border-radius:1rem;
        
        }
        .button a {
             text-decoration:none;
             color: var(--white);
        }
    </style>
</head>
<body><br><br><br><br><br><br>
    <div class="container">
        <h2>Order Confirmation</h2>
        <p>Thank you for your purchase! Your order has been successfully placed.</p>
        <button class="button"><a href="products.php">continue shopping </a></button>
    </div>
<br><br><br><br><br>
    <?php
include'footer.php';
?>
</body>
</html>


