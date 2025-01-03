<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập - Quản Trị</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 50px;
        }
        .btn-primary {
            background-color: #4CAF50;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Đăng Nhập</h2>

        <!-- Thông báo lỗi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <!-- Form đăng nhập -->
        <form action="{{ route('admins.nvkLoginSubmit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nvkTaiKhoan" class="form-label">Tài Khoản</label>
                <input type="text" class="form-control" id="nvkTaiKhoan" name="nvkTaiKhoan" placeholder="Nhập tài khoản" required>
            </div>
            <div class="mb-3">
                <label for="nvkMatKhau" class="form-label">Mật Khẩu</label>
                <input type="password" class="form-control" id="nvkMatKhau" name="nvkMatKhau" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-primary">Đăng Nhập</button>
        </form>

        <div class="footer-text">
            <p>© 2025 Quản Trị Hệ Thống</p>
        </div>
    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>