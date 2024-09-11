<style>
    .video-container {
        margin: 0 auto;
        max-width: 100%;
        width: 1040px;
        height: 590px;
        position: relative;
    }

    /* Video Slider */
    .video-slider {
        display: none;
    }

    /* Individual Slide: Container */
    .video-slide {
        position: relative;
        margin: 0 auto;
    }

    /* Individual Slide: Video */
    .video-slide video {
        width: 100%;
        height: 590px;
    }

    /* Navigation */
    .video-slider-btn {
        border: none;
        display: inline-block;
        color: #fff;
        font-size: 100px;
        padding: 10px;
        vertical-align: middle;
        overflow: hidden;
        text-decoration: none;
        background-color: transparent;
        text-align: center;
        cursor: pointer;
        white-space: nowrap;
        z-index: 99999;
        opacity: .7;
        transition: all 350ms ease-in-out;
    }

    .video-slider-btn:hover {
        opacity: 1;
        transition: all 350ms ease-in-out;
    }

    .video-slider-btn.left-side {
        position: absolute;
        top: 50%;
        left: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(-0%, -50%);
    }

    .video-slider-btn.right-side {
        position: absolute;
        top: 50%;
        right: 0%;
        transform: translate(0%, -50%);
        -ms-transform: translate(0%, -50%);
    }
</style>


<div class="video-container">
    <a class="video-slider, videobox">
        <?php foreach ($item_bst as $vido) { ?>
            <div class="video-slide">
                <video controls>
                    <source src="<?= base_url("upload/media/videos/{$vido['urlFile']}") ?>" type="video/mp4">
                </video>
            </div>
        <?php } ?>

        <!-- <div class="video-slide">
            <video controls>
                <source src="http://phunu.cantho.gov.vietnam/upload/media/videos/1715588096_67068c8dfb48003ece22.mp4" type="video/mp4">
            </video>
        </div>
        <div class="video-slide">
            <video controls>
                <source src="C:/Users/thanhday/Downloads/Official YOLO v7 Custom Object Detection Tutorial - Windows & Linux.mp4" type="video/mp4">
            </video>
        </div> -->
    </a>


    <button class="video-slider-btn left-side" onclick="plusDivs(-1)">&#10094;</button>
    <button class="video-slider-btn right-side" onclick="plusDivs(1)">&#10095;</button>
</div>



<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i,
            x = document.getElementsByClassName("video-slide"),
            y = document.getElementsByTagName("video");

        if (n > x.length) {
            slideIndex = 1
        }

        if (n < 1) {
            slideIndex = x.length
        }

        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            y[i].pause();
        }

        x[slideIndex - 1].style.display = "block";

    }
</script>