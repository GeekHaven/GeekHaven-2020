<?php
    $server = "sql208.epizy.com";
    $username = "epiz_26360820";
    $password = "jJABjoAiW6OqP";
    $dbname = "epiz_26360820_geekhav";
    
    $connection = mysqli_connect($server,$username,$password,$dbname);
    mysqli_select_db($connection,$dbname);
?>