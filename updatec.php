<?php
include ("header.php");

include "conn.php"; // Assuming this includes your database connection

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $Full_Name = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Massage = $_POST['Massage'];

    $sql = "UPDATE contactus SET Full_Name='$Full_Name', Email='$Email', Massage='$Massage' WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo '<script type="text/javascript">
                window.onload = function () { alert("Record updated successfully."); }
              </script>';
        header("Location: viewcon.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM contactus WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $Full_Name = $row['Full_Name'];
            $Email = $row['Email'];
            $Massage = $row['Massage'];
            $id = $row['id'];
        }
    } else {
        header('Location: viewc.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Update Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Style_sheets/styles.css"> <!-- Adjust path if necessary -->
    <style>
        /* Insert provided CSS styles here */
        .container {
            padding-right: 15px;
            padding-left: 15px;
            padding-bottom: 12px;
            margin-left: 60px;
        }
        form {
            max-width: 600px;
            margin: auto;
        }
        fieldset {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px; /* Added for spacing */
        }
        legend {
            font-size: 20px;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px; /* Adjusted font size */
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .subscription-form {
      margin-top: 10px;
    }

    .subscription-form input[type="email"] {
      padding: 5px;
      margin-right: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .subscription-form button {
      padding: 5px 10px ;
      background-color: #790e0e;
      margin:5px;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    </style>
</head>
<body>
<br><br><br><br><br><br><br>
    <div class="container">
        <h2>User Update Form</h2>
        <form action="" method="post">
            <fieldset>
                <legend>Personal information:</legend>
                Full Name:<br>
                <input type="text" name="Full_Name" value="<?php echo htmlspecialchars($Full_Name); ?>" required>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <br>
                Email:<br>
                <input type="email" name="Email" value="<?php echo htmlspecialchars($Email); ?>" required>
                <br>
                Massage:<br>
                <textarea name="Massage" rows="5" required><?php echo htmlspecialchars($Massage); ?></textarea>
                <br><br>
                <input type="submit" value="Update" name="update">
            </fieldset>
        </form>
    </div>
    <!-- Footer section or any additional content -->
    <?php
  include 'footer.php';
  ?>