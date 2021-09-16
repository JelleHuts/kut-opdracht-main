<?php
    //this script reads the value of the file lightStatus.txt and returns that value as a valid JSON using an echo
    echo '{"volume":'.file_get_contents("volume.txt")."}";
?>