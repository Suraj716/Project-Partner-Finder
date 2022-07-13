<?php
include 'database.php';
if(isset($_POST['join_team']))
{
    $State= $_POST['State'];
    $District = $_POST['District'];
    $College = $_POST['College'];
    $Email = $_POST['Email'];
    $Leader_name= $_POST['Leader_name'];
    $Interest = $_POST['Interest'];
    $Project_details = $_POST['Project_details'];

    $query = "INSERT INTO `join_team`(`State`, `District`, `College`, `Email`, `Leader_name`, `Interest`, `Project_details`) VALUES ('$State','$District','$College','$Email','$Leader_name','$Interest','$Project_details');";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Succesfully";
        header("Location: home.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("Location: detail.php");
    }
}
?>