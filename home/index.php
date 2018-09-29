<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parking spot finder</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">


    <!-- Pixeden Icon Font -->
    <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">

    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- PrettyPhoto -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- PRELOADER -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
 <!-- =========================
     START Header US SECTION
============================== -->
    <section class="header parallax home-parallax page" id="HOME" style="background-image:url(images/1.jpg)">
        <h2></h2>
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                          <a class="navbar-brand" href="#">
                        
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- NAV -->
                            <li><a href="#HOME">HOME</a> </li>
                            <li><a href="#ABOUT">ABOUT </a> </li>
                            <li><a href="#FEATURES">FEATURES</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>

            <!-- loging form -->
             <div class="col-md-10 form-box pull-right" >
                <ul class="nav navbar-nav navbar-right"  style="margin-top:30px; margin-right:55px;">
                    <form method="POST" action="login.php">
                        <label style="color:white">Email:</label>
                        <input type="email" name="email" placeholder="Email.." >

                        <label style="color:white">Password:</label>
                        <input type="Password" name="password" placeholder="Password..">

                        <button type="submit" name="submit" class="btn btn-sm home-btn " style=" padding: 8px 8px;
                                font-size: 12px;
                                border-radius: 10px;">Log In</button>
                     </form>
                </ul>
            </div>    
            <!-- End loging -->

            <div class="container home-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="home_text pull-left col-md-6">
                            <!-- TITLE AND DESC -->
                            <h1>Welcome to our parking spot finder app</h1>
                            <p>Now create your account and enjoy the app. </p>

                            <div class="download-btn">
                            <!-- BUTTON -->
                                <a class="tuor btn wow fadeInRight" href="#ABOUT">Take a tour <i class="fa fa-angle-down"></i></a>
                            </div>
                        </div>
                    <!--form start-->
                    <div class="col-md-6 pull-right container">
                        <div class="col-md-10 form-box pull-right" style="visibility: visible;">
                             <div class="form-top">
                                <div style="color:white">
                                    <h4>Fill up all text field with correct information</h4>
                                </div>
                            </div>
                        <div class="form-bottom contact-form" >

                            <form role="form" action="save_info.php" method="POST" style="color:white">
                                <div id="inval">
                                    <p id="invaild" class="pull-right hidden" style="color:red">Number can't be a name</p>
                                </div>
                                <div class="form-group">
                                    <label for="contact-email">Name:</label>
                                    <input name="user_name" placeholder="Name..." class="contact-email form-control" id="user_name" type="text" onblur="isBlank(this)" onkeydown="check_num(event)">
                                </div>

                                <div class="form-group">
                                    <label  for="contact-email">Email:</label>
                                    <input name="user_email" placeholder="Email..." class="contact-email form-control" id="user_email" type="email" onblur="isBlank(this)">
                                </div>

                                <div id="phinv">
                                    <p id="phinvaild" class="pull-right hidden" style="color:red">Alphabet can't be a phone number</p>
                                </div>
                                <div class="form-group">
                                    <label  for="contact-subject">Mobile Number:</label>
                                    <input name="user_mb_num" placeholder="Mobile Number..." class="contact-subject form-control" id="user_mb_num" type="text" onblur="isBlank(this)" onkeydown="check_alp(event)">
                                </div>

                                <div class="form-group">
                                    <label  for="contact-subject">Password:</label>
                                    <input name="user_pass" placeholder="Password..." class="contact-subject form-control" id="user_pass" type="password" onblur="isBlank(this)">
                                </div>


                                <div>
                                    <p hidden>Please select one</p>
                                    <input type="radio" name="radio_btn" value="House Owner" id="radio_btn">House Owner
                                    <input type="radio" name="radio_btn" value="Car Owner" id="radio_btn">Car Owner
                                </div>

                                <div>
                                    <button type="submit" class="btn home-btn" name="bttn" id="save-val"
                                        style=" padding: 12px 12px;
                                        font-size: 20px;
                                        border-radius: 12px;">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END HEADER SECTION -->




 <!-- =========================
     START ABOUT US SECTION
