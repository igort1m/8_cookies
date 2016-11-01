<?php
if (isset($_COOKIE['time'])){
    $c = $_COOKIE['time'];
    if (time() > $c){
        setcookie('month',1,time()+3600*24*30);
        setcookie('time',time()+3600*24*30,time()+3600*24*30);
        $a = 1;
    }
    else{
        if (isset($_COOKIE['month'])){
            $a = $_COOKIE['month'] + 1;
        }
        else{
            $a = 1;
        }
        setcookie('month',$a,time()+3600*24*30);
    }
}
else {
    setcookie('time', time() + 3600 * 24 * 30, time() + 3600 * 24 * 30);
    setcookie('month',1,time()+3600*24*30);
    $a = 1;
}
if (isset($_COOKIE['time2'])){
    $c = $_COOKIE['time2'];
    if (time() > $c){
        setcookie('week',1,time()+3600*24*7);
        setcookie('time2',time()+3600*24*7,time()+3600*24*7);
        $b = 1;
    }
    else{
        if (isset($_COOKIE['week'])){
            $b = $_COOKIE['week'] + 1;
        }
        else{
            $b = 1;
        }
        setcookie('week',$b,time()+3600*24*7);
    }
}
else {
    setcookie('time2', time() + 3600 * 24 * 30, time() + 3600 * 24 * 30);
    setcookie('week',1,time()+3600*24*7);
    $b = 1;
}
echo $a.' входов за меcяц и '.$b.' входов за неделю';
