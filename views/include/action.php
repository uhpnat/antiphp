
<?php  
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
            $price = $product_discount;
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
           foreach($_SESSION["cart"] as $keys => $values)  
           {  
                if($values["product_id"] == $_POST["product_id"])  
                {  
                     unset($_SESSION["cart"][$keys]);  
                     $message = '<label class="text-success">Product Removed</label>';  
                }  
           }  
      }  
      if($_POST["action"] == "quantity_change")  
      {  
           foreach($_SESSION["cart"] as $keys => $values)  
           {  
                if($_SESSION["cart"][$keys]['product_id'] == $_POST["product_id"])  
                {  
                     $_SESSION["cart"][$keys]['product_quantity'] = $_POST["quantity"];  
                }  
           }  
      }   
 }  
 
 ?>

 