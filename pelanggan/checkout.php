<?php
    session_start(); 
    include "../koneksi.php";
    $cart = @$_SESSION['cart'];
    if (count($cart) > 0) {
        $lama_pengiriman = 3;
        $tanggal_tiba = date('Y-m-d', mktime(0,0,0,date('m'),date('d')+$lama_pengiriman,date('Y')));

        $tanggal_transaksi = date('Y-m-d');
        $query_transaksi = mysqli_query($conn, "INSERT INTO transaksi (id_pelanggan, tanggal_transaksi, tanggal_tiba, status)
        VALUES ('".$_SESSION['id_pelanggan']."', '".$tanggal_transaksi."','".$tanggal_tiba."', 'New')");
        mysqli_error($conn);

        if ($query_transaksi) {
            $id = mysqli_insert_id($conn);
            foreach ($cart as $key => $value) {
                $qty = $value['qty'];
                $harga = $value['harga'];
                $subtotal = $qty*$harga;
                mysqli_query($conn, "INSERT INTO detail_transaksi (id_transaksi, id_produk, qty, subtotal)
                VALUES ('".$id."', '".$value['id_produk']."', '".$qty."', '".$subtotal."')");
                mysqli_error($conn);
            }
            unset($_SESSION['cart']);
            echo "<script>alert('Youre success to checkout this product');location.href='purchase.php'</script>";
        }
        else{
            echo "<script>alert('Youre failed to checkout this product');location.href='cart.php'</script>";
        }
    }
?>