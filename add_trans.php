<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $atk = $_POST['atk'];
  $total = $_POST['total'];

	$query = "INSERT INTO transaksi (ID,ATK,TOTAL,HARGA) VALUES ('".$id."','".$atk."','".$harga."','".$harga."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='transaksi.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='transaksi.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: transaksi.php'); 
}