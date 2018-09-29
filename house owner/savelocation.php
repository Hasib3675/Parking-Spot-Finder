<?php 
	include '../connection.php';
	session_start();
	$conn = new Database();
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
  
if (isset($_POST['bttn'])) {

	$user_id = $_SESSION['id'];

 $sql = "INSERT INTO howner_lat_lng (user_id,lat,lng) VALUES ('$user_id','$lat','$lng')";
       

    if($conn->query($sql)){

      header("location:profile.php");
    }

    else{
      echo "ERROR try again".$conn->get_errors();
    }

  }
  $conn->close();
 ?> 