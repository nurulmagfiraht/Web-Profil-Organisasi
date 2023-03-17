<?php

    include "koneksi.php";
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_alumni=htmlspecialchars($_POST["id_alumni"]);
        $nama_alumni=input($_POST["nama_alumni"]);
        $angkatan_alumni=input($_POST["angkatan_alumni"]);
        $nomor_alumni=input($_POST["nomor_alumni"]);
        $email_alumni=input($_POST["email_alumni"]);
        $alamat_makassar=input($_POST["alamat_makassar"]);
        $alamat_soppeng=input($_POST["alamat_soppeng"]);
        


        $sql="update table_alumni set
        nama_alumni='$nama_alumni',
        angkatan_alumni='$angkatan_alumni',
        nomor_alumni='$nomor_alumni',
        email_alumni='$email_alumni',
        alamat_makassar='$alamat_makassar',
        alamat_soppeng='$alamat_soppeng'
		where id_alumni=$id_alumni";
        
        $hasil=mysqli_query($kon,$sql);

        if ($hasil) {
            echo '<script language="javascript"> location.href ="dataAlumni_admin.php?msg=succes_edit"; </script>';
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>