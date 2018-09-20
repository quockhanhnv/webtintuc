function addLoadEvent(e) {
    if (document.readyState === "complete") {
        e()
    } else {
        var t = window.onload;
        if (typeof window.onload != "function") {
            window.onload = e
        } else {
            window.onload = function() {
                if (t) {
                    t()
                }
                e()
            }
        }
    }
}


/*Menu-top-fix*/
addLoadEvent(function() {
    var orgHeaderPos = $('#wrapper').offset().top;
    var lastScrollTop = 0;
    var navbarHeight = 52;
    $(window).scroll(function() {
        var st = $(window).scrollTop();
        if (st > orgHeaderPos) {
            if (st > lastScrollTop && st > navbarHeight) {
                // Scroll Down
                $(".header-top-fix").addClass("hidden");
                //$(".category-filter, .adsense-detail-bot-right").css("top", "5px");
            } else {
                // Scroll Up
                if (st + $(window).height() < $(document).height()) {
                    $(".header-top-fix").removeClass("hidden");
                    //$(".category-filter, .adsense-detail-bot-right").css("top", "65px");
                }
            }
            lastScrollTop = st;
        } else {
            $(".header-top-fix").addClass("hidden");
        }
    });
});


/*Menu-top-mobile-fix*/
addLoadEvent(function() {
    var mOrgHeaderPos = $('#wrapper').offset().top;
    var mDelta = 10;
    var mLastScrollTop = 0;
    var mNavbarHeight = $('.header-top-mobile-fix').outerHeight();
    $(window).scroll(function() {
        var mSt = $(window).scrollTop();
        if (mSt > mOrgHeaderPos) {
            $(".header-top-mobile-fix").removeClass("hidden");
            $(".search-mobile-header").css("top", "50px");
        } else {
            $(".header-top-mobile-fix").addClass("hidden");
            $(".search-mobile-header").css("top", "60px");
        }
    });
});


