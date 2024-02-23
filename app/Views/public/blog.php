<?=$this->extend('public/partials/common/layout')?>

<?=$this->section('main')?>

<section class="p-0">
    <img src="<?=base_url('imgs/blogbanner.png')?>" class="img-fluid w-100" alt="" class="img-fluid">
</section>

<div class="container py-5">
    <div class="row">
           <?php if(isset($blog_posts)) : ?>
                <?php foreach($blog_posts as $post) :?>
                    <div class="col-md-4">
                        <div class="card shadow-sm  mt-3 rounded-0">
                            <div class="card-body">
                                <img src="<?=base_url('uploads/'.$post['featureImg'])?>" alt="" class="img-fluid">
                                <h4 class="text-danger mt-2 mb-4"><?=$post['title']?></h4>
                                <?=substr($post['postbody'],3, 150)?>...</p>
                                <a href="<?=base_url('blog-details/'.$post['id'])?>" class="btn btn-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif; ?>
    </div>
</div>

<?=$this->endSection()?>