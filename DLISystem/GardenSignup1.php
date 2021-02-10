<?php

include 'dbh.php';
$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$glgcode=$_POST['glgcode'];
 


 $sql="INSERT INTO gardenlogin(first,last,uid,pwd,glgcode) VALUES ('$first','$last','$uid','$pwd','$glgcode')";
$result=$conn->query($sql);

	 
 
header("Location:GardenSignup.php");
?>