addLoadEvent(function() {
    $("ul.filter-list").perfectScrollbar();
    $(".search-tablet").click(function() {
        $(this).parent().find(".search-input-tablet").removeClass("hidden");
        return false;
    });
    $(".search-input-tablet .fa-times").click(function() {
        $(".search-input-tablet").addClass("hidden");
    });
    $(".header-top-mobile .search-mobile .fa-search").click(function() {
        $(".search-mobile-header").css("top", "60px");
        $(".search-mobile-header").toggleClass("hidden");
        if (!$(".search-mobile-header").hasClass("hidden")) {
            $(".search-mobile-header input").focus();
        }
    });
    $(".header-top-mobile-fix .search-mobile .fa-search").click(function() {
        $(".search-mobile-header").css("top", "50px");
        $(".search-mobile-header").toggleClass("hidden");
        if (!$(".search-mobile-header").hasClass("hidden")) {
            $(".search-mobile-header input").focus();
        }
    });
    //menu js
    $(".main-menu-nav .group-item").on("mouseenter", function() {
        var item = $(this);
        if (!$(this).hasClass("cate-item")) {
            var gId = $(this).attr("gId");
            var result = '<div class="cate-child pull-left"><ul><li cId="1"> <a href="/nha-cua-p213c1.html">Nh&#224; cửa</a></li><li cId="21"> <a href="/gia-dinh-p213c21.html">Gia đ&#236;nh</a></li></ul></div><div class="article-cate-child pull-right"><ul class="clear-fix"></ul></div>';
            $(item).find(".list-cate-child").html(result);
            var result = '<li><a href="/thiet-ke-noi-that-phong-ngu-mua-he-p214a40714.html"> <img alt="Thiết kế nội thất phòng ngủ mùa hè" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/hoabtt/23052012/images/mua.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/hoabtt/23052012/images/mua_191_136.jpg" /> <span>Thiết kế nội thất ph&#242;ng ngủ m&#249;a h&#232;</span> </a></li><li><a href="/nhung-thiet-ke-ho-boi-ly-tuong-cho-mua-he-nong-bong-p214a68812.html"> <img alt="Những thiết kế hồ bơi lý tưởng cho mùa hè nóng bỏng" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/hoabtt/23052013/images/boi.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/hoabtt/23052013/images/boi_191_136.jpg" /> <span>Những thiết kế hồ bơi l&#253; tưởng cho m&#249;a h&#232; n&#243;ng bỏng</span> </a></li><li><a href="/thiet-ke-san-vuon-mat-me-tranh-nong-mua-he-p214a92684.html"> <img alt="Thiết kế sân vườn mát mẻ tránh nóng mùa hè" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/vannn/27052014/images/thiet-ke-san-vuon-mat-me-tranh-nong-mua-he-lamsao.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/vannn/27052014/images/thiet-ke-san-vuon-mat-me-tranh-nong-mua-he-lamsao_191_136.jpg" /> <span>Thiết kế s&#226;n vườn m&#225;t mẻ tr&#225;nh n&#243;ng m&#249;a h&#232;</span> </a></li><li><a href="/cach-ket-hop-mau-hong-va-xanh-cho-ngoi-nha-mua-he-p214a38123.html"> <img alt="Cách kết hợp màu hồng và xanh cho ngôi nhà mùa hè" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/hoabtt/24042012/images/hong.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/hoabtt/24042012/images/hong_191_136.jpg" /> <span>C&#225;ch kết hợp m&#224;u hồng v&#224; xanh cho ng&#244;i nh&#224; m&#249;a h&#232;</span> </a></li>';
            $(".article-cate-child ul").html(result);
            // $.ajax({
            //     url: "/Home/Shared/GetIntroCategory",
            //     type: "get",
            //     data: {
            //         groupId: gId
            //     },
            //     success: function(result) {
            //         $(item).find(".list-cate-child").html(result);
            //     }
            // });
        } else {
            var cateId = $(this).attr("cateId");
            var url = $(this).find("a").attr("href");
            var result = '<li><a href="/cach-lam-nuoc-chanh-day-mat-lanh-cho-mua-he-p214a63797.html"> <img alt="Cách làm nước chanh dây mát lạnh cho mùa hè  " onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=~/Upload/News/2016/7/7/be22fdf963bece220af8bf026a490493-600x420.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Upload/News/2016/7/7/be22fdf963bece220af8bf026a490493-600x420_191_136.jpg" /> <span>C&#225;ch l&#224;m nước chanh d&#226;y m&#225;t lạnh cho m&#249;a h&#232;  </span> </a></li><li><a href="/sua-chua-kieu-hy-lap-giai-nhiet-mua-he-p214a73599.html"> <img alt="Sữa chua kiểu Hy Lạp giải nhiệt mùa hè" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/trangbh/30072013/images/sua-chua.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/trangbh/30072013/images/sua-chua_191_136.jpg" /> <span>Sữa chua kiểu Hy Lạp giải nhiệt m&#249;a h&#232;</span> </a></li><li><a href="/huong-dan-nau-che-dau-phong-cho-mua-he-nong-buc-p214a23575.html"> <img alt="Hướng dẫn nấu chè đậu phộng cho mùa hè nóng bức" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/hoabtt/images/chedauphong.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/hoabtt/images/chedauphong_191_136.jpg" /> <span>Hướng dẫn nấu ch&#232; đậu phộng cho m&#249;a h&#232; n&#243;ng bức</span> </a></li><li><a href="/me-xao-duong-thom-ngon-don-mua-he-sang-p214a90383.html"> <img alt="Me xào đường thơm ngon đón mùa hè sang" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/trangbh/19032014/images/me.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/trangbh/19032014/images/me_191_136.jpg" /> <span>Me x&#224;o đường thơm ngon đ&#243;n m&#249;a h&#232; sang</span> </a></li><li><a href="/sua-lac-dau-tay-bac-ha-tuoi-mat-mua-he-p214a90827.html"> <img alt="Sữa lắc dâu tây - bạc hà tươi mát mùa hè" onerror="this.src=&#39;https://media.lamsao.com/ThumbnailCrop.ashx?i=/Resources/CommunityUpload/phuonghh/27032014/images/phuonghh8.jpg&amp;w=191&amp;h=136&#39;" src="https://media.lamsao.com/Thumbnail/Cache//Resources/CommunityUpload/phuonghh/27032014/images/phuonghh8_191_136.jpg" /> <span>Sữa lắc d&#226;u t&#226;y - bạc h&#224; tươi m&#225;t m&#249;a h&#232;</span> </a></li>';
            $(item).find(".list-cate-child.list-articles ul").html(result);
            // $.ajax({
            //     url: "/Home/Shared/GetHotArticleIntro",
            //     type: "get",
            //     data: {
            //         cateId: cateId,
            //         count: 5
            //     },
            //     success: function(result) {
            //         $(item).find(".list-cate-child.list-articles ul").html(result);
            //     }
            // });
        }
    });
});

