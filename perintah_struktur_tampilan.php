<?php
        include "koneksi.php";
        session_start();
        error_reporting(0);
        $keyword = $_GET['keyword'];
        if($keyword != ''){
            $hasil =mysqli_query($kon, "SELECT * FROM table_struktur WHERE NAMA LIKE '".$keyword."' or DEVISI LIKE '".$keyword."'
            or JABATAN LIKE '".$keyword."' or PERIODE LIKE '".$keyword."'");
            $_SESSION['keyword'] = $keyword;

        } else{
            $hasil =mysqli_query($kon, "SELECT * FROM table_struktur order by id_nama desc");
            session_unset();
            session_destroy();
            $_SESSION = [];
        }
        
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
             <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["divisi"];   ?></td>
                <td><?php echo $data["jabatan"];   ?></td>
                <td><?php echo $data["periode"]; ?></td>
                <td>
                    <a href="update.php?id_user=<?php echo htmlspecialchars($data['id_user']); ?>" class="btn btn-warning" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id_user=<?php echo $data['id_user']; ?>" class="btn btn-danger" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>

<?php
    if (isset($_GET['id_user'])) {
        $id_user =htmlspecialchars($_GET["id_user"]);

        $sql="delete from biodata where id_user ='$id_user' ";
        $hasil=mysqli_query($kon,$sql);

            if ($hasil) {
                header("Location:index.php");
                
                echo 'alert("Codekey")';  

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>