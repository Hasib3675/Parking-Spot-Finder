<?php 

	include '../connection.php';
  $conn = new Database();
  session_start();

  	if(isset($_POST['bttn'])){

      $user_id = $_SESSION['id'];
      $car_name = $_POST['car_name'];
      $car_modl = $_POST['car_model'];
      $car_numb = $_POST['car_number'];
      $car_licn = $_POST['car_licence'];
        
      $image_path = "car_pic";
      $car_img = "image";
    
      $upload = new UploadImage();

      $image = $upload->upload_image($image_path, $car_img);
   

    $sql = "INSERT INTO car_info (user_id,c_name,c_model,c_number,licence_num,c_image) VALUES ('".$user_id."','".$car_name."','".$car_modl."' , '".$car_numb."','".$car_licn."','".$image."')";

    if ( $conn->query($sql)) {

        header("Location:owner_info.php");
     }
    else{
      echo "ERROR";
    }
  }

 $conn->close();

 ?>