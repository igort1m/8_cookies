<?php
session_start();
$a = '';
if(isset($_SESSION['phone'])){
    $a = $_SESSION['phone'];
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
<label for="phone">Введите телефон</label><br>
<input type="number" id="phone" value="<?php echo $a ?>"><br>
<input type="submit">
</body>
</html>