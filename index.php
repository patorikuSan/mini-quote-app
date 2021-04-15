<?php
	session_start();
	require('new-connection.php');
	// var_dump($query);
	if(isset($_SESSION['errors'])){
		foreach($_SESSION['errors'] as $error){
			echo "<p>". $error ."</p>";
		}
        unset($_SESSION['errors']);
	}
?>
<html>
	<head>
	<title>Quoting dojo</title>
	<link rel="stylesheet" href="styles.css">
    <style>
    h1{
	font-family: Arial, Helvetica, sans-serif;
	margin: 40 auto;
	text-align: center;
}

form{
	width: 400px;
	min-height: 300px;
	margin: 20 auto;
	border-radius: 20px;
	padding: 10px;
	font-family: 'helvetica';
	background-color: rgb(255, 89, 0);
	border-bottom: 10px solid rgb(85, 5, 108);
	border-right: 8px solid rgb(85, 5, 108);

}
	label, p{
		display: inline-block;
		width: 120px;
		text-align: right;
		margin-top: 10px;
	
	}
	input[type='text']{
		width: 200px;
		margin-top: 30px;
		margin-left: 40px;
	
	}
	input[type='submit']{
		width: 100px;
		margin-top: 30px;
		margin-left: 65px; 
		background-color: aquamarine;
		display: inline;
	
	}

	input[type='email']{
		width: 170px;
		margin-top: 30px;
		margin-left: 40px;
	
	}

	button{
		width: 90px;
		margin-left: 165px;
		background-color: #c3b300;
		cursor: pointer;
		margin-top: 20px;
	}
	textarea{
		display: inline-block;
		width: 200px;
		height: 100px;
		margin-top: 10px;
		margin-bottom: 10px;
		vertical-align: top;
		margin-left: 40px;
	}
	a{
		text-decoration: none;
		background-color: aquamarine;
		margin-left: 70px;
		border: 1px solid black;
		font-family: helvetica;
		font-size: 14px;
		padding: 1px;
		color: black;
	}
    </style>
	</head>
	<body>
		<h1>Welcome to QuotingDojo</h1>
		<form action="process.php" method="POST">

			<label for="name">Your Name</label>
				<input type="text" name="name">
			<label for="quote_box">Your Quote</label>
				<textarea name="quote_box" id="qt" cols="30" rows="10">
			</textarea>
			<input type="hidden" name="action" value="register">
			<input type="submit" value="Add my quote!">
			<a href="main.php">Skip to quotes!</a>
		</form>
	</body>
</html>
