<!DOCTYPE html>
<html>
    <head>
        <title> Basic Html Forms </title>
        <style> 
            input[type=button], input[type=submit], input[type=reset] {
              background-color:aqua;
              border: none;
              color: black;
              padding: 16px 32px;
              text-decoration: none;
              margin: 4px 2px;
              cursor: pointer;
            }
    </style>
    </head>
<body>


<form  method="post" name="form1" action="new2.php">
  <fieldset>
    <legend > </legend>
      
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name"><br><br>
      
    <label for="lname">Age</label>
    <input type="text" id="lname" name="age"><br><br>
      
    
      
     <input type="submit" value="Log In" name="submit" >  
     
  </fieldset>
    
    
</form>

</body>
</html>

<!-- ========================php code opening Here====================================== -->


