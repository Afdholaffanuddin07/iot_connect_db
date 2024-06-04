<?php
include('koneksi.php');
date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i:s');
$tanggal = date('d-m-y');
$status_pintu = $_GET['status_pintu'];

$input = mysqli_query($konek)

?>