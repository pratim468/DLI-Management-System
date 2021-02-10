<?php session_start();
require_once("dbh.php");
//include 'dbh.php';
include("menu2.php");
if(!isset($_SESSION['id'])){
	header("location:PostLogin.php");
}
?>

<html>
<head>
        <meta charset="utf-8">
        <title>DLI Verify Form</title>
        <link rel="stylesheet" type="text/css" href="Styles/Verify.css">
        <link rel="stylesheet" type="text/css" href="Styles/innerstyle.css?version=1.0.1">
        <link rel="stylesheet" type="text/css" href="js/slick.css">
    
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/slick.js"></script>    
    <script language="javascript">
    $(document).ready(function(){
          

//-------------------------------Changes-------------------------------------------------
    $('#cno').change(function()
      {
         //alert("This");
         //To pass the worker id and fetch related details
         $.getJSON("blockaction1.php", {cno: $('#cno').val()}, function(data){
              //fetch database fields, change WORKER_NAME with your database table's worker name
              $('#wid').val(data['wid']);
              $('#wname').val(data['wname']);
              $('#gcode').val(data['gcode']);
              $('#gender').val(data['gender']);
              $('#claiment').val(data['claiment']);
              $('#crelation').val(data['crelation']);
              $('#dob').val(data['dob']);
              $('#dod').val(data['dod']);
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
            #combo
            {
                background: #53ACB7;
                color: white;
                height: 30px;
                width: 185px;

            }
            #squery
            {
                background: white;
                color: red;
                height: 30px;
                width: 185px;

            }
            #cno
            {
                background: #53ACB7;
                color: white;
                height: 30px;
                width: 185px;

            }
        </style>
</head>
    <body style="background-image: url(Images/garden.jpg)">           
        <form class="" action="CVerifyForm.php" method="POST">
            <div class="loginBox">
            <h2>DLI Claim Verify Form</h2>
            <p>Claim No.<span style="padding-left: 80px;"><select id="cno" name="cno" >
            <option value="--Select--">--Select--</option>
                <?php
                $sql="SELECT * FROM claimdetails ORDER BY cno";
                //$result=$conn->query($sql);
                $result = mysqli_query($conn,$sql);
                //var_dump($result);

                $rows = mysqli_num_rows($result); 
                // get number of rows returned 
                //var_dump($rows);
                if ($rows) {     

                while ($row = mysqli_fetch_array($result)) {         
                      echo '<option value="'.$row['cno'].'">'.$row['cno'].'</option>';
                    }
                    }
                    ?>
                </select>
                    
                    <p></p>        
<p>Worker ID<span style="padding-left: 80px;"><input type="text" name="wid" id="wid"><span style="padding-left: 190px;">
Garden Code<span style="padding-left: 50px;"><input type="text" name="gcode" id="gcode">
<p>Worker Name<span style="padding-left: 50px;"><input type="text" name="wname" id="wname" readonly="readonly"><span style="padding-left: 190px;">
Gender<span style="padding-left: 100px;"><input type="text" name="gender" id="gender" readonly="readonly">
<p>Claiment<span style="padding-left: 85px;"><input type="text" name="claiment" id="claiment" readonly="readonly"><span style="padding-left: 190px;">
Claiment Relation<span style="padding-left: 20px;"><input type="text" name="crelation" id="crelation" readonly="readonly">
<p>Date of Birth<span style="padding-left: 60px;"><input type="text" name="dob" id="dob" readonly="readonly"/><span style="padding-left: 190px;">
Date of Death<span style="padding-left: 50px;"><input type="text" name="dod" id="dod" readonly="readonly"/>
<p>PF No.<span style="padding-left: 105px;"><input type="text" name="pfno" id="pfno" readonly="readonly"><span style="padding-left: 190px;">
PF Sett Amount<span style="padding-left: 30px;"><input type="text" name="pfsa" id="pfsa" readonly="readonly"/>
<p>Status<span style="padding-left: 105px;"><select name="status" id="combo" required>   
                       <option value="Passed">Passed</option>
                       <option value="Held">Held</option>
                       <option value="Cancelled">Cancelled</option>
                      </select><span style="padding-left: 190px;">
DLI Claim Amount<span style="padding-left: 10px;"><input type="text" name="dlica" id="dlica" required>
<p>Status Query<span style="padding-left: 55px;"><input type="text" name="squery" id="squery"> 
<p>Bank<span style="padding-left: 110px;"><input type="text" name="bank" id="bank" readonly="readonly"><span style="padding-left: 20px;">
IFSC<span style="padding-left: 20px;"><input type="text" name="ifsc" id="ifsc" readonly="readonly"><span style="padding-left: 20px;">
Code<span style="padding-left: 30px;"><input type="text" name="code" id="code" readonly="readonly">
<p>Acc No.<span style="padding-left: 90px;"><input type="text" name="acno" id="acno" readonly="readonly"><span style="padding-left: 250px;">
Branch<span style="padding-left: 45px;"><input type="text" name="branch" id="branch" readonly="readonly">
                

    <!--<p>Demo Date<input type="date" name="date" id="send" oninput="result.value=send.value"/><input type="text" id="result">-->
    <p><input type="submit" value="Update" name="submit"/>
    <!--<input type="button" value="Update" name="update">-->
    <input type="reset" value="Reset/Clear">
    </div>
    <div class="content">
      <?php create_topmenu(2); ?>
    </div>
        
    </form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
    $cno = $_POST['cno'];
    $status = $_POST['status'];
    $squery = $_POST['squery'];
    $dlica = $_POST['dlica'];
            $query = "UPDATE claimdetails SET STATUS='$status', SQUERY='$squery', DLICA= '$dlica' WHERE CNO='$cno'";
            $data = mysqli_query($conn, $query);
            if($data)
                {
                    echo '<script language="javascript">alert("Successful"); window.location.href="CVerifyForm.php"</script>';
                }
                else
                {
                     echo '<script language="javascript">alert("Unsuccessful"); window.location.href="CVerifyForm.php"</script>';
                }
}
?>