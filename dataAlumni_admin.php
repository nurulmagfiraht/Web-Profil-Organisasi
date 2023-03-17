<?php
include('navbar_backend.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800 text-center">DATA ALUMNI</h1>
<div class="row">
<div class="col-9"></div>
<div class="col-9"><a href="form_tambah_alumni.php?" class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></a></div>
<form action="" method="GET">
        <div class="input-group mb-3">
        <input type="text" name="keyword" class="form-control" placeholder="Masukan Data Yang di cari" autocomplete="off">
        <div class="input-group-append">
        <button type="submit" name="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
    </div>
</div>
    </form>
    </div>
<?php
    $msg = $_GET['msg'];
        if ($_GET['msg']=="success"){
			echo '
			<div class="alert alert-success" role="alert">
            Data Berhasil di input
            </div>';}
		else if ($_GET['msg']=="succes_edit"){
            echo '
			<div class="alert alert-primary" role="alert">
              Data Berhasil Di Edit
              </div>';}
         else if ($_GET['msg']=="succes_hapus"){
			echo '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Di Hapus
             </div>';}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>ANGKATAN</th>
                        <th>NOMOR HP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT MAKASSAR</th>
                        <th>ALAMAT SOPPENG</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    session_start();
                    error_reporting(0);
                    $keyword = $_GET['keyword'];
                    if($keyword != ''){
                    $hasil =mysqli_query($kon, "SELECT * FROM table_alumni WHERE nama_alumni LIKE '".$keyword."' or angkatan_alumni LIKE '".$keyword."'
                    or nomor_alumni LIKE '".$keyword."' or email_alumni LIKE '".$keyword."' or alamat_makassar LIKE '".$keyword."' or alamat_soppeng LIKE '".$keyword."'");
                    $_SESSION['keyword'] = $keyword;
                    } else{
                    $hasil =mysqli_query($kon, "SELECT * FROM table_alumni order by id_alumni desc");
                    }
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama_alumni'];?></td>
						<td><?php echo $data['angkatan_alumni'];?></td>
                        <td><?php echo $data['nomor_alumni'];?></td>
                        <td><?php echo $data['email_alumni'];?></td>
                        <td><?php echo $data['alamat_makassar'];?></td>
                        <td><?php echo $data['alamat_soppeng'];?></td>
                        <td>
                        <?php
                        $id_alumni = base64_encode($data['id_alumni']);
                        ?>
                            <span><a href="form_update_alumni.php?id_alumni=<?php echo $id_alumni ?>" onclick="return confirm('Apakah anda yakin untuk edit data ?')" class="btn btn-info"><i class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg></a></span>
                            <span><a href="perintah_delete_alumni.php?id_alumni=<?php echo $id_alumni  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?') " ><i class="material-icons"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg></a></span>
                        </td>
                        </tr>
                        
                    <?php

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

<?php
include('footer_backend.php');
?>