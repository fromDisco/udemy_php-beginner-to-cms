<?php
include 'db.php';

function user_update() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id1 = $_POST['id'];
    $updatequery = "UPDATE users SET username = '$username', password = '$password' WHERE users.id = $id1";
    $update = mysqli_query($connection, $updatequery);
}