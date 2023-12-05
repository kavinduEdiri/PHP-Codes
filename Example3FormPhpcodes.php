<?php
    

    if(isset($_POST["submit"])){
        
    // Collect Name    
    $getFirstName=$_POST["fname"];
    echo $getFirstName;
    echo "<br>";

    $getLastName=$_POST["lname"];
    echo $getLastName;
    echo "<br>";
    }


    //Collect Gender
        $selected_radio = $_POST['gender'];
        
        if ($selected_radio == 'male') {
                echo "male";
                echo "<br>";
        }
        
        else if ($selected_radio == 'female') {
                echo "female";
                echo "<br>";

        }


    //Collect checkbox
        if (isset($_POST['ch1'])) {
            echo "pizza" ;
            echo "<br>";
        }

        if (isset($_POST['ch2'])) {
                    echo "Chiken" ;
                    echo "<br>";
                } 

        if (isset($_POST['ch3'])) {
                    echo "Onion" ;
                    echo "<br>";
                }




    //Collect select box data 
    if (isset($_POST['select1'])) {
        $selected_val = $_POST['select1'];
        echo "You selected: " . $selected_val;
    
    }



    if (isset($_POST['select2'])) {
        $selected_val2 = $_POST['select2'];
        echo "You selected: " . $selected_val2;
    
    }



?>
