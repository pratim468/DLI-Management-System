<?php session_start();
include("menu.php");
if(!isset($_SESSION['id'])){
	header("location:MasterLogin.php");
}
?>

<html>
    <head>
            <meta charset="utf-8">
            <title>Garden Details Form</title>
            <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
            <link rel="stylesheet" type="text/css" href="js/slick.css">
            <link rel="stylesheet" type="text/css" href="Styles/Garden.css">
    </head>
    <body style="background-image: url(Images/grs.jpg)">

        <div class="content">
        <?php create_topmenu(2); ?>
        </div>
        <div class="login-box">
            <h1>Garden Details Entry Form</h1>
            <form action="GardenDetails1.php" method="POST">
            <input type="text" name="gcode" placeholder="Garden Code" required><br>
            <input type="text" name="gname" placeholder="Garden Name" required><br>
            <input type="text" name="gdistrict" placeholder="Garden District" required><br>
            <input type="text" name="gpin" placeholder="Garden Pin" required><br>
            <input type="submit" name="update" value="Add" >
            </form>
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
