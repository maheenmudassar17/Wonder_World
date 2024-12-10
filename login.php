<?php
include "conn.php";
$host="localhost";
$user="root";
$password="";
$db="wwdb";
session_start();
$data=mysqli_connect($host,$user,$password,$db,3307);
if($data === false) {
    die("Connection error:");
}

$login_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signup WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($data, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION["loggedin"] = true; // Set the session variable
        $_SESSION["email"] = $email;
        if ($row["usertype"] == "user") {
            header("Location: index.php");
            exit();
        } else if ($row["usertype"] == "admin") {
            header("Location: allview.php");
            exit();
        }
    } else {
        $login_error = true;
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($data);
?>

<style>
    /* Style for the login form container */
    .login-container2 {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 92vh;
    background-color: #f5f5f5;
    padding: 10rem;
    background-image: url('image/hero'); /* Add the path to your image here */
    background-size:cover; /* Ensures the image covers the entire container */
    background-position: center; /* Centers the image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
}

/* Style for the login form */
.login-form {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    text-align: center;
}

.login-form h3 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

.login-form .box {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.login-form .btn {
    background-color: var(--blue);
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    margin-top: 10px;
}

.login-form .btn:hover {
    background-color: #0056b3;
}

.login-form p {
    margin-top: 10px;
    font-size: 14px;
    color: #666;
}

.login-form p a {
    color: #007bff;
    text-decoration: none;
}

.login-form p a:hover {
    text-decoration: underline;
}

</style>

<script>
    function showAlert() {
        alert("User not found. Please sign up first.");
        window.location.href = 'signup11.php';
    }
  </script>
<?php
session_start();

if(isset($_SESSION["email"])){
    header("location:index.php");
}
?>  
<?php
include("header.php");
?>

<div class="login-container2" >
<center>
<form action="" method="POST" class="login-form" id="login">
            <h3>login form</h3>
            <input name="email" type="email" placeholder="enter your email" class="box">
            <input name="password" type="password" placeholder="enter your password" class="box">

          <!--  <p>Forgot your password <a href="#">Click here</a></p>-->
            <p>don't have an account <a href="signup11.php">Create now</a></p>

            <input name="submit" type="submit" value="Login Now" class ="btn">
        </form>
        <?php
        if ($login_error) {
            echo '<script type="text/javascript">',
                 'showAlert();',
                 '</script>';
        }
        ?>
        </div>
        <?php
include 'footer.php';
?>