/*Search form*/
addLoadEvent(function() {
    $(".main-menu-nav .search-input-tablet input").keypress(function(e) {
        if (e.which == 13) {
            $(".search-form-table").submit();
        }
    });
});

/*Swiper*/
addLoadEvent(function() {
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 10
    });
});

/*Register subscribe email*/
addLoadEvent(function() {
    $(".register-subscribe").click(function() {
        var email = $(".subcribe-email-input").val();
        if (validateEmail(email)) {
            $(".register-subscribe").hide();
            $(".subcribe-email-input").hide();
            $(".ajax-loading").removeClass("hidden");
            setTimeout(function() {
                SubmitSubscribe();
            }, 1500);
        } else {
            notification('error', 'Email đăng ký không đúng định dạng!', 'center', false);
            setTimeout(function() {
                $.noty.closeAll();
            }, 1500);
        }
    });
    $(".subcribe-email-input").keypress(function(e) {
        var email = $(".subcribe-email-input").val();
        if (e.which == 13) {
            if (validateEmail(email)) {
                $(".register-subscribe").hide();
                $(".subcribe-email-input").hide();
                $(".ajax-loading").removeClass("hidden");
                setTimeout(function() {
                    SubmitSubscribe();
                }, 1500);
            } else {
                notification('warning', 'Email đăng ký không đúng định dạng!', 'center', false);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
        }
    });
});

function SubmitSubscribe() {
    var email = $(".subcribe-email-input").val();
    $.ajax({
        url: "/Home/Shared/RegisterSubscribe",
        type: "post",
        data: {
            email: email
        },
        success: function(result) {
            if (result == "Success") {
                notification('success', 'Đăng ký nhận bản tin thành công!', 'topCenter', false);
                $(".subcribe-email-input").val("");
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            } else {
                notification('error', result, 'center', false);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
            $(".register-subscribe").show();
            $(".subcribe-email-input").show();
            $(".ajax-loading").addClass("hidden");
        }
    });
}

/*Register subscribe email*/
addLoadEvent(function() {
    $(".receive-email .submit-email").click(function() {
        var email = $(".receive-email .email-input").val();
        if (validateEmail(email)) {
            $.ajax({
                url: "/Home/Shared/RegisterSubscribe",
                type: "post",
                data: {
                    email: email
                },
                success: function(result) {
                    if (result == "Success") {
                        notification('success', 'Đăng ký nhận bản tin thành công!', 'topCenter', false);
                        $(".receive-email .email-input").val("");
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    } else {
                        notification('warning', result, 'topCenter', false);
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    }
                }
            });
        } else {
            notification('warning', 'Email đăng ký không đúng định dạng!', 'topCenter', false);
            setTimeout(function() {
                $.noty.closeAll();
            }, 1500);
        }
    });
});

/*Validate form search*/
function valildateFormSearch(el) {
    var node = null;
    for (var i = 0; i < el.childNodes.length; i++) {
        if (el.childNodes[i].className == "search-input") {
            node = el.childNodes[i];
            break;
        }
    }

    if (node.value == "") {
        return false;
    }
    return true;
}

/*Show Poup Favorite*/
function showPopupFavorite() {
    var infoFavorite = getURLParameter('favorite');
    if (infoFavorite != '' && infoFavorite != undefined) {
        infoFavorite = decodeURIComponent(infoFavorite);
        var obj = JSON.parse(infoFavorite);

        $(".add-favorite-popup .article-id").val(obj.favoriteId);
        $(".add-favorite-popup .article-info img").attr("src", obj.favoriteImage);
        $(".add-favorite-popup .article-info span").html(obj.favoriteTitle);

        $.fancybox({
            href: '#favorite-group',
            padding: 0,
            scrollOutside: false,
            closeBtn: false,
            beforeShow: function() {
                loadFavoriteGroup();
            },
            helpers: {
                overlay: {
                    locked: true
                }
            }
        });
    }
}

/*Get URL parameter*/
function getURLParameter(name) {
    return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
}



showPopupFavorite();

/*Open Login Form*/
$("a.login-popup").fancybox({
    href: '#login-form',
    padding: 0,
    scrollOutside: false,
    helpers: {
        overlay: {
            locked: true
        }
    },
    beforeShow: function() {
        $("#login-form").attr("data-type", "login");
        $(".form-detail-input .login-form").show();
        $(".form-detail-input .register-form").hide();
        $(".forgot-password").hide();
        $(".form-type li").removeClass("current");
        $(".form-type li.login").addClass("current");
    }
});

/*Return to Top of page*/
$("#return-top-page").click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, '500');
});

