<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contact | Cakes Fact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="assets/img/icons/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="assets/plugin/CakeZone/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="assets/plugin/CakeZone/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="assets/plugin/CakeZone/css/style.css" rel="stylesheet">

        <!-- My Stylesheet -->
        <link rel="stylesheet" href="assets/css/mystyles.css">
    </head>
    <body>

        <!-- Topbar Start -->
        <?php include_once ("layouts/topbar.php"); ?>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 text-uppercase text-white">
                    <i class="fa fa-birthday-cake fs-1 text-primary me-3"></i>
                    Cakes Fact
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-lg-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="menu.php" class="nav-item nav-link">Menu & Pricing</a>
                    <a href="team.php" class="nav-item nav-link">Master Chefs</a>
                    <a href="contact.php" class="nav-item nav-link active">Contact Us</a>
                    <a href="login.php" class="nav-item nav-link" id="my-content">Login</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-fluid bg-dark bg-img p-5 mb-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 text-uppercase text-white">Contact Us</h1>
                    <a href="index.php">Home</a>
                    <i class="far fa-square text-primary px-2"></i>
                    <a href="contact.php">Contact</a>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact position-relative px-5" style="margin-top: 90px;">
            <div class="container">
                <div class="row g-5 mb-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-primary border-inner text-center text-white p-5">
                            <i class="bi bi-geo-alt fs-1 text-white"></i>
                            <h6 class="text-uppercase my-2">Our Office</h6>
                            <span>Jl. Kasturi Raya, Bogor City, Indonesia</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-primary border-inner text-center text-white p-5">
                            <i class="bi bi-envelope-open fs-1 text-white"></i>
                            <h6 class="text-uppercase my-2">Email Us</h6>
                            <span>cakes.fact@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="bg-primary border-inner text-center text-white p-5">
                            <i class="bi bi-phone-vibrate fs-1 text-white"></i>
                            <h6 class="text-uppercase my-2">Call Us</h6>
                            <span>+62 857 7384 8327</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <form>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;">
                                </div>
                                <div class="col-sm-12">
                                    <textarea class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Message"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-primary border-inner w-100 py-3" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
        <!-- Footer Start -->
        <?php include_once ("layouts/footer.php"); ?>
        <!-- Footer End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="assets/plugin/CakeZone/lib/easing/easing.min.js"></script>
        <script src="assets/plugin/CakeZone/lib/waypoints/waypoints.min.js"></script>
        <script src="assets/plugin/CakeZone/lib/counterup/counterup.min.js"></script>
        <script src="assets/plugin/CakeZone/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="assets/plugin/CakeZone/js/main.js"></script>
    </body>
</html>