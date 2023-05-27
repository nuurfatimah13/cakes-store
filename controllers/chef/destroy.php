<?php 

    include_once ("../../connection/db.php");

    $id = $_GET['id'];

    $img = "SELECT image FROM chef WHERE id = '$id';";
    $result = $conn->query($img);
    $row = $result->fetch_assoc();
    unlink("../../assets/img/uploads/$row[image]");

    $result = mysqli_query($conn, "DELETE FROM chef WHERE id = '$id';");

    header("Location:../../admin/master-data/chef.php?success=delete");