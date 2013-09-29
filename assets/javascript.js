$(function(){

  var $root = $('html, body');
  $('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
      scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
    }, 1000, function () {
      window.location.hash = href;
    });
    return false;
  });

  var $navigationLinks = $(".navbar-nav a");
  $navigationLinks.click(function(event){
    $navigationLinks.parent().removeClass("active");
    $(event.target).parent().addClass("active");
    return false;
  });

  $('#contact_us').validate({
    debug: true,
    highlight: function(element) {
      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
    },
    success: function(element) {
      element.closest('.form-group').removeClass('has-error').addClass('has-success');
    }
  });

});