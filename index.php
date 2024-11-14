
<?php require_once('./assets/layout/header.php'); ?>

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Herzlich wilkommen <span>auf meine VPN Seite</span></h2>
            <p class="animate__animated animate__fadeInUp">Entdecken Sie die Vorteile von WireGuard und lernen Sie, wie Sie ganz einfach ein sicheres virtuelles privates Netzwerk (VPN) einrichten.Möchten Sie sicher und anonym im Internet surfen? Mit WireGuard ist das kein Problem. Wir erklären Ihnen, wie's geht</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

       
        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

   <!-- About Section -->
   <section id="about" class="about section">

<div class="container">

  <div class="row position-relative">

    <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="assets/img/about.jpg"></div>

    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
      <h2 class="inner-title">Was ist WireGuard</h2>
      <div class="our-story">
        <h4>WireGuard</h4>
        <h3>Die Geschichte</h3>
        <p>WireGuard ist ein modernes VPN-Protokoll, das 2016 veröffentlicht wurde und in den letzten Jahren immer beliebter geworden ist. Im Vergleich zu älteren Protokollen wie OpenVPN oder IPSec ist WireGuard deutlich einfacher aufgebaut und bietet eine bessere Performance.</p>
        <ul>
          <li><i class="bi bi-check-circle"></i> <span> WireGuard ist bekannt für seine hohe Geschwindigkeit.</span></li>
          <li><i class="bi bi-check-circle"></i> <span>Es nutzt starke Verschlüsselungsalgorithmen</span></li>
          <li><i class="bi bi-check-circle"></i> <span>WireGuard ist im Vergleich zu anderen VPN-Protokollen deutlich einfacher aufgebaut.</span></li>
        </ul>
        Wenn du Wert auf eine schnelle, sichere und einfach zu bedienende VPN-Verbindung legst, ist WireGuard eine ausgezeichnete Wahl. Es eignet sich sowohl für private Nutzer als auch für Unternehmen.
        <div class="watch-video d-flex align-items-center position-relative">
          <i class="bi bi-play-circle"></i>
          <a href="https://www.youtube.com/watch?v=BVhJ35KqqlA" class="glightbox stretched-link">Sehe Video</a>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- /About Section -->
 

  
  
   
   

  </main>
<?php require_once('./assets/layout/footer.php'); ?>
 
