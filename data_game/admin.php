<?php
    require "../database/member_info.php";
    session_start();
    $cookie_name = $_SESSION['member_id'];
    $t = $_SESSION['time'];
    if(isset($_COOKIE[$cookie_name])){
        if($_COOKIE[$cookie_name]==$t + ($t%2408) + $cookie_name){
        }else if($_COOKIE[$cookie_name]==$t + $cookie_name){
            header('location:home.php');
        }else{
            header('location:login.php');
        }
    }else{
        header('location:login.php');
    }
?>

<?php
    if(isset($_POST['admin_btn'])){
        $credID = $_SESSION['admin_cred_id'];
        $admin_value = $_POST['admin_value'];
        if($admin_value=='0'||$admin_value=='1'){
            $query = "UPDATE credentials SET `admin_value`='$admin_value' WHERE `credentialsID`='$credID'";
            $query_run = mysqli_query($connection,$query);
            header('location:../geekhaven/makeAdmin.php');
        }else{
            echo 'error';
        }
    }
?>