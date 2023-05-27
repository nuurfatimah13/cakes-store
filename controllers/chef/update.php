<?php 

    include_once ("../../connection/db.php");

    $id = $_GET['id'];

    $name = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $previous = $_POST['previous'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if (unlink("../../assets/img/uploads/$previous")) {
        if (!in_array($ext,$ekstensi) ) {
            header("Location:../../admin/master-data/chef.php?alert=gagal_ekstensi");
        } else {
            if ($ukuran < 1044070) {		
                $image = $rand.'_'.$filename;
                move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
                mysqli_query($conn, "UPDATE chef SET name = '$name', divisi = '$divisi', telp = '$telp', email = '$email', 
                    address = '$address', image = '$image'  
                    WHERE id = '$id';");
                header("Location:../../admin/master-data/chef.php?success=update");
            } else {
                header("Location:../../admin/master-data/chef.php?alert=gagal_ukuran");
            }
        }
    }