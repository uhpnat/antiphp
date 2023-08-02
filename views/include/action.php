
<?php  

if(isset($_POST["status_id"])){
     if($_POST["action"] == "updateStatus")  
      {     
        $status_id = $_POST["status_id"] ;
        $status_value = $_POST["status_value"];
        if($status_value == "Đã nhận"){
          $status_value = 1;
        }else{
          $status_value = 0;
        }
        $order->update_status_id($status_value, $status_id);
      }
      if($_POST["action"] == "deleteOrder")  
      {     
          $status_id = $_POST["status_id"] ;
          $status_value = $_POST["status_value"];
          if($status_value == "Hủy"){
            $status_value = 2;
          }elseif($status_value == "Xóa"){
               $status_value = 3;
          }else{
            $status_value = 0;
          }
          $order->update_status_id($status_value, $status_id);
      } 
      if($_POST["action"] == "cancelOrder")  
      {     
          $status_id = $_POST["status_id"] ;
          $status_value = $_POST["status_value"];
          if($status_value == "Hủy"){
            $status_value = 2;
          }elseif($status_value == "Xóa"){
               $status_value = 3;
          }else{
            $status_value = 0;
          }
          $order->update_status_id($status_value, $status_id);
      }   
}
 if(isset($_POST["product_id"]))  
 {  
      if($_POST["action"] == "add")  
      {     
        $product_id = $_POST["product_id"] ;
        $product_name = $_POST["product_name"];
        $product_price = $_POST["product_price"] ; 
        $product_quantity = $_POST["product_quantity"];
        $product_discount = $_POST["product_discount"] ;
        if($product_discount==0 || ""){
            $price = $product_price;
        }else{
             $discount = $product_discount;
             $price = $product_price*((100 - $discount)/100);
        }
        $product_image = $_POST["product_image"];
           if(isset($_SESSION["cart"][$product_id]))  
           {  
            $_SESSION['cart'][$product_id]['quantity']++;
               
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
          $_SESSION["cart"][$id]['quantity']++;
          
      }   
 }  
 
 ?>

 