<?php
include('navbar_backend.php');
include ('perintah_update_alumni.php');
if (isset($_GET['id_alumni'])) {
    $id_alumni=input($_GET["id_alumni"]);
    $id_alumni = base64_decode($id_alumni);

    $sql="select * from table_alumni where id_alumni=$id_alumni";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_assoc($hasil);


}
?>
<div class="container-fluid">
<div class="card">
  <div class="card-body">
  <div class="text-center"> <h3>FORM UPDATE DATA ALUMNI</h3></div>
    <div class="col-sm-12">
    <form  method="POST" action="perintah_update_alumni.php">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nama_alumni" value="<?php echo $data['nama_alumni']; ?>" placeholder="Masukkan Nama"  required autofocus />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="angkatan_alumni" value="<?php echo $data['angkatan_alumni']; ?>" placeholder="Masukkan Angkatan" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nomor_alumni" value="<?php echo $data['nomor_alumni']; ?>" placeholder="Masukkan Nomor Hp " required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="email_alumni" value="<?php echo $data['email_alumni']; ?>" placeholder="Masukkan Email" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_makassar" value="<?php echo $data['alamat_makassar']; ?>" placeholder="Masukkan Alamat Domisili" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="alamat_soppeng" value="<?php echo $data['alamat_soppeng']; ?>" placeholder="Masukkan Alamat Asal" required />
                                        </div>
                                    </div>
                                    <input type="hidden" name="id_alumni" value="<?php echo $data['id_alumni']; ?>" />
        <button type="submit" name="submit" onclick="return confirm('Apakah anda yakin semua data sudah benar ?')" class="btn btn-primary">Submit</button>
    </form>
  
    </div>

  </div>
</div>

</div>


<?php
include('footer_backend.php');
?>