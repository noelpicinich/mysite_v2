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
    <h1 class="page-title">Get in touch!</h1>
    <h3 id="contact-subtitle">Questions? Interested in my services? Drop me a line!</h3>
  </header>

  <!-- <section id="form-wrapper">
    <form action="/contact-submitted.php" method="get">
      <div id="name-row">
        <div class="name">
          <label for="first">First:</label>
          <input type="text" id="first" name="contact_first"/>
        </div>

        <div class="name" id="last-name">
          <label for="last">Last:</label>
          <input type="text" id="last" name="contact_last"/>
        </div>
      </div>

      <div>
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="contact_email"/>
      </div>

      <div>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="contact_phone"/>
      </div>

      <div>
        <label for="company">Company:</label>
        <input type="text" id="company" name="contact_company"/>
      </div>

      <div>
        <label for="message">Message:</label>
        <textarea id="message" name="contact_message"></textarea>
      </div>

      <div class="button">
        <button type="submit">Submit</button>
      </div>

    </form>
  </section> -->

  <section>
    <div id="contact-media">
      <!-- IMG Source: http://www.iconarchive.com/tag/gmail -->
      <a target="_blank" href="mailto:nmp53@cornell.edu"><img src="./images/gmail.ico" alt="gmail"/></a>
      <!-- IMG Source: https://en.facebookbrand.com/assets/f-logo -->
      <a target="_blank" href="https://www.facebook.com/noel.picinich.9"><img src="./images/facebook2.png" alt="facebook"/></a>
      <!-- IMG Source: https://www.iconfinder.com/icons/386655/linked_in_linkedin_icon -->
      <a target="_blank" href="https://www.linkedin.com/in/noel-picinich-4a9972121/"><img src="./images/linkedin2.png" alt="linkedin"/></a>
    </div>
  </section>

  <?php
   include "includes/foot.php";
  ?>
</body>

</html>
