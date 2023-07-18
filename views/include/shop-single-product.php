<?php
$singleProduct = $product->get_product_by_id($id);
$upview = $product->upview($id);
foreach ($singleProduct as $item) {

?>

  <main class="main">
    <div class="section-box">
      <div class="breadcrumbs-div">
        <div class="container">
          <ul class="breadcrumb">
            <li>
              <a class="font-xs color-gray-1000" href="index.html">Home</a>
            </li>
            <li>
              <a class="font-xs color-gray-500" href="shop-grid.html">Electronics</a>
            </li>
            <li>
              <a class="font-xs color-gray-500" href="shop-grid.html">Cell phone</a>
            </li>
            <li>
              <a class="font-xs color-gray-500" href="shop-grid.html">Accessories</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <section class="section-box shop-template">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="gallery-image">
              <div class="galleries">
                <div class="detail-gallery">
                  <label class="label">-17%</label>
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
                <span class="bytext color-gray-500 font-xs font-medium">
                  <div class="rating mt-5">
                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500 font-medium">
                      (65 reviews)</span>
                  </div>
              </div>

            </div>
            <div class="border-bottom pt-10 mb-20"></div>
            <div class="row">
              <div class="col-lg-7">
                <div class="box-product-price">
                  <h3 class="color-brand-3 price-main d-inline-block mr-10">
                    <?php if ($item['discount'] == 0) {
                      echo $item['productPrice'];
                    } else {
                      echo $item['discount'];
                    } ?>
                  </h3>
                  <span class="color-gray-500 price-line font-xl line-througt">
                    <?php if ($item['discount'] == 0) {
                    } else {
                      echo $item['productPrice'];
                    } ?>
                  </span>
                </div>
                <div class="box-progress-product mt-15 mb-20">
                  <div class="progress mb-5">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <span class="font-xs color-gray-500">Sản phẩm đã bán: <?php echo $item['productSold']; ?>/<?php echo $item['productQuantity']; ?></span>
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
              <div class="col-lg-5">
                <div class="box-border-product">
                  <div class="buy-product mt-10 d-flex">
                    <div class="font-sm text-quantity">Số lượng</div>
                    <div class="box-quantity">
                      <div class="input-quantity">
                        <input class="font-xl color-brand-3" type="text" value="1" /><span class="minus-cart"></span><span class="plus-cart"></span>
                      </div>
                    </div>
                  </div>
                  <div class="button-buy mt-15">
                    <a class="btn btn-cart mb-15" href="shop-cart.html">Thêm Vào Giỏ Hàng</a><a class="btn btn-buy" href="shop-checkout.html">Mua Ngay</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="border-bottom pt-30 mb-40"></div>

      </div>
    </section>
    <section class="section-box shop-template">
      <div class="container">
        <div class="pt-30 mb-10">
          <ul class="nav nav-tabs nav-tabs-product" role="tablist">
            <li>
              <a class="active" href="#tab-description" data-bs-toggle="tab" role="tab" aria-controls="tab-description" aria-selected="true">Mô tả sản phẩm</a>
            </li>
            <li>
              <a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews" aria-selected="true">Đánh giá và bình luận</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active show" id="tab-description" role="tabpanel" aria-labelledby="tab-description">
              <div class="display-text-short">
                <p>
                  <?php echo $item['productDesc'] ?>

                </p>
                <p>
                  When she reached the first hills of the Italic Mountains,
                  she had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the
                  subline of her own road, the Line Lane. Pityful a rethoric
                  question ran over her cheek, then she continued her way. On
                  her way she met a copy. The copy warned the Little Blind
                  Text, that where it came from it would have been rewritten a
                  thousand times and everything that was left from its origin
                  would be the word “and” and the Little Blind Text should
                  turn around and return to its own, safe country. It is a
                  paradisematic country, in which roasted parts of sentences
                  fly into your mouth. Even the all-powerful Pointing has no
                  control about the blind texts it is an almost unorthographic
                  life One day however a small line of blind text by the name
                  of Lorem Ipsum decided to leave for the far World of
                  Grammar.
                </p>
                <p>
                  <img src="./views/assets/imgs/page/product/product-banner.jpg" alt="Ecom" />
                </p>
                <p>
                  It is a paradisematic country, in which roasted parts of
                  sentences fly into your mouth. Even the all-powerful
                  Pointing has no control about the blind texts it is an
                  almost unorthographic life One day however a small line of
                  blind text by the name of Lorem Ipsum decided to leave for
                  the far World of Grammar. The Big Oxmox advised her not to
                  do so, because there were thousands of bad Commas, wild
                  Question Marks and devious Semikoli, but the Little Blind
                  Text didn’t listen. She packed her seven versalia, put her
                  initial into the belt and made herself on the way.
                </p>
                <p>
                  <img src="./views/assets/imgs/page/product/product-banner-2.jpg" alt="Ecom" />
                </p>
                <p>
                  When she reached the first hills of the Italic Mountains,
                  she had a last view back on the skyline of her hometown
                  Bookmarksgrove, the headline of Alphabet Village and the
                  subline of her own road, the Line Lane. Pityful a rethoric
                  question ran over her cheek, then she continued her way. On
                  her way she met a copy. The copy warned the Little Blind
                  Text, that where it came from it would have been rewritten a
                  thousand times and everything that was left from its origin
                  would be the word “and” and the Little Blind Text should
                  turn around and return to its own, safe country.
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

                    <div class="comment-list">
                      <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                        <div class="user justify-content-between d-flex">
                          <div class="thumb text-center">
                            <img src="./views/assets/imgs/page/product/author-2.png" alt="Ecom" /><a class="font-heading text-brand" href="#">Sienna</a>
                          </div>
                          <div class="desc">
                            <div class="d-flex justify-content-between mb-10">
                              <div class="d-flex align-items-center">
                                <span class="font-xs color-gray-700">December 4, 2022 at 3:12 pm</span>
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
                              totam officia id incidunt?
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
            <div class="border-bottom pt-30 mb-50"></div>
            <!-- sản phẩm phụ -->
            <h4 class="color-brand-3">Related Products</h4>
            <div class="list-products-5 mt-20">
              <div class="card-grid-style-3">
                <div class="card-grid-inner">
                  <div class="tools">
                    <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                  </div>
                  <div class="image-box">
                    <span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="./views/assets/imgs/page/homepage1/imgsp3.png" alt="Ecom" /></a>
                  </div>
                  <div class="info-right">
                    <a class="font-xs color-gray-500" href="shop-vendor-single.html">Dell</a><br /><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Dell Optiplex 9020 Small Form Business Desktop Tower</a>
                    <div class="rating">
                      <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">(65)</span>
                    </div>
                    <div class="price-info">
                      <strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="mt-20 box-btn-cart">
                      <a class="btn btn-cart" href="shop-cart.html">Add To Cart</a>
                    </div>
                    <ul class="list-features">
                      <li>27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3">
                <div class="card-grid-inner">
                  <div class="tools">
                    <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                  </div>
                  <div class="image-box">
                    <span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="./views/assets/imgs/page/homepage1/imgsp4.png" alt="Ecom" /></a>
                  </div>
                  <div class="info-right">
                    <a class="font-xs color-gray-500" href="shop-vendor-single.html">HP</a><br /><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">HP 24 All-in-One PC, Intel Core i3-1115G4, 4GB RAM</a>
                    <div class="rating">
                      <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">(65)</span>
                    </div>
                    <div class="price-info">
                      <strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="mt-20 box-btn-cart">
                      <a class="btn btn-cart" href="shop-cart.html">Add To Cart</a>
                    </div>
                    <ul class="list-features">
                      <li>27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3">
                <div class="card-grid-inner">
                  <div class="tools">
                    <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                  </div>
                  <div class="image-box">
                    <span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="./views/assets/imgs/page/homepage1/imgsp5.png" alt="Ecom" /></a>
                  </div>
                  <div class="info-right">
                    <a class="font-xs color-gray-500" href="shop-vendor-single.html">Gateway</a><br /><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Gateway 23.8&quot; All-in-one Desktop, Fully
                      Adjustable</a>
                    <div class="rating">
                      <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">(65)</span>
                    </div>
                    <div class="price-info">
                      <strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="mt-20 box-btn-cart">
                      <a class="btn btn-cart" href="shop-cart.html">Add To Cart</a>
                    </div>
                    <ul class="list-features">
                      <li>27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3">
                <div class="card-grid-inner">
                  <div class="tools">
                    <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                  </div>
                  <div class="image-box">
                    <span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="./views/assets/imgs/page/homepage1/imgsp6.png" alt="Ecom" /></a>
                  </div>
                  <div class="info-right">
                    <a class="font-xs color-gray-500" href="shop-vendor-single.html">HP</a><br /><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">HP 22 All-in-One PC, Intel Pentium Silver J5040, 4GB
                      RAM</a>
                    <div class="rating">
                      <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">(65)</span>
                    </div>
                    <div class="price-info">
                      <strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="mt-20 box-btn-cart">
                      <a class="btn btn-cart" href="shop-cart.html">Add To Cart</a>
                    </div>
                    <ul class="list-features">
                      <li>27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3">
                <div class="card-grid-inner">
                  <div class="tools">
                    <a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a>
                  </div>
                  <div class="image-box">
                    <span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="./views/assets/imgs/page/homepage1/imgsp7.png" alt="Ecom" /></a>
                  </div>
                  <div class="info-right">
                    <a class="font-xs color-gray-500" href="shop-vendor-single.html">Sceptre</a><br /><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Sceptre 24&quot; Professional Thin 75Hz 1080p LED
                      Monitor</a>
                    <div class="rating">
                      <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">(65)</span>
                    </div>
                    <div class="price-info">
                      <strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span>
                    </div>
                    <div class="mt-20 box-btn-cart">
                      <a class="btn btn-cart" href="shop-cart.html">Add To Cart</a>
                    </div>
                    <ul class="list-features">
                      <li>27-inch (diagonal) Retina 5K display</li>
                      <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                      <li>AMD Radeon Pro 5300 graphics</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="border-bottom pt-20 mb-40"></div>
            <!--  -->
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-20">
      <div class="text-center">
        <a href="#"><img src="./views/assets/imgs/page/product/banner-ads.png" alt="Ecom" /></a>
      </div>
    </div>
    <div class="border-bottom pt-20 mb-40"></div>



  </main>
<?php } ?>