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
            $query_run = mysqli_query($connection,$query);
            
            if($admin_value=='0')
            $query = "UPDATE member SET `post`='member' WHERE `cred_id`='$credID'";
            else if($admin_value=='1')
            $query = "UPDATE member SET `post`='coordinator' WHERE `cred_id`='$credID'";
            else if($admin_value=='2')
            $query = "UPDATE member SET `post`='overall coordinator' WHERE `cred_id`='$credID'";

            $query_run = mysqli_query($connection,$query);
            // echo $admin_value;
            header('location:../geekhaven/makeAdmin.php');
        }else{
            echo 'error';
        }
    }
?>