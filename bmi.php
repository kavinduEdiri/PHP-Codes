<?php

    if(isset($_POST['btn-01'])){
        echo "php file is working"; 
        echo "<br>";

        $height= $_POST['height'];
        echo ($height);
        echo "<br>";

        $weight= $_POST['weight'];
        echo ($weight);
        echo "<br>";

        $calculate = $weight/($height * $height);
        echo ("BMI Value is :" .$calculate);

        

}

?>