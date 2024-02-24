<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="container">
	<div class="row">

<div class="col-md-8 pt-2">
	<div class="card">
		<div class="card-body">
			<h6 class=" mt-2 mb-4">Customers Testimonials</h6> 
			<?php include('partials/clients_testemonials.php')?>
		</div>
	</div>
</div>

<div class="col-md-4 pt-2">
	<div class="card ">
		<div class="card-header d-flex justify-content-between text-white">
			<h6>Add Testimonial</h6>
		</div>
		<div class="card-body bg-light">
			<?php include('partials/forms/add_testimonial_form.php')?>
		</div>
	</div>
</div>

</div>
	</div>
<?=$this->endSection()?>