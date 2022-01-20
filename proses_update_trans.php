<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $atk = $_POST['atk'];
  $total = $_POST['total'];
  $HARGA = $_POST['harga'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  transaksi  SET ATK ='".$atk."', TOTAL ='".$total."', HARGA ='".$harga."' WHERE ID ='".$id."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Guru berhasil diubah'); window.location.href='mapel.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data mata_pelajaran gagal diubah'); window.location.href='mapel.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mapel.php'); 
}