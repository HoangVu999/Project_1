<?php
require_once '../libs/new.php';
$id = $_GET['id'];
$new = list_one_new('id', $id);
?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit blog </h6>
        </div>
        <div class="card-body">
            <form action="new/edit-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="news_name">Title Blog</label>
                            <input type="text" name="news_name" id="name" class="form-control" placeholder="Enter title blog" required value="<?= $new['news_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="news_image">Image</label>
                            <input type="hidden" name="news_image" value="<?= $new['news_image'] ?>">
                            <input type="file" class="form-control-file border" id="news_image" name="news_image">
                            <img src="../images/<?= $new['news_image'] ?>" width="150" alt="">
                        </div>
                        <div class="form-group">
                            <label for="news_description">Description</label>
                            <input type="text" name="news_description" id="description" class="form-control" placeholder="Enter description..." required value="<?= $new['news_description'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="news_content">Content</label>
                            <textarea class="form-control" id="news_content" name="news_content" rows="10"> <?= $new['news_content'] ?> </textarea>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="<?= $new['id'] ?>">
                <button type="submit" name="btn-edit" class="btn btn-success"></i> Edit</button>
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