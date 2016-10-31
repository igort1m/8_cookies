<?php
session_start();
if(isset($_POST['age']) && isset($_POST['city'])){
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['city'] = $_POST['city'];
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
    <label for="age">Возраст</label><br>
    <input type="text" id="age" name="age"><br>
    <label for="city">Город</label><br>
    <input type="text" id="city" name="city"><br>
    <input type="submit">
</form>
</body>
</html>