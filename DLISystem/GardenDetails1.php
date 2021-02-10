<?php

include 'dbh.php';
$gcode=$_POST['gcode'];
$gname=$_POST['gname'];
$gdistrict=$_POST['gdistrict'];
$gpin=$_POST['gpin'];
 


 $sql="INSERT INTO gardendetails(gcode,gname,gdistrict,gpin)
  VALUES ('$gcode','$gname','$gdistrict','$gpin')";
$result=$conn->query($sql);

	 
 
header("Location:GardenDetails.php");
?>