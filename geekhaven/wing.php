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
    <title>Wing Name</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

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
      <section class="form" style="margin-top: 200px;margin-bottom: 50px;">
        <div class="container" style="background: #171717;border-radius: 16px;">
          <form method="post" id="uploader" action='../data_game/savewing.php' style="text-align: center;" enctype="multipart/form-data">
            <p class="contactUs" >Add Wing</p>
			<div class="form-group col-lg-12">
				<input type="text" name="wing" required></input>
				<span class="floating-label">Wing Name</span>
			</div>

			<div class="form-group col-lg-12">
				<textarea  name="info" ></textarea>
				<span class="floating-label">Information</span>
			</div> 
			<div class="form-group col-lg-12">
				<input accept="image/*" id="file" style="outline: none;" type="file" name="logo"/>
				<span class="floating-label">Logo</span>
			</div>
      <div class="form-group col-lg-12">
				<input accept="image/*" style="outline: none;" type="file" name="image"/>
				<span class="floating-label">Image</span>        
			</div>
			<div class="form-group form-button">             
				<button name="add_btn" type="submit" class="form-submit button" >Add Wing</button>
			</div>                             
</form>

          <form method='post' class="container" style="text-align: center;">
          <div class="row">
            <div class="col-lg-12">
              <p class="contactUs" >Update/Remove Wing</p>
              <div class="form-group form-button">             
                <select name="wings" style="color:#707070">
                <option selected="selected">Choose one</option>
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
              <div class="form-group form-button">     
              <br>        
              <button name="select_btn" type="submit" class="form-submit button" >Go</button>
            </div>
          </div>
            
				</div>   
				

            </form>
            <?php
            if(isset($_POST['select_btn'])){
                $wingID = $_POST['wings'];
                $query = "SELECT * FROM wings WHERE wing_id='$wingID'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    $wing_id =$row['wing_id'];    
                    $_SESSION['wingID'] = $wing_id;            
                    $wing =$row['wing'];
                    $info =$row['info'];
                }
                ?>
                <form method='post' action='../data_game/savewing.php' style="text-align: center;" enctype="multipart/form-data">
              
                  <div class="form-group col-lg-12">
                    <input name="new_wing" type="text"  value = "<?php echo $wing;?>"></input>
                    <span class="floating-label">Wing Name</span>
                  </div>

                  <div class="form-group col-lg-12">
                    <input name="new_info" type="text"  value = "<?php echo $info;?>"></input>
                    <span class="floating-label">Information</span>
                  </div> 
                  

                  <div class="form-group col-lg-12">
                    <input accept="image/*" style="outline: none;" type="file" name="new_logo"/>
                    <span class="floating-label">Logo</span>
                  </div>

                  <div class="form-group col-lg-12">
                    <input accept="image/*" style="outline: none;" type="file" name="image"/>
                    <span class="floating-label">Image</span>
                  </div>

                  <div class="form-group form-button col-lg-6">             
                    <button name="update_btn" type="submit" class="form-submit button" >Update Wing</button>
                  </div>  
                  <div class="form-group form-button">             
                    <button name="remove_btn" type="submit" class="form-submit button" >Remove Wing</button>
                  </div>   	
                </form>
                <?php
            }    
            ?>

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