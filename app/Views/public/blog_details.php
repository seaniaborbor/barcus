<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>
<?php //print_r($blog_to_read); exit(); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
           <img src="<?=base_url('uploads/'.$blog_to_read[0]->featureImg)?>"
            class="img-fluid w-100 mb-3" alt="">
            <?=$blog_to_read[0]->postbody?>
        </div>
        <div class="col-md-4">
            <div class="card border-0 p-2">
               <div class="card-header">
               <h5>Take a look at our recent posts</h5>
               </div>
                <?php //print_r($recent_blogs); exit(); ?>
                    <?php if(isset($recent_blogs)) : ?>
                        <?php foreach($recent_blogs as $rb) :?>
                            <div class="card-body shadow-sm mt-3 border-0">
                            <img src="<?=base_url('uploads/'.$rb['featureImg'])?>"
            class="img-fluid w-100 mb-3" alt="">
                                <h5 class="card-title"><?=$rb['title']?></h5>
                                <p class="card-text"><?=substr($rb['postbody'],3,50)?>...</p>
                                <a href="<?=base_url('blog-details/'.$rb['id'])?>" class="btn btn-danger">Read More</a>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                
            </div>
        </div>
    </div>
</div>

<?=$this->endSection()?>