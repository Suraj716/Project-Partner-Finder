<!DOCTYPE html>

<head>
  <title>Register</title>
  <link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
  <link rel="stylesheet" href="css/register.css?<?php echo time(); ?>">
  <link rel="icon" type="image/jpg" href="img/logopp.jpg">
</head>

<body>
  <header>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>
  <div class="regristration-page">
    <div class="form">
      <div class="regristration">
        <div class="regristration-header">
          <h3>CREATE AN ACCOUNT</h3>
        </div>
      </div>
      <form class="regristration-form" action="signup_a.php" method="post" enctype="multipart/form-data">
        <input type="text" name="first_name" placeholder="First Name" required="required">
        <input type="text" name="last_name" placeholder="Last Name" required="required">
        <input type="email" name="email" placeholder="Email" required="required">
        <input type="password" name="pass" placeholder="Password" required="required">
        <input type="password" name="cpass" placeholder="Confirm Password" required="required">
        <button type="submit" name="save"> Submit </button>
        <p class="message">Already have an account? <a href="signin.php">Sign in</a>.</p>
      </form>
    </div>
  </div>
</body>


</html>


