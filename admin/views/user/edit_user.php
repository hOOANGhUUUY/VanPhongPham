<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa sản phẩm</h1>
    <div class="row">



        <form action="/VanPhongPham-main/admin/cap-nhat-thanh-vien/<?= $data['dataOneUser']->getId() ?>" method="POST" enctype="multipart/form-data" style="display: flex;">
            <!-- Sidebar -->

            <div class="col-md-3">
                <div class="list-group">
                    <!-- hình ảnh  -->
                    <a href="#" class="list-group-item list-group-item-action active">Hình ảnh</a>
                    <div class="list-group-item list-group-item-action">
                        <label for="productImage" class="form-label">Ảnh đại diện</label>

                        <!-- Input file -->
                        <input type="file" class="form-control" id="productImage" name="userImage" >
                        <input type="hidden" class="form-control" id="productImage_old" name="userImage_old" value="<?= $data['dataOneUser']->getImage() ?>">

                        <!-- Hiển thị ảnh -->
                        <div class="mt-3">
                            <img id="preview" class="img-thumbnail" style="width: 300px;"
                                src="../../../public/images/<?= $data['dataOneUser']->getImage() ?>"
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
                        <h6 class="m-0 font-weight-bold text-primary">Chỉnh sửa thành viên</h6>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="productName" class="form-label">Tên người dùng</label>
                            <input type="text" class="form-control" id="productName" name="userName" placeholder="Nhập tên người dùng" value="<?= $data['dataOneUser']->getName() ?>">
                        </div>

                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Email</label>
                            <input type="email" class="form-control" id="productPrice" name="userEmail" placeholder="Nhập email người dùng" value="<?= $data['dataOneUser']->getEmail() ?>">
                        </div>
                        <div class="mb-3">
                            <label for="salePrice" class="form-label">Số điện thoại</label>
                            <input type="number" class="form-control" id="salePrice" name="userPhone" placeholder="Nhập giá sale" value="<?= $data['dataOneUser']->getPhone() ?>">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Trạng thái</label>
                            <select class="form-control w-25" name="userStatus">
                                <option value="1" <?= ($data['dataOneUser']->getStatus() == 1) ? "selected" : "" ?>>Hoạt động</option>
                                <option value="0" <?= ($data['dataOneUser']->getStatus() == 0) ? "selected" : "" ?>>Ngưng hoạt động</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Vài trò</label>
                            <select class="form-control w-25" name="userRole">
                                <option value="ADM" <?= ($data['dataOneUser']->getRoleName() === 'ADM') ? "selected" : "" ?>>Quản trị</option>
                                <option value="USR" <?= ($data['dataOneUser']->getRoleName() !== 'ADM') ? "selected" : "" ?>>Người dùng</option>

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
<script src="../../public/js/category/cate.js"></script>