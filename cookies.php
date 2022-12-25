<?php

setcookie("name","Aya Eid",time()+60);
setcookie("course","PHP",time()+60);

echo '<pre>' ;
var_dump($_COOKIE);
echo '</pre>' ;
?>

<html>
    <head>
        <title>setting cookies with PHP</title>

    </head>
    <body>
        <h1>Hello!</h1>
        <?php
        echo "set cookies ";
        if(isset($_COOKIE["name"]))
        echo "welcome" . $_COOKIE["name"] . "<br />";
        else
        echo "sorry... Not recognized" . "<br />";

        // update
        setcookie("name","Angham");
        //delete
        setcookie("name","Aya Eid", time()-1);
        ?>
    </body>
</html>