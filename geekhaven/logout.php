<?php
    session_start();
    $cookie_name = $_SESSION['member_id'];
    $t = $_SESSION['time'];
    setcookie($cookie_name,"",time()-(86400*5));
    header('location:login.php');
?>