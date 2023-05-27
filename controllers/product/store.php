<?php 

    include_once ("../../connection/db.php");

    $chef = $_POST['chef_id'];
    $category = $_POST['categories_id'];
    $name = $_POST['nama'];
    $size = $_POST['size'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("Location:../../admin/master-data/product.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $image = $rand.'_'.$filename;
            move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO product (chef_id, categories_id, name, size, description, price, image) 
                                    VALUES ('$chef', '$category', '$name', '$size', '$description', '$price', '$image')");
            header("Location:../../admin/master-data/product.php?success=create");
        }else{
            header("Location:../../admin/master-data/product.php?alert=gagal_ukuran");
        }
    }