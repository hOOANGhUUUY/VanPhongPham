<div class="grid wide">

    <section class="row home_banner_big">
        <div class="col l-8 m-12 c-12">
            <div class="banner_big">
                <div class="slides">
                    <?php
                    // if (isset($_SESSION['user'])) {
                    //     print_r($_SESSION['user']);
                    // }
                    // print_r($data['user']);

                    // var_dump($data['dataBanner']);
                    foreach ($data['dataBanner'] as $banner) {

                    ?>
                        <img src="public/images/<?= $banner['image'] ?>" alt="Slide <?= $banner['title'] ?>">
                    <?php } ?>

                </div>
                <div class="dots">
                    <span class="dot" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </div>
        </div>
        <div class="col l-4 m-0 c-0 box_sub_banner">
            <div class="sub_banner">
                <div class="box_image">
                    <img src="public/images/UuDai_T1_392x156.webp" alt="">
                </div>
                <div class="box_image">
                    <img src="public/images/UuDai_T1_392x156.webp" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
<main>
    <div class="grid wide">
        <section class="row">
            <div class="col l-3 m-0 c-0 box_flash_sale">
                <a href="#">
                    <img src="public/images/LDPCTT1_flashsale_resize_310x210_2.webp" alt="">
                </a>
            </div>
            <div class="col l-3 m-0 c-0 box_flash_sale">
                <a href="#">
                    <img src="public/images/LDPCTT1_flashsale_resize_310x210_2.webp" alt="">

                </a>
            </div>
            <div class="col l-3 m-0 c-0 box_flash_sale">
                <a href="#">
                    <img src="public/images/LDPCTT1_flashsale_resize_310x210_2.webp" alt="">

                </a>
            </div>
            <div class="col l-3 m-0 c-0 box_flash_sale">
                <a href="#">
                    <img src="public/images/LDPCTT1_flashsale_resize_310x210_2.webp" alt="">

                </a>
            </div>
        </section>

        <section class="genres">
            <div class="grid wide">
                <div class="box_item row">
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>
                    <div class="item col l-2 m-2 c-2">
                        <img src="public/images/Icon_1501_120x120_1.png" alt="">
                        <span>Săn sale tết sang</span>
                    </div>

                </div>
            </div>
        </section>
    </div>


    <section class="flash_sale_slide">
        <div class="grid wide">
            <div class="flash_top">
                <h1>Flash sale</h1>
                <a href="#">Xem tất cả</a>
            </div>
            <div class="row ">
                <div class="col l-3 m-3 c-4">
                    <div class="product">
                        <a href="#">
                            <div class="img">
                                <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                    alt="Product">
                            </div>
                        </a>
                        <div class="product-info">
                            <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                            <div class="price">
                                <span class="sale-price">200,000 VND</span>
                                <span class="discount">-20%</span>
                            </div>
                            <div class="original-price">Giá gốc: 250,000 VND</div>

                            <!-- Thanh đã bán -->
                            <div class="sold">
                                <label for="sold-progress">Đã bán: 150</label>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                    <!-- 60% có thể thay đổi -->
                                </div>
                            </div>
                            <div class="icons">
                                <div class="icon-details">
                                    <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                </div>
                                <div class="icon-cart">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <!-- Icon thêm vào giỏ hàng -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-3 c-4">
                    <div class="product">
                        <a href="#">
                            <div class="img">
                                <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                    alt="Product">
                            </div>
                        </a>
                        <div class="product-info">
                            <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                            <div class="price">
                                <span class="sale-price">200,000 VND</span>
                                <span class="discount">-20%</span>
                            </div>
                            <div class="original-price">Giá gốc: 250,000 VND</div>

                            <!-- Thanh đã bán -->
                            <div class="sold">
                                <label for="sold-progress">Đã bán: 150</label>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                    <!-- 60% có thể thay đổi -->
                                </div>
                            </div>
                            <div class="icons">
                                <div class="icon-details">
                                    <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                </div>
                                <div class="icon-cart">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <!-- Icon thêm vào giỏ hàng -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-3 c-4">
                    <div class="product">
                        <a href="#">
                            <div class="img">
                                <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                    alt="Product">
                            </div>
                        </a>
                        <div class="product-info">
                            <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                            <div class="price">
                                <span class="sale-price">200,000 VND</span>
                                <span class="discount">-20%</span>
                            </div>
                            <div class="original-price">Giá gốc: 250,000 VND</div>

                            <!-- Thanh đã bán -->
                            <div class="sold">
                                <label for="sold-progress">Đã bán: 150</label>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                    <!-- 60% có thể thay đổi -->
                                </div>
                            </div>
                            <div class="icons">
                                <div class="icon-details">
                                    <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                </div>
                                <div class="icon-cart">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <!-- Icon thêm vào giỏ hàng -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-3 m-3 c-4">
                    <div class="product">
                        <a href="#">
                            <div class="img">
                                <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                    alt="Product">
                            </div>
                        </a>
                        <div class="product-info">
                            <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                            <div class="price">
                                <span class="sale-price">200,000 VND</span>
                                <span class="discount">-20%</span>
                            </div>
                            <div class="original-price">Giá gốc: 250,000 VND</div>

                            <!-- Thanh đã bán -->
                            <div class="sold">
                                <label for="sold-progress">Đã bán: 150</label>
                                <div class="progress-bar">
                                    <div class="progress" style="width: 60%;"></div>
                                    <!-- 60% có thể thay đổi -->
                                </div>
                            </div>
                            <div class="icons">
                                <div class="icon-details">
                                    <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                </div>
                                <div class="icon-cart">
                                    <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    <!-- Icon thêm vào giỏ hàng -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- sự kiện  -->
    <section class="grid wide">
        <div class="row new_event" style="background-image: url('public/images/Web_BlockTet2025_v2.webp')">
            <div class="col l-12 m-12 c-12">
                <div class="title"></div>
                <div class="slideshow-container">
                    <div class="box_content_event">
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>

                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <div class="product product_event">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp"
                                        alt="Product">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name">Tên sản phẩm dài hiển thị tối đa 2 dòng</div>
                                <div class="price">
                                    <span class="sale-price">200,000 VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: 250,000 VND</div>
                            </div>
                        </div>
                        <!-- Thêm các sản phẩm khác -->
                    </div>
                    <!-- Nút điều hướng -->
                    <button class="prev"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="next"><i class="fa-solid fa-chevron-right"></i></button>
                </div>



            </div>
        </div>
    </section>

    <!-- sản phẩm bán chạy  -->
    <div class="grid wide ">

        <div class="row box_best_seller">
            <div class="col l-12 m-12 c-12 box_title">
                <h3>Sản phẩm bán chạy</h3>
            </div>
            <?php
            // print_r($data['dataProductSoldCount']);
            foreach ($data['dataProductSoldCount'] as $product) {
                extract($product);
                if ($price_sale !== null) { ?>
                    <div class="col l-3 m-3 c-4">
                        <div class="product">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/<?= $image ?>" alt="<?= $name ?>">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name"><?= $name ?></div>
                                <div class="price">
                                    <span class="sale-price"><?= $price_sale ?></span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price"><?= $price ?></div>

                                <!-- Thanh đã bán -->
                                <div class="sold">
                                    <label for="sold-progress">Đã bán: <?= $sold_count ?></label>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 60%;"></div> <!-- 60% có thể thay đổi -->
                                    </div>
                                </div>
                                <div class="icons">
                                    <div class="icon-details">
                                        <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                    </div>
                                    <div class="icon-cart">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <!-- Icon thêm vào giỏ hàng -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col l-3 m-3 c-4">
                        <div class="product">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/<?= $image ?>" alt="<?= $name ?>">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name"><?= $name ?></div>
                                <div class="price">
                                    <span class="sale-price"><?= $price ?></span>
                                    <!-- <span class="discount">-20%</span> -->
                                </div>
                                <div class="original-price" style="height: 16px;"></div>

                                <!-- Thanh đã bán -->
                                <div class="sold">
                                    <label for="sold-progress">Đã bán: <?= $sold_count ?></label>
                                    <div class="progress-bar">
                                        <div class="progress" style="width: 60%;"></div> <!-- 60% có thể thay đổi -->
                                    </div>
                                </div>
                                <div class="icons">
                                    <div class="icon-details">
                                        <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                    </div>
                                    <div class="icon-cart">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <!-- Icon thêm vào giỏ hàng -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

            <div class="col l-12 m-12 c-12 box_btn">
                <a href="#">Xem thêm</a>
            </div>
        </div>
    </div>



    <section class="grid wide">
        <div class="row category_desktop">
            <div class="title">
                <img src="https://cdn0.fahasa.com/skin/frontend/ma_vanese/fahasa/images/ico_menu.svg" alt="Icon"
                    style="width: 40px; height: 40px; margin-right: 10px; margin-left: 10px; vertical-align: middle;">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <div class="hr_item"></div>
            <div class="grid wide">
                <div class="row">
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                    <div class="col l-1 m-0 c-0 box_category_item">
                        <a href="#">
                            <img src="public/images/image_1_.webp" alt="">
                            <span>Thú Bông</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="grid wide">
        <div class="row box_product_title">
            <div class="col l-12 m-12 c-12 box_title">
                <div class="title">
                    <h3>Sản phẩm mới</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            // print_r($data['dataNewProduct']);
            foreach ($data['dataNewProduct'] as $product) {
                extract($product);
                if ($price_sale !== null) { ?>
                    <div class="col l-2-4 m-3 c-6">
                        <div class="product new_product">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/<?= $image ?>" alt="<?= $name ?>">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name"><?= $name ?></div>
                                <div class="price">
                                    <span class="sale-price"><?= $price_sale ?> VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price">Giá gốc: <?= $price ?> VND</div>

                                <!-- Thanh đã bán -->
                                <div class="sold">
                                    <span>Đã bán:</span>
                                    <strong><?= $sold_count ?></strong> <!-- Hiển thị số lượng đã bán -->
                                </div>
                                <div class="icons">
                                    <div class="icon-details">
                                        <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                    </div>
                                    <div class="icon-cart">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <!-- Icon thêm vào giỏ hàng -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col l-2-4 m-3 c-6">
                        <div class="product new_product">
                            <a href="#">
                                <div class="img">
                                    <img src="public/images/<?= $image ?>" alt="<?= $name ?>">
                                </div>
                            </a>
                            <div class="product-info">
                                <div class="product-name"><?= $name ?></div>
                                <div class="price">
                                    <span class="sale-price"><?= $price ?> VND</span>
                                    <span class="discount">-20%</span>
                                </div>
                                <div class="original-price" style="height: 16px;"></div>

                                <!-- Thanh đã bán -->
                                <div class="sold">
                                    <span>Đã bán:</span>
                                    <strong><?= $sold_count ?></strong> <!-- Hiển thị số lượng đã bán -->
                                </div>
                                <div class="icons">
                                    <div class="icon-details">
                                        <i class="fa fa-search" aria-hidden="true"></i> <!-- Icon chi tiết -->
                                    </div>
                                    <div class="icon-cart">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <!-- Icon thêm vào giỏ hàng -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            <?php }
            } ?>



        </div>

    </section>

    <!-- bài viết  -->
    <section class="grid wide">
        <div class="row box_post">
            <!-- Post 1 -->
            <div class="col l-12 m-12 c-12 title_box">
                <h3>Bài viết</h3>
            </div>
            <div class="col l-4 m-4 c-6 post-item">
                <div class="post">
                    <div class="post-image">
                        <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Post 1">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Tiêu đề bài viếdsadasdsadsadsadsadsadsadasdsadasdsat 1</h3>
                        <p class="post-description">Mô tả ngắn về bài at 1...</p>
                        <a href="#" class="read-more">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-4 c-6 post-item">
                <div class="post">
                    <div class="post-image">
                        <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Post 1">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Tiêu đề bài viết 1</h3>
                        <p class="post-description">Mô tả ngắn về bài viết 1...</p>
                        <a href="#" class="read-more">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-4 c-6 post-item">
                <div class="post">
                    <div class="post-image">
                        <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Post 1">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Tiêu đề bài viết 1</h3>
                        <p class="post-description">Mô tả ngắn về bài viết 1.</p>
                        <a href="#" class="read-more">Xem thêm</a>
                    </div>
                </div>
            </div>
            <div class="col l-4 m-4 c-6 post-item">
                <div class="post">
                    <div class="post-image">
                        <img src="public/images/z5962756846307_09f98e17033be0b3285bde3bf5e77df1.webp" alt="Post 1">
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">Tiêu đề bài viết 1</h3>
                        <p class="post-description">Mô tả ngắn về bài viết 1...</p>
                        <a href="#" class="read-more">Xem thêm</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- bài viết  -->

</main>