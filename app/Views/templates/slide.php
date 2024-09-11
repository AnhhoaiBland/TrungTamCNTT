<style>
    .carousel-item {
        max-height: 650px;
    }

    .carousel-item img {
        max-height: 670px;
        width: 100%;
        object-fit: fill;
        object-position: 50% 50%;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner" id="root-slide"></div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>
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
</script>