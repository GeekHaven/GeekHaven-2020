<?php
require "../database/member_info.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Hall of Fame</title>
    <link rel="shortcut icon" href="./images/gh.svg" type="image/png" />

    <!-- <link rel="stylesheet" href="./wing/style.css" type="text/css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="pastMem.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection" />

</head>

<body>
    <div class="b1">
        <div class="con1">
            <div class="item item-1"></div>
            <div class="item item-2"></div>
            <div class="item item-3"></div>
            <div class="item item-4"></div>
        </div>
    </div>
    <nav class="navbar navbar-fixed-top" style="opacity: 0.9; background: none">
        <div class="container-fullwidth" style="padding: 0 5%">
            <a href="../index.php"><img class="nav-logo" src="../images/gh.png" /></a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" style="color: aliceblue !important" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="HOF.html">Hall Of Fame</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="wrapper" style="text-align: center">
        <div class="intro-header">
            <div class="heading main-heading"> <span id="xx" style="background-color: #252628 !important; z-index: 10; position: relative; padding-left: 20px;padding-right: 20px;">Former
                    Members</span>
                <hr class="line" style="position: relative; top: -50px; width: 80vw;" />
            </div>


        </div>
    </div>


    <?php
    $wingsArr = array(1 => 'Design', 2 => 'Web Development', 3 => 'Cyber Security', 4 => 'App Development', 5 => 'Artificial Intelligence', 6 => 'Foss', 7 => 'Competitive Programming');
    for ($i = 1; $i <= 7; $i++) {
        $query = "SELECT * FROM past_members WHERE `wing` = '$wingsArr[$i]'";
        $result = mysqli_query($connection, $query); ?>
        <div class="wing design whiteToBlack">
            <div class="headingg-wrapper">
                <h3 class="headingg"><?php echo $wingsArr[$i]; ?></h3>
            </div>
            <div class="carousel-container">
                <div class="carousel" id="2020">
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                        $name = $row['name'];
                        $roll_no = $row['roll_no'];
                        $image = $row['image'];
                        $des = $row['description'];
                        $hof = $row['hof'];
                        $wing = $row['wing'];
                        $social_id = $row['social_handles'];
                        $id = $row['member_id'];
                        $query = "SELECT * FROM social_handles WHERE `social_handles_id`='$social_id'";
                        $res = mysqli_query($connection, $query);
                        while ($data = mysqli_fetch_assoc($res)) {
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
                        <div class="carousel-item"> <a class="carousel-item-image"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($image) . '"  height=300px width=200px />'; ?></a>
                            <h5><?php echo $name; ?></h5>
                            <h6><?php echo $sess;?></h6>
                            <div class="icons text-center">
                                <a class="git" href="<?php echo $git ?> ">
                                    <div class="overall-icon">
                                        <i class="fa fa-github" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a class="linked" href="<?php echo $linkedin ?>">
                                    <div class="overall-icon">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </div>
                                </a>
                                <a class="mail" href="<?php echo $twi ?>">
                                    <div class="overall-icon">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php
                    } ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <section class="footer" id="footer">
        <div class="row" style="margin-right: 0px">
            <div class="blogs col-lg-6 col-xl-6">
                <h2>Get some good reads!</h2>
                <a href="https://medium.com/nybles" style="text-decoration: none">
                    <button class="btn btn-default text-left">
                        <span>Blogs by us <i class="fa fa-angle-right" style="font-weight: bold" aria-hidden="true"></i><i class="fa fa-angle-right" style="font-weight: bold" aria-hidden="true"></i></span>
                    </button>
                </a>
            </div>
            <div class="contacts col-12 col-lg-6 col-xl-6" style="padding-left: 0px">
                <h2 style="padding-top: 15px; padding-right: 0px">Contact us</h2>
                <div class="icons">
                    <a href="https://www.facebook.com/geekhaveniiita"><i class="fa fa-facebook" style="padding: 5px 3px" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/geekhaveniiita"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://github.com/GeekHaven"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/geekhaven_iiita/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="mailto:geekhaven@iiita.ac.in"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>
    <div style="text-align: center">
        <p class="overall-post more" style="padding-top: 30px">
            © Copyright, Geekhaven IIITA ·
            <a href="./credits.html" style="color: inherit; border-color: #15c4a8; border-radius: 5px; padding: 5px">Credits</a>
        </p>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $(".carousel").carousel();
            autoplay();
            function autoplay() {
                $('.carousel').carousel('next');
                setTimeout(autoplay, 2000);
            }
        });
    </script>
    <script type="text/javascript" src="wing.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>


</body>

</html>