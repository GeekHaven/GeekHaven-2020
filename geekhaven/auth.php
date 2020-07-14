<?php
    $cookie_name = $_SESSION['member_id'];
    $t = $_SESSION['time'];
    function checkCookie($cookie_name,$t){
        if(isset($_COOKIE[$cookie_name])){
            if($_COOKIE[$cookie_name]==$t + ($t%2408)*2 + ($t)*2 + $cookie_name){
                return 2;
            }else if($_COOKIE[$cookie_name]==$t + ($t%2408) + ($t) + $cookie_name){
                return 1;
            }else if($_COOKIE[$cookie_name]==$t + $cookie_name){
                return 0;
            }else{
                header('location:login.php');
            }
        }else{
            header('location:login.php');
        }
    }
    function callCheck(){
        $res = checkCookie($GLOBALS['cookie_name'],$GLOBALS['t']);
        return $res;
    }
?>