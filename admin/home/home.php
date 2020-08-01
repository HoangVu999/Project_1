<?php
require_once '../config/config.php';
require_once '../libs/database.php';
$conn = connection();
// dem ton so record trong bang danh muc
$sql = "select count(*) as total from " . TABLE_CATEGORY;
$stmt = $conn->prepare($sql);
$stmt->execute();
$countCate = $stmt->fetch();

// dem ton so record trong bang san pham
$sql = "select count(*) as total from " . TABLE_PRODUCT;
$stmt = $conn->prepare($sql);
$stmt->execute();
$countPro = $stmt->fetch();

// dem ton so record trong bang phan hoi
$sql = "select count(*) as total from " . TABLE_COMMENT;
$stmt = $conn->prepare($sql);
$stmt->execute();
$countComment = $stmt->fetch();

// dem ton so record trong bang phan hoi
$sql = "select count(*) as total from " . TABLE_USER;
$stmt = $conn->prepare($sql);
$stmt->execute();
$countUser = $stmt->fetch();

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Số lượng phòng
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countPro['total'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fab fa-product-hunt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Số lượng loại phòng
                                
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countCate['total'] ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-ethernet fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Số lượng User</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div
                                        class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $countComment['total'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Số lượng
                                    comment
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countComment['total'] ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </div>
</div>
<!-- /.container-fluid -->
<!--<div class="container-fluid">-->
<!--    <div class="card shadow mb-4">-->
<!--        <div class="card-header py-3">-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--            <div class="table-responsive">-->
<!--                <form action="" method="post" class="col-12">-->
<!--                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">-->
<!--                        <thead>-->
<!--                        <tr>-->
<!--                            <th>-->
<!--                                <input type="checkbox" name="checkall" id="checkall">-->
<!--                            </th>-->
<!--                            <th>ID</th>-->
<!--                            <th>Product_id</th>-->
<!--                            <th>User_id</th>-->
<!--                            <th>Content</th>-->
<!--                            <th>Created_at</th>-->
<!--                            <th>Action</th>-->
<!--                        </tr>-->
<!--                        </thead>-->
<!--                        <tfoot>-->
<!--                        <tr>-->
<!--                            <th>-->
<!--                            </th>-->
<!--                            <th>ID</th>-->
<!--                            <th>Product_id</th>-->
<!--                            <th>User_id</th>-->
<!--                            <th>Content</th>-->
<!--                            <th>Created_at</th>-->
<!--                            <th>Action</th>-->
<!--                        </tr>-->
<!--                        </tfoot>-->
<!--                        <tbody>-->
<!--                        --><?php //foreach ($comment as $c) : ?>
<!--                            <tr>-->
<!--                                <td>-->
<!--                                    <input type="checkbox" name="id[]" id="" value="--><? //= $c['id'] ?><!--">-->
<!--                                </td>-->
<!--                                <td>--><? //= $c['id'] ?><!--</td>-->
<!--                                <td>--><? //= $c['product_id'] ?><!--</td>-->
<!--                                <td>--><? //= $c['user_id'] ?><!--</td>-->
<!--                                <td>--><? //= $c['content'] ?><!--</td>-->
<!--                                <td>--><? //= $c['created_at'] ?><!--</td>-->
<!--                                <td>-->
<!--                                    <a href="--><? //= ROOT ?><!--admin/?page=comment&id=--><? //= $c['id'] ?><!--"-->
<!--                                       onclick="return confirm('Bạn có muốn xóa danh mục này không')"-->
<!--                                       class="btn btn-danger">-->
<!--                                        <i class="fas fa-trash-alt"></i></a>-->
<!--                                </td>-->
<!--                            </tr>-->
<!--                        --><?php //endforeach; ?>
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


