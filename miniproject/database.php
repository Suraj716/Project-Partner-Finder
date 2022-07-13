<?php
    $url='localhost';
    $username='root';
    $password='';
    $mini="teammate";
    $con=mysqli_connect($url,$username,$password,$mini);
    if(!$con)
    {
        printf("Error message: %s\n", $mysqli->error);
    }
?>