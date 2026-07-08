<?php
session_start();

if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) {
        echo "<p style='color:red;'>$error</p>";
    }

    unset($_SESSION['errors']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
       <label for="">price</label>
       <input type="text" name="price">
       <label for="">qauntity</label>
       <input type="number" name="qauntity">
       <input type="submit" value="calc">
    </form>
</body>
</html>