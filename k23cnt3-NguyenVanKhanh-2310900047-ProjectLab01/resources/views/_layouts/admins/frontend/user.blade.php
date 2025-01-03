<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('title')</title>
    <style>
        /* Custom styles */
        body {
            background: #f4f4f4;
            margin: 0;
        }

        /* Main content wrapper styles */
        .wrapper {
            width: 100%;
            background: #fff;
            min-height: 100vh;
        }

        /* Content body */
        .content-body {
            padding: 20px;
        }

        /* Header title styles */
        header {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 1.5em;
        }

        /* Footer styles */
        footer {
            background: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        /* Navbar customization */
        .navbar-custom {
            background-color: #343a40;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .navbar-custom .nav-link:hover {
            color: #ff5733; /* Highlight color when hovering */
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        /* Adjustments for the content */
        .container-fluid {
            padding: 0;
        }

        .container-fluid .content-wrapper {
            padding: 20px;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header>
        @include('_layouts.frontend._headerTitle') <!-- Title for frontend when not logged in -->
    </header>
    <hr style="border: 2px solid black">

    <!-- Navbar (Main Navigation Menu) -->
    @include('_layouts.frontend._menu') <!-- Menu navigation (with toggle functionality) -->
    <hr style="border: 2px solid black">

    <!-- Main Content Section -->
    <div class="container-fluid">
        <div class="wrapper">
            <!-- Content body -->
            <section class="content-body">
                @yield('content-body') <!-- Dynamic content for pages -->
            </section>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Tên Công Ty. All rights reserved.</p>
    </footer>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>