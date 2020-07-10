<?php
    require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <?php
        $query = 'SELECT * FROM announcements';
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $organizer = $row['organizer'];
            $venue = $row['venue'];
            $date = $row['date'];
            $image = $row['image'];
            $link = $row['link'];
            $time = $row['time'];
            $topic = $row['topic'];
            $details = $row['details'];
            $image = $row['image'];
            
            ?>
            <div class=card>
            Name : '<?php echo $name;?>'<br>
            
            Organiser : '<?php echo $organizer;?>'<br>
            Venue : '<?php echo $venue;?>'<br>
            
            date: '<?php echo $date;?>'<br>
            time: '<?php echo $time;?>'<br>
            topic: '<?php echo $topic;?>'<br>
            details: '<?php echo $details;?>'<br>
            date: '<?php echo $date;?>'<br>
            
            Image : <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" style="height:100px; widht:100px;"/>'; ?><br>
            Link : '<?php echo $link;?>'<br>
            </div>
            <hr>
            <?php
        }
    ?>
</body>
</html>
