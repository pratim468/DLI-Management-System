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
                            <li class="<?= ($isactive==1)?"active":""; ?>"><a href="MasterHome.php">Home</a></li>
                            <li class="<?= ($isactive==2 || $isactive==3 || $isactive==4|| $isactive==5|| $isactive==6)?"active":""; ?>"><a href="#">Add New</a>
                                   <ul>
                                       <li><a href="GardenDetails.php">Garden Details</a></li>
                                       <li><a href="MasterSignUp.php">Master User</a></li>
                                       <li><a href="GardenSignup.php">Garden User</a></li>
				       <li><a href="PostSignUp.php">Post User</a></li>
				   </ul>
                                    <li class="<?= ($isactive==7 || $isactive==8 || $isactive==9|| $isactive==10|| $isactive==11|| $isactive==12)?"active":""; ?>"><a href="#">All DLI Claims Status Report</a>
                                   <ul>
                                       <li><a href="RAllClaimsM.php">All Claims Report</a></li>
                                       <li><a href="RNewClaimsM.php">New/Entered Claims Report</a></li>
                                       <li><a href="RPassedClaimsM.php">Passed Claims Report</a></li>
                                       <li><a href="RHeldClaimsM.php">Held Claims Report</a></li>
                                       <li><a href="RCancelledClaimsM.php">Cancelled Claims Report</a></li>
				   </ul>
                                    <li class="<?= ($isactive==13 || $isactive==14 || $isactive==15)?"active":""; ?>"><a href="#">Bank Portal Payments</a>
                                   <ul>
                                       <li><a href="Payment.php">Transact Passed Claims</a></li>
                                       <li><a href="RPayment.php">Payment Report</a></li>
                                   </ul>
				    
				    </li>
			</ul>
	</div>
        
	
	
<?php }
?>