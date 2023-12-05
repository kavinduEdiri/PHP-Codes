<?php
    // ============================Create connection===============================
    $con = mysqli_connect("localhost","root","");
    if(!$con){
        die("Sorry !, could not connect:".mysql_error());
    }
    else{
       echo "Connection is sucsessful!";
       echo ("<br>");

    }

    //=============================connect database=================================
        $db =mysqli_select_db($con,"cus_detail2") or
        die("not selected");    
            
    //============================close database=====================================
    mysqli_close($con);

?>