<?php
require_once '../libs/new.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    delete_new($id);
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=new');
    die;
}
if(isset($_POST['btn-del'])){
    extract($_REQUEST);
    foreach ($id as $id_category){
        delete_new($id_category);
    }
    $_SESSION['message'] = "Xóa dữ liệu thành công";
    header('location:' . ROOT . 'admin/?page=new');
    die;
}
$new = list_all_new();
?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="card-header py-3 bg-success my-4 rounded-lg">
            <h5 class="font-weight-bold text-white pt-2"><?= $_SESSION['message'] ?></h5>
        </div>
    <?php endif; ?>
    <h1 class="h5 mb-2 text-gray-800">Trang chủ / Quản lý Blog</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Danh sách Blog
                <a href="<?= ROOT ?>/admin?page=new&action=add" class="btn btn-primary float-right"> <i class="fas fa-plus-circle"></i> Thêm mới</a>
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
                        <th>News_Name</th>
                        <th>News_Image</th>
                        <th>News_Description</th>
                        <th>News_Content</th>
                        <th>News_View</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>
                        </th>
                        <th>ID</th>
                        <th>News_Name</th>
                        <th>News_Image</th>
                        <th>News_Description</th>
                        <th>News_Content</th>
                        <th>News_View</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php foreach ($new as $n) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="id[]" id="" value="<?= $n['id'] ?>">
                        </td>
                        <td><?= $n['id']?></td>
                        <td><?= $n['news_name']?></td>
                        <td>
                            <img src="../images/<?= $n['news_image'] ?>" width="150" alt="">
                        </td>
                        <td><?= $n['news_description']?></td>
                        <td><?= $n['news_content']?></td>
                        <td><?= $n['news_view']?></td>
                        <td>
                            <?php
                            $date = date_create($n['created_at']);
                            echo date_format($date, 'd-m-Y');
                            ?>
                        </td>
                        <td>
                            <a href="<?= ROOT ?>admin/?page=new&action=edit&id=<?= $n['id'] ?>"  class="btn btn-success"><i class="far fa-edit"></i> Sửa</a>
                            <a href="<?= ROOT ?>admin/?page=new&id=<?= $n['id'] ?>" onclick="return confirm('Bạn có muốn xóa danh mục này không')" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Xóa
                            </a>
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