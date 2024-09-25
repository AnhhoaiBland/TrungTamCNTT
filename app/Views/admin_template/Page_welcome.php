<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
    body {
        overflow: hidden; /* Ẩn thanh cuộn */
    }

     /* Font chữ Poppins cho toàn bộ trang */
     body {
        font-family: 'Poppins', sans-serif; /* Sử dụng font chữ mới */
    }

    /* Hiệu ứng gradient kết hợp với hình ảnh cho background */
    .bod {
        background: linear-gradient(to right, rgba(0, 198, 255, 0.8), rgba(0, 114, 255, 0.1)), 
        url('https://img.freepik.com/free-vector/blue-futuristic-networking-technology_53876-100679.jpg') no-repeat center center; 
        background-size: cover; 
        height: 100vh; 
        display: flex; 
        align-items: center; 
        justify-content: center; 
        overflow: hidden; 
        position: relative; /* Để điều chỉnh các phần tử con */
    }

    /* Tăng cỡ chữ, thêm hiệu ứng shadow và chuyển chữ thành chữ hoa */
    .welcome-message {
        font-size: 3em;
        color: #fff;
        text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8);
        text-transform: uppercase; 
        margin: 0;
        animation: fadeIn 1s ease; 
        letter-spacing: 2px; /* Khoảng cách giữa các chữ */
    }

    /* Thay đổi màu, thêm hiệu ứng và chuyển chữ thành chữ hoa cho thời gian */
    #time-message {
        font-size: 1.5em;
        color: #ffe600;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        text-transform: uppercase; 
        margin-top: 10px; 
        animation: fadeIn 1s ease 0.5s; 
        transition: color 0.3s; /* Hiệu ứng chuyển màu */
    }

    /* Thay đổi màu sắc khi hover */
    #time-message:hover {
        color: #ffcc00; /* Màu vàng sáng hơn khi hover */
    }

    /* Thêm padding và chỉnh sửa border-radius */
    .welcome-container {
        padding: 60px;
        border-radius: 20px;
        background-color: rgba(0, 0, 0, 0.5); 
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
        text-align: center; 
        animation: slideIn 0.5s ease; /* Hiệu ứng trượt vào */
        z-index: 1; /* Đảm bảo welcome-container nằm trên */
    }
    .welcome-container h1{
        font-size: 2.4rem;
        color: #fff;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.8);
        text-transform: uppercase;

    }

    /* Hiệu ứng fade-in */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Hiệu ứng slide-in */
    @keyframes slideIn {
        from { transform: translateY(-20px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    /* Hiệu ứng hover cho container */
    .welcome-container:hover {
        box-shadow: 0 0 50px rgba(0, 0, 255, 0.8);
        transition: box-shadow 0.3s ease;
    }

   
</style>

<div class="bod">
    <div class="welcome-container">
        <h1 class="welcome-message">Chào mừng, Quản trị viên</h1>
        <h1 class="welcome-message">Trang quản trị Trung tâm Công nghệ Thông tin & Truyền thông TP. Cần Thơ</h1>
        <p id="time-message"></p>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const timeMessage = document.getElementById("time-message");

        function updateTime() {
            const now = new Date();
            const days = ["Chủ Nhật", "Thứ Hai", "Thứ Ba", "Thứ Tư", "Thứ Năm", "Thứ Sáu", "Thứ Bảy"];
            const dayName = days[now.getDay()]; // Lấy tên thứ
            const day = now.getDate(); // Ngày
            const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Tháng
            const year = now.getFullYear(); // Năm

            const hours = now.getHours();
            const minutes = now.getMinutes();
            const seconds = now.getSeconds();

            const formattedTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
            const formattedDate = `${dayName}, ${day}/${month}/${year}`; // Định dạng ngày

            timeMessage.textContent = `Cần Thơ: ${formattedTime} - ${formattedDate}`; // Hiển thị thời gian và ngày
        }

       
        setInterval(updateTime, 1000);
        updateTime();
    });
</script>

