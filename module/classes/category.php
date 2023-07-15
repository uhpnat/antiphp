<?php
$filepath = realpath(dirname(__FILE__));
include_once($filepath . '/../lib/database.php');
include_once($filepath . '/../helpers/format.php');
?>
<?php
class category
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
    // Thêm
    // Thêm
    // Thêm
    public function show_category()
    {
        $query = "SELECT * FROM tbl_category ORDER BY categoryId desc ";
        $result = $this->db->select($query);
        return $result;
    }
    // show 1 
    public function show_category_one($id)
    {
        $query = "SELECT * FROM tbl_category WHERE categoryId = $id ";
        $result = $this->db->select($query);
        return $result;
    }
    // Xóa
    public function delete_category($id)
    {
        $query = "DELETE FROM tbl_category WHERE categoryId = '$id' ";
        $result = $this->db->delete($query);
        // header("Location:categories.php");   
    }
    public function insert_category($catName)
    {
        if (empty($catName)) {
            $alert = "<span>Khoogn được bỏ trống catName</span>";
            return $alert;
        } else {
            $query = "INSERT INTO tbl_category(categoryName) VALUE('$catName')";
            $result = $this->db->insert($query);
            if ($result) {
                $alert = '
                <div class="alert alert-success" role="alert">
                Cập nhật thành công <a href="./categories.php" class="alert-link">Quay lại danh sách</a>
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
    public function update_category($catName, $id)
    {
        $catName = $this->fm->validation($catName);

        if (empty($catName)) {
            $alert = "<span>Khoogn được bỏ trống catName</span>";
            return $alert;
        } else {
            $query = "UPDATE tbl_category SET categoryName ='$catName' WHERE categoryId='$id'";
            $result = $this->db->update($query);
            if ($result) {
                $alert = '
                <div class="alert alert-success" role="alert">
                Cập nhật thành công <a href="./categories.php" class="alert-link">Quay lại danh sách</a>
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
}





?>