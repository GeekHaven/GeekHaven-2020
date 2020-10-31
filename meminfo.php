<?php
  if(isset($_GET['id'])){
    require "./database/member_info.php";
    $id=mysqli_real_escape_string($connection,$_GET['id']);
    $query = "SELECT * FROM member WHERE `member_id`='$id'";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $info = $row['description'];
        $image = $row['image'];
        $wing =$row['wing'];
        $post = $row['post'];
        $session = $row['session'];
        $roll_no = $row['roll_no'];
        $social_handles_id = $row['social_handles'];
    }

    $query = "SELECT * FROM social_handles WHERE `social_handles_id`='$social_handles_id'";
    $result = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($result)){
        $face = $row['facebook'];
        $github = $row['github'];
        $insta = $row['instagram'];
        $twitter = $row['twitter'];
        $linkedin = $row['linkedin'];
        $mail = $row['mail'];
    }
  }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $name;?> | <?php echo $wing;?></title>
    <link rel="shortcut icon" href="./images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="./wing/webd.css" type="text/css">
    <link rel="stylesheet" href="./wing/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-fixed-top"style="opacity: 0.9;">
        <div class="container-fullwidth" style="padding: 0 5%;">
          <a href="./index.php"><img class="nav-logo" src="./images/gh.png"></a>
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
              <li><a href="./index.php">Home</a></li>
              <li><a href="#footer">Contacts</a></li>
              <li><a href="./geekhaven/login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="b1">
        <div class="e-loadholder">
            <div class="m-loader">
                <span class="e-text">Geekhaven</span>
            </div>
        </div>
    </div>
    <div class="container mem-page-container">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 contacts mem-container">
                <div class="image-mem-container">
                    <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" class="image-mem"/>'; ?>
                    <div class="name-wing">
                        <p class="name-mem"><?php echo $name?></p>
                        <p class="wing-mem"><?php echo $post?></p>
                    </div>
                </div>
                <div class="icons text-center">
                    <?php 
                    if($insta){
                        ?>                       
                        <div class="icon-mem">
                            <a href="<?php echo $insta;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>
                    <?php 
                    if($face){
                        ?>      
                        <div class="icon-mem">
                            <a href="<?php echo $face;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>
                    <?php 
                    if($twitter){
                        ?>      
                        <div class="icon-mem">
                            <a href="<?php echo $twitter;?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>
                    <?php 
                    if($github){
                        ?>      
                        <div class="icon-mem">
                            <a href="<?php echo $github;?>"><i class="fa fa-github" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>
                    <?php 
                    if($mail){
                        ?>      
                        <div class="icon-mem">
                            <a href="mailto:<?php echo $mail;?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>
                    <?php 
                    if($linkedin){
                        ?>      
                        <div class="icon-mem">
                            <a href="<?php echo $linkedin;?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div> 
                        <?php 
                    }
                    ?>

                </div>
                <p class="description-mem"><?php echo $info?></p>
                    <p class="roll-mem"><span class="texta">Roll Number:</span> <?php echo $roll_no;?></p>
                    <img src="./images/cross.png" class="cross-image">
            </div>               
            <div class="col-lg-3"></div>
          </div>
    </div>
      
      
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
            <div class="contacts col-12 col-lg-6 col-xl-6" style="padding-left: 0px;">
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
        <p class="overall-post more" style="padding-top: 30px;font-family: Montserrat;font-style: normal;font-weight: 600;font-size: 18px;">
        © Copyright, Geekhaven IIITA · <a href="./credits.html" style="color: inherit;border-color:#15C4A8;border-radius: 5px;padding: 5px;">Credits</a>
        </p>
    </div>
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      
      <script type="text/javascript" src="wing.js"></script>

</body>
</html>