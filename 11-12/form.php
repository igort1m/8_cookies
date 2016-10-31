<?php
session_start();
$b = '';
$c = '';
if(isset($_SESSION['age']) && isset($_SESSION['city'])){
    $b = $_SESSION['age'];
    $c = $_SESSION['city'];
}
if (isset($_POST['exit'])){
    session_destroy();
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
<form action="form.php" method="post">
    <?php if(isset($_SESSION['age']) && isset($_SESSION['city'])): ?>
        <input type="submit" value="выход" name="exit"><br>
    <?php endif; ?>
    <label for="name">Имя</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="age">Возраст</label><br>
    <input type="text" id="age" name="age" value="<?php echo $b; ?>"><br>
    <label for="city">Город</label><br>
    <input type="text" id="city" name="city" value="<?php echo $c; ?>"><br>
    <input type="submit">
</form>
</body>
</html>