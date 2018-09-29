<?php 
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location:../home/index.php");
    }
    else{

 ?>

  <?php
    include '../connection.php';     
    $conn = new Database();
    $sql = "SELECT * from car_owner";
    $result = $conn->query($sql);
    $info= $conn->fetch_row($result);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Car Owner Profile</title>
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/lnr-icon.css">
    <link rel="stylesheet" href="css/venobox.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  </head>
  <body>
    <!-- start main wrapper .site -->
    <div class="site">
        <!-- start header -->
        <aside class="nav_sidebar">
            <div class="menu_wrapper">
                <div class="header_top">
                    <div class="toggle_icon hidden-xs"><span class="lnr lnr-menu"></span></div>
                    <div class="head_img_wrap" >
                       <img src="images/<?php echo $info['image'];?>">
                    </div>
                    <p class="name"><?php echo $info['name']; ?></p>
                </div>

                <div class="main_menu">
                    <ul>
                        <li><a href="#about"><span class="lnr lnr-user"></span><p>about me</p></a></li>
                        <li><a href="#carinfo"><span class="lnr lnr-car"></span><p>car info</p></a></li>
                        <li><a href="../home/driver_pos.php"><span class="lnr lnr-map-marker"></span><p>Map</p></a></li>
                        <li><a href="update_table.php"><span class="lnr lnr-pencil"></span><p>Update</p></a></li>
                        <li><a href="../home/logout.php"><span class="lnr lnr-home"></span><p>Log Out</p></a></li>
                    </ul>
                </div>
            </div>

        </aside><!-- end header -->

        <!-- menu toggler -->
        <div class="menu_toggler">
            <span class="fa fa-bars" aria-hidden="true"></span>
        </div>
        <!-- menu toggler -->


        <!-- main_content -->
        <div class="main_content">
            <!-- about -->
            <section id="about" class="about single_page">
                <!-- start about_area -->
                <div class="about_area section_padding">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section_title">
                                    <h2>ABOUT You</h2>
                                    <p class="sub_title">You are <?php echo $info['name']; ?></p>
                                </div>
                            </div><!-- .col-md-12 -->
                        </div><!-- row -->

                        <!-- start row -->
                        <div class="row">
                            <!-- col-md-4 -->
                            <div class="col-md-4 col-sm-6 col-lg-4 col-md-offset-0 col-sm-offset-3 v_middle_md">
                                <div class="about_img" >
                                    <img src="images/<?php echo $info['image'];?>">
                                </div>
                            </div><!-- end col-md-4 -->

                            <!-- .col-md-8 -->
                            <div class="col-md-8 col-sm-12 v_middle_md">
                                <!-- about infos -->
                                <div class="about_info">
                                    <ul>
                                        <li>
                                            <p>Full Name</p>
                                            <span><?php echo $info['name']; ?></span>
                                        </li>
                                        <li>
                                            <p>Address</p>
                                            <span><?php echo $info['address']; ?></span>
                                        </li>
                                        <li>
                                            <p>District</p>
                                            <span><?php echo $info['district']; ?></span>
                                        </li>
                                        <li>
                                            <p>City</p>
                                            <span><?php echo $info['city']; ?> </span>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <p>Post Code</p>
                                            <span><?php echo $info['p_code']; ?></span>
                                        </li>
                                        <li>
                                            <p>Country</p>
                                            <span><?php echo $info['country']; ?></span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- about_content -->
                                <div class="about_content hidden_md hidden_sm">
                                    <!-- about_btn -->
                                    <div class="about_btn">
                                       
                                    </div><!-- end about_btn -->
                                </div><!-- end about_content -->
                            </div><!-- end .col-md-8 -->
                        </div><!-- end row -->

                        <!-- start row -->
                        <div class="row">
                            <!-- start col-md-12 -->
                            <div class="col-md-12">
                                <!-- about_content -->
                                <div class="about_content visible_md visible_sm">
                                    <!-- about_btn -->
                                    <div class="about_btn">
                                        <a href="#" class="btn">hire me</a>
                                    </div><!-- end about_btn -->
                                </div><!-- end about_content -->
                            </div><!-- end col-md-12 -->
                            </div><!-- end /.row -->
                    </div><!-- end container -->
                </div><!-- end about_area -->
            </section><!-- end about -->

            <?php
                $sql = "SELECT * from car_info";
                $res = $conn->query($sql);
                $carinfo= $conn->fetch_row($res);
            ?>

            <!-- #carinfo area -->
            <section id="carinfo" class="carinfo section_padding single_page">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section_title">
                                <h2>car information</h2>
                            </div>
                        </div>
                    </div><!-- end .row -->
                    <!-- row -->
                    <center>
                        <div class="row" data-uk-grid="{controls: '#sorting_control'}">
                        <!-- single_item -->
                        <div class="col-md-4  col-xs-12 col-sm-6 md-half-width" data-uk-filter="wordpress">
                            <div class="single_carinfo_item">
                                <figure>
                                    <div class="carinfo_img">
                                       <img src="car_pic/<?php echo $carinfo['c_image'];?>">
                                    </div>
                                </figure>
                            </div>
                        </div><!-- end single_item -->

                        <div class="col-md-8 col-xs-12 col-sm-6 md-half-width" data-uk-filter="wordpress">
                          <!-- about infos -->
                          <div class="about_info">
                              <ul>
                                  <li>
                                      <p>Car Name</p>
                                      <span><?php echo $carinfo['c_name']; ?></span>
                                  </li>
                                  <li>
                                      <p>Car Model</p>
                                      <span><?php echo $carinfo['c_model']; ?></span>
                                  </li>
                                  <li>
                                      <p>Car Number</p>
                                      <span><?php echo $carinfo['c_number']; ?></span>
                                  </li>
                                  <li>
                                      <p>Licence Number</p>
                                      <span><?php echo $carinfo['licence_num']; ?> </span>
                                  </li>
                              </ul>

                              <ul>
                                  <li>
                                      <p>Owner Name</p>
                                      <span><?php echo $info['name']; ?></span>
                                  </li>
                                  <li>
                                      <p>Owner Address</p>
                                      <span><?php echo $info['address']; ?></span>
                                  </li>
                                  <li>
                                      <p>Owner District</p>
                                      <span><?php echo $info['district']; ?></span>
                                  </li>
                                  <li>
                                      <p>Owner City</p>
                                      <span><?php echo $info['city']; ?></span>
                                  </li>
                              </ul>
                          </div>
                        </div>
                      </center>
                    </div><!-- end row -->
                </div><!-- end container -->
            </section>
          </div>
      </div>
    <!-- jquery latest version -->
    <script src="js/jquery-1.12.3.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- jquery easing 1.3 -->
    <script src="js/jquery.easing1.3.js"></script>

    <!-- Owl carousel js-->
    <script src="js/owl.carousel.min.js"></script>

    <!-- venobox js -->
    <script src="js/venobox.min.js"></script>

    <!-- waypoint js -->
    <script src="js/waypoints.min.js"></script>

    <!-- Counter up js-->
    <script src="js/jquery.counterup.min.js"></script>

    <!-- google map js -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBeySPFGz7DIUTrReCRQT6HYaMM0ia0knA"></script>

    <!-- uikit js -->
    <script src="js/uikit.min.js"></script>

    <!-- jquery uikit js -->
    <script src="js/grid.min.js"></script>

    <!-- Typed js -->
    <script src="js/typed.min.js"></script>

    <!-- jQuery tubler js -->
    <script src="js/jquery.tubular.1.0.js"></script>

    <!-- Main js -->
    <script src="js/main.js"></script>

    <!-- GOOGLE MAP JS -->
    <script type="text/javascript" src="js/map.js"></script>
  </body>
</html>
<?php }?>
