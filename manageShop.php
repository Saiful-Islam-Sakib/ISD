<?php 
	
	$orderby = 'Name';

	$sqlfetchquery = 'SELECT ProductID, Name, cost FROM product ORDER BY '.$orderby;
	//$sqlfetchquery = 'SELECT name FROM user ORDER BY name';
	$result = mysqli_query($link,$sqlfetchquery) or die(mysqli_error());

	$per_page = 8;

	$total_number_of_images = mysqli_num_rows($result);

	$page_num = ceil($total_number_of_images / $per_page);

	$first = 0;
	$last = 0;
	$current_page = 0;

	if (isset($_GET['page'])) {
		$current_page = $_GET['page'];
		$last = $current_page * $per_page;
		$first = $last - $per_page;
	}

	function activate($i){
		if (isset($_GET['page']) and $i == $_GET['page']) {
			return "active";
		}else {
			return "";
		}
	}
		
?>