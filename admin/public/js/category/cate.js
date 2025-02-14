document.addEventListener("DOMContentLoaded", function () {
    // Tìm radio button được chọn
    const checkedRadio = document.querySelector('input[name="category"]:checked');
    if (checkedRadio) {
        // Mở danh mục con cấp 2 (specific)
        let specificContainer = checkedRadio.closest(".collapse");
        if (specificContainer) {
            specificContainer.classList.add("show");

            // Mở danh mục con cấp 1 (overall)
            let overallContainer = specificContainer.closest(".collapse");
            if (overallContainer) {
                overallContainer.classList.add("show");

                // Mở danh mục cha cấp cao nhất (category)
                let categoryContainer = overallContainer.closest(".collapse");
                if (categoryContainer) {
                    categoryContainer.classList.add("show");
                }
            }
        }
    }
});

// đổi ảnh đại diện
 window.onload = function() {
        let inputFile = document.getElementById('productImage');
        let previewImg = document.getElementById('preview');

        if (inputFile) {
            inputFile.addEventListener('change', function(event) {
                let file = event.target.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });
        }
    };

