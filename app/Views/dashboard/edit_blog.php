<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="congainer">
	<div class="row">

<div class="col-md-8 pt-2">
	<div class="card bg-light">
		<div class="card border ">
		<div class="card-header d-flex justify-content-between ">
			<h6><span class="text-primary">EDIT: </span><?=$blog_data['title']?> (blog post)</h6>
		</div>
		<div class="card-body bg-light">
			<?php include('partials/forms/edit_blog_form.php')?>
		</div>
	</div>
	</div>
</div>

<div class="col-md-4 pt-2">
	<div class="card">
		<div class="card-body">
			<h6 class="">Post Summary</h6>
			<div class="mb-3 border-bottom">
				<p class="text-secondary lead">Post Title</p>
				<p><?=$blog_data['title']?></p>
			</div>
			<div class="mb-3 border-bottom">
				<p class="text-secondary ead">Created Date</p>
				<p><?=$blog_data['createdAt']?></p>
			</div>
			<div class="mb-3 border-bottom">
				<p class="text-secondary lead">Category</p>
				<p><?=$blog_data['category']?></p>
			</div>
			<div class="form-group mb-3">
				<div class="alert alert-info">
					<p>You must choose the blog category in order for it to be edited. If you've forgetten the previous category, please look through the post summary above</p>
				</div>
			</div>
			<div class="mb-3 border-bottom">
				<h4 class="text-secondary">Post Images</h4>
				<div class="row">
					<div class="col-md-12">
						<img src="<?=base_url('uploads/'.$blog_data['featureImg'])?>" class="img-fluid rounded img-thumbnail shadow-lg mt-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
	</div>
<?=$this->endSection()?>