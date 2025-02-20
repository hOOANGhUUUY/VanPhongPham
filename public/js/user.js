document.querySelectorAll('.menu_account li > a').forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation(); // Prevent the click from reaching the document listener

        // Kiểm tra nếu click vào "Thông tin sản phẩm"
        if (this.classList.contains('menu_link')) {
            let parentLi = this.parentElement;
            let submenu = parentLi.querySelector('.submenu');

            // Đảm bảo không có submenu nào đang hiển thị ngoài menu "Thông tin sản phẩm"
            document.querySelectorAll('.submenu').forEach(sub => {
                if (sub !== submenu) {
                    sub.style.display = 'none';  // Đóng tất cả submenu khác
                }
            });

            // Toggle "submenu" của "Thông tin sản phẩm"
            if (submenu) {
                if (submenu.style.display === 'block') {
                    submenu.style.display = 'none'; // Nếu đang mở thì đóng
                    parentLi.classList.remove('active');
                } else {
                    submenu.style.display = 'block'; // Nếu đang đóng thì mở
                    parentLi.classList.add('active');
                }
            }
        } else {
            // Đóng tất cả các submenu nếu nhấn vào mục không phải "Thông tin sản phẩm"
            document.querySelectorAll('.submenu').forEach(sub => {
                sub.style.display = 'none';  // Đóng tất cả submenu
            });
            document.querySelectorAll('.menu_account li').forEach(li => {
                li.classList.remove('active');
            });
        }

        // Hiển thị mục đã chọn
        let targetId = this.getAttribute('href').substring(1);
        document.querySelectorAll('.section').forEach(section => {
            section.classList.remove('active');
        });
        if (targetId) {
            document.getElementById(targetId).classList.add('active');
        }
    });
});

// Đóng menu con khi nhấn ra ngoài
document.addEventListener('click', function (event) {
    let isClickInside = document.querySelector('.box_nav_user').contains(event.target);

    // Nếu click ra ngoài menu, đóng tất cả các submenu
    if (!isClickInside) {
        document.querySelectorAll('.submenu').forEach(submenu => {
            submenu.style.display = 'none'; // Đóng tất cả submenu
        });
        document.querySelectorAll('.menu_account li').forEach(li => {
            li.classList.remove('active');
        });
    }
});

// Ngăn chặn đóng menu con khi nhấn vào các mục con của "Thông tin sản phẩm"
document.querySelectorAll('.submenu a').forEach(link => {
    link.addEventListener('click', function (event) {
        event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
    });
});