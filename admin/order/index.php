<?php
require_once '../libs/order.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_new($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=order');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_order){
        delete_order($id_order);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=order');
    die;
}
$order = list_all_order();
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
                            <th>User_Name</th>
                            <th>User_Phone</th>
                            <th>User_Email</th>
                            <th>Adult_Number</th>
                            <th>Child_Number</th>
                            <th>Booking_Day</th>
                            <th>Start_Day</th>
                            <th>End_Day</th>
                            <th>Sum_Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>
                            </th>
                            <th>ID</th>
                            <th>User_Name</th>
                            <th>User_Phone</th>
                            <th>User_Email</th>
                            <th>Adult_Number</th>
                            <th>Child_Number</th>
                            <th>Booking_Day</th>
                            <th>Start_Day</th>
                            <th>End_Day</th>
                            <th>Sum_Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?php foreach ($order as $o) : ?>
                            <tr>
                                <td>
                                    <input type="checkbox" name="id[]" id="" value="<?= $o['id'] ?>">
                                </td>
                                <td><?= $o['id'] ?></td>
                                <td><?= $o['username'] ?></td>
                                <th><?= $o['userphone'] ?></th>
                                <th><?= $o['useremail'] ?></th>
                                <th><?= $o['order_adult_number'] ?></th>
                                <th><?= $o['order_child_number'] ?></th>
                                <th><?= $o['order_booking_day'] ?></th>
                                <th><?= $o['order_start_day'] ?></th>
                                <th><?= $o['order_end_day'] ?></th>
                                <td><?= number_format($o['order_sum_price'], 0, '', ',')  ?> VNĐ</td>
                                <td><?= ($o['order_status']) ? 'Success' : 'Unfinished' ?></td>
                                <td>
                                    <a href="<?= ROOT ?>admin/?page=order&action=edit&id=<?=$o['id'] ?>" class="btn btn-success"><i class="far fa-edit"></i></a>
                                    <a href="<?= ROOT ?>admin/?page=order&id=<?= $o['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa không')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
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