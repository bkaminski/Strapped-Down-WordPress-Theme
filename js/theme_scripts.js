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

// **Temporary Carousel Transition Speeds
$('#post-114').carousel({
    interval: 4000
});
$('#post-111').carousel({
    interval: 5000
});
