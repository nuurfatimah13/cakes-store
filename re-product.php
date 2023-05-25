        <div class="container-fluid about py-5">
            <div class="container">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                    <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
                </div>
                <div class="tab-class text-center">
                    <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase border-inner p-4 mb-5">
                        <li class="nav-item">
                            <a class="nav-link text-white active" data-bs-toggle="pill" href="#tab-1">Birthday</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-2">Wedding</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" data-bs-toggle="pill" href="#tab-3">Custom</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-3">
                                <?php
                                    include "connection/db.php";
                                    $query = $conn->query("SELECT * FROM product WHERE categories_id = 1");
                                    if(mysqli_num_rows($query)>0){ 
                                        while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex h-100">
                                        <div class="flex-shrink-0">
                                            <img class="img-fluid" src="assets/img/uploads/<?= $data["image"] ?>" 
                                                alt="foto-cake-<?= $data["name"] ?>" style="width: 150px; height: 85px;">
                                            <h4 class="bg-dark text-primary p-2 m-0">
                                                Rp. <?= number_format($data["price"], 2, ',', '.') ?>
                                            </h4>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                            <h5 class="text-uppercase"><?= $data["name"] ?></h5>
                                            <span><?= $data["description"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } 
                                ?>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-3">
                                <?php
                                    include "connection/db.php";
                                    $query = $conn->query("SELECT * FROM product WHERE categories_id = 2");
                                    if(mysqli_num_rows($query)>0){ 
                                        while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex h-100">
                                        <div class="flex-shrink-0">
                                            <img class="img-fluid" src="assets/img/uploads/<?= $data["image"] ?>" 
                                                alt="foto-cake-<?= $data["name"] ?>" style="width: 150px; height: 85px;">
                                            <h4 class="bg-dark text-primary p-2 m-0">
                                                Rp. <?= number_format($data["price"], 2, ',', '.') ?>
                                            </h4>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                            <h5 class="text-uppercase"><?= $data["name"] ?></h5>
                                            <span><?= $data["description"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } 
                                ?>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-3">
                                <?php
                                    include "connection/db.php";
                                    $query = $conn->query("SELECT * FROM product WHERE categories_id = 3");
                                    if(mysqli_num_rows($query)>0){ 
                                        while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex h-100">
                                        <div class="flex-shrink-0">
                                            <img class="img-fluid" src="assets/img/uploads/<?= $data["image"] ?>" 
                                                alt="foto-cake-<?= $data["name"] ?>" style="width: 150px; height: 85px;">
                                            <h4 class="bg-dark text-primary p-2 m-0">
                                                Rp. <?= number_format($data["price"], 2, ',', '.') ?>
                                            </h4>
                                        </div>
                                        <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">
                                            <h5 class="text-uppercase"><?= $data["name"] ?></h5>
                                            <span><?= $data["description"] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                        }
                                    } 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>