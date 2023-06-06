<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<style>
  .acceptance {
    visibility: hidden;
  }
</style>
<script>
  const accordionHeader = document.querySelectorAll('.fitur');
  accordionHeader.forEach((accordion) => {
    accordion.addEventListener('click', (e) => {
      console.log('clicked')
      //get child
      const accordionBody = accordion.nextElementSibling;
      console.log(accordionBody)
    });
  });
</script>

<script>
  var item;
  // Set Display attribute of all element with class .accordion-child to none
  $(document).ready(function() {
    $('.accordion-child').css('display', 'none');
    item = $('.item').parent().parent();

    item.click((event) => {
      item.removeClass('active');
      $(this).parents('li').addClass('active');
      console.log($(this).parents('button'))
    })

    // pricing accordion
    $("ul").on("click", "li", function() {
      var pos = $(this).index() + 2;
      $("tr").find("td:not(:eq(0))").hide();
      $("td:nth-child(" + pos + ")").css("display", "table-cell");
      $("tr").find("th:not(:eq(0))").hide();
      $("li").removeClass("active");
      $(this).addClass("active");
    });


    // On load
    doSomething(mediaQuery);
  });

  // Initialize the media query
  var mediaQuery = window.matchMedia('(min-width: 990px)');

  // Add a listen event
  mediaQuery.addListener(doSomething);

  // Function to do something with the media query
  function doSomething(mediaQuery) {
    if (mediaQuery.matches) {
      $('#add-on').attr('colspan', 5);
      $('#add-on2').attr('colspan', 5);
      $('.add-on').attr('colspan', 5);
      $('.kontrak-lg').attr('colspan', 3);
      $('.kontrak-sign').attr('colspan', 2);
    } else {
      $('#add-on').attr('colspan', 2);
      $('.add-on').attr('colspan', 2);
      $('.kontrak').attr('colspan', 1);
    }
  }

  function collapseControl(id) {
    var col = $('#' + id);
    console.log(id);

    // Get the button from id
    var btn = $('#' + id + 'Btn').children();

    // get the same element at the same level with class .accordion-child
    var sib = col.siblings('.' + id);

    // Get the value of display attribute
    var display = col.css('display');

    console.log(sib);
    if (display == 'none') {
      btn.removeClass('uil-angle-down');
      btn.addClass('uil-angle-up');
      col.css('display', '');
      sib.css('display', '');
    } else {
      // Change the arrow icon
      btn.removeClass('uil-angle-up');
      btn.addClass('uil-angle-down');
      // change the display attribute to none
      col.css('display', 'none');
      sib.css('display', 'none');
    }
  };
  // Add active class if clicked
</script>

</section>
<!--- HEADER --->
<header>
  <nav class="navbar navbar-expand-lg navbar-light" id="second-nav">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/GOfeedercloud.png" class="img-fluid img-logo" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo home_url(); ?>#fitur-gofeeder">Fitur</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url(); ?>#pilihan-harga">Harga</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url(); ?>#perguruan-tinggi">Komunitas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo home_url(); ?>/mitra-gofeeder/">Mitra GoFeeder</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto navbar-hide">
          <hr>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Produk</a>
            <div class="dropdown-menu" style="border: none;">
              <a class="dropdown-item" href="http://siakadcloud.com/" target="_blank">Siakad Cloud</a>
              <a class="dropdown-item" href="http://gofeeder.sevima.com/" target="_blank">Gofeeder
                Cloud</a>
              <a class="dropdown-item" href="http://financecloud.id/">Finance Cloud</a>
              <a class="dropdown-item" href="http://akreditasicloud.com/">Akreditasi Cloud</a>
              <a class="dropdown-item" href="http://profeeder.sevima.com/" target="_blank">Profeeder</a>
              <a class="dropdown-item" href="http://sevimapay.com/" target="_blank">SevimaPay</a>
              <a class="dropdown-item" href="http://edlink.id/" target="_blank">Edlink</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tentang Sevima</a>
            <div class="dropdown-menu" style="border: none;">
              <a class="dropdown-item" href="https://sevima.com/tentang-sevima/">Tentang</a>
              <a class="dropdown-item" href="https://sevima.com/karir/">Karir</a>
              <a class="dropdown-item" href="https://sevima.com/berita/">Berita</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://sevimapay.com/promo/">Promo <i class='uil uil-megaphone'></i></a>
          </li>
        </ul>

        <a class="btn btn-sevima" href="https://wa.me/6282261610404?text=[GFC3204]%20Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20GoFeeder%20Cloud" target="_blank" role="button"><i class="uil uil-whatsapp"></i>Hubungi SEVIMA</a>
      </div>
    </div>
  </nav>

  <!-- HERO IMAGE -->
  <section id="hero-image">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-6">
          <div class="kolom-header">
            <div class="title-header">
              <h2 class="title mb-2">Siap <b>Mendukung Kampus</b> Anda
                Bertransformasi secara <b>Digital</b></h2>
              <p class="lead">Dengan gofeedercloud, sekarang Anda tidak perlu pusing menghadapi kendala
                berikut : </p>

              <div class="problem-animasi">
                <div id="home-news">
                  <div class="home_header">
                    <span>“1 Operator <strong>kewalahan</strong> mengatur data operasional
                      kampus”</span>
                  </div>
                  <div class="home_header">
                    <span>"Perlu <strong>kerja 2 kali</strong> untuk keperluan
                      <br>pelaporan PDDIKTI"</span>
                  </div>
                  <div class="home_header">
                    <span>"Sistem Akademik <strong>tidak support</strong>
                      <br>update regulasi KEMENDIKBUD"</span>
                  </div>
                  <div class="home_header">
                    <span>"<strong>Sering lembur</strong> mempersiapkan
                      <br>data Akreditasi"</span>
                  </div>
                  <div class="home_header">
                    <span>"Infrastruktur kampus yang <strong>
                        <br>tidak memadai"</strong>
                  </div>
                </div>
              </div>
            </div>

            <div class="hero-image-mobile mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/img/bg-header.png" class="img-fluid" alt="">
            </div>

            <div class="owl-carousel owl-theme owl-loaded" id="owl-testi-header">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item">
                    <div class="card-konten-testi">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mrizal.png" class="img-fluid img-foto" alt="">
                      </div>
                      <div class="card-body">
                        <span>
                          <h6 class="strong">"Pengguna aktif GofeederCloud sudah hampir 3 tahun!“</h6>
                          <p class="desc">Sangat membantu sekali karena infrastrukturnya yang
                            belum memadai bisa ditangani oleh GofeederCloud."</p>
                        </span>
                        <div class="footer">
                          <span class="nama">M. Rizal, S.E., M.M</span>
                          <p class="kampus">Kepala Administrasi Kemahasiswaan STIE PANCA
                            BHAKTI PALU</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="card-konten-testi">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Ervita.png" class="img-fluid img-foto" alt="">
                      </div>
                      <div class="card-body">
                        <span>
                          <h6 class="strong">“1x kerja dari Gofeeder langsung terkoneksi ke Feeder“</h6>
                          <p class="desc">Operator kampus gak perlu laporan lagi dan
                            telat-telat lagi. SEVIMA sangat membantu sekali</p>
                        </span>
                        <div class="footer">
                          <span class="nama">Ervita Nindy O, A.MD.RMIK, S.Km</span>
                          <p class="kampus">Operator PDPT STIA MALANG</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-item">
                    <div class="card-konten-testi">
                      <div class="card-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/machrus-salim.png" class="img-fluid img-foto" alt="">
                      </div>
                      <div class="card-body">
                        <span>
                          <h6 class="strong">“Saya berani menjamin, data akademik saya rapi.“</h6>
                          <p class="desc">Hampir 2 tahun menggunakan Gofeeder hasilnya sangat
                            terbantu terutama dalam bidang akademik terkait pelaporan Feeder
                          </p>
                        </span>
                        <div class="footer">
                          <span class="nama">Machrus Salim</span>
                          <p class="kampus">STAINU Malang</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</header>
<!--- END HEADER --->

<!--- VIDEO --->
<section id="cara-kerja">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12 text-center mt-md-5">
        <h1>
          Lebih Mudah Mengelola Data Perguruan Tinggi dengan SEVIMA Gofeeder
        </h1>
        <h4>
          SEVIMA GoFeeder merupakan layanan sistem informasi akademik yang mengakomodasi
          <br>universitas menengah kebawah untuk membantu pelaporan ke Feeder PD-DIKTI
          <br>yang memudahkan manajemen kampus dalam mengelola akademik.
        </h4>
      </div>
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <!-- <div class="video">
          <div class="row justify-content-center">
            <div class="col-8">
              <div class="embed-responsive embed-responsive-16by9" style="z-index: 1;">
                <iframe loading=lazy width="560" height="315" src="https://www.youtube.com/embed/AZo00edOllo"
                  frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/bg-video.png" class="img-video" alt="">
          </div>
        </div> -->
        <div class="background-video">
          <div class="row">
            <div class="col-md-7 col-12">
              <div class="hero-video embed-responsive embed-responsive-16by9" id="youtubeplayer">
                <iframe class="embed-responsive-item" src="" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-md-5 col-12 pt-4 pt-md-0">

              <div class="title-list mb-4">
                <h6>Playlist</h6>
                <h5>#HaniVlog SEVIMA</h5>
              </div>
              <div class="list-video">
                <ul id="youtubevideotabs">
                  <?php
                  query_posts(array(
                    'post_type' => 'video_playlist',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                  ));
                  if (have_posts()) : while (have_posts()) : the_post();
                      if (has_post_thumbnail()) {
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $news_src = $src[0];
                      }
                  ?>
                      <?php
                      $iframe = get_field('video');
                      $match = explode("embed/", $iframe);
                      ?>
                      <li youtubeid="<?php the_field('video'); ?>"><?php the_title(); ?></li>
                  <?php
                    endwhile;
                  endif;
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--- END VIDEO --->

