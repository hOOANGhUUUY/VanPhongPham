document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;

    const slides = document.querySelector('.slides');
    const dots = document.querySelectorAll('.dot');

    function showSlide(index) {
        currentSlide = index;
        const offset = -index * 100;
        slides.style.transform = `translateX(${offset}%)`;
        dots.forEach(dot => dot.classList.remove('active'));
        dots[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % dots.length;
        showSlide(currentSlide);
    }

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => showSlide(index));
    });

    setInterval(nextSlide, 4000); // Tự động chuyển slide sau mỗi 5 giây

    // Hiển thị slide đầu tiên
    showSlide(0);

    // slide event 
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const slideshow = document.querySelector('.box_content_event');
    const products = document.querySelectorAll('.box_content_event .product');

    const productWidth = 230 + 10; // Chiều rộng sản phẩm + khoảng cách (margin-right)
    const visibleProducts = Math.floor(slideshow.parentElement.offsetWidth / productWidth); // Số sản phẩm hiển thị trên khung
    const totalProducts = products.length;
    const skipCount = 5; // Số lượng sản phẩm bỏ qua mỗi lần nhấn

    let currentIndex = 0; // Vị trí hiện tại

    // Cập nhật vị trí khi nhấn nút "Prev"
    prevButton.addEventListener('click', () => {
        if (currentIndex > skipCount - 1) {
            currentIndex -= skipCount; // Quay lại 5 sản phẩm trước
        } else {
            currentIndex = 0; // Nếu đã ở đầu, không di chuyển nữa
        }
        updateSlider();
    });

    // Cập nhật vị trí khi nhấn nút "Next"
    nextButton.addEventListener('click', () => {
        if (currentIndex < totalProducts - visibleProducts) {
            currentIndex += skipCount; // Tiến lên 5 sản phẩm tiếp theo
        } else {
            currentIndex = 0; // Nếu đến cuối, quay về đầu tiên
        }
        updateSlider();
    });

    // Hàm cập nhật vị trí cuộn
    function updateSlider() {
        const offset = currentIndex * productWidth;
        slideshow.style.transform = `translateX(-${offset}px)`;
    }

    const menuItems = document.querySelectorAll('.menu-item');
    const detailCategories = document.querySelectorAll('.detail-category');

    // Đảm bảo danh mục cha đầu tiên được hiển thị khi vào trang
    if (menuItems.length > 0) {
        // Kích hoạt danh mục cha đầu tiên
        menuItems[0].classList.add('active');

        // Hiển thị danh mục con đầu tiên
        const firstTargetId = menuItems[0].getAttribute('data-target');
        const firstTargetCategory = document.getElementById(firstTargetId);
        if (firstTargetCategory) {
            firstTargetCategory.classList.add('active');
        }
    }

    // Lắng nghe sự kiện hover cho các danh mục cha
    menuItems.forEach(menuItem => {
        menuItem.addEventListener('mouseenter', function () {
            // Xóa class active của tất cả danh mục con
            detailCategories.forEach(category => category.classList.remove('active'));

            // Lấy id danh mục con tương ứng
            const targetId = menuItem.getAttribute('data-target');
            const targetCategory = document.getElementById(targetId);

            if (targetCategory) {
                targetCategory.classList.add('active');
            }

            // Xóa class active của tất cả các danh mục cha khác
            menuItems.forEach(item => item.classList.remove('active'));
            // Chỉ thêm class active vào danh mục cha hiện tại
            menuItem.classList.add('active');
        });
    });

    // Lấy các phần tử đăng nhập đăng ký 
    const login = document.querySelector('.home_account .sub-account ul .login');
    const register = document.querySelector('.home_account .sub-account ul .register');
    const boxLogin = document.getElementById('login-overlay');
    const boxRegister = document.getElementById('register-overlay');

    // kiểm tra nếu có lỗi hiển thị box
    const errorSpans = document.querySelectorAll('span[style="color:red;"]');

    // Duyệt qua từng thẻ <span> để kiểm tra xem nó có nội dung lỗi hay không
    errorSpans.forEach(span => {
        if (span.textContent.trim() !== '') {
            boxLogin.classList.remove('hidden');
        } else {
            console.log("Không có lỗi.");
        }
    });

    // Khi nhấn vào đăng nhập
    login.addEventListener('click', function () {
        // Ẩn box đăng ký (nếu đang hiển thị)
        if (!boxLogin.classList.contains('hidden')) {
            boxLogin.classList.add('hidden');
        }

        // Hiển thị box đăng nhập
        boxLogin.classList.remove('hidden');
        boxRegister.classList.add('hidden');  // Ẩn box đăng ký
    });

    // Khi nhấn vào đăng ký
    register.addEventListener('click', function () {
        // Ẩn box đăng nhập (nếu đang hiển thị)
        if (!boxRegister.classList.contains('hidden')) {
            boxRegister.classList.add('hidden');
        }

        // Hiển thị box đăng ký
        boxRegister.classList.remove('hidden');
        boxLogin.classList.add('hidden');  // Ẩn box đăng nhập
    });

    // đăng nhập 
    const loginOverlay = document.getElementById('login-overlay');
    const loginTogglePasswordIcon = document.getElementById('login-toggle-password');
    const loginPasswordInput = document.getElementById('login-password');

    // Ẩn hộp đăng nhập khi nhấn vào lớp mờ ngoài
    loginOverlay.addEventListener('click', (event) => {
        if (event.target === loginOverlay) {
            loginOverlay.classList.add('hidden');
        }
    });

    // Chuyển đổi hiển thị mật khẩu
    loginTogglePasswordIcon.addEventListener('click', () => {
        const isPassword = loginPasswordInput.getAttribute('type') === 'password';
        loginPasswordInput.setAttribute('type', isPassword ? 'text' : 'password');
        loginTogglePasswordIcon.classList.toggle('fa-eye');
        loginTogglePasswordIcon.classList.toggle('fa-eye-slash');
    });

    // đăng ký 
    const registerOverlay = document.getElementById('register-overlay');
    const registerTogglePasswordIcon = document.getElementById('register-toggle-password');
    const registerPasswordInput = document.getElementById('register-password');
    const registerTogglePasswordIconRepeat = document.getElementById('register-toggle-password-repeat');
    const registerPasswordInputRepeat = document.getElementById('register-password-repeat');

    // Ẩn hộp đăng ký khi nhấn vào lớp mờ ngoài
    registerOverlay.addEventListener('click', (event) => {
        if (event.target === registerOverlay) {
            registerOverlay.classList.add('hidden');
        }
    });

    // Chuyển đổi hiển thị mật khẩu cho mật khẩu chính
    registerTogglePasswordIcon.addEventListener('click', () => {
        const isPassword = registerPasswordInput.getAttribute('type') === 'password';
        registerPasswordInput.setAttribute('type', isPassword ? 'text' : 'password');
        registerTogglePasswordIcon.classList.toggle('fa-eye');
        registerTogglePasswordIcon.classList.toggle('fa-eye-slash');
    });

    // Chuyển đổi hiển thị mật khẩu cho mật khẩu nhập lại
    registerTogglePasswordIconRepeat.addEventListener('click', () => {
        const isPassword = registerPasswordInputRepeat.getAttribute('type') === 'password';
        registerPasswordInputRepeat.setAttribute('type', isPassword ? 'text' : 'password');
        registerTogglePasswordIconRepeat.classList.toggle('fa-eye');
        registerTogglePasswordIconRepeat.classList.toggle('fa-eye-slash');
    });

    // Update cart count dynamically
    const cartCountElement = document.getElementById('cart-count');
    const cartItemsContainer = document.querySelector('.cart-items ul');

    function updateCartCount() {
        const cartItems = cartItemsContainer.querySelectorAll('li');
        cartCountElement.textContent = cartItems.length;
    }

    // Initial update of cart count
    updateCartCount();

    // Remove item and update cart count
    cartItemsContainer.addEventListener('click', function (event) {
        if (event.target.classList.contains('remove-item')) {
            const item = event.target.closest('li');
            item.remove();
            updateCartCount();
        }
    });
});




