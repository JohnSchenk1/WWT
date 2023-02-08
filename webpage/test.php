<?php

    echo"Hi <b>Brooke</b>, why are you late ";
    echo"and you are too coen!!!<br>";

    print_r($_GET);
    echo "Hello " . $_GET["name"];

    foreach ($_GET as $id){
        echo $id  . "==" . $_GET[$id] . "<br";
    }

    $f = fopen("test.json", "a");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";
?>