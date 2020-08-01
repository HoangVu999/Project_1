<?php
require_once '../libs/setting.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_setting($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=setting');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_category){
        delete_setting($id_category);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=setting');
    die;
}
$setting = list_all_setting();
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success my-4 rounded-lg">
            <h5 class="font-weight-bold text-white pt-2"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <h1 class="h5 mb-2 text-gray-800">Home / Setting </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">List Setting
                <a href="<?= ROOT ?>/admin?page=setting&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
            </h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" class="col-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="checkall" id="checkall">
                        </th>
                        <th>ID</th>
                        <th>Name Web</th>
                        <th>Logo</th>
                        <th>Link_website</th>
                       <th>Email</th>
                        <th>Slogan</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Note</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>
                        </th>
                        <th>ID</th>
                        <th>Name Web</th>
                        <th>Logo</th>
                        <th>Link_website</th>
                       <th>Email</th>
                        <th>Slogan</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Note</th>
                        <th>Action</th>

                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($setting as $st) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="id[]" id="" value="<?= $st['id'] ?>">
                        </td>
                        <td><?= $st['id']?></td>
                        <td><?= $st['name_web']?>
                        </td>
                        <td>
                        <img src="../images/<?= $st['logo'] ?>" width="90" alt="">
                        </td>
                        
                       
                        <td><?= $st['link_website']?></td>
                        <td><?= $st['email']?></td>
                        <td><?= $st['slogan']?></td>
                        <td><?= $st['address']?></td>
                        <td><?= $st['phone']?></td>
                        <td><?= $st['note']?></td>
                       
                     
                      
                        <td>
                            <a href="<?= ROOT ?>admin/?page=setting&action=edit&id=<?= $st['id'] ?>"  class="btn btn-success"><i class="far fa-edit"></i> Edit</a>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                    <button type="submit" class="btn btn-danger" id="btndel-category" name="btn-del"><i class="fas fa-trash-alt"></i> Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->