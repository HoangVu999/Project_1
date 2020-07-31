<?php

?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Add Blog
            </h3>
        </div>
        <div class="card-body">
            <form action="new/create-save.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="news_name">Title Blog</label>
                            <input type="text" name="news_name" id="name" class="form-control" placeholder="Enter title blog" required>
                        </div>
                        <div class="form-group">
                            <label for="news_image">Image</label><br>
                            <input type="file" name="news_image" class="form-input-file border">
                        </div>
                        <div class="form-group">
                            <label for="news_description">Description</label>
                            <input type="text" name="news_description" id="description" class="form-control" placeholder="Enter description..." required>
                        </div>
                        <div class="form-group">
                            <label for="news_content">Content</label>
                            <textarea class="form-control" id="news_content" name="news_content" rows="10"></textarea>
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="news_view">View</label>-->
<!--                            <input type="text" name="news_view" id="news_view" class="form-control" required>-->
<!--                        </div>-->
                    </div>
                </div>
                <button type="submit" name="btnsave" class="btn btn-primary"><i class="fa fa-plus"></i> Create</button>
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
