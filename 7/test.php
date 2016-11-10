<?php
session_start();
if (isset($_SESSION['country'])){
    $a = $_SESSION['country'];
    echo 'Ваша страна ' . $a;
}