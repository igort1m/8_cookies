<?php
session_start();
if(isset($_POST['e-mail'])){
    $_SESSION['e-mail'] = $_POST['e-mail'];
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
    <label for="e-mail">Введите адрес вашей електронной почты</label>
    <input type="email" id="e-mail" name="e-mail">
    <input type="submit">
</form>
</body>
</html>