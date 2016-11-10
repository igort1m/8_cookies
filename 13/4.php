<?php
session_start();
if(isset($_POST['d'])){
    $_SESSION['d'] = $_POST['d'];
    header('Location: 4.php');
}
if(isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c']) && isset($_SESSION['d'])){
    $a = $_SESSION['a'];
    $b = $_SESSION['b'];
    $c = $_SESSION['c'];
    $d = $_SESSION['d'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>4</title>
    </head>
    <body>
        <?php if(isset($_SESSION['a']) && isset($_SESSION['b']) && isset($_SESSION['c']) && isset($_SESSION['d'])): ?>
            <p>
                Ваши ответы:<br>
                2 + 2 = <?php echo $a ?><br>
                2 - 1 = <?php echo $b ?><br>
                2 * 2 = <?php echo $c ?><br>
                2 / 2 = <?php echo $d ?><br>
            </p>
        <?php else: ?>
            <form action="4.php" method="post">
                <label for="d">Сколько будет 2 / 2?</label><br>
                <input type="number" id="d" name="d"><br>
                <input type="submit">
            </form>
        <?php endif; ?>
    </body>
</html>