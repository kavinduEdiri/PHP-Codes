<?php
    include("dbConnection.php");

    
       
        $name ='bimal';
        $age ='27';
        $city ='matara' ;

        echo ($name);
        echo ("<br>");

        echo ($age);
        echo ("<br>");

        echo ($city);
        echo ("<br>");

        


        //=============data insert to table ============================
        $sql ="insert into customer(name,age,city) values('$name','$age','$city')" ;
        
        //$ret = mysqli_query($con,$sql);
        $result = mysqli_query($con, $sql);
        
        if (!$result) {
            die("Data entry failed: " . mysqli_error($con));
        } else {
            echo "Data entry is successful!";
        }
    

?>