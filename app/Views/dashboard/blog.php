<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="container">
	<div class="row">

<div class="col-md-8 pt-2">
	<div class="card">
		<div class="card-body">
			<h4 class="text-success mt-2 mb-4">List of published blogs</h4>
			<?php include("partials/tables/blog_table.php")?> 
		</div>
	</div>
</div>

<div class="col-md-4 pt-2">
	<div class="card shadow-lg">
		<div class="card-header d-flex justify-content-between">
			<h6>Create a blog Post</h6>
		</div>
		<div class="card-body bg-light">
			<?php include("partials/forms/add_blog_post.php")?>
		</div>
	</div>
</div>

</div>
	</div>
<?=$this->endSection()?>