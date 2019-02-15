<?php

        $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
        
        if ($connection) {
            echo 'we are drin';
        } else {
            die ('die, die, die');
        }

        $query = "SELECT * FROM users";
        $result = mysqli_query($conection, $query);

        if (!$result) {
            echo 'fail, fail, fail' . mysqli_error();
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
            while($row = mysqli_fetch_assoc($result)) {
                print_r($row);
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