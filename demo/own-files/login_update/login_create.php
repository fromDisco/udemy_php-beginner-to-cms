<?php
include 'db.php';
include 'user_create.php';

if (isset($_POST['submit'])) {
    user_create();
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
        <form action="login_create.php" method="POST">
            
            <div class="inputwrapper">
                <label for="username">User</label>
                <input type="text" name="username" id="username">
            </div>

            <div class="inputwrapper">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>

</html>