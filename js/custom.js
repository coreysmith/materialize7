;(function($){
    Drupal.behaviors.custom_materialize = {
    attach: function (context, settings) {	        

        $('.button').addClass('waves-light btn waves-effect');
        $('.webform-submit').addClass('waves-light btn waves-effect button');
        $('.tabs.primary a').addClass('waves-light waves-effect');
        $('.contextual-links-wrapper .contextual-links a').addClass('waves-light waves-effect');
        $('.field--name-field-tags a').addClass('waves-light waves-effect');
        $('.field-name-field-tags a').addClass('waves-light waves-effect');
        $('.node-readmore').addClass('waves-dark waves-effect btn');
        $('.more-link').addClass('waves-dark waves-effect btn');
        
        $('.parallax').parallax();
        
        $(document).ready(function(){
        	$('a[href^="#"]').on('click',function (e) {
        	    e.preventDefault();

        	    var target = this.hash;
        	    var $target = $(target);

              $('html, body').stop().animate({
                   'scrollTop': $target.offset().top
              }, 900, 'swing');
        	});
        });
        
        //body on scroll 
        $(document).on("scroll", function(){
            if($(document).scrollTop() > 100){
              $(".page-inner").addClass("shrink"),
              $("header").addClass("shrink"),
              $("#content-area-wrapper").addClass("shrink"),
              $("#main-navigation-wrapper").addClass("shrink");
            }
            else
            {                
              $(".page-inner").removeClass("shrink"),
              $("header").removeClass("shrink"),
              $("#content-area-wrappr").removeClass("shrink"),
              $("#main-navigation-wrapper").removeClass("shrink");
            };

        });
    
        $(document).on("scroll", function(){
            if($(document).scrollTop() > 500){
             $("#back-to-top-wrapper").addClass("show");
            }
            else
            {
              $("#back-to-top-wrapper").removeClass("show");
            };
        });
        

        
        
    }    
 };

})(jQuery);
























/**
 * 
 * @param {type} $
 * @returns {undefined}
 * /
;(function($){
$(document).ready(function() {

        $('.button').addClass('waves-light').addClass('btn').addClass('waves-effect');
        $('.webform-submit').addClass('waves-light').addClass('btn').addClass('waves-effect').addClass('button');
        return false;

        $('.parallax').parallax();

});
})(jQuery);

;(function($){
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
})(jQuery);


;(function($){

      
    $(document).on("scroll", function(){
      if($(document).scrollTop() > 100){
        $(".page-inner").addClass("shrink"),
        $("header").addClass("shrink"),
        $("#content-area-wrapper").addClass("shrink"),
        $("#main-navigation-wrapper").addClass("shrink");
      }
      else
      {
        $(".page-inner").removeClass("shrink"),
        $("header").removeClass("shrink"),
        $("#content-area-wrappr").removeClass("shrink"),
        $("#main-navigation-wrapper").removeClass("shrink");
      };
    
    });
    
    $(document).on("scroll", function(){
        if($(document).scrollTop() > 500){
         $("#back-to-top-wrapper").addClass("show");
        }
        else
        {
          $("#back-to-top-wrapper").removeClass("show");
        };
    });
  
})(jQuery);

*/