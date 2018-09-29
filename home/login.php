<?php 

	include '../connection.php';
	$conn = new Database();

	if(isset($_POST['submit'])){

		$lg_email = $_POST['email'];
		$lg_pass  =$_POST['password']; 

		$sql = "SELECT *FROM basic_info WHERE email = '$lg_email' AND password ='$lg_pass' ";
		$res = $conn->query($sql);

		if($conn->num_rows($res)>0){
		$error="?";
       	while ($result = $conn->fetch_row($res)){

          if($result['email'] !== $_POST['email']){

            $error=$error."err_name=true&";
          }
          if($result['password'] == $_POST['password']){
            $error=$error."err_email=true&";
          }

			session_start();
			$_SESSION['id'] = $result['id'];
			$_SESSION['name'] = $result['name'];
			$_SESSION['email'] = $result['email'];
			$_SESSION['number'] = $result['mob_number'];
			$_SESSION['owner'] = $result['w_owner'];

			if($_SESSION['owner'] == 'Car Owner'){

				header("Location:driver_pos.php");
			}
		}
			if($_SESSION['owner'] == 'House Owner'){

			header("Location:../house owner/profile.php");
			}
		}	
		else{
			echo"insert current email or password";
		}
	}
 ?>