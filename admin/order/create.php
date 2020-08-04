<?php
require_once '../libs/users.php';
$user = list_all_user();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Add Room
            </h3>
        </div>
        <div class="card-body">
        <form action="order/create-save.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">User-Name</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Phone</label>
            <input type="number" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Email</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">Order_adult_number</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Name</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Name</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Name</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">User-Name</label>
            <input type="text" name="room_number" id="number_room" class="form-control" required>        
        </div>
        <div class="form-group">
            <label for="name">Status</label>
            <select name="room_status" id="status">
                <option value="0">Empty</option>
                <option value="1">Full</option>
            </select>
        </div>
                <button type="submit" name="btnsave" class="btn btn-primary float-right"><i class="fa fa-check"></i> Lưu</button>
            </form>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<script>
    //Thêm trình soạn thảo văn bản tinymce vào phần nội dung của sản phẩm
    tinymce.init({
        selector: '#news_content'
    });
</script>
