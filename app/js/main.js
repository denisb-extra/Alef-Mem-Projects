$(document).ready(function ($) {


    

	window.addEventListener('scroll', onScroll);

    function onScroll(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop;
            shrinkOn = 30;
            
        if (distanceY > shrinkOn) {
            $("header" ).addClass("scrolled");
            //$(".logo-cont img").attr("src", "images/index/logo-dark.png");
        } else {
            $("header" ).removeClass("scrolled");
            //$(".logo-cont img").attr("src", "images/index/logo.png");
        }
    }
    onScroll();
    
	var menuVisible = false;
    $(".hamburger" ).click(function(){
        
        if (!menuVisible) 
        {
            $(".mobile-menu-cont").slideToggle();
            $(".hamburger" ).addClass("is-active");
            menuVisible = true;
        }
        else
        {
            $(".mobile-menu-cont").slideToggle();
            $(".hamburger" ).removeClass("is-active");
            menuVisible = false;
        }
    });
    
    $//(".mobile-menu-cont").hide();

    $('.mobile-menu ul.sub-menu').hide();

    $(".mobile-menu .sub-menu").each(function( index ) {
        var mainMenuItem = $(this).parent(".menu-item"); 
        var arrow = jQuery("<div class='open-arrow'><span>&#x25BC;</span></div>"); 
        $(mainMenuItem).append(arrow);   

       
        $(arrow).click(function(){
            $(mainMenuItem).find('ul.sub-menu').slideToggle();
            $(arrow).toggleClass("rotate");
        });
    });

    
    
});$(document).ready(function ($) {

    $(window).on('resize', function(){
          onResize();
    });
    onResize();

    function onResize()
    {
        var win = $(window);
    }
    
});