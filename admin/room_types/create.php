<?php

?>
<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
                    <input type="text" name="name_room_type" id="name_room_type" class="form-control" placeholder="Nhập tên loại phòng" required>
                </div>
                
                <div class="form-group">
                    <label for="name">Image</label> <br>
                    <input type="file" name="images" class="form-file-input" id="">
                </div>
                
                <div class="form-group">
                    <label for="name"> Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Nhập nội dung..." ></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Giá loại phòng</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Nhập giá loại phòng" required>
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
        selector: '#description'
    });
</script>