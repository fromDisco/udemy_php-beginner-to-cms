<?php
    include 'db.php';
    include 'user_update.php';

    if ($_POST['submit']) {
        user_update();
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
        <form action="login_update.php" method="POST">
            <div class="form-wrapper">
                <label for="username">Neuer Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-wrapper">
                <label for="password">neues Passwort</label>
                <input type="text" name="password" id="password">
            </div>
            <select name="id" id="">
                <?php
                    while ($array = mysqli_fetch_assoc($data)) {
                        $id = $array['id'];
                        echo "<option value='$id'>$id</option>";
                    }
                ?>
            </select>
            <input type="submit" value="submit" name="submit">
        </form>
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