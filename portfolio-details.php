<?php 
include 'header.php';
include 'navbar.php';
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <h2 class="portfolio-title">This is an example of portfolio detail</h2>
        <div class="row">

          <div class="col-lg-8" data-aos="fade-right">
            <div class="owl-carousel portfolio-details-carousel">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            </div>
          </div>

          <div class="col-lg-4 portfolio-info" data-aos="fade-left">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web design</li>
              <li><strong>Client</strong>: ASU Company</li>
              <li><strong>Project date</strong>: 01 March, 2020</li>
              <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
            </ul>

            <p>
              Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <?php
  include 'footer.php';
?>