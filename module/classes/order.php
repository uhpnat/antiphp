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
    public function get_by_code($code)
    {
        $query = "SELECT *
            FROM tbl_order
            WHERE code = '$code'";
        $result = $this->db->select($query);
        return $result;
    }

    public function update_order_id($code, $address, $email, $phone, $name, $status, $id)
    {
        $query = "UPDATE tbl_order SET code='$code', address='$address',email='$email', phone='$phone',name='$name',status='$status' WHERE orderId='$id'";
        $this->db->update($query);
    }
    public function update_status_id($status, $id)
    {
        $query = "UPDATE tbl_order SET status='$status' WHERE code='$id'";
        $this->db->update($query);
    }
    public function delete_order_id($id)
    {
        $query = "DELETE from tbl_order WHERE code='$id'";
        $this->db->update($query);
    }

    public function order_deleted($info)
    {
        $query = "INSERT INTO tbl_order_deleted (info) VALUE('$info')";
        $this->db->insert($query);
    }
    public function get_all_order_deleted()
    {
        $query = "SELECT * FROM tbl_order_deleted";
        $result = $this->db->select($query);
        return $result;
    }
    public function order_admin()
    {
        $query = "SELECT *
            FROM tbl_cart";
        $result = $this->db->select($query);
        return $result;
    }
    public function xuly($xuly)
    {
        $query = "UPDATE tbl_order
        SET status = status + 1
        WHERE orderId = $xuly;";
        $this->db->update($query);
        echo '<script type="text/javascript">toastr.success("Cập Nhật Thành Công")</script>';
    }
    public function deleteOrder($id)
    {
        $query = "DELETE FROM tbl_order WHERE orderId = $id";
        $this->db->delete($query);
        echo '<script type="text/javascript">toastr.danger("Xóa Thành Công")</script>';
    }
}


?>