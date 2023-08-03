<?php


if (isset($_POST['submit'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password1 = $_POST['password1'];
    if ($fullName == null || $password1 == null || $email == null || $password == null) {
        echo '<script type="text/javascript">toastr.warning("Không được bỏ trống")</script>';
    } else if (strlen($password) < 6) {
        echo '<script type="text/javascript">toastr.warning("Mật Khẩu Ít Nhất 6 Kí Tự")</script>';
    } else {
        //check trùng 
        if (!$us->checkEmail($email) == false) {
            if ($password == $password1) {
                $us->add_user($fullName, $email, $password, '', '', '2', '');

                echo '<script type="text/javascript">toastr.success("Đăng kí thành công")</script>';
                header("Refresh:1; url=?page=login", true, 303);
            } else {
                echo '<script type="text/javascript">toastr.warning("Mật khẩu không khớp")</script>';
            }
        } else
            echo '<script type="text/javascript">toastr.warning("Email Đã Tồn Tại")</script>';
    }
}
?>


<main class="main">
    <form action="" method="post" id="form-1">
        <section class="section-box shop-template mt-60">
            <div class="container">
                <div class="row mb-100">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5">
                        <h3>Tạo Tài Khoản</h3>
                        <div class="form-register mt-30 mb-30">
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Họ Và Tên *</label>
                                <input id="fullname" name="fullName" class="form-control" type="text" placeholder="Tên của bạn">
                                <span class="form-message"></span>

                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Email *</label>
                                <input id="email" name="email" class="form-control" type="text" placeholder="name@gmail.com">
                                <span class="form-message"></span>

                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Mật Khẩu *</label>
                                <input id="password" name="password" class="form-control" type="password" placeholder="******************">
                                <span class="form-message"></span>

                            </div>
                            <div class="form-group">
                                <label class="mb-5 font-sm color-gray-700">Nhập Lại Mật Khẩu *</label>
                                <input id="password_confirmation" name="password1" class="form-control" type="password" placeholder="******************">
                                <span class="form-message"></span>

                            </div>

                            <div class="form-group">
                                <input name="submit" class="font-md-bold btn btn-buy" type="submit" value="Đăng Kí">
                            </div>
                            <div class="mt-20"><span class="font-xs color-gray-500 font-medium">Đã Có Tài Khoản?</span><a class="font-xs color-brand-3 font-medium" href="?page=login"> Đăng Nhập</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </form>

</main>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mong muốn của chúng ta
        Validator({
            form: '#form-1',
            formGroupSelector: '.form-group',
            errorSelector: '.form-message',
            rules: [
                Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
                Validator.isEmail('#email'),
                Validator.minLength('#password', 6),
                Validator.isRequired('#password_confirmation'),
                Validator.isConfirmed('#password_confirmation', function() {
                    return document.querySelector('#form-1 #password').value;
                }, 'Mật khẩu nhập lại không chính xác')
            ],
            onSubmit: function(data) {
                // Call API
                console.log(data);
            }
        });
    });
</script>
<script>
    function Validator(options) {
        function getParent(element, selector) {
            while (element.parentElement) {
                if (element.parentElement.matches(selector)) {
                    return element.parentElement;
                }
                element = element.parentElement;
            }
        }

        var selectorRules = {};

        // Hàm thực hiện validate
        function validate(inputElement, rule) {
            var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
            var errorMessage;

            // Lấy ra các rules của selector
            var rules = selectorRules[rule.selector];

            // Lặp qua từng rule & kiểm tra
            // Nếu có lỗi thì dừng việc kiểm
            for (var i = 0; i < rules.length; ++i) {
                switch (inputElement.type) {
                    case 'radio':
                    case 'checkbox':
                        errorMessage = rules[i](
                            formElement.querySelector(rule.selector + ':checked')
                        );
                        break;
                    default:
                        errorMessage = rules[i](inputElement.value);
                }
                if (errorMessage) break;
            }

            if (errorMessage) {
                errorElement.innerText = errorMessage;
                getParent(inputElement, options.formGroupSelector).classList.add('invalid');
            } else {
                errorElement.innerText = '';
                getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
            }

            return !errorMessage;
        }

        // Lấy element của form cần validate
        var formElement = document.querySelector(options.form);
        if (formElement) {
            // Khi submit form
            formElement.onsubmit = function(e) {
                // e.preventDefault();

                var isFormValid = true;

                // Lặp qua từng rules và validate
                options.rules.forEach(function(rule) {
                    var inputElement = formElement.querySelector(rule.selector);
                    var isValid = validate(inputElement, rule);
                    if (!isValid) {
                        isFormValid = false;
                    }
                });

                if (isFormValid) {
                    // Trường hợp submit với javascript
                    if (typeof options.onSubmit === 'function') {
                        var enableInputs = formElement.querySelectorAll('[name]');
                        var formValues = Array.from(enableInputs).reduce(function(values, input) {

                            switch (input.type) {
                                case 'radio':
                                    values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                    break;
                                case 'checkbox':
                                    if (!input.matches(':checked')) {
                                        values[input.name] = '';
                                        return values;
                                    }
                                    if (!Array.isArray(values[input.name])) {
                                        values[input.name] = [];
                                    }
                                    values[input.name].push(input.value);
                                    break;
                                case 'file':
                                    values[input.name] = input.files;
                                    break;
                                default:
                                    values[input.name] = input.value;
                            }

                            return values;
                        }, {});
                        options.onSubmit(formValues);
                    }
                    // Trường hợp submit với hành vi mặc định
                    else {
                        formElement.submit();
                    }
                }
            }

            // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input, ...)
            options.rules.forEach(function(rule) {

                // Lưu lại các rules cho mỗi input
                if (Array.isArray(selectorRules[rule.selector])) {
                    selectorRules[rule.selector].push(rule.test);
                } else {
                    selectorRules[rule.selector] = [rule.test];
                }

                var inputElements = formElement.querySelectorAll(rule.selector);

                Array.from(inputElements).forEach(function(inputElement) {
                    // Xử lý trường hợp blur khỏi input
                    inputElement.onblur = function() {
                        validate(inputElement, rule);
                    }

                    // Xử lý mỗi khi người dùng nhập vào input
                    inputElement.oninput = function() {
                        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                        errorElement.innerText = '';
                        getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
                    }
                });
            });
        }

    }
    Validator.isRequired = function(selector, message) {
        return {
            selector: selector,
            test: function(value) {
                return value ? undefined : message || 'Vui lòng nhập trường này'
            }
        };
    }

    Validator.isEmail = function(selector, message) {
        return {
            selector: selector,
            test: function(value) {
                var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                return regex.test(value) ? undefined : message || 'Trường này phải là email';
            }
        };
    }

    Validator.minLength = function(selector, min, message) {
        return {
            selector: selector,
            test: function(value) {
                return value.length >= min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
            }
        };
    }

    Validator.isConfirmed = function(selector, getConfirmValue, message) {
        return {
            selector: selector,
            test: function(value) {
                return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
            }
        }
    }
</script>