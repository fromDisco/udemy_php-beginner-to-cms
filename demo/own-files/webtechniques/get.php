<?php
    print_r($_GET);
    $id = 10;
    $buttontext = 'Absenden';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Superglobal</title>
</head>
<body>

<a href="get.php?id=<?= $id ?>"><?= $buttontext ?></a>
    
</body>
</html>