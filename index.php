<?php
include ('navbar_forend.php');
include ('koneksi.php');
?>
<style>
.parallax {
  /* The image used */
  background-image: url('img/DSCF0528.JPG');

  /* Set a specific height */
  min-height: 500px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>
    <!-- Masthead-->
    <header class="masthead bg-secondary text-white text-center parallax " id="overlay">
      <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/logo-organisasi.png" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0" style="text-shadow: 2px 2px;color: white;
  text-shadow: 5px 5px 4px #000000;">Web Profil Organisasi</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">Kegiatan - Sejarah - Struktur</p>
      </div>
    </header>

    <section class="page-section bg-secondary text-white mb-0" id="tujuan">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Tujuan Usaha</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto"> 
            <p class="lead text-justify">Tujuan IMS PNUP adalah mewujudkan jiwa intelektual, emosional dan spiritual mahasiswa yang turut bertanggung jawab 
            atas terwujudnya tatanan masyarakat kabupaten Soppeng yang ilmiah dan religius serta mengaplikasikan tridarma perguruan 
            tinggi
            </p>
            <p class="lead text-justify">Untuk mencapai tujuan,organisasi harus mengusahakan:<br>
              1.	Membina kesadaran berilmu bermahasiswa dan bermasyarakat yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa.<br>
              2.	Menciptakan  dan menumbuhkan  kembangkan suasana dialogis dan harmonis antar  Lembaga kemahasiswaan dalam lingkup Kabupaten Soppeng pada umumnya dan kampus Politeknik Negeri Ujung Pandang  pada khususnya.<br>
              3.	Memperdalam pengetahuan anggotanya baik pengetahuan organisasi maupun pengetahuan umum untuk selalu menjadi pelopor dan pengabdi disegala bidang.<br>
              4.	Proaktif menggiatkan usaha-usaha sosial untuk kesejahteraan pelajar dan mahasiswa khususnya dan masyarakat pada umumnya dalam usaha mengembangkan wilayah Kabupaten Soppeng.<br>
              5.	Menerapkan kebudayaan daerah Kabupaten Soppeng yang tidak bertentangan dengan kepribadian bangsa Indonesia.<br>
              6.	Memperat hubungan kekeluargaan dengan segenap masyarakat Kabupaten Soppeng dan masyarakat lain pada umumnya.<br>
              7.	Memperjuangkan dan mengadvokasi segala kepentingan dan persoalan mahasiswa kabupaten soppeng yang menempuh Pendidikan di kampus PNUP.<br>

            </p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>

    <section class="page-section portfolio" id="kegiatan">
      <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Foto Kegiatan</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
        <?php
                    $no     =1;
                    $sql    ="SELECT * FROM table_kegiatan";
                    $result = mysqli_query($kon,$sql);
                    while ($data =mysqli_fetch_array($result)){
                    ?>
                    <div class="portfolio-modal modal fade" id="modal-<?=$no?>" tabindex="-1" aria-labelledby="modal-<?=$no?>" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <!-- Portfolio Modal - Title-->
                  <!-- <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Gambar 2</h2> -->
                  <!-- Icon Divider-->
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                  </div>
                  <!-- Portfolio Modal - Image-->
                  <img class="img-fluid rounded mb-5" src="/organisasi/assets/img/<?=$data['photo']?>" alt="..." />
                  <!-- Portfolio Modal - Text-->
                  <p class="mb-4">
                    <?=$data['keterangan']?>
                  </p>
                  <button class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="fas fa-xmark fa-fw"></i>
                    Close Window
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          <!-- Portfolio Item 1-->
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#modal-<?=$no?>">
              <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
              </div>
              <img class="img-fluid" src="/organisasi/assets/img/<?=$data['photo'] ? $data['photo'] : 'noimage.png' ?>" alt="..." />
            </div>
          </div> 
<?php
$no++;
        }
                    ?>
        </div>
      </div>
    </section>
    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="kegiatan">
      <div class="container">
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
          <!-- Portfolio Item 1-->

      </div>
    </section>
    <!-- About Section-->
    <section class="page-section bg-secondary text-white mb-0" id="sejarah">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">Sejarah</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto">
            <p class="lead text-justify">Sebelum menjadi IMS PNUP, sebelumnya Bernama IMPS PNUP dan sekretariatnya terletak di BTN Asal Mula. Kemudian, IMPS PNUP sempat vakum dengan jangka waktu yang cukup lama. Pada tahun 2013 pun Kakanda memutuskan untuk mengaktifkan Kembali IMS dan membutuhkan waktu 2 tahun. 
              Kemudian, para Kakanda pada saat itu mendapatkan pembina dengan syarat Namanya bukan “IMPS” karena di PNUP itu tidak ada pelajar. 
              IMS mulai dirintis dari tahun 2014 dan memulainya dari awal seperti AD/ART.
              MUBES pertama IMS dilaksanakan di Jl. Damai Pondok Siti Rahmah Nur. Adapun pembuat bendera IMS (Gambar) yaitu Kakanda A. Muh. Umar, S.ST kemudian desain diberikan kepada Kakanda Gunawan.
            </p>
            <div class="text-center">
              <img src="assets/img/logo-organisasi.png" class="masthead-avatar mb-5" width="300" height="300" alt="...">
            </div>
            <br>
            <p class="lead text-justify">Makna Logo IMS PNUP :<br>
              -	Kelelawar = Ciri khas Kab. Soppeng<br>
              -	Kelelawar yang menghadap ke kanan = Melambangkan kebaikan, ke arah yang positif<br>
              -	Mata merah = Tanda energi/keberanian<br>
              -	Sayap kiri 2 lengkungan, kanan 3 lengkungan = Karena merupakan hari jadi Kab.Soppeng itu sendiri, yaitu tanggal 23<br>
              -	Kapas berjumlah 12 dan padi berjumlah 61 = Karena pada tahun tersebut tahun lahir Kab.Soppeng yang ke 1261<br>
              -	Rantai berjumlah 7 = Simbol yang mempererat dan angkat 7 artinya situju-tuju yang maknanya saling mencocokkan, mengalah.<br>
              -	Kapas = Lembut, Sipakatau, Sipakaiange, Sipakalebbi<br>
              -	Padi = Semakin berisi, semakin merunduk<br>
              -	Pita Merah = Melambangkan ciri khas PNUP<br>
          
            </p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>
    <!-- Contact Section-->
    <section class="page-section" id="alumni">
      <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">DATA ALUMNI</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
          <div class="col">
          <div class="table-responsive">
        </div>
              <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>ANGKATAN</th>
                        <th>NOMOR HP</th>
                        <th>EMAIL</th>
                        <th>ALAMAT MAKASSAR</th>
                        <th>ALAMAT SOPPENG</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    $sql    = "SELECT * from table_alumni ";
                    $result = mysqli_query($kon,$sql);
                    while ($data =mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data['nama_alumni'];?></td>
						        <td><?php echo $data['angkatan_alumni'];?></td>
                    <td><?php echo $data['nomor_alumni'];?></td>
                    <td><?php echo $data['email_alumni'];?></td>
                    <td><?php echo $data['alamat_makassar'];?></td>
                    <td><?php echo $data['alamat_soppeng'];?></td>
                    </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section" id="struktur">
      <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Struktur</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>

        
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
          <div class="col">
          <div class="table-responsive">
              <table class="table table-bordered" id="mauexport" width="100%" cellspacing="0">
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
                    $sql    = "SELECT * from table_struktur ";
                    $result = mysqli_query($kon,$sql);
                    while ($data =mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td>
                        <a href="detail_struktur.php?id=<?=$data['id_nama']?>">

                          <?php echo $data['nama'];?>
                        </a>  
                      
                      </td>
						            <td><?php echo $data['divisi'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['periode'];?></td>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section bg-secondary text-white mb-0" id="about">
      <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About Website</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
          <div class="col-lg-12  ms-auto"> 
            <p class="lead text-center">Website ini berisikan tentang informasi organisasi kedaerahan yaitu IMS PNUP
            </p>
<br></br>
            <p class="lead text-center">Website ini akan menginformasikan tentang Visi & Misi IMS PNUP, Kegiatan IMS PNUP, Data Alumni, dan Struktur dalam IMS PNUP<br>
            dan dikelola oleh Admin IMS PNUP yang tidak lain adalah Koord. Dept. Hubungan Masyarakat.<br>
            Adapun untuk kedepannya, website akan dikembangkan lebih lanjut lagi.<br>
            Untuk itu, kritik dan saran sangat diperlukan untuk perkembangan website ini.<br>
            </p>
            <br></br>
            <p class="lead text-center">
            Created by Nurul & Sutrisman
            </p>
          </div>
        </div>
        <!-- About Section Button-->
      </div>
    </section>
<?php
include ('footer_forend.php');
?>