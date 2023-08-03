
<?php


if (isset($_POST["status_id"])) {
     if ($_POST["action"] == "updateStatus") {
          $status_id = $_POST["status_id"];
          $order->update_status_id(4, $status_id);
     }
     if ($_POST["action"] == "deleteOrder") {
          $status_id = $_POST["status_id"];
          $order->update_status_id(5, $status_id);
     }
     if ($_POST["action"] == "cancelOrder") {
          $status_id = $_POST["status_id"];
          $order->update_status_id(3, $status_id);
     }
}
 if(isset($_POST["product_id"]))  
 {  
      if($_POST["action"] == "add")  
      {   
        $product_quantityTotal = $_POST['product_quantityTotal'];
        $product_id = $_POST["product_id"] ;
        $product_name = $_POST["product_name"];
        $product_price = $_POST["product_price"] ; 
        $product_quantity = $_POST["product_quantity"];
        $product_discount = $_POST["product_discount"];
        if($product_discount==0 || ""){
            $price = $product_price;
        }else{
             $discount = $product_discount;
             $price = $product_price*((100 - $discount)/100);
        }
        $product_image = $_POST["product_image"];
           if(isset($_SESSION["cart"][$product_id]))  
           {  
               if($_SESSION['cart'][$product_id]['quantity'] + $product_quantity <= $product_quantityTotal){
                    $_SESSION['cart'][$product_id]['quantity']++;
                echo '<script type="text/javascript">toastr.success("Đã thêm vào giỏ hàng")</script>';
                }else{
                    echo '<script type="text/javascript">toastr.warning("Sản phẩm không đủ số lượng ")</script>';
                    
                }
               
           }  
           else  
           {  
                $item_array = array(  
                     'id'               =>     $product_id,  
                     'name'               =>     $product_name,  
                     'price'               =>     $price,  
                     'quantity'          =>     $product_quantity,
                     'image'               =>      $product_image

                );  
                $_SESSION["cart"][$product_id] = $item_array;  
           }  
      }  
      if($_POST["action"] == "remove")  
      {  
          $id =$_POST["product_id"];
          unset($_SESSION["cart"][$id]); 
      }  
      if($_POST["action"] == "minus-cart")  
      {  
          $id =$_POST["product_id"];
          if($_SESSION["cart"][$id]['quantity']>1){
               $_SESSION["cart"][$id]['quantity']--;
          }else{
               unset($_SESSION["cart"][$id]); 
          }
      }   
      if($_POST["action"] == "plus-cart")  
      {  
          $id =$_POST["product_id"];
          $productid = $product->get_product_by_id($id);
          foreach($productid as $item){
               $product_quantityTotal = $item['productQuantity'] - $item['productSold'];
          }
          $updateQuantity = $_POST['updateQuantity'];
          if($updateQuantity < $product_quantityTotal){
               $_SESSION["cart"][$id]['quantity']++;
          }else{
               echo 'Error';

          }
          
      }   
 }  
 
 ?>

 