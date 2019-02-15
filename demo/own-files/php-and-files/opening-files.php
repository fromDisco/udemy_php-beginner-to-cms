<?php

    $file = "expample.txt";

    if ($handle = fopen($file, "w")) {
        fwrite($handle, "Tanja, mach die Beine breit");
        fclose($handle);
    } else {
        echo "app was not able to create file";
    }
    