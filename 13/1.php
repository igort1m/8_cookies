<?php
session_start();
if(isset($_POST['a'])){
    $_SESSION['a'] = $_POST['a'];
    header('Location: 2.php');
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
            <label for="a">Сколько будет 2 + 2?</label><br>
            <input type="number" id="a" name="a"><br>
            <input type="submit">
        </form>
    </body>
</html>