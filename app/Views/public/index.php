<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>

<!-- this is the carousel section -->
    <div class="container-fluid">
          <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?=base_url('imgs/8349010.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('imgs/5467015.jpg')?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?=base_url('imgs/8349010.jpg')?>" class="d-block w-100" alt="...">
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

  <section class="py-5">
    <div class="container">
    <div class="row">

      <div class="col-12 text-center py-5">
        <h3 class="text-uppercase">Welcome To Barcus Group of Agencies</h3>
        <p>
          "We're your premier destination for comprehensive solutions in travel, education, MOE, sanitation, design, insurance, financial services, security, branding, and beyond. With a global footprint and a clientele exceeding 100, our expertise spans the spectrum of industries, ensuring tailored solutions to meet your every need. Explore our diverse offerings and embark on a journey of excellence with Bacus Group today."
        </p>
      </div>

      <div class="col-md-3">
        <div class="card rounded-4  rounded shadow-sm mainCard">
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
            Your satisfaction is our top priority. We stand behind our work with unwavering confidence, offering a 100% satisfaction guarantee on all our services. Rest assured, we're committed to your success and will go above and beyond to ensure you're delighted with the outcomes.
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

<?=$this->endSection()?>