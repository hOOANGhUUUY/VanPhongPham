<main>
    <div class="grid wide">
        <section class="row box_container_user">
            <div class="col l-4 m-12 c-12">
                <div class="box_nav_user">
                    <!-- Hình đại diện -->
                    <div class="avatar">
                        <img src="avatar.jpg" alt="Avatar">
                    </div>

                    <!-- Tên người dùng -->
                    <div class="user_name">Nguyễn Văn A</div>

                    <!-- Menu tài khoản -->
                    <ul class="menu_account">
                        <li class="menu_item active">
                            <a href="#" class="menu_link">Thông tin sản phẩm</a>
                            <!-- Menu con -->
                            <ul class="submenu">
                                <li><a href="#profile">Hồ sơ cá nhân</a></li>
                                <li><a href="#address">Địa chỉ</a></li>
                                <li><a href="#change_password">Đổi mật khẩu</a></li>
                            </ul>
                        </li>
                        <li class="dong"><a href="#orders">Đơn hàng của tôi</a></li>
                        <li class="dong"><a href="#voucher">Ví Voucher</a></li>
                        <li class="dong"><a href="#notifications">Thông báo</a></li>
                        <li class="dong"><a href="#favorites">Yêu thích</a></li>
                        <li class="dong"><a href="#reviews">Nhận xét của tôi</a></li>
                    </ul>
                </div>
            </div>

            <div class="col l-8 m-12 c-12 box_sub_banner">
                <div class="baner_uer">
                    <img src="/img/background_silver.webp" alt="">
                </div>
                <div class="container_user">
                    <!-- Hồ sơ cá nhân -->
                    <div id="profile" class="section active">
                        <h2>Hồ sơ cá nhân</h2>
                        <div class="form_group">
                            <input type="text" placeholder="Họ">
                            <input type="text" placeholder="Tên">
                            <input type="text" placeholder="Số điện thoại">
                            <input type="email" placeholder="Email">
                            <select>
                                <option>Giới tính</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                            <input type="date" placeholder="Ngày sinh">
                        </div>
                        <button class="btn_primary" onclick="saveProfile()">Lưu thay đổi</button>
                    </div>

                    <!-- Địa chỉ -->
                    <div id="address" class="section">
                        <h2>Địa chỉ</h2>
                        <div class="form_group">
                            <input type="text" placeholder="Họ*">
                            <input type="text" placeholder="Tên*">
                            <input type="text" placeholder="Điện thoại*">
                            <select>
                                <option>Việt Nam</option>
                            </select>
                            <select>
                                <option>Vui lòng chọn Tỉnh/Thành phố</option>
                            </select>
                            <select>
                                <option>Vui lòng chọn Quận/Huyện</option>
                            </select>
                            <select>
                                <option>Vui lòng chọn Xã/Phường</option>
                            </select>
                            <input type="text" placeholder="Địa chỉ">
                            <input type="text" placeholder="Mã bưu điện">
                        </div>
                        <button class="btn_primary" onclick="saveAddress()">Lưu địa chỉ</button>
                    </div>

                    <!-- Đổi mật khẩu -->
                    <div id="change_password" class="section">
                        <h2>Đổi mật khẩu</h2>
                        <div class="form_group">
                            <input type="password" placeholder="Mật khẩu hiện tại*">
                            <input type="password" placeholder="Mật khẩu mới*">
                            <input type="password" placeholder="Nhập lại mật khẩu mới*">
                        </div>
                        <button class="btn_primary" onclick="changePassword()">Đổi mật khẩu</button>
                    </div>
                </div>
            </div>
        </section>
    </div>




</main>
<script src="public/js/user.js"></script>