$(window).scroll(function() {
    if ($("#return-top-page").length > 0) {
        if ($(window).scrollTop() > 100) {
            $("#return-top-page").css("display", "block");
        } else {
            $("#return-top-page").css("display", "none");
        }
    }
});

/*Process delete favorite article*/
$("body").on("click", ".remove-favorite-article", function(e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    $.ajax({
        url: "/UserInfos/RemoveFavoriteArticle",
        type: "POST",
        data: {
            articleId: id
        },
        success: function(result) {
            if (result == "Success") {
                $.fancybox.close();
                notification('success', 'Xóa yêu thích bài viết thành công!', 'topCenter', false);
                $('.remove-favorite-article[data-id="' + id + '"]').each(function() {
                    $(this).addClass("add-favorite-article").removeClass("active").removeClass("remove-favorite-article");
                });
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
        },
        failure: function(msg) {
            console.log(msg)
        }
    });
    return false;
});
/*Process add favorite article*/
$(".add-favorite-popup .finished").click(function() {
    var articleId = $(".add-new-group .article-id").val();
    var groupIds = new Array();

    $(".list-group-item input:checked").each(function() {
        groupIds.push($(this).val());
    });

    if (groupIds.length < 1) {
        notification("warning", "Chọn ít nhất một danh mục yêu thích", "topCenter", false);
        setTimeout(function() {
            $.noty.closeAll();
        }, 2000);
        return false;
    }

    $.ajax({
        traditional: true,
        url: "/UserInfos/AddFavoriteArticle",
        type: "POST",
        contentType: 'application/json',
        data: JSON.stringify({
            articleId: articleId,
            groupIds: groupIds
        }),
        success: function(result) {
            if (result == "Success") {
                $.fancybox.close();
                notification('success', 'Lưu bài viết yêu thích thành công!', 'topCenter', false);
                $('.add-favorite-article[data-id="' + articleId + '"]').each(function() {
                    $(this).addClass("remove-favorite-article").addClass("active").removeClass("add-favorite-article");
                });
                history.pushState('', '', window.location.pathname);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            } else {
                notification('error', 'Có lỗi xảy ra! Vui lòng thử lại!', 'topCenter', false);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
        }
    });
    return false;
});


$(".submit-new-group").click(function() {
    addNewGroup();
});

$(".new-group-name").keypress(function(e) {
    if (e.which == 13) {
        addNewGroup();
    }
});

/*Add favorite article*/
$("body").on("click", ".add-favorite-article", function(e) {
    e.preventDefault();
    var title = $(this).attr("data-title");
    var id = $(this).attr("data-id");
    var img = $(this).attr("data-img");
    $(".add-favorite-popup .article-id").val(id);
    $(".add-favorite-popup .article-info img").attr("src", img);
    $(".add-favorite-popup .article-info span").html(title);

    $.fancybox({
        href: '#login-form',
        padding: 0,
        scrollOutside: false,
        helpers: {
            overlay: {
                locked: true
            }
        },
        beforeShow: function() {
            $("#login-form").attr("data-type", "favorite");
            $(".form-detail-input .login-form").show();
            $(".form-detail-input .register-form").hide();
            $(".forgot-password").hide();
            $(".form-type li").removeClass("current");
            $(".form-type li.login").addClass("current");
        }
    });

});

$('.login-popup-input .username, .login-popup-input .password').keypress(function(e) {
    if (e.which == 13) {
        loginPopup();
    }
});

/*Login popup*/
function loginPopup() {
    var username = $('.login-popup-input .username').val();
    var password = $('.login-popup-input .password').val();
    if (username.trim() == '') {
        alert("Nhập vào tên đăng nhập!");
        $('.login-popup-input .username').focus();
        return false;
    }
    if (password.trim() == '') {
        alert('Nhập vào mật khẩu!');
        $('.login-popup-input .password').focus();
        return false;
    }

    $.ajax({
        type: "POST",
        data: {
            'username': username,
            'password': password
        },
        url: "/Login/LoginPopup",
        success: function(result) {
            if (result == 'Success') {
                redirectAfterLogin();
            } else {
                notification('warning', 'Thông tin đăng nhập không chính xác !', 'topCenter', false);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
        },
        failure: function(msg) {
            alert(msg)
        }
    });
}



/*Add new group*/
function addNewGroup() {
    var name = $(".new-group-name").val();
    if (name.trim() == '') {
        alert("Nhập vào tên nhóm yêu thích");
        $(".new-group-name").focus();
        return false;
    }

    $.ajax({
        type: "POST",
        dataType: "text",
        data: "name=" + name,
        url: "/UserInfos/CreateFavoriteGroup",
        success: function(text) {
            if (text == "Success") {
                loadFavoriteGroup();
                notification('success', 'Thêm mới nhóm yêu thích thành công!', 'topCenter', false);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
                setTimeout(function() {
                    $("ul.list-group-item li:first-child input[type='checkbox']").attr('checked', 'checked');
                }, 500);
                $(".new-group-name").val("");
            } else {
                notification('error', 'Có lỗi xảy ra! Vui lòng thử lại!', 'topCenter', true);
                setTimeout(function() {
                    $.noty.closeAll();
                }, 1500);
            }
        },
        failure: function(msg) {
            alert(msg)
        }
    });
    return false;
}


/*Load Favorite Group*/
function loadFavoriteGroup() {
    var id = $(".add-favorite-popup .article-id").val();
    $.ajax({
        type: "GET",
        data: "articleId=" + id,
        url: "/UserInfos/LoadFavoriteGroup",
        success: function(result) {
            $("ul.list-group-item").html(result);
            $(".add-favorite-popup .list-group ul").perfectScrollbar();
        },
        failure: function(msg) {
            alert(msg)
        }
    });
}

/*Sign Facebook*/
function signFacebook() {
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
            token = response.authResponse.accessToken;
            $.ajax({
                type: "GET",
                dataType: "text",
                data: "token=" + token,
                url: "/Login/LoginByFacebook",
                success: function(text) {
                    if (text != "False") {
                        redirectAfterLogin();
                    } else {
                        notification('error', 'Thông tin đăng nhập không đúng! Vui lòng thử lại!', 'topCenter', false);
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    }
                },
                failure: function(msg) {
                    alert(msg)
                }
            });
            return false;
        } else {
            login();
        }
    });
    return false;
}

