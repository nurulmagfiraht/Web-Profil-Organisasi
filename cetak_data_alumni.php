<?php
include('koneksi.php');
?>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">DATA ALUMNI</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>ANGKATAN</th>
                        <th>NOMOR HP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT MAKASSAR</th>
                        <th>ALAMAT SOPPENG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    session_start();
                    error_reporting(0);
                    $keyword = $_SESSION['keyword'];
                    if($keyword != ''){
                    $hasil =mysqli_query($kon, "SELECT * FROM table_alumni WHERE nama_alumni LIKE '".$keyword."' or angkatan_alumni LIKE '".$keyword."'
                    or nomor_alumni LIKE '".$keyword."' or email_alumni LIKE '".$keyword."' or alamat_makassar LIKE '".$keyword."' or alamat_soppeng LIKE '".$keyword."'");
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
        <script>window.print();</script>