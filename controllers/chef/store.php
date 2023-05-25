<?php 

    include_once ("../../connection/db.php");

    $name = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $rand = rand();
    $ekstensi =  array('png','jpg','jpeg','gif');
    $filename = $_FILES['image']['name'];
    $ukuran = $_FILES['image']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
    if(!in_array($ext,$ekstensi) ) {
        header("Location:../../admin/master-data/chef.php?alert=gagal_ekstensi");
    }else{
        if($ukuran < 1044070){		
            $image = $rand.'_'.$filename;
            move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/uploads/'.$rand.'_'.$filename);
            mysqli_query($conn, "INSERT INTO chef (name, divisi, telp, email, address, image) VALUES 
                ('$name', '$divisi', '$telp', '$email', '$address', '$image')");
            header("Location:../../admin/master-data/chef.php");
        }else{
            header("Location:../../admin/master-data/chef.php?alert=gagal_ukuran");
        }
    }