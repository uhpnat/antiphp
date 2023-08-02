<?php 
session_start();
$total_price = 0;
$total = 0;
$output2 = '';
if(isset($_SESSION["cart"]))
{
	foreach($_SESSION["cart"] as $values)
	{   
        $total_price =  ($values["quantity"] * $values["price"]);
		$total += $total_price;
		$output2 .= '
        <div class="item-wishlist">
                                            <div class="wishlist-product">
                                                <div class="product-wishlist">
                                                    <div class="product-image"><a href="shop-single-product.html"><img src=".././antiphp/admin/assets/media/imageproduct/'.$values["image"].'" alt="Ecom"></a></div>
                                                    <div class="product-info"><a href="shop-single-product.html">
                                                            <h6 class="color-brand-3">'.$values["name"].'</h6>
                                                        </a>
                                                        <!-- <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-price">
                                                <h4 class="color-brand-3">'.number_format($values["price"]).'</h4>
                                            </div>
                                            <div class="wishlist-status">
                                                <div class="box-quantity">
                                                    <div class="input-quantity">
                                                        <input class="font-xl color-brand-3" type="text" value="'.$values["quantity"].'"><span id="'.$values["id"].'" class="minus-cart"></span>
                                                        <span id="'.$values["id"].'" class="plus-cart"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-action">
                                                <h4 class="color-brand-3">'.number_format($total_price).'</h4>
                                            </div>
                                            <div class="wishlist-remove btn btn-delete delete " id="'.$values["id"].'"></div>
                                        </div>';
		
	}
	
}
else
{
	$output2 .= '
    <tr>
    	<td colspan="5" align="center">
    		Giỏ hàng trống!
    	</td>
    </tr>
    ';
}
$data2 = array(
	'cart_details2'		=>	$output2,
	'total_price'		=>	'$' . number_format($total_price, 2),
	'total'		=>	number_format($total)
);	
echo json_encode($data2);
?>