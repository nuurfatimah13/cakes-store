<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
        <meta name="author" content="AdminKit">
        <meta name="keywords"
            content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="shortcut icon" href="assets/img/icons/favicon.ico" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>Login | Cakes Fact</title>

        <link href="assets/plugin/AdminKit/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    </head>
    <body>
        <main class="d-flex w-100">
            <div class="container d-flex flex-column">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">
                            <div class="text-center mt-4">
                                <h1 class="h2">Welcome back, Charles</h1>
                                <p class="lead">
                                    Login to your account to continue
                                </p>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <div class="text-center mb-2">
                                            <img src="assets/img/avatar.jpg" alt="Fatih" 
                                                class="img-fluid rounded-circle" width="132"
                                                height="132" />
                                        </div>
                                        <?php
                                            // (A) LOGIN CHECKS
                                            include "controllers/login.php";
                                            
                                            // (B) LOGIN PAGE HTML
                                            if (isset($failed)) { 
                                        ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <strong>Invalid username or password.</strong>
                                                <button type="button" class="btn-close" 
                                                    data-bs-dismiss="alert" aria-label="Close">
                                                </button>
                                            </div>
                                        <?php 
                                            } 
                                        ?>
                                        <form id="login-form" class="row g-3 mt-2 needs-validation" novalidate 
                                            method="post" target="_self">
                                            <div class="col-12">
                                                <label for="validationCustomUsername" class="form-label">Username</label>
                                                <div class="input-group has-validation">
                                                    <input type="text" name="user" class="form-control" 
                                                        id="validationCustomUsername" 
                                                        aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Email tidak boleh kosong.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="validationCustomPassword" class="form-label">Password</label>
                                                <div class="input-group has-validation">
                                                    <input type="password" name="password" class="form-control" 
                                                        id="validationCustomPassword" 
                                                        aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback">
                                                        Password tidak boleh kosong.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-3">
                                                <button type="submit" class="btn btn-lg btn-primary">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="assets/plugin/AdminKit/js/app.js"></script>
        <script type="text/javascript">
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
    </body>
</html>