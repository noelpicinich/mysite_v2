$(document).ready(function() {
  var height = $(window).height();
  var width = $(window).width();

  $("header").css("height", height);
  $("section").css("min-height", height);

  $(window).resize( function() {
    $("header").css("height", $(window).height());
  })

})
