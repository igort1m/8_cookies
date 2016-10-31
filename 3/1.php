<?php
if(isset($_POST['e-mail']) && isset($_POST['login']) && isset($_POST['pas'])){
    setcookie("Test","value");
    header('Location: 1.php');
}
if(isset($_POST['exit'])){
    setcookie("Test","");
    header('Location: 1.php');
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
    <?php if (isset($_COOKIE['Test'])): ?>
        <input type="submit" value="exit" name="exit"><br>
    <?php endif; ?>
    <label for="e-mail">E-Mail</label><br>
    <input type="email" id="e-mail" name="e-mail"><br>
    <label for="login">Login</label><br>
    <input type="text" id="login" name="login"><br>
    <label for="pas">Password</label><br>
    <input type="password" id="pas" name="pas"><br>
    <input type="submit">
</form>
</body>
</html>