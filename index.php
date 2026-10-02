<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SaLikod</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/nav.css">
    <script src="https://kit.fontawesome.com/YOUR_KIT_CODE.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php include 'includes/nav.php';?>
    <main>
      <section id="home">
        <div class="slider-wrapper">
          <div class="slider">
            <img id="slide-1" src="assets/hero1.png" alt="hero1-image">
            <img id="slide-2" src="assets/hero2.jpg" alt="hero2-image">
            <img id="slide-3" src="assets/hero3.jpg" alt="hero3-image">

            <div class="gradient-overlay"></div>

            <div class="hero-content">
              <a href="/SaLikod"><img src="assets/sa-likod-svg-v3/sa-likod-name-on-light.svg" alt="SALIKOD name on light logo"></a>
              <p>by ResMarG</p>
              <a href="booking.php" class="book-btn">BOOK A COURT</a>
            </div>
            <div class="slider-nav">
              <a href="#slide-1"></a>
              <a href="#slide-2"></a>
              <a href="#slide-3"></a>
            </div>
          </div>
          
        </div>
      </section>
      <div class="section-divider"></div>

      <section id="events">Events</section>
      <div class="section-divider"></div>

      <section id="howto">How to Book</section>
      <div class="section-divider"></div>
      
      <section id="about">About</section>
      <div class="section-divider"></div>

      <section id="newsletter">Newsletter</section>
      <div class="section-divider"></div>

      <section id="contact">Contact Us</section>
    </main>
    
  </body>
</html>
