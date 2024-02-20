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
                    <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    <li> Perferendis optio debitis dolore quisquam voluptates praesentium iste </li>
                    <li>culpa deleniti error ducimus est voluptatum, vel eaque vitae animi molestiae nisi magni odio.</li>
                </ul>
            </div>

            <div class="col-12 py-5">
                <form action="">
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
                                    <input type="text" id="fullName" required class="w-100 form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="phoneNo" class="col-form-label">
                                        Phone Number <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="phone" id="phoneNo" class="form-control w-100 form-control-sm" aria-labelledby="passwordHelpInline">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="fullName" class="col-form-label">
                                        Email <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="fullName" required class="w-100 form-control form-control-sm" aria-labelledby="passwordHelpInline">
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <label for="phoneNo" class="col-form-label">
                                        Passport No <span class="text-danger">*</span>
                                    </label>
                                </div>
                                <div class="col-md-8">
                                    <input type="phone" id="phoneNo" class="form-control w-100 form-control-sm" aria-labelledby="passwordHelpInline">
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
                                <select class="form-select" name="services[]"  aria-label="Choose service">
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

                                <div class="col-md-12 text-right">
                                <button type="button" class="btn btn-success rounded-0 shadow-sm m-5" onclick="addFormField()">Add More Services</button>
                                <button type="submit" class="btn-danger shadow-lg rounded-0 btn m-5" >Pay Now</button>
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