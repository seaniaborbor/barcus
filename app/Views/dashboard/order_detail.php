

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
    <div class="container-flow container-fluid pt-4 px-4" ?>
        <div class="row">
            <div class="col-md-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h6>Services ordered </h6>
                    <table class="table table-stripped">
                                <tr>
                                    <td>Total Services requested</td>
                                    <td><?=count($orderDetails)?></td>
                                </tr>
                            <?php if(isset($orderDetails)) : ?>
                                <?php foreach($orderDetails as $servName) : ?>
                                 <tr>
                                     <td>Service Name </td>
                                     <td><?=$servName['orderServiceName']?></td>
                                 </tr>
                                <?php endforeach;?>
                                <?php endif; ?>
                        </table>

                        <a href="#" class="btn m-3 rounded-0  shadow-lg btn-success"><i class="fa fa-whatasapp"></i>Chat with customer</a>
                        <a href="<?=base_url('/dashboard/delete/orders/'.$customerDetails[0]['orderNo'])?>" class="btn m-3 rounded-0  shadow-lg btn-danger">Delete this Order</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>Customer Profile</h6>
                        <?php //print_r($customerDetails); ?>
                        <table class="table">
                            <tr>
                                <td>First Name</td>
                                <td><?=$customerDetails[0]['fullName']?></td>
                            </tr>
                            <tr>
                                <td>Phone</td>
                                <td><?=$customerDetails[0]['phoneNo']?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?=$customerDetails[0]['email']?></td>
                            </tr>
                            <tr>
                                <td>Prefered Currency</td>
                                <td><?=$customerDetails[0]['currencySelect']?></td>
                            </tr>
                            <tr>
                                <td>Order Code </td>
                                <td><?=$customerDetails[0]['orderNo']?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?=$this->endSection()?>