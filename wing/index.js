$(document).ready(function(){
    if(localStorage.getItem("theme")=="0"){
    
        $(document.body).attr('style', 'background-color: white !important');
        $(".margin-div-bottom").children('p').css('color','black'); 
        $(".navbar-nav li a").css('color','#000000')
        $('.slider').css('background-color','black');           
        $('.sub-heading').attr('style','color: #0D9C85')
        $('.intro-heading').css('color','black')
        $('.main-heading').css('color','black')
        $('.nav-logo').attr('src','../../images/gh.svg')
        $('.texta').attr('style', 'color: #0D9C85')
        $('.coordi-post').attr('style', 'color: #0D9C85')
        $('.arrow-down').attr('style','color: #0D9C85')
        $(".more").css('color','#0D9C75')
        $('.whiteToBlack').attr('style', 'color: black')
        $('.blacktowhite').attr('style', 'color: white')
        $('.arrow').attr('src','images/arrow-light.png')
        $('.fa-bars').css('color','#000000')
        $('.design-card').attr('src','images/l5.png')
        $('.cc-card').attr('src','images/l6.png')
        $('.event-date').attr('style','background-color: #0D9C85; border-color: #0D9C85')
        $('.card-title').attr('style','background:linear-gradient(90deg, #F2A3A3 50%, #FFFFFF 50%);box-shadow: 0 0 10px #ccc')
        $('.card-2').attr('style','background:linear-gradient(90deg, #FFFFFF 50%, #BBB6F3 50%);box-shadow: 0 0 10px #ccc')   
        $('.card-3').attr('style','background:linear-gradient(90deg, #EDBDF4 50%, #FFFFFF 50%);box-shadow: 0 0 10px #ccc')     
        $('.card-btn').attr('style','background-color: #0D9C85 !important; border-color: #0D9C85 !important')
        $('.blogs h2').attr('style','color: #000000')
        $('.blogs button').attr('style','background-color: #15C4A8; border-color: #15C4A8')
        $('.blogs span').attr('style','color: #FFFFFF')
        $('.contacts h2').attr('style','color: #000000')
        $('.contacts a').attr('style','color: #15C4A8; border-color:#15C4A8')
        $('.footer').attr('style','background-color: #E7E7E7')
        $('.blog-div').attr('style', 'background-color: white')       
        $('.blog-heading').attr('style', 'color: black')
        $('.blog-subtitle').attr('style', 'color: black')
        $('.more-blog').attr('style', 'color: #0D9C85')
    
    
    }else{  
    
    $(document.body).attr('style', 'background-color: #252628 !important');
        $(".margin-div-bottom").children('p').css('color','white');
        $(".navbar-nav li a").css('color','#13F7D2')
        $('.sub-heading').attr('style','color: #13F7D2')
        $('.intro-heading').css('color','white')
        $('.main-heading').css('color','white')
        $('.nav-logo').attr('src','../../images/gh.png')
        $('.texta').attr('style', 'color: #13F7D2')
        $('.coordi-post').attr('style', 'color: #13F7D2')
        $('.arrow-down').attr('style','color: #13F7D2')
        $(".more").css('color','#13F7D2')
        $('.arrow').attr('src','../../images/arrow.png')
        $('.fa-bars').css('color','#FFFFFF')
        $('.slider').css('background-color','white');
        $('.whiteToBlack').attr('style', 'color: white')
        $('.blog-heading ').attr('style', 'color: white')
        $('.blog-subtitle ').attr('style', 'color: white')
        $('.blacktowhite').attr('style', 'color: black')
        $('.event-date').attr('style','background-color: #13F7D2; border-color: #13F7D2')
        $('.card-title').attr('style','background:linear-gradient(90deg, #d52b2b 50%, #27282b 50%);box-shadow: 0')
        $('.card-2').attr('style','background:linear-gradient(90deg, #27282B 50%, #4C40D2 50%);box-shadow: 0')    
        $('.card-3').attr('style','background:linear-gradient(90deg, #A823BD 50%, #27282B 50%);box-shadow: 0')    
        $('.card-btn').attr('style','background-color: #13F7D2 !important; border-color: #13F7D2 !important')
        $('.blogs h2').attr('style','color: #FFFFFF')
        $('.blogs button').attr('style','background-color: #13F7D2; border-color: #13F7D2')
        $('.blogs span').attr('style','color: #000000')
        $('.contacts h2').attr('style','color: #FFFFFF')
        $('.contacts a').attr('style','color: #13F7D2; border-color:#13F7D2')
        $('.footer').attr('style','background-color: #1D1D1F')
        $('.blog-div').attr('style', 'background-color: #252628 ')
        $('.more-blog').attr('style', 'color: #0D9C85')
    } 

});
