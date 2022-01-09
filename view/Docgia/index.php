<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h1>Danh Sách độc giả </h1>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=docgia&action=add"><button class="btn btn-primary">Thêm độc giả mới</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã độc giả</th>
                            <th scope="col">Tên độc giả</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề Nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($docgia as $doc) {
                            $urlEdit =
                            "index.php?controller=docgia&action=edit&dgid=" . $doc['madg'];
                            $urlDelete =
                            "index.php?controller=docgia&action=delete&dgid=" . $doc['madg'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $doc['madg'] ?></th>
                                <td><?php echo $doc['hovaten'] ?></td>
                                <td><?php echo $doc['gioitinh'] ?></td>
                                <td><?php echo $doc['namsinh'] ?></td>
                                <td><?php echo $doc['nghenghiep'] ?></td>
                                <td><?php echo $doc['ngaycapthe'] ?></td>
                                <td><?php echo $doc['ngayhethan'] ?></td>
                                <td><?php echo $doc['diachi'] ?></td>
                                <td><a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a onclick="return confirm('Bạn chắc chắn muốn xóa?')" href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>