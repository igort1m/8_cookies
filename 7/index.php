<?php
session_start();
if(isset($_POST['country'])){
    $_SESSION['country'] = $_POST['country'];
    header('Location: test.php');
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
    <label for="country">Введите страну</label>
    <input type="text" id="country" name="country">
    <input type="submit">
</form>
</body>
</html>