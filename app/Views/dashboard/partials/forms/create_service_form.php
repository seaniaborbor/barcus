<div class="col-sm-12 col-sm-6 col-xl-6">

    <form  action="<?=base_url('/dashboard/service/')?>"  method="post" enctype="multipart/form-data">
    <div class="bg-light rounded h-100 p-4">
    <h6 class="mb-4">Add New Service</h6>
    <div class="form-floating mb-3">
        <input type="text" name="serviceName" class="form-control" id="floatingInput"
            placeholder="Eg: VIP Security">
        <label for="floatingInput">Service Name</label>
        <?php if(isset($validation) && $validation->hasError('serviceName')) : ?>
             <div class="text-danger"><?=$validation->getError('serviceName')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="serviceIcon" class="form-control" id="floatingInput"
            placeholder="Eg: VIP Security">
        <label for="floatingInput">Service Icon</label>
        <?php if(isset($validation) && $validation->hasError('serviceIcon')) : ?>
             <div class="text-danger"><?=$validation->getError('serviceIcon')?></div>
        <?php endif; ?>
    </div>
    
    <div class="form-floating mb-3">
        <select class="form-select" name="serviceStatus" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected>--choose--</option>
            <option value="1">Visible</option>
            <option value="2">Hidden</option>
        </select>
        <label for="floatingSelect">Service Visibility On Site</label>
        <?php if(isset($validation) && $validation->hasError('serviceStatus')) : ?>
             <div class="text-danger"><?=$validation->getError('serviceStatus')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mb-3">
        <select class="form-select" name="serviceMenu" id="floatingSelect"
            aria-label="Floating label select example">
            <option selected value="">--choose--</option>
            <?php if(isset($menu_data)) : ?>
                <?php foreach($menu_data as $mndta) : ?>
                    <option  value="<?=$mndta['menuId']?>"><?=$mndta['menuName']?></option>
                <?php endforeach; ?>
            <?php endif; ?> 
        </select>
        <label for="floatingSelect">Service Menu <small class="text-secondary">(<i>Under which this service should appear on the menu </i>) </small></label>
        <?php if(isset($validation) && $validation->hasError('serviceMenu')) : ?>
             <div class="text-danger"><?=$validation->getError('serviceMenu')?></div>
        <?php endif; ?>
    </div>

    <div class="mt-3">
        <label for="formFileLg"  class="form-label">Feature Image</label>
        <input name="servicePic" class="form-control form-control-lg" id="formFileLg" type="file">
        <?php if(isset($validation) && $validation->hasError('servicePic')) : ?>
             <div class="text-danger"><?=$validation->getError('servicePic')?></div>
        <?php endif; ?>
    </div>

    <div class="form-floating mt-3">
        <textarea class="form-control" name="serviceDescription" placeholder="Write the menu page content here"
            id="floatingTextarea" style="height: 150px;"></textarea>
        <?php if(isset($validation) && $validation->hasError('serviceDescription')) : ?>
             <div class="text-danger"><?=$validation->getError('serviceDescription')?></div>
        <?php endif; ?>
    </div>
    </form>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</div>
</div>

<script>
        // Initialize CKEditor
        CKEDITOR.replace('serviceDescription');
    </script>