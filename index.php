<?php
    session_start();
    include 'geekhaven/auth.php';
    $connection = mysqli_connect("localhost","root","");
    mysqli_select_db($connection,'geekhav');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekHaven</title>
    <link rel="shortcut icon" href="images/gh.svg" type="image/png" />
    <script src="/index.js" type="text/javascript"></script>
    <link rel="stylesheet" href="index.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

    <div id="particles-js"></div>

    <div class="wrapper">
            <nav class="navbar navbar-fixed-top" style="opacity: 0.9;">
                <div class="container-fullwidth">
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
                      <li><a href="#footer">Blogs</a></li>
                      <li><a href="#wings-section">Wings</a></li>
                      <li><a href="#overall">Coordinators</a></li>
                      <li><a href="./geekhaven/contact.html">Contacts</a></li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
        
        <div class="container-fluid">
            <div class="intro-header">
                <h1 class="sub-heading">IIIT ALLAHABAD</h1>

                <div class="theme-button">
                    <label class="switch">
                        <input type="checkbox" id="checkbox" checked>
                        <span class="slider round theme" style="background-color: white;"></span>
                    </label>
                </div>

                <!-- <i class="fa fa-sun-o theme" style="color: #13F7D2;padding: 10px;" aria-hidden="true"></i>   -->
                <h1 class="main-heading">GeekHaven</h1>
                <p class="intro-heading"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
    
    <section class="container-fluid" id="wings-section">
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
                <p class="wing-dis" style="
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 4; 
                    height: 4.7em;
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
    
    <section id="overall" class="overall-section" style="border-radius: 20px;">
            <p class="overall-heading row">
                Overall <br>Coordinators 
            </p>
            <div class="overall-box-cover row">
            <?php
                $admin_value='2';        
                $query = "SELECT * FROM credentials WHERE admin_value=$admin_value ";
                $result = mysqli_query($connection,$query);
                
                while($row = mysqli_fetch_assoc($result)){
                    $id =$row['member_id'];
                    $query = "SELECT * FROM member WHERE member_id = $id";
                    $result = mysqli_query($connection,$query);
                    if($member_array = mysqli_fetch_assoc($result)){
                        $member = $member_array;
                        $name = $member['name']; 
                        $social=$member['social_handles'];    
                        $querySocial = "SELECT * FROM social_handles WHERE social_handles_id = $social";
                        $resultSocial = mysqli_query($connection,$querySocial);
                        ?>
                    
                        <div class="col-12 col-sm-6 overall-box">
                            <div class="overall-image"></div>
                            <p class="overall-title">
                                <?php echo $name; ?>
                            </p>
                            <p class="overall-post">
                                OVERALL COORDINATOR
                            </p>
                            
                            <?php 
                                if($social_array = mysqli_fetch_assoc($resultSocial)){
                                    $fb=$social_array['facebook'];
                                    $insta=$social_array['instagram'];
                                    $twitter=$social_array['twitter'];
                                    ?>
                                    <div class="overall-icon-div">
                                        <a href="<?php echo $fb; ?>">
                                            <div class="overall-icon fb-icon">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        <a href="<?php echo $twitter; ?>">
                                            <div class="overall-icon">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                        <a href="<?php echo $insta; ?>">
                                            <div class="overall-icon">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </div>
                                        </a>
                                            
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
                <button class="btn btn-default text-left">
                    <span>Blogs by us <i class="fa fa-angle-right" style="font-weight: bold;" aria-hidden="true"></i><i class="fa fa-angle-right" style="font-weight: bold;" aria-hidden="true"></i></span>
                </button>
            </div>
            <div class="contacts col-12 col-lg-6 col-xl-6">
                <h2 style="padding-top:15px ;padding-right:0px;" >Contact us</h2>
                <div class="icons">
                    <a href="#"><i class="fa fa-facebook" style="padding: 5px 3px;" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </section>


<script type="text/javascript" src="particles.js"></script>
<script type="text/javascript" src="app.js"></script>
<script src="https://code.jquery.com/jquery-2.1.3.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

<script>
    $(function () {
  $(document).scroll(function () {

    var $logo = $(".nav-logo");
    $logo.toggleClass('scroll-img', $(this).scrollTop() > 10);

    var $nav_links = $(".navbar-nav li a")
    var $bars = $(".fa-bars");
    var $navabar = $(".navbar-fixed-top");
    
    if(j==1) //light mode
    {
        $logo.toggleClass('mode-change-color', $(this).scrollTop() > $logo.height());
        $bars.toggleClass('mode-change-color', $(this).scrollTop() > $logo.height());   
        $nav_links.toggleClass('link-change-color', $(this).scrollTop() > $logo.height()); 

        if (window.matchMedia('(max-width: 768px)').matches)
        {
            $nav_links.toggleClass('link2-change-color', $(this).scrollTop() > $logo.height()); 
        }

    }

    var $nav = $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > 10);

  });
});

    var i = 0;
    var j=0;
    $('.margin-div-bottom')
      .mouseover(function() {
        
        $(this).children('img').css("margin","auto" );
        $(this).children('p').css("text-align","center" );
        $(this).children('a').css("margin-left","45%" );
        $(this).css("box-shadow","0 0 0 2pt #13F7D2" );
      })
      .mouseout(function() {
        $(this).children('img').css("margin-left","0%" );
        $(this).children('p').css("text-align","left" );
        $(this).children('a').css("margin-left","0%" );
        $(this).css("box-shadow","0 0 0 0pt #13F7D2" );
      });


      if(localStorage.getItem("theme")=="0"){

        $(document).ready(function(){
                $('.theme').click()
            });
            $(document.body).attr('style', 'background-color: white !important');
            $(".margin-div-bottom").children('p').css('color','black'); 
            $(".navbar-nav li a").css('color','#000000')
            $('.slider').css('background-color','black');           
            $('.sub-heading').attr('style','color: #0D9C85')
            $('.intro-heading').css('color','black')
            $('.main-heading').css('color','black')
            $('.nav-logo').attr('src','images/gh.svg')
            $('.view-all').attr('style', 'color: #0D9C85')
            $('.arrow-down').attr('style','color: #0D9C85')
            $(".more").css('color','#0D9C75')
            $('.arrow').attr('src','images/arrow-light.png')
            $('.fa-bars').css('color','#000000')
            $('.overall-section').css('background-color','#343538');
            $('.blogs h2').attr('style','color: #000000')
            $('.blogs button').attr('style','background-color: #15C4A8; border-color: #15C4A8')
            $('.blogs span').attr('style','color: #FFFFFF')
            $('.contacts h2').attr('style','color: #000000')
            $('.contacts a').attr('style','color: #15C4A8; border-color:#15C4A8')
            $('.footer').attr('style','background-color: #FFFFFF')

            particlesJS('particles-js',
  
                    {
                        "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                            "enable": true,
                            "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#000000"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                            "width": 0,
                            "color": "#000000"
                            },
                            "polygon": {
                            "nb_sides": 5
                            },
                            "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                            }
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false,
                            "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                            }
                        },
                        "size": {
                            "value": 5,
                            "random": true,
                            "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#252628",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 6,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                            }
                        }
                        },
                        "interactivity": {
                        "detect_on": "window",
                        "events": {
                            "onhover": {
                            "enable": true,
                            "mode": "repulse"
                            },
                            "onclick": {
                            "enable": true,
                            "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                            },
                            "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                            },
                            "repulse": {
                            "distance": 200
                            },
                            "push": {
                            "particles_nb": 4
                            },
                            "remove": {
                            "particles_nb": 2
                            }
                        }
                        },
                        "retina_detect": true,
                        "config_demo": {
                        "hide_card": false,
                        "background_color": "#b61924",
                        "background_image": "",
                        "background_position": "50% 50%",
                        "background_repeat": "no-repeat",
                        "background_size": "cover"
                        }
                    }
                    );

    }else{  

        $(document.body).attr('style', 'background-color: #252628 !important');
            $(".margin-div-bottom").children('p').css('color','white');
            $(".navbar-nav li a").css('color','#13F7D2')
            $('.sub-heading').attr('style','color: #13F7D2')
            $('.intro-heading').css('color','white')
            $('.main-heading').css('color','white')
            $('.nav-logo').attr('src','images/gh.png')
            $('.view-all').attr('style', 'color: #13F7D2')
            $('.arrow-down').attr('style','color: #13F7D2')
            $(".more").css('color','#13F7D2')
            $('.arrow').attr('src','images/arrow.png')
            $('.fa-bars').css('color','#FFFFFF')
            $('.slider').css('background-color','white');
            $('.overall-section').css('background-color','#27282B');
            $('.blogs h2').attr('style','color: #FFFFFF')
            $('.blogs button').attr('style','background-color: #13F7D2; border-color: #13F7D2')
            $('.blogs span').attr('style','color: #000000')
            $('.contacts h2').attr('style','color: #FFFFFF')
            $('.contacts a').attr('style','color: #13F7D2; border-color:#13F7D2')
            $('.footer').attr('style','background-color: #1D1D1F')

            particlesJS('particles-js',
  
            {
                "particles": {
                "number": {
                    "value": 80,
                    "density": {
                    "enable": true,
                    "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                    "width": 0,
                    "color": "#000000"
                    },
                    "polygon": {
                    "nb_sides": 5
                    },
                    "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                    }
                }
                },
                "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                    "enable": true,
                    "mode": "repulse"
                    },
                    "onclick": {
                    "enable": true,
                    "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                    },
                    "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                    },
                    "repulse": {
                    "distance": 200
                    },
                    "push": {
                    "particles_nb": 4
                    },
                    "remove": {
                    "particles_nb": 2
                    }
                }
                },
                "retina_detect": true,
                "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
                }
            }

            );    

    }


    $('.theme').click(function(){
        if(j==1){ //dark mode
            localStorage.setItem("theme", 1);
            $(document.body).attr('style', 'background-color: #252628 !important');
            $(".margin-div-bottom").children('p').css('color','white');
            $(".navbar-nav li a").css('color','#13F7D2')
            $('.sub-heading').attr('style','color: #13F7D2')
            $('.intro-heading').css('color','white')
            $('.main-heading').css('color','white')
            $('.nav-logo').attr('src','images/gh.png')
            $('.view-all').attr('style', 'color: #13F7D2')
            $('.arrow-down').attr('style','color: #13F7D2')
            $(".more").css('color','#13F7D2')
            $('.arrow').attr('src','images/arrow.png')
            $('.fa-bars').css('color','#FFFFFF')
            $('.slider').css('background-color','white');
            $('.overall-section').css('background-color','#27282B');
            $('.blogs h2').attr('style','color: #FFFFFF')
            $('.blogs button').attr('style','background-color: #13F7D2; border-color: #13F7D2')
            $('.blogs span').attr('style','color: #000000')
            $('.contacts h2').attr('style','color: #FFFFFF')
            $('.contacts a').attr('style','color: #13F7D2; border-color:#13F7D2')
            $('.footer').attr('style','background-color: #1D1D1F')

            particlesJS('particles-js',
  
            {
                "particles": {
                "number": {
                    "value": 80,
                    "density": {
                    "enable": true,
                    "value_area": 800
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                    "width": 0,
                    "color": "#000000"
                    },
                    "polygon": {
                    "nb_sides": 5
                    },
                    "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                    }
                },
                "size": {
                    "value": 5,
                    "random": true,
                    "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 150,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 6,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                    }
                }
                },
                "interactivity": {
                "detect_on": "window",
                "events": {
                    "onhover": {
                    "enable": true,
                    "mode": "repulse"
                    },
                    "onclick": {
                    "enable": true,
                    "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                    },
                    "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                    },
                    "repulse": {
                    "distance": 200
                    },
                    "push": {
                    "particles_nb": 4
                    },
                    "remove": {
                    "particles_nb": 2
                    }
                }
                },
                "retina_detect": true,
                "config_demo": {
                "hide_card": false,
                "background_color": "#b61924",
                "background_image": "",
                "background_position": "50% 50%",
                "background_repeat": "no-repeat",
                "background_size": "cover"
                }
            }

            );
            j=0;
        }
        else{  //light mode
            localStorage.setItem("theme", 0);
            $(document.body).attr('style', 'background-color: white !important');
            $(".margin-div-bottom").children('p').css('color','black'); 
            $(".navbar-nav li a").css('color','#000000')
            $('.slider').css('background-color','black');           
            $('.sub-heading').attr('style','color: #0D9C85')
            $('.intro-heading').css('color','black')
            $('.main-heading').css('color','black')
            $('.nav-logo').attr('src','images/gh.svg')
            $('.view-all').attr('style', 'color: #0D9C85')
            $('.arrow-down').attr('style','color: #0D9C85')
            $(".more").css('color','#0D9C75')
            $('.arrow').attr('src','images/arrow-light.png')
            $('.fa-bars').css('color','#000000')
            $('.overall-section').css('background-color','#343538');
            $('.blogs h2').attr('style','color: #000000')
            $('.blogs button').attr('style','background-color: #15C4A8; border-color: #15C4A8')
            $('.blogs span').attr('style','color: #FFFFFF')
            $('.contacts h2').attr('style','color: #000000')
            $('.contacts a').attr('style','color: #15C4A8; border-color:#15C4A8')
            $('.footer').attr('style','background-color: #e7e7e7')

            particlesJS('particles-js',
  
                    {
                        "particles": {
                        "number": {
                            "value": 80,
                            "density": {
                            "enable": true,
                            "value_area": 800
                            }
                        },
                        "color": {
                            "value": "#000000"
                        },
                        "shape": {
                            "type": "circle",
                            "stroke": {
                            "width": 0,
                            "color": "#000000"
                            },
                            "polygon": {
                            "nb_sides": 5
                            },
                            "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                            }
                        },
                        "opacity": {
                            "value": 0.5,
                            "random": false,
                            "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                            }
                        },
                        "size": {
                            "value": 5,
                            "random": true,
                            "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                            }
                        },
                        "line_linked": {
                            "enable": true,
                            "distance": 150,
                            "color": "#252628",
                            "opacity": 0.4,
                            "width": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 6,
                            "direction": "none",
                            "random": false,
                            "straight": false,
                            "out_mode": "out",
                            "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                            }
                        }
                        },
                        "interactivity": {
                        "detect_on": "window",
                        "events": {
                            "onhover": {
                            "enable": true,
                            "mode": "repulse"
                            },
                            "onclick": {
                            "enable": true,
                            "mode": "push"
                            },
                            "resize": true
                        },
                        "modes": {
                            "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                            },
                            "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                            },
                            "repulse": {
                            "distance": 200
                            },
                            "push": {
                            "particles_nb": 4
                            },
                            "remove": {
                            "particles_nb": 2
                            }
                        }
                        },
                        "retina_detect": true,
                        "config_demo": {
                        "hide_card": false,
                        "background_color": "#b61924",
                        "background_image": "",
                        "background_position": "50% 50%",
                        "background_repeat": "no-repeat",
                        "background_size": "cover"
                        }
                    }
                    );

            j=1;
        }
    }); 

    $(".margin-div-bottom").hover(function(){
        if(j==1){
            $(this).children(".more").css('color','#13F7D2');
            $(this).children('p').css('color','white');
        }else{
            $(this).children(".more").css('color','#13F7D2');
            $(this).children('p').css('color','white');
        }
    }, function(){
        if(j==1){
            $(this).children(".more").css('color','#0D9C85');
            $(this).children('p').css('color','black');

        }else{
            $(this).children(".more").css('color','#13F7D2');
            $(this).children('p').css('color','white');
        }
    });
    

    </script>
</body>
</html>