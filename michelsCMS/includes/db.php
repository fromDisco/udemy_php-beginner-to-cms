<?php

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "michelsCMS");

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_USER, DB_NAME);

    if (!$connection) {
        echo "<strong style='color:red'>sorry, no connections today!</strong>";
    }