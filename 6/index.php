<?php
session_start();
if(isset($_POST['phone'])){
    $_SESSION['phone'] = $_POST['phone'];
    header('Location: form.php');
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
    <label for="phone">Введите телефон</label>
    <input type="number" id="phone" name="phone">
    <input type="submit">
</form>
</body>
</html>