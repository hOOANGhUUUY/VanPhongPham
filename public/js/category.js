document.addEventListener("DOMContentLoaded", function () {
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
});