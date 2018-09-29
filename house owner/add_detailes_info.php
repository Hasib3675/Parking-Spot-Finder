<?php 
  include '../connection.php';
  $conn = new Database();
  session_start();
  if(isset($_POST['bttn'])){

    $image_path = "uploads";
    $owner_img = "image";
    
    $upload = new UploadImage();

    $image = $upload->upload_image($image_path, $owner_img);
       
    $user_id = $_SESSION['id'];
    $name = $_POST['hw_name'];
    $addr = $_POST['address'];
    $dist = $_POST['dist'];
    $city = $_POST['city'];
    $code = $_POST['p_code'];
    $country= $_POST['country'];
    $space = $_POST['space'];
    $check = $_POST['box'];

    $val="";
    foreach($check as $entry){
       $val .= $entry."|";
    }  

    $sql = "INSERT INTO house_owner (user_id,name,house_add,district,city,postal_code,country,car_space,image,park_time) VALUES ('".$user_id."','".$name."','".$addr."' ,'".$dist."','".$city."','".$code."','".$country."','".$space."',
       '".$image."','".$val."')";
       

    if($conn->query($sql)){

      header("location:location.php");
    }


    else{
      echo "ERROR try again".$conn->get_errors();
    }

  }
  $conn->close();

 ?>