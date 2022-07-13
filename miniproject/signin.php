
<!DOCTYPE html>

<head>
  <title>Login</title>
  <link rel="icon" type="image/jpg" href="img/logopp.jpg">
  <link rel="stylesheet" href="css/login.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
</head>

<body>
  <header>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</header>
  <div class="topnav" id="myTopnav">
    <a class="navbar-brand" href="index.php"><img src="img/logopp.jpg" alt="Logo" style="width:40px;"></a>
    <a href="about.php">About</a>
    <a href="signin.php">Sign In</a>
    <a href="signup.php">Sign Up</a>
    <a href="javascript:void(0);" class="icon1" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
  <div class="login-page">
        <div class="form">
            <div class="login">
                <div class="login-header">
                    <h3>LOGIN</h3>
                    <p>Please enter your credentials to login.</p>
                </div>
            </div>
            <form class="login-form" method="post" enctype="multipart/form-data">
                <input type="email" placeholder="email" name="email" required="required">
                <input type="password" placeholder="password" name="pass" required="required" >
                <button type="subimt" name="save">login</button>
                <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if(isset($_POST['save']))
{
    extract($_POST);
    include 'database.php';
    $sql=mysqli_query($con,"SELECT * FROM register where Email='$email' and Password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["Email"]=$row['Email'];
        $_SESSION["First_Name"]=$row['First_Name'];
        $_SESSION["Last_Name"]=$row['Last_Name']; 
        header("Location: detail.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>