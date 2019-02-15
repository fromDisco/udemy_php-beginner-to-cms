<?php

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
    
    if (!$connection) {
        die('die, die, die');
    } 

    $query = 'SELECT * FROM users';
    $data = mysqli_query($connection, $query);
