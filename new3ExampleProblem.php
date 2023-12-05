<?php
    

    if(isset($_POST["submit"])){
        
    $getradius=$_POST["radius"];
    echo "Radius is: ".$getradius;
    echo "<br>";
        
    $calArea = ($getradius * $getradius) * (22/7);
    
    echo "Area is: " .$calArea ."m";

    
    }

?>
