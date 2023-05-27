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
        <link rel="shortcut icon" href="../../../assets/img/icons/favicon.ico" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>Administrator | Cakes Fact</title>

        <link href="../../../assets/plugin/AdminKit/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../../../assets/js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../../../assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../../../assets/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../../assets/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="../../../assets/plugin/AdminKit/css/app.css">
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="index.php">
                        <img src="../../../assets/img/icons/logo.png" alt="logo" width="70%" style="margin-left: 0.5rem;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../../index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../../master-data/chef.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Chef</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../../master-data/categories.php">
                                <i class="align-middle" data-feather="grid"></i> 
                                <span class="align-middle">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="../../master-data/product.php">
                                <i class="align-middle" data-feather="menu"></i> 
                                <span class="align-middle">Products</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <div class="main">
                <!-- Navbar Start -->
                <?php include_once ("../layouts/navbar.php"); ?>
                <!-- Navbar End -->

                <main class="content">
                    <div class="container-fluid p-0">
                        <h1 class="h3 mb-3">Dashboard / <strong>Products</strong></h1>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../../connection/db.php";
                                        $query1 = $conn->query("SELECT * FROM categories");
                                        $query2 = $conn->query("SELECT * FROM chef");
                                    ?>
                                    <h3 class="card-title mb-4">Create Data Product</h3>
                                    <form class="row g-3 needs-validation" novalidate 
                                        action="../../../controllers/product/store.php" 
                                        method="post" 
                                        enctype="multipart/form-data">
                                        <div class="col-6">
                                            <label for="validationCustomName" class="form-label">Nama</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="nama" class="form-control" 
                                                    id="validationCustomName" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Nama tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validationCustomCategory" class="form-label">Kategori</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="categories_id" 
                                                    id="validationCategory" required>
                                                    <option disabled value="">Pilih...</option>
                                                    <?php 
                                                        if(mysqli_num_rows($query1)>0){ 
                                                            while ($data1 = mysqli_fetch_array($query1)) {
                                                    ?>
                                                    <option value="<?= $data1["id"] ?>"><?= $data1["name"] ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Kategori tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="validationCustomSize" class="form-label">Ukuran</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="size" 
                                                    id="validationChef" required>
                                                    <option value="">Pilih...</option>
                                                    <option value="Besar">Besar</option>
                                                    <option value="Sedang">Sedang</option>
                                                    <option value="Kecil">Kecil</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Ukuran tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <label for="validationCustomPrice" class="form-label">Harga</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="price" class="form-control" 
                                                    id="validationCustomPrice" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Harga tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="validationCustomChef" class="form-label">Chef</label>
                                            <div class="input-group has-validation">
                                                <select class="form-select" name="chef_id" 
                                                    id="validationChef" required>
                                                    <option disabled value="">Pilih...</option>
                                                    <?php 
                                                        if(mysqli_num_rows($query2)>0){ 
                                                            while ($data2 = mysqli_fetch_array($query2)) {
                                                    ?>
                                                    <option value="<?= $data2["id"] ?>"><?= $data2["name"] ?></option>
                                                    <?php 
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="invalid-feedback">
                                                    Chef tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationCustomDescription" class="form-label">Deskripsi</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="description"
                                                    class="form-control" id="validationCustomDescription" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Deskripsi tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="validationCustomFoto" class="form-label">Foto</label>
                                            <div class="input-group has-validation">
                                                <input type="file" name="image" class="form-control" 
                                                    id="validationCustomFoto" 
                                                    aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">
                                                    Foto tidak boleh kosong.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">Create</button>
                                            <a class="btn btn-secondary" 
                                                href="../../master-data/product.php" role="button">
                                                Cancel
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- Footer Start -->
                <?php include_once ("../layouts/footer.php"); ?>
                <!-- Footer End -->
            </div>
        </div>

        <script src="../../../assets/plugin/AdminKit/js/app.js"></script>
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