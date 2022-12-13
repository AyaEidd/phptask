<?php
$nameErr = $EmailErr = $genderErr  = $agreeErr = "";
$name = $email = $group = $gender = $courses = $agree = $details="";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (empty($_GET["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_GET["name"];
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_GET["email"])) {
    $EmailErr = "Email is required";
  } else {
    $email = $_GET["email"];
  }
  if(!empty($_GET["group"])) {
    $group = $_GET["group"];
 }
    
 if(!empty($_GET["details"])) {
    $details = $_GET["details"];
 }

  if (empty($_GET["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_GET["gender"];
  }
  if (empty($_GET["agree"])) {  
    $agreeErr = "You must agree to terms";  
 }else {
    $agree =  $_GET["agree"];
  }
}

?>

<!DOCTYPE HTML>  
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

<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $EmailErr;?></span>
  <br><br>
  Group# : <input type = "text" name = "group" /> 
  <br><br>
  Class details: <textarea name="details" cols="40" rows="5"></textarea> 
  <br><br>
  Gender: <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female" />Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male" />Male 
   <span class="error">* <?php echo $genderErr;?> </span> 
   <br><br>
   <label for="courses">Select courses:</label>
   <select name='courses[]' multiple>
            <option> PHP</option>
            <option>Javascript</option> 
            <option>HTML</option>
            <option>MYSQL</option>
    </select> 
    <br><br>
    <label for="agree">Agree</label>  
    <input type="checkbox" name="agree" <?php if (!empty($agree)) echo "checked";?>> 
    <span class="error">* <?php echo $agreeErr;?> </span> 
    <br><br>
    <input type = "submit" name="submit" value="Submit"/>
 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $group;
echo "<br>";
echo $details;
echo "<br>";
echo $gender;
echo "<br>";
if(!empty($_GET["courses"]))
        {
echo "Your courses are :" ;         
foreach ($_GET['courses'] as $courses)
echo " $courses";  
        }


?>

</body>
</html>