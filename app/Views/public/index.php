<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>

<?php //print_r($mainMenu); ?>
<!-- this is the carousel section -->
    <div class="container-fluid m-0 p-0">
          <div id="carouselExampleAutoplaying" class="carousel carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?=base_url('imgs/pectrolummining.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('imgs/security1.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('imgs/travel.1.jpg')?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
      </div>
   </div>
  <!-- carousel section ends --> 

  <!-- welcome section -->

  <section class="py-5 bg-light">
    <div class="container">
    <div class="row">

      <div class="col-12 text-center py-5">
        <h3 class="text-uppercase">Welcome To Barcus Group of Agencies</h3>
        <p>
          "We're your premier destination for comprehensive solutions in travel, education, MOE, sanitation, design, insurance, financial services, security, branding, and beyond. With a global footprint and a clientele exceeding 100, our expertise spans the spectrum of industries, ensuring tailored solutions to meet your every need. Explore our diverse offerings and embark on a journey of excellence with Bacus Group today."
        </p>
      </div>

      <div class="col-md-3">
        <div class="card rounded-0  rounded shadow-sm mainCard">
          <div class="card-body text-center">
            <center>
          <img src="<?=base_url('imgs/icon/globe.png')?>"  class=" iconImg">
            </center>
            <h5>Globally Active</h5>
            <p>
              Join forces with a dynamic partner that operates on a global scale. With our extensive reach and network, we transcend borders to bring you unparalleled opportunities and solutions tailored to your needs, no matter where you are in the world.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card rounded shadow-sm rounded-4 mainCard">
          <div class="card-body text-center">
            <center>
              <img src="<?=base_url('imgs/icon/customer.png')?>" class=" iconImg">
            </center>
            <h5>100+ Clients</h5>
            <p>
              Our track record speaks volumes. Trusted by over 100 clients worldwide, we have a proven history of delivering results and exceeding expectations. Partner with us and become part of our ever-growing family of satisfied clientele.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
       <div class="card rounded shadow-sm rounded-4 mainCard">
         <div class="card-body text-center">
            <center>
            <img src="<?=base_url('imgs/icon/trowel.png')?>" class=" iconImg">
          </center>
          <h5>100% Satisfaction Guarantee:</h5>
          <p>
            We stand behind our work with unwavering confidence, offering a 100% satisfaction guarantee on all our services. Rest assured, we're committed to your success and will go above and beyond to ensure you're delighted with the outcomes.
          </p>
         </div>
       </div>  
      </div>

        <div class="col-md-3">
          <div class="card rounded shadow-sm rounded-4 mainCard">
            <div class="card-body text-center">
              <center>
              <img src="<?=base_url('imgs/icon/affordable.png')?>" class=" iconImg">
              </center>
            <h5>Affordable Prices</h5>
            <p>
              Unlock premium services without breaking the bank. At Bacus Group, we believe in providing exceptional value at competitive prices. Benefit from our cost-effective solutions and enjoy peace of mind knowing you're getting the best bang for your buck.
            </p>
            </div>
          </div>
        </div>

    </div>
  </div>
  </section>


  <section>
    <div class="container py-5">
      <div class="row py-5">
          <div class="col-12 text-center">
            <h3 class="fw-bold">FEATURED SUBSIDIARIES</h3>
          </div>

          <?php if(isset($mainMenu)) : ?>
              <?php foreach($mainMenu as $mm) : ?>
                <div class="col-md-4 py-3">
                  <div class="card custom-card">
                        <!-- Background Image -->
                        <img src="<?=base_url('uploads/'.$mm['menuPic'])?>" class="card-img" alt="Background Image">
                        <!-- Text Overlay in the lower-left corner -->
                        <div class="card-img-overlay card-img-overlay-text">
                            <h4 class="card-title text-white text-uppercase fw-bold">
                              Barcus <?=$mm['menuName']?>
                            </h4>
                            <!-- You can add additional text or elements here -->
                      </div>
                  </div>
                </div>
              <?php endforeach; ?>
           <?php endif; ?>

          
      </div>
    </div>
  </section>


  <section class="py-5 mt-4"
   style="background-image: url(https://w0.peakpx.com/wallpaper/636/414/HD-wallpaper-travel-agency.jpg);
   background-position:center; background-size: cover;">
    <div class="container py-5">
      <div class="row">
        <h3 class="text-uppercase text-white text-center">The BAGOA Features</h3>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/trust.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>Trust </h4>
          <p>We are trusted by thousands all around the world to deliver quality work on time.</p>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/pro.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>Trust </h4>
          <p>Every step of the process will be handled by our team with true professionalism.</p>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/reliable.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>Reliable  </h4>
          <p> You can count on us to make sure your project is completed with care.</p>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/quality.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>Quality</h4>
          <p> We always perform our projects with the utmost quality and integrity.</p>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/global.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>Global </h4>
          <p> Our work has spread to regions all over the globe is a true indication of our quality.</p>
              </div>
            </div>
        </div>

        <div class="col-md-4 mt-3">
            <div class="card">
              <div class="card-body text-center">
                <center>
              <img src="<?=base_url('imgs/icon/trust.png')?>" alt="" style='max-width:50px'>
                </center>
          <h4>On Time</h4>
          <p>Our projects are never late. They are always completed with care and delivered on time.</p>
              </div>
            </div>
        </div>


      </div>
    </div>
  </section>

<?=$this->endSection()?>