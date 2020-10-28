<?php
if(isset($_GET['id'])){
    require "../../database/member_info.php";
    $id=mysqli_real_escape_string($connection,$_GET['id']);
    $wing_id = $id;
    $query = "SELECT * FROM wings WHERE `wing_id`='$wing_id'";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        $wing = $row['wing'];
        $info = $row['info'];
        $logo = $row['logo'];
        $image = $row['image'];
        $wingName =$row['wing'];
        $link = $row['web_link'];
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Blogs</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="blogs.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../assets/owlcarousel/assets/owl.theme.default.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

         <!--CSS Spinner-->
      <div class="b1">
        <div class="e-loadholder">
            <div class="m-loader">
                <span class="e-text">Geekhaven</span>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-fixed-top"style="opacity: 0.9;">
        <div class="container-fullwidth" style="padding: 0 5%;">
          <a href="../../index.php"><img class="nav-logo" src="../../images/gh.png"></a>
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
              <li><a href="../../index.php">Home</a></li>
              <li><a href="https://medium.com/nybles">Blogs</a></li>
              <!-- <li><a href="../../geekhaven/contact.php">Contacts</a></li> -->
              <li><a href="../../geekhaven/login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <section class="container-fluid" style="margin-top: 150px;margin-bottom: 100px;" id="blogs">
        <!-- <img src="../../images/circle.png" class="circle-blog"> -->

        <p class="contactUs">BLOGS</p>

          <div class="row div-blog owl-carousel" style="display: flex;justify-content: space-evenly;margin-left: 16px;margin-right: 0px;">

          <?php
          $query = "SELECT * FROM blogs WHERE `wing_id`='$wing_id' ";
          $result = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($result)){
              $title = $row['blog_title'];
              $des = $row['description'];
              $image = $row['image'];
              $link = $row['blog_link'];
              ?>
              <div class="col-12 col-sm-12 col-md-3 blog-div whiteToblackBg">
              
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" class="images-blog blog-1" style="padding:0;"/>'; ?>
                <!-- </div> -->
                <p class="blog-heading whiteToBlack">
                  <?php echo $title;?>
                </p>
              
                <p class="blog-subtitle whiteToBlack">
                  <?php echo $des;?>
                </p>
                <a class="more-blog texta" href=<?php echo $link?>>Read More</a>
              </div>
              <?php
          }
        ?>
        
        </div>

        <div div class="whats-new texta">
            <p>Swipe to See More <i class="fa fa-angle-right" aria-hidden="true"></i></p>
        </div>
        
      </section>  

      <section class="rm container">
        <p class="read-more">Read More...</p>

        <?php
          $query = "SELECT * FROM blogs WHERE `wing_id`='$wing_id' ";
          $result = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($result)){
              $title = $row['blog_title'];
              $des = $row['description'];
              $link = $row['blog_link'];
              ?>

              <div class="blog-card col-12 col-sm-12 col-md-12">
                <p class="rm-head"><?php echo $title;?></p>
                <p class="rm-sub"><?php echo $des;?></p>
                  <a class="blog-link" href=<?php echo $link?>>Continue</a>
              </div>
              <?php
          }
        ?>

      </section>

      <p class="banner">Thanks For Reading!!!</p>

      <section class="footer" id="footer">
        <div class="row" style="margin-right: 0px;">
            <div class="blogs col-lg-6 col-xl-6">
                <h2>Get some good reads!</h2>
                <a href="https://medium.com/nybles" style="text-decordation:none">
                    <button class="btn btn-default text-left">
                        <span>Blogs by us <i class="fa fa-angle-right" style="font-weight: bold;" aria-hidden="true"></i><i class="fa fa-angle-right" style="font-weight: bold;" aria-hidden="true"></i></span>
                    </button>
                </a>
            </div>
            <div class="contacts col-12 col-lg-6 col-xl-6">
                <h2 style="padding-top:15px ;padding-right:0px;" >Contact us</h2>
                <div class="icons">
                    <a href="https://www.facebook.com/geekhaveniiita"><i class="fa fa-facebook" style="padding: 5px 3px;" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/geekhaveniiita"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://github.com/GeekHaven"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/geekhaven_iiita/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="mailto:geekhaven@iiita.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <div style="text-align:center">
        <p class="overall-post more" style="padding-top: 30px;">
        © Copyright, Geekhaven IIITA · <a href="./credits.html" style="color: inherit;border-color:#15C4A8;border-radius: 5px;padding: 5px;">Credits</a>
        </p>
    </div>
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="../assets/owlcarousel/owl.carousel.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      <script type="text/javascript" src="list.js"></script>

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

        $(document).ready(function(){
            $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            autoplay: true,
		        smartSpeed: 1000,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:true,
                    loop:false
                }
            }
        });

        $(document).ready(function() {
    //Preloader
    preloaderFadeOutTime = 500;
    function hidePreloader() {
    var preloader = $('.b1');
    preloader.fadeOut(preloaderFadeOutTime);
    }
    hidePreloader();
});

      </script>

      </body>
      </html>