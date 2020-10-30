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
          $(this).css("box-shadow","0 2px 8px rgba(153, 153, 153, 0.3)");
          $(this).css("border-radius","4px");
        })
        .mouseout(function() {
          $(this).children('img').css("margin-left","0%" );
          $(this).children('p').css("text-align","left" );
          $(this).children('a').css("margin-left","0%" );
          $(this).css("box-shadow","0 0 0 rgba(153, 153, 153, 0.3)");
          $(this).css("border-radius","0");
        });
  
  
        if(localStorage.getItem("theme")=="0"){ //light mode
  
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
              $('.overall-section').css('background-color','#FFFFFF');
              $('.overall-heading').css('color','#000000');
              $('.overall-title').css('color','#000000');
              $('.overall-post').css('color','#0D9C85');
              $('.blogs h2').attr('style','color: #000000')
              $('.blogs button').attr('style','background-color: #15C4A8; border-color: #15C4A8')
              $('.blogs span').attr('style','color: #FFFFFF')
              $('.contacts h2').attr('style','color: #000000')
              $('.contacts a').attr('style','color: #15C4A8; border-color:#15C4A8')
              $('.footer').attr('style','background-color: #FFFFFF')

              $(document.body).append('<style>.e-loadholder .m-loader .e-text{border: 5px solid #0D9C85;}.e-loadholder{border: 5px solid #0D9C85;}.e-loadholder .m-loader{border: 5px solid #0D9C85;}.b1{background: white;}.e-loadholder .m-loader:after{background: white;}.e-loadholder:after{background: white;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: white;}</style>');

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
              $('.overall-heading').css('color','#13F7D2');
              $('.overall-title').css('color','#FFFFFF');
              $('.overall-post').css('color','#13F7D2');
              $('.blogs h2').attr('style','color: #FFFFFF')
              $('.blogs button').attr('style','background-color: #13F7D2; border-color: #13F7D2')
              $('.blogs span').attr('style','color: #000000')
              $('.contacts h2').attr('style','color: #FFFFFF')
              $('.contacts a').attr('style','color: #13F7D2; border-color:#13F7D2')
              $('.footer').attr('style','background-color: #1D1D1F')
  
            $(document.body).append('<style>.e-loadholder .m-loader .e-text{border: 5px solid #13F7D2;}.e-loadholder{border: 5px solid #13F7D2;}.e-loadholder .m-loader{border: 5px solid #13F7D2;}.b1{background: #252628;}.e-loadholder .m-loader:after{background: #252628;}.e-loadholder:after{background: #252628;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: #252628;}</style>');

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
              $('.overall-heading').css('color','#13F7D2');
              $('.overall-title').css('color','#FFFFFF');
              $('.overall-post').css('color','#13F7D2');
              $('.blogs h2').attr('style','color: #FFFFFF')
              $('.blogs button').attr('style','background-color: #13F7D2; border-color: #13F7D2')
              $('.blogs span').attr('style','color: #000000')
              $('.contacts h2').attr('style','color: #FFFFFF')
              $('.contacts a').attr('style','color: #13F7D2; border-color:#13F7D2')
              $('.footer').attr('style','background-color: #1D1D1F')
             
            $(document.body).append('<style>.e-loadholder .m-loader .e-text{border: 5px solid #13F7D2;}.e-loadholder{border: 5px solid #13F7D2;}.e-loadholder .m-loader{border: 5px solid #13F7D2;}.b1{background: #252628;}.e-loadholder .m-loader:after{background: #252628;}.e-loadholder:after{background: #252628;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: #252628;}</style>');
  
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
              $('.overall-section').css('background-color','#FFFFFF');
              $('.overall-heading').css('color','#000000');
              $('.overall-title').css('color','#000000');
              $('.overall-post').css('color','#0D9C85');
              $('.blogs h2').attr('style','color: #000000')
              $('.blogs button').attr('style','background-color: #15C4A8; border-color: #15C4A8')
              $('.blogs span').attr('style','color: #FFFFFF')
              $('.contacts h2').attr('style','color: #000000')
              $('.contacts a').attr('style','color: #15C4A8; border-color:#15C4A8')
              $('.footer').attr('style','background-color: #e7e7e7')
              
              $(document.body).append('<style>.e-loadholder .m-loader .e-text{border: 5px solid #0D9C85;}.e-loadholder{border: 5px solid #0D9C85;}.e-loadholder .m-loader{border: 5px solid #0D9C85;}.b1{background: white;}.e-loadholder .m-loader:after{background: white;}.e-loadholder:after{background: white;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: white;}</style>');

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
              $(this).children(".more").css('color','#0D9C85');
              $(this).children('p').css('color','black');
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
  
      $(document).ready(function() {
          //Preloader
          preloaderFadeOutTime = 500;
          function hidePreloader() {
          var preloader = $('.b1');
          preloader.fadeOut(preloaderFadeOutTime);
          }
          if(localStorage.getItem("theme")=="0"){
            $(document.body).append('<style>.e-loadholder .m-loader:after{background: white;}.e-loadholder:after{background: white;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: white;}</style>');
              $('.e-loadholder .m-loader').attr('style','border: 5px solid #0D9C85')  
              $('.e-loadholder').attr('style','border: 5px solid #0D9C85')  
              $('.e-loadholder .m-loader .e-text').attr('style','border: 5px solid #0D9C85')  
          }else{
            $('.e-loadholder .m-loader').attr('style','border: 5px solid #13F7D2')  
            $('.e-loadholder').attr('style','border: 5px solid #13F7D2')  
            $('.e-loadholder .m-loader .e-text').attr('style','border: 5px solid #13F7D2')  
            $(document.body).append('<style>.e-loadholder .m-loader:after{background: #252628;}.e-loadholder:after{background: #252628;}.e-loadholder .m-loader .e-text:before, .e-loadholder .m-loader .e-text:after{background: #252628;}</style>');
          }
          hidePreloader();
      });
      