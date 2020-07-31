<?php
require_once '../libs/room_type.php';
$id = $_GET['id'];
$rType = list_one_roomType('id', $id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sửa loại phòng </h6>
        </div>
        <div class="card-body">
            <form action="room_types/edit-save.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name"> Tên loại phòng</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên danh mục" value="<?= $rType['name_room_type'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Giá loại phòng</label>
                    <input type="number" name="price" id="price" class="form-control" placeholder="Tên danh mục" value="<?= $rType['room_price'] ?>">
                </div>
                <div class="form-group">
                    <label for="name">Giảm giá loại phòng</label>
                    <input type="number" name="price_sale" id="price_sale" class="form-control" placeholder="Tên danh mục" value="<?= $rType['room_price_sale'] ?>">
                </div>
                <input type="hidden" name="id" value="<?= $rType['id'] ?>">
                <button type="submit" name="btn-edit" class="btn btn-primary">Ghi lại</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->