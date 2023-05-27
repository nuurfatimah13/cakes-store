<?php 

    include_once ("../../connection/db.php");

    $id = $_GET['id'];

    $name = $_POST['nama'];

    $result = mysqli_query($conn, "UPDATE categories SET name = '$name' 
            WHERE id = '$id';");

    header("Location:../../admin/master-data/categories.php?success=update");