<?php
    // include './addmember.php'
    require "../database/member_info.php";    
    session_start();

?>

        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $roll = $_POST['roll_no'];
                $img = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $mem_id = $_SESSION['member_id'];
                $description = $_POST['description'];
                $query = "UPDATE member SET `name`='$name',`roll_no`='$roll',`image`='$img',`description`='$description' WHERE `member_id`='$mem_id'";
                $query_run = mysqli_query($connection,$query);
                // echo "UPDATED SUCCESSFULLY";
                header('location:../geekhaven/updateProfile.php');
            }
        ?>