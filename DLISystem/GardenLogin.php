<html>
<head>
	<title>Garden Login</title>
        <link rel="stylesheet" type="text/css" href="Styles/style.css">
	<style>
	.error{
		color:red;
	}	

    
	button:hover{
   cursor: pointer;
   background: #7FFFD4;
	color: #000;
			}
	</style>
</head>
<body style="background-image: url(Images/tealeaves.jpeg)" >
<div class="login-box">
    <img src="Images/user.png" class="images">
	<h1>Garden Login</h1>
	<?php if(isset($_GET['loginerror']) && ($_GET['loginerror']==true)) { ?>
	<span class="error">Invalid Username or Password</span>
	<?php } ?>
        <form action="GardenLogin.php" method="post">
        <p>Username</p>
	<input id="input"  type="text" name="uid" placeholder="Enter Your Username" required><br>
	<p>Password</p>
	<input type="password" name="pwd" placeholder="•••••••••" required><br>
	<input type="submit" value="Log In" name="login">
        <input type="button" value="Back to Login" onclick="location = 'LoginType.php'"/>
	</form>
</div>
</body>
</html>
    
    
<?php session_start();
if(isset($_SESSION['id'])){
	header("location:GardenHome.php");
}

include 'dbh.php';

if(isset($_POST['uid']) && $_POST['uid']!=""){

$uid=$_POST['uid'];
$pwd=$_POST['pwd'];

 $sql="SELECT * FROM gardenlogin WHERE uid='".$uid."' AND pwd='".$pwd."'";
 //$result=$conn->query($sql);
  $result = mysqli_query($conn,$sql);
 //var_dump($result);



$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {         
		//echo 'ID: ' . $row['id'] . '<br>';         
		//echo 'Full Names: ' . $row['first'] . ' '.$row['last'].'<br>'; 
		$_SESSION['id']= $row['id'];
		$_SESSION['name']=$row['first'] . ' '.$row['last']. ' '.$row['glgcode'];
                $_SESSION['gcode']=$row['glgcode'];
		header("Location:GardenHome.php");
		}       
		    
	} else{

		header("Location:GardenLogin.php?loginerror=true");
	}


}
?>
