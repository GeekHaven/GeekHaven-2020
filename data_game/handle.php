<?php
    // include './addmember.php'
    require "../database/member_info.php";    
    session_start();

?>
        <?php
            if(isset($_POST['submit'])){
                $git = $_POST['git'];
                $mail = $_POST['mail']; 
                $face = $_POST['face']; 
                $insta = $_POST['insta']; 
                $chef = $_POST['chef']; 
                $force = $_POST['force']; 
                $in = $_POST['in']; 
                $rank = $_POST['rank'];
                $earth = $_POST['earth']; 
                $twi = $_POST['twi'];
                $handle_id = $_SESSION['handleID'];
                $query = "UPDATE social_handles SET `github`='$git',`mail`='$mail',`facebook`='$face',`instagram`='$insta',`codechef`='$chef',`codeforces`='$force',`linkedin`='$in',`hackerrank`='$rank',`hackerearth`='$earth',`twitter`='$twi' WHERE `social_handles_id`='$handle_id'";
                $query_run = mysqli_query($connection,$query);
                header('location:../geekhaven/social_handles.php');            
            }
            // echo $id;
        ?>