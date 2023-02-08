<?php

    echo"Hi <b>Brooke</b>, why are you late ";
    echo"and you are too coen!!!";

    print_r($_GET);
    echo "Hello" . $_GET["name"];
    $f = fopen("test.json", "a");
    fwrite($f, "This is a file.");
    fclose($f);
    echo "Saved";
?>