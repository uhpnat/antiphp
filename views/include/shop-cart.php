<main class="main">
    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="index.html">Home</a></li>
                    <li><a class="font-xs color-gray-500" href="shop-grid.html">Shop</a></li>
                    <li><a class="font-xs color-gray-500" href="shop-cart.html">Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="section-box shop-template">
        <div class="container">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="box-carts">
                            <div class="head-wishlist">
                                <div class="item-wishlist">
                                    <!-- <div class="wishlist-cb">
                                    <input class="cb-layout cb-all" type="checkbox">
                                </div> -->
                                    <div class="wishlist-product"><span class="font-md-bold color-brand-3">Sản phẩm</span></div>
                                    <div class="wishlist-price"><span class="font-md-bold color-brand-3">Giá</span></div>
                                    <div class="wishlist-status"><span class="font-md-bold color-brand-3">Số lượng</span></div>
                                    <div class="wishlist-action"><span class="font-md-bold color-brand-3">Thành tiền</span></div>
                                    <div class="wishlist-remove"><span class="font-md-bold color-brand-3">Xóa</span></div>
                                </div>
                            </div>
                            <div class="content-wishlist mb-20">

                                <?php
                                if (isset($_GET['increase'])) {
                                    $index = $_GET['increase'];
                                    if ($_SESSION['cart'][$index]['quantity'] > 1) {
                                        $_SESSION['cart'][$index]['quantity'] -= 1;
                                    }
                                    header("Location: ?page=shop-cart");
                                }
                                if (isset($_GET['decrease'])) {
                                    $index = $_GET['decrease'];
                                    $_SESSION['cart'][$index]['quantity'] += 1;
                                    header("Location: ?page=shop-cart");
                                }
                                if (isset($_GET['delete'])) {

                                    $index = $_GET['delete'];
                                    unset($_SESSION['cart'][$index]);
                                    header("Location: ?page=shop-cart");
                                }
                                if (isset($_SESSION['cart'])) {
                                    $i = 1;
                                    $tongTien = 0;
                                    foreach ($_SESSION['cart'] as $cart) {
                                        $tongGia = $cart['price'] * $cart['quantity'];
                                        $tongTien += $tongGia;
                                ?>
                                        <div class="item-wishlist">
                                            <!-- <div class="wishlist-cb">
                                    <input class="cb-layout cb-select" type="checkbox">
                                </div> -->
                                            <div class="wishlist-product">
                                                <div class="product-wishlist">
                                                    <div class="product-image"><a href="shop-single-product.html"><img src="./admin/assets/media/imageproduct/<?php echo $cart['image']; ?>" alt="Ecom"></a></div>
                                                    <div class="product-info"><a href="shop-single-product.html">
                                                            <h6 class="color-brand-3"><?php echo $cart['name']; ?></h6>
                                                        </a>
                                                        <!-- <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-price">
                                                <h4 class="color-brand-3"><?php echo number_format($cart['price']). " đ"; ?></h4>
                                            </div>
                                            <div class="wishlist-status">
                                                <div class="box-quantity">
                                                    <div class="input-quantity">
                                                        <input class="font-xl color-brand-3" type="text" value="<?php echo $cart['quantity']; ?>"><a href="?page=shop-cart&increase=<?= $cart['id'] ?>" class="minus-cart"></a><a href="?page=shop-cart&decrease=<?= $cart['id'] ?>" class="plus-cart"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wishlist-action">
                                                <h4 class="color-brand-3"><?php if (isset($tongGia)) {
                                                                                echo number_format($tongGia).' đ' ;
                                                                            } ?></h4>
                                            </div>
                                            <div class="wishlist-remove"><a class="btn btn-delete" href="?page=shop-cart&delete=<?= $cart['id'] ?>"></a></div>
                                        </div>
                                <?php }
                                } ?>
                            </div>
                            <div class="row mb-40">
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6"><a class="btn btn-buy w-auto arrow-back mb-10" href="?page=home">Tiếp tục mua hàng</a></div>
                                <div class="col-lg-6 col-md-6 col-sm-6-col-6 text-md-end"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="summary-cart">
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Thành tiền</span></div>
                                    <div class="col-6 text-end">
                                        <h4><?php if (isset($tongTien)) {
                                                echo number_format($tongTien).' đ';
                                            } ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Phí giao hàng</span></div>
                                    <div class="col-6 text-end">
                                        <h4> Miễn phí</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="border-bottom mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Khu vực</span></div>
                                    <div class="col-6 text-end">
                                        <h6>Hồ Chí Minh</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-10">
                                <div class="row">
                                    <div class="col-6"><span class="font-md-bold color-gray-500">Tổng</span></div>
                                    <div class="col-6 text-end">
                                        <h4> <?php if (isset($tongTien)) {
                                                    echo number_format($tongTien).' đ';
                                                } ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="box-button"><a class="btn btn-buy" href="?page=shop-checkout">Tiến hành kiểm tra</a></div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>


</main>