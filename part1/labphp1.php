<?php

$nameErr = $EmailErr = $genderErr  = $agreeErr = "";   

if ($_SERVER["REQUEST_METHOD"] == "GET") {  
    
    if (empty($_GET["name"])) {  
         $nameErr = "Name is required";  
    }
    if (empty($_GET["mail"])) {  
      $EmailErr = "Email is required";  
   }
   if (empty($_GET["gender"])) {  
      $genderErr = "Gender is required";  
   }
   if (empty($_GET["agree"])) {  
      $agreeErr = "You must agree to terms";  
   }

   }
?>


<html>
   <head>
      <style>
         .error {color: #FF0000;}
         input{margin-left:60px;}
         textarea{margin-left:20px;}
      </style>
   </head>


   <body>
      <h2>Application name : AAST_BIS class registration</h2>
      <p><span class="error">* Required field.</span></p>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         Name: <input type = "text" name = "name" /><span class="error">* <?php echo $nameErr;?> </span> <br>
         E-mail: <input type = "email" name = "mail" /> <span class="error">* <?php echo $EmailErr;?> </span> <br>
         Group#  <input type = "text" name = "group" /> <br>
         Class details:  <textarea name="details" cols="50" rows="5"></textarea> <br>
         Gender: <input type="radio" name="gender" value="Female" />Female
         <input type="radio" name="gender" value="Male" />Male <span class="error">* <?php echo $genderErr;?> </span> <br>
         <label for="courses">Select courses:</label>
         <select name='courses[]' multiple>
            <option>  PHP</option>
            <option>Javascript</option> 
            <option>HTML</option>
            <option>MYSQL</option>
         </select> <br>
         <label for="agree">Agree</label>  
         <input type="checkbox" name="agree" > <span class="error">* <?php echo $agreeErr;?> </span> <br>
         
         <input type = "submit" name="submit" />
      </form>
         
   </body>
</html>
<?php

if(!empty($_GET["name"])) {
   echo "<h2>Your given values are as:</h2>";
    echo "Name: ". $_GET['name']. "<br />";
 }
 if(!empty($_GET["mail"])) {
   echo "E-mail: ". $_GET['mail']. "<br />";
}

 if(!empty($_GET["group"])) {
   echo "Group#: ". $_GET['group']. "<br />";
}
if(!empty($_GET["details"])) {
   echo "Class details: ". $_GET['details']. "<br />";
}

if(!empty($_GET["gender"])) {
   echo "Gender: ". $_GET['gender']. "<br />";
}
if(!empty($_GET["courses"]))
        {
echo "Your courses are :" ;         
foreach ($_GET['courses'] as $courses)
echo " $courses";  
        }
            
?>