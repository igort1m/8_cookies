<?php
session_start();
if (isset($_SESSION['name'])){
    $a = $_SESSION['name'];
    echo 'Привет, ' . $a . '.';
}