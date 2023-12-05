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
              cursor:progress;
            }
    </style>
    </head>
<body>


<form  method="post" name="form1" action="new3ExampleProblem2.php">
  <fieldset>
    <legend > </legend>
      
    <label for="fname">Enter Lenght:</label>
    <input type="text" id="fname" name="length"><br><br>
      
    <label for="fname">Enter height:</label>
    <input type="text" id="fname" name="height"><br><br>  
      
    
      
    
     <input type="submit" value="Calculate Area of Rectangle" name="submit" >  
     
  </fieldset>
    
    
</form>

</body>
</html>

<!-- ========================php code opening Here====================================== -->


