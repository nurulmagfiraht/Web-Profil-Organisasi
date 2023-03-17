
<?php

session_start();

include ('koneksi.php');

$username	= $_POST['Username'];
$password	= md5(trim($_POST['Password']));
$submit     = $_POST['submit'];

if (isset($submit)){

//insert into database
$sql        = "INSERT INTO table_admin (nama_admin,password) values ('$username','$password') ";
mysqli_query($kon,$sql) or die(mysqli_error());

echo '<script language="javascript"> location.href ="login.php?msg=success"; </script>';


}

else

{
    echo '<script language="javascript"> location.href ="login.php?msg=error_register"; </script>';

}



?>
