<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <h1 class="card-header">Add New User</h1>
            <div class="card-body">
                <form method="POST" action="proses_tambah_user.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_pelanggan" class="form-label">Name of User</label>
                        <input type="text" class="form-control" name="nama_pelanggan" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="tanggal_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Address</label>
                        <textarea class="form-control" name="alamat" row="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telp" class="form-label">Contact</label>
                        <input type="text" class="form-control" name="telp" placeholder="+62" required>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="*****" required>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html><br>

<?php
        include "footer.php";
    ?>