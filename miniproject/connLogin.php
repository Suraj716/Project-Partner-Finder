<?php
include 'database.php';

if(isset($_POST['save']))
{
    $first_name= $_POST['first_name'];
    $last_name = $_POST['last_name'];
    

    $query = "INSERT INTO `register`(`first_name`, `last_name`) VALUES ('$first_name','$last_name');";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: signin.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: detail.php");
    }
}
?>