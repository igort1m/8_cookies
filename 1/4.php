<?php
session_start();
echo 'Перед этим вы посещали страницы<br>';
$a = $_SESSION['str'];
echo $a;