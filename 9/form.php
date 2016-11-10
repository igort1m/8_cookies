<?php
session_start();
$a = '';
if(isset($_SESSION['e-mail'])){
    $a = $_SESSION['e-mail'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>index</title>
</head>
<body>
<label for="name">Введите имя</label><br>
<input type="text" id="name"><br>
<label for="s_name">Введите фамилию</label><br>
<input type="text" id="s_name"><br>
<label for="pass">Введите пароль</label><br>
<input type="password" id="pass"><br>
<label for="e-mail">Введите адрес електронной почты</label><br>
<input type="email" id="e-mail" value="<?php echo $a ?>"><br>
<input type="submit">
</body>
</html>