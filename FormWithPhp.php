<!DOCTYPE html>
<html>
    <head><title> Basic Html Forms </title> </head>
<body>


<form action="" method="post">
  <fieldset>
    <legend > </legend>
      
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name"><br><br>
      
    <label for="lname">Phone</label>
    <input type="text" id="lname" name="phone"><br><br>
      
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
      
     <input type="submit" value="Submit Data" name="submit">  
     
  </fieldset>
    
    
</form>

</body>
</html>

<!-- ========================php code opening Here====================================== -->

<?php
    echo "<br>";
    $getName=$_POST["name"];
    echo "Welcome: " .$getName;
?>
