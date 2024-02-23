<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>

<?php //print_r($mainMenu); ?>

<div class="container-fluid m-0 p-0">
    <img src="<?=base_url('imgs/paymentbanner.png')?>" alt="" class="img-fluid m-0 w-100">   
</div>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-secondary fw-bold">Pay Online</h2>
                <ul>
                    <li>Please fill in the form properly</li> 
                    <li> <span class="text-danger">Correspondence with you will mainly be by email. </span>
                        Please ensure that your email address is clearly eligible.</li>
                       <li> For more information, please contact barcusgroup@gmail.com</li>
                        <li>Click <span class="text-danger">here</span> to view our Anti-Fraud Policy</li>
                </ul>
            </div>

            <div class="col-12 py-5">
                <form action="<?=base_url('/payment')?>" method="post">
                    <h5 class="text-danger">Personal Information</h5>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="fullName" class="col-form-label">
                                        Full Name <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="fullName" id="fullName" 
                                    required class="w-100 form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                    <?php if(isset($validation) && $validation->hasError('fullName')) : ?>
                                        <div class="text-danger"><?=$validation->getError('fullName')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="phoneNo" class="col-form-label">
                                        Phone Number <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="phone" name="phoneNo" id="phoneNo" 
                                    class="form-control w-100 form-control-sm" aria-labelledby="passwordHelpInline">
                                    <?php if(isset($validation) && $validation->hasError('phoneNo')) : ?>
                                        <div class="text-danger"><?=$validation->getError('phoneNo')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="email" class="col-form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" name="email" id="fullName"
                                     required class="w-100 form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                     <?php if(isset($validation) && $validation->hasError('email')) : ?>
                                        <div class="text-danger"><?=$validation->getError('email')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="passportNum" class="col-form-label">
                                        Passport No <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="number" name="passportNum" id="passportNum" 
                                    class="form-control w-100 form-control-sm" aria-labelledby="passwordHelpInline">
                                    <?php if(isset($validation) && $validation->hasError('passportNum')) : ?>
                                        <div class="text-danger"><?=$validation->getError('passportNum')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="currencySelect" required>Select a Currency:</label>
                                </div>
                                <div class="col-md-8">
                                    <select id="currencySelect" class="form-control" name="currencySelect">
                                            <option value="usd">United States Dollar (USD)</option>
                                            <option value="eur">Euro (EUR)</option>
                                            <option value="jpy">Japanese Yen (JPY)</option>
                                            <option value="gbp">British Pound Sterling (GBP)</option>
                                            <option value="aud">Australian Dollar (AUD)</option>
                                    </select>
                                    <?php if(isset($validation) && $validation->hasError('currency')) : ?>
                                        <div class="text-danger"><?=$validation->getError('currency')?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                        <div class="row align-items-center">
                            <h5 class="text-danger my-3">Services</h5>
                                <div class="col-md-4">
                                    <label for="phoneNo" class="col-form-label">
                                        Service <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8" id="dynamic-form-fields">
                                <select class="form-select" name="services[]" required  aria-label="Choose service">
                                            <option selected>Select service</option>
                                    <?php if(isset($sub_menu)) : ?>
                                        <?php foreach($sub_menu as $sbmn) : ?>
                                            <?php if($sbmn['serviceStatus'] == 1) : ?>
                                                <option value="<?=$sbmn['serviceName']?>">
                                                    <?=$sbmn['serviceName']?>
                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                </div>

                                <div class="col-md-12 text-center">
                                <button type="button" class="btn btn-success rounded-0 shadow-sm mt-2" onclick="addFormField()">Add More Services</button>
                                <button type="submit" class="btn-danger shadow-lg rounded-0 btn mt-2" >Pay Now</button>
                                </div>

                            </div>
                        </div>

                        

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
// Your PHP code to fetch or define $sub_menu array

// Encode the array as JSON
$sub_menu_json = json_encode($sub_menu);
?>
<script>
function addFormField() {
    var container = document.getElementById('dynamic-form-fields');
    var subMenuData = <?php echo $sub_menu_json; ?>;

    // Creating a new select element
    var select = document.createElement('select');
    select.className = 'form-select';
    select.name = 'services[]';
    select.setAttribute('aria-label', 'Choose service');

    // Adding the default option
    var defaultOption = document.createElement('option');
    defaultOption.text = 'Select service';
    defaultOption.selected = true;
    select.appendChild(defaultOption);

    // Adding options based on the fetched data
    subMenuData.forEach(function(sbmn) {
        if (sbmn.serviceStatus == 1) {
            var option = document.createElement('option');
            option.value = sbmn.serviceName;
            option.text = sbmn.serviceName;
            select.appendChild(option);
        }
    });

    // Appending the select element to the container
    container.appendChild(select);
}
</script>

<?=$this->endSection()?>