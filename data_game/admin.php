<?php
    require "../database/member_info.php";
    session_start();
?>

<?php
    if(isset($_POST['admin_btn'])){
        $credID = $_SESSION['admin_cred_id'];
        $admin_value = $_POST['admin_value'];
        if($admin_value=='0'||$admin_value=='1'||$admin_value=='2'){
            $query = "UPDATE credentials SET `admin_value`='$admin_value' WHERE `credentialsID`='$credID'";
            if($admin_value=='0')
            $query = "UPDATE member SET `post`='Member' WHERE `cred_id`='$credID'";
            else if($admin_value=='1')
            $query = "UPDATE member SET `post`='Coordinator' WHERE `cred_id`='$credID'";
            else if($admin_value=='2')
            $query = "UPDATE member SET `post`='Overall Coordinator' WHERE `cred_id`='$credID'";

            $query_run = mysqli_query($connection,$query);
            header('location:../geekhaven/makeAdmin.php');
        }else{
            echo 'error';
        }
    }
?>