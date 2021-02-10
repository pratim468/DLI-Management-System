<?php session_start();
include("menu.php");
if(!isset($_SESSION['id'])){
	header("location:MasterLogin.php");
}
?>
<html>
<head>
	<title>Master User SignUp</title>
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
	<style>
		

    
	button:hover{
   cursor: pointer;
			}
	</style>
</head>
<body style="background-image: url(Images/gardenmountain.jpeg)" >
<div class="login-box">
    <img src="Images/user.png" class="images">
	<h1>Master User Sign Up</h1>
        <form action="MasterSignUp1.php" method="POST">
        <input type="text" name="first" placeholder="First Name" required><br>
	<input type="text" name="last" placeholder="Last Name" required><br>
	<input type="text" name="uid" placeholder="Username" required><br>
	<input type="password" name="pwd" placeholder="Password" required><br>
	<input type="submit" value="Sign Up" name="sign up">
	</form>
</div>
</body>
</html>



