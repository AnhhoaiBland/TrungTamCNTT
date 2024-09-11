<style>
    /* Thêm hiệu ứng gradient cho background */
    .bod {
        background: linear-gradient(to right, #6dd5ed, #2193b0);
    }

    /* Tăng cỡ chữ và thêm hiệu ứng shadow cho tiêu đề */
    .welcome-message {
        font-size: 3em;
        color: #fff;
        text-shadow: 2px 2px 4px #000;
    }

    /* Thay đổi màu và thêm hiệu ứng cho thời gian */
    #time-message {
        font-size: 1.5em;
        color: #ffdd59;
        text-shadow: 1px 1px 2px #000;
    }

    /* Thêm padding và chỉnh sửa border-radius */
    .welcome-container {
        padding: 60px;
        border-radius: 15px;
    }

    /* Thêm hiệu ứng shadow mạnh mẽ hơn cho container */
    .welcome-container {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
</style>

<div class="bod">
    <div class="welcome-container">
        <h1 class="welcome-message">Welcome, <?php #echo $infoUser[0]['tenDangNhap'] ?></h1>
        <h2  class="welcome-message">Trang quản trị web Hội Liên Hiệp Phụ Nữ TP.Cần Thơ</h2>
        <p id="time-message"></p>
    </div>
    <script src="script.js"></script>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const timeMessage = document.getElementById("time-message");

        function updateTime() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();
            const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            timeMessage.textContent = `Cần Thơ: ${formattedTime}`;
        }

        setInterval(updateTime, 1000);
        updateTime();
    });
</script>