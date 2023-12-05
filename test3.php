<?php
    echo "php is calling!";
    echo "<br>";

    /* $name= $_POST['input-01'];
    echo ($name);
    echo "<br>";

    $city =$_POST['input-02'];
    echo($city);
    echo "<br>"; */

    //======================================
    if(isset($_POST['btn-01'])){
        echo ('button click is working!');
        echo "<br>";

        $name= $_POST['input-01'];
        echo ($name);
        echo "<br>";

        $city =$_POST['input-02'];
        echo($city);
    }
?>