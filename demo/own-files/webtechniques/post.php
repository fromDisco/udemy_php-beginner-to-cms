<?php
    if (isset($_POST['submit'])) {
        echo $_POST['password'];
    }
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

    <form action="post.php" method="POST">
        <div class="text">
            <input type="text" name="name" id="name">
            <label for="name">Name</label>
        </div>
        <div class="password">
            <input type="password" name="password" id="password">
            <label for="password"></label>
        </div>
        <input type="submit" value="Absenden" name="submit">
    </form>

</body>

</html>