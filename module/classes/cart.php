<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class cart
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    public function buy_product($productId, $customerId, $quantity, $code)
    {
        $query = "INSERT INTO tbl_cart(productId,customerId,quantity,code) VALUE('$productId','$customerId','$quantity','$code')";
        $result = $this->db->insert($query);
    }
    public function order_product(
        $code,
        $customerId,
        $email,
        $ten,
        $diachi,
        $sdt,
        $thongtinthem
    ) {
        $query = "INSERT INTO tbl_order(code,customerId,email,name,address,phone,thongtinthem,status) VALUE('$code','$customerId','$email','$ten','$diachi','$sdt','$thongtinthem','0')";
        $result = $this->db->insert($query);
    }
    public function show_box_order($sId)
    {
        $query = "SELECT *
            FROM tbl_order
            WHERE customerId = '$sId'";
        $result = $this->db->select($query);
        return $result;
    }
    public function show_box_buy($sId)
    {
        $query = "SELECT *
            FROM tbl_cart
            WHERE code = '$sId'";
        $result = $this->db->select($query);
        return $result;
    }
}





?>