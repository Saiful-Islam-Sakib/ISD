<?php 
	$sqlinsert;
	$error = '';
	$name = '';
	$email = '';
	$password = '';
	$re_password = '';
	$confirm = '';

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
		$name = '';
		$confirm_password = '';
	}

	if (isset($_POST["signup"])){
		//clear the value of the variabale
		clean_view();

		//name field check
		if(empty($_POST["name"])) {
			$error .= 'Please Enter your Name.<br>';
		} else {
			$name = clean_text($_POST["name"]);
		 	if(!preg_match("/^[a-zA-Z_ ]*$/",$name)) {
				$error .= 'Only letters , white	space and underscore allowed in name.<br>';
			}
		}

		//email field check
		if (empty($_POST["email"])){
			$error .= 'Please Enter your Email.<br>';
		} else {
			$email = clean_text($_POST["email"]);

			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$error .= 'Invalid email.<br>';
			}
		}

		//Registration password fields
		if(empty($_POST["pass"]) || empty($_POST["re_pass"]))
		{
			$error .= 'Please enter all password.<br>';
		} else {
			$password = clean_text($_POST["pass"]);
			$confirm_password = clean_text($_POST["re_pass"]);
		}

		if (empty($_POST["agree-term"])){
			$error .= 'Check the check box. <br>';
		}

		//if no error and pass matches
		if ($error == '' && $password == $confirm_password) {

			//$password = md5(clean_text($_POST["pass"]));
			$password = clean_text($_POST["pass"]);
			$sqlinsertquery = 'INSERT INTO customer (Name, Email, Password)
							VALUES("'.$name.'","'.$email.'","'.$password.'")';
			
			$sqlinsert = mysqli_query($link, $sqlinsertquery);
			
			//$error .= mysqli_error($link);
			
			clean_view();

		} else if (!empty($_POST["pass"]) && !empty($_POST["re_pass"])){
			$error .= 'password does not match.<br>';
		}
	}
?>