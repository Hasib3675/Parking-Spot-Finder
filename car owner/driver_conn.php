<?php 
	
	include '../connection.php';
  $conn = new Database();
  session_start();

  	if(isset($_POST['btn'])){

      $user_id = $_SESSION['id'];
      $d_name = $_POST['d_name'];
      $d_number = $_POST['d_number'];

 	    $image_path = "images";
      $lic_image = "lic_image";
      $driver_img = "d_image";
    
      $upload = new UploadImage();
      $newimage = $upload->upload_image($image_path,$lic_image);
      $image = $upload->upload_image($image_path, $driver_img);  

      $sql = "INSERT INTO driver_info (user_id,d_name,d_number,d_licence,d_image) VALUES ('".$user_id."','".$d_name."','".$d_number."','".$newimage."','".$image."')";

        if( $conn->query($sql)){
          
         header("Location:owner_info.php");;
      }
      else{
        echo"Error Try again";
      }
    }
  $conn->close();

 ?>