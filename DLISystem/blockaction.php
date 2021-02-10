<?php

    include 'dbh.php';
   
    
    $did= $_GET['wid'];
    
    $sql="SELECT * FROM `worker` WHERE wid='".$did."' ";
    //echo $sql;
    $result = mysqli_query($conn,$sql);
    //var_dump($result);
    
    
    //var_dump($row);
    
    
        
        $data = mysqli_fetch_array($result);
               echo json_encode($data);
               

?>


