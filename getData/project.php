<?php
    require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $query = 'SELECT * FROM Projects';
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['project_name'];
            $pro_link = $row['project_link'];
            $code = $row['source_code_link'];
            $des = $row['description'];
            $image = $row['image'];
            $blog_link = $row['blog_link'];
            ?>
            <div class=card>
            Name : '<?php echo $name;?>'<br>
            project link : '<?php echo $pro_link;?>'<br>
            Source Code : '<?php echo $code;?>'<br>
            
            des: '<?php echo $des;?>'<br>
            Image : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" style="height:100px; widht:100px;"/>'; ?><br>
            Link : '<?php echo $blog_link;?>'<br>
            </div>
            <hr>
            <?php
        }
    ?>
</body>
</html>
