<?php
require_once '../libs/room_type.php';
$id = $_GET['id'];
$rType = list_one_roomType('id', $id);
?>
<!-- Begin Page Content -->
<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Room Type </h6>
        </div>
        <div class="card-body">
            <form action="room_types/edit-save.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name"> Tên loại phòng</label>
                    <input type="text" name="name" class="form-control" placeholder="Tên danh mục" value="<?= $rType['name_room_type'] ?>">
                </div>
                <?php if($rType['images']!='') :?> 
                    <img src="../images/<?=$rType['images']?>" width="250px" alt="">
                    <input type="hidden" name="hinh" value="<?=$rType['images']?>">
                <?php endif; ?>
                <div class="form-group">
                    <label for="name">Image</label> <br>
                    <input type="file" name="images" class="form-file-input" id="">
                 </div>
                 <div class="form-group">
                     <label for="name">Description</label>
                     <textarea type="text" name="description" id="description" class="form-control" rows="10"><?= $rType ['description']?></textarea>
                </div>
                <div class="form-group">
                    <label for="name">Giá loại phòng</label>
                    <input type="text" name="price" id="price" class="form-control" placeholder="Tên danh mục" value="<?= $rType['room_price'] ?>">
                </div>
                
                <input type="hidden" name="id" value="<?= $rType['id'] ?>">
                <button type="submit" name="btn-edit" class="btn btn-primary">Ghi lại</button>
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