<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SaLikod</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/landing.css" />
    <link rel="stylesheet" href="css/nav.css">
    <script src="js/landing.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

  </head>
  <body>
    <?php include 'includes/nav.php';?>
    <main>
      <section id="home">
        <div class="slider-wrapper">
          <div class="slider">
            <img id="slide-1" src="assets/hero5.jpg" alt="hero5-image">
            <img id="slide-2" src="assets/hero4.jpg" alt="hero2-image">
            <img id="slide-3" src="assets/hero3.jpg" alt="hero3-image">
          </div>

          <div class="gradient-overlay"></div>
          <div class="hero-content">
            <a href="/SaLikod"><img src="assets/sa-likod-svg-v3/sa-likod-name-on-dark.svg" alt="SALIKOD name on dark logo"></a>
            <p class="body-text">by ResMarG</p>
            <a href="booking.php" class="book-btn">BOOK A COURT NOW</a>
          </div>
          <div class="slider-nav">
            <button type="button" data-slide="0"></button>
            <button type="button" data-slide="1"></button>
            <button type="button" data-slide="2"></button>
          </div>
        </div>
        <div class="home-details">
          <div class="location-detail">
            <i class="bi bi-geo-alt-fill"></i>
            <a href="https://acesse.one/9WaFKt7" target="_blank" rel="noopener noreferrer"><h2>28 San Guillermo St, Dalaguete, Cebu</h2></a>
          </div>
          <div class="time-detail">
            <i class="bi bi-clock-fill"></i>
            <h2>5:00 PM - 11:00 PM</h2>
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <section id="events" class="section-item">
        <h1 class="section-title">Events</h1>
        <div class="event-container">
          <div class="event-item">
            <img class="event-image" src="assets/hero2.jpg" alt="Two Pickleball Paddles">
            <div class="event-details">
              <h2 class="event-title">Open Play</h2>
              <p class="event-description">Only open for 16 slots. Reserve yours now for only 50 pesos.</p>
              <p class="event-date"><b>Date:</b> October 6 2026</p>
              <p class="event-time"><b>Time:</b> 5:00 PM</p>
            </div>
            
          </div>
          <div class="event-item">
            <img class="event-image" src="assets/hero2.jpg" alt="Two Pickleball Paddles">
            <div class="event-details">
              <h2 class="event-title">Open Play</h2>
              <p class="event-description">Only open for 16 slots. Reserve yours now for only 50 pesos.</p>
              <p class="event-date"><b>Date:</b> October 6 2026</p>
              <p class="event-time"><b>Time:</b> 5:00 PM</p>
            </div>
            
          </div>
        </div>
      </section>

      <div class="section-divider"></div>

      <section id="howto" class="section-item">
        <h1 class="section-title">How to Book</h1>
      </section>

      <div class="section-divider"></div>
      
      <section id="about" class="section-item">
        <h1 class="section-title">About</h1>
      </section>

      <div class="section-divider"></div>

      <section id="newsletter" class="section-item">
        <h1 class="section-title">Newsletter</h1>
      </section>

      <div class="section-divider"></div>

      <section id="contact" class="section-item">
        <h1 class="section-title">Contact Us</h1>
      </section>
    </main>
    
  </body>
</html>
