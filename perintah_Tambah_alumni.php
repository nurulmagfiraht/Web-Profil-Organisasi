<?php

include ('koneksi.php');

$nama_alumni	     = $_POST['nama_alumni'];
$angkatan_alumni     = $_POST['angkatan_alumni'];
$nomor_alumni        = $_POST['nomor_alumni'];
$email_alumni	     = $_POST['email_alumni'];
$alamat_makassar     = $_POST['alamat_makassar'];
$alamat_soppeng      = $_POST['alamat_soppeng'];


if (isset($_POST['submit'])){

//insert into database
$sql        = "INSERT INTO table_alumni(nama_alumni,angkatan_alumni,nomor_alumni,email_alumni,alamat_makassar,alamat_soppeng) values 
('$nama_alumni','$angkatan_alumni','$nomor_alumni','$email_alumni','$alamat_makassar','$alamat_soppeng') ";
mysqli_query($kon,$sql) or die(mysqli_error());

echo '<script language="javascript"> location.href ="dataAlumni_admin.php?msg=success"; </script>';


}

else

{


}



?>
