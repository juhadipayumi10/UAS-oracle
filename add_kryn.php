<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_karyawan = $_POST['id_karyawan'];
  $nip = $_POST['nip'];
  $nama_karyawan = $_POST['nama_karyawan'];
  $alamat_karyawan = $_POST['alamat_karyawan'];
  $tlp_karyawan = $_POST['tlp_karyawan'];

	$query = "INSERT INTO karyawan VALUES ('".$id_karyawan."','".$nip."','".$nama_karyawan."','".$alamat_karyawan."','".$tlp_karyawan."')";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
	window.location.href='karyawan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
	window.location.href='karyawan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: karyawan.php'); 
}