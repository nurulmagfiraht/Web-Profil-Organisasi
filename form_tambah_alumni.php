<?php
include('navbar_backend.php');
?>
<div class="container-fluid">
<div class="card">
  <div class="card-body">
  <div class="text-center"> <h3>FORM INPUT DATA ALUMNI</h3></div>
    <div class="col-sm-12">
                                <form  method="POST" action="perintah_Tambah_alumni.php">
                                    <div class="form-group">
                                    <label for="Nama">Nama</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_alumni" placeholder="Masukkan Nama"  required autofocus />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="Angkatan">Angkatan</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="angkatan_alumni" placeholder="Masukkan Angkatan" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="Nomor Hp">Nomor Hp</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nomor_alumni" placeholder="Masukkan Nomor Hp " required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="Email">Email</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="email_alumni" placeholder="Masukkan Email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="Alamat Makassar">Alamat Makassar</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_makassar" placeholder="Masukkan Alamat Domisili" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="Alamat Soppeng">Alamat Soppeng</label>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_soppeng" placeholder="Masukkan Alamat Asal" required />
                                        </div>
                                    </div>
        <button type="submit" name="submit" onclick="return confirm('Apakah anda yakin semua data sudah benar ?')" class="btn btn-primary">Submit</button>
    </form>
    </div>

  </div>
</div>

</div>

<?php
include('footer_backend.php');
?>