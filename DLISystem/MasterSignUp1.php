<?php

include 'dbh.php';
$first=$_POST['first'];
$last=$_POST['last'];
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
 


 $sql="INSERT INTO masterlogin(first,last,uid,pwd) VALUES ('$first','$last','$uid','$pwd')";
$result=$conn->query($sql);

$_SESSION['last']=$row['lastname'];
	 
 
header("Location:MasterLogin.php");
?>
