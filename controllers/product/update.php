<?php 

    include_once ("../../connection/db.php");

    $id = $_GET['id'];

    $name = $_POST['nama'];
    $category = $_POST["categories_id"];
    $chef = $_POST["chef_id"];
    $size = $_POST["size"];
    $description = $_POST["description"];
    $price = $_POST["price"];
    $previous = $_POST['previous'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if (unlink("../../assets/img/uploads/$previous")) {
        if (!in_array($ext,$ekstensi) ) {
            header("Location:../../admin/master-data/product.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {		
                $image = $rand.'_'.$filename;
                move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
                mysqli_query($conn, "UPDATE product SET chef_id = '$chef', categories_id = '$category', name = '$name', 
                    size = '$size', description = '$description', price = '$price', image = '$image'  
                    WHERE id = '$id';");
                header("Location:../../admin/master-data/product.php?success=update");
            } else {
                header("Location:../../admin/master-data/product.php?alert=gagal_ukuran");
            }
        }
    }