<?php
//Làm việc với csdl
//Viết câu lệnh truy vấn đến bảng room_types
require_once '../libs/room_type.php';
require_once '../libs/room.php';
$id = $_GET['id'];
$dm = list_all_roomType();
//Lấy id từ url để sửa sản phẩm
$id = $_GET['id'];
//Câu lệnh sql lấy ra sản phẩm
$cate = list_one_product($id);
?>
<!--Trình soạn thảo văn bản cho phần nội dung của sản phẩm tinymce-->
<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Room </h6>
        </div>
        <div class="card-body">
        <form action="rooms/edit-save.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name Categories</label> <br>
            <select name="room_type_id" id="">
            <?php foreach($dm as $d): ?>
                <?php if ($d['id']==$cate['cate_id']) :?>
                <option value="<?=$d['id']?>"selected><?=$d['name_room_type']?></option>
                <?php else :?>
                    <option value="<?=$d['id']?>"><?=$d['name_room_type']?></option>
                <?php endif; ?>    
            <?php endforeach; ?>    
        </select> <br>

        </div>
      
        <?php if($cate['images']!='') :?> 
          <img src="../images/<?=$cate['images']?>" width="250px" alt="">
          <input type="hidden" name="hinh" value="<?=$cate['images']?>">
        <?php endif; ?>
        <div class="form-group">
            <label for="name">Image</label> <br>
            <input type="file" name="images" class="form-file-input" id="">
        </div>
        
        <div class="form-group">
            <label for="name">Number Room</label>
            <input type="text" name="room_number" id="number_room" class="form-control" value="<?=$cate['room_number']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <textarea type="text" name="room_description" id="description" class="form-control" rows="10"><?= $cate ['room_description']?></textarea>
        </div>
        <div class="form-check">
        <input type="checkbox" name="room_status" class="form-check-input status" id="" <?= ($cate['room_status'] == 0) ? 'checked' : '' ?>> 
        <label for="status" class="status-title">Trạng thái 
        <span id="span"><?= ($cate['room_status'] == 0) ? 'Empty' : 'Full' ?></span></label>
        </div>
       
        <input type="hidden" name="id" value="<?=$cate['id']?>">
        <button type="submit" name="btn-save-rooms" class="btn btn-primary"> Ghi Lại </button>
    </form>
        </div>
    </div>
</div>
<script>
    //Thêm trình soạn thảo văn bản tinymce vào phần nội dung của sản phẩm
    tinymce.init({
        selector: '#description'
    });
</script>