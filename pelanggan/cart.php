<?php
    include "header.php";
    include "../koneksi.php";
?><br>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 align="center">Beauty Cart</h2><br>
        </div>
        <div class="card-body">
            <table class="table table-hover striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>PICTURE</th>
                        <th>NAME OF PRODUCT</th>
                        <th>AMOUNT</th>
                        <th>PRICE</th>
                        <th>TOTAL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                if (@$_SESSION['cart']!=null){
                    foreach (@$_SESSION['cart'] as $key_produk => $val_produk): //
                        
                ?>
                    <tr>
                        <td><?=($key_produk+1)?></td>
                        <td><img src="../img/<?=$val_produk['foto_produk']?>" width="100"></td>
                        <td><?=$val_produk['nama_produk']?></td>
                        <td><?=$val_produk['qty']?></td>
                        <td>Rp <?=$val_produk['harga']?>.000</td>
                        <td>Rp <?=$val_produk["qty"] * $val_produk["harga"];?>.000</td>
                        <td> 
                            <a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete this cart?')">Delete</a>
                        </td> 
                    </tr>
                <?php 
                    endforeach;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <div><br>
        <a href="checkdata.php" class="btn btn-outline-danger">Check Out</a>
    </div><br>
</div>
<?php
    include "footer.php";
?>