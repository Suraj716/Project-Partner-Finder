<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/jpg" href="img/logopp.jpg">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
	<title>Welcome</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="css/home.css">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
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
	<div class="signup-form">
		<form action="home.php" method="post" enctype="multipart/form-data">
			<br>
			<?php
			include 'conn.php';
			include 'conn1.php';
			include 'connLogin.php';
			error_reporting(E_ERROR | E_PARSE);

			$first_name = $_POST["first_name"];

			$sql = mysqli_query($con, "SELECT * FROM `register` WHERE `First_Name`!='$first_name'");
			$row  = mysqli_fetch_array($sql);
			?>
			<br>

			<p class="hint-text"><br><b>Welcome</b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></p>
			<h4>Your possible matches are:</h4>
		</form>
		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Major</h6>
					<h2>JavaScript Fundamentals</h2>
					<a href="#">View all skills <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Proficiency
						</span>
					</div>

					<h2>Naman Singh</h2>
					<button class="btn">Send Request</button>
				</div>
			</div>
		</div>
		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Major</h6>
					<h2>Node JS and Angular JS</h2>
					<a href="#">View all skills <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Proficiency
						</span>
					</div>

					<h2>Avi</h2>
					<button class="btn">Send Request</button>
				</div>
			</div>
		</div>
		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Major</h6>
					<h2>JavaScript Fundamentals</h2>
					<a href="#">View all skills <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Proficiency
						</span>
					</div>

					<h2>Suraj Setty</h2>
					<button class="btn">Send Request</button>
				</div>
			</div>
		</div>
		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Major</h6>
					<h2>Backend Development</h2>
					<a href="#">View all skills <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Proficiency
						</span>
					</div>

					<h2>Sangamesh N Math</h2>
					<button class="btn">Send Request</button>
				</div>
			</div>
		</div>
		<div class="courses-container">
			<div class="course">
				<div class="course-preview">
					<h6>Major</h6>
					<h2>HTML/CSS</h2>
					<a href="#">View all skills <i class="fas fa-chevron-right"></i></a>
				</div>
				<div class="course-info">
					<div class="progress-container">
						<div class="progress"></div>
						<span class="progress-text">
							Proficiency
						</span>
					</div>

					<h2>Ayush Jha</h2>
					<button class="btn">Send Request</button>
				</div>
			</div>
		</div>


	</div>
	<div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div>
</body>

</html>