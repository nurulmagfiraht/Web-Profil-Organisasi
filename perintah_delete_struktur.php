<?php
include "koneksi.php";
    if (isset($_GET['id_nama'])) {
        $id_nama =htmlspecialchars($_GET["id_nama"]);
        $id_nama = base64_decode($id_nama);

        $sql="delete from table_struktur where id_nama ='$id_nama' ";
        $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                echo '<script language="javascript"> location.href ="struktur_admin.php?msg=succes_hapus"; </script>';
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>