<section class="fitur-box" id="fitur-gofeeder">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-7">
        <h2 class="title">
          Apa Saja yang Akan Anda Dapatkan Dengan GoFeeder Cloud?
        </h2>
        <p class="lead">Segudang manfaat bisa Anda dapatkan di aplikasi GoFeeder Cloud
          dan tentunya akan membantu kegiatan akademik Perguruan Tinggi Anda.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="konten">
          <!-- pmb -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal1">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Penerimaan Mahasiswa Baru (PMB)</div>
                    <p class="subheading-body">Portal & Manajemen untuk pengelolaan penerimaan mahasiswa baru </p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal1" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Penerimaan Mahasiswa Baru (PMB)</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/1.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <h6 class="sub-heading">
                          Persiapan PMB Online
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Admin PMB mendatakan contact person PMB</li>
                            <li>Admin PMB mendatakan jenis tes untuk PMB</li>
                            <li>Admin PMB mendatakan jenis berkas untuk PMB</li>
                            <li>Admin PMB mendatakan periode PMB</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Pendaftaran CAMABA
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>CAMABA memilih jalur pendaftaran</li>
                            <li>CAMABA mengisi formulir pendaftaran</li>
                            <li>CAMABA melengkapi biodata, berkas, dan membayar formulir</li>
                            <li>CAMABA melakukan finalisasi data</li>
                            <li>Menunggu proses seleksi</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Proses Akhir PMB Online
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Admin PMB melakukan seleksi berkas dan seleksi tes</li>
                            <li>Pemberian final status CAMABA</li>
                            <li>Pemberian NIM pada CAMABA yang lolos menjadi mahasiswa baru</li>
                            <li>Export data mahasiswa baru ke feeder</li>
                            <li>Penagihan tagihan awal masuk oleh admin keuangan</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / pmb -->
          <!-- manaj. akademik -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal2">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Manajemen Administrasi Akademik</div>
                    <p class="subheading-body">Berisi Manajemen Kelas, Jadwal Perkuliahan, Perwalian hingga Kelulusan
                      Mahasiswa </p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal2" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Manajemen Administrasi Akademik</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/2.PNG" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <h6 class="sub-heading">
                          Administrator
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Membuka Periode Berlaku</li>
                            <li>Melakukan set status awal mahasiswa</li>
                            <li>Mendatakan dosen wali mahasiswa</li>
                            <li>Membuat kelas perkuliahan dan dosen pengajarnya</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Admin Keuangan
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Menentukan kelompok dan jenis tagihan</li>
                            <li>Menentukan tarif tagihan per angkatan dan prodi</li>
                            <li>Generate tagihan untuk semester berlaku</li>
                            <li>Menerima pembayaran mahasiswa</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / manaj. akademik -->
          <!-- KRS & KHS -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal3">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">KRS & KHS Online oleh Mahasiswa</div>
                    <p class="subheading-body">Kartu Rencana Studi & Kartu Hasil Studi dapat diakases dimanapun,
                      langsung dari akun Mahasiswa</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal3" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">KRS & KHS Online</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/3a.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <h6 class="sub-heading">
                          3 Langkah Melakukan KRS
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Pembayaran Tagihan Semester</li>
                            <li>Mahasiswa melakukan KRS online</li>
                            <li>Dosen wali melakukan validasi KRS online</li>
                          </ul>
                        </div>
                        <br />
                        <h6 class="sub-heading">
                          KHS Online
                        </h6>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/3b.jpeg" class="img-fluid img-modal" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / KRS & KHS -->
          <!-- evaluasi dosen -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal4">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Evaluasi Dosen Oleh Mahasiswa (EDOM)</div>
                    <p class="subheading-body">Mahasiswa memberikan penilaian dalam kuesioner sebagai tolok ukur kinerja
                      dosen</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal4" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Evaluasi Dosen Oleh Mahasiswa (EDOM)</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/4.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <div class="lead-list">
                          <ul class="list">
                            <li>Administrator membuka setting pengisian nilai per prodi</li>
                            <li>Administrator membuat list pertanyaan kuisioner pengajaran dosen di periode yang berlaku
                            </li>
                            <li>Dosen mengisikan nilai mahasiswa per kelas yang diajarkan</li>
                            <li>Mahasiswa melakukan pengisian kuisioner pengajaran dosen</li>
                            <li>Mahasiswa bisa melakukan KHS Online</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / evaluasi dosen -->
          <!-- perkuliahan -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal5">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Proses Perkuliahan</div>
                    <p class="subheading-body">Presensi online, penilaian mahasiswa, hingga rencana pembelajaran
                      semester (RPS) oleh Dosen</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal5" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Proses Perkuliahan</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/5.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <div class="lead-list">
                          <ol class="list">
                            <li>Diawali perkuliahan dosen membuat rencana pertemuan perkuliahan di setiap matakuliah
                              yang diajarkan</li>
                            <li>Setiap pertemuan perkuliahan, dosen melakukan presensi online</li>
                            <li>Admin bisa melihat rekap kehadiran mahasiswa per kelas</li>
                          </ol>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / perkuliahan -->

          <!-- yudisium -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal6">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Yudisium dan Wisuda</div>
                    <p class="subheading-body">Membantu Pelaporan dan pendataan proses yudisium & wisuda untuk setiap
                      mahasiswa </p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal6" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Yudisium dan Wisuda</span>
                    </div>
                    <div class="modal-konten">
                      <div class="gambar">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/6.jpeg" class="img-fluid img-modal" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/6b.jpeg" class="img-fluid img-modal" alt="">
                      </div>
                      <div class="desc">
                        <h6 class="sub-heading">
                          Daftar Mahasiswa Yudisium
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Administrator mendapatkan periode yudisium yang berlaku</li>
                            <li>Administrator mendapatkan mahasiswa yang akan yudisium</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Pembayaran Tagihan Kelulusan
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Admin keuangan menentukan tarif kelulusan mahasiswa di periode yudisium yang berlaku
                            </li>
                            <li>Admin keuangan generate tagihan kelulusan</li>
                            <li>Mahasiswa melakukan pembayaran tagihan kelulusan</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Pendataan Akhir Kelulusan Mahasiswa
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Administrator melakukan import data kelulusan</li>
                            <li>Administrator melakukan import aktivitas mahasiswa</li>
                            <li>Generate akun Alumni untuk pengisian Tracer Study</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / yudisium -->
          <!-- tarif -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal7">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Manajemen Tagihan Mahasiswa</div>
                    <p class="subheading-body">Membantu admin keuangan untuk mengatur tarif pembayaran dan tagihan
                      mahasiswa </p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal7" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Manajemen Tagihan Mahasiswa</span>
                    </div>
                    <div class="modal-konten">
                      <div class="gambar">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/6a.jpeg" class="img-fluid img-modal" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/6b.png" class="img-fluid img-modal" alt="">
                      </div>
                      <!--<div class="desc">
													<h6 class="sub-heading">
														Daftar Mahasiswa Yudisium
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Administrator mendapatkan periode yudisium yang berlaku</li>
															<li>Administrator mendapatkan mahasiswa yang akan yudisium</li>				
														</ul>
													</div>
													<h6 class="sub-heading">
														Pembayaran Tagihan Kelulusan
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin keuangan menentukan tarif kelulusan mahasiswa di periode yudisium yang berlaku</li>
															<li>Admin keuangan generate tagihan kelulusan</li>
															<li>Mahasiswa melakukan pembayaran tagihan kelulusan</li>														
														</ul>
													</div>
													<h6 class="sub-heading">
														Pendataan Akhir Kelulusan Mahasiswa
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Administrator melakukan import data kelulusan</li>
															<li>Administrator melakukan import aktivitas mahasiswa</li>
															<li>Generate akun Alumni untuk pengisian Tracer Study</li>														
														</ul>
													</div>
												</div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- / tarif -->
          <!-- tracer study -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal8">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Tracer Study untuk Alumni</div>
                    <p class="subheading-body">Dapatkan umpan balik dari alumni terkait pengembangan karir ataupun studi
                      setelah lulus.</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal8" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Tracer Study</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/7.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <h6 class="sub-heading">
                          Administrator
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Mengatur periode pengisian tracer study</li>
                            <li>Menyiapkan pertanyaan tracer study</li>
                            <li>Menyiapkan opsi pilihan ganda</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Alumni
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Login ke akun masing-masing</li>
                            <li>Mengisi pertanyaan tracer study</li>
                          </ul>
                        </div>
                        <h6 class="sub-heading">
                          Pendataan Akhir Kelulusan Mahasiswa
                        </h6>
                        <div class="lead-list">
                          <ul class="list">
                            <li>Administrator melakukan import data kelulusan</li>
                            <li>Administrator melakukan import aktivitas mahasiswa</li>
                            <li>Generate akun Alumni untuk pengisian Tracer Study</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- /tracer study -->
          <!-- dashboard pimpinan -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal9">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Dashboard Pimpinan</div>
                    <p class="subheading-body">Pimpinan dapat melakukan monitor secara langsung terhadap administrasi
                      akademik.</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal9" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Dashboard Pimpinan</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/8.jpg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <h6 class="sub-heading">
                          Manajemen Perguruan Tinggi
                        </h6>
                        <div class="lead-list">
                          Dapat melihat rangkuman dari aktivitas perkuliahan dan proses akademik dalam satu layar
                          dashboard. Sehingga memudahkan untuk pengambilan keputusan.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- /dashboard pimpinan -->
          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal10">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Pelaporan PDDIKTI Feeder</div>
                    <p class="subheading-body">Fitur ini membuat Pelaporan PDDikti Feeder Lancar</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal10" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Pelaporan PDDIKTI Feeder</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/9.jpeg" class="img-fluid img-modal" alt="">
                      <div class="desc">
                        <div class="lead-list">
                          Aplikasi terintegrasi menggunakan WS Feeder, dengan menginputkan username & password feeder
                          yang dimiliki oleh admin Perguruan Tinggi.
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal11">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Pelaporan EMIS</div>
                    <p class="subheading-body">Fitur ini membuat Pelaporan EMIS mudah dan Lancar.</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal11" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Pelaporan EMIS</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/emis.jpg" class="img-fluid img-modal" alt="">
                      <!-- <div class="desc">
													<h6 class="sub-heading">
														Pelaporan PDDIKTI Feeder
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB mendatakan contact person PMB</li>
															<li>Admin PMB mendatakan jenis tes untuk PMB</li>		
															<li>Admin PMB mendatakan jenis berkas untuk PMB</li>
															<li>Admin PMB mendatakan periode PMB</li>		
														</ul>
													</div>
													<h6 class="sub-heading">
														Pendaftaran CAMABA
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>CAMABA memilih jalur pendaftaran</li>
															<li>CAMABA mengisi formulir pendaftaran</li>														
															<li>CAMABA melengkapi biodata, berkas, dan membayar formulir</li>
															<li>CAMABA melakukan finalisasi data</li>
															<li>Menunggu proses seleksi</li>
														</ul>
													</div>
													<h6 class="sub-heading">
														Proses Akhir PMB Online
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB melakukan seleksi berkas dan seleksi tes</li>														
															<li>Pemberian final status CAMABA</li>
															<li>Pemberian NIM pada CAMABA yang lolos menjadi mahasiswa baru</li>
															<li>Export data mahasiswa baru ke feeder</li>
															<li>Penagihan tagihan awal masuk oleh admin keuangan</li>
														</ul>
													</div>
												</div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal12">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Integrasi SISTER</div>
                    <p class="subheading-body">Gofeeder langsung terhubung dengan SISTER</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal12" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Integrasi SISTER</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/sister.jpeg" class="img-fluid img-modal" alt="">
                      <!-- <div class="desc">
													<h6 class="sub-heading">
														Pelaporan PDDIKTI Feeder
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB mendatakan contact person PMB</li>
															<li>Admin PMB mendatakan jenis tes untuk PMB</li>		
															<li>Admin PMB mendatakan jenis berkas untuk PMB</li>
															<li>Admin PMB mendatakan periode PMB</li>		
														</ul>
													</div>
													<h6 class="sub-heading">
														Pendaftaran CAMABA
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>CAMABA memilih jalur pendaftaran</li>
															<li>CAMABA mengisi formulir pendaftaran</li>														
															<li>CAMABA melengkapi biodata, berkas, dan membayar formulir</li>
															<li>CAMABA melakukan finalisasi data</li>
															<li>Menunggu proses seleksi</li>
														</ul>
													</div>
													<h6 class="sub-heading">
														Proses Akhir PMB Online
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB melakukan seleksi berkas dan seleksi tes</li>														
															<li>Pemberian final status CAMABA</li>
															<li>Pemberian NIM pada CAMABA yang lolos menjadi mahasiswa baru</li>
															<li>Export data mahasiswa baru ke feeder</li>
															<li>Penagihan tagihan awal masuk oleh admin keuangan</li>
														</ul>
													</div>
												</div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal13">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Integrasi EDLINK</div>
                    <p class="subheading-body">Terhubung langsung dengan metode perkuliahan yang lebih efektif.</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal13" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Integrasi EDLINK</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/11.png" class="img-fluid img-modal" alt="">
                      <!-- <div class="desc">
													<h6 class="sub-heading">
														Pelaporan PDDIKTI Feeder
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB mendatakan contact person PMB</li>
															<li>Admin PMB mendatakan jenis tes untuk PMB</li>		
															<li>Admin PMB mendatakan jenis berkas untuk PMB</li>
															<li>Admin PMB mendatakan periode PMB</li>		
														</ul>
													</div>
													<h6 class="sub-heading">
														Pendaftaran CAMABA
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>CAMABA memilih jalur pendaftaran</li>
															<li>CAMABA mengisi formulir pendaftaran</li>														
															<li>CAMABA melengkapi biodata, berkas, dan membayar formulir</li>
															<li>CAMABA melakukan finalisasi data</li>
															<li>Menunggu proses seleksi</li>
														</ul>
													</div>
													<h6 class="sub-heading">
														Proses Akhir PMB Online
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB melakukan seleksi berkas dan seleksi tes</li>														
															<li>Pemberian final status CAMABA</li>
															<li>Pemberian NIM pada CAMABA yang lolos menjadi mahasiswa baru</li>
															<li>Export data mahasiswa baru ke feeder</li>
															<li>Penagihan tagihan awal masuk oleh admin keuangan</li>
														</ul>
													</div>
												</div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="items">
            <button type="button" data-toggle="modal" data-target="#myModal14">
              <div class="card">
                <div class="card-body">
                  <div class="desc">
                    <div class="heading-body">Integrasi SevimaPay</div>
                    <p class="subheading-body">Membantu pembayaran keuangan mahasiswa tanpa ribet dan aman</p>
                  </div>
                </div>
              </div>
            </button>

            <div class="modal fade" id="myModal14" role="dialog">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="title"><span class="underline--magical">Integrasi SevimaPay</span>
                    </div>
                    <div class="modal-konten">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/12.png" class="img-fluid img-modal" alt="">
                      <!-- <div class="desc">
													<h6 class="sub-heading">
														Pelaporan PDDIKTI Feeder
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB mendatakan contact person PMB</li>
															<li>Admin PMB mendatakan jenis tes untuk PMB</li>		
															<li>Admin PMB mendatakan jenis berkas untuk PMB</li>
															<li>Admin PMB mendatakan periode PMB</li>		
														</ul>
													</div>
													<h6 class="sub-heading">
														Pendaftaran CAMABA
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>CAMABA memilih jalur pendaftaran</li>
															<li>CAMABA mengisi formulir pendaftaran</li>														
															<li>CAMABA melengkapi biodata, berkas, dan membayar formulir</li>
															<li>CAMABA melakukan finalisasi data</li>
															<li>Menunggu proses seleksi</li>
														</ul>
													</div>
													<h6 class="sub-heading">
														Proses Akhir PMB Online
													</h6>
													<div class="lead-list">
														<ul class="list">
															<li>Admin PMB melakukan seleksi berkas dan seleksi tes</li>														
															<li>Pemberian final status CAMABA</li>
															<li>Pemberian NIM pada CAMABA yang lolos menjadi mahasiswa baru</li>
															<li>Export data mahasiswa baru ke feeder</li>
															<li>Penagihan tagihan awal masuk oleh admin keuangan</li>
														</ul>
													</div>
												</div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</section>

