<?php
include "koneksi.php";
    if (isset($_GET['id_alumni'])) {
        $id_alumni =htmlspecialchars($_GET["id_alumni"]);
        $id_alumni = base64_decode($id_alumni);
        

        $sql="delete from table_alumni where id_alumni ='$id_alumni' ";
        $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                echo '<script language="javascript"> location.href ="dataAlumni_admin.php?msg=succes_hapus"; </script>';
            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>