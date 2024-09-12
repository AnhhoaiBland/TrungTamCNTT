<style>
    .carousel-item {
        max-height: 695px;
    }

    .carousel-item img {
        max-height: 850px;
        width: 100%;
        object-fit: fill;
        object-position: 50% 50%;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <!-- Phần chỉ báo (carousel-indicators) đã được loại bỏ vì không cần thiết -->
    
    <div class="carousel-inner" id="root-slide">
        <div class="carousel-item active">
            <!-- Đây là nơi bạn sẽ đặt nội dung của banner duy nhất -->
            <img src="path-to-your-banner.jpg" class="d-block w-100" alt="Banner">
            <div class="carousel-caption d-none d-md-block">
                <h5>Tiêu đề banner</h5>
                <p>Mô tả ngắn về banner.</p>
            </div>
        </div>
    </div>

   
</div>


<!-- <script>
    const rootSlide = document.getElementById('root-slide');

    rootSlide.innerHTML = '';

    // Thêm chuỗi HTML vào phần tử gốc
    $.ajax({
        url: 'home/ajax_getpaneltop',
        type: 'get',
        dataType: 'JSON',
        success: function(result) {
            result.forEach((element, index) => {
                let activeClass = index === 0 ? ' active' : '';
                let carouselItemHTML = '';
                if (element.urlBaiViet) {
                    carouselItemHTML = `
                    <div class="carousel-item${activeClass}">
                        <a href="${element.urlBaiViet}">
                           <img src="upload/media/images/${element.imageURL}" class="d-block w-100" alt="...">
                        </a>
                    </div>
                `;
                } else {
                    carouselItemHTML = `
                    <div class="carousel-item${activeClass}">
                        <div class="d-block w-100">
                            <img src="upload/media/images/${element.imageURL}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                `;
                }
                rootSlide.innerHTML += carouselItemHTML;
            });

            // Cập nhật số lượng nút chỉ đến (carousel indicators) nếu cần
            let indicators = document.querySelectorAll('.carousel-indicators button');
            if (indicators.length !== result.length) {
                let indicatorsHTML = '';
                for (let i = 0; i < result.length; i++) {
                    let activeClass = i === 0 ? ' active' : '';
                    indicatorsHTML += `<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="${i}" class="${activeClass}" aria-label="Slide ${i + 1}"></button>`;
                }
                document.querySelector('.carousel-indicators').innerHTML = indicatorsHTML;
            }
        }
    });
</script> -->


<script>
    const rootSlide = document.getElementById('root-slide');



// Lấy dữ liệu từ AJAX và chỉ hiển thị một ảnh duy nhất
$.ajax({
    url: 'home/ajax_getpaneltop',
    type: 'get',
    dataType: 'JSON',
    success: function(result) {
        if (result.length > 0) {
            const element = result[0]; // Chỉ lấy phần tử đầu tiên
            let carouselItemHTML = '';

            if (element.urlBaiViet) {
                carouselItemHTML = `
                <div class="carousel-item active">
                    <a href="${element.urlBaiViet}">
                        <img src="upload/media/images/${element.imageURL}" class="d-block w-100" alt="Banner Image">
                    </a>
                </div>
                `;
            } else {
                carouselItemHTML = `
                <div class="carousel-item active">
                    <img src="upload/media/images/${element.imageURL}" class="d-block w-100" alt="Banner Image">
                </div>
                `;
            }
            rootSlide.innerHTML = carouselItemHTML; // Chỉ hiển thị một ảnh duy nhất
        }
    }
});

</script>


