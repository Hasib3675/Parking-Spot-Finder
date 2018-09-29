<?php 
	include '../connection.php';
	$conn = new Database();

	if(isset($_POST['user_name'])){
		$name = $_POST['user_name'];
		$email = $_POST['user_email'];
		$mobile = $_POST['user_mb_num'];
		$pass = $_POST['user_pass'];
		$owner = $_POST['radio_btn'];

		$sql = "INSERT INTO basic_info (name,email,mob_number,password,w_owner) VALUES ('$name','$email','$mobile','$pass','$owner')";
		

		if($conn->query($sql)){
			if($owner == 'House Owner'){
				session_start();
				$_SESSION['owner'] = $owner;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['mobile'] = $mobile;
			header("Location:../house owner/add_info.php");

			}
			if($owner == 'Car Owner'){
				session_start();
				$_SESSION['owner'] = $owner;
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['mobile'] = $mobile;
				header("Location:../car owner/owner_info.php");
			}
		}

		else{
			echo "ERROR try again".$conn->get_errors();
		}

	}
	$conn->close();

 ?>