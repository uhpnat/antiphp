
<?php
$search = $_POST['search'];
$response = array("success" => false, "message" => "");
if ($search != "") {
    $data = $product->getDataSearch($search);
    $response["message"] = $data;
    $response["success"] = true;
    var_dump($response);
}
// header("Content-Type: application/json");
// echo json_encode($response);
