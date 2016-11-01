<?php
session_start();
if(isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header('Location: hello.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="name">Введите имя</label>
    <input type="text" id="name" name="name">
    <input type="submit">
</form>
</body>
</html>