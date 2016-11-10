<?php
session_start();
if(isset($_POST['c'])){
    $_SESSION['c'] = $_POST['c'];
    header('Location: 4.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>3</title>
    </head>
    <body>
        <form action="3.php" method="post">
            <label for="c">Сколько будет 2 * 2?</label><br>
            <input type="number" id="c" name="c"><br>
            <input type="submit">
        </form>
    </body>
</html>