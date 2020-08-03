<?php
require_once '../libs/room_type.php';
$pro = list_all_roomType();
?>
<script src="https://cdn.tiny.cloud/1/ld34vclndumv7xny2s3pnsrpxwoe9floxn96fpbl57r085kv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<div class="container-fluid">

    <!-- Page Heading -->

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Add Room
            </h3>
        </div>
        <div class="card-body">
        <form action="rooms/create-save.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name Room Type</label>
            <br>
            <select name="room_type_id" id="">
            <?php foreach($pro as $c): ?>
                <option value="<?=$c['id']?>"><?=$c['name_room_type']?></option>
            <?php endforeach; ?>    
        </select>
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
