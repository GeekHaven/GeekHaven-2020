<?php
    require "../database/member_info.php";
    session_start();
?>

<?php
            if(isset($_POST['add_btn'])){
                $username = $_POST['username'];
                $pass = $_POST['password'];
                $cpass = $_POST['cpassword'];
                $mem_post = $_POST['mem_post'];
                $sess = $_POST['session'];
                $wing = $_POST['wing'];
                
                // $_SESSION['member_id'] = time()*1000;
                // $member_id = $_SESSION['id'];
                $member_id = time()*1000;
                $_SESSION['added_member_id'] = $member_id;                
                $cred_id = $member_id+($member_id)%117;
                $social_handle_id = $member_id+($member_id)%287;
                
                // echo $member_id;
                // echo $_SESSION['member_id'];
                // echo $cred_id;
                
                if($pass == $cpass){
                    $query = "select * from credentials WHERE username='$username'";
                    $query_run = mysqli_query($connection,$query);
                    if(mysqli_num_rows($query_run)>0){
                        echo 'USERNAME ALREADY EXIST';
                    }else{
                        $query = "INSERT INTO social_handles VALUES('$social_handle_id','','','','','','','','','','')";
                        $query_run = mysqli_query($connection,$query);                             
                        $query = "INSERT INTO member VALUES ('', '', '', '', '$member_id', '', '$social_handle_id', '$cred_id', '$mem_post', '$wing', '$sess')";
                        $query_run = mysqli_query($connection,$query);     
                        $query = "INSERT INTO credentials VALUES('$cred_id','$username','$pass','0','$member_id')";
                        $query_run = mysqli_query($connection,$query);
                        header('location:../geekhaven/addmember.php');
                    }
                }
            }

            if(isset($_POST['select_mem_btn'])){
                $name = $_POST['members'];
                $query = "SELECT * FROM member WHERE `name`='$name'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    while($row = mysqli_fetch_assoc($query_run)){
                        $name = $row['name'];
                        $roll_no = $row['roll_no'];
                        $image = $row['image'];
                        $des = $row['description'];
                        $member_id = $row['member_id'];
                        $hof = $row['hof'];
                        $social_handles = $row['social_handles'];
                        $post = $row['post'];
                        $wing = $row['wing'];
                        $session = $row['session'];
                        $cred_id =$row['cred_id'];
                    }
                    echo $name;
                    $query = "DELETE FROM credentials WHERE `credentialsID`='$cred_id'";
                    $query_run = mysqli_query($connection,$query);
                    
                    $query = "DELETE FROM member WHERE `name`='$name'";
                    $query_run = mysqli_query($connection,$query);

                    $query = "INSERT INTO past_members VALUES ('$name', '$roll_no', '$image', '$des', '$member_id', '$hof', '$social_handles', '$post', '$wing', '$session')";
                    $query_run = mysqli_query($connection,$query);
                    
                    echo $query;
                    header('location:../geekhaven/addmember.php');
                }else{
                    echo "CANNOT REMOVE";
                }
            }

            if(isset($_POST['remove_past_mem_btn'])){
                $name = $_POST['past_members'];
                $query = "DELETE FROM past_members WHERE `name`='$name'";
                $query_run = mysqli_query($connection,$query);
                header('location:../geekhaven/addmember.php');
            }
?>