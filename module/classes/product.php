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

        $productDesc3,
        $discount
    ) {
        if ($productDesc3 == "" || $productDesc2 == "" || $productDesc1 == "" || $productDesc == "" || $productQuantity == "" || $productPrice == "" || $productName == "" || $brandId == "" || $categoryId == "" || $status == "") {
            $alert = "<span>Các Trường không được phép rỗng</span>";
            return $alert;
        } else {

            $query = "UPDATE tbl_products SET productDesc3='$productDesc3', productDesc2='$productDesc2', productDesc1='$productDesc1', productDesc='$productDesc', productQuantity='$productQuantity', productPrice='$productPrice', brandId='$brandId', catId='$categoryId', productType='$status',productName='$productName' WHERE productId='$productId'";
            $query = "UPDATE tbl_products SET productDesc3='$productDesc3', productDesc2='$productDesc2', productDesc1='$productDesc1', productDesc='$productDesc', productQuantity='$productQuantity', productPrice='$productPrice', brandId='$brandId', catId='$categoryId', productType='$status',productName='$productName',discount='$discount' WHERE productId='$productId'";
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

    // show_product by view product
    public function showProductByView($table = 'productId', $skip_count = 0, $count = 5)
    {
        $query = "SELECT * FROM tbl_products ORDER BY ";

        if ($table != 'productId') {
            $query .= "$table DESC";
        } else {
            $query .= "productId DESC";
        }

        if ($skip_count > 0) {
            $query .= " LIMIT $skip_count, $count";
        } else {
            $query .= " LIMIT $count";
        }
        $result = $this->db->select($query);
        return $result;
    }
    // format text 
    public function limitText($text, $maxLength)
    {
        if (mb_strlen($text) > $maxLength) {
            $text = mb_substr($text, 0, $maxLength - 3) . '...';
        }
        return $text;
    }
    // tính phần trăm giảm giá
    public function phantramgiamgia($a, $b)
    {
        if ($b === 0) {
            return 0;
        }
        if ($a < $b) {
            return "không hợp lệ";
        }

        $phantramgiamgia = (($a - $b) / $a) * 100;
        return floor($phantramgiamgia);
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
    public function formatImage($inputString, $replacementCharacter)
    {
        if (strlen($inputString) < 11) {
            // Nếu chuỗi ngắn hơn 11 kí tự, không thể thay thế kí tự thứ 11.
            return $inputString;
        }

        // Lấy phần của chuỗi từ vị trí 0 đến vị trí 9 (kí tự thứ 10) và phần từ vị trí 11 trở đi.
        $partBefore = substr($inputString, 0, 10);
        $partAfter = substr($inputString, 11);

        // Kết hợp lại các phần với kí tự mới được thay thế vào vị trí 10.
        $outputString = $partBefore . $replacementCharacter . $partAfter;

        return $outputString;
    }
    //Tăng lượt xem sản phẩm
    public function upview($id)
    {
        $query = "UPDATE tbl_products SET productView = productView + 1
        WHERE productId = '$id'";
        $result = $this->db->update($query);
        // echo "<br>đã đăng lượt view";
    }



    //tim kiem san pham 
    public function getDataSearch($search)
    {
        $query = "SELECT * FROM tbl_products WHERE productName LIKE '%$search%'";
        $data = "";
        $result = $this->db->select($query);
        if ($result == false) {
            echo "<h2>Không có sản phẩm phù hợp</h2>'
            . '<h3>Tất Cả Sản Phẩm </h3> <br> <hr> <br><br>'";

            return 0;
        }
        foreach ($result as $item) {
            $data .=  '
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                    <div class="image-box"><a href="?page=shop-single-product&productId=' . $item['productId'] . '"><img src="./admin/assets/media/imageproduct/' . $item['productImage'] . '" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Apple</a><br><a class="color-brand-3 font-sm-bold" href="">' . $item['productName'] . '</a>
                        <div class="rating"><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom"><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">' . $item['productPrice'] . '</strong><span class="color-gray-500 price-line"></span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="?page=shop-single-product&productId=' . $item['productId'] . '">Mua ngay</a></div>
                        <ul class="list-features">
                            <li>' . $item['productDesc1'] . '</li>
                            <li>' . $item['productDesc2'] . '</li>
                            <li>' . $item['productDesc3'] . '</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            ';
        }
        echo $data . '<h3>Tất Cả Sản Phẩm </h3> <br> <hr> <br><br>';
        return $data;
    }
}





?>