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
<h1 class="h3 mb-2 text-gray-800"><center>DATA STRUKTUR</center></h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>DIVISI</th>
                        <th>JABATAN</th>
                        <th>PERIODE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    session_start();
                    error_reporting(0);
                    $keyword = $_SESSION['keyword'];
                    if($keyword != ''){
                    $hasil =mysqli_query($kon, "SELECT * FROM table_struktur WHERE nama LIKE '".$keyword."' or divisi LIKE '".$keyword."'
                    or jabatan LIKE '".$keyword."' or periode LIKE '".$keyword."'");
                    $_SESSION['keyword'] = $keyword;
                    } else{
                    $hasil =mysqli_query($kon, "SELECT * FROM table_struktur order by id_nama desc");
                    }
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama'];?></td>
						<td><?php echo $data['divisi'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['periode'];?></td>
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