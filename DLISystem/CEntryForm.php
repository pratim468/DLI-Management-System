<?php session_start();
//require_once("dbh.php");
include("menu1.php");
include("dbh.php");
if(!isset($_SESSION['id'])){
	header("location:GardenLogin.php");
}
?>

<html>
<head>
        <meta charset="utf-8">
        <title>DLI Entry Form</title>
        <link rel="stylesheet" type="text/css" href="Styles/Entry.css">
        <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
        <link rel="stylesheet" type="text/css" href="js/slick.css">
        
  
    
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>    
    <script language="javascript">
    $(document).ready(function(){
          

//-------------------------------Changes-------------------------------------------------
    $('#wid').change(function()
      {
         //alert("This");
         //To pass the worker id and fetch related details
         $.getJSON("blockaction.php", {wid: $('#wid').val()}, function(data){
              //fetch database fields, change WORKER_NAME with your database table's worker name
              $('#wname').val(data['wname']);
              $('#gcode').val(data['gcode']);
              $('#gender').val(data['gender']);
              $('#claiment').val(data['claiment']);
              $('#crelation').val(data['crelation']);
              $('#dob').val(data['dob']);
              $('#pfno').val(data['pfno']);
              $('#pfsa').val(data['pfsa']);
              $('#bank').val(data['bank']);
              $('#ifsc').val(data['ifsc']);
              $('#code').val(data['code']);
              $('#acno').val(data['acno']);
              $('#branch').val(data['branch']);
            });
      });
		  
//---------------------------------Changes------------------------------------------------        
    $('.slide').slick({
    autoplay: true,
    accessibility: false,
    arrows: false,
    autoplaySpeed: 3000
    });



      });
    </script>
        <style>
            #wid
            {
                background: #53ACB7;
                color: white;
                height: 30px;
                width: 185px;

            }
        </style>
</head>
<body style="background-image: url(Images/hill.jpg )">           
    <form class="" action="CEntryForm1.php" method="POST">
        <div class="loginBox">
        <h2>DLI Claim Entry Form</h2>
        <p>Claim No.<span style="padding-left: 80px;"><input type="text" name="cno">
        <p>Worker ID<span style="padding-left: 80px;"><select id="wid" name="wid" >
        <option value="--Select--">--Select--</option>
            <?php
            $gc=$_SESSION['gcode'];
            $sql="SELECT * FROM worker where trim(gcode)=trim('$gc') ORDER BY wid ";
            //$result=$conn->query($sql);
            $result = mysqli_query($conn,$sql);
            //var_dump($result);

            $rows = mysqli_num_rows($result); 
            // get number of rows returned 
            //var_dump($rows);
            if ($rows) {     

            while ($row = mysqli_fetch_array($result)) {         
                  echo '<option value="'.$row['wid'].'">'.$row['wid'].'</option>';
                }
            }
            ?>
        </select>
<span style="padding-left: 190px;">Garden Code<span style="padding-left: 50px;"><input type="text" name="gcode" id="gcode" readonly="readonly">
<p>Worker Name<span style="padding-left: 50px;"><input type="text" name="wname" id="wname" readonly="readonly"><span style="padding-left: 190px;">
Gender<span style="padding-left: 100px;"><input type="text" name="gender" id="gender" readonly="readonly">
<p>Claiment<span style="padding-left: 85px;"><input type="text" name="claiment" id="claiment" readonly="readonly"><span style="padding-left: 160px;">
Claiment Relation<span style="padding-left: 50px;"><input type="text" name="crelation" id="crelation" readonly="readonly">
<p>Date of Birth<span style="padding-left: 60px;"><input type="text" name="dob" id="dob" readonly="readonly"/><span style="padding-left: 200px;">
Date of Death<span style="padding-left: 40px;"><input type="date" name="dod" id="date"/>
<p>PF No.<span style="padding-left: 105px;"><input type="text" name="pfno" id="pfno" readonly="readonly"><span style="padding-left: 180px;">
PF Sett Amount<span style="padding-left: 50px;"><input type="text" name="pfsa" id="pfsa" readonly="readonly"/>
<p>Bank<span style="padding-left: 110px;"><input type="text" name="bank" id="bank" readonly="readonly"><span style="padding-left: 20px;">
IFSC<span style="padding-left: 20px;"><input type="text" name="ifsc" id="ifsc" readonly="readonly"><span style="padding-left: 20px;">
Code<span style="padding-left: 30px;"><input type="text" name="code" id="code" readonly="readonly">
<p>Acc No.<span style="padding-left: 90px;"><input type="text" name="acno" id="acno" readonly="readonly"><span style="padding-left: 250px;">
Branch<span style="padding-left: 45px;"><input type="text" name="branch" id="branch" readonly="readonly">


    <!--<p>Demo Date<input type="date" name="date" id="send" oninput="result.value=send.value"/><input type="text" id="result">-->
    <p><input type="submit" value="Submit" name="submit">
    <!-- <input type="button" value="Update" name="update">-->
    <input type="reset" value="Reset/Clear">
    </div>
    <div class="content">
      <?php create_topmenu(2); ?>
    </div>
        
    </form>
</body>
</html>
