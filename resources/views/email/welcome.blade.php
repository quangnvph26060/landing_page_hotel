<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Thành Công</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007BFF;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
            font-size: 16px;
        }
        .content p {
            margin: 15px 0;
        }
        .content .highlight {
            font-weight: bold;
            color: #007BFF;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Chúc Mừng Bạn Đã Đăng Ký Thành Công!</h1>
        </div>
        <div class="content">
            <p>Xin chào <span class="highlight">{{ $data['name'] }}</span>,</p>
            <p>Cảm ơn bạn đã đăng ký tài khoản với chúng tôi. Dưới đây là thông tin tài khoản của bạn:</p>
            <ul>
                <li><strong>Họ Tên:</strong> {{ $data['name'] }}</li>
                <li><strong>Email:</strong> {{ $data['email'] }}</li>
                <li><strong>Số Điện Thoại:</strong> {{ $data['phone'] }}</li>
            </ul>
            <p>Chúng tôi rất mong được phục vụ bạn tốt hơn và hy vọng trải nghiệm của bạn  thật tuyệt vời!</p>
        </div>
        <div class="footer">
            <p>&copy; 2025. Mọi quyền lợi đều được bảo vệ.</p>
        </div>
    </div>
</body>
</html>
