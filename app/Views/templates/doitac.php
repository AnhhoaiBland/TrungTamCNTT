<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
    #carouselDoiTac {
        width: 100%;
        margin: 0 auto;
        background-color: #fff;
    }

    .carousel-item > img {
        height: auto; /* Adjust the height to auto to maintain aspect ratio */
        max-height: 180px; /* Set a maximum height to make images smaller */
        object-fit: contain; /* Ensure images retain their aspect ratio and are not cut off */
        width: auto; /* Allow width to adjust automatically based on height */
        max-width: 100%; /* Ensure images do not exceed the width of their container */
        padding: 10px; /* Adjust padding as needed */
    }
    .title {
    margin-top: 10px;
    margin-left: 25px;
    background-color: #033e8c; /* Blue background color */
    color: white; /* White text color */
    border-radius: 8px; /* Rounded corners */
    padding: 10px; /* Optional padding for better appearance */
    width: fit-content;
    font-size: larger;
    font-weight: 700;
}

</style>

<h3 class="title">CÁC ĐỐI TÁC</h3>
<!-- Đối tác doitac -->
<div id="carouselDoiTac" class="carousel doitac slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- doitac Item 1 -->
        <div class="carousel-item active">
            <img src="/public/media/images/CUSC-logo.png" class="d-block w-100" alt="Image 1">
        </div>
        <!-- doitac Item 2 -->
        <div class="carousel-item">
            <img src="/public/media/images/Fsoftlogo.png" class="d-block w-100" alt="Image 2">
        </div>
        <!-- doitac Item 3 -->
        <div class="carousel-item">
            <img src="/public/media/images/Logo_SPT.png" class="d-block w-100" alt="Image 3">
        </div>
        <!-- doitac Item 4 -->
        <div class="carousel-item">
            <img src="/public/media/images/Mobifone-logo.png" class="d-block w-100" alt="Image 4">
        </div>
        <!-- doitac Item 5 -->
        <div class="carousel-item">
            <img src="/public/media/images/NGN-logo.png" class="d-block w-100" alt="Image 5">
        </div>
        <!-- doitac Item 6 -->
        <div class="carousel-item">
            <img src="/public/media/images/Viettel_logo.svg.png" class="d-block w-100" alt="Image 6">
        </div>
        <!-- doitac Item 7 -->
        <div class="carousel-item">
            <img src="/public/media/images/VNG-logo.png" class="d-block w-100" alt="Image 7">
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var carouselElement = document.querySelector('#carouselDoiTac');
        var carousel = new bootstrap.Carousel(carouselElement, {
            interval: 200 // Time in milliseconds 
        });
    });
</script>
