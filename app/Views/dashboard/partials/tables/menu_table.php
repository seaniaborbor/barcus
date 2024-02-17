<div class="col-sm-12 col-sm-6 col-xl-6">
    <div class="bg-light rounded  p-4">
        <h6 class="mb-4">List of Menu</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Menu Name</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($menu_data)) : ?>
                    <?php $counter = 1; ?>
                    <?php foreach($menu_data as $mnu) : ?>
                        <tr>
                            <th scope="row"><?=$counter++?></th>
                            <td><?=$mnu['menuName']?></td>
                            <td>
                                <?php 
                                if($mnu['menuStatus'] == '1'){
                                    echo "Visible";
                                }else{ 
                                    echo "Hidden"; 
                                }
                                ?> 
                            </td>
                            <td>
                                <a href="<?=base_url('/dashboard/menu/edit/'.$mnu['menuId'])?>" class="btn btn-primary">
                                    <i class="fa fa-pen"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>