<!-- FITUR GO FEEDER -->
<!-- <section id="fitur-gofeeder">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <div class="row">
          <div class="col-12 text-center">
            <h1>Apa Saja yang Akan Anda Dapatkan
              <br>Dengan GoFeeder Cloud?</h1>
            <div class="card-text mx-auto text-center">
              <h4 class="pt-3">Segudang manfaat bisa Anda dapatkan di aplikasi GoFeeder Cloud <br>
                dan tentunya akan membantu kegiatan akademik Perguruan Tinggi Anda.</h4>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12">
            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                  aria-controls="pills-home" aria-selected="true">Akademik</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                  aria-controls="pills-profile" aria-selected="false">Kepegawaian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                  aria-controls="pills-contact" aria-selected="false">Pelaporan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-integrasi-tab" data-toggle="pill" href="#pills-integrasi" role="tab"
                  aria-controls="pills-integrasi" aria-selected="false">Integrasi</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="konten">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/ktm.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>KTM Elektronik</h3>
                        </div>
                        <div class="desc">
                          <p>KTM-el terdapat QR-code yang dapat digunakan untuk melihat data pribadi dan nilai mata
                            kuliah.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/absensi.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Absensi Online</h3>
                        </div>
                        <div class="desc">
                          <p>Pelaksanaan absensi akan lebih mudah karena absensi dapat dilakukan dengan Smartphone
                            maupun KTM.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/krs.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>KRS Online</h3>
                        </div>
                        <div class="desc">
                          <p>Mempermudah mahasiswa dalam mencetak KRS Online.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/pmb.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Modul PMB</h3>
                        </div>
                        <div class="desc">
                          <p>Modul untuk pengelolaan penerimaan mahasiswa baru </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/perwalian.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Modul Perwalian</h3>
                        </div>
                        <div class="desc">
                          <p>Mempermudah proses perwalian yang dilakukan secara online</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/cetak.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Cetak Laporan</h3>
                        </div>
                        <div class="desc">
                          <p>Menampilkan serta mencetak KHS, KRS, RHS serta Transkrip Mahasiswa dalam bentuk html,
                            word, maupun excel.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/custom.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Custom Laporan</h3>
                        </div>
                        <div class="desc">
                          <p>Custom laporan gratis hingga 5 laporan untuk kampus anda.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/keuangan.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Keuangan Akademik</h3>
                        </div>
                        <div class="desc">
                          <p>Membuat data tagihan mahasiswa dan menampilkan laporan keuangan.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/nilai.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Managemen Nilai</h3>
                        </div>
                        <div class="desc">
                          <p>Memudahkan input nilai,menampilkan serta mengelola IPK perkuliahan setiap mahasiswa
                            secara otomatis.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/yudisium.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Managemen Yudisium</h3>
                        </div>
                        <div class="desc">
                          <p>Membantu proses pelaporan dan pendataan yudisium untuk setiap mahasiswa</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/jadwal.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Managemen Kelas dan Jadwal</h3>
                        </div>
                        <div class="desc">
                          <p>Menampilkan setting kelas perkuliahan serta jadwal perkuliahan.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/dashboard.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Dashboard Pimpinan</h3>
                          <span class="ml-2"
                            style="background: #d2322d; padding: .3rem .75rem; border-radius: 20px; color: #fff; font-size: .75rem ">BARU</span>
                        </div>
                        <div class="desc">
                          <p>Memudahkan pimpinan monitoring kegiatan akademik kampus.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/tracer.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Tracer Study</h3>
                          <span class="ml-2"
                            style="background: #d2322d; padding: .3rem .75rem; border-radius: 20px; color: #fff; font-size: .75rem ">BARU</span>
                        </div>
                        <div class="desc">
                          <p>Dapatkan umpan balik dari alumni terkait karir.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/kuesioner.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Kuesioner Pengajaran Dosen</h3>
                          <span class="ml-2"
                            style="background: #d2322d; padding: .3rem .75rem; border-radius: 20px; color: #fff; font-size: .75rem ">BARU</span>
                        </div>
                        <div class="desc">
                          <p>Mengetahui kinerja dan sebagai tolok ukur untuk pengembangan kinerja dosen </p>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="konten">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/dosen.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Evaluasi Dosen</h3>
                        </div>
                        <div class="desc">
                          <p>Adanya kuesioner untuk membantu evaluasi kinerja dosen selama 1 semester</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/sister.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Integrasi Sister</h3>
                        </div>
                        <div class="desc">
                          <p>Adanya integrasi data dosen dengan aplikasi sister yang membantu dosen untuk melihat
                            informasi sesuai data disister</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/ktm.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>KTD Elektronik</h3>
                        </div>
                        <div class="desc">
                          <p>KTM-el terdapat QR-code yang dapat digunakan untuk melihat data pribadi dan nilai mata
                            kuliah.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="konten">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/update.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Sesuai dengan Web Service Feeder</h3>
                        </div>
                        <div class="desc">
                          <p>Rilis SEVIMA GoFeeder selalu up to date menyesuaikan dengan web service PDDIKTI
                            Feeder
                            terbaru.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/nilai.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Laporan EMIS</h3>
                          <span class="ml-2"
                            style="background: #d2322d; padding: .3rem .75rem; border-radius: 20px; color: #fff; font-size: .75rem ">BARU</span>
                        </div>
                        <div class="desc">
                          <p>Membantu proses pelaporan data perguruan tinggi yang ada dibawah
                            kementrian agama islam sesuai dengan template EMIS </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-integrasi" role="tabpanel" aria-labelledby="pills-integrasi-tab">
                <div class="konten">
                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/sevimapay.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Integrasi SevimaPay</h3>
                        </div>
                        <div class="desc">
                          <p>Membantu proses pembayaran keuangan mahasiswa secara online melalui berbagai Bank terkemuka
                            tanpa ribet, aman, dan praktis.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/edlink.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Integrasi Edlink</h3>
                        </div>
                        <div class="desc">
                          <p>Terhubung langsung dengan metode perkuliahan yang lebih efektif. Seperti info kampus,
                            belajar online, notifikasi jadwal perkuliahan,
                            cek nilai, absensi dengan kode QR.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-body">
                      <div class="row justify-content-center">
                        <div class="fitur-icon">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/fitur/finance.png" alt="">
                        </div>
                      </div>

                      <div class="penjelasan text-center mt-4">
                        <div class="tittle">
                          <h3>Integrasi FinanceCloud</h3>
                        </div>
                        <div class="desc">
                          <p>Mengelola keuangan kampus jauh lebih mudah
                            dengan sistem keuangan Finance Cloud, sehingga
                            Anda bisa lebih fokus untuk perkembangan kampus.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta-berlangganan">
      <a href="<?php echo home_url(); ?>/#form-pendaftaran" class="btn btn-merah">Berlangganan</a>
      <a href="https://www.youtube.com/playlist?list=PL2lzyUIyTKXLabO8Eim_9Y-65v36Tnlod" target="_blank"
        class="yyn-btn-play"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            width="12px" height="13px" viewBox="0 0 6 7" version="1.1">
            <title>play [#1003]</title>
            <g id="Page-1" stroke="none" stroke-width="1" fill="#FFFFFF" fill-rule="evenodd">
              <g id="Dribbble-Light-Preview" transform="translate(-347.000000, -3766.000000)" fill="#000">
                <g id="icons" transform="translate(56.000000, 160.000000)">
                  <path
                    d="M296.495 3608.573l-3.994-2.43c-.669-.408-1.501.107-1.501.926v4.862c0 .82.832 1.333 1.5.927l3.995-2.43c.673-.41.673-1.445 0-1.855"
                    id="play-[#1003]" />
                </g>
              </g>
            </g>
            <metadata>
              <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:dc="http://purl.org/dc/elements/1.1/">
                <rdf:Description about="https://iconscout.com/legal#licenses" dc:title="play" dc:description="play"
                  dc:publisher="Iconscout" dc:date="2017-09-15" dc:format="image/svg+xml" dc:language="en">
                  <dc:creator>
                    <rdf:Bag>
                      <rdf:li>Alexandru Stoica</rdf:li>
                    </rdf:Bag>
                  </dc:creator>
                </rdf:Description>
              </rdf:RDF>
            </metadata>
          </svg></span>Eksplorasi Fitur</a>
    </div>
  </div>
</section> -->
<!-- END FITUR GO FEEDER -->

<!--- JUMLAH PERGURUAN TINGGI --->
<section id="perguruan-tinggi">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <div class="row konten justify-content-center">
          <div class="col-12 text-center">
            <h1><span style="color: #E31E21;"><b>2000+</b></span> Pejuang PDDIKTI telah bergabung
              <br>dengan komunitas SEVIMA
            </h1>
            <h4>Bergabunglah dengan komunitas pengguna GO Feeder untuk mendapatkan
              <br>pengalaman dan informasi seputar dunia akademik.
            </h4>
            <a href="<?php echo home_url(); ?>/unduhan/" target="_blank" class="btn btn-merah my-5">Gabung Komunitas
              untuk Mendapat Panduan</a>
            <!-- <button class="btn btn-merah my-5" data-toggle="modal" data-target="#downloadModal">Minta Demo Gratis</button> -->
          </div>
          <div class="col-12 col-lg-8 text-center">
            <div class="video-header">
              <ul id="second-video-header" class="gallery list-unstyled cS-hidden">
                <?php
                query_posts(array(
                  'post_type' => 'video_workshop',
                  'posts_per_page' => -1
                ));
                if (have_posts()) : while (have_posts()) : the_post();
                    if (has_post_thumbnail()) {
                      $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                      $news_src = $src[0];
                    }
                ?>
                    <?php
                    $iframe = get_field('youtube_url');
                    $match = explode("embed/", $iframe);
                    ?>
                    <li data-thumb="http://img.youtube.com/vi/<?php echo $match[1]; ?>/sddefault.jpg" data-src="<?php the_field('youtube_url'); ?>">
                      <div class="thumbnail">
                        <img src="http://img.youtube.com/vi/<?php echo $match[1]; ?>/sddefault.jpg" />
                        <div class="playbtn">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="">
                        </div>
                      </div>
                      <div class="card-body">
                        <p class="title-video"><?php the_title(); ?></p>
                      </div>
                    </li>
                <?php
                  endwhile;
                endif;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--- END JUMLAH PERGURUAN TINGGI --->



<section class="sebaran-klien pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-8 text-center">
        <h1 class="title-header text-center">700+ Perguruan Tinggi Pengguna GoFeeder Tersebar di Seluruh Negeri
        </h1>
      </div>

      <div class="col-12">
        <div id="vmap" style="height: 400px;"></div>
      </div>

      <div class="col-12 col-lg-8 text-center">
        <a href="<?php echo home_url(); ?>/mitra-gofeeder/" class="btn btn-merah my-5">Lihat Semua Mitra Gofeeder</a>
      </div>
    </div>
  </div>
</section>

<!--- TESTIMONI PENGGUNA --->
<!-- <section id="testimoni-pengguna">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h1>100+ Perguruan Tinggi Pengguna GOFeeder Cloud
              <br>Tersebar di Seluruh Negeri</h1>
          </div>
          <div class="col-12 text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/peta-testimoni.png" class="img-fluid" alt="">
            <h4 class="py-5">Ingin tahu kisah sukses para pengguna GoFeeder Cloud ? Simak disini : <a
                href="<?php echo home_url(); ?>/mitra-gofeeder/"
                style="color: #E31E21; border-bottom: 1px dashed #E31E21; text-decoration: none; font-weight: bold;">Mitra
                GoFeeder</a></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--- END TESTIMONI PENGGUNA --->


<!--- PILIHAN LAYANAN --->
<!-- PRICING NEW -->
<section id="pilihan-harga">
  <section id="pricing-with-accordion">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-11">
          <article>
            <div class="row">
              <div class="col-12 d-flex justify-content-center align-items-center">
                <div class="col-12 w-50 text-center">
                  <h1>Pilihan Layanan GoFeederCloud</h1>
                  <div class="card-text mx-auto text-center" style="margin-bottom: 4rem;">
                    <h4>Sistem Informasi Manajemen dan Akademik yang paling dicari kampus
                      kini berada di genggaman Anda. Yuk, berlangganan sekarang!</h4>
                  </div>
                </div>
              </div>
            </div>
            <ul class="overflow-auto">
              <li class="bg-blue nav-item" role="presentation">
                <button class="nav-link active" id="community-tab" data-toggle="tab" data-target=".community" type="button" aria-selected="true">
                  <h6 class="item">Community</h6>
                </button>
              </li>
              <li class="bg-blue nav-item" role="presentation">
                <button class="nav-link" data-toggle="tab" data-target=".lite" type="button" aria-selected="false">
                  <h6 class="item">Lite</h6>
                </button>
              </li>
              <li class="bg-blue nav-item">
                <button class="nav-link" data-toggle="tab" data-target=".starter" type="button" aria-selected="false">
                  <h6 class="item">Starter</h6>
                </button>
              </li>
              <li class="bg-blue nav-item">
                <button class="nav-link" data-toggle="tab" data-target=".basic" type="button" aria-selected="false">
                  <h6 class="item">Basic</h6>
                </button>
              </li>
            </ul>
            <div class="table">


              <table>
                <thead>
                  <tr class="price-head">
                    <th style="vertical-align: middle; font-size: 1.25rem;" rowspan="3">
                      <p class="modul">Modul-modul<br> Sevima Platform </p>
                    </th>
                    <th>
                      <h6 class="item">Community</h6>
                      <p class="harga">Rp0<br>
                      </p>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/unduhan" role="button">Unduh Paket</a>
                    </th>
                    <th>
                      <h6 class="item">Lite</h6>
                      <p class="harga">Rp2.5JT<br>
                      </p>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                    <th class="gold">
                      <h6 class="item">Starter</h6>
                      <p class="harga">Rp4.4JT<br>
                      </p>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                    <th class="default">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/sign.png" class="img-fluid sign" style="position: absolute; top: -35%; margin-left: -35px;" alt="">
                      <h6 class="item">Basic</h6>
                      <p class="harga">Rp6JT<br>
                      </p>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                  </tr>

                  <!------ mobile ------->
                  <tr class="d-lg-none">
                    <td>
                      <p><b>Biaya per-bulan</b></p>
                    </td>
                    <td>
                      <p>Rp0</p>
                    </td>
                    <td>
                      <p>Rp2.5JT</p>
                    </td>
                    <td>
                      <p>Rp4.4JT</p>
                    </td>
                    <td class="default" style="font-weight: bold; border-top: 2px solid #ffa000;">
                      <p>Rp6JT</p>
                    </td>
                  </tr>

                  <tr class="d-lg-none">
                    <td>
                      <p><b>Jumlah Mahasiswa</b></p>
                    </td>
                    <td>
                      <p>0</p>
                      <div class="alert-success">Investasi<br>±Rp1.667,- /mhs
                        <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp1.667,- per Mahasiswa tiap Bulannya"></i>
                      </div>
                    </td>
                    <td>
                      <p>
                        < 300 mhs</p>
                          <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                            <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,- per Mahasiswa tiap Bulannya"></i>
                          </div>
                    </td>
                    <td>
                      <p>
                        < 500 mhs</p>
                          <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                            <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,-  per Mahasiswa tiap Bulannya"></i>
                          </div>
                    </td>
                    <td>
                      <p>
                        < 800 mhs</p>
                          <div class="alert-success">Investasi<br>±Rp3.750,- /mhs
                            <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp3.750,- per Mahasiswa tiap Bulannya"></i>
                            b
                          </div>
                    </td>
                    <td class="default" style="font-weight: bold;">
                      <p>
                        < 2,000 mhs</p>
                          <div class="alert-success">Investasi<br>±Rp2.400,- /mhs
                            <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp2.400,- per Mahasiswa tiap Bulannya"></i>
                          </div>
                    </td>
                  </tr>
                  <tr class="d-lg-none">
                    <td>
                      <p><b>Hubungi Kami</b></p>
                    </td>
                    <td>
                      <a class="btn btn-kontak" href="" role="button">Unduh Paket</a>
                    </td>
                    <td>
                      <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                    </td>
                    <td>
                      <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                    </td>
                    <td class="default">
                      <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                    </td>
                  </tr>
                </thead>
                <!-- <tbody>
                  <tr>
                    <td colspan="10" class="sep d-sm-none d-md-block">Sevima Platform</td>
                  </tr>
                </tbody> -->
                <!------ 1 ------->
                <tbody>
                  <tr class="head-fitur">
                    <td class="sep">
                      <div class="d-flex justify-content-between">
                        <div>Integrasi 100% dengan PDDIKTI Neo Feeder</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseNeo')" class="btn btn-sm btn-warning rounded-lg" id="collapseNeoBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseNeo">
                  <tr class="accordion-header">
                    <td class="fitur">Integrasi data akademik, biaya masuk & SPP semester dengan PDDIKTI Neo Feeder</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseNeo">
                  <tr class="accordion-header">
                    <td class="fitur">Layanan PDDIKTI Neo Feeder Online & update otomatis</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseNeo">
                  <tr class="accordion-header">
                    <td class="fitur">Monitoring prosentase pelaporan PDDIKTI Neo Feeder</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseNeo">
                  <tr class="accordion-header">
                    <td class="fitur">Komparasi data antara data SIAKAD dengan data PDDIKTI Neo Feeder</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseNeo">
                  <tr class="accordion-header">
                    <td class="fitur">Evaluasi & Sinkronisasi Data dari SIAKAD ke PDDIKTI Neo Feeder</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <!------ 2 -------->

                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>PMB - Modul Penerimaan Mahasiswa Baru Online</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseModulPMB')" class="btn btn-sm btn-warning rounded-lg" id="collapseModulPMBBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Website Penerimaan Mahasiswa Baru sesuai branding perguruan tinggi (ac.id)</div>
                        <a onclick="collapseControl('collapsePMB')" class="btn btn-sm btn-warning rounded-lg" id="collapsePMBBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child" id="collapsePMB">
                    <td class="fitur-child">- Portal pendaftaran sesuai jalur dan gelombang pendaftaran</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapsePMB">
                    <td class="fitur-child">- Manajemen Detail Informasi Program Studi</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapsePMB">
                    <td class="fitur-child">- Manajemen informasi biaya perkuliahan dan brosur</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Manajemen Siklus PMB</div>
                        <a onclick="collapseControl('collapseManajemenPMB')" class="btn btn-sm btn-warning rounded-lg" id="collapseManajemenPMBBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                    </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child" id="collapseManajemenPMB">
                    <td class="fitur-child">- Manajemen jalur, gelombang pendaftaran, dan sistem kuliah</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenPMB">
                    <td class="fitur-child">- Manajemen Ujian Seleksi & Pengumuman</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenPMB">
                    <td class="fitur-child">- Manajemen Formulir & Tagihan Pendaftaran</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenPMB">
                    <td class="fitur-child">- Setting No Induk Mahasiswa (NIM) & Ekspor menjadi Mahasiswa</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenPMB">
                    <td class="fitur-child">- Laporan Rekapitulasi Pendaftar, Pembayaran & Sumber Informasi</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Pembayaran Tagihan Pendaftaran secara online</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Form pendaftaran online & upload berkas persyaratan administrasi</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Form khusus untuk jalur pindahan, pascasarjana, Rekognisi Pembelajaran Lampau (RPL)
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="RPL ready Agustus"></i>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Pembagian ruangan, penguji, dan peserta berdasarkan jadwal ujian</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Pendaftaran dan Pengelolaan Kartu Indonesia Pintar (KIP) Kuliah </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">One Day Service (ODS)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Try out berbasis CBT</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Seleksi Jalur Rekognisi Pembelajaran lampau (RPL)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseModulPMB">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Fasilitas Penyebaran Informasi Ke Pendaftar</div>
                        <a onclick="collapseControl('collapsePenyebaranInformasi')" class="btn btn-sm btn-warning rounded-lg" id="collapsePenyebaranInformasiBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                  <tr class="accordion-child" id="collapsePenyebaranInformasi">
                    <td class="fitur-child">- Quick chat ke panitia PMB</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapsePenyebaranInformasi">
                    <td class="fitur-child">- Notifikasi Email untuk Pengumuman Pendaftaran</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapsePenyebaranInformasi">
                    <td class="fitur-child">- Kirim info dengan email, whatsapp, dan SMS</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!------ 3 -------->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>SIAKAD - Modul Administrasi Akademik & Operasional Kampus</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseSiakad')" class="btn btn-sm btn-warning rounded-lg" id="collapseSiakadBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Pengisian KRS online oleh mahasiswa</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>

                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen data mahasiswa & aktivitas mahasiswa</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen data dosen</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Manajemen Siklus Perkuliahan</div>
                        <a onclick="collapseControl('collapseSiklusPerkuliahan')" class="btn btn-sm btn-warning rounded-lg" id="collapseSiklusPerkuliahanBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                  <tr class="accordion-child" id="collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Manajamen Kelas Perkuliahan, Jadwal Perkuliahan & Dosen Pengajar</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Manajemen Jurnal Mengajar & RPS</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Manajamen Utilitas Ruang Kuliah</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Manajamen MataKuliah, Kurikulum, Prasyarat & Ekuivalensi MataKuliah</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Fasilitas Paket MataKuliah</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseSiklusPerkuliahan">
                    <td class="fitur-child">- Manajemen unsur bobot nilai (skala & komposisi)</td>
                    <td>Terbatas</td>
                    <td>Terbatas
                      <i class="uil uil-info-circle" title="bisa program studi saja"></i>
                    </td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Presensi Mahasiswa</td>
                    <td>Manual</td>
                    <td>Manual</td>
                    <td>Manual</td>
                    <td class="default" style="font-weight: bold">Manual</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Pengisian Nilai Online oleh Dosen</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Perwalian/Dosen Penasehat</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Pencekalan KRS dan ujian mahasiswa serta dispensasi</div>
                        <a onclick="collapseControl('collapseCekal')" class="btn btn-sm btn-warning rounded-lg" id="collapseCekalBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                  <tr class="accordion-child" id="collapseCekal">
                    <td class="fitur-child">- Cekal Keuangan untuk KRS dan Ujian</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseCekal">
                    <td class="fitur-child">- Cekal Akademik Untuk KRS</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseCekal">
                    <td class="fitur-child">- Cekal Kemahasiswaan untuk Yudisium</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseCekal">
                    <td class="fitur-child">- Cekal Perpustakaan untuk Yudisium</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseCekal">
                    <td class="fitur-child">- Cekal Minimal Kehadiran untuk Ujian</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Proposal dan Tugas Akhir</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Bimbingan Tugas Akhir dari Mahasiswa ke Dosen Pembimbing</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Pengajuan cuti studi oleh mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen kalender akademik</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen transfer mahasiswa dan double degree</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen proses pemutihan nilai</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Open API untuk integrasi dengan aplikasi lain</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseSiakad">
                  <tr class="accordion-header">
                    <td class="fitur">Fasilitas penyebaran informasi ke mahasiswa melalu email & whatsapp</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!------ 4 ------>
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>KEU - Modul Administrasi Keuangan Mahasiswa</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseKeuangan')" class="btn btn-sm btn-warning rounded-lg" id="collapseKeuanganBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKeuangan" id="collapseKeuangan">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Manajemen Administrasi Keuangan</div>
                        <a onclick="collapseControl('collapseManajemenKeuangan')" class="btn btn-sm btn-warning rounded-lg" id="collapseManajemenKeuanganBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                  <tr class="accordion-child collapseManajemenKeuangan" id="collapseManajemenKeuangan">
                    <td class="fitur-child">- Manajemen Tarif Uang Kuliah</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenKeuangan">
                    <td class="fitur-child">- Pembayaran Tunai & Upload Bukti Bayar</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenKeuangan">
                    <td class="fitur-child">- Monitoring Piutang & Status Pembayaran Mahasiswa</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenKeuangan">
                    <td class="fitur-child">- Manajemen Tagihan wajib dan Tagihan per SKS</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManajemenKeuangan">
                    <td class="fitur-child">- Manajemen Beasiswa/Potongan, Denda, Deposit & Voucher Pembayaran</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                <tbody class="accordion-row accordion-child collapseKeuangan">
                  <tr class="accordion-header">
                    <td class="fitur">Pembayaran Tagihan Kuliah secara online
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dengan virtual account (VA) melalui channel pembayaran bank dan e-commerce ternama"></i>
                    </td>
                    <td>2 channel</td>
                    <td>2 channel</td>
                    <td>2 channel</td>
                    <td class="default" style="font-weight: bold">2 channel</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKeuangan">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Perwalian/Dosen Penasehat serta Konsultasi Bimbingan</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKeuangan">
                  <tr class="accordion-header">
                    <td class="fitur">Cicilan Tagihan Kuliah
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Split payment dari sisi mahasiswa sedang dalam development"></i>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKeuangan">
                  <tr class="accordion-header">
                    <td class="fitur">Laporan Analisis Keuangan</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!-- 5 -->
                <tbody>
                  <tr>
                    <td class="sep">CBT - Modul Test Online</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!---- 6 ----->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>EDOM - Modul Pengelolaan Evaluasi Dosen oleh Mahasiswa </div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseEDOM')" class="btn btn-sm btn-warning rounded-lg" id="collapseEDOMBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseEDOM">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Pembuatan Form EDOM Kustom</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseEDOM">
                  <tr class="accordion-header">
                    <td class="fitur">Pengisian Form EDOM by Mahasiswa</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseEDOM">
                  <tr class="accordion-header">
                    <td class="fitur">Rekap Hasil Kuisioner Dosen dan Per Kelas</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>

                <!-- 7 -->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Modul Pengelolaan Yudisium & Wisuda</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseYudisium')" class="btn btn-sm btn-warning rounded-lg" id="collapseYudisiumBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td>Terbatas</td>
                    <td class="default" style="font-weight: bold">Terbatas</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseYudisium">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Periode & Syarat Yudisium</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseYudisium">
                  <tr class="accordion-header">
                    <td class="fitur">Daftar Peserta Yudisium dan status kelulusan</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseYudisium">
                  <tr class="accordion-header">
                    <td class="fitur">Penomoran Dokumen Yudisium (SK/Ijasah/Transkrip)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseYudisium">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Eligible Yudisium</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseYudisium">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Periode, Peserta, dan Buku Wisuda</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!--  -->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Modul Perhitungan Poin Kemahasiswaan</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapsePoin')" class="btn btn-sm btn-warning rounded-lg" id="collapsePoinBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapsePoin">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Aktivitas dan Prestasi Mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePoin">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Pelanggaran Mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePoin">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Beasiswa Mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePoin">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Surat Keterangan Keaktifan Mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!--  -->
                <tbody>
                  <tr>
                    <td class="sep">SKPI - Modul Surat Keterangan Pendamping Ijazah</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <!--  -->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Modul Pembelajaran (SEVIMA Edlink)</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapsePlj')" class="btn btn-sm btn-warning rounded-lg" id="collapsePljBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Premium Storage untuk Perguruan Tinggi</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td>5 GB / PT</td>
                    <td class="default" style="font-weight: bold">15 GB / PT</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Perkuliahan Hybrid (Web & Android)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Pembatasan Kelas</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td>100</td>
                    <td class="default" style="font-weight: bold">150</td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Pengawasan Ujian Online (Proctoring)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Penilaian dokumen PDF oleh dosen</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Pembelajaran Interaktif</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Integrasi SPADA</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Aplikasi Mobile iOS</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">Student Engagement Score</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePlj">
                  <tr class="accordion-header">
                    <td class="fitur">MOOC untuk Dosen (Kelas Merdeka) (*)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!--  -->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>TRACER - Manajemen Tracer Study</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseTracer')" class="btn btn-sm btn-warning rounded-lg" id="collapseTracerBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseTracer">
                  <tr class="accordion-header">
                    <td class="fitur">Perancangan Kuisioner Tracer Study Sesuai Standar PDDIKTI</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseTracer">
                  <tr class="accordion-header">
                    <td class="fitur">Penyebaran email untuk Alumni</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseTracer">
                  <tr class="accordion-header">
                    <td class="fitur">Dashboard Outcome Perguruan Tinggi Sesuai APT dan APS</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <!--  -->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Karirlink - Modul Career Center</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseKarir')" class="btn btn-sm btn-warning rounded-lg" id="collapseKarirBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseKarir">
                  <tr class="accordion-header">
                    <td class="fitur">Portal Info Karir, Lowongan, Event (Web & Mobile)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKarir">
                  <tr class="accordion-header">
                    <td class="fitur">Daftar Riwayat Hidup Lulusan (CV)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKarir">
                  <tr class="accordion-header">
                    <td class="fitur">Melamar pekerjaan melalui aplikasi</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseKarir">
                  <tr class="accordion-header">
                    <td class="fitur">Post & Monitoring Lowongan Kerja (Untuk Perusahaan Rekanan PT)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!---- 7 ---->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Modul Pengelolaan Kepegawaian</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapsePegawai')" class="btn btn-sm btn-warning rounded-lg" id="collapsePegawaiBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Manajemen Data Kepegawaian</div>
                        <a onclick="collapseControl('collapseDataKepegawaian')" class="btn btn-sm btn-warning rounded-lg" id="collapseDataKepegawaianBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child" id="collapseDataKepegawaian">
                    <td class="fitur-child">- Presensi online / integrasi fingerprint oleh Pegawai dan Dosen</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseDataKepegawaian">
                    <td class="fitur-child">- Monitoring dan Laporan Kehadiran serta Kegiatan Pegawai</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseDataKepegawaian">
                    <td class="fitur-child">- Manajemen pengajuan dan validasi ijin, cuti, & kehadiran pegawai</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">Layanan SISTER online</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">Integrasi dengan SISTER</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Data Penelitian dan Pengabdian Masyarakat</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">BKD - Modul Beban Kinerja Dosenn</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapsePegawai">
                  <tr class="accordion-header">
                    <td class="fitur">PAK - Modul Perhitungan Angka Kredit</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!----- 8 ----->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Manajemen Akreditasi</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseAkreditasi')" class="btn btn-sm btn-warning rounded-lg" id="collapseAkreditasiBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseAkreditasi">
                  <tr class="accordion-header">
                    <td class="fitur">Berdasarkan BAN-PT</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseAkreditasi">
                  <tr class="accordion-header">
                    <td class="fitur">Berdasarkan Lembaga Akreditasi Mandiri (LAM)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!----- 9 ----->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>MBKM - Modul Merdeka Belajar Kampus Merdeka</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseMbkm')" class="btn btn-sm btn-warning rounded-lg" id="collapseMbkmBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm" id="collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen pertukaran pelajar antar prodi mahasiswa internal dan mahasiswa eksternal</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen 8 aktivitas kampus merdeka sesuai dengan IKU</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen konversi mata kuliah</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen logbook dan evaluasi aktivitas mahasiswa</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Penawaran aktivitas MBKM</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMbkm">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Mitra Perguruan Tinggi</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!----- 10 ----->
                <tbody>
                  <tr>
                    <td class="sep">Smart Dashboard bagi Pimpinan Universitas</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Maukuliah</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseMauKuliah')" class="btn btn-sm btn-warning rounded-lg" id="collapseMauKuliahBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseMauKuliah">
                  <tr class="accordion-header">
                    <td class="fitur">Tes Minat Bakat </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseMauKuliah">
                  <tr class="accordion-header">
                    <td class="fitur">Try out seleksi persiapan masuk perguruan tinggi negeri</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!------ 11 ------->
                <tbody>
                  <tr>
                    <td class="sep">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>Modul Tata Usaha</div>
                        <div class="d-flex align-items-center">
                          <a onclick="collapseControl('collapseTU')" class="btn btn-sm btn-warning rounded-lg" id="collapseTUBtn">
                            <i class='uil uil-angle-down'></i>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child" id="collapseTU">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Tiket Pertanyaan Dan Keluhan</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseTU">
                  <tr class="accordion-header">
                    <td class="fitur">Manajemen Pengajuan Surat (development)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody class="accordion-row accordion-child collapseTU">
                  <tr class="accordion-header">
                    <td class="fitur">
                      <div class=" d-flex justify-content-between align-items-center">
                        <div>Manajemen Permintaan Laporan</div>
                        <a onclick="collapseControl('collapseManage')" class="btn btn-sm btn-warning rounded-lg" id="collapseManageBtn">
                          <i class='uil uil-angle-down'></i>
                        </a>
                      </div>
                    </td>
                    <td>Max 5</td>
                    <td>Max 5</td>
                    <td>Max 5</td>
                    <td class="default" style="font-weight: bold">Max 5</td>
                  </tr>
                  <tr class="accordion-child" id="collapseManage">
                    <td class="fitur-child">1. KTM</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">2. KRS</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">3. KHS</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">4. Transkrip Lulusan</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">5. Transkrip Sementara</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">6. Surat Keterangan Pendamping Ijazah (SKPI)</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">7. Ijazah</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-child collapseManage">
                    <td class="fitur-child">8. Daftar Hadir & Kartu Ujian</td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                </tbody>
                <!--  -->


                <!----- 12 ----->
                <tbody>
                  <tr>
                    <td class="sep">Module Wizard</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="sep">Perpustakaan Online (sLims)</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="sep">Manajemen Layanan Kuesioner</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>
                <tbody>
                  <tr>
                    <td class="sep">Outcome Bassed Education (OBE)
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Sedang dalam pengembangan"></i>
                    </td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                </tbody>

                <!-- implementasi -->
                <tbody class="accordion-row bonus">
                  <tr>
                    <td class="sep" id="add-on">Implementasi & Training </td>
                  </tr>
                  <tr class="accordion-header">
                    <td class="fitur">Implementasi </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-header">
                    <td class="fitur">Migrasi Data awal </td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td><i class='uil uil-check-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  </tr>
                  <tr class="accordion-header">
                    <td class="fitur">Training Penggunaan Aplikasi</td>
                    <td>3 Sesi</td>
                    <td>3 Sesi</td>
                    <td>7 Sesi</td>
                    <td class="default" style="font-weight: bold">7 Sesi</td>
                  </tr>
                  <tr class="accordion-header">
                    <td class="fitur">Refreshment</td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td><i class='uil uil-times-circle'></i></td>
                    <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  </tr>
                  <tr>
                    <td class="sep add-on" style="color:transparent">-</td>
                  </tr>
                </tbody>

                <tfoot>
                  <tr>
                    <th style="vertical-align: middle; font-size: 1.25rem;">
                      <p>Harga </p>
                    </th>
                    <th class="baru">
                      <h6 class="item">Community</h6>
                      <p class="harga">Rp0</p><br>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/unduhan" role="button">Unduh Paket</a>
                    </th>
                    <th class="baru">
                      <h6 class="item">Lite</h6>
                      <p class="harga">Rp2.5JT</p><br>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                    <th class="baru">
                      <!-- <th class="gold"> -->
                      <h6 class="item">Starter</h6>
                      <p class="harga">Rp4.4JT</p><br>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                    <th class="baru">
                      <h6 class="item">Basic</h6>
                      <p class="harga">Rp6JT</p><br>
                      <a class="btn btn-kontak" href="<?php echo home_url(); ?>/berlangganan" role="button">Pilih Paket</a>
                    </th>
                  </tr>
                  <tr>
                    <th>
                      <p>Jumlah Mahasiswa </p>
                    </th>
                    <th class="baru">
                      <small>-</small>
                    </th>
                    <th class="baru">
                      <small>
                        < 300 mhs</small>
                    </th>
                    <th class="baru">
                      <small>
                        < 500 mhs</small>
                    </th>
                    <th class="baru">
                      <small>
                        < 800 mhs</small>
                    </th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </article>


          <div class="pricing-footer">
            <div class="note">
              <p><i>(1) Channel Pembayaran : Bank / e-Commerce</i></p>
              <p><i>(2) Modul Integrasi LAM dalam progress penyesuaian</i></p>
              <p><i>(3) Catatan: Pelatihan maksimal 3 jam per sesi</i></p>
              <p><b><i>Semua harga belum termasuk PPN 11% sesuai ketentuan Perpajakan</i></b></p>
            </div>
            <a class="btn btn-download" href="https://sevima.com/harga-sevima-platform-baru/" target="_blank" role="button">
              <i class="uil uil-file-download"></i>
              <p>Download Sebagai PDF</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</section>
<!--- END PILIHAN LAYANAN --->
<!-- add-on -->
<section id="pricing-with-accordion">
  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-11">
        <article>
          <ul class="overflow-auto">
            <li class="bg-blue nav-item" role="presentation">
              <button class="nav-link active" id="community-tab" data-toggle="tab" data-target=".community" type="button" aria-selected="true">
                <h6 class="item">Community</h6>
              </button>
            </li>
            <li class="bg-blue nav-item" role="presentation">
              <button class="nav-link" data-toggle="tab" data-target=".lite" type="button" aria-selected="false">
                <h6 class="item">Lite</h6>
              </button>
            </li>
            <li class="bg-blue nav-item">
              <button class="nav-link" data-toggle="tab" data-target=".starter" type="button" aria-selected="false">
                <h6 class="item">Starter</h6>
              </button>
            </li>
            <li class="bg-blue nav-item">
              <button class="nav-link" data-toggle="tab" data-target=".basic" type="button" aria-selected="false">
                <h6 class="item">Basic</h6>
              </button>
            </li>
          </ul>
          <div class="table">
            <table>
              <thead>
                <tr class="price-head">
                  <th style="vertical-align: middle; font-size: 1.25rem;" rowspan="3">
                    <p class="modul">Modul-modul<br> Add-on </p>
                  </th>
                  <th>
                    <h6 class="item">Community</h6>
                    <p class="harga">Rp0<br>
                    </p>
                  </th>
                  <th>
                    <h6 class="item">Lite</h6>
                    <p class="harga">Rp2.5JT<br>
                    </p>
                  </th>
                  <th class="gold">
                    <h6 class="item">Starter</h6>
                    <p class="harga">Rp4.4JT<br>
                    </p>
                  </th>
                  <th>
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/sign.png" class="img-fluid sign" style="position: absolute; top: -35%; margin-left: -35px;" alt=""> -->
                    <h6 class="item">Basic</h6>
                    <p class="harga">Rp6JT<br>
                    </p>
                  </th>
                </tr>

                <!------ mobile ------->
                <tr class="d-lg-none">
                  <td>
                    <p><b>Biaya per-bulan</b></p>
                  </td>
                  <td>
                    <p>Rp0</p>
                  </td>
                  <td>
                    <p>Rp2.5JT</p>
                  </td>
                  <td>
                    <p>Rp4.4JT</p>
                  </td>
                  <td>
                    <p>Rp6JT</p>
                  </td>
                </tr>

                <!-- <tr class="d-lg-none">
                  <td>
                    <p><b>Jumlah Mahasiswa</b></p>
                  </td>
                  <td>
                    <p>0</p>
                    <div class="alert-success">Investasi<br>±Rp1.667,- /mhs
                      <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp1.667,- per Mahasiswa tiap Bulannya"></i>
                    </div>
                  </td>
                  <td>
                    <p>
                      < 300 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td>
                    <p>
                      < 500 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,-  per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td>
                    <p>
                      < 800 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp3.750,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp3.750,- per Mahasiswa tiap Bulannya"></i>
                          b
                        </div>
                  </td>
                  <td>
                    <p>
                      < 2,000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp2.400,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp2.400,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                </tr> -->
                <!-- <tr class="d-lg-none">
                  <td>
                    <p><b>Hubungi Kami</b></p>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="" role="button">Unduh Paket</a>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                  </td>
                  <td class="default">
                    <a class="btn btn-kontak" href="" role="button">Pilih Paket</a>
                  </td>
                </tr> -->
              </thead>
              <tbody class="accordion-row bonus2">
                <tr>
                  <td class="sep" id="add-on2">Add-On</td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Pelaporan PPSDM (Pusat Pengembangan Sumber Daya Manusia Minyak dan Gas)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Pelaporan PPSDM PU (Untuk kampus dibawah Kementerian Perhubungan)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Pelaporan EMIS KEMENAG (Master mahasiswa, Dosen, lulusan, riwayat dosen)</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Manejemen Uji Kompetensi (UKOM) & kepaniteraan klinik</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Integrasi SIMPONI KEMENKEU</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur-add">Laporan Evaluasi Pembelajaran Khusus Politeknik</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Fakultas Kedokteran</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Manajemen Persuratan dan Disposisi (e-Office)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Tanda Tangan Ijazah Elektronik (e-Sign)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!-- end add on -->

<!--- CTA KE SIAKAD CLOUD --->
<section id="cta-siakad">
  <div class="container">
    <div class="row">
      <div class="col-md-10 offset-md-1 col-xs-12">
        <article class="cta-siakadcloud">
          <div class="row">
            <div class="col-md-8">
              <h1 class="title-siakad">Jumlah mahasiswa lebih dari 1500?</h1>
              <div class="text-siakad">
                <p>Tenang, SEVIMA mengakomodasi layanan sistem akademik untuk universitas menengah keatas dengan siAkad
                  Cloud</p>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo-siacloud-putih.png" class="img-fluid" style="height: 40px; margin-bottom: .5rem" alt="">
              <!-- Button to Open the Modal -->
              <button type="button" class="btn btn-merah" data-toggle="modal" data-target="#myModal">
                Kunjungi siAkad Cloud
              </button>

              <!-- The Modal -->
              <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                      <a href="http://siakadcloud.com/" target="_blank" type="button" class="btn btn-siakad">Pelajari
                        siAkadCloud <i class="uil uil-arrow-right"></i></a>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<!--- END SIAKAD CLOUD --->

<!-- FORM -->

<section id="faq">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-12">
        <div class="row">
          <div class="col-12 col-md-6">
            <h1>Pertanyaan Tentang GOFeeder Cloud</h1>
            <h4>Yuk! Simak pertanyaan yang sering muncul saat ingin berlangganan siakad cloud</h4>
            <div class="mt-5">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Apa itu GoFeeder ?
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      SEVIMA GoFeeder merupakan layanan sistem informasi akademik
                      yang mengakomodasi universitas menengah kebawah untuk
                      membantu pelaporan ke Feeder PD-DIKTI yang dilengkapi dengan
                      beberapa modul untuk memudahkan manajemen kampus dalam
                      mengelola akademik.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Apakah aplikasi Gofeeder ini berbayar ?
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      <ul>
                        <li>Aplikasi SEVIMA Gofeeder ada 2 versi yaitu Gofeedercloud dan Gofeeder Community Version
                        </li>
                        <li>Aplikasi SEVIMA GoFeederCloud merupakan layanan berbayar sevima untuk mengonlinekan
                          Gofeeder sehingga Perguruan Tinggi mudah dalam mengakses sistem informasi akademik Gofeeder.
                        </li>
                        <li>Aplikasi SEVIMA GoFeeder Community Version merupakan aplikasi yang Free / Gratis bisa
                          digunakan oleh Semua Perguruan Tinggi yang telah melaporkan ke PD DIKTI Feeder.</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Saya sudah input di PDDIKTI Feeder apakah data saya harus dipindah lagi ke SEVIMA GoFeeder ?
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      Tidak perlu data yang sudah diinput di Feeder bisa langsung digunakan oleh SEVIMA GoFeeder. Dan
                      data yang diinput di SEVIMA GoFeeder otomatis masuk ke Feeder PDDIKTI. Praktis.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <h1>Cerita Mereka #PejuangPDDIKTI</b></h1>
            <h4 class="mb-5">Segudang manfaat bisa Anda dapatkan di aplikasi GoFeeder Cloud
              dan tentunya akan membantu kegiatan akademik Perguruan Tinggi Anda.</h4>
            <div id="testimonial-slider" class="owl-carousel owl-theme">
              <div class="testimonial">
                <p class="description">
                  Sebelumnya menggunakan Gofeeder Free merasa sangat terbantu dan ingin lebih
                  powerfull. Dosen bisa langsung isi nilai sendiri dan mahasiswa juga bisa isi
                  krs tanpa perlu datang ke kampus untuk mengisi administrasi akademik
                </p>
                <h3 class="title">Heri Setiawan</h3>
                <span class="post">IT / BAAK Politeknik Tunas Pemuda Tangerang</span>
              </div>
              <div class="testimonial">
                <p class="description">
                  Sangat terbantu dengan adanya sistem informasi akademik GoFeeder Cloud yang
                  tidak perlu tambahan IT atau menyediakan server dan selalu mendapat support
                  dari tim SEVIMA.
                </p>
                <h3 class="title">Muhammad Ardian Nur</h3>
                <span class="post">UPT Data dan Informasi Poltekkes Aisyiyah Banten</span>
              </div>
              <div class="testimonial">
                <p class="description">
                  Kami merasa sangat terbantu terutama dalam bidang akademik yaitu terkait
                  pelaporan Feeder, yang mana sebelumnya kita menggunakan sistem manual dalam
                  input data.
                </p>
                <h3 class="title">Dr. Ir. Agus Suryanto, MP</h3>
                <span class="post">Wakil Rektorat I Akademik UNMER Ponorogo</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END FORM -->

<section class="banner-kontak" id="form-pendaftaran">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-box wow zoomIn" data-wow-duration="1.5s" data-wow-offset="300" style="visibility: visible; animation-duration: 1.5s; animation-name: zoomIn;">
          <div class="text text-center">
            <h3>Tertarik Menggunakan GoFeeder Cloud?</h3>
            <p>Ayo mulai GO DIGITAL dengan mengelola kampus dalam satu platform.
              Pelaporan Feeder Beres, Administrasi Akademik OK, Akreditasi Beres.</p>
          </div>
          <div class="button">
            <div class="button-selengkapnya flex-column flex-md-row">
              <a class="btn btn-merah" type="button" href="<?php echo site_url('berlangganan-checklist') ?>">Berlangganan</a>
              <a class="link-wa mt-4 mt-md-0" href="https://wa.me/6282261610404?text=[GFC3204]%20Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20GoFeeder%20Cloud" role="button"><i class="uil uil-whatsapp"></i>Hubungi
                SEVIMA</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>