<?php
//Làm việc với csdl
//Viết câu lệnh truy vấn đến bảng setting
require_once '../libs/setting.php';

$id = $_GET['id'];
$st= list_one_setting($id);
?>
<!--Trình soạn thảo văn bản cho phần nội dung của sản phẩm tinymce-->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">

    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update Setting </h6>
        </div>
        <div class="card-body">
        <form action="setting/edit-save.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name Web</label> <br>
            <input type="text" name="name_web" id="name_web" value="<?=$st['name_web']?>">
        </select> <br>

        </div>
      
        <?php if($st['logo']!='') :?> 
          <img src="../images/<?=$st['logo']?>" width="250px" alt="">
          <input type="hidden" name="hinh" value="<?=$st['logo']?>">
        <?php endif; ?>
        <div class="form-group">
            <label for="name">Logo</label> <br>
            <input type="file" name="logo" class="form-file-input" id="">
        </div>
        
        <div class="form-group">
            <label for="name">Link website</label>
            <input type="text" name="link_website" id="link_website" class="form-control" value="<?=$st['link_website']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="<?=$st['email']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Slogan</label>
            <input type="text" name="slogan" id="slogan" class="form-control" value="<?=$st['slogan']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="<?=$st['address']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="<?=$st['phone']?>" required>
        </div>
        <div class="form-group">
            <label for="name">Note</label>
            <textarea type="text" name="note" id="note" class="form-control" rows="10"><?= $st ['note']?></textarea>
        </div>
       
        <input type="hidden" name="id" value="<?=$st['id']?>">
        <button type="submit" name="btn-save-setting" class="btn btn-primary"> Ghi Lại </button>
    </form>
        </div>
    </div>
</div>
<script>
    //Thêm trình soạn thảo văn bản tinymce vào phần nội dung của sản phẩm
    tinymce.init({
        selector: '#note'
    });
</script>