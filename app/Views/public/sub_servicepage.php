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

  <section class="py-5 bg-light">
    <div class="container">
    <div class="row">

      <div class="col-md-8 offset-md-2 py-5 px-5">
        <h1 class="text-uppercase fw-bold text-center">Barcus <?=$service_sub[0]['serviceName']?> Services</h1>
        <img src="<?=base_url('uploads/'.$service_sub[0]['servicePic'])?>" class=" w-100 img-fluid my-5 rounded shadow-lg" alt="">
        <?=$service_sub[0]['serviceDescription']?>
      </div>

      <?php //print_r($service)?>
    </div>
  </div>
  </section>


<?=$this->endSection()?>