<?php
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    include "../koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO pelanggan 
    (nama_pelanggan, tanggal_lahir, alamat, telp, username, password) VALUES 
    ('".$nama_pelanggan."', '".$tanggal_lahir."','".$alamat."','".$telp."','".$username."','".md5($password)."')");

    if ($input) {
        echo "<script>alert('Successfully Create A Givenchy Account');location.href='login.php';</script>";
    }
    else {
        echo "<script>alert('Failed To Create Givenchy Account');location.href='register.php';</script>";
    }
?>