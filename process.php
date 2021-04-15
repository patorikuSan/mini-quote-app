<?php
	session_start();
	require('new-connection.php');

	if(isset($_POST['action']) && $_POST['action'] == 'register'){
		$errors = array();
		$name = $_POST['name'];
		$quote_box = $_POST['quote_box'];
		if(empty($name)){
			$errors[] = "please enter name";
		}
		if(empty($quote_box)){
			$errors[] = "Quote field should not be blank";
		}
		if(count($errors) > 0){
			$_SESSION['errors'] = $errors;
			header("Location: index.php");
		} else {

			$sql = "INSERT INTO `quotes` (`name`, `quote`, `created_at`) VALUES ('$name', '$quote_box', now())";
			$result = $connection->query($sql);
		   
			if($result == TRUE){
				$_SESSION['name'] = $name;
				$_SESSION['quote_box'] = $quote_box;
				$_SESSION['message'] = "Your information was valid";
				header("Location: main.php");
				die(); 
			} else {
				$_SESSION['message'] = "Information entered is invalid";
			}
			$connection->close();
		}

	}
?>