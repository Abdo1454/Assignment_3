<?php
session_start();

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<form action="index.php" method="post">

    <input type="text" name="username" placeholder="Username">

    <input type="password" name="password" placeholder="Password">

    <label>
        <input type="checkbox" name="old">
        I am older than 18
    </label>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>