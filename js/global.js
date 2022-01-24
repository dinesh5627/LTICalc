$(document).ready(function() {
    $('.industryBox input').click(function() {
        $('.industryBox input:not(:checked)').parent().removeClass("active");
        $('.industryBox input:checked').parent().addClass("active");
    });

    $('.radioButtonData input').click(function() {
        $('.radioButtonData input:not(:checked)').parent().removeClass("active");
        $('.radioButtonData input:checked').parent().addClass("active");
    });

    $('.allCtaBox .radioButtonData input').click(function() {
        $('.allCtaBox .radioButtonData input:not(:checked)').parent().removeClass("active");
        $('.allCtaBox .radioButtonData input:checked').parent().addClass("active");
    });

    $('.getStarted').click(function() {
        $('.popUpHolder').hide();
    });



    $('.cardInsideSlider ul').slick({
        dots: true,
        infinite: false,
        arrows: true,
        speed: 300,
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });
    $('.cardInsideSliderMobile ul').slick({
        dots: true,
        infinite: false,
        speed: 300,
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '.backButton',
        nextArrow: '.nextButton',
    });

    function ratingStar1(star){
    star.click(function(){
            var stars = $('.question1 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question1 .ratingW').length > 0){
                ratingStar1($('.question1 .ratingW li a'));
        }
    });

    function ratingStar2(star){
    star.click(function(){
            var stars = $('.question2 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question2 .ratingW').length > 0){
                ratingStar2($('.question2 .ratingW li a'));
        }
    });

    function ratingStar3(star){
    star.click(function(){
            var stars = $('.question3 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question3 .ratingW').length > 0){
                ratingStar3($('.question3 .ratingW li a'));
        }
    });


});


$(document).ready(function () {
  //toggle the component with class accordion_body
  $(".headTitle").click(function () {
    $(this).parent().hasClass("currentState")
      ? ($(this).parent().find(".headData").slideUp(),
        $(this).removeClass("currentState"))
      : ($(".headData").slideUp(),
        $(".currentState").removeClass("currentState"),
        $(this).parent().find(".headData").slideDown(),
        $(this).parent().find(".headTitle").parent().addClass("currentState"));
  });
});



    $(document).on("click", ".stepData,.clickTab", function () {
        if ($(".reportDataId").hasClass("currentState")) {
            $('.progressStatusHolder').hide();
        } else {
           $('.progressStatusHolder').show();
        }
        
      $(".stepData").removeClass("currentTab");
      $(".mainTab").removeClass("activeTabparent");
      $(".tabDataOnly").addClass("activeTab");
      $(this).addClass("currentTab");
      var tab_id = $(this).attr("data-tab");
      $(".tabDataOnly").removeClass("activeTab");
       
        $("#" + tab_id).addClass("activeTab");
        $("#" + tab_id).parent('.mainTab').addClass("activeTabparent");
        $('.cardInsideSlider ul').slick('refresh');
        $('.cardInsideSlider ul').slick(RestertSlider());
       
    });

    



    

    function RestertSlider(){
      return {
        dots: true,
        infinite: false,
        arrows: true,
        speed: 300,
        autoplay: false,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    }



(function ($){

    $.fn.bekeyProgressbar = function(options){

        options = $.extend({
            animate     : true,
          animateText : true
        }, options);

        var $this = $(this);
      
        var $progressBar = $this;
        var $progressCount = $progressBar.find('.ProgressBar-percentage--count');
        var $circle = $progressBar.find('.ProgressBar-circle');
        var percentageProgress = $progressBar.attr('data-progress');
        var percentageRemaining = (100 - percentageProgress);
        var percentageText = $progressCount.parent().attr('data-progress');
      
        //Calcule la circonférence du cercle
        var radius = $circle.attr('r');
        var diameter = radius * 2;
        var circumference = Math.round(Math.PI * diameter);

        //Calcule le pourcentage d'avancement
        var percentage =  circumference * percentageRemaining / 100;

        $circle.css({
          'stroke-dasharray' : circumference,
          'stroke-dashoffset' : percentage
        })
        
        //Animation de la barre de progression
        if(options.animate === true){
          $circle.css({
            'stroke-dashoffset' : circumference
          }).animate({
            'stroke-dashoffset' : percentage
          }, 3000 )
        }
        
        //Animation du texte (pourcentage)
        if(options.animateText == true){
 
          $({ Counter: 0 }).animate(
            { Counter: percentageText },
            { duration: 3000,
             step: function () {
               $progressCount.text( Math.ceil(this.Counter) + '%');
             }
            });

        }else{
          $progressCount.text( percentageText + '%');
        }
      
    };

})(jQuery);

$(document).ready(function(){
  
  $('.ProgressBar--animateNone').bekeyProgressbar({
    animate : false,
    animateText : false
  });
  
  $('.ProgressBar--animateCircle').bekeyProgressbar({
    animate : true,
    animateText : false
  });
  
  $('.ProgressBar--animateText').bekeyProgressbar({
    animate : false,
    animateText : true
  });
  
  $('.ProgressBar--animateAll').bekeyProgressbar();
  
})