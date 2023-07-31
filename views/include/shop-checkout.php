<?php
$random_number = mt_rand(1000, 9999);
if (isset($_POST['submit'])) {
  $code = $random_number;
  $customerId = $_SESSION['name'];
  $email = $_POST['email'];
  $name = $_POST['ten'];
  $address = $_POST['diachi'];
  $phone = $_POST['sdt'];
  $info = $_POST['thongtinthem'];
  $data = array(
    "success" => false,
    "results" => array()
  );
  if (isset($_SESSION['cart'])) {
    $total = 0;
    foreach ($_SESSION['cart'] as $key => $item) {
      $ct->buy_product($item['id'], $_SESSION['name'], $item['quantity'], $code);
      $total += $item['price'] * $item['quantity'];
      $data['results'][] = array(
        'id' => $item['id'],
        'price' =>  $item['price'],
        'name' => $item['name'],
        'quantity' =>  $item['quantity'],
        'image' =>  $item['image'],
      );
    }
  }
  $cart = json_encode($data);
  $order->order_product($code, $customerId, $email, $name, $address, $phone, $info, $cart, $total);
  unset($_SESSION['cart']);
  echo '<script type="text/javascript">toastr.success("Đặt hàng thành công")</script>';
  header("Refresh:1; url=?page=home", true, 303);
}

?>
<main class="main">
  <div class="section-box">
    <div class="breadcrumbs-div">
      <div class="container">
        <ul class="breadcrumb">
          <li><a class="font-xs color-gray-1000" href="index.html">Home</a></li>
          <li><a class="font-xs color-gray-500" href="shop-grid.html">Shop</a></li>
          <li><a class="font-xs color-gray-500" href="shop-cart.html">Checkout</a></li>
        </ul>
      </div>
    </div>
  </div>
  <form action="" method="post">
    <section class="section-box shop-template">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="box-border">
              <!-- <div class="box-payment"><a class="btn btn-gpay"><img src="assets/imgs/page/checkout/gpay.svg" alt="Ecom"></a><a class="btn btn-paypal"><img src="assets/imgs/page/checkout/paypal.svg" alt="Ecom"></a><a class="btn btn-amazon"><img src="assets/imgs/page/checkout/amazon.svg" alt="Ecom"></a></div> -->
              <!-- <div class="border-bottom-4 text-center mb-20">
                  <div class="text-or font-md color-gray-500">Or</div>
                </div> -->
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-20">
                  <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Thông tin liên lạc</h5>
                </div>
                <div class="col-lg-6 col-sm-6 mb-20 text-sm-end text-center"><span class="font-sm color-brand-3"> <?php if (!isset($_SESSION['login'])) {
                                                                                                                    echo 'Đăng nhập?</span><a class="font-sm color-brand-1" href="?page=login"> Login</a>';
                                                                                                                  } ?> </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="email" class="form-control font-sm" type="text" placeholder="Email*" value="<?php $email = isset($_SESSION['login']) ? $us->select_user_id($_SESSION['name'])[0]['email'] : "";
                                                                                                              echo $email; ?>">
                  </div>
                </div>
                <!-- <div class="col-lg-12">
                  <div class="form-group">
                    <label class="font-sm color-brand-3" for="checkboxOffers">
                      <input class="checkboxOffer" id="checkboxOffers" type="checkbox">Giữ cho tôi cập nhật tin tức và ưu đãi độc quyền
                    </label>
                  </div>
                </div> -->
                <div class="col-lg-12">
                  <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Địa chỉ giao hàng</h5>
                </div>

                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="ten" class="form-control font-sm" type="text" placeholder="Họ tên*" value="<?php $name = isset($_SESSION['login']) ? $us->select_user_id($_SESSION['name'])[0]['name'] : "";
                                                                                                            echo $name; ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="diachi" class="form-control font-sm" type="text" placeholder="Địa chỉ*" value="<?php $address = isset($_SESSION['login']) ? $us->select_user_id($_SESSION['name'])[0]['email'] : "";
                                                                                                                echo $address;  ?>">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input name="sdt" class="form-control font-sm" type="text" placeholder="Số điện thoại*" value="<?php $phone = isset($_SESSION['login']) ? $us->select_user_id($_SESSION['name'])[0]['address'] : "";
                                                                                                                    echo $phone;  ?>">
                  </div>
                </div>


                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <textarea name="thongtinthem" class="form-control font-sm" placeholder="Thông tin thêm..." rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-20">
              <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1" href="?page=shop-cart">Quay về giỏ hàng</a></div>
              <div class="col-lg-6 col-7 mb-20 text-end"><button class="btn btn-buy w-auto arrow-next" type="submit" name="submit">Thanh toán khi nhận hàng</button></div>
            </div>
          </div>
          <div class=" col-lg-6">
            <h5 class="font-md-bold mb-20">Đơn hàng của bạn</h5>
            <?php
            if (isset($_SESSION['cart'])) {
              $i = 1;
              $tongTien = 0;
              foreach ($_SESSION['cart'] as $cart) {
                $tongGia = $cart['price'] * $cart['quantity'];
                $tongTien += $tongGia;
            ?>
                <div class="box-border">
                  <div class="listCheckout">

                    <div class="item-wishlist">
                      <div class="wishlist-product">
                        <div class="product-wishlist">
                          <div class="product-image"><a style="width:50px;hight:50px" href="shop-single-product.html"><img src="./admin/assets/media/imageproduct/<?php echo $cart['image'] ?>" alt="Ecom"></a></div>
                          <div class="product-info"><a href="shop-single-product.html">
                              <h6 class="color-brand-3"><?php echo $cart['name'] ?></h6>
                            </a>
                            <!-- <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div> -->
                          </div>
                        </div>
                      </div>
                      <div class="wishlist-status">
                        <h5 class="color-gray-500">x<?php echo $cart['quantity']; ?></h5>
                      </div>
                      <div class="product-info">
                        <h4 class="color-brand-3 font-lg-bold"><?php echo number_format($cart['price']) . ' đ' ?></h4>
                      </div>
                    </div>
                  </div>


                </div>
            <?php }
            } ?>
            <div class="form-group d-flex mt-15">
              <input class="form-control mr-15" placeholder="Nhập mã giảm giá">
              <button class="btn btn-buy w-auto">Áp dụng</button>
            </div>
            <div class="form-group mb-0">
              <div class="row mb-10">
                <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Thành tiền</span></div>
                <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3"><?php if (isset($tongTien)) {
                                                                                                echo number_format($tongTien) . " đ";
                                                                                              } ?></span></div>
              </div>
              <div class="border-bottom mb-10 pb-5">
                <div class="row">
                  <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Phí giao hàng</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">-</span></div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Tổng tiền</span></div>
                <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3"><?php if (isset($tongTien)) {
                                                                                                echo number_format($tongTien) . " đ";
                                                                                              } ?></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>

</main>