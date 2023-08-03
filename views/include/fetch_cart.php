<?php

session_start();

$total_price = 0;
$total_item = 0;

$output = '';
if(!empty($_SESSION["cart"]))
{
	foreach($_SESSION["cart"] as $keys => $values)
	{
		$output .= '
        <div class="item-cart mb-20">
                                            <div class="cart-image">
                                                <img src=".././antiphp/admin/assets/media/imageproduct/'.$values["image"].'" alt="Ecom" />
                                            </div>
                                            <div class="cart-info">
                                                <a class="font-sm-bold color-brand-3" href="?page=shop-single-product&productId='.$values["id"].'">'.$values["name"].'</a>
                                                <p>
                                                    <span class="color-brand-2 font-sm-bold">'.$values["quantity"].' x '.number_format($values["price"]).' </span>
                                                </p>
                                            </div>

                                        </div>

                                        <div class="border-bottom pt-0 mb-15"></div>
		
		';
		$total_price = ($values["quantity"] * $values["price"]);
		$total_item = $total_item + 1;
	}
	$output .= '
    <div class="cart-total">
                                    <div class="row">
                                        <div class="col-6 text-start">
                                            <span class="font-md-bold color-brand-3">Tổng giá</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="font-md-bold color-brand-1 total"></span>
                                        </div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start">
                                            <a class="btn btn-cart w-auto" href="?page=shop-cart">Xem giỏ</a>
                                        </div>
                                        <div class="col-6">
                                            <a class="btn btn-buy w-auto" href="?page=shop-checkout">Mua hàng</a>
                                        </div>
                                    </div>
                                </div>
	
	';
}
else
{
	$output .= '
    <tr>
    	<td colspan="5" align="center">
    		Your Cart is Empty!
    	</td>
    </tr>
    ';
}

$data = array(
	'cart_details'		=>	$output,
	'total_price'		=>	$total_price,
	'total_item'		=>	$total_item
);	
echo json_encode($data);



?>


