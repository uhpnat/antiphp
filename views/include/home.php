<main class="main">
    <section class="section-box">
        <div class="banner-hero banner-1 pt-10">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-12 col-md-12 mb-30">
                        <div class="box-swiper">
                            <div class="swiper-container swiper-group-1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-3 bg-22" style="background-image: url(./views/assets/imgs/page/homepage4/bg-banner.png);">
                                            <h1 class="color-gray-100 text-uppercase text-shadow">
                                                Enjoy<br class="d-none d-lg-block" />
                                                The Music
                                            </h1>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-lg color-brand-3">
                                                            Free Shipping. Secure Payment
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Contact us 24hrs a day
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Support gift service
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-3 bg-22" style="background-image: url(./views/assets/imgs/page/homepage4/bg-banner-2.png);">
                                            <h1 class="color-gray-100 text-uppercase text-shadow">
                                                360 DEGREE<br class="d-none d-lg-block" />
                                                VIRTUAL REALITY
                                            </h1>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-lg color-brand-3">
                                                            Free Shipping. Secure Payment
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Contact us 24hrs a day
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Support gift service
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="banner-big banner-big-3 bg-22" style="background-image: url(./views/assets/imgs/page/homepage4/bg-banner-3.png);">
                                            <h1 class="color-gray-100 text-uppercase text-shadow">
                                                Enjoy<br class="d-none d-lg-block" />
                                                The Music
                                            </h1>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <ul class="list-disc">
                                                        <li class="font-lg color-brand-3">
                                                            Free Shipping. Secure Payment
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Contact us 24hrs a day
                                                        </li>
                                                        <li class="font-lg color-brand-3">
                                                            Support gift service
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination swiper-pagination-1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-12 col-md-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="bg-metaverse bg-22 pt-25 mb-20 pl-20 h-175">
                                    <h3 class="mb-10 font-32">Siêu ưu đãi</h3>
                                    <p class="font-16">Sản phẩm của tương lai</p>

                                </div>
                                <div class="bg-4 box-bdrd-4 bg-headphone pt-20 mh-307">
                                    <span class="font-md color-brand-3">Tai nghe</span>
                                    <h4 class="font-32 color-gray-1000 mb-10 mt-5">
                                        Giảm giá
                                    </h4>
                                    <p class="color-brand-1 font-sm">
                                        Thỏa thích đặt hàng
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-box mt-30">
        <div class="container">
            <div class="head-main bd-gray-200">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <ul class="nav nav-tabs text-start" role="tablist">
                            <li class="pl-0">
                                <a class="active pl-0" href="#tab-1-featured" data-bs-toggle="tab" role="tab" aria-controls="tab-1-featured" aria-selected="true" data-index="1">
                                    <h4>Xem Nhiều Nhất</h4>
                                </a>
                            </li>
                        </ul>
                        <!-- Button slider-->
                        <div class="box-button-slider">
                            <div class="button-slider-nav" id="tab-1-featured-nav">
                                <div class="swiper-button-next swiper-button-next-tab-1"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-1"></div>
                            </div>
                            <div class="button-slider-nav" id="tab-1-bestseller-nav" style="display: none">
                                <div class="swiper-button-next swiper-button-next-tab-2"></div>
                                <div class="swiper-button-prev swiper-button-prev-tab-2"></div>
                            </div>
                        </div>
                        <!-- End Button slider-->
                    </div>
                </div>
            </div>
            <div class="tab-content tab-content-slider">
                <div class="tab-pane fade active show" id="tab-1-featured" role="tabpanel" aria-labelledby="tab-1-featured">
                    <div class="box-swiper">
                        <div class="swiper-container swiper-tab-1">
                            <div class="swiper-wrapper pt-5">
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <?php
                                        $showProductByView = $product->showProductByView('productView', 0, 5);
                                        foreach ($showProductByView as $item) {
                                            $id = $item['productId'];
                                        ?>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">

                                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="" aria-label="Add To Wishlist"></a>

                                                        <a class="btn btn-quickview btn-tooltip" aria-label="<?php echo $item['productView'] ?> Lượt xem" href="" data-bs-toggle="modal"></a>
                                                    </div>
                                                    <div class="image-box">
                                                        <span class="label bg-brand-2"><?php echo $item['discount'] ?>%</span>
                                                        <a href="?page=shop-single-product&productId=<?php echo $item['productId'] ?>">
                                                            <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '')  ?>" alt="Ecom" />
                                                        </a>
                                                    </div>
                                                    <div class="info-right">
                                                        <a class="font-xs color-gray-500" href=""><?php echo $nameBrand =  $product->getNameBrandByIdProduct($item['brandId'])[0]['brandName']; ?></a><br />
                                                        <a class="color-brand-3 font-sm-bold" href="">
                                                            <?php echo $product->limitText($item['productName'], 30) ?>
                                                        </a>
                                                        <div class="rating">
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <span class="font-xs color-gray-500">(65)</span>
                                                        </div>
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main"><?php echo $item['discount'] == 0 ? number_format($item['productPrice']).' đ'  : number_format($item['productPrice']*((100 - $item['discount'])/100)).' đ'   ?></strong>
                                                            <span class="color-gray-500 price-line"><?php echo $item['discount'] != 0 ? number_format($item['productPrice']).' đ'  : '' ?></span>
                                                        </div>
                                                        <input type="hidden" id="quantityTotal<?php echo $item['productId'] ?>" name="quantityTotal" value="<?php echo ($item['productQuantity']- $item['productSold']) ?>">
                                                                <input type="hidden" name="id" value="<?php echo $item['productId'] ?>">
                                                                
                                                                <input type="hidden" id="name<?php echo $item['productId'] ?>" value="<?php echo $item['productName'] ?>">
                                                                <input type="hidden" id="discount<?php echo $item['productId'] ?>" value="<?php echo $item['discount'] ?>">
                                                                <input type="hidden" id="quantity<?php echo $item['productId'] ?>" value="1">
                                                                <input type="hidden" id="price<?php echo $item['productId'] ?>" value="<?php echo $item['productPrice'] ?>">
                                                                <input type="hidden" id="image<?php echo $item['productId'] ?>" value="<?php echo $item['productImage'] ?>">
                                                        <div class="mt-20 box-btn-cart">
                                                            <a class="btn btn-cart add_to_cart" id="<?php echo $item['productId'] ?>">Mua Ngay</a>
                                                        </div>
                                                        <ul class="list-features">
                                                            <li><?php echo $product->limitText($item['productDesc1'], 40) ?></li>
                                                            <li><?php echo $product->limitText($item['productDesc2'], 40) ?></li>
                                                            <li><?php echo $product->limitText($item['productDesc3'], 40) ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="list-products-5">
                                        <?php
                                        $showProductByView = $product->showProductByView('productView', 5, 5);
                                        foreach ($showProductByView as $item) {
                                            $id = $item['productId'];
                                            
                                            
                                        ?>
                                            <div class="card-grid-style-3">
                                                <div class="card-grid-inner">
                                                    <div class="tools">

                                                        <a class="btn btn-wishlist btn-tooltip mb-10" href="" aria-label="Add To Wishlist"></a>

                                                        <a class="btn btn-quickview btn-tooltip" aria-label="<?php echo $item['productView'] ?> Lượt xem" href="" data-bs-toggle="modal"></a>
                                                    </div>
                                                    <div class="image-box">
                                                        <span class="label bg-brand-2"><?php echo $item['discount'] ?>%</span>
                                                        <a href="?page=shop-single-product&productId=<?php echo $item['productId'] ?>">
                                                            <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '')  ?>" alt="Ecom" />
                                                        </a>
                                                    </div>
                                                    <div class="info-right">
                                                        <a class="font-xs color-gray-500" href=""><?php echo $nameBrand =  $product->getNameBrandByIdProduct($item['brandId'])[0]['brandName']; ?></a><br />
                                                        <a class="color-brand-3 font-sm-bold" href="">
                                                            <?php echo $product->limitText($item['productName'], 30) ?>
                                                        </a>
                                                        <div class="rating">
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                            <span class="font-xs color-gray-500">(65)</span>
                                                        </div>
                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main"><?php echo $item['discount'] == 0 ? number_format($item['productPrice']).' đ'  : number_format($item['productPrice']*((100 - $item['discount'])/100)).' đ'   ?></strong>
                                                            <span class="color-gray-500 price-line"><?php echo  $item['discount'] != 0 ? number_format($item['productPrice']).' đ'  : '' ?></span>
                                                        </div>
                                                        <input type="hidden" id="quantityTotal<?php echo $item['productId'] ?>" name="quantityTotal" value="<?php echo ($item['productQuantity']- $item['productSold']) ?>">
                                                                <input type="hidden" name="id" value="<?php echo $item['productId'] ?>">
                                                                <input type="hidden" id="quantityCart<?php echo $item['productId'] ?>" name="quantityCart" value="">
                                                                <input type="hidden" id="name<?php echo $item['productId'] ?>" value="<?php echo $item['productName'] ?>">
                                                                <input type="hidden" id="discount<?php echo $item['productId'] ?>" value="<?php echo $item['discount'] ?>">
                                                                <input type="hidden" id="quantity<?php echo $item['productId'] ?>" value="1">
                                                                <input type="hidden" id="price<?php echo $item['productId'] ?>" value="<?php echo $item['productPrice'] ?>">
                                                                <input type="hidden" id="image<?php echo $item['productId'] ?>" value="<?php echo $item['productImage'] ?>">
                                                        <div class="mt-20 box-btn-cart">
                                                            <a class="btn btn-cart add_to_cart" id="<?php echo $item['productId'] ?>">Mua Ngay</a>
                                                        </div>
                                                        <ul class="list-features">
                                                            <li><?php echo $product->limitText($item['productDesc1'], 40) ?></li>
                                                            <li><?php echo $product->limitText($item['productDesc2'], 40) ?></li>
                                                            <li><?php echo $product->limitText($item['productDesc3'], 40) ?></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="section-box pt-60 pb-60 bg-gray-50 mt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="box-content">
                        <div class="head-main bd-gray-200">
                            <div class="row">
                                <div class="col-xl-7 col-lg-6">
                                    <h4 class="mb-5">Sản Phẩn Bán Chạy</h4>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <!-- Button slider-->
                                    <div class="box-button-slider-normal">
                                        <div class="button-slider-nav" id="tab-1-all-nav">
                                            <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                                            <div class="swiper-button-next swiper-button-next-tab-4"></div>
                                        </div>
                                    </div>
                                    <!-- End Button slider-->
                                </div>
                            </div>
                        </div>
                        <div class="box-swiper">

                            <div class="swiper-container swiper-tab-4">
                                <div class="swiper-wrapper pt-5">
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <?php
                                            $showProductByView = $product->showProductByView('productSold', 0, 8);
                                            foreach ($showProductByView as $item) {
                                                $id = $item['productId'];
                                            ?>
                                                <div class="col-xl-3 col-lg-6 col-md-6">
                                                    <div class="card-grid-style-3">
                                                        <div class="card-grid-inner">
                                                            <div class="tools">

                                                                <a class="btn btn-wishlist btn-tooltip mb-10" href="" aria-label="Add To Wishlist"></a>

                                                                <a class="btn btn-quickview btn-tooltip" aria-label="<?php echo $item['productView'] ?> Lượt xem" href="" data-bs-toggle="modal"></a>
                                                            </div>
                                                            <div class="image-box">
                                                                <span class="label bg-brand-2"><?php echo $item['discount']?>%</span>
                                                                <a href="?page=shop-single-product&productId=<?php echo $item['productId'] ?>">
                                                                    <img src="./admin/assets/media/imageproduct/<?php echo $product->formatImage($item['productImage'], '')  ?>" alt="Ecom" />
                                                                </a>
                                                            </div>
                                                            <div class="info-right">
                                                                <a class="font-xs color-gray-500" href=""><?php echo $nameBrand =  $product->getNameBrandByIdProduct($item['brandId'])[0]['brandName']; ?></a><br />
                                                                <a class="color-brand-3 font-sm-bold" href="">
                                                                    <?php echo $product->limitText($item['productName'], 25) ?>
                                                                </a>
                                                                <div class="rating">
                                                                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                                    <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" />
                                                                    <span class="font-xs color-gray-500">(65)</span>
                                                                </div>
                                                                <div class="price-info">
                                                                    <strong class="font-lg-bold color-brand-3 price-main"><?php echo $item['discount'] == 0 ? number_format($item['productPrice']).' đ'  : number_format($item['productPrice']*((100 - $item['discount'])/100)).' đ'   ?></strong>
                                                                    <span class="color-gray-500 price-line"><?php echo $item['discount'] != 0 ? number_format($item['productPrice']).' đ'  : '' ?></span>
                                                                </div>
                                                                
                                                                <input type="hidden" id="quantityTotal<?php echo $item['productId'] ?>" name="quantityTotal" value="<?php echo ($item['productQuantity']- $item['productSold']) ?>">
                                                                <input type="hidden" name="id" value="<?php echo $item['productId'] ?>">
                                                                <input type="hidden" id="quantityCart<?php echo $item['productId'] ?>" name="quantityCart" value="">
                                                                <input type="hidden" id="name<?php echo $item['productId'] ?>" value="<?php echo $item['productName'] ?>">
                                                                <input type="hidden" id="discount<?php echo $item['productId'] ?>" value="<?php echo $item['discount'] ?>">
                                                                <input type="hidden" id="quantity<?php echo $item['productId'] ?>" value="1">
                                                                <input type="hidden" id="price<?php echo $item['productId'] ?>" value="<?php echo $item['productPrice'] ?>">
                                                                <input type="hidden" id="image<?php echo $item['productId'] ?>" value="<?php echo $item['productImage'] ?>">

                                                                <div class="mt-20 box-btn-cart">
                                                                    <button class="btn btn-cart add_to_cart" id="<?php echo $item['productId'] ?>">Mua ngay</button>

                                                                </div>


                                                                <ul class="list-features">
                                                                    <li><?php echo $product->limitText($item['productDesc1'], 35) ?></li>
                                                                    <li><?php echo $product->limitText($item['productDesc2'], 35) ?></li>
                                                                    <li><?php echo $product->limitText($item['productDesc3'], 35) ?></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-20">
                            <a href=""><img src="./views/assets/imgs/page/homepage4/banner-ads.png" alt="Ecom" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4">
                    <div class="box-slider-item box-sidebar">
                        <div class="head">
                            <h4 class="d-inline-block">Best seller</h4>
                            <div class="box-button-control">
                                <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller"></div>
                                <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller"></div>
                            </div>
                        </div>
                        <div class="content-slider pl-10 pr-10">
                            <div class="box-swiper">
                                <div class="swiper-container swiper-best-seller">
                                    <div class="swiper-wrapper pt-5">
                                        <div class="swiper-slide">
                                            <?php

                                            $products = $product->showProductByView('productSale', 0, 6);
                                            foreach ($products as $item) {
                                            ?>
                                                <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                                                    <div class="image-box">
                                                        <span class="label bg-brand-2"><?php echo $item['discount'] ?>%</span><a href=""><img src="./admin/assets/media/imageproduct/<?php echo $item['productImage'] ?>" alt="Ecom" /></a>
                                                    </div>
                                                    <div class="info-right">
                                                        <a class="color-brand-3 font-xs-bold" href="?page=shop-single-product&productId=<?php echo $item['productId'] ?>"><?php echo $item['productName'] ?>
                                                        </a>
                                                        <div class="rating">
                                                            <img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><img src="./views/assets/imgs/template/icons/star.svg" alt="Ecom" /><span class="font-xs color-gray-500">
                                                                (65)</span>
                                                        </div>

                                                        <div class="price-info">
                                                            <strong class="font-lg-bold color-brand-3 price-main"><?php echo $item['discount'] == 0 ? number_format($item['productPrice']) . ' đ'  : number_format($item['productPrice'] * ((100 - $item['discount']) / 100))   ?></strong>
                                                            <span class="color-gray-500 price-line"><?php echo $item['discount'] !== 0 ? number_format($item['productPrice']) : '' ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="banner-right h-500 text-center mb-30">
                    <span class="text-no font-11">No.9</span>
                    <h5 class="font-23 mt-20">
                        Sensitive Touch<br class="d-none d-lg-block" />without
                        fingerprint
                    </h5>
                    <p class="text-desc font-16 mt-15">
                        Smooth handle and accurate click
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <section class="section-box pt-50">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 mb-30">
                    <div class="bg-5 block-iphone">
                        <span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-7 col-md-7 col-sm-12 mb-30">
                    <div class="bg-4 block-samsung">
                        <span class="color-brand-3 font-sm-lh32">New Arrivals</span>
                        <h3 class="font-xl mb-10">Samsung 2022 Led TV</h3>
                        <p class="font-base color-brand-3 mb-20">Special Sale</p>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="bg-6 block-drone">
                        <h3 class="font-33 mb-20">Drone Quadcopter UAV - DJI Air 2S</h3>
                        <div class="mb-30">
                            <strong class="font-18">Gimbal Camera, 5.4K Video</strong>
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
                    <h3 class="color-white">
                        Subscrible &amp; Get
                        <span class="color-warning">10%</span> Discount
                    </h3>
                    <p class="font-lg color-white">
                        Get E-mail updates about our latest shop and
                        <span class="font-lg-bold">special offers.</span>
                    </p>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="box-form-newsletter mt-15">
                        <form class="form-newsletter">
                            <input class="input-newsletter font-xs" value="" placeholder="Your email Address" />
                            <button class="btn btn-brand-2">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
