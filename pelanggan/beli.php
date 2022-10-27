<?php
    include "header.php";
    include "../koneksi.php";
    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>
<h2 align="center">Add to Cart</h2><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <img src="../img/<?=$dt_produk['foto_produk']?>"class="card-img-top">
    </div>
    <div class="col-md-7">
        <form action="masukkankeranjang.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <td>Name of Product</td>
                    <td><?=$dt_produk['nama_produk']?></td>
                </tr>
                <tr>
                    <td>Deskription</td>
                    <td><?=$dt_produk['deskripsi']?></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><?=$dt_produk['kategori']?></td>
                </tr>
                <tr>
                    <td>Brand</td>
                    <td><?=$dt_produk['merek']?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>Rp<?=$dt_produk['harga']?>.000</td>
                </tr>
                <tr>
                    <td>Qty</td>
                    <td><input type="number" name="jumlah_beli" value="1"></td>
                </tr>
                <tr>
                    <td colspan="2"><input class="btn btn-outline-danger" type="submit" value="Add to Cart"></td>
                </tr>
                </thead>
            </table>
        </form>
    </div>
</div><br>
<?php
    include "footer.php";
?>