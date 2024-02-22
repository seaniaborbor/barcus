<?php $this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
	<div class="container">
	<div class="row">

<div class="col-md-8 pt-2">
	<div class="card">
		<div class="card-body">
			<h6 class=" mt-2 mb-4">Team Members Profiles</h6>
			<?php include("partials/team_members_profiles.php")?> 
		</div>
	</div>
</div>

<div class="col-md-4 pt-2">
	<?php 
		if($userData['userRole'] == "SUDO"){
			?>
			<div class="card shadow-lg border ">
				<div class="card-header d-flex justify-content-between text-white">
					<h6>Add Team Members</h6>
				</div>
				<div class="card-body">
					<?php include("partials/forms/add_team_member_form.php")?>
				</div>
			</div>
			<?php 
		}else{
			?>
				<div class="card">
					<div class="card-body">
						<h3>Meet Your Fello Team Members</h3>
						<p>The profiles you are looking are all members of the administrators who controll this site. Some members have higher previllages than others. Like you and others, you can only edit your personal profile. You can't add nor delete anyone neither </p>
					</div>
				</div>
			<?php 
		}		
	?>
	
</div>

</div>
	</div>
<?=$this->endSection()?>