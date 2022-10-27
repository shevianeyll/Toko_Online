<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/produk.css">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <title>Beauty Collection</title>
</head>
<body>
<?php
    include "header.php";
?><br>
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
</section>
<div><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="mt-2 mb-3 text-center">Check Our Beautiful Collection</h2><br>
                <form method="POST" action="produk.php" class="d-flex">
            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form><br>
            </div>
        <div class="card-body">
            <div class="row">
                <?php
                    include "../koneksi.php";
                    if (isset($_POST['cari'])){
                        $cari = $_POST['cari'];
                        $query_produk = mysqli_query($conn,"select * from produk where id_produk = '$cari' or nama_produk like '%$cari%' or merek like '$cari'");
                    }
                    else{
                        $query_produk = mysqli_query($conn, "select * from produk");
                    }
                    // $qry_produk=mysqli_query($conn,"select * from produk"); 
                    while($dt_produk=mysqli_fetch_array($query_produk)){ //fetcharray digunakan mengambil data berupa array
                ?>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-3">
                    <div class="card" >
                    <img src="../img/<?=$dt_produk['foto_produk']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$dt_produk['nama_produk']?></h5>
                            <p class="card-text"><?=$dt_produk['kategori']?></p>
                            <p class="card-title">Rp <?=$dt_produk['harga']?>.000</p>
                            <a href="beli.php?id_produk=<?=$dt_produk['id_produk']?>" class="btn btn-outline-danger">Buy</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <?php
                }
                ?>
            </div>
        </div>
        
        </div>
        </div>
</div>
</body>
</html><br>
<?php
    include "footer.php";
?>