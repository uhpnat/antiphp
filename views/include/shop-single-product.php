<?php

$singleProduct = $product->get_product_by_id($id);
$upview = $product->upview($id);


if (isset($_POST['addToCart']) && ($_POST['addToCart'])) {

    $image = $_POST['image'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
    $productPrice = $_POST['price'];
    $productQuantity = $_POST['quantityTotal'];
    $price=0;
    if ($discount == "" || $discount == 0) {
        $price = $productPrice;
    } else {
        $price = $productPrice * ((100 - $discount) / 100);
    } 
    if($quantity <= $productQuantity){
        if (isset($_SESSION['cart'][$id])) { 
            if($_SESSION['cart'][$id]['quantity'] + $quantity <= $productQuantity){
                $_SESSION['cart'][$id]['quantity']+=$quantity;
            echo '<script type="text/javascript">toastr.success("Đã thêm vào giỏ hàng")</script>';
            }else{
                echo '<script type="text/javascript">toastr.warning("Sản phẩm không đủ số lượng ")</script>';
                
            }
            
        } else {
            $item = [
                'id' => $id,
                'quantity' => $quantity,
                'price' => $price,
                'name' => $name,
                'image' => $image
            ];
            $_SESSION['cart'][$id] = $item;
            echo '<script type="text/javascript">toastr.success("Đã thêm vào giỏ hàng")</script>';
        }
    }else{
        echo '<script type="text/javascript">toastr.warning("Sản phẩm không đủ số lượng ")</script>';

    }
    
}

foreach ($singleProduct as $item) {
?>
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li>
                            <a class="font-xs color-gray-1000" href="?page=home">Home</a>
                        </li>
                        <li>
                            <a class="font-xs color-gray-500" href="">Chi tiết sản phẩm</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <form action="" method="POST">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="gallery-image">
                                <div class="galleries">
                                    <div class="detail-gallery">
                                        <label class="label"><?php echo $product->phantramgiamgia($item['productPrice'], $item['discount']) ?>%</label>
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], ''); ?>" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '1'); ?>" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '2'); ?>" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '3'); ?>" alt="product image" />
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '4'); ?>" alt="product image" />
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="slider-nav-thumbnails">
                                        <div>
                                            <div class="item-thumb">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], ''); ?>" alt="product image" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-thumb">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '1'); ?>" alt="product image" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-thumb">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '2'); ?>" alt="product image" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-thumb">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '3'); ?>" alt="product image" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="item-thumb">
                                                <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '4'); ?>" alt="product image" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <h3 class="color-brand-3 mb-25">
                                <?php echo $item['productName'] ?>
                            </h3>
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile">

                                    <div class="rating mt-5">
                                        <span class="font-xs color-gray-500 font-medium">
                                            (65 reviews)</span>
                                    </div>
                                </div>


                            </div>
                            <div class="border-bottom pt-10 mb-20"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="box-product-price">
                                        <h3 class="color-brand-3 price-main d-inline-block mr-10">
                                            <?php if ($item['discount'] == 0) {
                                                echo number_format($item['productPrice']) . ' đ';
                                            } else {
                                                echo $price = number_format($item['productPrice'] * ((100 - $item['discount']) / 100));
                                            } ?>
                                        </h3>
                                        <span class="color-gray-500 price-line font-xl line-througt">
                                            <?php if ($item['discount'] == 0) {
                                            } else {
                                                echo number_format($item['productPrice']) . ' đ';
                                            } ?>
                                        </span>
                                    </div>
                                    <div class="box-progress-product mt-15 mb-20">
                                        <div class="progress mb-5">
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="font-xs color-gray-500">Sản phẩm đã bán:
                                            <?php echo $item['productSold']; ?>/<?php echo $item['productQuantity']; ?></span>
                                    </div>
                                    <div class="product-description color-gray-900">
                                        <ul class="list-dot">
                                            <li><?php echo $item['productDesc1'] ?></li>
                                            <li><?php echo $item['productDesc2'] ?></li>
                                            <li><?php echo $item['productDesc3'] ?></li>

                                        </ul>
                                    </div>
                                    <div class="border-bottom mt-20 mb-20"></div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="box-border-product">
                                        <div class="buy-product mt-10 d-flex">
                                            <div class="font-sm text-quantity">Số lượng</div>
                                            <div class="box-quantity">
                                                <div class="input-quantity">
                                                    <input class="font-xl color-brand-3" name="quantity" type="text" value="1"/>
                                                    <span class="minus-cart"></span><span class="plus-cart"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="image" value="<?php echo $item['productImage'] ?>">
                                        <input type="hidden" name="quantityTotal" value="<?php echo ($item['productQuantity']- $item['productSold']) ?>">
                                        <input type="hidden" name="discount" value="<?php echo $item['discount'] ?>">
                                        <input type="hidden" name="id" value="<?php echo $item['productId'] ?>">
                                        <input type="hidden" name="name" value="<?php echo $item['productName'] ?>">
                                        <input type="hidden" name="price" value="<?php echo $item['productPrice'] ?>">
                                        <div class="button-buy mt-15">
                                            <input name="addToCart" type="submit" class="btn btn-cart mb-15" value="Thêm vào giỏ hàng">
                                            <!-- <a class="btn btn-buy" href="?page=shop-checkout">Mua Ngay</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>

            </form>
        </section>
        <section class="section-box shop-template">

            <div class="container">
                <div class="pt-30 mb-10">
                    <ul class="nav nav-tabs nav-tabs-product" role="tablist">
                        <li>
                            <a class="active" href="#tab-description" data-bs-toggle="tab" role="tab" aria-controls="tab-description" aria-selected="true">Description</a>
                        </li>
                        <li>
                            <a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews" aria-selected="true">Reviews (2)</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-description" role="tabpanel" aria-labelledby="tab-description">
                            <div class="display-text-short">
                                <p>
                                    <?php
                                    echo $item['productDesc'];
                                    ?>
                                </p>

                            </div>
                            <div class="mt-20 text-center">
                                <a class="btn btn-border font-sm-bold pl-80 pr-80 btn-expand-more">More Details</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-30 title-question">
                                            Customer questions &amp; answers
                                        </h4>
                                        <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="assets/imgs/page/product/author-2.png" alt="Ecom" /><a class="font-heading text-brand" href="#">Sienna</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span>
                                                            </div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Delectus, suscipit
                                                            exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi
                                                            dignissimos sequi repudiandae minus ab deleniti
                                                            totam officia id incidunt?<a class="reply" href="#">
                                                                Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-comment justify-content-between d-flex mb-30 ml-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="assets/imgs/page/product/author-3.png" alt="Ecom" /><a class="font-heading text-brand" href="#">Brenna</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span>
                                                            </div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Delectus, suscipit
                                                            exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi
                                                            dignissimos sequi repudiandae minus ab deleniti
                                                            totam officia id incidunt?<a class="reply" href="#">
                                                                Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-comment justify-content-between d-flex hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center">
                                                        <img src="assets/imgs/page/product/author-4.png" alt="Ecom" /><a class="font-heading text-brand" href="#">Gemma</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center">
                                                                <span class="font-xs color-gray-700">December 4, 2022 at
                                                                    3:12 pm</span>
                                                            </div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur
                                                            adipisicing elit. Delectus, suscipit
                                                            exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi
                                                            dignissimos sequi repudiandae minus ab deleniti
                                                            totam officia id incidunt?<a class="reply" href="#">
                                                                Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="mb-30 title-question">Customer reviews</h4>
                                        <div class="d-flex mb-30">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress">
                                            <span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                50%
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                25%
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                45%
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                                65%
                                            </div>
                                        </div>
                                        <div class="progress mb-30">
                                            <span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                85%
                                            </div>
                                        </div>
                                        <a class="font-xs text-muted" href="#">How are ratings calculated?</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="border-bottom pt-20 mb-40"></div>

                    </div>
                </div>
            </div>
        </section>


    </main>
<?php }

?>