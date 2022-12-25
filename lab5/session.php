<?php
session_start();



echo '<pre>';
var_dump($_SESSION);
$id = session_id();
echo "$id" ;
echo '</pre>';

if(isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] +=1 ;
}else{
    $_SESSION['page_count'] = 1;
}

echo "you have viewed my awesome page <span style='color:red'>" . $_SESSION['page_count'] . "</span> in this session." . ".<br>" ;

if($_SESSION['page_count'] > 10) {
    echo "thank you for visting our website <span style='color:green'>10 </span> times";
}

echo '<pre>';
var_dump($_SESSION);
// print_r($_SESSION);
echo '</pre>';
// session_destroy();
// unset($_SESSION['page_count']);
setcookie("$id", " " , time()-1);
echo "$id" ;
// session_regenerate_id();
?>