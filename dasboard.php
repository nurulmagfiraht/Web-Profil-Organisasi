<?php
include('navbar_backend.php');
?>
<div class="row">
                    <div class="col-xl-10 mb-20 mx-auto">
                        <!-- Color System -->
                        <div class="row">
                            <div class="col">
                                <div class="card bg-info text-light shadow h-100 py-2">
                                    <div class="card-body font-weight-bold" style="text-align: center;">
                                        <br><br>
                                        Hello, Admin <?php echo $_SESSION['nama_admin']; ?>
                                        <div class="text-black-100 medium">Selamat Datang Kembali di Web IMS PNUP</div><br>
                                        <img src="assets/img/logo-organisasi.png" alt="logo tidak ditemukan" width="200px" height="200px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br><br><br><br><br>

<?php
include('footer_backend.php');
?>