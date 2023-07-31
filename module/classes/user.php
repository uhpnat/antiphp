<?php
// $filepath = realpath(dirname(__FILE__));
// include_once($filepath . '../lib/database.php');
// include_once($filepath . '../helpers/format.php');
// include '../lib/database.php';
?>
<?php
class user
{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        // $this->fm = new Format();
    }

    public function add_user($name, $email, $password, $address, $avatar, $role, $phone)
    {
        $query = "INSERT INTO users (name, email, password, address, avatar, role, phone) VALUES ('$name', '$email', '$password', '$address', '$avatar', '$role', '$phone')";
        $result = $this->db->insert($query);
    }
    public function select_user()
    {
        $query = "SELECT * FROM users ORDER BY id desc ";
        $result = $this->db->select($query);
        return $result;
    }
    public function select_user_id($id)
    {
        $query = "SELECT * FROM users WHERE id = '$id' ";
        $result = $this->db->select($query);
        return $result;
    }
    public function auth_user($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
        $result = $this->db->select($query);
        return $result;
    }

    public function del_user_id($id)
    {
        $query = "DELETE FROM users WHERE id='$id'";
        $this->db->delete($query);
    }
    public function del_all_user()
    {
        $query = "DELETE FROM users";
        $this->db->delete($query);
    }
    public function update_user_id($name, $email, $password, $address, $avatar, $role, $phone, $id)
    {
        $query = "UPDATE users SET name ='$name',email ='$email',password ='$password',address = '$address',avatar= '$avatar',role='$role',phone='$phone'  WHERE id='$id'";
        $result = $this->db->update($query);
    }
    public function update_address($name, $address, $phone, $id)
    {
        $query = "UPDATE users SET name ='$name',address = '$address',phone='$phone'  WHERE id='$id'";
        $result = $this->db->update($query);
        echo ' <script type="text/javascript">toastr.success("Cập nhật thông tin thành công")</script>';
    }

    public function uploadImage()
    {
        $path = "../admin/assets/media/avatars/";
        $target_file = $path . basename($_FILES["avatar"]["name"]);
        $uploadOk = 1;
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                // echo "The file ". basename( $_FILES["avatar"]["tmp_name"]). " has been uploaded.";
            } else {
                // echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    public function checkLogin($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
        $result = $this->db->select($query);
        if ($result === false) {
            echo '<script type="text/javascript">toastr.warning("Mật khẩu không khớp")</script>';
        } else {
            $_SESSION['login'] = 1;
            $_SESSION['role'] = $result[0]['role'];
            $_SESSION['fullname'] =  $result[0]['name'];
            $_SESSION['name'] = $result[0]['id'];
            echo '<script type="text/javascript">toastr.success("Đăng nhập thành công")</script>';
            header("Refresh:1; url=?page=home", true, 303);
        }
        return $result;
    }
}





?>