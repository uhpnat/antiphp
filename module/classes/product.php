<?php

use function PHPSTORM_META\type;

$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class product
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    // public function insert_product($data, $files)
    public function insert_product(
        $files,
        $status,
        $categoryId,
        $brandId,
        $productName,
        $productPrice,
        $productQuantity,
        $productDesc,
        $productDesc1,
        $productDesc2,
        $productDesc3
    ) {
        // image
        $productImage = '';
        if ($_FILES['image']['name'] == null || $_FILES['image1']['name'] == null || $_FILES['image2']['name'] == null || $_FILES['image3']['name'] == null || $_FILES['image4']['name'] == null) {
            $alert = "<span> Ảnh ko được phép rỗng</span>";
            return $alert;
        }
        if ($productDesc3 == "" || $productDesc2 == "" || $productDesc1 == "" || $productDesc == "" || $productQuantity == "" || $productPrice == "" || $productName == "" || $brandId == "" || $categoryId == "" || $status == "") {
            $alert = "<span>Các Trường không được phép rỗng</span>";
            return $alert;
        } else {
            for ($i = 0; $i < 5; $i++) {
                if ($i == 0) {
                    $i = '';
                }
                $permited = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image' . $i]['name'];
                $file_size = $_FILES['image' . $i]['size'];
                $file_temp = $_FILES['image' . $i]['tmp_name'];
                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10) . $i . '.' . $file_ext;
                $uploaded_image = "./assets/media/imageproduct/" . $unique_image;
                move_uploaded_file($file_temp, $uploaded_image);
                $productImage =   $unique_image;
                if ($i == null) {
                    $i = 0;
                }
            }
            $query = "INSERT INTO tbl_products(productDesc3,productDesc2,productDesc1,productDesc,productQuantity,productPrice,brandId,catId,productType,productImage,productName) VALUE('$productDesc3','$productDesc2','$productDesc1','$productDesc','$productQuantity','$productPrice','$brandId','$categoryId','$status','$productImage','$productName')";
            $result = $this->db->insert($query);
            if ($result) {
                $alert = '
                <div class="alert alert-success" role="alert">
                Cập nhật thành công <a href="./products.php" class="alert-link">Quay lại danh sách</a>
                </div>
                ';
                return $alert;
            } else {
                $alert = '
                <div class="alert alert-danger" role="alert">
                Cập nhật thất bại 
                </div>
                ';
                return $alert;
            }
        }
    }
    public function update_product(
        $productId,
        $status,
        $categoryId,
        $brandId,
        $productName,
        $productPrice,
        $productQuantity,
        $productDesc,
        $productDesc1,
        $productDesc2,
        $productDesc3
    ) {
        if ($productDesc3 == "" || $productDesc2 == "" || $productDesc1 == "" || $productDesc == "" || $productQuantity == "" || $productPrice == "" || $productName == "" || $brandId == "" || $categoryId == "" || $status == "") {
            $alert = "<span>Các Trường không được phép rỗng</span>";
            return $alert;
        } else {

            $query = "UPDATE tbl_products SET productDesc3='$productDesc3', productDesc2='$productDesc2', productDesc1='$productDesc1', productDesc='$productDesc', productQuantity='$productQuantity', productPrice='$productPrice', brandId='$brandId', catId='$categoryId', productType='$status',productName='$productName' WHERE productId='$productId'";
            $result = $this->db->update($query);
            if ($result) {
                $alert = '
                <div class="alert alert-success" role="alert">
                Cập nhật thành công <a href="./products.php" class="alert-link">Quay lại danh sách</a>
                </div>
                ';
                return $alert;
            } else {
                $alert = '
                <div class="alert alert-danger" role="alert">
                Cập nhật thất bại 
                </div>
                ';
                return $alert;
            }
        }
    }
    public function show_product()
    {
        $query = "SELECT * FROM tbl_products ORDER BY productId desc ";
        $result = $this->db->select($query);
        return $result;
    }
    public function getNameBrandByIdProduct($id)
    {
        $query = "SELECT * FROM tbl_brand WHERE brandId = $id ";
        $result = $this->db->select($query);
        return $result;

    }
    public function get_product_by_id($productId)
    {
        $query = "SELECT * FROM tbl_products WHERE productId = $productId";
        $result = $this->db->select($query);
        return $result;
    }
    public function delete_product($id)
    {
        $query = "DELETE FROM tbl_products WHERE productId = '$id' ";
        $result = $this->db->delete($query);
        // header("Location:categories.php");   
    }
}





?>