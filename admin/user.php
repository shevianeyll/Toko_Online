<!DOCTYPE html>
<html>
<head>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <title>List of User</title>
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br></br>
<!-- isi -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3  class="mt-2 mb-3 text-center">List of User</h3>
            <form method="POST" action="user.php" class="d-flex">
            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form><br>
        </div>
        <div class="card-body">
<a href="tambah_user.php" class="btn btn-outline-danger">Add New User</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAME OF USER</th>
                <th>DATE OF BIRTH</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
                <th>USERNAME</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "../koneksi.php";
            global $conn;
            if (isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $query_pelanggan = mysqli_query($conn,"SELECT * from pelanggan where id_pelanggan = '$cari' or nama_pelanggan like '%$cari%'");
            }
            else{
                $query_pelanggan = mysqli_query($conn, "SELECT * from pelanggan");
            }
            $no=0;
            while($data_pelanggan = mysqli_fetch_array($query_pelanggan)){
                $no++;
        ?> 
            <tr>
                <td><?=$no?></td>
                <td><?=$data_pelanggan['nama_pelanggan']?></td>
                <td><?=$data_pelanggan['tanggal_lahir']?></td>
                <td><?=$data_pelanggan['alamat']?></td>
                <td><?=$data_pelanggan['telp']?></td>
                <td><?=$data_pelanggan['username']?></td>
                <td> 
                <a href="ubah_user.php?id_pelanggan=<?=$data_pelanggan ['id_pelanggan']?>" class="btn btn-outline-success">Edit</a>
                <a href="hapus_user.php?id_pelanggan=<?=$data_pelanggan ['id_pelanggan']?>" class="btn btn-outline-danger"
                onclick="return confirm('Are you sure want to delete this user?')">Delete</a> 
                </td>    <!-- onclick digunakan agar ketika tombol dipencet muncul konfirmasi sbb -->
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    </div><br>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>
<?php
    include "footer.php";
?>