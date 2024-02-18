<div class="col-sm-12 col-sm-6 col-xl-6">
    <div class="bg-light rounded  p-4">
        <h6 class="mb-4">List of Services</h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Service Name</th>
                    <th scope="col">Visibility</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($service_data)) : ?>
                    <?php foreach($service_data as $srv_data) : ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?=$srv_data->serviceName?></td>
                            <td>
                                <?php if($srv_data->serviceStatus == 1){
                                    echo "Visible";
                                }else{
                                    echo "Hidden";
                                }
                                ?>

                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <a href="<?=base_url('/dashboard/service/edit/'.$srv_data->serviceId)?>" class="btn btn-success">
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