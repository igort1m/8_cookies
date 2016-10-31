<?php
session_start();
if (isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header('Location: 2.php');
}
if (isset($_SESSION['name'])){
    $b = $_SESSION['name'];
    echo 'Привет ' . $b;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="1.php" method="post">
    <label for="name">Введите ваше имя</label>
    <input type="text" id="name" name="name">
    <input type="submit">
</form>
</body>
</html>