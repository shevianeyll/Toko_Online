<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/produk_admin.css">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <title>List of Product</title>
</head>
<body>
<?php
    include "header.php";
?>
    <!-- poster -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up">Find your beauty with<br><b><span>Givenchy Beauty</span></b></h2>
                <p data-aos="fade-up" data-aos-delay="100">Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#book-a-table" class="btn-book-a-table">Book a Table</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="../img/home 1.png " class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </div>
</section><br>
<!-- isi -->
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3  class="mt-2 mb-3 text-center">List of Product</h3>
            <form method="POST" action="produk.php" class="d-flex">
            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form><br>
        </div>
        <div class="card-body">
<a href="tambah_produk.php" class="btn btn-outline-danger">Add New Product</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>PHOTO</th>
                <th>NAME OF PRODUCT</th>
                <th>NAME OF BRAND</th>
                <th>PRICE</th>
                <th>DESCRIPTION</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include "../koneksi.php";
            global $conn;
            if (isset($_POST['cari'])){
                $cari = $_POST['cari'];
                $query_produk = mysqli_query($conn,"select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or merek like '$cari'");
            }
            else{
                $query_produk = mysqli_query($conn, "select * from produk");
            }
            $no=0;
            while($data_produk = mysqli_fetch_array($query_produk)){
                $no++;
        ?> 
            <tr>
                <td><?=$no?></td>
                <td><img src ="../img/<?=$data_produk['foto_produk'];?>" width="50px"</td>
                <td><?=$data_produk['nama_produk']?></td>
                <td><?=$data_produk['merek']?></td>
                <td>$<?=$data_produk['harga']?>.00</td>
                <td width ="700px"><?=$data_produk['deskripsi']?></td>
                <td> 
                <a href="ubah_produk.php?id_produk=<?=$data_produk ['id_produk']?>" class="btn btn-outline-success">Edit</a>
                <a href="hapus_produk.php?id_produk=<?=$data_produk ['id_produk']?>" class="btn btn-outline-danger"
                onclick="return confirm('Are you sure want to delete this product?')">Delete</a> 
                </td>    <!-- onclick digunakan agar ketika tombol dipencet muncul konfirmasi sbb -->
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
</body>
</html><br>
<?php
    include "footer.php";
?>