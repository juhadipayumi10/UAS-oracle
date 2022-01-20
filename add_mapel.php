<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_mapel = $_POST['id_mapel'];
  $nama_mapel = $_POST['nama_mapel'];
  $jam_mapel = $_POST['jam_mapel'];

	$query = "INSERT INTO mata_pelajaran_10016 (ID_MAPEL,NAMA_MAPEL,JAM_MAPEL) VALUES ('".$id_mapel."','".$nama_mapel."','".$jam_mapel."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='mapel.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='mapel.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: mapel.php'); 
}