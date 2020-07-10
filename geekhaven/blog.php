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
    <title>Add Blog</title>
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
	  
      <section class="form" style="margin-top: 200px;;margin-bottom: 50px;">
		<div class="container" style="background: #171717;border-radius: 16px;">
			<form method='post' action='../data_game/saveblog.php' style="text-align: center;" enctype="multipart/form-data">
                <p class="contactUs" >Add Blog</p>
                
                <div class="form-group col-lg-12">
                    <!-- <label>Wing</label> -->
                    <!-- <input name="wing" type="text" placeholder="Wing" required></input> -->
                        <div>
                            <select id="wings" name="wings" style="color: #707070;">
                            <?php
                                $query = 'SELECT * FROM wings';
                                $result = mysqli_query($connection,$query);
                                while($row = mysqli_fetch_assoc($result)){
                                    $wing_id =$row['wing_id'];
                                    $wing =$row['wing'];
                                ?>
                                    <option value="<?php echo $wing_id; ?>"><?php echo $wing; ?></option>
                                    <?php
                                }
                            ?>
                            </select>
                        </div>
                    </div>
 

				<div class="form-group col-lg-12">
					<input name="blog_title" type="text" required></input>
					<span class="floating-label">Blog Title</span>
					<div>
						
					</div>
				</div>
				<div class="form-group col-lg-12">
					<textarea  name="description" type="text" ></textarea>
					<span class="floating-label">Description</span>
					<!-- <div>
						<small id="hint_id_username" class="form-text text-muted">*Describe The Event</small>
					</div> -->
				</div> 
				<div class="form-group col-lg-12">
					<input name="blog_link" type="text" required ></input>
					<span class="floating-label">Blog Link</span>
				</div>
				<div class="form-group col-lg-12">
					<!-- <label>Image</label> -->
					<input accept="image/*" style="outline: none;" type="file" name="image"/>
                </div>
				
				<div class="form-group form-button">             
					<button name="add_blog" type="submit" class="form-submit button" >Add Blog</button>
				</div>   	
            </form>
            

            <form method='post' action='../data_game/saveblog.php' style="text-align: center;">
				<p class="contactUs" >Remove Blog</p>
				<select name="blogs">
				<option selected="selected">Choose one</option>
                <?php
                    $query = 'SELECT * FROM blogs';
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $name =$row['blog_title'];
                        ?>
                        <option value="<?php echo $name; ?>"><?php echo $name; ?></option>
                        <?php
                    }
                ?>
                </select>
				<div class="form-group form-button">             
					<button name="select_blog_btn" type="submit" class="form-submit button" >Delete</button>
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