<?php 
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location:../home/index.php");
    }
    else{

 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Parkin spot finder</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>

<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple " data-image="assets/img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Information
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>House owner Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              
                        </li>
                        <li>
                            <a href="../home/logout.php">
                                Log out (<?php echo $_SESSION['name']; ?>)
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">


                                <form method="POST" action="add_detailes_info.php" enctype="multipart/form-data">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label>Name</label>
                                                <input name="hw_name" type="text" class="form-control" placeholder="Name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">House Address</label>
                                                <input name="address" type="text" class="form-control" placeholder="House address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>District</label>
                                                <input name="dist" type="text" class="form-control" placeholder="District">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input name="city" type="text" class="form-control" placeholder="City">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Postal code</label>
                                                <input name="p_code" type="number" class="form-control" placeholder="Postal code" >
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input name="country" type="text" class="form-control" placeholder="Country">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Maximum Car Space</label>
                                                <input name="space" type="number" class="form-control" placeholder="How many car can park in your place" value="">
                                            </div>
                                        </div>
                                        
                                         <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="file">Uplode Profile Image</label>
                                                <input name="image" type="file" class="form-control" id="file" >
                                            </div>
                                        </div>
                                    </div>

                                    <p>When people can park car in your garage:</p>

                                        <div>
                                           <input type="Checkbox" name="box[]" value="Day">
                                            <label >DAY(8am-12am)</label>

                                            <input type="Checkbox" name="box[]" value="Afternoon">
                                            <label >Afternoon(12am-8pm)</label>

                                            <input type="Checkbox" name="box[]" value="Night">
                                            <label >NIGHT(8pm-8am)</label>

                                            <input type="Checkbox" name="box[]" value="24hours">
                                            <label >24 HOURS</label>
                                        </div>

                                    <div class="row col-md-12">
                                        <button href="location.php"  type="submit" name="bttn" class="btn btn-info btn-fill pull-right">Next</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="image/1.jpg" style="width:400px, height=300px;" />
                            </div>
                            <div class="content">

                                <p class="description text-center"> 
                                    <?php echo $_SESSION['owner']; ?>  
                                </p>

                                <p class="description text-center"> 
                                    <?php echo $_SESSION['name']; ?>  
                                </p>
                               
                                <p class="description text-center"> 
                                    <?php echo $_SESSION['email']; ?>  
                                </p>         

                                <p class="description text-center"> 
                                    <?php echo $_SESSION['mobile']; ?> 
                                 </p>
                                
                            </div>
                                 </a>

                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a>3 Idiot</a>,Have a great journy with us
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>

<?php
 } 

 ?>