<?php
    

    if(isset($_POST["submit"])){
        
    $getLength=$_POST["length"];
    echo "Length is: ".$getLength;
    echo "<br>";
        
    $getHeight=$_POST["height"];
    echo "Height is: ".$getHeight;
    echo "<br>";    
        
    $calArea = (1/2) * $getHeight *  $getLength;
    
    echo "Rectangle Area is: " .$calArea ."m";

    
    }

?>
