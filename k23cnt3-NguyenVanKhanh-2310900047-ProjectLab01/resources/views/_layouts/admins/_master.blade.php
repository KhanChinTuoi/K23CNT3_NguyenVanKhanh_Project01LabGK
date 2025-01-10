<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Quản lý sản phẩm')</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        /* Nền body với hình ảnh */
        body {
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2); /* Gradient mịn màng */
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: background 0.5s ease;
        }

        /* Kiểu dáng của sidebar */
        .sideBar {
            width: 250px;
            background: #1d1f2e; /* Màu nền tối dễ nhìn */
            min-height: 100vh;
            padding-top: 30px;
            transition: width 0.3s ease, padding 0.3s ease;
        }

        .sideBar a {
            color: #ddd;
            text-decoration: none;
            padding: 15px;
            display: block;
            font-size: 1.1em;
            border: none;
            transition: background-color 0.3s ease, transform 0.3s ease, padding 0.3s ease;
        }

        .sideBar a:hover {
            background-color: #4a6b8c;
            transform: translateX(10px);
            padding-left: 20px;
        }

        @media (max-width: 767px) {
            .sideBar {
                width: 100%;
                padding-top: 15px;
            }

            .sideBar a {
                font-size: 1em;
            }
        }

        /* Kiểu dáng của nội dung chính */
        .wrapper {
            width: calc(100% - 250px);
            min-height: 100vh;
            background: rgba(255, 255, 255, 0.95);
            padding: 0;
            transition: all 0.3s ease;
        }

        /* Kiểu dáng của header */
        header {
            background: #161718; /* Màu xanh dịu nhẹ */
            color: white;
            padding: 15px 30px;
            font-size: 1.6em;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: background 0.3s ease;
        }

        /* Kiểu dáng của thẻ (Card) */
        .card {
            border: none;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(238, 231, 231, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #fff;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
        }

        /* Kiểu dáng của footer */
        footer {
            background-color: #4a6b8c;
            color: white;
            padding: 10px;
            text-align: center;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        footer:hover {
            background-color: #4a6b8c;
        }

        /* Loại bỏ viền của các input và button trong form */
        input, button {
            border: none;
        }

        input:focus, button:focus {
            outline: none;
        }

        /* Loại bỏ viền của các thẻ a khi ở trạng thái focus */
        a:focus {
            outline: none;
        }

        /* Thu nhỏ ảnh để vừa khung */
        .product-img {
            width: 70%;
            height: auto;
            object-fit: cover;
        }

    </style>
</head>
<body>
    <section class="container-fluid d-flex">
        <!-- Sidebar -->
        <nav class="sideBar">
            @include('_layouts.admins._menu')
        </nav>

        <!-- Main content -->
        <section class="wrapper">
            <header>
                @include('_layouts.admins._headerTitle')
            </header>
            <div class="content-body">
                @yield('content-body')
            </div>
        </section>
    </section>

    <!-- Footer -->
    <footer>
        &copy; K9 Store. All Rights Reserved.
    </footer>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>