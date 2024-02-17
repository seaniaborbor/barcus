

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
    <div class="container-flow container-fluid pt-4 px-4" ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Service you're about edit details</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-stripped">
                            <thead>
                                <tr>
                                    <td>Property</td>
                                    <td>Value</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Service Name</td>
                                    <td><?=$service_data['serviceName']?></td>
                                </tr>
                                <tr>
                                    <td>Service Icon</td>
                                    <td><i class="fa <?=$service_data['serviceIcon']?>"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <?=$service_data['serviceDescription']?>
                            <img src="<?=base_url('uploads/'.$service_data['servicePic'])?>" alt="" class="img-fluid d-block w-100 img-thumbnail rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        <?php include('partials/forms/edit_service_form.php')?>
        </div>
    </div>
<?=$this->endSection()?>