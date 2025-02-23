<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php if(isset($base_url)){echo $base_url;} ?>public/css/Grid.css">
    <link rel="stylesheet" href="<?php if(isset($base_url)){echo $base_url;} ?>public/css/index.css">
    <?php if (isset($cssFile)) : ?>
        <link rel="stylesheet" href="<?php if(isset($base_url)){echo $base_url;} ?>public/css/<?=$cssFile?>">
    <?php endif; ?>



    <style>
        * {
            box-sizing: border-box;
        }

        .col {
            text-align: center;
            /* background-color: #ccc; */
            background-clip: content-box;
            /* margin-top: 8px;
            margin-bottom: 8px; */
        }
    </style>
</head>

<body>

    <div>
        <div class="bannerTop_and_menu">
            <div class="bannerTop">
                <div class="grid wide">
                    <section class="row home_banner">
                        <div class="col l-12 m-0 c-0 banner">
                            <div class="home_banner_top">
                                <img src="<?php if(isset($base_url)){echo $base_url;} ?>public/images/LDPCTT1_herobanner15.01_Resize_1263x60.webp" alt="">
                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </div>
        <div class="home_menu_top">
            <div class="grid wide">
                <section class="row home_menu">
                    <div class="col l-2 m-12 c-12 logo">
                        <div class="home_logo">
                            <img src="<?php if(isset($base_url)){echo $base_url;} ?>public/images/fahasa-logo.webp" alt="">
                        </div>
                    </div>
                    <div class="col l-1 m-2 c-2 menu">
                        <div class="home_category">
                            <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_menu.svg"
                                alt="Icon"
                                style="width: 50px; height: 50px; margin-right: 10px; margin-left: 10px; vertical-align: middle;">

                            <div class="sub_category_top">
                                <div class="box_sub">
                                    <ul id="menu-list">
                                        <?php foreach ($data['dataCate'] as $cate) { ?>
                                            <li class="menu-item" data-target="cate-<?= $cate['id'] ?>"><?= $cate['name'] ?></li>
                                        <?php } ?>
                                    </ul>
                                    <div class="grid wide detail_cate">
                                        <?php
                                        foreach ($data['dataCate'] as $cate) {
                                        ?>
                                            <div id="cate-<?= $cate['id'] ?>" class="detail-category row">
                                                <?php
                                                foreach ($cate['overall_fields'] as $cateOverall) {
                                                ?>
                                                    <div class="col l-3 m-4 c-6">
                                                        <div class="detail">
                                                            <h6><?= $cateOverall['name'] ?></h6>
                                                            <div class="cate">
                                                                <?php
                                                                foreach ($cateOverall['specific_genres'] as $cateSpecific) {
                                                                ?>
                                                                    <span><?= $cateSpecific['name'] ?></span>
                                                                <?php
                                                                }
                                                                ?>
                                                            </div>
                                                            <div class="xem_them">
                                                                <a href="#">Xem thêm</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-6 m-8 c-6 menu search">
                        <div class="home_search">
                            <span><i class="fa-solid fa-search"></i></span>
                            <input type="text" placeholder="Tìm kiếm">
                        </div>
                    </div>
                    <div class="col l-1 m-0 c-0 menu">
                        <div class="home_notification">
                            <span><i class="fa-solid fa-bell"></i></span>
                            <span>Thông báo</span>
                        </div>
                    </div>
                    <div class="col l-1 m-1 c-2 menu">
                        <div class="home_cart">
                            <span>
                                <i class="fa-solid fa-shopping-cart"></i>
                                <span id="cart-count" class="cart-count">0</span>
                                <span id="cart-count" class="cart-count">3</span>
                            </span>
                            <span>Giỏ hàng</span>
                            <div class="cart-items">
                                <ul>

                                    <li >
                                        <img src="<?php if(isset($base_url)){echo $base_url;}?>public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Product 2">
                                        <span>Product 2</span>
                                        <span>Số lượng: 2</span>
                                        <span>Giá: 200,000 VND</span>
                                        <button class="remove-item">Xóa</button>
                                    </li>
                                    <li >
                                        <img src="<?php if(isset($base_url)){echo $base_url;}?>public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Product 3">
                                        <span>Product 3</span>
                                        <span>Số lượng: 1</span>
                                        <span>Giá: 150,000 VND</span>
                                        <button class="remove-item">Xóa</button>
                                    </li>
                                </ul>
                                <div class="cart-summary">
                                    <span>Tổng tiền: 650,000 VND</span>
                                    <a href="" class="view-cart-btn">Xem giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset($_SESSION['name_user'])) { ?>
                        <a href="khach-hang">
                            <div class="col l-1 m-1 c-2 menu">
                                <div class="home_account">
                                    <span><i class="fa-solid fa-user"></i></span>
                                    <?= $_SESSION['name_user'] ?>
                                    <!-- Sub-account hiển thị khi hover vào "Tài khoản" -->
                                    <div class="sub-account">
                                        <ul>
                                            <li class="logout"><a href="logout">Đăng Xuất</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </a>

                    <?php   } else { ?>

                        <div class="col l-1 m-1 c-2 menu">
                            <div class="home_account">
                                <span><i class="fa-solid fa-user"></i></span>
                                Tài khoản
                                <!-- Sub-account hiển thị khi hover vào "Tài khoản" -->
                                <div class="sub-account">
                                    <ul>
                                        <li class="login"><a href="#login">Đăng Nhập</a></li>
                                        <li class="register"><a href="#register">Đăng Ký</a></li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                    <?php
                    }
                    ?>
                    <!-- <div class="col l-1 m-1 c-2 menu">
                        <div class="home_account">
                            <span><i class="fa-solid fa-user"></i></span>
                            Tài khoản
                            <div class="sub-account">
                                <ul>
                                    <li class="login"><a href="#login">Đăng Nhập</a></li>
                                    <li class="register"><a href="#register">Đăng Ký</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->




                </section>
            </div>
        </div>
        <!-- đăng nhập   -->

        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="login-overlay hidden" id="login-overlay">
                        <div class="login-box">
                            <h2>Đăng Nhập</h2>
                            <form id="login-form" action="login" method="POST">
                                <div class="login-input-group">
                                    <label for="login-email">Email</label>
                                    <input type="text" name="login-email" id="login-email" class="login-input">
                                    <span style="color:red;"><?php if (isset($data['errorLogin']['email'])) echo $data['errorLogin']['email'] ?></span>
                                </div>
                                <div class="login-input-group password-container">
                                    <label for="login-password">Mật khẩu</label>
                                    <input type="password" name="login-password" id="login-password" class="login-input">
                                    <span style="color:red;"><?php if (isset($data['errorLogin']['password'])) echo $data['errorLogin']['password'] ?></span>

                                    <i class="fa-solid fa-eye login-toggle-password" id="login-toggle-password"></i>
                                </div>
                                <button type="submit" class="login-btn">Đăng Nhập</button>
                                <div class="login-forgot-password">
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- đăng nhập   -->


        <!-- đăng ký  -->
        <div class="grid wide">
            <div class="row">
                <div class="col l-12 m-12 c-12">
                    <div class="register-overlay hidden" id="register-overlay">
                        <!-- Hộp đăng ký -->
                        <div class="register-box">
                            <h2>Đăng Ký</h2>
                            <form id="register-form" action="dang-ky" method="POST">
                                <!-- Nhập họ tên -->
                                <div class="register-input-group">
                                    <label for="register-name">Họ và Tên</label>
                                    <input type="text" id="register-name" class="register-input"
                                        placeholder="Nhập họ và tên" required name="register-name">
                                </div>
                                <!-- Nhập email -->
                                <div class="register-input-group">
                                    <label for="register-email">Email</label>
                                    <input type="email" id="register-email" name="register-email" class="register-input"
                                        placeholder="Nhập email" required>
                                </div>
                                <!-- Nhập số điện thoại -->
                                <div class="register-input-group">
                                    <label for="register-phone">Số điện thoại</label>
                                    <input type="text" id="register-phone" name="register-phone" class="register-input"
                                        placeholder="Nhập số điện thoại" required>
                                </div>
                                <!-- Nhập mật khẩu -->
                                <div class="register-input-group password-container">
                                    <label for="register-password">Mật khẩu</label>
                                    <input type="password" id="register-password" name="register-password" class="register-input"
                                        placeholder="Nhập mật khẩu" required>
                                    <i class="fa-solid fa-eye register-toggle-password"
                                        id="register-toggle-password"></i>
                                </div>
                                <!-- Nhập lại mật khẩu -->
                                <div class="register-input-group password-container">
                                    <label for="register-password-repeat">Nhập lại mật khẩu</label>
                                    <input type="password" id="register-password-repeat" name="register-password-repeat" class="register-input"
                                        placeholder="Nhập lại mật khẩu" required>
                                    <i class="fa-solid fa-eye register-toggle-password"
                                        id="register-toggle-password-repeat"></i>
                                </div>
                                <button type="submit" class="register-btn">Đăng Ký</button>
                                <div class="register-forgot-password">
                                    <a href="#">Quên mật khẩu?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- đăng ký  -->
        <?php require_once $viewFile; ?>
        <footer>
            Đây là footer
        </footer>
    </div>

</body>
<script src="<?php if(isset($base_url)){echo $base_url;} ?>public/js/index.js"></script>
<script src="<?php if(isset($base_url)){echo $base_url;} ?>public/js/auth.js"></script>

</html>