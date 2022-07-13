<?php
include("database.php");
if(isset($_POST['build_team']))
{
    $State= $_POST['State'];
    $District = $_POST['District'];
    $College = $_POST['College'];
    $Email = $_POST['Email'];
    $Tech= $_POST['Tech'];
    $Interest = $_POST['Interest'];
    $Experience = $_POST['Experience'];

    $query = "INSERT INTO `find_team`(`State`, `District`, `College`, `Email`, `Tech`, `Interest`, `Experience`) VALUES ('$State','$District','$College','$Email','$Tech','$Interest','$Experience');";
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