<?php
    require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $query = 'SELECT * FROM wings';
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $wing = $row['wing'];
            $info = $row['info'];
            $logo = $row['logo'];
            $image = $row['image'];
            $link = $row['web_link'];
            ?>
            <div class=card>
            Name : '<?php echo $wing;?>'<br>
            Info: '<?php echo $info;?>'<br>
            Logo: <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $logo ).'" style="height:100px; widht:100px;"/>'; ?><br>
            Image : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>'; ?><br>
            Link : '<?php echo $link;?>'<br>
            </div>
            <hr>
            <?php
        }
    ?>
</body>
</html>
