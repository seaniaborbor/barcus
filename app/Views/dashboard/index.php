

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Unique services</p>
                                <h6 class="mb-0"><?=count($services)?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-shopping-cart fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Orders</p>
                                <h6 class="mb-0"><?=count($customer)?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-pen fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">News/Blog Post </p>
                                <h6 class="mb-0"><?=count($blog)?></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-users fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Users/Team</p>
                                <h6 class="mb-0"><?=count($team)?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <?php //print_r($order); ?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Orders </h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">View </th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Phone </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order as $odrs) :?>
                                    <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                    <td><?=$odrs->fullName?></td>
                                    <td><?=$odrs->phoneNo?></td>
                                    <td><?=$odrs->email?></td>
                                    <td><?=$odrs->date?></td>
                                    <td><a href="<?=base_url('dashboard/orders/'.$odrs->serviceOrderNo)?>" class="btn btn-sm btn-primary btn-prpmary rounded-circle">
                                        <i class="fa fa-eye"></i>
                                    </a></td>
                                    <td><a class="btn btn-sm rounded-circle btn-danger" href=""><i class="fa fa-trash"></i></a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4">
            <div class="row">
            <div class="col-md-4">
                <div class="card bg-light border-0">
                    <div class="card-body">
                        <h6>Team / users Log </h6>
                        <table class="table table-hover table-stripped">
                            <thead>
                                <tr class="fw-bold text-dark">
                                    <th scope="col">User Name</th>
                                    <th scope="col">Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($team as $teamMem) :?>
                                    <tr>
                                        <th scope="row"><?=$teamMem['fullName']?></th>
                                        <td><a  href="<?=base_url('/dashboard/edit/team/'.$teamMem['id'])?>" class="">
                                            <img src="<?=base_url('uploads/'.$teamMem['profileImg'])?>" width="40" height="40" 
                                            class="rounded-circle" alt="">
                                        </a></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        </table>
                    </div>
                </div>
            </div>
                <div class="col-md-8 mt-3">
                    <div class="card bg-light border-0">
                        <div class="card-body">
                            <h6>Blog Post Log</h6>
                            <table class="table-stripped table table-hover">
                                <thead>
                                    <tr class="fw-bold text-dark">
                                        <th scope="col">Blog Title</th>
                                        <th scope="col">created At </th>
                                        <th scope="col">Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($blog as $blg) :?>
                                        <tr>
                                            <th scope="row"><?=$blg['title']?></th>
                                            <td><?=$blg['createdAt']?></td>
                                            <td>
                                            <a href="<?=base_url('blog-details/'.$blg['id'])?>" class="btn btn-sm rounded-circle btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="<?=base_url('/dashboard/edit/blog/'.$blg['id'])?>" class="btn btn-sm rounded-circle btn-primary"><i class="fa fa-pen"></i> </a>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <!-- Widgets End -->

<?=$this->endSection()?>