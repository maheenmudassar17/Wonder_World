<style>
    body{
        
    }
   button {
    margin-top:15%;
    margin-bottom:10%;
    margin-left:10%;
    margin-right:10%;
    justify-content: center;
        align-items: center;
  background-color: black;
  border: none;
  padding: 2rem;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    a{
        color: white;
        text-decoration : none;
    }

   
</style>
<?php
session_start();

if(!isset($_SESSION["email"])){
    header("location:login.php");
}
?>
<?php
// This is the main PHP file where you want to include another PHP file
include 'header.php';
?>

<body>
<button  ><a href="pview.php"> TO VIEW ORDERS</a></button>
<button  ><a href="view.php"> TO VIEW USERS</a></button>
<button  ><a href="viewc.php"> TO VIEW FEEDBACKS</a></button>

<?php
include 'footer.php';
?>

</body>
