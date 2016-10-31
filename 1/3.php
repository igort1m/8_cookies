<?php
session_start();
echo '<a href="4.php">На страницу 4</a>';
$_SESSION['str'] .= '3.php<br>';