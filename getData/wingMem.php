<?php
    require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $wing_name = "foss";
        $query = "SELECT * FROM member WHERE `wing`='$wing_name'";
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $roll_no = $row['roll_no'];
            $image = $row['image'];
            $des = $row['description'];
            $hof = $row['hof'];
            $social_id = $row['social_handles'];
            $query = "SELECT * FROM social_handles WHERE `social_handles_id`='$social_id'";
            $res = mysqli_query($connection,$query);
            while($data = mysqli_fetch_assoc($res)){
                $git = $data['github'];
                $mail = $data['mail'];
                $face = $data['facebook'];
                $insta = $data['instagram'];
                $chef = $data['codechef'];
                $force = $data['codeforces'];
                $linkedin = $data['linkedin'];
                $rank = $data['hackerrank'];
                $earth = $data['hackerearth'];
                $twi = $data['twitter'];
            }
            $sess = $row['session'];
            $post = $row['post'];
            ?>
            <div class=card>
            Name : '<?php echo $name;?>'<br>
            Roll: '<?php echo $roll_no;?>'<br>
            Image : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>'; ?><br>
            Des : '<?php echo $des;?>'<br>
            HOf : '<?php echo $hof;?>'<br>
            social handles : '<?php echo $git; echo $mail; echo $face; echo $insta; echo $chef; echo $force; echo $linkedin; echo $rank; echo $earth; echo $twi;?>'<br>
            Sess : '<?php echo $sess;?>'<br>
            post : '<?php echo $post;?>'<br>
            </div>
            <hr>
            <?php
        }
    ?>
</body>
</html>
