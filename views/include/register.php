<?php
if (isset(($_POST['submit']))) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    if ($fullName == null || $password1 == null || $email == null || $password == null) {
        echo '<script type="text/javascript">toastr.warning("Không được bỏ trống")</script>';
    } else {
        if ($password == $password1) {
            $us->add_user($fullName, $email, $password, '', '', '2', '');

            echo '<script type="text/javascript">toastr.success("Đăng kí thành công")</script>';
            header("Refresh:1; url=?page=login", true, 303);
        } else {
            echo '<script type="text/javascript">toastr.warning("Mật khẩu không khớp")</script>';
        }
    }
}
?>


<main class="main">
    <form action="" method="post">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <h3>Tạo Tài Khoản</h3>
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Họ Và Tên *</label>
                                <input name="fullName" class="form-control" type="text" placeholder="Tên của bạn">
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input name="email" class="form-control" type="text" placeholder="name@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Mật Khẩu *</label>
                                <input name="password" class="form-control" type="password" placeholder="******************">
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Nhập Lại Mật Khẩu *</label>
                                <input name="password1" class="form-control" type="password" placeholder="******************">
                            </div>

                            <div class="form-group">
                                <input name="submit" class="font-md-bold btn btn-buy" type="submit" value="Đăng Kí">
                            </div>
                            <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Đã Có Tài Khoản?</span><a class="font-xs color-brand-3 font-medium" href="?page=login"> Đăng Nhập</a></div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                    <div class="box-login-social pt-65 pl-50">
                        <h5 class="text-center">Đăng Nhập Bằng </h5>
                        <div class="box-button-login mt-25">
                            <a class="btn btn-login font-md-bold color-brand-3 mb-15"><img src="./views/assets/imgs/page/account/google.svg" alt="Ecom"></a>
                            <a class="btn btn-login font-md-bold color-brand-3 mb-15"><span class="color-blue font-md-bold">Facebook</span></a>
                            <a class="btn btn-login font-md-bold color-brand-3 mb-15"><img src="./views/assets/imgs/page/account/amazon.svg" alt="Ecom"></a>
                        </div>
                    </div>
                </div> -->
                </div>
            </div>
        </section>
    </form>
    <!-- <section class="section-box box-newsletter">
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
    </section> -->
</main>