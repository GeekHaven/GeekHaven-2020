$(function () {
    $(document).scroll(function () {

        var $logo = $(".nav-logo");
        $logo.toggleClass('scroll-img', $(this).scrollTop() > 10);

        var $nav_links = $(".navbar-nav li a")

        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > 10);

    });
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