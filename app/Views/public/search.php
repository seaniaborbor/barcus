<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>
<?php //$search_result = $search_result[0]; ?>
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-3">
            <h3>Serch Results for </h3>
         </div>
<?php if(isset($search_result)): ?>
    <?php foreach($search_result as $srlt) : ?>
                        <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4><?=$srlt->serviceName?></h4>
                            <?=substr($srlt->serviceDescription, 3, 150)?>...</p>
                            <a href="<?=base_url('subservice/'.$srlt->serviceName)?>" class="btn btn-danger rounded-0">Read in details</a>
                        </div>
                    </div>
                </div>
    <?php endforeach; ?>
    </div>
</div>
<?php endif;?>

<?=$this->endSection()?>