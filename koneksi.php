<?php
$user="payumi_282";
$pass="282";
$database="LOCALHOST/XE";

$con = oci_connect($user, $pass, $database);
if($con){
	echo "";

}
else{ 
	$err = oci_error();
echo "Gagal". $err['text'];
}
?>