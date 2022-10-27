<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="../admin/css/stylesheet_keranjang.css">
    <link  rel="stylesheet" href="../admin/css/stylesheet_navbar.css">
    <link rel="icon" type="image/png" href="../img/Givenchypol.png" />
    <!-- Kit Font Awesome -->
    <script src="https://kit.fontawesome.com/1a01d4b743.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
include "../koneksi.php";
global $conn;

?>
<div class="container mt-5 mb-5">
    <div class="card">
        <div class="card-header">
            <h1>Checkout Product</h1>
            <br><br>

            <h4>Address :</h4>
            <p><?=$_SESSION['alamat']?></p>

            <br>

        </div>
        <div class="card-body">
            <?php
            if (@$_SESSION['cart'] == null) {
                echo "Keranjang kosong";
            }
            else {
                ?>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">PICTURE</th>
                        <th scope="col">NAME OF PRODUCT</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">QTY</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $grandtotal=array();
                    foreach (@$_SESSION['cart'] as $key => $value) :

                        $grandtotal[]=$value["harga"]*$value['qty'];
                        include '../koneksi.php';
                        $foto = mysqli_query($conn, 'SELECT * FROM produk WHERE id_produk = "'.$value['id_produk'].'" ');
                        $dt_foto = mysqli_fetch_array($foto);
                        ?>
                        <tr>
                            <td><?=($key+1)?></td>
                            <td><img src="../img/<?=$dt_foto['foto_produk']?>" class="img-fluid rounded-start" width="150px" height="150px" alt="img" ></td>
                            <td><?=$value['nama_produk']?></td>
                            <td>$ <?php echo $value["harga"]; ?>.00</td>
                            <td><?=$value['qty']?></td>
                            <td>$ <?php echo number_format($value["qty"] * $value["harga"]);?>.00</td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                <br>
                <div class="d-flex flex-row-reverse">
                <?php
                $ongkir = 3;
                echo "Total : Rp ". number_format(array_sum($grandtotal)).".000";
                echo "<br>";
                echo "Shipping Cost : Rp ". number_format($ongkir).".000";
                echo "<br>";
                $totalBarang = array_sum($grandtotal);
                $totalBarang += $ongkir;
                echo "Price Total : Rp ". number_format($totalBarang).".000";
                ?>
                <?php if(isset($_SESSION['status_login'])):?>
                    <a href="checkout.php"><button class="btn btn-outline-danger">Buy</button></a>
                <?php else: ?>
                    <a href="login.php"><button class="btn1">Checkout</button></a>
                <?php endif ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>