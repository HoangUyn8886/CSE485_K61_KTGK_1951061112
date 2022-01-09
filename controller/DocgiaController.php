<?php

require_once 'model/DocgiaModel.php';
class DocgiaController{
    function index(){
        $dgModal = new DocgiaModal();
        $docgia= $dgModal->getAllDocgia();
        require_once 'view/Docgia/index.php';
    }
    
    function add(){
        $error = '';
        if(isset($_POST['submit'])){
            $madg = $_POST['madg'];
            $hovaten = $_POST['hovaten'];
            //$bd_sex = $_POST['bd_sex'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }else{
                $gioitinh = $_POST['gioitinh'];
                $dgModal = new DocgiaModal();
                $dgArr = [
                    'madg' =>$madg,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi
                ];
                $isAdd = $dgModal->insert($dgArr);
                if ($isAdd) {
                    $TT=  "Thêm mới thành công";
                }
                else {
                    $TT= "Thêm mới thất bại";
                }
                header("Location: index.php?controller=docgia&action=index&tt=$TT");
                exit();
            }

        }
        require_once 'view/Docgia/add.php';
    }
    function edit(){
        if (!isset($_GET['dgid'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=docgia&action=index");
            return;
        }
        if (!is_numeric($_GET['dgid'])) {
            $_SESSION['error'] = "Id phải là số";
            header("Location: index.php?controller=docgia&action=index");
            return;
        }
        $id = $_GET['dgid'];
        $dgModal = new DocgiaModal();
        $DG = $dgModal->getDocgiaById($id);
        $error = '';
        if (isset($_POST['submit'])) {
            
            $hovaten = $_POST['hovaten'];
            
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];
            if(empty($hovaten) || empty($_POST['gioitinh'])|| empty($namsinh) || empty($nghenghiep) || empty($ngaycapthe) || empty($ngayhethan) || empty($diachi)){
                $error = 'Thông tin chưa đầy đủ!';
            }
            else {
                
                //xử lý update dữ liệu vào hệ thống
                $gioitinh = $_POST['gioitinh'];
                $dgArr = [
                    'madg' =>$madg,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi,
                ];
                $isAdd = $dgModal->update($dgArr);

                if ($isAdd) {
                    $TT= "Sửa thành công";
                }
                else {
                    $TT = "Sửa thất bại";
                }
                header("Location: index.php?controller=docgia&action=index&tt=$TT");
                exit();
            }
        }
        require_once 'view/Docgia/edit.php';
    }
    function delete(){
        $id = $_GET['dgid'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=docgia&action=index");
            exit();
        }
        $dgModal = new DocgiaModal();
        $isDelete = $dgModal->delete($id);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $TT=  "Xóa bản ghi thành công";
        }
        else {
            //báo lỗi
            $TT = "Xóa bản ghi thất bại";
        }
        header("Location: index.php?controller=docgia&action=index&tt=$TT");
        exit();
    }
}

?>