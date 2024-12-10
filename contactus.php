<?php 
session_start(); // Start the session

include "conn.php";

if (isset($_POST['submit'])) {
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Massage = $_POST['Massage'];

    $sql = "INSERT INTO contactus (Full_Name, Email, Massage) VALUES ('$Full_Name','$Email','$Massage')";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo '<script type="text/javascript">
                window.onload = function () { 
                    alert("Thanks For Contacting Shifa Properties. Your Message Has Been Sent Successfully!"); 
                }
              </script>';
        // header("Location: viewcon.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

    $conn->close(); 
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Toy Shop</title>

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
 /* }
 body{
    background-image:url(image/chero.webp);   

 } */
 
 


.Chome {

display: flex;
justify-content: center;
border: 0px solid;
background-image : url(../image/hero) no-repeat;
background-position: center;
background-size: cover;
padding-top: 17rem; 
padding-bottom: 29rem;

}

.Chome .ccontent {

text-align: center;
width: 60%;
}

.Chome .ccontent h3{

color:var(--black);
font-size: 3rem;
}

.Chome .ccontent p {

color: var(--light-color);
font-size: 1.5rem;
padding: 1rem 0;
line-height: 1.8;
}


    .checkout-form {
            background-color: var(--white);
            max-width: 700px;
            margin: auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            margin-top: 70px;
            margin-bottom: 20px;
        }
        .checkout-form h2{
            color: var(--blue);
        }
form {
  text-align: center;
}
.form-contact{
  
  margin: 100px 0 0 50px ;
}
.form-group {
  margin-bottom: 20px;
  align-items: center;
  justify-content: center;
  float: center;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight:bolder;

  color:var(--blue);
}

input[type="text"],
input[type="email"],
textarea {
  justify-content: center;
  align-items: center;
  width: 90%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  align-items: center;
  background-color: #6e120b;
  color:#fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}

button:hover {
  background-color: #fff;
  color: #530f0a;
}
    </style>
</head>
<body>
<?php
include 'header.php';
?>

<br><br><br><br><br><br><br><br>

<section class="Chome" id="home" style="background-image:url('./image/heroc.avif');">
        <div class="ccontent">
        <h1>CONTACT US</h1>
        </div>

    </section>   
<form action="" method="POST" class="checkout-form">
        <h2 style="color: var(--blue);">Contact US Form</h2>
        <div class="form-group">
            <label for="name" style="color: var(--blue); font-size:2rem">Full Name:</label>
            <input type="text" name="Full_Name" id="name" required>
        </div>
        <div class="form-group">
            <label for="email" style="color: var(--blue);font-size:2rem">Email:</label>
            <input type="email" name="Email" id="email" required>
        </div>
        <div class="form-group">
            <label for="message" style="color: var(--blue);font-size:2rem">Message:</label>
            <textarea name="Massage" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" id="submit-btn">Submit</button>
        </div>
    </form>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        let errorMessage = '';
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (!name || !email || !message) {
            errorMessage = 'All fields are required.';
        } else if (!validateEmail(email)) {
            errorMessage = 'Please enter a valid email address.';
        }

        if (errorMessage) {
            document.getElementById('error').textContent = errorMessage;
        } else {
            alert('Thank you for your feedback!');
            document.getElementById('contactForm').reset();
        }
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
</script>

<?php
include 'footer.php';
?>
</body>
</html>
