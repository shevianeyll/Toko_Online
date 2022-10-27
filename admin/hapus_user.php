<?php
 if($_GET['id_pelanggan']){
    include "../koneksi.php";
    $qry_hapus=mysqli_query($conn,"DELETE from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete User');
        location.href='user.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete User');
        location.href='user.php';</script>";
    }
 }
?>