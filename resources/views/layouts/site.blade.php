<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-6.5.2-web/css/all.min.css') }}">
    {{--
            <link rel="stylesheet" href="fontawesome/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css"> --}}
    <!-- Add your CSS files here -->
    {{-- <link rel="stylesheet" href="./css/style.css"> --}}
    {{-- <link rel="stylesheet" href="fontawesome/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-5.3.3-dist/css/bootstrap.min.css"> --}}
    @yield('header')
</head>

<body>


    <!-- Header Section -->
    <header>
        <div class="logo">
            <img src="img/images.png" alt="Logo">
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="product">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="#">Product Categories</a>
                    <ul>
                        <li><a href="#">Category 1</a></li>
                        <li><a href="#">Category 2</a></li>
                        <li><a href="#">Category 3</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="actions">
            <a href="#">Login</a>
            <a href="#"><i class="fa-solid fa-cart-shopping"> Cart </i></a>
            <form action="#" method="GET">
                <input type="text" name="search" placeholder="Search...">
                <button type="submit">Search</button>
            </form>
        </div>
    </header>


    <main>
        @yield('content')
    </main>



    <footer>
        <div class="footer-content">
            <p>Được cung cấp bởi: <span>Trương Thành Đạt</span></p>
        </div>
        <div class="copyright">
            <p>&copy; 2024 </p>
        </div>
        @yield('footer')
    </footer>
</body>

</html>
