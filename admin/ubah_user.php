<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <?php
        include "header.php";
        include "../koneksi.php";
        $query_pelanggan = mysqli_query($conn, "SELECT * from pelanggan where id_pelanggan='".$_GET['id_pelanggan']."'"); //get=karena datanya mengambil dr url
        $data_pelanggan = mysqli_fetch_array($query_pelanggan); //diubah ke array assosiatif dan numerik
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Edit User</h1>
            <div class="card-body">
                <form method="POST" action="proses_ubah_user.php" enctype="multipart/form-data">
                    <input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>">
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Name of User</label>
                        <input type="text" class="form-control" name="nama_pelanggan" value="<?=$data_pelanggan['nama_pelanggan']?>" placeholder="Input Name of Product" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?=$data_pelanggan['tanggal_lahir']?>" placeholder="Input Description of Product" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <input type="textarea" class="form-control" name="alamat" value="<?=$data_pelanggan['alamat']?>" placeholder="Input Name of Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Contact</label>
                        <input type="text" class="form-control" name="telp" value="<?=$data_pelanggan['telp']?>" placeholder="Input Price of Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" value="<?=$data_pelanggan['username']?>" placeholder="Input Price of Brand" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" value=""<?=$data_pelanggan['password']?>"" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>