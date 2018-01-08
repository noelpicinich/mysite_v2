$(document).ready(function() {
  $('.modal').hide();

  $('#courses_btn').click(function() {
    $('.modal').show();
    var modal_width = $('table')["0"].scrollWidth;
    $('.modal-content').css('width', modal_width + 'px');
    console.log($('.modal-content').width());
  });

  $('#exit').click(function() {
    $('.modal').hide();
  });

  $('.modal').click(function(event) {
    console.log(event.target.className);
      if (event.target.className === 'modal') {
          $('.modal').hide();
          console.log('clicked outside');
      }
  });

});
