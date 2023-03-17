<?php 

require_once 'koneksi.php';
if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php'){
	$id = base64_encode($id)
};

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM table_struktur WHERE table_struktur.id_nama = $id");

$row = mysqli_fetch_assoc($query);
$aktif = 'struktur';

include ('navbar_forend.php'); 
?>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">IMS PNUP</span><br>
					<span class="visi">YassiSoppengi!</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Detail Pengurus - <b><?= $row['nama'] ?></b>
				</div>
				<table class="table table-stripped">
							<tr>
								<td width="225px"><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama'] ?></td>
							</tr>
							<tr>
								<td><b>NIM</b></td>
								<td>:</td>
								<td><?= $row['nim'] ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td>:</td>
								<td>
									<?= $row['jenis_kelamin'] == 'L' ? 'Laki Laki' : '' ?>
									<?= $row['jenis_kelamin'] == 'P' ? 'Perempuan' : '' ?>
								</td>
							</tr>
							<tr>
								<td><b>No Handphone</b></td>
								<td>:</td>
								<td><?= $row['no_handphone'] ?></td>
							</tr>
							<tr>
								<td><b>Tempat Tanggal Lahir</b></td>
								<td>:</td>
								<td><?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?></td>
							</tr>
							<tr>
								<td><b>Jabatan</b></td>
								<td>:</td>
								<td><?= $row['jabatan'] ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td>:</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="img/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="25%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td><a href="index.php#struktur" class="btn btn-secondary btn-sm">Kembali</a></td>
							</tr>
						</table>
			</div> 
		</div>
<?php
include ('footer_forend.php');
?>