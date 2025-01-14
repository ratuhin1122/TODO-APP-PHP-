<?php
include 'connection.php';

if (isset($_GET['delete'])) {
    $roll = $_GET['delete'];
    
    $sql = "DELETE FROM `task` WHERE roll = $roll";
    $sql_result = mysqli_query($connection, $sql);

    if (!$sql_result) {
        die(mysqli_error($connection));
    } else {
        header("Location: index.php");
    }
}
?>
