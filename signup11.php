<?php 

include "conn.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];
 
    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "INSERT INTO signup(first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$password')";

    $result = $conn->query($sql);
 
    if ($result == TRUE) {

      echo '<script type="text/javascript">
      window.onload=function(){alert("New record created successfully.");}

     </script>'; 

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>


<!DOCTYPE html>
<html>
<head>
        <title>WONDER WORLD the toyhsop</title>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       e4eee
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" text="text/css" href="css/signup.css">
    </head>
    <?php
include'header.php';
?>

    <body style="background-image:url('./image/banner1.jpeg');">
        <br><br><br><br><br><br><br>
        <div class="main" >
            <form action="" method="POST">
                <h2 class="first_title">Sign up</h2>
                <p class="first sub title"id="sub_title">It's quick and easy</p>
                <hr />
                <div class="input">
                    <input name="first_name" type="text" placeholder="First Name" class="first_name" id="all" required />
                    <input name="last_name" type="text" placeholder="last name" class="last_name" id="all1" required />
                    <input name="email" type="email" placeholder=" Email Address" class="email" id="all2" required />
                    <br />
                    <input name="password" type="password" placeholder="password" id="all3" required />
                    <br>
                </div> 
                 
                
              
                 
                <br>
                <p class="sub_title_4"> 
                    People who use our service may have uploaded your contact information to <br>Facebook.<a href="#">Learn more</a>.
                    <br><br>By clicking Sign Up, you agree to our Terms,<a href="#"> Privacy Policy</a> and <a href="#"> Cookies Policy</a>.<br> You may receive SMS notifications
                     from us and can opt out at any time.
                </p>
                <input  name="submit" type="submit" value="Sign up" class="submit" />
                <center>
                    <a href="login.php"> Already have an account?</a>
                </center>
            </form>
        </div>
   </body>




   <?php
include 'footer.php';
?>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="js/script.js"></script>





</html>

