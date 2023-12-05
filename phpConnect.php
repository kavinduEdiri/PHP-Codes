<?php
    include("dbConnection.php");

    if(isset($_POST['add'])){
        $cusId =$_POST['cusId'];
        $name =$_POST['name'];
        $age =$_POST['age'];
        $city =$_POST['city'];

        echo("Customer Id:" .$cusId);
        echo ("<br>");

        echo ("Name is: " .$name);
        echo ("<br>");

        echo ("Age is".$age);
        echo ("<br>");

        echo ("City is:" .$city);
        echo ("<br>");


        //=============data insert to table ============================
        $sql ="insert into customer(name,age,city) values('$name','$age','$city')" ;
        
        //$ret = mysqli_query($con,$sql);
        $result = mysqli_query($con, $sql);
        
        if($result){
            die("data enter is Failed!");
        }
        else{
            echo "data enter is sucsessful!" ;
        }
    }

?>