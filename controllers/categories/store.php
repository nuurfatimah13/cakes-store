<?php 

    include_once ("../../connection/db.php");

    $name = $_POST['nama'];

    $result = mysqli_query($conn, "INSERT INTO categories (name) VALUES ('$name');");

    header("Location:../../admin/master-data/categories.php?success=create");