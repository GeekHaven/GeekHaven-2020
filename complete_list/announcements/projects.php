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
    <title>Projects</title>
    <link rel="shortcut icon" href="../../images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="projects.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

    <!--CSS Spinner-->
    <div class="b1">
        <div class="con1">
            <div class="item item-1"></div>
            <div class="item item-2"></div>
            <div class="item item-3"></div>
            <div class="item item-4"></div>
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
              <li><a href="https://medium.com/nybles">Blog Us</a></li>
              <!-- <li><a href="../../geekhaven/contact.php">Contacts</a></li> -->
              <li><a href="../../geekhaven/login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


      <div class="container-fluid title" id="projects" style="margin-top:70px;">
        <p class="whiteToBlack">
          PR</span><span class="texta"  style="color: #13F7D2;">O</span>JECT
        </p>
        <hr class="line">
        

        <section class="container title-cards" style="margin-bottom:50px;">
        <?php
          $query = "SELECT * FROM Projects WHERE `wing_id`='$wing_id'";

          $result = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($result)){
            $pro_name = $row['project_name'];
            $pro_link = $row['project_link'];
            $code = $row['source_code_link'];
            $pro_des = $row['description'];
            $pro_image = $row['image'];
            $pro_blog_link = $row['blog_link'];
            ?>
          <div class="col-12 col-sm-12 col-md-12" style="margin-top: 100px;"> 
            <img src="../../images/circle.png" class="circle-card-1 c1" style="left: -90px;">
              <div class="col-md-12 card-title">
                <p class="whiteToBlack date">2020</p>
                <hr class="line">
                <h1 class="whiteToBlack"><?php echo $pro_name;?></h1>
                <div class="col-md-6">
                  <p class="card-text whiteToBlack"><?php echo $pro_des;?></p>
                  <?php echo"
                  <a href='{$pro_link}'>";?>
                  <button class="btn btn-default col-md-6 card-btn">
                    <span class="blacktowhite">Link to the Project</span>
                  </button>
                  </a>
                </div>

              </div>
          </div>           
            <?php
          }          
        ?>


        </section>
    </div>


      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
      <script type="text/javascript" src="list.js"></script>

</body>
</html>