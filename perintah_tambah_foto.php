<?php
 include "koneksi.php";
 $keterangan   = $_POST['keterangan'];
 
 //image
 $photo      = $_FILES['photo']['name'];
 $photo_tmp  = $_FILES['photo']['tmp_name'];
 $photo_size = $_FILES['photo']['size'];
 
 // Rename image
 $new_photo 	= date('dmYHis')."-kegiatan-".$photo;
 
 
 if (isset($_POST['submit'])){
 
 //insert into database
 $sql        = "INSERT INTO table_kegiatan (photo,keterangan) values ('$new_photo','$keterangan') ";
 mysqli_query($kon,$sql) or die(mysqli_error($kon));
 
 //upload to folder
 $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/organisasi/assets/img/';
 move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile . $new_photo);
 //echo $uploadfile.$new_photo;
 
 
 echo '<script language="javascript"> location.href ="foto_kegiatan_admin.php?msg=success"; </script>';
 
 
 }
 
 else
 
 {
 
 
 }
 
 
 
?>
