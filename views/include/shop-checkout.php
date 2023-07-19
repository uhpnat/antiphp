<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/style2513.css?v=3.0.0" rel="stylesheet">
    <title>Thanh Toán</title>
  </head>
  <body>
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
                  <div class="col-lg-6 col-sm-6 mb-20 text-sm-end text-center"><span class="font-sm color-brand-3">Đăng nhập?</span><a class="font-sm color-brand-1" href="page-login.html"> Login</a></div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" placeholder="Email*">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label class="font-sm color-brand-3" for="checkboxOffers">
                        <input class="checkboxOffer" id="checkboxOffers" type="checkbox">Giữ cho tôi cập nhật tin tức và ưu đãi độc quyền
                      </label>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Địa chỉ giao hàng</h5>
                  </div>
                  
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" placeholder="Họ tên*">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" placeholder="Địa chỉ*">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input class="form-control font-sm" type="text" placeholder="Số điện thoại*">
                    </div>
                  </div>
                  
                  
                  <div class="col-lg-12">
                    <div class="form-group mb-0">
                      <textarea class="form-control font-sm" placeholder="Thông tin thêm..." rows="5"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-20">
                <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1" href="shop-cart.html">Quay về giỏ hàng</a></div>
                <div class="col-lg-6 col-7 mb-20 text-end"><a class="btn btn-buy w-auto arrow-next" href="shop-checkout.html">Thanh toán</a></div>
              </div>
            </div>
            <div class="col-lg-6">
                <h5 class="font-md-bold mb-20">Đơn hàng của bạn</h5>
                <?php 
                    if (isset($_SESSION['cart'])){
                        $i = 1;
                        $tongTien =0;
                        foreach($_SESSION['cart'] as $cart) {
                            $tongGia = $cart['price'] * $cart['quantity'];
                            $tongTien += $tongGia;
                ?>
              <div class="box-border">
                <div class="listCheckout"> 
                  
                  <div class="item-wishlist">
                    <div class="wishlist-product">
                      <div class="product-wishlist">
                        <div  class="product-image"><a style="width:50px;hight:50px" href="shop-single-product.html"><img src="./admin/assets/media/imageproduct/<?php echo $cart['image']?>" alt="Ecom"></a></div>
                        <div class="product-info"><a href="shop-single-product.html">
                            <h6 class="color-brand-3"><?php echo $cart['name']?></h6></a>
                          <!-- <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div> -->
                        </div>
                      </div>
                    </div>
                    <div class="wishlist-status">
                      <h5 class="color-gray-500">x<?php echo $cart['quantity'] ;?></h5>
                    </div>
                    <div class="wishlist-price">
                      <h4 class="color-brand-3 font-lg-bold"><?php echo $cart['price'].' vnđ'?></h4>
                    </div>
                  </div>
                </div>
                
                
              </div>
              <?php }}?>
              <div class="form-group d-flex mt-15">
                  <input class="form-control mr-15" placeholder="Nhập mã giảm giá">
                  <button class="btn btn-buy w-auto">Áp dụng</button>
                </div>
              <div class="form-group mb-0">
                  <div class="row mb-10">
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Thành tiền</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3"><?php if(isset($tongTien)){
                                        echo $tongTien." vnđ";
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
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3"><?php if(isset($tongTien)){
                                        echo $tongTien." vnđ";
                                    } ?></span></div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>
     
        
    </main>
    <footer class="footer">
      <div class="footer-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 width-25 mb-30">
              <h4 class="mb-30 color-gray-1000">Contact</h4>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Address:</strong> 502 New Design Str, Melbourne, San Francisco, CA 94110, United States</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Phone:</strong> (+01) 123-456-789</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong> <a href="https://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b2824253f2a283f0b2e28242666262a39202e3f65282426">[email&#160;protected]</a></div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00 - 17:00, Mon - Sat</div>
              <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
            </div>
            <div class="col-lg-3 width-20 mb-30">
              <h4 class="mb-30 color-gray-1000">Make Money with Us</h4>
              <ul class="menu-footer">
                <li><a href="page-about-us.html">Mission &amp; Vision</a></li>
                <li><a href="page-about-us.html">Our Team</a></li>
                <li><a href="page-careers.html">Careers</a></li>
                <li><a href="#">Press &amp; Media</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Testimonials</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">Company</h4>
              <ul class="menu-footer">
                <li><a href="blog-2.html">Our Blog</a></li>
                <li><a href="#">Plans &amp; Pricing</a></li>
                <li><a href="#">Knowledge Base</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Office Center</a></li>
                <li><a href="blog.html">News &amp; Events</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">My account</h4>
              <ul class="menu-footer">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Editor Help</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Live Chatting</a></li>
                <li><a href="page-contact.html">Contact Us</a></li>
                <li><a href="#">Support Center</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-23">
              <h4 class="mb-30 color-gray-1000">App &amp; Payment</h4>
              <div>
                <p class="font-md color-gray-900">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>
                <div class="mt-20"><a class="mr-10" href="#"><img src="assets/imgs/template/appstore.png" alt="Ecom"></a><a href="#"><img src="assets/imgs/template/google-play.png" alt="Ecom"></a></div>
                <p class="font-md color-gray-900 mt-20 mb-10">Secured Payment Gateways</p><img src="assets/imgs/template/payment-method.png" alt="Ecom">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-2">
        <div class="footer-bottom-1">
          <div class="container">
            <div class="footer-2-top mb-20"><a href="index.html"><img alt="Ecom" src="assets/imgs/template/logo-2.svg"></a><a class="font-xs color-gray-1000" href="#">EcomMarket.com</a><a class="font-xs color-gray-1000" href="#">Ecom Partners</a><a class="font-xs color-gray-1000" href="#">Ecom Bussiness</a><a class="font-xs color-gray-1000" href="#">Ecom Factory</a></div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Electronic:</h6>
              </div>
              <div class="tags-footer"><a href="shop-fullwidth.html">Cell Phones</a><a href="shop-grid.html">Headphones</a><a href="shop-grid-2.html">Television &amp; Video</a><a href="shop-list.html">Game Controller</a><a href="shop-list-2.html">Apple Watch</a><a href="shop-grid.html">HTC</a><a href="shop-grid.html">Ipad</a><a href="shop-grid.html">Keyboard</a><a href="shop-grid.html">Samsung</a><a href="shop-grid.html">Wireless Speaker</a><a href="shop-grid.html">Samsung Galaxy</a><a href="shop-grid.html">Gaming Mouse</a><a href="shop-grid.html">eBook Readers</a><a href="shop-grid.html">Service Plans</a><a href="shop-grid.html">Home Audio</a><a href="shop-grid.html">Office Electronics</a><a href="shop-grid.html">Lenovo</a><a href="shop-grid.html">Mackbook Pro M1</a><a href="shop-grid.html">HD Videos Player</a></div>
            </div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Furniture:</h6>
              </div>
              <div class="tags-footer"><a href="shop-grid.html">Sofa</a><a href="shop-grid.html">Chair</a><a href="shop-grid.html">Dining Table</a><a href="shop-grid.html">Living Room</a><a href="shop-grid.html">Table Lamp</a><a href="shop-grid.html">Night Stand</a><a href="shop-grid.html">Computer Desk</a><a href="shop-grid.html">Bar Table</a><a href="shop-grid.html">Pillow</a><a href="shop-grid.html">Radio</a><a href="shop-grid.html">Clock</a><a href="shop-grid.html">Bad Room</a><a href="shop-grid.html">Stool</a><a href="shop-grid.html">Television</a><a href="shop-grid.html">wardrobe</a><a href="shop-grid.html">Living Room Tables</a><a href="shop-grid.html">Dressers</a><a href="shop-grid.html">Patio Sofas</a><a href="shop-grid.html">Nursery</a><a href="shop-grid.html">Kitchen</a><a href="shop-grid.html">Accent Furniture</a><a href="shop-grid.html">Replacement Parts</a></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom mt-20">
            <div class="row">
              <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-gray-900 font-sm">Copyright &copy; 2022 Ecom Market. All rights reserved.</span></div>
              <div class="col-lg-6 col-md-12 text-center text-lg-end">
                <ul class="menu-bottom">
                  <li><a class="font-sm color-gray-900" href="page-term.html">Conditions of Use</a></li>
                  <li><a class="font-sm color-gray-900" href="page-term.html">Privacy Notice</a></li>
                  <li><a class="font-sm color-gray-900" href="page-careers.html">Interest-Based Ads</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/waypoints.js"></script>
    <script src="assets/js/vendors/wow.js"></script>
    <script src="assets/js/vendors/magnific-popup.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/isotope.js"></script>
    <script src="assets/js/vendors/scrollup.js"></script>
    <script src="assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="assets/js/vendors/noUISlider.js"></script>
    <script src="assets/js/vendors/slider.js"></script>
    <!-- Count down-->
    <script src="assets/js/vendors/counterup.js"></script>
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <!-- Count down--><script src="assets/js/vendors/jquery.elevatezoom.js"></script>
<script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/main2513.js?v=3.0.0"></script>
    <script src="assets/js/shop23cd.js?v=1.2.1"></script>
  </body>
</html>