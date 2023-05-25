<?php 

    include_once ("../../connection/db.php");

    $id = $_GET['id'];

    $result = mysqli_query($conn, "DELETE FROM categories WHERE id = '$id';");

    header("Location:../../admin/master-data/categories.php");