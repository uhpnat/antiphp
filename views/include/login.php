<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $kiemTra = $us->checkLogin($email, $password);
}
?>

<main class="main">
    <form action="" method="post">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <h3>Đăng Nhập</h3>
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email</label>
                                <input name="email" class="form-control" type="text" placeholder="stevenjob@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Password *</label>
                                <input name="password" class="form-control" type="password" placeholder="******************">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="color-gray-500 font-xs">
                                            <input class="checkagree" type="checkbox">Lưu Tài Khoản
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <div class="form-group"><a class="font-xs color-gray-500" href="#">Quên Mật Khẩu?</a></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="submit" class="font-md-bold btn btn-buy" type="submit" value="Đăng Nhập">
                            </div>
                            <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Chưa Có Tài Khoản?</span><a class="font-xs color-brand-3 font-medium" href="?page=register">Đăng Kí</a></div>
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
</main>