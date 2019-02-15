<?php

    function user_delete() {
        global $connection;
        $username = $_POST['username'];
        $query = "DELETE FROM users WHERE users.username = '$username'";

        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("die, die, die");
        }
    }