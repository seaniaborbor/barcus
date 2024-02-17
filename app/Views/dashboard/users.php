

<?=$this->extend('dashboard/partials/common/layout')?>

<?=$this->section('content')?>
    <div class="container-flow container-fluid pt-4 px-4" ?>
        <div class="row">
            <?php include('partials/usersLog.php');?>
            <?php include("partials/forms/add_user_form.php")?>
        </div>
    </div>
<?=$this->endSection()?>