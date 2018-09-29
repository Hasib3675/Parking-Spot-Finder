<?php 

	include '../connection.php';
  	$conn = new Database();
    session_start();

  	if(isset($_POST['btn'])){

      $user_id = $_SESSION['id'];
      $name = $_POST['cw_name'];
      $addr = $_POST['address'];
      $dist = $_POST['dist'];
      $city = $_POST['city'];
      $code = $_POST['p_code'];
      $country= $_POST['country'];  
     
      $image_path = "owner_pic";
      $owner_img = "img";
    
      $upload = new UploadImage();

      $image = $upload->upload_image($image_path, $owner_img);

      $sql = "INSERT INTO car_owner (user_id,name,address,district,city,p_code,country,image) VALUES ('".$user_id."','".$name."','".$addr."' ,'".$dist."','".$city."','".$code."','".$country."','".$image."')";

      if ( $conn->query($sql)) {
        header("Location:owner_info.php"); 
     }

     else {
        echo "Error try again";
     }

   }

   $conn->close();


 ?>