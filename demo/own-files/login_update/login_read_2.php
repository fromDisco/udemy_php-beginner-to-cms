<?php
echo 'test';
    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    if (!$connection) {
        die('die, die, die');
    } else {
        echo 'fuck, you really did it';
    }

    $query = 'SELECT * FROM users';
    $data = mysqli_query($connection, $query);

    if (!$data) {
        echo 'fail, fail, fail';
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #aaa;
        }

        .wrapper {
            width: 60%;
            margin: 2rem auto;
            background: #fff;
            height: calc(96vh - 2rem);
            padding: 3rem;
        }
        
        input, label {
            display: block;
            margin: .5rem;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php
        // var_dump($data);
            while ($value = mysqli_fetch_assoc($data)) {
                print_r($value);
            }
        ?>  

    </div>
</body>
</html>



<!-- 

// 1900 > 4 > 76
// 1600 > 1600 * 4.75 + 1600 * 0,00890625 > 90.25
// 1600 > 


1.1875 

0,05640625



-->