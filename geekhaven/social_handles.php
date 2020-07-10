<?php
    require "../database/member_info.php";
    session_start();
    
    include 'auth.php';
    $res = callCheck();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Social Handles</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
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
        <?php
            $mem_id = $_SESSION['member_id'];
            $query = "SELECT * FROM member WHERE member_id='$mem_id'";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                $handle_id =$row['social_handles']; 
            }
            $query = "SELECT * FROM social_handles WHERE social_handles_id='$handle_id'";
            $query_run = mysqli_query($connection,$query);
            while($row = mysqli_fetch_assoc($query_run)){
                $handle_id =$row['social_handles_id'];
                $_SESSION['handleID'] = $handle_id;
                $git = $row['github'];
                $mail = $row['mail']; 
                $face = $row['facebook']; 
                $insta = $row['instagram']; 
                $chef = $row['codechef']; 
                $force = $row['codeforces']; 
                $in = $row['linkedin']; 
                $rank = $row['hackerrank'];
                $earth = $row['hackerearth']; 
                $twi = $row['twitter'];                  
            }
        ?>
	  
      <section class="form" style="margin-top: 200px;;margin-bottom: 50px;">
		<div class="container" style="background: #171717;border-radius: 16px;">
			<form method='post' action='../data_game/handle.php' style="text-align: center;" enctype="multipart/form-data">
                <p class="contactUs" >Update Social Handles</p>

				<div class="form-group col-lg-4">
					<input name="git" type="text" value="<?php echo $git;?>"></input>
					<span class="floating-label">Github ID</span>
                </div>
				<div class="form-group col-lg-4">
					<input name="mail" type="text" value="<?php echo $mail;?>"></input>
					<span class="floating-label">Mail ID</span>
                </div> 
                <div class="form-group col-lg-4">
					<input name="face" type="text" value="<?php echo $face;?>"></input>
					<span class="floating-label">Facebook</span>
                </div>
                <div class="form-group col-lg-4">
					<input name="insta" type="text" value="<?php echo $insta;?>"></input>
					<span class="floating-label">Instagram</span>
                </div>
                <div class="form-group col-lg-4">
					<input name="chef" type="text" value="<?php echo $chef;?>"></input>
					<span class="floating-label">Codechef</span>
                </div>
                <div class="form-group col-lg-4">
					<input name="force" type="text" value="<?php echo $force;?>"></input>
					<span class="floating-label">Codeforces</span>
                </div>    
                <div class="form-group col-lg-4">
					<input name="in" type="text" value="<?php echo $in;?>"></input>
					<span class="floating-label">LinkedIn</span>
                </div>
                <div class="form-group col-lg-4">
					<input name="rank" type="text" value="<?php echo $rank;?>"></input>
					<span class="floating-label">Hackerrank</span>
                </div>     
                <div class="form-group col-lg-4">
					<input name="earth" type="text" value="<?php echo $earth;?>"></input>
					<span class="floating-label">Hackerearth</span>
				</div>      
				<div class="form-group col-lg-4">
					<input name="twi" type="text"  value="<?php echo $twi;?>"></input>

					<span class="floating-label">Twitter</span>
				</div>
				
				<div class="form-group form-button">             
					<button name="submit" type="submit" class="form-submit button" >Save</button>
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