function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            token = response.authResponse.accessToken;
            $.ajax({
                type: "GET",
                dataType: "text",
                data: "token=" + token,
                url: "/Login/LoginByFacebook",
                success: function(text) {
                    if (text != "NOT_EXISTS") {
                        redirectAfterLogin();
                    } else {
                        notification('error', 'Thông tin đăng nhập không đúng! Vui lòng thử lại!', 'topCenter', false);
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    }
                },
                failure: function(msg) {
                    alert(msg)
                }
            });
            return false;
        }

    }, {
        scope: 'email'
    });
}

function redirectAfterLogin() {
    var title = $(".add-favorite-popup .article-info span").html();
    var id = $(".add-favorite-popup .article-id").val();
    var img = $(".add-favorite-popup .article-info img").attr("src");

    if ($("#login-form").attr("data-type") == "favorite") {
        window.location = window.location.pathname + '?favorite={"favoriteId":' + id + ',"favoriteTitle":"' + title + '", "favoriteImage":"' + img + '"}';
    } else {
        $.fancybox.close();
        notification('success', 'Đăng nhập hệ thống thành công !', 'topCenter', true);
        setTimeout(function() {
            $.noty.closeAll();
        }, 1500);
    }
}

/*Notification*/
function notification(type, text, position, reload) {
    var n = noty({
        text: text,
        type: type,
        dismissQueue: true,
        template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
        theme: 'relax',
        layout: position,
        animation: {
            open: 'animated fadeIn',
            close: 'animated fadeOut',
            easing: 'swing',
            speed: 500
        },
        theme: 'notify-theme',
        callback: {
            afterClose: function() {
                if (reload == true) {
                    location.reload();
                }
            }
        }
    });
    return n;
}


/*Login with G+*/
// function onLoadCallback() {
//     //gapi.client.setApiKey('AcCiMBBd87UyGOxo_6N_ss39');
//     gapi.client.load('plus', 'v1', function() {});
// }

// function loginGoogle() {
//     var myParams = {
//         'clientid': '705775032256-20r6hpol0ulnfia4h0j07onin0okc9ii.apps.googleusercontent.com',
//         'cookiepolicy': 'single_host_origin',
//         'callback': 'loginCallback',
//         'approvalprompt': 'force',
//         'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
//     };
//     gapi.auth.signIn(myParams);
// }

// function loginCallback(result) {
//         if (result['status']['signed_in']) {
//             var request = gapi.client.plus.people.get({
//                 'userId': 'me'
//             });
//             request.execute(function(resp) {
//                 var email = '';
//                 if (resp['emails']) {
//                     for (i = 0; i < resp['emails'].length; i++) {
//                         if (resp['emails'][i]['type'] == 'account') {
//                             email = resp['emails'][i]['value'];
//                         }
//                     }
//                 }

