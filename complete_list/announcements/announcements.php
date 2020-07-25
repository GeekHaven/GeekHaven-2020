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
    $months = array(1 => 'JAN', 2 => 'FEB', 3 => 'MAR', 4 => 'APR', 5 => 'MAY', 6 => 'JUNE', 7 => 'JULY', 8 => 'AUG', 9 => 'SEP', 10 => 'OCT', 11 => 'NOV', 12 => 'DEC');    
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Announcements</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="ann.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-fixed-top"style="opacity: 0.9;">
        <div class="container-fullwidth">
          <a href="../index.html"><img class="nav-logo" src="../../images/gh.png"></a>
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
      
      <div class="container" style="margin-top:150px">
          <p class="contactUs">Announcements</p>
          <div class="upper-block">
              <p class="col-lg-3 col-sm-4"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>   Date</p>
              <p class="col-lg-3 col-sm-4"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>   Time</p>
              <p class="col-lg-3 col-sm-4"><i class="fa fa-map-marker" aria-hidden="true"></i>    Venue</p>
          </div>


          <?php
              $query = "SELECT * FROM announcements WHERE `organizer`='$wing'";

              $result = mysqli_query($connection,$query);
              while($row = mysqli_fetch_assoc($result)){
                $ann_name = $row['name'];
                $ann_info = $row['details'];
                $venue = $row['venue'];
                $date = $row['date'];
                $date = explode("-",$date);
                $mon = $date[1]+10 -10;
                $image = $row['image'];
                $link = $row['link'];
                $time = $row['time'];
                $topic = $row['topic'];
                $details = $row['details'];
                ?>
                <div class="lower-block">
                    <p class="col-lg-3 col-sm-4 title"><i class="fa fa-circle" aria-hidden="true"></i> &nbsp;&nbsp; <?php echo $ann_name;?></p>
                    <p class="col-lg-3 col-sm-4 date" style="padding-left: 90px;"><?php echo $date[2]; echo "   "; echo $months[$mon]; echo ", "; echo $date[0]; ?></p>
                    <p class="col-lg-3 col-sm-4 date" style="padding-left: 90px;"><?php echo $time;?></p>
                    <p class="col-lg-3 col-sm-4 date" style="padding-left: 90px;"><?php echo $venue;?></p>
                </div>
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
