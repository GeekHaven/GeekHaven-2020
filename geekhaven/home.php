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
    <title>Home</title>
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
      
      	  
      <section class="form" style="margin-top: 200px;;margin-bottom: 50px;">
        <div class="container" style="background: #171717;border-radius: 16px;">
            <p class="contactUs" >Only officials</p>
        <form action='addmember.php' class="form-group col-lg-6">
            <input type="submit" value="Add/Remove Member" style="color: aliceblue;">
        </form>
        
        <form action='makeAdmin.php' class="form-group col-lg-6">
            <input type="submit" value="Add Admin" style="color: aliceblue;">
        </form>
        <form action='updateProfile.php' class="form-group col-lg-12">
            <input type="submit" value="Update My Profile" style="color: aliceblue;">
        </form>
        <form action='makehof.php' class="form-group col-lg-6">
            <input type="submit" value="Manage HOF" style="color: aliceblue;">
        </form>
        <form action='social_handles.php' class="form-group col-lg-6">
            <input type="submit" value="Social Handle" style="color: aliceblue;">
        </form>

        <form action='wing.php' class="form-group col-lg-12">
            <input type="submit" value="wings" style="color: aliceblue;">
        </form>
        <form action='project.php' class="form-group col-lg-4">
            <input type="submit" value="Projects" style="color: aliceblue;">
        </form>
        
        
        <form action='blog.php' class="form-group col-lg-4">
            <input type="submit" value="Blogs" style="color: aliceblue;">
        </form>
        
        
        <form action='announcement.php' class="form-group col-lg-4">
            <input type="submit" value="Announcements" style="color: aliceblue;">
        </form>
        <div class="col-lg-4">
        </div>
        <form action='logout.php' class="form-group col-lg-4" style="">
            <input type="submit" value="Logout" style="color: aliceblue;">
        </form>
        <div class="col-lg-4">
        </div>
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