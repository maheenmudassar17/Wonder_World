<button onclick="window.location.href='view.php'" class="btn btn-info">Back</button>
<?php 

include "conn.php";

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        
        $first_name = $_POST['first_name'];

        $last_name = $_POST['last_name'];

        $email = $_POST['email'];

        $password = $_POST['password'];

        $sql = "UPDATE `signup` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`password`='$password' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo '<script type="text/javascript">
           window.onload = function () { alert( "Record updated successfully.";); }
           </script>';
           header("Location: view.php");
           exit();

       }else{

           echo "Error:" . $sql . "<br>" . $conn->error;

       }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `signup` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

        $id = $row['id']; 
            
        $first_name = $row['first_name'];

        $last_name = $row['last_name'];

        $email = $row['email'];

        $password = $row['password'];
          

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            First_name:<br>

            <input type="text" name="first_name" value="<?php echo $first_name; ?>">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <br>

            Last_name:<br>

            <input type="text" name="last_name" value="<?php echo $last_name; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Password:<br>

            <input type="password" name="password" value="<?php echo $password; ?>">

            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?>