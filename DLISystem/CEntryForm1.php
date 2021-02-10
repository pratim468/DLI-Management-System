<?php session_start();

include 'dbh.php';

$cno=$_POST['cno'];
$wid=$_POST['wid'];
$gcode=$_POST['gcode'];
$wname=$_POST['wname'];
$gender=$_POST['gender'];
$claiment=$_POST['claiment'];
$crelation=$_POST['crelation'];
$dob=$_POST['dob'];
$dod=$_POST['dod'];
$pfno=$_POST['pfno'];
$pfsa=$_POST['pfsa'];
//$status=$_POST['status'];
//$dlica=$_POST['dlica'];
$bank=$_POST['bank'];
$ifsc=$_POST['ifsc'];
$code=$_POST['code'];
$acno=$_POST['acno'];
$branch=$_POST['branch'];

//$sql="INSERT INTO entry(cno,dod) VALUES ('$cno','$dod')";

$sql="INSERT INTO claimdetails(cno,wid,wname,gcode,gender,claiment,crelation,dob,dod,"
         . "pfno,pfsa,bank,ifsc,code,acno,branch) VALUES "
         . "('$cno','$wid','$wname','$gcode','$gender','$claiment','$crelation','$dob','$dod','$pfno','$pfsa',"
         . "'$bank','$ifsc','$code','$acno','$branch')";
 
$result=$conn->query($sql);

header("Location:CEntryForm.php");
?>
