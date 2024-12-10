<button onclick="window.location.href='viewlog.php'" class="btn btn-info">Back</button>
<?php 

include "conn.php";

    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        
        $email = $_POST['email'];

        $password = $_POST['password'];

        $sql = "UPDATE `login` SET `email`='$email',`password`='$password' WHERE `id`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {
            echo '<script type="text/javascript">
           window.onload = function () { alert( "Record updated successfully.";); }
           </script>';
           header("Location: viewlog.php");
           exit();

       }else{

           echo "Error:" . $sql . "<br>" . $conn->error;

       }

    } 

if (isset($_GET['id'])) {

    $id = $_GET['id']; 

    $sql = "SELECT * FROM `login` WHERE `id`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

        $id = $row['id']; 

        $email = $row['email'];

        $password = $row['password'];
          

        } 

    ?>

        <h2>User Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

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

        header('Location: viewlog.php');

    } 

}

?>