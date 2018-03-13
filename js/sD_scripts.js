var $ = jQuery.noConflict();

// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 150) {
        $('#back-up').fadeIn(200); // Fade in the arrow
    } else {
        $('#back-up').fadeOut(200); // Else fade out the arrow
    }
});
$('#back-up').click(function() { // When arrow is clicked
    $('body,html').animate({
        scrollTop: 0 // Scroll to top of body
    }, 500);
});

// Add slideDown animation to dropdown
$('.dropdown').on('show.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
});

// Add slideUp animation to dropdown
$('.dropdown').on('hide.bs.dropdown', function(e){
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
});


// Swap alignment at mobile
    var $window = $(window);
        // Function to handle changes to style classes based on window width
        //Different from Bootstrap's 991px but working and tested
        function checkWidth() {
        if ($window.width() < 975) {
            $('.display-3').addClass('display-4');
            $('.social-icons').find('.bk-hover').removeClass('fa-2x');
        }
        if ($window.width() >= 975) {
            $('.display-3').removeClass('display-4');
            $('.social-icons').find('.bk-hover').addClass('fa-2x');
        }
        if ($window.width() < 576) {
             $('.list-inline').removeClass('float-right');
        }
        if ($window.width() >= 576) {
             $('.list-inline').addClass('float-right');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);

//Ready func's
$(document).ready(function($){
    $(".bk-contact-modal").click(function(){
        $("#contactModal").modal('show');
    });
    $('#contactModal').on('shown.bs.modal', function () {
        $('#userName').focus();
    });

    //Home page text drop in effect
    
    $(".dropping-bombs1").slideUp(1).delay(1000).slideDown('slow');
    $(".dropping-bombs2").slideUp(1).delay(3000).slideDown('slow');
    $(".dropping-bombs3").slideUp(1).delay(6000).slideDown('slow');
    $(".dropping-bombs4").slideUp(1).delay(9000).slideDown('slow');
    $(".dropping-bombs5").slideUp(1).delay(12000).slideDown('slow');

    //Add card-body class to widgets
    $(this).find('.custom-html-widget').addClass('card-body');
    $(this).find('.tagcloud').addClass('card-body');
    $('.page-id-1714').find('.btn-dark').addClass('btn-dark-home');

    //Bootstrap Comment Submit Button
    $(this).find('#submit').addClass('btn btn-dark btn-submit');

    $('li.sitemapButton').find('a').addClass('btn btn-info btn-block btn-lg');



});