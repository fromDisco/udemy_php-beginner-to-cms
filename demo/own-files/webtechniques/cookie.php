<?php

    $name = "Michel-Cookie";
    $value = 100;
    $expiration = time() + (60 * 60 * 24 * 7 * 4);
    echo $expiration;

    setcookie($name, $value, $expiration);
    var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>