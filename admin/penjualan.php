<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
          rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
</head>
<body>
    <?php
        include "header.php";
    ?>
    <br></br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">Product Purchase History</h3>
                <form method="POST" action="purchase.php" class="d-flex">
                <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form><br>
            </div>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME OF USER</th>
                    <th scope="col">PHOTO PRODUCT</th>
                    <th scope="col">NAME OF PRODUCT</th>
                    <th scope="col">ORDER DATE</th>
                    <th scope="col">ARRIVED</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">DELETE</th>
                    <th scope="col">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                     include "../koneksi.php";
                global $conn;
                if (isset($_POST["cari"])) {
                    // jika ada keyword pencarian
                    $cari=$_POST['cari'];
                    $query_transaksi= mysqli_query($conn,"SELECT * from transaksi where id_transaksi like '%$cari%' or id_pelanggan like '%$cari%' or tanggal_transaksi like '%$cari%'");
                }else{
                    //jika tidak ada keyword pencarian
                    $query_transaksi= mysqli_query($conn,"SELECT * from transaksi join pelanggan on pelanggan.id_pelanggan= transaksi. id_pelanggan join detail_transaksi on detail_transaksi. id_transaksi=transaksi . id_transaksi join produk on produk. id_produk= detail_transaksi.id_produk  ORDER BY id_detail_transaksi DESC ") or die (mysqli_error($conn));
                }
                    $no=0;
                    while($data_transaksi=mysqli_fetch_array($query_transaksi)){
                        $no++;
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$data_transaksi['nama_pelanggan']?></td>
                        <td><img src="../img/<?=$data_transaksi['foto_produk']?>" class="img-fluid rounded-start" width="150px" height="150px" alt="..." ></td>
                        <td><?= $data_transaksi["nama_produk"]; ?></td>
                        <td><?= $data_transaksi["tanggal_transaksi"]; ?></td>
                        <td><?= $data_transaksi["tanggal_tiba"]; ?></td>
                        <td><?= $data_transaksi["alamat"]; ?></td>
                        <td><a href="hapus_penjualan.php?id_transaksi=<?=$data_transaksi ['id_transaksi']?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete this order?')">Delete</a> </td>      
                        <?php
                          if ($data_transaksi['status'] == "New"):
                              ?>
                                <td><a href="acc.php?id_transaksi=<?=$data_transaksi ['id_transaksi']?>" class="btn btn-outline-primary">
                                    <?= $data_transaksi['status'] ?></a>
                                </td><?php
                          elseif ($data_transaksi['status'] == "Confirm"):
                              ?>
                                <td><a href="acc.php?id_transaksi=<?=$data_transaksi ['id_transaksi']?>" class="btn btn-outline-warning">
                                    <?= $data_transaksi['status'] ?></a>
                                </td>
                                <?php
                          elseif ($data_transaksi['status'] == "Process"):
                              ?>
                                <td><a href="acc.php?id_transaksi=<?=$data_transaksi ['id_transaksi']?>" class="btn btn-outline-success">
                                    <?= $data_transaksi['status'] ?></a>
                                </td><?php
                          elseif ($data_transaksi['status'] == "Done"):
                              ?>
                                <td><a href="acc.php?id_transaksi=<?=$data_transaksi ['id_transaksi']?>" class="btn btn-outline-primary">
                                    <?= $data_transaksi['status'] ?></a>
                                </td><?php
                          elseif ($data_transaksi['status'] == "Received"):
                              ?>
                              <td><div class="alert alert-success" role="alert"><?= $data_transaksi['status'] ?></div>
                          <?php endif; ?>
                              <?php
                              include "../koneksi.php";
                              ?>
                        </td>    
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
     
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
     <br><br><br>
</body>
</html>

<?php 
        include "footer.php";
?>