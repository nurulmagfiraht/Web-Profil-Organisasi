<?php
session_start();
include ('koneksi.php');

$username	= $_POST['Username'];
$password	= md5(trim($_POST['Password']));


//get username from database
$sql		= "select  * from table_admin where nama_admin='$username' and password='$password' ";
$sql_login	= mysqli_query($kon,$sql) or die(mysqli_error());
$hasil 		= mysqli_fetch_array($sql_login);

$username 	= $hasil['nama_admin'];


if(mysqli_num_rows($sql_login) == 1) {

	$_SESSION['nama_admin'] = $username;
	$_SESSION['login'] = true;
	?>
	<script language ="javascript">location.href ="dasboard.php"; </script>
	<?php
	
	}
	 else {
	
	?>
	
	 <script language ="javascript">location.href ="login.php?msg=error"; </script>
	 
	 
	 <?php
	
	
	/*echo '<div class="alert bg-red alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
				username atau password anda salah
			</div>';
	*/
	}
	
	?>
	