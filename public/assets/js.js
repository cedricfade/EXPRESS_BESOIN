/*!
* jquery.counterup.js 1.0
*
* Copyright 2013, Benjamin Intal http://gambit.ph @bfintal
* Released under the GPL v2 License
*
* Date: Nov 26, 2013
*/
/*(function(e){"use strict";e.fn.counterUp=function(t){var n=e.extend({time:400,delay:10},t);return this.each(function(){var t=e(this),r=n,i=function(){var e=[],n=r.time/r.delay,i=t.text(),s=/[0-9]+,[0-9]+/.test(i);i=i.replace(/,/g,"");var o=/^[0-9]+$/.test(i),u=/^[0-9]+\.[0-9]+$/.test(i),a=u?(i.split(".")[1]||[]).length:0;for(var f=n;f>=1;f--){var l=parseInt(i/n*f);u&&(l=parseFloat(i/n*f).toFixed(a));if(s)while(/(\d+)(\d{3})/.test(l.toString()))l=l.toString().replace(/(\d+)(\d{3})/,"$1,$2");e.unshift(l)}t.data("counterup-nums",e);t.text("0");var c=function(){t.text(t.data("counterup-nums").shift());if(t.data("counterup-nums").length)setTimeout(t.data("counterup-func"),r.delay);else{delete t.data("counterup-nums");t.data("counterup-nums",null);t.data("counterup-func",null)}};t.data("counterup-func",c);setTimeout(t.data("counterup-func"),r.delay)};t.waypoint(i,{offset:"100%",triggerOnce:!0})})}})(jQuery);
*/





// FORM STEPS

jQuery(document).ready(function() {
  // click on next button
  jQuery('.form-wizard-next-btn').click(function() {
    var parentFieldset = jQuery(this).parents('.wizard-fieldset');
    var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    var next = jQuery(this);
    var nextWizardStep = true;
    parentFieldset.find('.wizard-required').each(function(){
      var thisValue = jQuery(this).val();

      if( thisValue == "") {
        jQuery(this).siblings(".wizard-form-error").slideDown();
        nextWizardStep = false;
      }
      else {
        jQuery(this).siblings(".wizard-form-error").slideUp();
      }
    });
    if( nextWizardStep) {
      next.parents('.wizard-fieldset').removeClass("show","400");
      currentActiveStep.removeClass('active').addClass('activated').next().addClass('active',"400");
      next.parents('.wizard-fieldset').next('.wizard-fieldset').addClass("show","400");
      jQuery(document).find('.wizard-fieldset').each(function(){
        if(jQuery(this).hasClass('show')){
          var formAtrr = jQuery(this).attr('data-tab-content');
          jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
            if(jQuery(this).attr('data-attr') == formAtrr){
              jQuery(this).addClass('active');
              var innerWidth = jQuery(this).innerWidth();
              var position = jQuery(this).position();
              jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
            }else{
              jQuery(this).removeClass('active');
            }
          });
        }
      });
    }
  });
  //click on previous button
  jQuery('.form-wizard-previous-btn').click(function() {
    var counter = parseInt(jQuery(".wizard-counter").text());;
    var prev =jQuery(this);
    var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    prev.parents('.wizard-fieldset').removeClass("show","400");
    prev.parents('.wizard-fieldset').prev('.wizard-fieldset').addClass("show","400");
    currentActiveStep.removeClass('active').prev().removeClass('activated').addClass('active',"400");
    jQuery(document).find('.wizard-fieldset').each(function(){
      if(jQuery(this).hasClass('show')){
        var formAtrr = jQuery(this).attr('data-tab-content');
        jQuery(document).find('.form-wizard-steps .form-wizard-step-item').each(function(){
          if(jQuery(this).attr('data-attr') == formAtrr){
            jQuery(this).addClass('active');
            var innerWidth = jQuery(this).innerWidth();
            var position = jQuery(this).position();
            jQuery(document).find('.form-wizard-step-move').css({"left": position.left, "width": innerWidth});
          }else{
            jQuery(this).removeClass('active');
          }
        });
      }
    });
  });
  //click on form submit button
  jQuery(document).on("click",".form-wizard .form-wizard-submit" , function(){
    var parentFieldset = jQuery(this).parents('.wizard-fieldset');
    var currentActiveStep = jQuery(this).parents('.form-wizard').find('.form-wizard-steps .active');
    parentFieldset.find('.wizard-required').each(function() {
      var thisValue = jQuery(this).val();
      if( thisValue == "" ) {
        jQuery(this).siblings(".wizard-form-error").slideDown();
      }
      else {
        jQuery(this).siblings(".wizard-form-error").slideUp();
      }
    });
  });
  // focus on input field check empty or not
  jQuery(".form-control").on('focus', function(){
    var tmpThis = jQuery(this).val();
    if(tmpThis == '' ) {
      jQuery(this).parent().addClass("focus-input");
    }
    else if(tmpThis !='' ){
      jQuery(this).parent().addClass("focus-input");
    }
  }).on('blur', function(){
    var tmpThis = jQuery(this).val();
    if(tmpThis == '' ) {
      jQuery(this).parent().removeClass("focus-input");
      jQuery(this).siblings('.wizard-form-error').slideDown("3000");
    }
    else if(tmpThis !='' ){
      jQuery(this).parent().addClass("focus-input");
      jQuery(this).siblings('.wizard-form-error').slideUp("3000");
    }
  });
});