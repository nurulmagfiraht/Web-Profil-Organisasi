<?php
    include "koneksi.php";

    $NAMA= $_POST["NAMA"];
    $DEVISI= $_POST["DEVISI"];
    $JABATAN= $_POST["JABATAN"];
    $PERIODE= $_POST["PERIODE"];
    $nim= $_POST["nim"];
    $jenis_kelamin= $_POST["jenis_kelamin"];
    $tempat_lahir= $_POST["tempat_lahir"];
    $tanggal_lahir= $_POST["tanggal_lahir"];
    $no_handphone= $_POST["no_handphone"];
    $alamat= $_POST["Alamat"];
    $photo= $_POST["photo"];

    if (isset($_POST['submit'])){
        
        $sql="insert into table_struktur (nama,divisi,jabatan,periode,foto,nim,jenis_kelamin,tempat_lahir,tanggal_lahir,no_handphone,alamat) values
		('$NAMA','$DEVISI','$JABATAN','$PERIODE','$photo','$nim','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$no_handphone','$alamat')";

        // echo "<div class='alert alert-danger'> ".$sql.".</div>";
        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            echo '<script language="javascript"> location.href ="struktur_admin.php?msg=success"; </script>';
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }
    ?>