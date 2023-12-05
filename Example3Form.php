<!DOCTYPE html>
<html>
    <head>
        <style> 
            .button {
              background-color: #4CAF50; /* Green */
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
            }
        
        </style>
    
    </head>
<body>


<form action="Example3FormPhpcodes.php" method="post">
  <fieldset>
    <legend > </legend>
      
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br><br>
      
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>
      
    
     
  </fieldset>
    
    <fieldset>
    <legend ></legend>
      
    <label for="lname">Gender</label><br>
    <input type="radio" id="fname" name="gender" value="male">Male<br><br>
    <input type="radio" id="fname" name="gender" value="female">Female<br><br>
   
      
  </fieldset>
    
    <fieldset>
    <legend > </legend>
      
    <label for="lname">Plece Chose residence</label><br>
    <input type="checkbox" id="fname" name="ch1" value="ch1">Pizza<br><br>
    <input type="checkbox" id="fname" name="ch2" value="ch2" >Chicken<br><br>
    <input type="checkbox" id="fname" name="ch3" value="ch3">Onion<br><br>
      
  </fieldset>
    
    <fieldset>
    <legend > </legend>
        
        <textarea name="textarea1" rows="10" cols="45"> </textarea>
        
  </fieldset>
    
    
    
    <fieldset>
    <legend > </legend>
        
        <label for="lname">Select education Level</label><br>
        <select name="select1">
            <option name="op1" value="High"> High</option>
            <option name="op2" value="Low"> Low</option>
            <option name="op3" value="Medium"> Meduim</option>
        
        </select>
        
  </fieldset>
    
    
    
    
    <fieldset>
    <legend > </legend>
        
        <label for="lname">Select favourite dates</label><br>
        <select name="select1">
            <option name="op11" value="sunday"> Sunday</option>
            <option name="op12" value="monday"> Monday</option>
            <option name="op13" value="friday"> Fridey</option>
        
        </select><br><br><br>
        
        <input type="submit" name="submit" value="Submit Here">
        
  </fieldset>
</form>

</body>
</html>
