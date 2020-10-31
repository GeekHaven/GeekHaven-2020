<?php
  if(isset($_GET['id'])){
    require "./database/member_info.php";
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
    <title><?php echo $wingName;?></title>
    <link rel="shortcut icon" href="./images/gh.svg" type="image/png" />
    <link rel="stylesheet" href="./wing/webd.css" type="text/css">
    <!-- <link rel="stylesheet" href="./wing/style.css" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
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
              <li><a href="#projects">Projects</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#blogs">Blogs</a></li>
              <li><a href="#footer">Contacts</a></li>
              <li><a href="./geekhaven/login.php">Login</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="wrapper">
            <div class="intro-header col-sm-6">
                <div class="heading main-heading"><?php echo $wing;?></div>
                <p class="intro-heading"><?php echo $info;?></p>
            </div>
            <div class="webd-logo col-sm-6">
                <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>'; ?>
            </div>
      </div>

      <div class="whats-new texta">
        <p>What's New</p>
        <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
      </div>

      <div class="container-fluid announcements">
        <p class="whiteToBlack">
          ANNOU</span><span class="texta" style="color: #13F7D2;">N</span>CEMENTS
        </p>
        <hr class="line">
        <div class="ann-desc container-fluid">
          <div class="row">

            <?php
              $query = "SELECT * FROM announcements WHERE `organizer`='$wing'";
              $j = 0;

              $result = mysqli_query($connection,$query);
              while(($row = mysqli_fetch_assoc($result))&&($j<2)){
                $j = $j+1;
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
                $image = $row['image'];
                ?>
                <div class="col-12 col-sm-12 col-md-6 event-1" style="padding: 0;margin:0;">
                  <div class="row">

                    <div class="col-md-4 event-date" style="position: relative;text-align: center;padding: 0;margin:0;" id="event-box">
                      <img src="images/logo.png" alt="" id="event-card-image" style="width:100%;filter: blur(3px);-webkit-filter: blur(3px);padding:0;margin:0;">

                      <div id="date-box" style="position: absolute;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);padding:0; margin:0;">
                          <p class="blacktowhite"><?php echo $months[$mon];?></p>
                          <p class="number blacktowhite"><?php echo $date[2];?></p>
                      </div>

                    </div>

                    <div class="col-md-8 event-desc">
                      <h1 class="whiteToBlack"><?php echo $ann_name;?></h1>
                      <p class="whiteToBlack"><?php echo $ann_info;?></p>
                    </div>
                  </div>
                </div>
                <?php
              }
            ?>
            <!-- <div class="col-12 col-sm-12 col-md-6 event-1"> -->
              <!-- <div class="row">
                <div class="col-md-4 event-date">
                  <p class="blacktowhite">JUNE</p>
                  <p class="number blacktowhite">21</p>
                </div>
                <div class="col-md-8 event-desc">
                  <h1 class="whiteToBlack">Event Name</h1>
                  <p class="whiteToBlack"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard .</p>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div div class="whats-new texta">
      <?php
      echo "<a href='./complete_list/announcements/announcements.php?id={$wing_id}' class='viewall' style='text-decoration:none;color: #13F7D2;'><p>View All</p></a>";
      ?>
      
      </div>
      <div class="container-fluid title" id="projects">
        <p class="whiteToBlack">
          PR</span><span class="texta"  style="color: #13F7D2;">O</span>JECT
        </p>
        <hr class="line">

        <section class="container title-cards">
        <?php
          $query = "SELECT * FROM Projects WHERE `wing_id`='$wing_id'";
          $i=0;

          $result = mysqli_query($connection,$query);
          while(($row = mysqli_fetch_assoc($result))&&($i<3)){
            $i = $i+1;
            $pro_name = $row['project_name'];
            $pro_link = $row['project_link'];
            $code = $row['source_code_link'];
            $pro_des = $row['description'];
            $pro_image = $row['image'];
            $pro_blog_link = $row['blog_link'];
            ?>
            <div class="col-12 col-sm-12 col-md-12" style="margin-top: 100px;"> 
                <img src="./images/circle.png" class="circle-card-1 c1" style="left: -90px;"/> 
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


           <!-- <div class="col-12 col-sm-12 col-md-12" style="margin-top: 100px;"> 
            <img src="../../images/circle.png" class="circle-card-1 c1" style="left: 40%;">
              <div class="col-md-12 card-title card-2">
                <p class="whiteToBlack date" >2020</p>
                <hr class="line">
                <h1 class="whiteToBlack">Title of the Project</h1>
                <div class="col-md-6">
                  <p class="card-text whiteToBlack">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <button class="btn btn-default col-md-6 card-btn">
                    <span class="blacktowhite">Link to the Project</span>
                  </button>
                </div>

              </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12" style="margin-top: 100px;">
            <img src="../../images/circle.png" class="circle-card-1 c3" style="left: -90px;">
              <div class="col-md-12 card-title card-3">
                <p class="whiteToBlack date">2020</p>
                <hr class="line">
                <h1 class="whiteToBlack">Title of the Project</h1>
                <div class="col-md-6">
                  <p class="card-text whiteToBlack">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <button class="btn btn-default col-md-6 card-btn">
                    <span class="blacktowhite">Link to the Project</span>
                  </button>
                </div> -->

              </div>
          </div> 
        </section>
    </div>
    <div div class="whats-new texta">
      <?php
      echo "<a href='./complete_list/announcements/projects.php?id={$wing_id}' class='viewall' style='text-decoration:none;color: #13F7D2;'><p>View All</p></a>";
      ?>
      
      </div>
      <section style="margin-top: 100px;" id="team">
        <p class="wing-heading whiteToBlack">
          <span>TE</span><span class="texta" style="color: #13F7D2;">A</span><span>M</span>
        </p>
        <hr class="line">
          <div class="container-fluid">
              <div class="row" style="text-align:center">
                <img src="./images/zigzag.png" class="zigzag-team" style="position:absolute;left:0;">
                <?php
                    $query = "SELECT * FROM member WHERE `wing`='$wing' AND `post`='coordinator'";
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['name'];
                        $roll_no = $row['roll_no'];
                        $image = $row['image'];
                        $des = $row['description'];
                        $hof = $row['hof'];
                        $social_id = $row['social_handles'];
                        $query = "SELECT * FROM social_handles WHERE `social_handles_id`='$social_id'";
                        $res = mysqli_query($connection,$query);
                        while($data = mysqli_fetch_assoc($res)){
                            $git = $data['github'];
                            $mail = $data['mail'];
                            $face = $data['facebook'];
                            $insta = $data['instagram'];
                            $chef = $data['codechef'];
                            $force = $data['codeforces'];
                            $linkedin = $data['linkedin'];
                            $rank = $data['hackerrank'];
                            $earth = $data['hackerearth'];
                            $twi = $data['twitter'];
                        }
                        $sess = $row['session'];
                        $post = $row['post'];
                        ?>
                         
                        
                            <div class="col-12 col-sm-12 col-md-5 coordi-div" style="padding:0px; display:inline-block; float:none;">
                              <!-- <div class="images-coordi"> -->
                              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" class="images-coordi"/>'; ?>
                              <!-- </div> -->
                              <p class="coordi-name whiteToBlack">
                                <?php echo $name?>
                              </p>
                              <p class="coordi-post">
                                COORDINATOR
                              </p>
                              <div style="font-size: 20px;padding: 5px;">
                              <?php
                                echo "<a href='./meminfo.php?id={$row['member_id']}' class='more'>More</a>" ;
                                ?>
                              </div>
                              <div class="overall-icon-div" style="height:50px; display:inline-block;">
                              <?php 
                                if($face){

                                  ?>                       
                                  <a href="<?php echo $face;?>">
                                      <div class="overall-icon fb-icon">
                                          <i class="fa fa-facebook" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon fb-icon">
                                    <i class="fa fa-facebook" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                              <?php 
                                if($git){

                                  ?>                       
                                  <a href="<?php echo $git;?>">
                                      <div class="overall-icon fb-icon">
                                          <i class="fa fa-github" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon">
                                    <i class="fa fa-github" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                              <?php 
                                if($insta){

                                  ?>                       
                                  <a href="<?php echo $insta;?>">
                                      <div class="overall-icon">
                                          <i class="fa fa-instagram" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon">
                                    <i class="fa fa-instagram" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                                </div>
                              </div>
                        <?php
                    }
                ?> 
              </div>
              <div class="row" style="text-align:center">
              <?php
                    $query = "SELECT * FROM member WHERE `wing`='$wing' AND `post`='member'";
                    $result = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['name'];
                        $roll_no = $row['roll_no'];
                        $image = $row['image'];
                        $des = $row['description'];
                        $hof = $row['hof'];
                        $social_id = $row['social_handles'];
                        $query = "SELECT * FROM social_handles WHERE `social_handles_id`='$social_id'";
                        $res = mysqli_query($connection,$query);
                        while($data = mysqli_fetch_assoc($res)){
                            $git = $data['github'];
                            $mail = $data['mail'];
                            $face = $data['facebook'];
                            $insta = $data['instagram'];
                            $chef = $data['codechef'];
                            $force = $data['codeforces'];
                            $linkedin = $data['linkedin'];
                            $rank = $data['hackerrank'];
                            $earth = $data['hackerearth'];
                            $twi = $data['twitter'];
                        }
                        $sess = $row['session'];
                        $post = $row['post'];
                        ?>
                        <div class="col-12 col-sm-12 col-md-4 member-div" style="display:inline-block; float:none;">
                          <div class="images-cover">
                            <!-- <div class="images-member"> -->
                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"class="images-coordi"/>'; ?>
                            <!-- </div> -->
                          </div>
                          
                          <p class="coordi-name whiteToBlack">
                            <?php echo $name?>
                          </p>
                          <p class="coordi-post">
                            MEMBER
                          </p>
                          <div style="font-size: 20px;padding: 5px;">
                          <?php
                          echo "<a href='./meminfo.php?id={$row['member_id']}' class='more'>More</a>" ;
                          ?>
                          </div>
                          <div class="overall-icon-div" style="height:50px; display:inline-block;">
                          <?php 
                                if($face){

                                  ?>                       
                                  <a href="<?php echo $face;?>">
                                      <div class="overall-icon fb-icon">
                                          <i class="fa fa-facebook" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon fb-icon">
                                    <i class="fa fa-facebook" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                              <?php 
                                if($git){

                                  ?>                       
                                  <a href="<?php echo $git;?>">
                                      <div class="overall-icon fb-icon">
                                          <i class="fa fa-github" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon">
                                    <i class="fa fa-github" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                              <?php 
                                if($insta){

                                  ?>                       
                                  <a href="<?php echo $insta;?>">
                                      <div class="overall-icon">
                                          <i class="fa fa-instagram" aria-hidden="true" ></i>
                                      </div>
                                  </a>
                                  <?php 
                                }
                                else{
                                  ?>
                                    <div class="overall-icon">
                                    <i class="fa fa-instagram" aria-hidden="true" ></i>
                                    </div>
                                  <?php
                                }
                              ?>
                          </div>
                        </div>
                        <?php
                        
                    }
              ?>
                    
                </div>
              </div>
            </div>
          </div>
        
      </section>
      <section class="container-fluid" style="margin-top: 100px;margin-bottom: 100px;" id="blogs">
        <img src="./images/circle.png" class="circle-blog">
        <p class="wing-heading whiteToBlack">
          <span>BL</span><span class="texta" style="color: #13F7D2;">O</span><span>GS</span>
        </p>
        <hr class="line">
        <div class="row div-blog" style="display: flex;justify-content: space-evenly;margin-left: 0px;margin-right: 0px;">        
        <?php
          $query = "SELECT * FROM blogs WHERE `wing_id`='$wing_id' ";
          $result = mysqli_query($connection,$query);
          $j=0;
          while(($row = mysqli_fetch_assoc($result))&&($j<3)){
              $j = $j+1;
              $title = $row['blog_title'];
              $des = $row['description'];
              $image = $row['image'];
              $link = $row['blog_link'];
              ?>
              <div class="col-12 col-sm-12 col-md-3 blog-div whiteToblackBg">
              
                <!-- <div class="images-blog blog-1" style="background-color: #D52B2B;"> -->
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
      </section>  
      <div class="whats-new texta padding-t-0">
      <?php
      echo "<a href='./complete_list/blogs/blog.php?id={$wing_id}' class='viewall' style='text-decoration:none;color: #13F7D2;'><p>View All</p></a>";
      ?>
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
        <p class="overall-post more" style="color: rgb(19, 247, 210);font-family: Montserrat;font-weight: 600;font-size: 18px;padding: 10px;line-height: 22px;">
        © Copyright, Geekhaven IIITA · <a href="./credits.html" style="color: inherit;border-color:#15C4A8;border-radius: 5px;padding: 5px;">Credits</a>
        </p>
    </div>
      <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      
      <script type="text/javascript" src="wing.js"></script>

</body>
</html>