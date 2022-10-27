<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
</head>
<body>
    <?php
        include "header.php";
        include "../koneksi.php";
        global $conn;
        $query_detail_pelanggan = mysqli_query($conn, "SELECT * FROM pelanggan where id_pelanggan = '".$_SESSION['id_pelanggan']."'");
        $data_pelanggan = mysqli_fetch_array($query_detail_pelanggan);
    ?>

    <div class="container content">
        <div class="card-body align-self-center my-5">
        <h3 class="text-center">Profile</h3>
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 align-self-center">
                <img src="../img/profil.jpg" width="80%">
            </div>
            <div class="col-md-8">
                <form action="proses_ubah_profil.php?" method="POST">
                    <input type="hidden" name="id_pelanggan" value="<?=$data_pelanggan['id_pelanggan']?>">
                    <!-- nama petugas -->
                    <div class="mb-3">
                         <label class="form-label">Your Name :</label>
                        <input type="text" name="nama_pelanggan"  class="form-control" value="<?=$data_pelanggan['nama_pelanggan']?>" required>
                    </div>
                    <!-- ttl -->
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Date of Birth :</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="<?=$data_pelanggan['tanggal_lahir']?>" required>
                    </div>
                    <!-- alamat -->
                    <div class="mb-3">
                        <label class="form-label">Address :</label>
                        <textarea name="alamat" class="form-control textarea" rows="1" required><?=$data_pelanggan['alamat']?></textarea>
                    </div>
                    <!-- no.telp -->
                    <div class="mb-3">
                         <label class="form-label">Contact :</label>
                        <input type="number" name="telp"  class="form-control" value="<?=$data_pelanggan['telp']?>" required>
                    </div>
                    <!-- username pelanggan-->
                    <div class="mb-3">
                        <label class="form-label">Username :</label>
                        <input type="text" name="username"  class="form-control" value="<?=$data_pelanggan['username']?>" required>
                    </div>
                    <!-- password-->
                    <div class="mb-3">
                        <label class="form-label">Password :</label>
                        <input type="password" name="password"  class="form-control" value="" placeholder="******">
                    </div>
                    <input type = "submit" name ="simpan" value ="Save Profile" class = "btn btn-outline-success">
                </form>
            </div>
        </div>
        </div>
    </div>
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
</body>
</html>