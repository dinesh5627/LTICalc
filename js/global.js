$(document).ready(function() {
    if(window.matchMedia("(max-width: 992px)").matches){
    var width = 100,
    perfData = window.performance.timing, // The PerformanceTiming interface represents timing-related performance information for the given page.
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime/1000)%60)*100;

    // Loadbar Animation
    $("#bar1").animate({
      width: width + "%"
    }, time);
    // Fading Out Loadbar on Finised
    setTimeout(function(){
      $('.progressOuter').fadeOut(300);
      $('.popUpHolder').fadeIn(300);
    }, time);
    }

});    





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
        $('.cardHolderMain').show();
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

    function ratingStar4(star){
    star.click(function(){
            var stars = $('.question4 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question4 .ratingW').length > 0){
                ratingStar4($('.question4 .ratingW li a'));
        }
    });

    function ratingStar5(star){
    star.click(function(){
            var stars = $('.question5 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question5 .ratingW').length > 0){
                ratingStar5($('.question5 .ratingW li a'));
        }
    });

    function ratingStar6(star){
    star.click(function(){
            var stars = $('.question6 .ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for(var i=0; i <= thisIndex; i++){
                stars.eq(i).addClass('on');
            }
        // putScoreNow(thisIndex+1);
        });
    }

    $(function(){
        if($('.question6 .ratingW').length > 0){
                ratingStar6($('.question6 .ratingW li a'));
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

    $(document).on("click", "#mobileSaveCard1", function () {
      $('#mobileCardBox1').hide();
      $('#mobileCardBox2').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard2", function () {

      $('#mobileCardBox2').hide();
      $('#mobileCardBox3').css('display','flex');      
      $('.cardInsideSliderMobile ul').slick('refresh');  
    });
    $(document).on("click", "#mobileSaveCard3", function () {

      $('#mobileCardBox3').hide();
      $('#mobileCardBox4').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard4", function () {
      $('#mobileCardBox4').hide();
      $('#mobileCardBox5').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard5", function () {
      $('#mobileCardBox5').hide();
      $('#mobileCardBox6').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard6", function () {
      $('#mobileCardBox6').hide();
      $('#mobileCardBox7').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard7", function () {
      $('#mobileCardBox7').hide();
      $('#mobileCardBox8').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard8", function () {
      $('#mobileCardBox8').hide();
      $('#mobileCardBox9').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard9", function () {
      $('#mobileCardBox9').hide();
      $('#mobileCardBox10').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard10", function () {
      $('#mobileCardBox10').hide();
      $('#mobileCardBox11').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard11", function () {
      $('#mobileCardBox11').hide();
      $('#mobileCardBox12').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard12", function () {
      $('#mobileCardBox12').hide();
      $('#mobileCardBox13').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard13", function () {
      $('#mobileCardBox13').hide();
      $('#mobileCardBox14').css('display','flex');        
    });
    $(document).on("click", "#mobileSaveCard14", function () {
      $('#mobileCardBox14').hide();
      $('.cardHolderMain').hide();
      $('#roiResult15').css('display','block');        
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