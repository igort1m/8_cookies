<?php
session_start();
if(isset($_SESSION['count'])){
    $a = $_SESSION['count'] + 1;
    echo $a;
    $_SESSION['count'] = $a;
}
else {
    $_SESSION['count'] = 0;
    echo 'Вы еще не обновляли страницу';
}
