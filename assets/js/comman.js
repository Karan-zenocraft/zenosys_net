//$(window).scroll(function() {
//    if ($(this).scrollTop() > 350){  
//        $('header').addClass("sticky");
//    }
//    else{
//        $('header').removeClass("sticky");
//    }
//}); 



$().ready(function(){
  $('.slick-carousel').slick({
    arrows: true,
    centerPadding: "0px",
    dots: true,
      slidesToScroll: 4,
    slidesToShow: 4,
    infinite: false
  });
});



AOS.init({
            duration: 1200
        });
        AOS.init();

        
        <!-----Loader------>

        $(window).on('load', function() {
                $('#loading').fadeOut();
                $('#Load').delay(2500).fadeOut('slow');
                $('body').delay(2500).css({
                    'overflow': 'visible'
                });
            })

            <!-----Floating Top-bottom------>

            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) {
                        $('#scroll').fadeIn();
                    } else {
                        $('#scroll').fadeOut();
                    }
                });
                $('#scroll').click(function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 600);
                    return false;
                });
            });


<!---------MobileMenu---------->

      
function myFunction(x) {
  x.classList.toggle("change");
}     


$(document).ready(function() {
            $(".Menu").click(function() {
                $('nav').slideToggle('slow');
            });
            
    
    $(".Header .HeaderInner .HeaderNav ul li").click(function() {
             $(this).children('a').toggleClass("Outline");   
        
            });
    
    
    
        });

$(document).ready(function() {
    
    $(".HeaderNav ul .Toggle").click(function() {
                $(".HeaderNav ul .Toggle").closest('ul').toggleClass("show");
    });

});



 