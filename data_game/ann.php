<?php
    require "../database/wingsdb.php";    
    session_start();
?>
        <?php
            if(isset($_POST['submit'])){
                $member_id = $_SESSION['member_id'];                
                $name = $_POST['name'];
                $organiser = $_POST['organiser'];
                $venue = $_POST['venue'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $topic = $_POST['topic'];
                $details = $_POST['details'];
                $link = $_POST['link'];
                $attach = $_POST['attach'];
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $query = "SELECT * FROM announcements WHERE `name`='$name'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    echo 'error : ANNOUNCEMENT ALREADY EXIST';
                }else{
                    $query = "INSERT INTO announcements VALUES('$member_id','$name','$organiser','$venue','$date','$time','$topic','$details','$link','$attach','$image')";
                    $query_run = mysqli_query($connection,$query);
                    header('location:../geekhaven/announcement.php');                
                }                

            }
            if(isset($_POST['select_btn'])){
                $name = $_POST['announcements'];
                $query = "SELECT * FROM announcements WHERE `name`='$name'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    $query = "DELETE FROM announcements WHERE `name`='$name'";
                    $query_run = mysqli_query($connection,$query);
                    header('location:../geekhaven/announcement.php');
                }else{
                    echo "error : CANNOT DELETE";
                }
            }
        ?>