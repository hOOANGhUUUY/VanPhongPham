<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sản phẩm</h1>
    <a href="san-pham/them-moi" class="btn btn-primary mb-3">Thêm mới</a>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá gốc</th>
                            <th>Giá khuyến mãi</th>
                            <th>Đã bán</th>
                            <th>Ngày tạo</th>
                            <th>Trang thái</th>
                            <th>Hành động</th>
                            

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                            <th>Salary</th>

                            <th>Salary</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        // print_r($data['dataProduct']);
                        foreach ($data['dataProduct'] as $product) {
                            // extract($product);
                        ?>
                        <tr>
                            <td><?=$product->getName()?></td>
                            <td><img style="width:70px;" src="../public/images/<?=$product->getImage()?>" alt=""></td>
                            <td><?=$product->getPrice()?></td>
                            <td><?=$product->getPriceSale()?></td>
                            <td><?=$product->getSoldCount()?></td>
                            <td><?=$product->getCreatedAt()?></td>


                            <td><?=$product->getStatus()?></td>
                            <td>
                                <a href="san-pham/sua-san-pham/<?=$product->getId()?>">Sửa</a> |
                                <a href="san-pham/xoa-san-pham/<?=$product->getId()?>">Xóa</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>