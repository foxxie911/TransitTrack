<!-- Header Start -->
<header class="trtr_navbar sticky-top">
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg" id="trtr_main_nav">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.svg') }}" class="w-100" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fas fa-bars"></i></span>
            </button>

            <!-- Nav Item -->
            <div class="collapse navbar-collapse js-clone-nav justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about_us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./service.php">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Project.php">Bus Location</a>
                    </li>
                    <!--
                    if (isset($_COOKIE["is_login"])) {
                        echo '<li  class="nav-item"><a class="nav-link" href="./addlist.php">Add List</a></li>';
                        echo '<li  class="nav-item"><a class="nav-link"  href="./logout.php">Logout</a></li>';
                    } else {
                        echo ' <li  class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                                <li  class="nav-item"><a class="nav-link" href="./registration.php"> Registration</a></li>';
                    }
                    -->
                    <li class="nav-item">
                        <a class="nav-link d-block d-lg-none" href="./contactus.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <a class="btn trtr_nav_btn d-none d-lg-block" href="./contactus.php">Contact Us</a>
            <!-- Nav Item -->
        </nav>
        <!-- Navbar -->
    </div>
</header>
<!-- Header End -->