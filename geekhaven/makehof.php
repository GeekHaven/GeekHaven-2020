<?php
    require "../database/member_info.php";
    session_start();
    $cookie_name = $_SESSION['member_id'];
    $t = $_SESSION['time'];
    if(isset($_COOKIE[$cookie_name])){
        if($_COOKIE[$cookie_name]==$t + ($t%2408) + $cookie_name){
            echo "welcome Admin";
        }else if($_COOKIE[$cookie_name]==$t + $cookie_name){
            header('location:home.php');
        }else{
            header('location:login.php');
        }
    }else{
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    
    <form method="post" >  
        <select name="hof">
            <option selected="selected">Choose one</option>
                <?php
                    $query = 'SELECT * FROM credentials';
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $member_id =$row['member_id'];
                        $cred_id = $row['credentialsID'];
                        $query = "SELECT * FROM member WHERE `member_id`='$member_id'";
                        $query_run = mysqli_query($connection,$query);
                        $res = mysqli_fetch_assoc($query_run);
                        $name =$res['name'];
                        ?>
                        <option value="<?php echo $member_id; ?>"><?php echo $name; ?></option>
                        <?php
                    }
                ?>
                <br>
            <input name="select_mem_btn" type="submit" value="Go"> </input><br>   
        </select>
    </form>
    <?php
    if(isset($_POST['select_mem_btn'])){
        $memID = $_POST['hof'];
        $_SESSION['hof_mem_id'] = $memID;
        ?>
        <form method='post' action='../data_game/hof.php'>
        <label>HOF Value</label>
        <input name='hof_value' type='text' placeholder='0/1'></input>
        <input name='hof_btn' type='submit' value='save'></input>
        </form>
        <?php
    }
    ?>

                <?php
                    $query = 'SELECT * FROM member';
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $name =$row['name'];
                        $hof_value =$row['hof'];
                        ?>
                        <br>
                        <label><?php echo $name; echo ' : '; ;?></label>
                        <?php if($hof_value){
                            echo "HOF";
                        }else{
                            echo "Not HOF";
                        } ?>
                        <?php
                    }
                ?>
                <br>
    <br><br>
    <form method= 'post' action='home.php'>
        <input type='submit' value='home'>
    </form>

    </body>
</html>