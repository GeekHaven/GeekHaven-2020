<?php
    session_start();
    include 'geekhaven/auth.php';
    require "./database/member_info.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekHaven</title>
    <link rel="shortcut icon" href="images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="index.css" type="text/css">
    <!-- <link rel="stylesheet" href="./wing/webd.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="./wing/style.css" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    
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
    <div id="particles-js"></div>

    <div class="wrapper">
            <nav class="navbar navbar-fixed-top" style="opacity: 0.9;">
                <div class="container-fullwidth" style="padding: 0 5%;">
                  <img class="nav-logo" src="./images/gh.png">
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
                      <li><a href="#wings-section">Wings</a></li>
                      <li><a href="#overall">Coordinators</a></li>
                      <li><a href="#footer">Contacts</a></li>
                      <li><a href="./geekhaven/login.php">Login</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
        
        <div class="container-fluid" style="height: 100%;">
            <div class="intro-header">
                <h1 class="sub-heading">IIIT ALLAHABAD</h1>

                <div class="theme-button">
                    <label class="switch">
                        <input type="checkbox" id="checkbox" checked>
                        <span class="slider round theme" style="background-color: white;"></span>
                    </label>
                </div>

                <!-- <i class="fa fa-sun-o theme" style="color: #13F7D2;padding: 10px;" aria-hidden="true"></i>   -->
                <?php
                    $query = 'SELECT * FROM geekhavenInfo';
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        $name =$row['name'];   
                        $des =$row['description']; 
                    }
                ?>
                <h1 class="main-heading"><?php echo $name;?></h1>
                <p class="intro-heading"><?php echo $des;?></p>
            </div>
        </div>

    </div>

    <div style="margin-bottom: 50px;"> 
        <a href="#wings-section" style="text-decoration: none;">
            <p class="view-all">
                VIEW ALL WINGS
            </p>
            <div class="arrow-down">
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </div>
        </a>
        
    </div>
    
    <section class="container-fluid" id="wings-section" style="padding: 0 40px;">
    <?php
        $query = 'SELECT * FROM wings';
        $result = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($result)){
            $wingname =$row['wing'];
            $winginfo =$row['info'];
            $id =$row['wing_id'];
            $logo = base64_encode($row['logo']);
            ?>
            <div class="col-12 col-sm-6 col-md-4 margin-div-bottom">
<!-- image -->
                <img src="data:image/jpeg;base64,<?php echo $logo ?>" class="wing-image webd-card" style="width: 100px;"/>
                <p class="wing-title">
                    <?php echo $wingname; ?>
                </p>
                <p class="wing-dis wing-dis-index" style="
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 4; 
                    height: 5em;
                    -webkit-box-orient: vertical;">
                    <?php echo $winginfo; ?>
                </p>
                <?php
                echo "<a href='wing.php?id={$row['wing_id']}' class='more'>More</a>" ;
                ?>
            </div>
            <?php
        }
    ?>
        <div class="col-12 col-sm-6 col-md-4 margin-div-bottom1">
            <img class="dot-image arrow" src="images/arrow.png">
        </div>
        <div class="col-12 col-sm-6 col-md-4 margin-div-bottom1 display-dot">
            <img class="dot-image" src="images/dots.png">
        </div>
    </section>
    
    <section id="overall" class="overall-section" style="border-radius: 20px;border: 3.5px solid rgb(13, 156, 133);">
            <p class="overall-heading row">
                Overall <br>Coordinators 
            </p>
            <div class="overall-box-cover row">
            <?php
                $admin_value='2';        
                $query = "SELECT * FROM credentials WHERE admin_value=$admin_value ";
                $coordiResult = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($coordiResult)){
                    $id =$row['member_id'];
                    $query = "SELECT * FROM member WHERE member_id = $id";
                    $result = mysqli_query($connection,$query);
                    if($member_array = mysqli_fetch_assoc($result)){
                        $member = $member_array;
                        $name = $member['name']; 
                        $image = $member['image'];
                        $social=$member['social_handles'];    
                        $querySocial = "SELECT * FROM social_handles WHERE social_handles_id = $social";
                        $resultSocial = mysqli_query($connection,$querySocial);
                        ?>
                    
                        <div class="col-12 col-sm-6 overall-box">
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" class="overall-image"/>'; ?>
                            <p class="overall-title">
                                <?php echo $name; ?>
                            </p>
                            <p class="overall-post">
                                OVERALL COORDINATOR
                            </p>
                            <?php
                                echo "<a href='./meminfo.php?id={$member['member_id']}' class='more'>More</a>" ;
                                ?>
                            <?php 
                                if($social_array = mysqli_fetch_assoc($resultSocial)){
                                    $git = $social_array['github'];
                                    $mail = $social_array['mail'];
                                    $face = $social_array['facebook'];
                                    $insta = $social_array['instagram'];
                                    $chef = $social_array['codechef'];
                                    $force = $social_array['codeforces'];
                                    $linkedin = $social_array['linkedin'];
                                    $rank = $social_array['hackerrank'];
                                    $earth = $social_array['hackerearth'];
                                    $twi = $social_array['twitter'];
                                    ?>
                                    <div class="overall-icon-div">
                                    <?php
                                        if($face){

                                            ?>
                                            <a href="<?php echo $face; ?>">
                                                <div class="overall-icon fb-icon">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="overall-icon fb-icon">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </div>
                                            <?php
                                        }
                                    ?>

                                    <?php
                                        if($git){

                                            ?>
                                            <a href="<?php echo $git; ?>">
                                                <div class="overall-icon">
                                                    <i class="fa fa-github" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="overall-icon ">
                                                    <i class="fa fa-github" aria-hidden="true"></i>
                                                </div>
                                            <?php
                                        }
                                    ?>

                                    <?php
                                        if($insta){

                                            ?>
                                            <a href="<?php echo $insta; ?>">
                                                <div class="overall-icon">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </div>
                                            </a>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <div class="overall-icon ">
                                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                                </div>
                                            <?php
                                        }
                                    ?>
                                        </div>
                                    <?php
                                }
                            ?>
                                        
                        </div>            
                        <?php
                        }
                       
                }
            ?>      
        </div>    
    </section>
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


<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script type="text/javascript" src="index.js"></script>
</body>
</html>