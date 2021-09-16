<?php
    //this script writes the value of the GET variable lightStatus to the file lightStatus.txt
    if (isset($_GET['volume'])) {
        $file = fopen("volume.txt", "w");
        fwrite($file, $_GET['volume']);
        fclose($file);
    }
    //return an empty JSON (to prevent a JavaScript fetch error)
    echo('{}');
?>