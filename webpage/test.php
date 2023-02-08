<?php

    echo"Hi <b>Brooke</b>, why are you late ";
    echo"and you are too coen!!!";
    echo $_GET;

    print_r($_GET);
    $f = fopen("test.json", "a");
    fwrite($f, "This is a file.");
    fclose($f);
?>