<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản Trị</title>
    <style>
        /* Set the background color for the entire body */
        body {
            background-color: #f4f4f9; /* Light background color for the body */
        }

        /* Set a custom background color for the header */
        header {
            background-color: #343a40; /* Dark background for the header */
        }

        /* Add a hover effect for navigation links */
        .navbar-nav .nav-item .nav-link:hover {
            background-color: #495057; /* Change background on hover */
            border-radius: 5px;
        }

        /* Add custom styles for the logo */
        .logo img {
            max-height: 40px;
        }

        /* Optional: Customize the admin user greeting */
        .d-flex.align-items-center {
            font-size: 14px;
            color: white;
        }

        /* Customize the logout link */
        .d-flex a {
            font-size: 14px;
            color: white;
            text-decoration: none;
        }

        .d-flex a:hover {
            color: #ff6347; /* Color change on hover */
        }

        /* Styling the search form */
        .search-form {
            max-width: 800px; /* Set maximum width of the form */
            width: 100%;
            margin: 0 auto; /* Center the form horizontally */
        }

        .search-form .input-group {
            display: flex;
            width: 100%;
        }

        .search-form .form-control {
            border-radius: 30px 0 0 30px; /* Rounded corners for the input */
            padding: 12px 15px;
            font-size: 16px; /* Larger font for better readability */
        }

        .search-form .btn {
            border-radius: 0 30px 30px 0; /* Rounded corners for the button */
            padding: 12px 20px;
            background-color: #dc3545; /* Bootstrap danger color */
            border: none;
            font-size: 16px;
        }

        .search-form .btn:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        /* Responsive Design for smaller screens */
        @media (max-width: 768px) {
            .search-form {
                max-width: 100%;
                margin-top: 10px; /* Add some spacing on smaller screens */
            }

            .search-form .form-control {
                font-size: 14px; /* Smaller font on small devices */
                padding: 10px 12px;
            }

            .search-form .btn {
                font-size: 14px; /* Adjust button font size for small screens */
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>

<header class="bg-dark text-white p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
            <a href="/nvk-admins" class="text-white text-decoration-none">
                <!-- Đường dẫn đến logo trong thư mục public/storage/img/san_pham/ -->
                <img src="{{ asset('storage/img/san_pham/logoD.jpg') }}" alt="Logo" class="img-fluid" />
            </a>
        </div>

        <!-- Menu Navigation -->
        <!-- Search form -->
        <form action="{{ route('nvklogin.searchAdmins') }}" method="GET" class="search-form">
            <div class="input-group">
                <input 
                    class="form-control" 
                    placeholder="Tìm Kiếm... !" 
                    type="text" 
                    name="search"
                />
                <button 
                    type="submit" 
                    class="btn btn-danger"
                >
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>

        <!-- Thông tin tài khoản & Đăng xuất -->
        <div class="d-flex align-items-center">
            <span class="me-3" style="font-size: 14px;">Xin chào, Admin</span>
            <a href="{{route('admins.nvkLogin')}}" class="text-white text-decoration-none" style="font-size: 14px;">Đăng xuất</a>
        </div>
    </div>
</header>

<!-- Bootstrap JS (nếu chưa có trong project của bạn) -->
<!-- <script src="path/to/bootstrap.bundle.min.js"></script> -->

</body>
</html>