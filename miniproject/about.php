<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/jpg" href="img/logopp.jpg">
    <title>About</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Link Bootstrap JS and JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link rel="stylesheet" href="css/navbar.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/about.css?<?php echo time(); ?>">

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
    <div class="section1">
        <h1>About US</h1>
        <div class="transparent-box">
        <h3>We developed Project Buddy because we experienced a similar kind of problem and when searched online for a website which could help us find a project partner 
            searched for a website like that and could not find it.</h3>
        <h3>We try to build a solution which can identify peers who are as motivated as you to work on a project, be it a small-scale project created to enhance your learning or a large-scale project which you are planning to commercialize in the future. </h3>
        </div>
        <section id="contact">

        <h1 class="section-header">Contact</h1>

            <div class="contact-wrapper">

                <!-- Left contact page -->

                <form id="contact-form" class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""
                                required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email"
                                value="" required>
                        </div>
                    </div>

                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>

                    <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                        <div class="alt-send-button">
                            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                        </div>

                    </button>

                </form>

                <!-- Left contact page -->

                <div class="direct-contact-container">

                    <ul class="contact-list">
                        <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">City,
                                    State</span></i></li>

                        <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                                        href="tel:1-212-555-5555" title="Give me a call">(212) 555-2368</a></span></i>
                        </li>

                        <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                                        href="mailto:#" title="Send me an email">hitmeup@gmail.com</a></span></i></li>

                    </ul>

                    <hr>
                    <ul class="social-media-list">
                        <li><a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-github" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-codepen" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#" target="_blank" class="contact-icon">
                                <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                    <hr>

                </div>

            </div>

        </section>

    </div>

    <h2>Team & Collaborators</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png">
                        <h4 class="m-b-xs"><strong>Sangamesh</strong></h3>

                            <div class="font-bold">Team Lead</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                        <h4 class="m-b-xs"><strong>Suraj</strong></h3>

                            <div class="font-bold">Full-stack Developer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar3.png">
                        <h4 class="m-b-xs"><strong>Avi Shah</strong></h3>

                            <div class="font-bold">Front-End designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar2.png">
                        <h4 class="m-b-xs"><strong>Shashidhar</strong></h3>

                            <div class="font-bold">Backend designer</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <h2>Advisors</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png">
                        <h4 class="m-b-xs"><strong>Prof.Prabhuraj</strong></h3>

                            <div class="font-bold">Project Guide</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-box center-version">
                    <a href="#profile.html">
                        <img alt="image" class="img-circle" src="https://bootdey.com/img/Content/avatar/avatar6.png">
                        <h4 class="m-b-xs"><strong>Prof.Srinidhi</strong></h3>

                            <div class="font-bold">Mentor</div>
                            <address class="m-t-md">
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                    </a>
                    <div class="contact-box-footer">
                        <div class="m-t-xs btn-group">
                            <a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>
                            <a class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Follow</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>document.querySelector('#contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            e.target.elements.name.value = '';
            e.target.elements.email.value = '';
            e.target.elements.message.value = '';
        });
    </script>
</body>

</html>