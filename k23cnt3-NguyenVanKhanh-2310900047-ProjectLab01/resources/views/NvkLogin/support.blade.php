<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hỗ Trợ</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    <style>
      /* General Body Styling */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f7fafc;
    color: #333;
    line-height: 1.6;
    margin: 0;
    padding: 0;
}

/* Container Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 30px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Heading Styling */
h1, h2 {
    color: #2d3748;
    text-align: center;
}

h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

h2 {
    font-size: 2rem;
    margin-top: 30px;
    margin-bottom: 15px;
    color: #2b6cb0;
}

h3 {
    font-size: 1.2rem;
    margin-bottom: 10px;
}

/* FAQ Item Styling */
.faq-item {
    background-color: #f9fafb;
    padding: 20px;
    margin-bottom: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: background-color 0.3s ease;
}

.faq-item:hover {
    background-color: #e2e8f0;
}

/* Link Styling */
a {
    color: #3182ce;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Button Styling */
button {
    background-color: #3182ce;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2b6cb0;
}

/* Contact List Styling */
ul {
    padding-left: 20px;
    list-style-type: disc;
}

ul li {
    margin-bottom: 8px;
}

/* Mobile Responsiveness */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }
    
    h1 {
        font-size: 2rem;
    }
    
    h2 {
        font-size: 1.5rem;
    }
}

    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold mb-4 text-center">Trang Hỗ Trợ</h1>
        <p class="mb-4 text-center">Chào mừng bạn đến với trang hỗ trợ. Dưới đây là một số thông tin hữu ích mà bạn có thể tham khảo:</p>
        
        <h2 class="text-2xl font-semibold mt-6 mb-2">Câu Hỏi Thường Gặp (FAQ)</h2>
        <div class="faq-item bg-gray-50 p-4 rounded shadow mb-4">
            <h3 class="font-bold">1. Làm thế nào để đăng ký tài khoản?</h3>
            <p>Bạn có thể đăng ký tài khoản bằng cách nhấp vào nút "Đăng Ký" trên trang chính và làm theo hướng dẫn.</p>
        </div>
        <div class="faq-item bg-gray-50 p-4 rounded shadow mb-4">
            <h3 class="font-bold">2. Tôi có thể thay đổi mật khẩu của mình như thế nào?</h3>
            <p>Để thay đổi mật khẩu, hãy vào phần "Cài đặt" trong tài khoản của bạn và chọn "Đổi mật khẩu".</p>
        </div>
        <div class="faq-item bg-gray-50 p-4 rounded shadow mb-4">
            <h3 class="font-bold">3. Làm thế nào để liên hệ với bộ phận hỗ trợ?</h3>
            <p>Bạn có thể liên hệ với bộ phận hỗ trợ qua email tại <a href="mailto:support@example.com" class="text-blue-500">support@example.com</a> hoặc gọi điện thoại đến số 123-456-789.</p>
        </div>

        <h2 class="text-2xl font-semibold mt-6 mb-2">Thông Tin Liên Hệ</h2>
        <p>Nếu bạn cần thêm sự trợ giúp, vui lòng liên hệ với chúng tôi qua các kênh sau:</p>
        <ul class="list-disc pl-5">
            <li>Email: <a href="mailto:support@example.com" class="text-blue-500">support@example.com</a></li>
            <li>Điện thoại: 0984915173</li>
            <li>Facebook: <a href="https://www.facebook.com/yourprofile" target="_blank" class="text-blue-500">Facebook Page</a></li>
            <li>Instagram: <a href="https://www.instagram.com/yourprofile" target="_blank" class="text-blue-500">Instagram Profile</a></li>
        </ul>
    </div>
</body>
</html>