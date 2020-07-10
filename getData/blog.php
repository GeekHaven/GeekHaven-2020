<?php
    require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $query = 'SELECT * FROM blogs';
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['blog_title'];
            $des = $row['description'];
            $image = $row['image'];
            $link = $row['blog_link'];
            ?>
            <div class=card>
            Title : '<?php echo $title;?>'<br>
            des: '<?php echo $des;?>'<br>
            Image : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" style="height:100px; widht:100px;"/>'; ?><br>
            Link : '<?php echo $link;?>'<br>
            </div>
            <hr>
            <?php
        }
    ?>
</body>
</html>
