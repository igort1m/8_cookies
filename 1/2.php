<?php
session_start();
echo '<a href="3.php">На страницу 3</a>';
$_SESSION['str'] .= '2.php<br>';