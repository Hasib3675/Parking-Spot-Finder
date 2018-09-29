<?php
 
	include '../connection.php';
    
    $conn = new Database();

	if(isset($_GET['d'])){

		$id = $_GET['i'];
		$sql = "DELETE FROM house owner WHERE id='$id'";

		if ($conn->query($sql)) {
			header("Location:admin_howner_view.php");
		}
		else{
			echo "ERROR please try again".$conn->get_errors();
		}

	}
	$conn->close();
 ?>