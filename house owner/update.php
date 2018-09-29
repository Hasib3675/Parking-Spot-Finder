<?php 
	
	include '../connection.php';
	header("Location:profile.php");
	$conn = new Database();

	
	if(isset($_POST['name'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$password = $_POST['password'];
		$id = $_POST['id'];		

		$sql = "UPDATE info SET name='$name', email='$email', mobile ='$mobile', password ='$password' WHERE id='$id'";
		if ($conn->query($sql)) {

		}
		else{
			echo "ERROR please try again".$conn->get_errors();
		}

	}
	$conn->close();
 ?>