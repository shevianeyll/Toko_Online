<?php
$conn=mysqli_connect('localhost','root','','toko_online'); //connect ke database
/* check connection */
if (mysqli_connect_errno()) { //memunculkan error berada di baris ke berapa
    printf("Connect failed: %s\n", mysqli_connect_error()); //memunculkan error
    exit();
}
?>