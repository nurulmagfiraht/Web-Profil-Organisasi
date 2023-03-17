<?php
include('navbar_backend.php');
?>
<div class="container">
    <div class="text-center"> <h3>FORM INPUT DATA STRUKTUR</h3></div>
    <form action="perintah_struktur_tambah.php" method="post">

    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="NAMA" class="form-control" placeholder="Masukan Nama" required autocomplete="off"/>
     </div>
    <div class="form-group">
        <label for="Divisi">Divisi</label>
        <select class="form-control" name="DEVISI" id="DEVISI">
        <option selected disabled value="">Pilih Divisi</option>
            <option value="Pengurus inti">Pengurus inti</option>
            <option value="Dept. Pengkaderan">Dept. Pengkaderan</option>
            <option value="Dept. Hubungan Masyarakat">Dept. Hubungan Masyarakat</option>
            <option value="Dept. Dana Dan Kesektariatan">Dept. Dana Dan Kesektariatan</option>
            <option value="Dept. Minat Bakat">Dept. Minat Bakat</option>
        </select>
    </div>
    <div class="form-group">
        <label for="JABATAN">Jabatan</label>
        <select class="form-control" name="JABATAN" id="JABATAN">
        <option selected disabled value="">Pilih Jabatan</option>
            <option value="Ketua Dpo">Ketua Dpo</option>
            <option value="Ketua Umum">Ketua Umum</option>
            <option value="Sekertaris Umum">Sekertaris Umum</option>
            <option value="Bendahara Umum">Bendahara Umum</option>
            <option value="Kordinator">Kordinator</option>
            <option value="Anggota">Anggota</option>
        </select>
    </div>

    <div class="form-group">
        <label>Periode:</label>
        <input type="text" name="PERIODE" class="form-control" placeholder="Masukan Periode" required autocomplete="off"/>
        </div>
    
    <div class="form-group">
        <label>NIM:</label>
        <input type="text" name="nim" class="form-control" placeholder="Masukan NIM" required autocomplete="off"/>
        </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" name="jenis_kelamin" id="Jenis Kelamin">
        <option selected disabled value="">Pilih Jenis Kelamin</option>
            <option value="P">P</option>
            <option value="L">L</option>
        </select>
        </div>

        <div class="form-group">
        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required autocomplete="off"/>
        </div>   

        <div class="form-group">
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" required autocomplete="off"/>
        </div> 

        <div class="form-group">
        <label>No.Handphone:</label>
        <input type="text" name="no_handphone" class="form-control" placeholder="Masukan No.Handphone" required autocomplete="off"/>
        </div>

        <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="Alamat" class="form-control" placeholder="Masukan Alamat" required autocomplete="off"/>
        </div>

        <div class="col-sm-12">
    <form  method="POST" enctype="multipart/form-data" action="perintah_tambah_foto.php">
    <div class="form-group">
        <label for="Keterangan">Foto Pengurus :</label>
            <div class="form-line">
            </div>
    </div>
    <div class="form-group">
        <image height="100px" width="100px" src="<?php echo "assets/img/noimage.png"; ?>"> </image>
    </div>

    <div class="form-group">
		<input class="input-xxlarge" type="file" name="photo" required />
    </div>


        <button type="submit" name="submit" onclick="return confirm('Apakah anda yakin semua data sudah benar ?')" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </form>


    <br><br><br>
 
<?php
include('footer_backend.php');
?>