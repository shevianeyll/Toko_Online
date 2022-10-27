<?php
    if ($_POST) {
        $id_pelanggan= $_POST['id_pelanggan'];
        $nama_pelanggan= $_POST['nama_pelanggan'];
        $tanggal_lahir= $_POST['tanggal_lahir'];
        $alamat= $_POST['alamat'];
        $telp= $_POST['telp'];
        $username= $_POST['username'];
        $password= $_POST['password'];

        include "../koneksi.php";
        global $conn;
        if (empty ($password)) {
            $update= mysqli_query ($conn, "UPDATE pelanggan set nama_pelanggan='".$nama_pelanggan."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', telp='".$telp."',username='".$username."' where id_pelanggan='".$id_pelanggan."' ") or die (mysqli_error($conn));
            if($update){
                echo "<script> alert ('Success to Update Profile'); location.href='user.php' ; </script>";
            }else{
                echo "<script> alert ('Failed to Update Profile'); location.href='user.php' ; </script>";
            }
        }else {
            $update= mysqli_query ($conn, "UPDATE pelanggan set nama_pelanggan='".$nama_pelanggan."', tanggal_lahir='".$tanggal_lahir."', alamat='".$alamat."', telp='".$telp."', username='".$username."', password='" .md5 ($password)."' where id_pelanggan='".$id_pelanggan."' ") or die (mysqli_error($conn));
            if ($update) {
                echo "<script> alert ('Success to Update Profile'); location.href='user.php' ; </script>";  
            }else{
                echo "<script> alert ('Failed to Update Profile'); location.href='user.php' ; </script>";
            }
        }
    }
?>