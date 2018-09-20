$(function () {
    $(".form-type li").click(function () {
        $(".form-type li").removeClass("current");
        $(this).addClass("current");
        if ($(this).hasClass("login")) {
            $(".form-detail-input .login-form").show();
            $(".form-detail-input .register-form").hide();
            $(".forgot-password").hide();
        }
        else {
            $(".form-detail-input .login-form").hide();
            $(".form-detail-input .register-form").show();
            $(".forgot-password").hide();
        }
    });

    $(".form-detail-input .forgot-pass").click(function () {
        $(".forgot-password").show();
        $(".forgot-password .forgot-form").show();
        $(".forgot-password .forgot-form-rerult").hide();
        $(".form-detail-input .login-form").hide();
    });

    $(".forgot-password .submit-email").click(function () {
        var username = $("#recover-username").val();
        $.ajax({
            url: '/Login/ValidateUserName',
            type: 'get',
            data: {
                username: username
            },
            success: function (result) {
                if (result == 'True') {
                    notification('warning', 'Tên đăng nhập không tồn tại', 'topCenter', false);
                    $("#recover-username").val("").focus();
                    setTimeout(function () {
                        $.noty.closeAll();
                    }, 2000);
                    return false;
                }
                else {
                    $.ajax({
                        url: "/Login/ForgotPassword",
                        type: "post",
                        data: {
                            username: username
                        },
                        success: function (result) {
                            if (result == "Success") {
                                $(".forgot-form").hide();
                                $(".forgot-form-rerult").html("Mật khẩu mới đã được gửi đến email của bạn. Vui lòng kiểm nha email để nhận mật khẩu mới!");
                                $(".forgot-form-rerult").show();
                            }
                            else {
                                notification('warning', 'Có lỗi xảy ra!', 'topCenter', true);
                                setTimeout(function () {
                                    $.noty.closeAll();
                                }, 2000);
                            }
                        }
                    });

                    return false;
                }
            }
        });
    });
});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}