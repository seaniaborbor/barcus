<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    *{
      font-family: "Roboto", Helvetica, Arial, Verdana, sans-serif;
    }
     .carousel-item {
    transition: transform .5s ease-in-out;
  }
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: opacity 0s 7s;
  }
    	
    .superNav {
      font-size:13px;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }


    .custom-card {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.custom-card .card-img {vertical-align: middle;}

.custom-card .card-img-overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
}
        
    @media screen and (max-width:540px){
      .centerOnMobile {
        text-align:center
      }
    }

    .iconImg{
      max-width: 75px !important;
      margin:auto !important;
      margin-bottom: 50px;
     
    }
  </style>
  
  </head>
  <body class="p-0">
    

  <div class="superNav border-bottom py-2 bg-light">

      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
            <span class="me-3"> <span class="badge bg-light border border-danger rounded-circle">
              <i class="bi bi-telephone-inbound mt-3 mb-3 text-danger"></i>
            </span> <strong>1-800-123-1234</strong></span>
            <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3">
              <span class="badge bg-light border border-danger rounded-circle">
              <i class="bi bi-envelope mt-3 mb-3 text-danger"></i>
            </span>
              <strong>info@somedomain.com</strong></span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
            <select  class="me-3 border-0 bg-light">
              <option value="en-us">EN-US</option>
            </select>
            <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('imgs/sitelogo.png')?>" style="max-width: 200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" class="form-control border-warning" style="color:#7a7a7a">
            <button class="btn btn-warning text-white">Search</button>
          </div>
        </div> -->
        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
         <!--  <div class="ms-auto d-none d-lg-block">
            <div class="input-group">
              <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" class="form-control border-warning" style="color:#7a7a7a">
              <button class="btn btn-warning text-white">Search</button>
            </div>
          </div> -->
          <ul class="navbar-nav ms-auto ">
          <?php if(isset($mainMenu)) : ?>
              <?php foreach($mainMenu as $mm) : ?>
                <li class="nav-item">
                  <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="<?=base_url('/service/'.$mm['menuName'])?>">
                    <?=$mm['menuName']?>
                  </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
          <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
              <a class="nav-link mx-2 text-uppercase" href="#"><i class="fa-solid fa-cart-shopping me-1"></i> Cart</a>
            </li>
            <li class="nav-item  rounded-0 px-0">
              <a class="nav-link btn btn-danger btn-sm bg-danger mx-2 text-uppercase text-white mx-0  " href="#"><i class="bi bi-person me-1"></i> Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 

    <?=$this->renderSection('main')?>

    <section class="py-5 bg-light">
    <div class="container">
      <div class="row">

      <h3 class="text-dark text-center text-uppercase fw-bold my-4">BARCUS AGENCIES IMPACT</h3>
        
        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/success1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>SUCCESSES</h5>
                  <h6 class="text-danger">5000 +</h6>
                </center>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/client1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>CLIENTS</h5>
                  <h6 class="text-danger">13K +</h6>
                </center>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/expert1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>EXPERTS</h5>
                  <h6 class="text-danger">SINCE 2019</h6>
                </center>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/office1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>SOFFICES</h5>
                  <h6 class="text-danger">20</h6>
                </center>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/team1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>TEAM</h5>
                  <h6 class="text-danger">53</h6>
                </center>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card">
            <div class="card-body text-center">
                <center>
                  <img src="<?=base_url('imgs/icon/agent1.png')?>" class="my-4" style="width:50px" alt="">
                  <h5>AGENTS</h5>
                  <h6 class="text-danger">90</h6>
                </center>
            </div>
          </div>
        </div>
        

      </div>
    </div>
  </section>

    
    
<div style="border-top:4px solid red;
  background-image:url(<?=base_url('imgs/63934.jpg')?>); background-size:cover; background-position:center;" >
  <section class="py-4" style="border-bottom: 1px dashed blue;">
    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <p class="fw-bold">Contact Us</p>
                <p class="fw-bold">Registered Office Address</p>
                <small>
                <p>E.L.W.A Junction Paynesville<br>Monrovia-Liberia,
PO– BOX, 8-MILL <br>
+82 10-6887-9917+231 88 692 7668/231-886-6655-77/ 231-886924221</p>
                </small>
            </div>

            <div class="col-md-6 px-3 text-center">
              <center>
                <img src="<?=base_url('imgs/icon/paymenticon.png')?>" class="img-fluid" style="max-width:300px" alt="">
              </center>
              <button class="btn btn-danger btn-lg rounded-0 my-3">Pay Now</button>
              <p class=" fw-bold " style="">Copyright ©️ AMI INVESTMENT GROUP (PTY) LTD. All rights reserved</p>
            </div>

            <div class="col-md-3">
              <div class="row">
                <div class="col-12">
                  <a href="#" class="btn btn-sm btn-danger rounded-0" >
                    <i class="bi bi-facebook"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger rounded-0" >
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger rounded-0" >
                    <i class="bi bi-twitter"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger rounded-0" >
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger rounded-0" >
                    <i class="bi bi-youtube"></i>
                  </a>
                </div>
              </div>
            <b>Monday to Friday:</b> 9AM to 6PM<br>
            <b>Saturday:</b> By Appointments Only<br>
            <b>Global Offices:</b> <a class="text-danger" href="#">Click here!</a> 
            <img src="<?=base_url('imgs/icon/Untitled-2-01.png')?>" class="img-fluid" alt="">

            </div>
        </div>
        
    </div>

  </section>
  <div class="container">
  <div class="row">
        <div class="col-12 py-2 text-center">
              <a href="#" class="text-dark">Terms and Conditions</a>
<a href="#" class="text-dark">Anti-Fraud Policy</a>
<a href="#" class="text-dark">GDPR Privacy Policy</a>
<a href="#" class="text-dark">Cookie Policy</a>
<a href="#" class="text-dark">Customer Complaints</a>
              </div>
        </div>
  </div>
              </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>