function toggleDescription() {
    const wrapper = document.querySelector('.product-description-wrapper');
    const btn = document.querySelector('.toggle-btn');

    if (wrapper.style.maxHeight === '100px') {
        wrapper.style.maxHeight = 'none'; 
        btn.textContent = 'Thu gọn';
    } else {
        wrapper.style.maxHeight = '100px';
        btn.textContent = 'Xem thêm';
    }
}

// Tăng giảm sản phẩm
document.addEventListener("DOMContentLoaded", function () {
    const decreaseBtn = document.querySelector(".qty-btn:first-of-type");
    const increaseBtn = document.querySelector(".qty-btn:last-of-type");
    const quantityInput = document.querySelector(".qty-input");
    const stockQuantity = parseInt(document.getElementById("stock-quantity").value, 10);

    // Giảm số lượng
    decreaseBtn.addEventListener("click", function () {
        let currentValue = parseInt(quantityInput.value, 10);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });

    // Tăng số lượng (không vượt quá kho)
    increaseBtn.addEventListener("click", function () {
        let currentValue = parseInt(quantityInput.value, 10);
        if (currentValue < stockQuantity) {
            quantityInput.value = currentValue + 1;
        }
    });

    // Kiểm tra khi nhập trực tiếp vào ô input
    quantityInput.addEventListener("input", function () {
        let value = parseInt(quantityInput.value, 10);
        if (isNaN(value) || value < 1) {
            quantityInput.value = 1;
        } else if (value > stockQuantity) {
            quantityInput.value = stockQuantity;
        }
    });

    // Hiệu ứng thêm vào giỏ hàng
    let isFlying = false;
    const addToCartBtn = document.querySelector(".add-cart");
    addToCartBtn.addEventListener("click", function () {
        if (isFlying) return;

        isFlying = true;
        addToCartBtn.disabled = true;

        const productImage = document.querySelector(".img img");
        const cartIcon = document.querySelector(".home_cart");

        const flyingImage = productImage.cloneNode(true);
        flyingImage.classList.add("flying-image");

        document.body.appendChild(flyingImage);

        const productImageRect = productImage.getBoundingClientRect();
        const cartIconRect = cartIcon.getBoundingClientRect();

        flyingImage.style.top = (productImageRect.top + productImageRect.height / 2 - 25) + "px";
        flyingImage.style.left = (productImageRect.left + productImageRect.width / 2 - 25) + "px";

        setTimeout(() => {
            flyingImage.style.top = cartIconRect.top + "px";
            flyingImage.style.left = cartIconRect.left + "px";
            flyingImage.style.width = "20px";
            flyingImage.style.height = "20px";
        }, 100);

        setTimeout(() => {
            document.body.removeChild(flyingImage);
            isFlying = false;
            addToCartBtn.disabled = false;
        }, 1100);
    });
});

