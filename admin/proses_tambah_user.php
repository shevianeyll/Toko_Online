<?php
if($_POST){
    $nama_pelanggan= $_POST['nama_pelanggan'];
    $tanggal_lahir= $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];
    $telp= $_POST['telp'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    include "../koneksi.php";
    global $conn;
    $insert=mysqli_query($conn,"INSERT into pelanggan (nama_pelanggan, tanggal_lahir, alamat, telp, username, password) value ('".$nama_pelanggan."','".$tanggal_lahir."','".$alamat."','".$telp."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script>alert('Success to Add New User');location.href='user.php';</script>";
    } else {
        echo "<script>alert('Failed to Add New User');location.href='user.php';</script>";
    }
}
?>