<?php
require_once '../libs/room.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_room($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=room');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_room){
        delete_room($id_room);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=room');
    die;
}
$result = list_all_room();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success my-4 rounded-lg">
            <h5 class="font-weight-bold text-white pt-2"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">List Room
                <a href="<?= ROOT ?>/admin?page=room&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Add new</a>
            </h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="POST" class="col-12">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                <input type="checkbox" name="checkall" id="checkall">
                            </th>
                            <th>ID</th>
                            <th>Images</th>
                            <th>Price</th>
                            <th>Name Room</th>
                            <th>Description</th>
                            <th>Status</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>

                            </th>
                            <th>ID</th>
                            <th>Images</th>
                            <th>Price</th>
                            <th>Name Room</th>
                            <th>Description</th>
                            <th>Status</th>
                            
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($result as $r) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $r['id'] ?>">
                                </td>
                                <td><?= $r['id'] ?></td>
                                <td>
                                    <img src="../images/<?= $r['image_room'] ?>" width="90" alt="">
                                </td>
                                <td><?= number_format($r['room_price'], 0, '', ',')  ?> VNĐ</td>
                                <td><?= $r['name_room_type'] ?></td>
                                <td><?= $r['description_room'] ?></td>
                                <td><?= ($r['status_room']) ? 'Empty' : 'Full' ?></td>
                                

                                <td>
                                    <a href="<?= ROOT ?>admin/?page=room&action=edit&id=<?= $r['id'] ?>" class="btn btn-success"><i class="far fa-edit"></i>Edit</a>
                                    <a href="<?= ROOT ?>admin/?page=room&id=<?= $r['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger"><i class="far fa-trash-alt"></i>Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary" id="btndel-category" name="btn-del">Xóa mục đánh dấu</button>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->