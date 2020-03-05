<?php 
	
	$logedIn = false;
	$user_name = '';

	if (isset($_SESSION["session_email"])){
		$logedIn = true;

		$sqlfetchquery = 'SELECT Name FROM customer WHERE Email="'.$_SESSION["session_email"].'"';

		$result = mysqli_query($link,$sqlfetchquery) or die(mysqli_error());

		$row = mysqli_fetch_assoc($result);

		$user_name = $row["Name"];
	} else {
		$logedIn = false;
	}

?>