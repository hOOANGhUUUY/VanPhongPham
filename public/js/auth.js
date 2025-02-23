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
