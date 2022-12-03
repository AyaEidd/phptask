<?php
// QUESTION1
// echo phpinfo();

// QUESTION2
define("WEBSITENAME", "phpcourse");
echo WEBSITENAME."<br>";

// QUESTION3
// echo "<pre>";
// print_r( $_SERVER );
// echo "</pre>";
// echo $_SERVER['SERVER_PORT']
// echo $_SERVER['SERVER_NAME']
// echo $_SERVER['SERVER_ADDR']

// QUESTION4
$age="10";
switch ($age) {
    case $age<5:
      echo 'Stay at home';
      break;
    case $age==5:
      echo 'Go to Kindergarden';
      break;
    case $age>6 and $age<12:
      echo 'Go to grade';
      break;
  }

?>
