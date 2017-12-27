$(document).ready(function() {
  // AUV Projects
  $('#auv1').mouseover(function() {
    $('#auv1 img').attr("src", 'images/auv1_hover.png');
  });
  $('#auv1').mouseout(function() {
    $('#auv1 img').attr("src", 'images/auv1.png');
  });

  $('#auv2').mouseover(function() {
    $('#auv2 img').attr("src", 'images/auv2_hover.png');
  });
  $('#auv2').mouseout(function() {
    $('#auv2 img').attr("src", 'images/auv2.png');
  });

  $('#auv3').mouseover(function() {
    $('#auv3 img').attr("src", 'images/auv3_hover.png');
  });
  $('#auv3').mouseout(function() {
    $('#auv3 img').attr("src", 'images/auv3.png');
  });

  //NMB Project
  $('#nmb_site').mouseover(function() {
    $('#nmb_site img').attr("src", 'images/nmb_site_hover.png');
  });
  $('#nmb_site').mouseout(function() {
    $('#nmb_site img').attr("src", 'images/nmb_site.jpg');
  });
});
