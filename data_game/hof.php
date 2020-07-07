<?php
    require "../database/member_info.php";
    session_start();
?>

<?php
    if(isset($_POST['hof_btn'])){
        $memID = $_SESSION['hof_mem_id'];
        $hof_value = $_POST['hof_value'];
        if($hof_value=='0'||$hof_value=='1'){
            $query = "UPDATE member SET `hof`='$hof_value' WHERE `member_id`='$memID'";
            $query_run = mysqli_query($connection,$query);
            header('location:../geekhaven/makehof.php');
        }else{
            echo 'error';
        }
    }
?>