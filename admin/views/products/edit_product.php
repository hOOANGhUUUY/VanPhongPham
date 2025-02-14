<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa sản phẩm</h1>
    <div class="row" >
        <form action="" method="POST" enctype="multipart/form-data" style="display: flex;">
            <!-- Sidebar -->
            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Danh mục sản phẩm</a>

                    <!-- Danh mục 1 có submenu -->
                    <a href="#submenu1" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Danh mục 1 ⬇️</a>
                    <div class="collapse ps-3" id="submenu1">
                        <a href="#submenu1-1" class="list-group-item list-group-item-action" data-bs-toggle="collapse">Danh mục con 1.1 ⬇️</a>
                        <div class="collapse ps-4" id="submenu1-1">
                            <label class="list-group-item">
                                <input type="radio" name="category" value="1.1.1"> Danh mục con 1.1.1
                            </label>
                            <label class="list-group-item">
                                <input type="radio" name="category" value="1.1.2"> Danh mục con 1.1.2
                            </label>
                        </div>
                    </div>

                    <!-- hình ảnh  -->
                    <a href="#" class="list-group-item list-group-item-action active">Ảnh đại diện</a>
                    <div class="mb-3">
                        <input type="file" class="form-control" id="productName" name="productName" placeholder="Nhập tên sản phẩm">
                    </div>
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