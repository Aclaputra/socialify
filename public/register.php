<?php
    include_once "../config/postgres.class.php";
    include "../app/auth.class.php";
    include "../model/user.class.php";
?>

<?php
    $postgres = new postgres();
    $db = $postgres->getDB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="register" method="POST">
        <input type="text" name="full_name" placeholder="Input Full Name"><br>
        <input type="email" name="email" placeholder="Input Email"><br>
        <input type="text" name="username" placeholder="Input Username"><br>
        <input type="password" name="password" placeholder="Input Password"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    
    <?php
        $auth = new auth($db);
        if (isset($_POST['submit'])) {
            $user = new user(
                $_POST['email'],
                $_POST['password'],
                $_POST['full_name'],
                $_POST['username'],
            );
            $auth->register($user);
        }
    ?>
</body>
</html>