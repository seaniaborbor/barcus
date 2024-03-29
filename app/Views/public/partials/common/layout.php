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

    .floating-icons {
            position: fixed;
            bottom: 20px;
            z-index: 1000;
            display: flex;
            width:100%;
            justify-content: space-between;
        }

        .whatsapp-chat, .contact-form-toggle {
            background-color: #25D366; /* WhatsApp green color */
            color: #fff;
            border-radius: 50%;
            padding: 10px;
            font-size: 20px;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
        }

        .contact-form {
            display: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1001;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 10px;
        }
     .carousel-item {
    transition: transform .5s ease-in-out;
  }
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: opacity 0s 7s;
  }
    .nav-link, .dropdown-item {
      font-size:0.9em;
    }
    p{
      font-size:1em;
    }	
   img[src*="googlelogo"],
#google_translate_element a[href*="translate.google"] {
    display: none;
}

    .superNav {
      font-size:13px;
    }
    .form-control {
      outline:none !important;
      box-shadow: none !important;
    }
    select{
      margin-top:10px;
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
            <span class="me-3"> <span class="badge bg-light ">
              <i class="bi bi-telephone-inbound mt-3 mb-3 text-danger"></i>
            </span> <strong>1-800-123-1234</strong></span>
            <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3">
              <span class="badge bg-light border ">
              <i class="bi bi-envelope mt-3 mb-3 text-danger"></i>
            </span>
              <strong>info@somedomain.com</strong></span>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
            <!-- <select  class="me-3 border-0 bg-light">
              <option value="en-us">EN-US</option>
            </select> -->
            <span id="google_translate_element"></span>
            <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      
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
          <li class="btn bg-danger btn-danger rounded-0">
            <a class="dropdown-item " href="/">
              Home
            </a>
          </li>
          <?php if(isset($mainMenu)) : ?>
              <?php foreach($mainMenu as $mm) : ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?=$mm['menuName']?>
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?=base_url('service/'.$mm['menuName'])?>">Barcus  <?=$mm['menuName']?></a></li>
                  <?php if(isset($sub_menu)) :?>
                    <?php foreach($sub_menu as $submnn) : ?>
                      <?php if($submnn['serviceMenu'] == $mm['menuId'] && $submnn['serviceStatus'] == 1) : ?>
                        <li>
                          <a class="dropdown-item" href="<?=base_url('subservice/'.$submnn['serviceName'])?>">
                            <?=$submnn['serviceName']?>
                          </a>
                        </li>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endforeach; ?>
            <?php endif; ?>
            <li class="btn  rounded-0">
            <a class="dropdown-item" href="/blog">
             Blog
            </a>
          </li>
          </ul>
          <ul class="navbar-nav ms-auto ">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/contact">Customer Support</a></li>
              <li><a class="dropdown-item" href="/testominals">Testimonnials</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/about">About Barcus Group of Agencies</a></li>
            </ul>
          </li>
            <li class="nav-item">
              <a class="nav-link  text-dark mx-0 " data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="bi bi-search me-1"></i></a>
            </li>
            <li class="nav-item btn btn-danger p-0 btn-sm bg-danger rounded-0">
              <a class="nav-link  text-white mx-0  " href="/contact">Contact</a>
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
              <a href="<?=base_url('/payment')?>">
                <img src="<?=base_url('imgs/icon/paymenticon.png')?>" class="img-fluid" style="max-width:300px" alt="">
              </a>
              </center>
              <a href="<?=base_url('/payment')?>" class="btn btn-danger rounded-0">Pay Now</a>
              <p class=" fw-bold " style="">Copyright ©️ BGOA INVESTMENT GROUP (PTY) LTD. All rights reserved</p>
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

    <!-- this modal contains the search input area/form ---> 



<!-- Modal -->
<div class="modal fade" style="background:rgba(0,0,0,.3)" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Search What you're looking for</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-5">
          <div class="container">
           <form action="<?=base_url('search')?>" method="post">
            <input name="search" type="text" class="form-control rounded-0 form-control-lg" placeholder="Search..." aria-label="Search" aria-describedby="search-btn">
              <button class="btn btn-danger rounded-pill mt-3 " type="submit" id="search-btn">Search</button>
           </form>
    </div>
      </div>
    </div>
  </div>
</div>
<!-- search modal ends here --> 

<div class="contact-form" id="contactForm">
    <button type="button" class="btn-close" onclick="toggleContactForm()" aria-label="Close"></button>
    <h4>Contact Us</h4>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="floating-icons">
<div class="contact-form-toggle bg-danger" onclick="toggleContactForm()">
<i class="bi bi-envelope-arrow-up mx-1"></i>
    </div>
    <div class="whatsapp-chat" onclick="openWhatsApp()">
      <i class="bi bi-chat-dots mx-1"></i>
    </div>
</div>


<!-- Bootstrap Modal -->
<div class="modal fade" id="delayedModal" tabindex="-1" aria-labelledby="delayedModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
            <h1 class="modal-title text-danger my-5 fw-bold " id="delayedModalLabel">Leaving Soon?</h1>

                <!-- Customize the modal content as needed -->
                <a href="/contact" class="btn btn-danger rounded-0 btn-lg">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<script>
    function openWhatsApp() {
        // Replace '123456789' with your actual WhatsApp number
        window.open('https://wa.me/+821068879917', '_blank');
    }
    function toggleContactForm() {
        var contactForm = document.getElementById('contactForm');
        contactForm.style.display = (contactForm.style.display === 'none' || contactForm.style.display === '') ? 'block' : 'none';
    }
</script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   
    <script>
    // Use setTimeout to open the modal after 10 seconds (10000 milliseconds)
    setTimeout(function () {
        var delayedModal = new bootstrap.Modal(document.getElementById('delayedModal'));
        delayedModal.show();
    }, 10000);
</script>
  </body>
</html>