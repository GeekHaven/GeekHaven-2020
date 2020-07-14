<?php
    require "../database/member_info.php";
    session_start();
    error_reporting(0);
    $mem_id = $_SESSION['member_id'];
    $cookie_name = $mem_id;
    
    if(isset($_COOKIE[$cookie_name])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Login</title>
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
              <li><a href="../../index.html">Home</a></li>
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
			<form method='post' style="text-align: center;">
                <p class="contactUs" >Login</p>
                
				<div class="form-group col-lg-12">
					<input name="username" type="text" required></input>
					<span class="floating-label">Username</span>
					<div>
						
					</div>
				</div>
				<div class="form-group col-lg-12">
					<input name="password" type="password" required ></input>
					<span class="floating-label">Password</span>
				</div>
				
				<div class="form-group form-button">             
					<button name="add_btn" type="submit" class="form-submit button" >Login</button>
				</div>   	
        <?php
            if(isset($_POST['add_btn'])){
                $username = $_POST['username'];
                $pass = $_POST['password'];
                $time = time()*1000;
                $query = "select * from credentials WHERE username='$username' AND password='$pass'"; 
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run)>0){
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $mem_id =$row['member_id'];
                        $admin = $row['admin_value'];
                    }
                    $_SESSION['member_id'] = $mem_id;
                    $_SESSION['time'] = $time;
                    
                    $cookie_name = $mem_id;
                    $cookie_value = $time+($time%2408)*($admin)+($time)*($admin)+$mem_id;
                    setcookie($cookie_name,$cookie_value,time()+(86400*5));
                    echo $cookie_name;
                    echo $cookie_value;
                    header('location:home.php');
                }else{
                    echo 'INCORRECT loginID or password';
                }
            }
            ?>
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