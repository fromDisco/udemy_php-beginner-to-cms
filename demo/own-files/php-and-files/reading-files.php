<?php
    $file = "expample.txt";

    if ($handle = fopen($file, 'r')) {
        // echo $content = fread($handle, 100);
        echo $content = fread($hndle, filesize($file));
        fclose($handle);
    }