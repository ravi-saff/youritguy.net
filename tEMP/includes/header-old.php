<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourITGuy</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <link href="style.css" rel="stylesheet" />
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#services">
                <img src="images/youritguy2.-logo.png" alt="Logo" width="60" height="60" class="mr-2">
                YourITGuy
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link nav-link-services" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-about" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-testimonials" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-faqs" href="#faqs">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-contact" href="#contact-us">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content Container -->
    <div class="container">
        <!-- Section content like Services, About Us, etc. goes here -->
    </div>

    <!-- Required JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Collapse mobile menu after clicking a link -->
    <script>
        $(document).ready(function () {
            // Shrink navbar on scroll
            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });

            // Collapse mobile menu after clicking a link
            $('.navbar-nav .nav-link').on('click', function () {
                $('.navbar-collapse').collapse('hide');
            });
        });
    </script>
</body>
</html>