============================== -->


    <section class="about page" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- ABOUT US SECTION TITLE-->
                    <div class="section_title">
                        <h2>About Us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="inner_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- PHONE -->
                            <img src="images/two.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- TITLE -->
                        <div class="inner_about_title">
                            <h2>Why we are best <br> for you</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="inner_about_desc">

                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s">
                                <!-- ICON -->
                                <div><i class="pe-7s-timer"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                <!-- ICON -->
                                <div><i class="pe-7s-target"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            </div>
                            <!-- END SINGLE DESC -->


                            <!-- SINGLE DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                <!-- ICON -->
                                <div><i class="pe-7s-stopwatch"></i></div>
                                <!-- HEADING DESCRIPTION -->
                                <h3>Lorem ipsum dolor sit amet</h3>
                                <p>Cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                            </div>
                            <!-- END SINGLE DESC -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->
<!-- =========================
     START FEATURES
============================== -->
    <section id="FEATURES" class="features page">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- FEATURES SECTION TITLE -->
                    <div class="section_title wow fadeIn" data-wow-duration="1s">
                        <h2>Features</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                    </div>
                    <!-- END FEATURES SECTION TITLE -->
                </div>
            </div>
        </div>

        <div class="feature_inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 right_no_padding wow fadeInLeft" data-wow-duration="1s">
                        <!-- FEATURE -->

                        <div class="left_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-like"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Creative Design<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>

                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-science"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Modern Look<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="left_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-look"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3>Minimal Layout<span>/</span></h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->

                    </div>
                    <div class="col-md-4">
                        <div class="feature_iphone">
                            <!-- FEATURE PHONE IMAGE -->
                            <img class="wow bounceIn" data-wow-duration="1s" src="images/three.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-4 left_no_padding wow fadeInRight" data-wow-duration="1s">

                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-monitor"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Retina ready</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-phone"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Responsive Ready</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->


                        <!-- FEATURE -->
                        <div class="right_single_feature">
                            <!-- ICON -->
                            <div><span class="pe-7s-gleam"></span></div>

                            <!-- FEATURE HEADING AND DESCRIPTION -->
                            <h3><span>/</span>Clean Code</h3>
                            <p>Lorem ipsum dolor, consectetur sed do adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                        <!-- END SINGLE FEATURE -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES SECTION -->



<!-- =========================
     START CALL TO ACTION
============================== -->
    <div class="call_to_action">
        <div class="container">
            <div class="row wow fadeInLeftBig" data-wow-duration="1s">
                <div class="col-md-9">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-primary btn-action" href="#" role="button">Download Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- END CALL TO ACTION -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.ajaxchimp.langs.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<script type="text/javascript">
                document.getElementById("save-val").addEventListener("click", function(){
                myfunction();
                });
                
                function isBlank(val)
                {
                    if(val.value == "")
                    {
                        val.style.border = "1px solid red";
                        
                    }
                    else
                    {
                        val.style.border = "1px solid green";
                    }

                }

                function myfunction(e){

                    var name = document.getElementById('user_name').value;
                    var email = document.getElementById('user_email').value;
                    var phone = document.getElementById('user_mb_num').value;
                    var password = document.getElementById('user_pass').value;
                    //var radio-btn = document.getElementById('radio_btn').value;

                    if(name == "" || email =="" || phone =="" || password == "" )
                    {
                        alert("All field are required");
                        e.preventDefault();
                        return;
                    }
                    

                    if(email.indexOf('@') == -1 || email.indexOf('.com') == -1){

                        alert("Please insert valid email");
                        document.getElementById("email").style.border="1px solid red";
                        return;
                    }

                }

                function check_num(event)
                {   
                    var x = event.which;
                    if( x >= 48 && x <= 57)
                    {
 
                        document.getElementById("invaild").className="visible";
                        document.getElementById('name').value="";
                    }
                        
                    else{

                        document.getElementById("invaild").className="hidden";
                    }
                
                }
                function check_alp(event)
                {
                    var y = event.which;
                    if(y >= 65 && y <= 126 )
                    {
 
                        document.getElementById("phinvaild").className="visible";
                        document.getElementById('phone').value="";
                    }

                    else{
                        document.getElementById("phinvaild").className="hidden";
                    }
                    
                }


 </script>