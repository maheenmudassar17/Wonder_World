<!DOCTYPE html>
<html lang="en">
    <link rel="icon" type="image/x-icon" href="favicon.jpg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>

<style>
    /* header {
            background-color: #ffbcdb;
            color: #000000;
            padding: 10px;
            text-align: center;
            border: 5px solid rgb(136, 23, 93);
        } */

    </style>

</head>
<body>

    <header>
        <h1><u>DELETE PAGE </u></h1>
    </header>

<?php 

include "conn.php"; 

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM orders WHERE id='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
        echo "Record updated successfully.";
        header("Location: pview.php");
        die();


    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>