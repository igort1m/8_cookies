<?php
session_start();
if (isset($_SESSION['name'])){
    $b = $_SESSION['name'];
    echo 'Привет ' . $b;
}
echo '<a href="1.php"> На страницу 1</a>';