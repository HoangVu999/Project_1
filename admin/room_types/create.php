<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Add Room Type
            </h3>
        </div>
        <div class="card-body">
            <form action="room_types/create-save.php" method="post" enctype="multipart/form-data" class="col-md-8 m-auto">
                <div class="form-group">
                    <label for="name"> Loại phòng</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nhập tên loại phòng" required>
                </div>
                <div class="form-group">
                    <label for="name">Giá loại phòng</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá loại phòng" required>
                </div>
                <div class="form-group">
                    <label for="name">Giảm giá loại phòng</label>
                    <input type="number" name="price_sale" id="price_sale" class="form-control" placeholder="Giảm giá loại phòng" required>
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i> Lưu</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
