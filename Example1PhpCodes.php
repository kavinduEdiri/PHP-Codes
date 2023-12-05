<?php
    

    if (isset($_POST['Submit1'])) {

        $selected_radio = $_POST['gender'];
        
       if($select_radio == "male"){
           echo "Gender is Male!";
       }
        
      else if($select_radio == "female"){
           echo "Gender is Female!".$select_radio;
       }
        
        echo "Test";

    }

?>
