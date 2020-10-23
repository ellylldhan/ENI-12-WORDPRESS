(function($) {

  $(window).on('scroll', function(event) {
      var scrollValue = $(window).scrollTop();
      if (scrollValue > 70) {
          $('.navbar').addClass('fixed-top');
      }
      else{
          $('.navbar').removeClass('fixed-top');
      }
  });

  $('#search-button').on('click', function(e) {
    $('#navbarNav .navbar-nav').toggle();
    if($('#search-input-container').hasClass('hdn')) {
      e.preventDefault();
      $('#search-input-container').removeClass('hdn')
      return false;
    }
    else{
      e.preventDefault();
      $('#search-input-container').addClass('hdn');
      return false;
    }
  });

  // Button for mobile
  $('#search-button-mobile').on('click', function(e) {
    if($('#search-input-container-mobile').hasClass('hdn')) {
      e.preventDefault();
      $('#logo').addClass('logo-hdn')
      $('#search-input-container-mobile').removeClass('hdn')
      return false;
    }
    else{
      e.preventDefault();
      $('#logo').removeClass('logo-hdn')
      $('#search-input-container-mobile').addClass('hdn');
      return false;
    }
  });

})(jQuery);
