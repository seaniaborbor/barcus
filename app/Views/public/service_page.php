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
        <h3 class="text-uppercase">Welcome To Barcus <?=$service[0]['menuName']?></h3>
        <?=$service[0]['menuDescription']?>
      </div>

      <?php //print_r($service)?>
    </div>
  </div>
  </section>

  <section>
    <div class="container">
        <div class="row">
        <h3 class="text-uppercase py-4 text-center"> Our Popular <?=$service[0]['menuName']?> Services </h3>
            <?php if(isset($sub_services)) : ?>
                <?php foreach($sub_services as $servs) : ?>
                    <div class="col-md-4 py-3">
                        <div class="card custom-card">
                                <!-- Background Image -->
                                <img src="<?=base_url('uploads/'.$servs['servicePic'])?>" class="card-img" alt="Background Image">
                                <!-- Text Overlay in the lower-left corner -->
                                <div class="card-img-overlay">
                                    <h4 class="card-title text-white text-uppercase text fw-bold">
                                    Barcus <?=$servs['serviceName']?>
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


  

<?=$this->endSection()?>