
<?php
session_start();
if (isset($_SESSION['time'])){
    $c = time() - $_SESSION['time'];
    echo 'Предыдущий вход был ' . $c . ' секунд назад';
}
$_SESSION['time'] = time();