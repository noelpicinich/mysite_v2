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
    <h1 class="page-title">Noel Picinich</h1>
    <h3 id="slogan">Developer. Designer. Life-long Learner.</h3>
  </header>

  <section id="education">
    <div>
      <!-- IMG Source: https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=0ahUKEwishO6OuYnWAhUH3IMKHTC6CSwQjRwIBw&url=https%3A%2F%2Fwww.atkinson.cornell.edu%2Fabout%2Facsf-identity.php&psig=AFQjCNFoc2jMtjCEzJJWyGD8AiW1F9_3yA&ust=1504542871198724 -->
      <img src="./images/cornell.png" alt="Cornell University logo"/>
    </div>
    <div>
      <h2>Cornell University</h2>
      <h3><i>Batchelor of Science in Computer Science</i> <br/> expected May 2020</h3>
      <div>
        <a class="button" href="courses.php">See Courses</a>
      </div>
    </div>
  </section>

  <section id="experience-section">
    <h1 class="section-title">Professional Experience</h1>
    <ul id="experience">
      <li class="experience-item">
        <div class="border">
          <div class="border-top">
            <!-- IMG Source: The SilverLogic LLC -->
            <img class="w-150" src="./images/tsl.png" alt="The SilverLogic logo"/>
            <h2>The SilverLogic</h2>
            <h3><i>Software Engineering Intern</i></h3>
          </div>
          <div>
            <a class="button" href="projects.php#tsl">See Projects</a>
          </div>
        </div>
      </li>

      <li class="experience-item">
        <div class="border">
          <div class="border-top">
            <!-- IMG Source: National Mobile Billboards LLC -->
            <img class="w-150" src="./images/nmb.png" alt="NMB Media logo"/>
            <h2>NMB Media</h2>
            <h3><i>Freelance Web Developer</i></h3>
          </div>
          <div>
            <a class="button" href="projects.php#nmb">See Projects</a>
          </div>
        </div>
      </li>
      <li class="experience-item">
        <div class="border">
          <div class="border-top">
            <!-- IMG Source: https://itwomen.org/ -->
            <img class="w-150" src="./images/itwomen.png" alt="ITWomen logo"/>
            <h2>ITWomen</h2>
            <h3><i>Girls Coding Instructor</i></h3>
          </div>
          <div>
            <a class="button" href="projects.php#itwomen">See Projects</a>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section>
    <h1 class="section-title">On Campus</h1>
    <ul id="campus">
      <li class="campus-item">
        <!-- IMG Source: rights granted by CUAUV -->
        <img src="./images/code.png" alt="code icon"/>
        <h2>Cornell University Autonomous Underwater Vehicle Project Team</h2>
        <h3><i>Software Subteam Member</i></h3>
        <a class="button" href="projects.php#auv">See Projects</a>
      </li>
      <li class="campus-item">
        <!-- IMG Source: rights granted by Science Olympiad at Cornell -->
        <img src="./images/volunteer.png" alt="volunteer icon"/>
        <h2>Science Olympiad at Cornell</h2>
        <h3><i>Software Developer, <br/>Director of Build Events</i></h3>
        <a class="button" href="projects.php#scioly">See more</a>
      </li>
    </ul>
  </section>

  <hr class="line-divider"/>
  <hr class="line-divider"/>

  <section>
    <h1 class="section-title">Memberships</h1>
    <div id="memberships">
      <a target="_blank" href="http://acsu.cornell.edu/"><img src="./images/acsu.png" alt="ACSU"/></a>
      <a target="_blank" href="https://wicc.acm.org/index.php"><img src="./images/wicc.png" alt="WICC"/></a>
      <a target="_blank" id="swe" href="http://swe.cornell.edu/"><img src="./images/swe2.png" alt="SWE"/></a>
    </div>
  </section>

  <?php
   include "includes/foot.php";
  ?>

</body>

</html>
