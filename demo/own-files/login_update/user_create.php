<?php
include 'db.php';

function user_create() {
    global $connection;
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    echo $username;
    $encrypt_password = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO users (id, username, password) VALUES (NULL, '$username', '$encrypt_password')";

    $checkQuery = mysqli_query($connection, $query);

    if (!$checkQuery) {
        die('die, die, query');
    }
}
