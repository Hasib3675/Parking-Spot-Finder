<?php 
	
	include 'connection.php';
	header("Location:http://localhost/site/view.php");
	$conn = new Database();

	
	if(isset($_POST['name'])){

		$name = $_POST['name'];
		$address = $_POST['address'];
		$district = $_POST['district'];
		$city = $_POST['city'];
		$id = $_POST['id'];		

		$sql = "UPDATE car_owner SET name='$name', address='$address', district ='$district', city ='$city' WHERE id='$id'";
		if ($conn->query($sql)) {

		}
		else{
			echo "ERROR please try again".$conn->get_errors();
		}

	}
	$conn->close();
 ?>