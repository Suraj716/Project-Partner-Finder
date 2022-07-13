<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/jpg" href="img/logopp.jpg">
    <title>Project Partner Finder</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel="stylesheet" href="Style.css?<?php echo time(); ?>">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
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
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
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
    <h1>Project Buddy</h1>
    <img class="mainimg" src="img/team_t.png" alt="mainimg">
    <!-- <div class="quote">
        <span class="left"></span>
        <blockquote>
        ❝Alone we can do so little;
            together we can do so much.❞
        </blockquote>
        <span class="right"></span>
    </div> -->
    


 
    <div class="container"><div class="describe">-Have you ever come across a situation where you are interested in a domain but none of your friends are interested in it?
<br>-Did you ever feel like few more hands which have more expertise than you or equal to you would have done better during a project?<br>
-Do you have difficulty finding a partner who can work on your idea in your college?<br>
-Are you someone who is interested in doing a project in a particular domain but couldn't find a person interested in the same?
<br><b>If your answer is yes, You are in the right place!</b>
</div></div>
<div class="searchbar1">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Find your project partner now!">
            <div class="dropdown">
                <button class="drpbtn">
                    <i class="fa fa-angle-down"></i></button>
                <div class="ctx">
                    <a href="#">Search by Technology</a>
                    <a href="#">Search by College</a>
                    <a href="#">Search by Location</a>
                </div>
            </div>
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>

        </div>
    </div>
    

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="header">

    <p>Our Website -
      Sure to ensure that your project is successful</p>
  </div>
  <div class="row1-container">
    <div class="box box-down cyan">
      <h2>Ram</h2>
      <p>"Thank you Project Buddy. I found my perfect project partner through this website and won all india hackathon!"</p>
      <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
    </div>

    <div class="box red">
      <h2>Team Builder</h2>
      <p>Scans our talent network to create the optimal team for your project</p>
      <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
    </div>

    <div class="box box-down blue">
      <h2>Shobha</h2>
      <p>"I found my best friend and study partner through Project buddy and i am so thankful!"</p>
      <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
    </div>
  </div>
  <div class="row2-container">
    <div class="box orange">
      <h2>Kiara</h2>
      <p>"Project buddy helped me find the perfect team where i could showcase my skills and help their project while getting credit for it too!"</p>
      <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
    </div>
  </div>

</body>

</html>