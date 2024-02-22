<div class="row">

	<?php if(isset($all_team)) : ?>
		<?php foreach($all_team as $tm) : ?>
			<div class="col-md-3 mt-3">
				<div class="card rounded">
					<div class="card-body" 
					style="height:250px; 
					background-image: url(<?=base_url('uploads/'.$tm['profileImg'])?>);
					background-position: top; background-size: cover; background-repeat: no-repeat;
					" >
						
					</div>
					<div class="card-footer">
						<div class="row text-center">
							<div class="col-12">
								<p class="mb-0 text-dark"><?=$tm['fullName']?></p>
								<p class="text-secondary mt-0"><i><?=$tm['profession']?></i></p>
							</div>
						</div>
						<div class="row">
							
						<a class="btn btn-outline-primary w-100" href="<?=base_url('/dashboard/edit/team/'.$tm['id'])?>">
							Profile
						</a>
							
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>
</div>