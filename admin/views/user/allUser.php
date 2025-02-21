<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thành viên</h1>
    <a href="san-pham/them-moi" class="btn btn-primary mb-3">Thêm mới thành viên</a>
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

                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>

                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Tên</th>
                            <th>Hình ảnh</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Vai trò</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        // print_r($data['dataUser']);
                        foreach ($data['dataUser'] as $user) {
                            // extract($user);
                        ?>
                            <tr>
                                <td><?= $user->getName() ?></td>
                                <td><img style="width:100px;" src="../public/images/<?= $user->getImage() ?>" alt=""></td>
                                <td><?= $user->getEmail() ?></td>
                                <td><?= $user->getPhone() ?></td>
                                <td><?= $user->getRole() ?></td>
                                <td><?= $user->getStatus() ?></td>

                                <td>
                                    <a href="thanh-vien/sua-thanh-vien/<?= $user->getId() ?>">Sửa</a> |
                                    <a href="thanh-vien/xoa-thanh-vien/<?= $user->getId() ?>">Xóa</a>
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