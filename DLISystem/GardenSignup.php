<?php session_start();
require_once("dbh.php");
//include 'dbh.php';
include("menu.php");
if(!isset($_SESSION['id'])){
	header("location:MasterLogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Garden User SignUp</title>
        <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
	<link rel="stylesheet" type="text/css" href="js/slick.css">
        <link rel="stylesheet" type="text/css" href="Styles/SignUp.css">
	<style>
            
	button:hover{
   cursor: pointer;
   
   
			}
        #combo
                    {
                        background: #53ACB7;
                        color: white;
                        height: 30px;
                        width: 260px;

                    }
	</style>
	
</head>
<body style="background-image: url(Images/treespathway.jpg)">
<div class="content">
<?php create_topmenu(2); ?>
<div class="login-box">
    <img src="Images/user.png" class="images">
	<h1>Garden User Sign Up</h1>
        <form action="GardenSignup1.php" method="POST">
        <input type="text" name="first" placeholder="First Name" required><br>
	<input type="text" name="last" placeholder="Last Name" required><br>
	<input type="text" name="uid" placeholder="Username" required><br>
	<input type="password" name="pwd" placeholder="Password" required><br>
        <select name="glgcode" id="combo">
            <option value="--Select">--Select--</option>
            <?php
                 $sql=mysqli_query($conn,"select * from gardendetails where gardendetails.gcode not in (select glgcode from gardenlogin where gardendetails.gcode=gardenlogin.glgcode)");
                 while($rs=mysqli_fetch_array($sql))
                 {
                     $gc=$rs['gcode'];
                     
                    ?>
            <option value="<?php echo $gc; ?>"><?php echo $gc; ?></option>
            
            <?php
                     
                 }
            ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Sign Up" name="sign up">
	</form>
	</div>
</div>
	
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script>
$(document).ready(function(){
      $('.slide').slick({
        autoplay: true,
        accessibility: false,
        arrows: false,
        autoplaySpeed: 3000
      });
    });

</script>

</body>
</html>