<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class order
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    
    public function get_all_order()
    {
        $query = "SELECT * FROM tbl_order";
        $result = $this->db->select($query);
        return $result;
    }

    public function order_product(
        $code,
        $customerId,
        $email,
        $name,
        $address,
        $phone,
        $info,
        $product,
        $total
    ) {
        $query = "INSERT INTO tbl_order(code,customerId,email,name,address,phone,info,status,product,totalPrice) VALUE('$code','$customerId','$email','$name','$address','$phone','$info','0','$product',$total)";
        $result = $this->db->insert($query);
    }
    public function get_by_id($id)
    {
        $query = "SELECT *
            FROM tbl_order
            WHERE orderId = '$id'";
        $result = $this->db->select($query);
        return $result;
    }
    public function update_order_id($code, $address, $email, $phone, $name, $status, $id)
    {
        $query = "UPDATE tbl_order SET code='$code', address='$address',email='$email', phone='$phone',name='$name',status='$status' WHERE orderId='$id'";
        $this->db->update($query);
    }
}


?>