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
                            <li class="<?= ($isactive==1)?"active":""; ?>"><a href="GardenHome.php">Home</a></li>
                            <li class="<?= ($isactive==2)?"active":""; ?>"><a href="CEntryForm.php">DLI Entry</a></li>
                            <li class="<?= ($isactive==3 || $isactive==4 || $isactive==5|| $isactive==6|| $isactive==7|| $isactive==8)?"active":""; ?>"><a href="#">All DLI Claims Status Report</a>
                                   <ul>
                                       <li><a href="RAllClaimsG.php">All Claims Report</a></li>
                                       <li><a href="RNewClaimsG.php">Entered Claims Report</a></li>
                                       <li><a href="RPassedClaimsG.php">Passed Claims Report</a></li>
                                       <li><a href="RHeldClaimsG.php">Held Claims Report</a></li>
                                       <li><a href="RCancelledClaimsG.php">Cancelled Claims Report</a></li>
				   </ul>
                            <li><a href="RPayment.php">Payment Report</a></li>

			</ul>
        </div>
	
	
<?php }
?>