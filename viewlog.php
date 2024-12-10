
<head>
        <title>WONDER WORLD the toyhsop</title>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" text="text/css" href="css/style.css">
    </head>
<header class="header">
    <a href="#" class="logo"> 
        
        <i class='fas fa-snowman'></i>wonder world</a>
        <nav class="navbar">
            <a href="index.php">home </a>
            <a href="categories.php">categories </a>
            <a href="products.php">products </a>
            <a href="blog.php">blog </a>
            <a href="about.php">about us</a>

        </nav>

        <div class="icons">
            <div ><i class="fa-solid fa-bars" id="menu-btn"></i> </div>
            <div ><i class="fa-solid fa-search" id="search-btn"></i> </div>
            <div ><i class="fa-solid fa-shopping-cart" id="cart-btn"></i> </div>
            <div ><i class="fa-solid fa-user" id="login-btn"></i> </div>
           
        </div>

        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search here....."> 
            <label for="search-box" class="fa-solid fa-search"></label>
        </form>


        <div class="shopping-cart">
            <div class="box">
                
            </div>
        </div>

        <form action="" method="POST" class="login-form" id="login">
            <h3>login form</h3>
            <input name="email" type="email" placeholder="enter your email" class="box">
            <input name="password" type="password" placeholder="enter your password" class="box">

          <!--  <p>Forgot your password <a href="#">Click here</a></p>-->
            <p>don't have an account <a href="signup11.php">Create now</a></p>

            <input name="submit" type="submit" value="Login Now" class ="btn">
        </form>


    </header>







<?php 

include "conn.php";

$sql = "SELECT * FROM login";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<script>
    function confirmDelete(id) {
        if (confirm("Are You Sure You Want To Delete this Record ?")){
            window.location.href = "deletelog.php?id=" + id;
        }
    }
</script>

</head>

<body>

    <div class="container">

        <br><br><br><h2>users</h2>
        
<a class="btn btn-info" href="index.php">Form</a>
&nbsp;
<a class="btn btn-info" href="view.php">user Data</a>&nbsp;
<a class="btn btn-info" href="pview.php">orders Data</a>&nbsp;
<a class="btn btn-info" href="viewc.php">Feedback Data</a>&nbsp;
<a class="btn btn-info" href="allview.php">Admin pannel</a>&nbsp;

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>Email</th>

        <th>Password</th>

        <th>Action</th>

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['password']; ?></td>

                    <td>
                                <a class="btn btn-info" href="updatelog.php?id=<?php echo $row['id']; ?>">Edit</a>
                                &nbsp;
                                <a class="btn btn-danger" href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
                </td>
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 
    <footer>
        <center>
            <p id="para"></p>

<script>
function updateTime() {
    var currentDate = new Date();
    document.getElementById('para').innerHTML = currentDate;
}

// Update time initially
updateTime();

// Update time every second (1000 milliseconds)
setInterval(updateTime, 1000);
</script>
        </center>
        <div class="footer-content">
          <div class="footer-column">
            <h3>Customer Service</h3>
            <ul>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Shipping Information</a></li>
              <li><a href="#">Returns & Exchanges</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Company</h3>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Connect</h3>
            <ul>
              <li><a href="#"><ion-icon name="logo-facebook"></ion-icon>Facebook</a></li>
              <li><a href="#"><ion-icon name="logo-twitter"></ion-icon>Twitter</a></li>
              <li><a href="#"><ion-icon name="logo-instagram"></ion-icon>Instagram</a></li>
              <li><a href="#"><ion-icon name="logo-pinterest"></ion-icon>Pinterest</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <h3>Legal</h3>
            <ul>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Site Map</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-copyright">
          <p>Copyright © 2024 The Toy Shop. All rights reserved.</p>
        </div>
      </footer>
    

</body>

</html>