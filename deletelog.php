<?php 

include "view.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `login` WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        // echo "Record deleted successfully.";
        // Redirect to view.php after 2 seconds
        header("Refresh: 0; url=viewlog.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

} 

?>