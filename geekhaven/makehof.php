<?php
    require "../database/member_info.php";

    session_start();
    include 'auth.php';
    $res = callCheck();
    if($res<1){
        header('location:login.php');        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Add Member</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body >
    <nav class="navbar navbar-fixed-top"style="opacity: 0.9;">
        <div class="container-fullwidth">
          <a href="../index.html"><img class="nav-logo" src="../images/gh.png"></a>
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" style="color: aliceblue !important;" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./home.php">Home</a></li>
              <li><a href="#projects">Projects</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#blogs">Blogs</a></li>
              <li><a href="#footer">Contacts</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
	  </nav>
	  <style>
		  
	  </style>
      <section class="form" style="margin-top: 200px;;margin-bottom: 50px;">
        <div class="container" style="background: #171717;border-radius: 16px;">
        <form method="post">  
        <div class="row" style="padding-top:50px;">
        <div class="form-group form-button col-lg-11">
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
                        <option value="<?php echo $member_id; ?>"><?php if($name){echo $name;}else{echo "Name Not Available";} ?></option>
                        <?php
                    }
                ?>
            
            
        </select>
        </div>
        <div class="form-group form-button col-lg-1">             
			<button name="select_mem_btn" type="submit" class="form-submit button" >Go</button>
		</div>  
        </div>
    </form>
    <?php
    if(isset($_POST['select_mem_btn'])){
        $memID = $_POST['hof'];
        $_SESSION['hof_mem_id'] = $memID;
        ?>
        <form method='post' style="color:white;" action='../data_game/hof.php'>
        <div class="row" style="padding-top:50px;">
            <div class="form-group form-button col-lg-11">
                <input name='hof_value' type='text' placeholder='HOF Value(0/1)'></input>
            </div>
            <div class="form-group form-button col-lg-1">             
                <button name="hof_btn" type="submit" class="form-submit button" >SAVE</button>
            </div>  
        </div>
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
                        <label style="color:white;"><?php if($name){echo $name;}else{echo "Name Not Available";} echo ' : '; ;?></label>

                        <?php if($hof_value){
                            echo "HOF";
                        }else{
                            echo "Not HOF";
                        } ?><br>
                        <?php
                    }
                ?>
    <form method= 'post' style="color:white;" action='home.php'>
        <div class="row">
        <div class="form-group form-button col-lg-12">             
			<button name="add_btn" type="submit" class="form-submit button" >home</button>
		</div>  
        </div>
    </form>
            
        </div>

        

		<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      
        <script>

          $(function () {
          $(document).scroll(function () {
              var $logo = $(".nav-logo");
              $logo.toggleClass('scroll-img', $(this).scrollTop() > 10);

              var $nav_links = $(".navbar-nav li a")

              var $nav = $(".navbar-fixed-top");
              $nav.toggleClass('scrolled', $(this).scrollTop() > 10);
          });
          });


        </script>
</body>
</html>      