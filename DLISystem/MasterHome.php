<?php session_start();
include("menu.php");
if(!isset($_SESSION['id'])){
	header("location:MasterLogin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Master Home</title>
        <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
	<link rel="stylesheet" type="text/css" href="js/slick.css">
	
</head>
<body style="background-image: url(Images/treespathway.jpg)">
<div class="content">
<?php create_topmenu(1); ?>

	
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
