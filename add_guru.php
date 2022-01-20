<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $tlp = $_POST['tlp'];

	$query = "INSERT INTO guru_10016 (NIP,NAMA,TLP) VALUES ('".$nip."','".$nama."','".$tlp."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='guru.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='guru.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: guru.php'); 
}