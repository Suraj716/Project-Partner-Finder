<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewpoint" content="width=divice-width,initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css?<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/detail.css?<?php echo time(); ?>">
    <link rel="icon" type="image/jpg" href="img/logopp.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">


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
    <div class="container">
        <div class="bluebg">
            <div class="box buildteam">
                <h2> <b>Willing to build a team</b> </h2>
                <button class="bteam"><b>Build team</b></button>
            </div>
            <div class="box jointeam">
                <h2> <b>Willing to join a team </b></h2>
                <button class="jteam"><b>Join team</b></button>
            </div>
        </div>




        <div class="formbx">
            <div class="form buildteam">
                <form action="conn.php" method="POST">
                    <h3><b>Build Team</b></h3>
                    <select name="State" class="form-control" required>
                        <option value="">Select State</option>
                        <option value="Karnataka">Kar</option>
                        <option value="Kerala">Ker</option>
                        <option value="Delhi">Del</option>
                        <option value="AP">AP</option>
                        <option value="Maharastra">MH</option>
                    </select>
                    <input type="text" name="District" placeholder="Enter your District" class="form-control" required>
                    <select name="College" class="form-control" required>
                        <option value="">Select College</option>
                        <option value="RU">REVA UNIVERSITY</option>
                        <option value="PU">PRESIDENCY UNIVERSITY</option>
                        <option value="BMSIT">BMSIT</option>
                        <option value="MVIT">MVIT</option>
                        <option value="NITTE">NITTE</option>
                    </select>
                    <input type="email" name="Email" placeholder="Enter your email" class="form-control" required>
                    <select name="Tech"  class="form-control" required>
                        <option value="">Select Tech</option>
                        <option value="c++">C++</option>
                        <option value="c#">C#</option>
                        <option value="php">Php</option>
                        <option value="java">Java</option>
                        <option value="js">JS</option>
                        <option value="html">Html</option>
                        <option value="css">CSS</option>
                        <option value="firebase">Firebase</option>
                        <option value="python">Python</option>
                    </select>
                    <input type="Text" name="Interest" placeholder="Enter your area of interest" class="form-control" required>
                    <textarea  name="Experience" placeholder="Enter your experience of working " class="form-control" required></textarea>
                    <input type="submit" name="build_team" value="Find mate">
                    <!-- <button type="submit" name="save_select" class="btn btn-primary">Build Team</button> -->
                </form>
            </div>

            <div class="form jointeam">
                <form action="conn1.php" method="POST">
                    <h3><b>Join Team</b></h3>
                    <select name="State" required>
                        <option value="">Select State</option>
                        <option value="Karnataka">Kar</option>
                        <option value="Kerala">Ker</option>
                        <option value="Delhi">Del</option>
                        <option value="AP">AP</option>
                        <option value="Maharastra">MH</option>
                    </select>
                    <input type="text" name="District" placeholder="Enter your District" required>
                    <select name="College" required>
                        <option value="">Select College</option>
                        <option value="RU">REVA UNIVERSITY</option>
                        <option value="PU">PRESIDENCY UNIVERSITY</option>
                        <option value="BMSIT">BMSIT</option>
                        <option value="MVIT">MVIT</option>
                        <option value="NITTE">NITTE</option>
                    </select>
                    <input type="email" name="Email" placeholder="Enter your email" required>
                    <input type="text" name="Leader_name" placeholder="Enter team Leader's Name" required>
                    <input type="Text" name="Interest" placeholder="Enter your area of interest" required>
                    <textarea  name="Project_details" placeholder="Enter your project Details" required></textarea>
                    <!-- <input type="submit" value="Find team" name="Find_team> -->
                    <input type="submit" name="join_team" value="Join team">

                </form>
            </div>
        </div>
    </div>
    <script>
        const bteam = document.querySelector('.bteam');
        const jteam = document.querySelector('.jteam');
        const formbx = document.querySelector('.formbx');
        const body = document.querySelector('body')
        jteam.onclick = function() {
            formbx.classList.add('active')
            body.classList.add('active')

        }
        bteam.onclick = function() {
            formbx.classList.remove('active')
            body.classList.remove('active')

        }
    </script>
</body>

</html>