//                 var name = resp['displayName'];
//                 var image = resp['image']['url'];
//                 var id = resp['id'];

//                 $.ajax({
//                     url: '/Login/LoginByGoogle',
//                     type: 'POST',
//                     data: {
//                         name: name,
//                         email: email,
//                         id: id,
//                         image: image
//                     },
//                     success: function(result) {
//                         if (result != "False") {
//                             redirectAfterLogin();
//                         }
//                     },
//                     failure: function(msg) {
//                         alert(msg);
//                     }
//                 });
//             });

//         }

//     }
//     (function() {
//         var po = document.createElement('script');
//         po.type = 'text/javascript';
//         po.async = true;
//         po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
//         var s = document.getElementsByTagName('script')[0];
//         s.parentNode.insertBefore(po, s);
//     })();


/*Register*/
$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
}, jQuery.validator.format("Tên đăng nhập không hợp lệ!"));

$('#registerForm').validate({
    rules: {
        UserName: {
            required: true,
            regx: /^[0-9a-zA-Z]+$/,
            minlength: 1,
            maxlength: 20
        },
        Password: {
            required: true,
            minlength: 6,
            maxlength: 32
        },
        ConfirmPassword: {
            required: true,
            minlength: 6,
            equalTo: '#password'
        },
        Email: {
            required: true,
            email: true
        }
    },
    errorPlacement: function(error, element) {},
    messages: {
        UserName: {
            required: "Nhập vào tên đăng nhập",
            maxlength: "Tên đăng nhập dài tối đa 20 ký tự"
        },
        Password: {
            required: "Nhập vào mật khẩu",
            minlength: "Mật khẩu dài tối thiểu 6 ký tự",
            maxlength: "Mật khẩu dài tối đa 32 ký tự"
        },
        ConfirmPassword: {
            required: "Nhập vào xác nhận mật khẩu",
            minlength: "Xác nhận mật khẩu không trùng khớp",
            equalTo: "Xác nhận mật khẩu không trùng khớp"
        },
        Email: {
            required: 'Nhập vào email',
            email: 'Email không đúng định dạng'
        }
    }
});

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function validateRegister() {
    if ($('#registerForm').valid()) {
        var password = $("#password").val();
        var email = $("#email").val();
        var userName = $("#username").val();
        $.ajax({
            url: '/Login/ValidateUserName',
            type: 'get',
            data: {
                username: userName
            },
            success: function(result) {
                if (result == 'False') {
                    notification('warning', 'Tên đăng nhập đã tồn tại', 'topCenter', false);
                    $("#username").focus();
                    setTimeout(function() {
                        $.noty.closeAll();
                    }, 2000);
                    return false;
                } else {
                    $.noty.closeAll();
                    $.ajax({
                        url: '/Login/RegisterPopup',
                        type: 'post',
                        data: {
                            password: password,
                            username: userName,
                            email: email
                        },
                        success: function(result) {
                            if (result == "Success") {
                                notification('success', 'Đăng ký tài khoản thành công', 'topCenter', true);
                                $("#username").focus();
                                setTimeout(function() {
                                    $.noty.closeAll();
                                }, 1500);
                            }
                        }
                    });
                }
            }
        });
    } else {
        var validator = $("#registerForm").validate();
        notification('warning', validator.errorList[0].message, 'topCenter', false);
        setTimeout(function() {
            $.noty.closeAll();
        }, 2000);
        $(validator.errorList[0].element).focus();
    }

    return false;
}



/*Register Subscribe*/
addLoadEvent(function() {
    $(".receive-email .submit-email").click(function() {
        var email = $(".receive-email .email-input").val();
        if (validateEmail(email)) {
            $.ajax({
                url: "/Home/Shared/RegisterSubscribe",
                type: "post",
                data: {
                    email: email
                },
                success: function(result) {
                    if (result == "Success") {
                        notification('success', 'Đăng ký nhận bản tin thành công!', 'topCenter', false);
                        $(".receive-email .email-input").val("");
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    } else {
                        notification('warning', result, 'topCenter', false);
                        setTimeout(function() {
                            $.noty.closeAll();
                        }, 1500);
                    }
                }
            });
        } else {
            notification('warning', 'Email đăng ký không đúng định dạng!', 'topCenter', false);
            setTimeout(function() {
                $.noty.closeAll();
            }, 1500);
        }
    });
});