<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_mapel = $_POST['id_mapel'];
  $nama_mapel = $_POST['nama_mapel'];
  $jam_mapel = $_POST['jam_mapel'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  mata_pelajaran_10016  SET NAMA_MAPEL ='".$nama_mapel."', JAM_MAPEL ='".$jam_mapel."' WHERE ID_MAPEL ='".$id_mapel."'";
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