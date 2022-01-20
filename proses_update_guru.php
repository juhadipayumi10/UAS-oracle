<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $tlp = $_POST['tlp'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  guru_10016  SET NAMA ='".$nama."', TLP ='".$tlp."' WHERE NIP ='".$nip."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data Guru berhasil diubah'); window.location.href='guru.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data Guru gagal diubah'); window.location.href='guru.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: guru.php'); 
}