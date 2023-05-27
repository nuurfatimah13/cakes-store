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
        <link rel="shortcut icon" href="../../assets/img/icons/favicon.ico" />

        <link rel="canonical" href="https://demo-basic.adminkit.io/" />

        <title>Administrator | Cakes Fact</title>

        <link href="../../assets/plugin/AdminKit/css/app.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <script type="text/javascript" src="../../assets/js/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="../../assets/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="../../assets/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../../assets/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    </head>
    <body>
        <div class="wrapper">
            <nav id="sidebar" class="sidebar js-sidebar">
                <div class="sidebar-content js-simplebar">
                    <a class="sidebar-brand" href="index.php">
                        <img src="../../assets/img/icons/logo.png" alt="logo" width="70%" style="margin-left: 0.5rem;">
                    </a>
                    <ul class="sidebar-nav">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="../index.php">
                                <i class="align-middle" data-feather="sliders"></i> 
                                <span class="align-middle">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./chef.php">
                                <i class="align-middle" data-feather="users"></i> 
                                <span class="align-middle">Chef</span>
                            </a>
                        </li>
                        <li class="sidebar-item active">
                            <a class="sidebar-link" href="./categories.php">
                                <i class="align-middle" data-feather="grid"></i> 
                                <span class="align-middle">Categories</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="./product.php">
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
                        <h1 class="h3 mb-3">Dashboard / <strong>Categories</strong></h1>
                        <div class="col-sm-12">
                            <?php 
                                // MESSAGE
                                if (isset($_GET['success'])){
                                    if ($_GET['success']=='create'){
                                        ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><i class="icon fa fa-check"></i>Data added successfully!</strong>
                                            <button type="button" class="btn-close" 
                                                data-bs-dismiss="alert" aria-label="Close">
                                            </button>
                                        </div>			
                                        <?php
                                    } elseif($_GET['success']=="update"){
                                        ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><i class="icon fa fa-check"></i>Data updated successfully!</strong>
                                            <button type="button" class="btn-close" 
                                                data-bs-dismiss="alert" aria-label="Close">
                                            </button>
                                        </div>							
                                        <?php
                                    } elseif($_GET['success']=="delete"){
                                        ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong><i class="icon fa fa-check"></i>Data deleted successfully!</strong>
                                            <button type="button" class="btn-close" 
                                                data-bs-dismiss="alert" aria-label="Close">
                                            </button>
                                        </div>							
                                        <?php
                                    }
                                }
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                        include "../../connection/db.php";
                                        $query = $conn->query("SELECT * FROM categories");
                                    ?>
                                    <h3 class="card-title">Data Categories</h3>
                                    <a class="btn btn-primary btn-md mt-4 mb-3" 
                                        href="../forms/categories/create-cg.php" role="button">
                                        Create Data
                                    </a>
                                    <table id="example" class="table table-striped" 
                                        style="width:100%">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                if(mysqli_num_rows($query)>0){ 
                                                    $no = 1;
                                                    while ($data = mysqli_fetch_array($query)) {
                                                
                                            ?>
                                            <tr>
                                                <td scope="row"><?= $no ?></td>
                                                <td><?= $data["name"] ?></td>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" 
                                                        href="../../controllers/categories/destroy.php?id=<?= $data["id"] ?>" 
                                                        onclick="alert('Anda yakin ingin menghapus data ini?')">
                                                        Delete
                                                    </a>
                                                    |
                                                    <a class="btn btn-warning btn-sm" 
                                                        href="../forms/categories/edit-cg.php?id=<?= $data["id"] ?>">
                                                        Update
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php 
                                                        $no++; 
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
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

        <script src="../../assets/plugin/AdminKit/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#example').DataTable({
                    "aLengthMenu": [[3, 5, 10, 15, 25, 50], [3, 5, 10, 15, 25, 50]],
                });
            });
        </script>
    </body>
</html>