<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="./style/all.css" media="all"/>
  <title>Noel Picinich</title>
</head>

<body id="top">
  <?php
   include "includes/nav.php";
  ?>

  <header>
    <h1 class="page-title">About Me</h1>
    <!-- Source of img.png: Personal Picture -->
  </header>

  <section id="about">
    <div id="about-wrapper">
      <img src="./images/me.png" alt="Profile Image"/>
      <div>
        <h2 id="home">Boca Raton, FL | Ithaca, NY</h2>
        <p>Turning my love for problem solving, philanthropy, and art into a lifelong
          pursuit of developing elegant, impactful software solutions while continuously
          expanding and sharing my skills. </p>
      </div>
    </div>
  </section>

  <hr class="line-divider"/>
  <hr class="line-divider"/>


  <section id="sponsers">
    <h1 class="section-title">Academic Scholarship Sponsers</h1>
      <div class="sponsers-wrapper">
        <!-- Source of IMG: http://www.jmrf.org/ -->
        <a href="http://www.jmrf.org/"><img src="./images/jmrf.png" alt="Jan M. Rubin Foundation"/></a>
        <!-- Source of IMG: http://www.scholarship.org/ -->
        <a href="http://www.scholarship.org/"><img src="./images/snow.png" alt="George Snow Scholarship Fund"/></a>
        <!-- Source of IMG: http://societyofwomenengineers.swe.org/ -->
        <a href="http://societyofwomenengineers.swe.org/"><img src="./images/SWE.png" alt="Society of Women Engineers"/></a>
      </div>
      <div class="sponsers-wrapper">
        <!-- Source of IMG: http://www.edwardtbedfordfoundation.org/ --><br/>
        <a href="http://www.edwardtbedfordfoundation.org/"><img src="./images/ETB.png" alt="Edward T. Bedford Foundation"/></a>
        <!-- Source of IMG: https://itwomen.org/ -->
        <a href="https://itwomen.org/"><img src="./images/itwomen2.gif" alt="ITWomen"/></a>
        <!-- Source of IMG: https://www.youtube.com/watch?v=9uPY03zT808 -->
        <a href="http://www.palmbeachpost.com/pathfinder/"><img src="./images/post.png" alt="Palm Beach Post Pathfinder Scholarship"/></a>
      </div>
  </section>

  <?php
   include "includes/foot.php";
  ?>
</body>

</html>
