<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa sản phẩm</h1>
    <div class="row">
        <form action="/VanPhongPham-main/admin/san-pham/them-moi/gui" method="POST" enctype="multipart/form-data" style="display: flex;">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Danh mục sản phẩm</a>

                    <?php foreach ($data['dataCate'] as $cate) { ?>
                        <!-- Danh mục cha -->
                        <a href="#cate-<?= $cate['id'] ?>" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
                            <?= $cate['name'] ?> ⬇️
                        </a>
                        <div class="collapse 
                <?php echo (!empty($data['dataCateAndProduct']) && $data['dataCateAndProduct']['category_id'] == $cate['id']) ? 'show' : ''; ?> ps-3"
                            id="cate-<?= $cate['id'] ?>">

                            <?php foreach ($cate['overall_fields'] as $cateOverall) { ?>
                                <!-- Danh mục con -->
                                <a href="#overall-<?= $cateOverall['id'] ?>" class="list-group-item list-group-item-action" data-bs-toggle="collapse">
                                    <?= $cateOverall['name'] ?> ⬇️
                                </a>
                                <div class="collapse 
                        <?php echo (!empty($data['dataCateAndProduct']) && $data['dataCateAndProduct']['overall_id'] == $cateOverall['id']) ? 'show' : ''; ?> ps-4"
                                    id="overall-<?= $cateOverall['id'] ?>">

                                    <?php foreach ($cateOverall['specific_genres'] as $genre) { ?>
                                        <!-- Danh mục chi tiết -->
                                        <label class="list-group-item">
                                            <input type="radio" name="category" value="<?= $genre['id'] ?>"
                                                <?php echo (isset($data['dataCateAndProduct']) && $data['dataCateAndProduct']['specific_id'] == $genre['id']) ? 'checked' : ''; ?>>
                                            <?= $genre['name'] ?>
                                        </label>
                                    <?php } ?>

                                </div>
                            <?php } ?>

                        </div>
                    <?php } ?>

                    <!-- hình ảnh  -->
                    <a href="#" class="list-group-item list-group-item-action active">Hình ảnh</a>
                    <div class="list-group-item list-group-item-action">
                        <label for="productImage" class="form-label">Ảnh đại diện</label>

                        <!-- Input file -->
                        <input type="file" class="form-control" id="productImage" name="productImage" onchange="previewImage(event)">

                        <!-- Hiển thị ảnh -->
                        <div class="mt-3">
                            <img id="preview" class="img-thumbnail" style="width: 300px;"
                                src="../public/img/istockphoto-1206577970-612x612.jpg"
                                alt="Ảnh đại diện">
                        </div>
                    </div>
                    <script>

                    </script>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9">
                <div class="card shadow mb-4 form-container">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa sản phẩm</h6>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="productName" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="productName" name="productName" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="productDescription" class="form-label">Mô tả sản phẩm</label>
                            <textarea class="form-control" id="productDescription" name="productDescription" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="productPrice" name="productPrice" placeholder="Nhập giá sản phẩm">
                        </div>
                        <div class="mb-3">
                            <label for="salePrice" class="form-label">Giá Sale</label>
                            <input type="number" class="form-control" id="salePrice" name="salePrice" placeholder="Nhập giá sale">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select name="status" id="status" class="form-control">
                                <option value="inactive">Đã ngưng</option>
                                <option value="active">Hoạt động</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu</button>

                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('productDescription');
</script>
<script src="../public/js/category/cate.js"></script>