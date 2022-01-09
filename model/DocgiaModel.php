<?php
require_once 'config/db.php';
class DocgiaModal{
    private $madg;
    private $hovaten;
    private $gioitinh;
    private $namsinh;
    private $nghenghiep;
    private $ngaycapthe;
    private $ngayhethan;
    private $diachi;
    
    public function getAllDocgia(){
        $conn = $this->connectDb();
        $sql = "SELECT * FROM docgia";
        $result = mysqli_query($conn, $sql);
        $arr_docgia = [];
        if(mysqli_num_rows($result)>0){
            $arr_docgia = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return $arr_docgia;
    }
    public function insert($param = []) {
        $connection = $this->connectDb();
        //tạo và thực thi truy vấn
        $queryInsert = "INSERT INTO docgia (madg, hovaten, gioitinh, namsinh, nghenghiep, ngaycapthe, ngayhethan, diachi)
        VALUES ('{$param['madg']}','{$param['hovaten']}', '{$param['gioitinh']}', '{$param['namsinh']}', '{$param['nghenghiep']}', '{$param['ngaycapthe']}','{$param['ngayhethan']}','{$param['diachi']}'";
        $isInsert = mysqli_query($connection, $queryInsert);
        $this->closeDb($connection);

        return $isInsert;
    }
    public function connectDb() {
        $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }
    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
    public function getDocgiaById($madg= null) {
        $connection = $this->connectDb();
        $querySelect = "SELECT * FROM docgia WHERE madg={$madg}";
        $results = mysqli_query($connection, $querySelect);
        $DocgiaArr = [];
        if (mysqli_num_rows($results) > 0) {
            $docgia = mysqli_fetch_all($results, MYSQLI_ASSOC);
            $DocgiaArr = $docgia[0];
        }
        $this->closeDb($connection);

        return $DocgiaArr;
    }
    public function update($docg = []) {
        $connection = $this->connectDb();
        $queryUpdate = "UPDATE docgia
        SET hovaten = '{$docg['hovaten']}', gioitinh = '{$docg['gioitinh']}', namsinh = '{$docg['namsinh']}', nghenghiep = '{$docg['nghenghiep']}', ngaycapthe = '{$docg['ngaycapthe']}',ngayhethan= '{$docg['ngayhethan']}',diachi = '{$docg['diachi']}'  WHERE madg = {$docg['madg']}";
        $isUpdate = mysqli_query($connection, $queryUpdate);
        $this->closeDb($connection);

        return $isUpdate;
    }
    public function delete($madg = null) {
        $connection = $this->connectDb();

        $queryDelete = "DELETE FROM docgia WHERE madg = {$madg}";
        $isDelete = mysqli_query($connection, $queryDelete);

        $this->closeDb($connection);

        return $isDelete;
    }
}

?>