<?php
	#WRITE YOUR COMMENT HERE
	//WRITE YOUR COMMENT HERE 
	/*WRITE YOUR COMMENT HERE*/

	//PAG GET NEED GAMITIN IS $_REQUEST OR $_SERVER

	if(isset($_POST["register"]))
	{

	$student_No = $_POST["sid"];
	$lastname = $_POST["ln"];
	$firstname = $_POST["fn"];
	$email_Address = $_POST["email"];
	$password = $_POST["pwd"];
	$birthDate = $_POST["bday"];

	echo "Welcome, " . $lastname . 
		" " . $firstname . "!</br>" .

		"Your ID number is " . $student_No . 
		". </br>

		Your email is " . $email_Address . 
		". </br>

		Your password is " . $password .
		". </br>

		Your birthdate is " . $birthDate .
		". </br>
		The time is " . date('c');


	}
	else
	{
		header('location: register.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<h1 class="text-center">
			<?php
			echo "Welcome, " . $lastname . " " . $firstname;
			?>
			</h1>