<?php

	session_start();
	require('new-connection.php');

	$sql = "SELECT * FROM quotes ORDER BY id DESC";
	
	$result = $connection->query($sql);

?>
<html>
	<head>
		<title>Main</title>
		<style>
			form{
					width: 600px;
					height: 500px;
					margin: 20 auto;
					border: 1px solid indigo;
					border-radius: 20px;
					padding: 0 20px 20px 20px;
					font-family: 'helvetica';
					background-color: lightgray;
					border-bottom: 10px solid indigo;
					border-right: 8px solid indigo;
					overflow: scroll;
				}
					label, p{
						display: block;
						margin-top: 30px;
					}
					input[type='text']{
						width: 170px;
						display: inline;
						margin-left: 119px;
						width: 200px;
						position: absolute;
					}
					h1{
						width: 600px;
						height: 50px;
						text-align: center;
						position: sticky;
						top: 0;
						margin-top: 0;
						background-color: lightgray;
						padding-top: 20px;

					}
					h2{
						text-align: center;
						border-bottom: 2px solid black;
					}
					h3{
						margin-left: 50px;
					}
		</style>
	</head>
	<body>
		<form action="">
			<h1>Here are the awesome quotes!</h1>
			
<?php		if ($result->num_rows > 0) { ?>
<?php			while($row = mysqli_fetch_assoc($result)) { ?>	
				<h3><?= '"'.$row['quote'].'"'?></h3>
				<h2><?= $row['name'] .' '  .' ' .date("F d, Y") ?></h2>
<?php			} ?>
<?php  		} ?>
		</form>
	</body>
</html>