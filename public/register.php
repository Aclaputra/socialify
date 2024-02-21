<?php
    include_once "../config/postgres.class.php";
    include "../app/auth.class.php";
?>

<?php
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>register</h1>
    <form action="register" method="POST">
        <label for="data">Email</label>
        <input type="text" name="email">
        <label for="data">Password</label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>
    
    <?php
        $auth = new auth();
        if (isset($_POST)) {
            $auth->register($_POST);
        }
    ?>
</body>
</html>