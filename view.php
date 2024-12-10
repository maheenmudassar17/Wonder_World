<!DOCTYPE html>
<html>
    <head>
        <title>WONDER WORLD the toyhsop</title>
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
       
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" text="text/css" href="css/style.css">
    </head>
    <body>
      <?php
      session_start();
      if (!isset($_SESSION["email"])){
        header("location:login.php");
      }
      ?>
        <?php
// This is the main PHP file where you want to include another PHP file
include 'header.php';
?>


<?php 

include "conn.php";

$sql = "SELECT * FROM signup";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</head>

<body>

    <div class="container">

        <br><br><br><br><h2>users</h2>

       
<a class="btn btn-info" href="signup11.php">Form</a>
&nbsp;
<a class="btn btn-info" href="view.php">user Data</a>&nbsp;
<a class="btn btn-info" href="viewc.php">Feedback Data</a>&nbsp;
<a class="btn btn-info" href="pview.php">orders Data</a>&nbsp;
<a class="btn btn-info" href="allview.php">Admin pannel</a>&nbsp;


<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

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

                    <td><?php echo $row['first_name']; ?></td>

                    <td><?php echo $row['last_name']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td>
                                <a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
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
    <?php
include 'footer.php';
?>

</body>

</html>