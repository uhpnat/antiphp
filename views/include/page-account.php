<main class="main">
    <section class="section-box shop-template mt-30">
        <div class="container box-account-template">
            <?php
            if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
                echo '  <h3>Xin Chào ' . $_SESSION['fullname'] . '</h3>';
            } else {
                echo ' <h3  >Bạn Chưa Đăng Nhập : ID của bạn là  ' . $_SESSION['name'] . '</h3>';
            }
            ?>
            <p class="font-md color-gray-500">Từ bảng điều khiển tài khoản của bạn. bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây của mình,

                quản lý địa chỉ giao hàng và thanh toán của bạn, đồng thời chỉnh sửa mật khẩu và chi tiết tài khoản của bạn.</p>
            <div class="box-tabs mb-100">
                <ul class="nav nav-tabs nav-tabs-account" role="tablist">
                    <li><a class="active" href="#tab-notification" data-bs-toggle="tab" role="tab" aria-controls="tab-notification" aria-selected="true">Thông Báo</a></li>
                    <li><a href="#tab-orders" data-bs-toggle="tab" role="tab" aria-controls="tab-orders" aria-selected="true">Orders</a></li>
                    <li><a href="#tab-setting" data-bs-toggle="tab" role="tab" aria-controls="tab-setting" aria-selected="true">Cài Đặt Thông Tin</a></li>
                </ul>
                <div class="border-bottom mt-20 mb-40"></div>
                <div class="tab-content mt-30">
                    <div class="tab-pane fade active show" id="tab-notification" role="tabpanel" aria-labelledby="tab-notification">
                        <div class="list-notifications">
                            <div class="item-notification">
                                <div class="image-notification"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                                <div class="info-notification">
                                    <h5 class="mb-5">COD payment confirmed</h5>
                                    <p class="font-md color-brand-3">Order<span class="font-md-bold"> 220914QR92BXNH</span> has been confirmed. Please check the estimated delivery time in the order details section!</p>
                                </div>
                                <div class="button-notification"><a class="btn btn-buy w-auto">View Details</a></div>
                            </div>
                            <div class="item-notification">
                                <div class="image-notification"><img src="assets/imgs/page/account/img-2.png" alt="Ecom"></div>
                                <div class="info-notification">
                                    <h5 class="mb-5">COD payment confirmed</h5>
                                    <p class="font-md color-brand-3">Order<span class="font-md-bold"> 220914QR92BXNH</span> has been confirmed. Please check the estimated delivery time in the order details section!</p>
                                </div>
                                <div class="button-notification"><a class="btn btn-buy w-auto">View Details</a></div>
                            </div>
                            <div class="item-notification">
                                <div class="image-notification"><img src="assets/imgs/page/account/img-3.png" alt="Ecom"></div>
                                <div class="info-notification">
                                    <h5 class="mb-5">COD payment confirmed</h5>
                                    <p class="font-md color-brand-3">Order<span class="font-md-bold"> 220914QR92BXNH</span> has been confirmed. Please check the estimated delivery time in the order details section!</p>
                                </div>
                                <div class="button-notification"><a class="btn btn-buy w-auto">View Details</a></div>
                            </div>
                            <div class="item-notification">
                                <div class="image-notification"><img src="assets/imgs/page/account/img-4.png" alt="Ecom"></div>
                                <div class="info-notification">
                                    <h5>COD payment confirmed</h5>
                                    <p class="font-md color-brand-3">Order<span class="font-md-bold"> 220914QR92BXNH</span> has been confirmed. Please check the estimated delivery time in the order details section!</p>
                                </div>
                                <div class="button-notification"><a class="btn btn-buy w-auto">View Details</a></div>
                            </div>
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders">
                        <?php
                        $show_order = $ct->show_box_order($sId);
                        if ($show_order != null) {
                            foreach ($show_order as $order) {
                                $product = json_decode($order['product'], true);

                        ?>
                                <div class="box-orders">
                                    <div class="head-orders">
                                        <div class="head-left">
                                            <h5 class="mr-20">Order ID: #<?php echo $order['code'] ?></h5><span class="font-md color-brand-3 mr-20"><?php echo $order['dateOrder'] ?></span>
                                            <?php
                                            if ($order['status'] == 0) {
                                                echo '<span class="label-delivery ">Đang xử lý</span>';
                                            } elseif ($order['status'] == 1) {
                                                echo '<span class="label-delivery label-delivered ">Đã nhận được hàng</span>';
                                            } else {
                                                echo '<span class="label-delivery label-cancel ">Xóa</span>';
                                            }


                                            ?>


                                            <!-- <span class="label-delivery label-delivered  "></span> -->
                                        </div>
                                    </div>
                                    <div class="body-orders">
                                        <div class="list-orders">
                                            <div class="row">

                                                <!-- $show_buy = $ct->show_box_buy($order['code']);
                                             
                                                var_dump($show_buy);
                                                $get_product_by_id = $product->get_product_by_id($item['productId']); -->

                                                <?php foreach ($product['results'] as $value) { ?>
                                                    <div class="col-6">
                                                        <div class="item-orders">
                                                            <div class="quantity-orders"><img style="height: 70px;" src="./admin/assets/media/imageproduct/<?php echo $value['image'] ?>" alt="Ecom"></div>
                                                            <div class="info-orders">
                                                                <h5 style="font-size: 16px;"></h5>
                                                            </div>
                                                            <div class="quantity-orders">
                                                                <h5 style="font-size: 16px;">Số Lượng:<?php echo $value['quantity'] ?></h5>
                                                            </div>
                                                            <div class="price-orders">
                                                                <h3 style="font-size: 20px;"><?php echo number_format($value['price'])  ?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo 'bạn chưa đặt sản phẩm nào';
                        } ?>
                        <!-- <div class="box-orders">
                            <div class="head-orders">
                                <div class="head-left">
                                    <h5 class="mr-20">Order ID: #EWFDSAF1321655</h5><span class="font-md color-brand-3 mr-20">Date: 18 September 2022</span><span class="label-delivery label-delivered">Delivered</span>
                                </div>
                                <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto">View Order</a></div>
                            </div>
                            <div class="body-orders">
                                <div class="list-orders">
                                    <div class="item-orders">
                                        <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                                        <div class="info-orders">
                                            <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                                        </div>
                                        <div class="quantity-orders">
                                            <h5>Quantity: 01</h5>
                                        </div>
                                        <div class="price-orders">
                                            <h3>$2.51</h3>
                                        </div>
                                    </div>
                                    <div class="item-orders">
                                        <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                                        <div class="info-orders">
                                            <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                                        </div>
                                        <div class="quantity-orders">
                                            <h5>Quantity: 01</h5>
                                        </div>
                                        <div class="price-orders">
                                            <h3>$2.51</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-orders">
                            <div class="head-orders">
                                <div class="head-left">
                                    <h5 class="mr-20">Order ID: #EWFDSAF1321655</h5><span class="font-md color-brand-3 mr-20">Date: 18 September 2022</span><span class="label-delivery label-cancel">Cancel</span>
                                </div>
                                <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto">View Order</a></div>
                            </div>
                            <div class="body-orders">
                                <div class="list-orders">
                                    <div class="item-orders">
                                        <div class="image-orders"><img src="assets/imgs/page/product/ss.html" alt="Ecom"></div>
                                        <div class="info-orders">
                                            <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                                        </div>
                                        <div class="quantity-orders">
                                            <h5>Quantity: 01</h5>
                                        </div>
                                        <div class="price-orders">
                                            <h3>$2.51</h3>
                                        </div>
                                    </div>
                                    <div class="item-orders">
                                        <div class="image-orders"><img src="assets/imgs/page/product/ss2.html" alt="Ecom"></div>
                                        <div class="info-orders">
                                            <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                                        </div>
                                        <div class="quantity-orders">
                                            <h5>Quantity: 01</h5>
                                        </div>
                                        <div class="price-orders">
                                            <h3>$2.51</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <nav>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                            </ul>
                        </nav> -->
                    </div>
                    <div class="tab-pane fade" id="tab-setting" role="tabpanel" aria-labelledby="tab-setting">
                        <div class="row">
                            <div class="col-lg-6 mb-20">
                                <form action="" method="post">
                                    <?php
                                    if (isset($_SESSION['login'])) {
                                        if (isset($_POST['saveAccount'])) {
                                            $us->update_address($_POST['fullName'], $_POST['address'], $_POST['phone'], $_SESSION['name']);
                                            echo 'đã chạy';
                                        }
                                    ?>
                                        <div class="row">
                                            <div class="col-lg-12 mb-20">
                                                <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Thông Tin Liên Hệ</h5>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control font-sm" type="text" name="fullName" placeholder="Tên Của Bạn *" value="<?php echo $us->select_user_id($_SESSION['name'])[0]['name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control font-sm" type="text" name="phone" placeholder="Số Điện Thoại *" value="<?php echo $us->select_user_id($_SESSION['name'])[0]['phone'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control font-sm" type="text" name="address" placeholder="Địa Chỉ *" value="<?php echo $us->select_user_id($_SESSION['name'])[0]['address'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" name="saveAccount" class="btn btn-primary">Lưu</button>
                                    <?php
                                    } else {
                                    ?>
                                        <h5>Bạn chưa đăng nhập</h5>
                                    <?php
                                    }
                                    ?>

                                </form>
                            </div>
                            <div class="col-lg-1 mb-20"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-box box-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
                    <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="box-form-newsletter mt-15">
                        <form class="form-newsletter">
                            <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                            <button class="btn btn-brand-2">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content apply-job-form">
                <div class="modal-header">
                    <h5 class="modal-title color-gray-1000 filters-icon">Addvance Fillters</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-30">
                    <div class="row">
                        <div class="col-w-1">
                            <h6 class="color-gray-900 mb-0">Brands</h6>
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox" checked="checked"><span class="text-small">Apple</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Samsung</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Baseus</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Remax</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Handtown</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Elecom</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Razer</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Auto Focus</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Nillkin</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Logitech</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">ChromeBook</span><span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-w-1">
                            <h6 class="color-gray-900 mb-0">Special offers</h6>
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">On sale</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox" checked="checked"><span class="text-small">FREE shipping</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Big deals</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Shop Mall</span><span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                            <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">1 business day</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox" checked="checked"><span class="text-small">1&ndash;3 business days</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">in 1 week</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Shipping now</span><span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="col-w-1">
                            <h6 class="color-gray-900 mb-0">Ordering options</h6>
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Accepts gift cards</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Customizable</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox" checked="checked"><span class="text-small">Can be gift-wrapped</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Installment 0%</span><span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                            <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                            <ul class="list-checkbox">
                                <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5 stars)</span></a></li>
                                <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4 stars)</span></a></li>
                                <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3 stars)</span></a></li>
                                <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2 stars)</span></a></li>
                                <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1 star)</span></a></li>
                            </ul>
                        </div>
                        <div class="col-w-2">
                            <h6 class="color-gray-900 mb-0">Material</h6>
                            <ul class="list-checkbox">
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Nylon (8)</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Tempered Glass (5)</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox" checked="checked"><span class="text-small">Liquid Silicone Rubber (5)</span><span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="cb-container">
                                        <input type="checkbox"><span class="text-small">Aluminium Alloy (3)</span><span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                            <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                            <div><a class="btn btn-border mr-5" href="#">Games</a><a class="btn btn-border mr-5" href="#">Electronics</a><a class="btn btn-border mr-5" href="#">Video</a><a class="btn btn-border mr-5" href="#">Cellphone</a><a class="btn btn-border mr-5" href="#">Indoor</a><a class="btn btn-border mr-5" href="#">VGA Card</a><a class="btn btn-border mr-5" href="#">USB</a><a class="btn btn-border mr-5" href="#">Lightning</a><a class="btn btn-border mr-5" href="#">Camera</a></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto" href="#">Apply Fillter</a><a class="btn font-sm-bold color-gray-500" href="#">Reset Fillter</a></div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-xl">
            <div class="modal-content apply-job-form">
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-30">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gallery-image">
                                <div class="galleries-2">
                                    <div class="detail-gallery">
                                        <div class="product-image-slider-2">
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></figure>
                                            <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></figure>
                                        </div>
                                    </div>
                                    <div class="slider-nav-thumbnails-2">
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></div>
                                        </div>
                                        <div>
                                            <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-tags">
                                <div class="d-inline-block mr-25"><span class="font-sm font-medium color-gray-900">Category:</span><a class="link" href="#">Smartphones</a></div>
                                <div class="d-inline-block"><span class="font-sm font-medium color-gray-900">Tags:</span><a class="link" href="#">Blue</a>,<a class="link" href="#">Smartphone</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-info">
                                <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display Screen, S Pen Pro</h5>
                                <div class="info-by"><span class="bytext color-gray-500 font-xs font-medium">by</span><a class="byAUthor color-gray-900 font-xs font-medium" href="shop-vendor-list.html"> Ecom Tech</a>
                                    <div class="rating d-inline-block"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65 reviews)</span></div>
                                </div>
                                <div class="border-bottom pt-10 mb-20"></div>
                                <div class="box-product-price">
                                    <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                                </div>
                                <div class="product-description mt-10 color-gray-900">
                                    <ul class="list-dot">
                                        <li>8k super steady video</li>
                                        <li>Nightography plus portait mode</li>
                                        <li>50mp photo resolution plus bright display</li>
                                        <li>Adaptive color contrast</li>
                                        <li>premium design & craftmanship</li>
                                        <li>Long lasting battery plus fast charging</li>
                                    </ul>
                                </div>
                                <div class="box-product-color mt-10">
                                    <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span></p>
                                    <ul class="list-colors">
                                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="Ecom" title="Pink"></li>
                                        <li><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="Ecom" title="Gold"></li>
                                        <li><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="Ecom" title="Pink Gold"></li>
                                        <li><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="Ecom" title="Silver"></li>
                                        <li class="active"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="Ecom" title="Pink Gold"></li>
                                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="Ecom" title="Black"></li>
                                        <li class="disabled"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="Ecom" title="Red"></li>
                                    </ul>
                                </div>
                                <div class="box-product-style-size mt-10">
                                    <div class="row">
                                        <div class="col-lg-12 mb-10">
                                            <p class="font-sm color-gray-900">Style:<span class="color-brand-2 nameStyle">S22</span></p>
                                            <ul class="list-styles">
                                                <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                                <li class="active" title="S22">S22</li>
                                                <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-12 mb-10">
                                            <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span></p>
                                            <ul class="list-sizes">
                                                <li class="disabled" title="1GB">1GB</li>
                                                <li class="active" title="512 GB">512 GB</li>
                                                <li title="256 GB">256 GB</li>
                                                <li title="128 GB">128 GB</li>
                                                <li class="disabled" title="64GB">64GB</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="buy-product mt-5">
                                    <p class="font-sm mb-10">Quantity</p>
                                    <div class="box-quantity">
                                        <div class="input-quantity">
                                            <input class="font-xl color-brand-3" type="text" value="1"><span class="minus-cart"></span><span class="plus-cart"></span>
                                        </div>
                                        <div class="button-buy"><a class="btn btn-cart" href="shop-cart.html">Add to cart</a><a class="btn btn-buy" href="shop-checkout.html">Buy now</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>