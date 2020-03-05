<?php

	$error = '' ;
	$email = '';
	$password = '';
	$remember = false;

	function clean_text($string) {
		$string = trim($string);
		$string = stripslashes($string);
		$string = htmlspecialchars($string);
		return $string;
	}

	function clean_view(){
		$error = '';
		$email = '';
		$password = '';
		$remember = false;
	}

	if(isset($_POST["signin"])) {
		//login email field chek
		clean_view();

		if(empty($_POST["email"])) {
			$error .= 'Enter your Email.<br>';
		} else {
			$email = clean_text($_POST["email"]);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error .= 'Invalid email.<br>';
			}
		}

		//login password field
		if(empty($_POST["your_pass"]))
		{
			$error .= 'Enter password.<br>';
		} else {
			$password = clean_text($_POST["your_pass"]);
		}

		//if no error
		if($error == '') {

			//$password = md5($password);
			
			$sqlfetchquery = 'SELECT Name, Email FROM customer WHERE Email="'.$email.'" AND Password="'.$password.'"';

			$result = mysqli_query($link,$sqlfetchquery) or die(mysqli_error());

			$noOfData = mysqli_num_rows($result);

			if ($noOfData == 1){
				
				$_SESSION["session_email"] = $email;
				
				header("Location: http://localhost/ComputerCenter/index.php");
				
				clean_view();
			}
			else
				$error .= 'user email or password does not matche.<br>';
		}
	}

?>