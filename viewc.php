<!-- <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shifa Properties</title>
  <link rel="icon" type="image/x-icon" href="./Images/logo.jpeg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./Style_sheets/styles.css"> -->
     
     
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wonder World - Toy Shop</title>

     
     <style>
          table{
            width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
    background-color: transparent;
    border-collapse: collapse;
    border-spacing: 0;
          }  
          thead{
            display: table-header-group;
    vertical-align: middle;
    unicode-bidi: isolate;
    border-color: inherit;
          }  
          td{
            padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    box-sizing: border-box;
    display: table-cell;
    unicode-bidi: isolate;

          } 
          tr{
            display: table-row;
    vertical-align: inherit;
    unicode-bidi: isolate;
    border-color: inherit;
}
          
          th{
            vertical-align: bottom;
            border-bottom: 2px solid #ddd;
            padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #ddd;
    text-align: left;
    display: table-cell;
    font-weight: bold;
    unicode-bidi: isolate;
}
h2{
  font-size: 30px;
  margin-top: 20px;
    margin-bottom: 10px;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

.button-view{
  color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.button-view a{
  text-decoration: none;
}
.button-delete{
  color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; 
}

          .container{
            padding-right: 15px;
    padding-left: 15px;
    padding-bottom:12px;
    /* margin-right: auto; */
    margin-left: 60px;
          }
</style>
</head>   
<?php
session_start();

if(!isset($_SESSION["email"])){
    header("location:login.php");
}
?>

<?php
    include("header.php");
    ?>



<?php 

include "conn.php";

$sql = "SELECT * FROM contactus";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                window.location.href = "deletec.php?id=" + id;
            }
        }
    </script>
</head>

<body>

    <div class="container">

        <h2>users</h2>
       
<a class="btn btn-info" href="contactus.php">Form</a>
&nbsp;
<a class="btn btn-info" href="view.php">user Data</a>&nbsp;
<a class="btn btn-info" href="pview.php">orders Data</a>&nbsp;
<a class="btn btn-info" href="viewc.php">Feedback Data</a>&nbsp;
<a class="btn btn-info" href="allview.php">Admin pannel</a>&nbsp;

<br><br>

<table class="table">

    <thead>

        <tr>

        <th>Full Name</th>

        <th>Email</th>

        <th>Massage</th>

        <th>Action</th>

        <!-- <th>Action</th> -->

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['Full_Name']; ?></td>

                    <td><?php echo $row['Email']; ?></td>

                    <td><?php echo $row['Massage']; ?></td>

                    <td>
                                <a class="button-view" href="updatecx.php?id=<?php echo $row['id']; ?>">Edit</a>
                                &nbsp;
                                <a class="button-delete" href="javascript:void(0);" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
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