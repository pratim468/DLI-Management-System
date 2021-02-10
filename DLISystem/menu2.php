<?php

function create_topmenu($isactive){ ?>
<div class="welcomeUser">Welcome <?= $_SESSION['name']; ?> <span class="logout"><a href="logout.php">Logout</a></span></div>
	<div class="slide banner1">
            <div ><img src="Images/garden2.jpg"></div>
            <div><img src="Images/officepano.jpg"></div>
            <div><img src="Images/gardenworkers.jpg"></div>
            <div><img src="Images/garden5.jpg"></div>
            <div><img src="Images/officeentrance.jpg"></div>
            <div><img src="Images/garden (5).jpg"></div>
	</div>


	<div class="navbar">
			<ul>
                            <li class="<?= ($isactive==1)?"active":""; ?>"><a href="PostHome.php">Home</a></li>
                            <li class="<?= ($isactive==2)?"active":""; ?>"><a href="CVerifyForm.php">DLI Verify</a></li>
                            <li class="<?= ($isactive==3 || $isactive==4 || $isactive==5|| $isactive==6|| $isactive==7|| $isactive==8)?"active":""; ?>"><a href="#">All DLI Claims Status Report</a>
                                   <ul>
                                       <li><a href="RAllClaimsP.php">All Claims Report</a></li>
                                       <li><a href="RNewClaimsP.php">New Claims Report</a></li>
                                       <li><a href="RPassedClaimsP.php">Passed Claims Report</a></li>
                                       <li><a href="RHeldClaimsP.php">Held Claims Report</a></li>
                                       <li><a href="RCancelledClaimsP.php">Cancelled Claims Report</a></li>
				   </ul>
                            <li class="<?= ($isactive==9 || $isactive==10 || $isactive==11)?"active":""; ?>"><a href="#">Bank Portal Payments</a>
                                   <ul>
                                       <li><a href="Payment.php">Transact Passed Claims</a></li>
                                       <li><a href="RPayment.php">Payment Report</a></li>
                                   </ul>
                            
			</ul>
		</div>
        
	
	
<?php }
?>