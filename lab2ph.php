<?php
// question2
// echo("hello world" .'<br>');
// echo nl2br("hi \r\n hello");

// question2
// echo addcslashes("Hello World!","W");
// echo chop("Hello World!","World!");
// echo ord("h")."<br>";
// echo ord("hello")."<br>"
echo "<br>***********************<br>";
// question3
echo "<pre>";
print_r($_SERVER) ;
// echo var_dump($_SERVER);
echo "</pre>";
echo "<br>***********************<br>";
// question4
$four=array(12,45,10,25) ;
$sum=$four[0]+$four[1]+$four[2]+$four[3] ;
echo $sum .'<br>';
$countfour=count($four) ;
$avg=$sum/$countfour ;
echo $avg .'<br>';
rsort($four) ;

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$arrlength = count($numbers);
for($i = 0; $i < $arrlength; $i++) {
    echo $numbers[$i];
    echo "<br>";
}
echo "<br>***********************<br>";
// question5
$ages=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
asort($ages);
foreach($ages as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>***********************<br>";
  $ages=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
arsort($ages);
foreach($ages as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>***********************<br>";
  $ages=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
ksort($ages);
foreach($ages as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>***********************<br>";
  $ages=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
krsort($ages);
foreach($ages as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }


?>