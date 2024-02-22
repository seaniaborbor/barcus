<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="container">
	<div class="row">

<div class="col-md-8 pt-2">
	<div class="card">
		<div class="card-body border-0 bg-light">
			<h6 class=" mt-2 mb-4">Edit Testimonial</h6>
			<?php include('partials/forms/edit_testimonial_form.php')?>
		</div>
	</div>
</div>

<div class="col-md-4 pt-2">
	<div class="card shadow-lg ">
		<div class="card-header d-flex justify-content-between text-white">
			<h6>Testimonial Summary</h6>
		</div>
		<div class="card-body">
			<div class="mb-3 border-bottom">
				<p class="lead">Customer's Name</p>
				<p><?= $a_testimonial['customer_name']?></p>
			</div>
			<div class="mb-3 border-bottom">
				<p class="lead">Customer's Title</p>
				<p><?= $a_testimonial['customer_title']?></p>
			</div>
			<div class="mb-3 border-bottom">
				<p class="lead">Customer's Testimoney</p>
				<p><?= $a_testimonial['customer_testimoney']?></p>
			</div>
			<div class="mb-3 col-md-6 rounded-3 offset-md-3">
				<div class="p-5" 
				style="height:200px; 
				background-image:url(<?=base_url('uploads/'.$a_testimonial['customer_pic'])?>); 
				background-position:top;
				background-size: cover;
				background-repeat: no-repeat;">
				</div>
			</div>
		</div>
	</div>
</div>

</div>
	</div>
<?=$this->endSection()?>