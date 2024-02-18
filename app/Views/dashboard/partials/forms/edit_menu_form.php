<div class="col-sm-12 col-sm-6 col-xl-6">
<div class="bg-light rounded h-100 p-4">
   <form action="<?=base_url('dashboard/menu/edit/'.$menu_data['menuId'])?>" method="post" enctype="multipart/form-data">
   <h6 class="mb-4">Edit Menue</h6>
    <div class="form-floating mb-3">
        <input type="text"  name="menuName" value="<?=$menu_data['menuName']?>" class="form-control" id="floatingInput"
            placeholder="Eg: Barcus Trival">
        <label for="floatingInput">Menu Name</label>
        <?php if(isset($validation) && $validation->hasError('menuName')) : ?>
             <div class="text-danger"><?=$validation->getError('menuName')?></div>
        <?php endif; ?>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-select" name="menuStatus"  id="floatingSelect"
            aria-label="Floating label select example">
            <option <?=set_select('menuStatus','1') ?> value="1">Visible</option>
            <option <?=set_select('menuStatus','2') ?> value="2">Hidden</option>
        </select>
        <label for="floatingSelect">Menu visibilty on navbar status</label>
        <?php if(isset($validation) && $validation->hasError('menuStatus')) : ?>
             <div class="text-danger"><?=$validation->getError('menuStatus')?></div>
        <?php endif; ?>
    </div>

    <div class="mt-3">
        <label for="formFileLg"  class="form-label">Feature Image</label>
        <input class="form-control form-control-lg" id="formFileLg" name="menuPic" type="file">
        <?php if(isset($validation) && $validation->hasError('menuPic')) : ?>
             <div class="text-danger"><?=$validation->getError('menuPic')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mt-3">
        <textarea class="form-control"  name="menuDescription" placeholder="Write the menu page content here"
            id="floatingTextarea" style="height: 150px;">
            <?=$menu_data['menuDescription']?>
        </textarea>
        <?php if(isset($validation) && $validation->hasError('menuDescription')) : ?>
             <div class="text-danger"><?=$validation->getError('menuDescription')?></div>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
</div>

<script>
        // Initialize CKEditor
        CKEDITOR.replace('menuDescription');
    </script>