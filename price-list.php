<?php

/**
 * Template Name: Price List
 */

get_header();
?>


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
<!-- 
<section id="hero-promo">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 style="color: #fff; margin: 1rem 0;"></h1>
        <p style="color: #fff; font-size: 20px; margin-bottom: 0"><b></b></p>
        <div id="breadcrumb" ><a href="<?php echo home_url(); ?>/home/" style="color: #fff;">Home</a> > Harga siAkadCloud</div>
        
      </div>
    </div>
  </div>
</section> -->

<section id="hero-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="desc">
            <!-- <label>Our Offering for You</label> -->
            <h3>Paket Harga Sevima Platform</h3>
            <p>Saatnya Upgrade Menuju Perguruan Tinggi Unggul</p>
          </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="image-hero">
            <img src="<?php echo get_template_directory_uri(); ?>/img/illu-promo.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- PRICING NEW -->
<section id="pricing-with-accordion">
  <div class="container-fluid">
    <!-- <div class="row justify-content-md-center mb-5">
      <div class="col-md-12 col-lg-7">
        <div class="tittle text-center">
          <h6>PAKET LAYANAN EDLINK PRO</h6>
          <h3>Apa Yang Perguruan Tinggi Anda Butuhkan?</h3>
          <p>Sekarang, Perguruan Tinggi Anda dapat langsung menyesuaikan kebutuhan layanan<br>EdLink PRO dengan
            Pagu Anggaran melalui paket EdLink PRO di bawah ini</p>
        </div>
      </div>
    </div> -->
    <div class="row justify-content-center">
      <div class="col-11">
        <article>
          <ul>
            <li class="bg-blue">
              <button>
                <h6 class="item">Community </h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Lite</h6>
              </button>
            </li>
            <li class="bg-blue active">
              <button>
                <h6 class="item">Starter</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Basic</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Silver</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Gold</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Titanium</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Platinum</h6>
              </button>
            </li>
            <li class="bg-blue">
              <button>
                <h6 class="item">Palladium</h6>
              </button>
            </li>
          </ul>
          <div class="table">
            <table>
              <thead>
                <tr>
                  <th style="vertical-align: middle; font-size: 1.25rem">
                    <p>Modul-modul<br> siAkadCloud </p>
                  </th>
                  <th>
                    <h6 class="item">Community</h6>
                    <p class="harga">Rp0<br><small>-</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  <th>
                    <h6 class="item">Lite</h6>
                    <p class="harga">Rp2.5JT<br><small> < 300 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  <th class="gold">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sign.png" class="img-fluid sign" style="position: absolute; top: -20%; margin-left: -35px;" alt="">
                    <h6 class="item">Starter</h6>
                    <p class="harga">Rp4.4JT<br><small> < 500 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  <th>
                    <h6 class="item">Basic</h6>
                    <p class="harga">Rp6JT<br><small>< 800 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  <th>
                    <h6 class="item">Silver</h6>
                    <p class="harga">Rp9JT<br><small>< 2,000 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  <th>
                    <h6 class="item">Gold</h6>
                    <p class="harga">Rp13JT<br><small>< 4,000 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th><th>
                    <h6 class="item">Titanium</h6>
                    <p class="harga">Rp19JT<br><small>< 7,000 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th><th>
                    <h6 class="item">Platinum</h6>
                    <p class="harga">Rp31JT<br><small>< 20,000 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th><th>
                    <h6 class="item">Palladium</h6>
                    <p class="harga">Rp43.5JT<br><small>< 35,000 mhs</small></p>
                    <!-- <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a> -->
                  </th>
                  
                </tr>
                
                <tr class="d-lg-none">
                  <td>
                    <p><b>Biaya per-bulan</b></p>
                  </td>
                  <td>
                    <p>Rp7JT</p>
                  </td>
                  <td>
                    <p>Rp10JT</p>
                  </td>
                  <td class="default" style="font-weight: bold;">
                    <p>Rp15JT</p>
                  </td>
                  <td>
                    <p>Rp18JT</p>
                  </td>
                  <td>
                    <p>Rp25JT</p>
                  </td>
                </tr>
                <tr class="d-lg-none">
                  <td>
                    <p><b>Jumlah Mahasiswa</b></p>
                  </td>
                  <td>
                    <p>
                      < 2.000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td>
                    <p>
                      < 3.000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,-  per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td class="default" style="font-weight: bold;">
                    <p>
                      < 5.000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp3.750,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp3.750,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td>
                    <p>
                      < 10.000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp2.400,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp2.400,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                  <td>
                    <p>
                      < 20.000 mhs</p>
                        <div class="alert-success">Investasi<br>±Rp1.667,- /mhs
                          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp1.667,- per Mahasiswa tiap Bulannya"></i>
                        </div>
                  </td>
                </tr>
                <tr class="d-lg-none">
                  <td>
                    <p><b>Hubungi Kami</b></p>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </td>
                  <td class="default">
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </td>
                  <td>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="10" class="sep">Sevima Platform</td>
                </tr>
              </tbody>

              <!------ 1 ------->
              <tbody>
                <tr>
                  <td class="sep">Integrasi 100% dengan PDDIKTI Neo Feeder</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr  class="accordion-header">
                  <td class="fitur">Integrasi data akademik, biaya masuk & SPP semester dengan PDDIKTI Neo Feeder</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Layanan PDDIKTI Neo Feeder Online & update otomatis</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Monitoring prosentase pelaporan PDDIKTI Neo Feeder</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Komparasi data antara data SIAKAD dengan data PDDIKTI Neo Feeder</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Evaluasi & Sinkronisasi Data dari SIAKAD ke PDDIKTI Neo Feeder</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!------ 2 -------->
              <tbody>
                <tr>
                  <td class="sep">PMB - Modul Penerimaan Mahasiswa Baru Online</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Website Penerimaan Mahasiswa Baru sesuai branding perguruan tinggi (ac.id)</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Lebih Lengkap</td>
                  <td>Lebih Lengkap</td>
                  <td>Lebih Lengkap</td>
                  <td>Lebih Lengkap</td>
                  <td>Lebih Lengkap</td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Portal pendaftaran sesuai jalur dan gelombang pendaftaran</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Detail Informasi Program Studi</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen informasi biaya perkuliahan dan brosur</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Siklus PMB</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen jalur, gelombang pendaftaran, dan sistem kuliah</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Ujian Seleksi & Pengumuman</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi fasilitas manajemen kuota, 
                      grade minimal kelulusan, seleksi prestasi berdasarkan rapor, dan rekomendasi kelulusan otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi fasilitas manajemen kuota, 
                      grade minimal kelulusan, seleksi prestasi berdasarkan rapor, dan rekomendasi kelulusan otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi fasilitas manajemen kuota, 
                      grade minimal kelulusan, seleksi prestasi berdasarkan rapor, dan rekomendasi kelulusan otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi fasilitas manajemen kuota, 
                      grade minimal kelulusan, seleksi prestasi berdasarkan rapor, dan rekomendasi kelulusan otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi fasilitas manajemen kuota, 
                      grade minimal kelulusan, seleksi prestasi berdasarkan rapor, dan rekomendasi kelulusan otomatis"></i>
                  </td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Formulir & Tagihan Pendaftaran</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Lebih Lengkap
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi rekomendasi pengelompokan Uang Kuliah Tunggal (UKT),
                  Kartu Indonesia Pintar (KIP)/Bidikmisi otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi rekomendasi pengelompokan Uang Kuliah Tunggal (UKT),
                  Kartu Indonesia Pintar (KIP)/Bidikmisi otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi rekomendasi pengelompokan Uang Kuliah Tunggal (UKT),
                  Kartu Indonesia Pintar (KIP)/Bidikmisi otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi rekomendasi pengelompokan Uang Kuliah Tunggal (UKT),
                  Kartu Indonesia Pintar (KIP)/Bidikmisi otomatis"></i>
                  </td>
                  <td>Lebih Lengkap
                      <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dilengkapi rekomendasi pengelompokan Uang Kuliah Tunggal (UKT),
                  Kartu Indonesia Pintar (KIP)/Bidikmisi otomatis"></i>
                  </td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Setting No Induk Mahasiswa (NIM) & Ekspor menjadi Mahasiswa</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Laporan Rekapitulasi Pendaftar, Pembayaran & Sumber Informasi</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pembayaran Tagihan Pendaftaran secara online</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Form pendaftaran online & upload berkas persyaratan administrasi</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Form khusus untuk jalur pindahan, pascasarjana, Rekognisi Pembelajaran Lampau (RPL)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pembagian ruangan, penguji, dan peserta berdasarkan jadwal ujian</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Pendaftaran dan Pengelolaan Kartu Indonesia Pintar (KIP) Kuliah </td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">One Day Service (ODS)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Try out berbasis CBT</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Fasilitas Penyebaran Informasi Ke Pendaftar</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Quick chat ke panitia PMB</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Notifikasi Email untuk Pengumuman Pendaftaran</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Kirim info dengan email, whatsapp, dan SMS</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!------ 3 -------->
              <tbody>
                <tr>
                  <td class="sep">SIAKAD - Modul Administrasi Akademik  & Operasional Kampus</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pengisian KRS online oleh mahasiswa</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Integrasi dengan aplikasi mobile SEVIMA EdLink"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Integrasi dengan aplikasi mobile SEVIMA EdLink"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Integrasi dengan aplikasi mobile SEVIMA EdLink"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Integrasi dengan aplikasi mobile SEVIMA EdLink"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Integrasi dengan aplikasi mobile SEVIMA EdLink"></i>
                  </td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen data mahasiswa & aktivitas mahasiswa</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen data dosen & riwayat dosen</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Siklus Perkuliahan</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajamen Kelas Perkuliahan, Jadwal Perkuliahan & Dosen Pengajar</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Jurnal Mengajar, RPS & Utilitas Ruang Kuliah</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajamen MataKuliah, Kurikulum, Prasyarat & Ekuivalensi MataKuliah</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td><i class='uil uil-times-circle'>- Fasilitas Paket MataKuliah</i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen unsur bobot nilai</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Presensi Mahasiswa by Scan Barcode</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'</i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pengisian Nilai Online oleh Dosen</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Perwalian/Dosen Penasehat</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                  <td>Termasuk manajemen skala nilai</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pencekalan KRS dan ujian mahasiswa serta dispensasi</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Proposal dan Tugas Akhir</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Bimbingan Tugas Akhir dari Mahasiswa ke Dosen Pembimbing</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pengajuan cuti studi oleh mahasiswa</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen kalender akademik</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen transfer mahasiswa dan double degree</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen proses pemutihan nilai</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Open API untuk integrasi dengan aplikasi lain</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Fasilitas penyebaran informasi ke mahasiswa melalu email & whatsapp</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!------ 4 ------>
              <tbody>
                <tr>
                  <td class="sep">KEU - Modul Administrasi Keuangan Mahasiswa</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Administrasi Keuangan</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Tarif Uang Kuliah</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Berdasarkan Angkatan, Prodi, UKT, dan Sistem Kuliah"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Berdasarkan Angkatan, Prodi, UKT, dan Sistem Kuliah"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Berdasarkan Angkatan, Prodi, UKT, dan Sistem Kuliah"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Berdasarkan Angkatan, Prodi, UKT, dan Sistem Kuliah"></i>
                  </td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Berdasarkan Angkatan, Prodi, UKT, dan Sistem Kuliah"></i>
                  </td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Pembayaran Tunai & Upload Bukti Bayar</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Monitoring Piutang & Status Pembayaran Mahasiswa</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Tagihan wajib dan Tagihan per SKS</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen Beasiswa/Potongan, Denda, Deposit & Voucher Pembayaran</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Pembayaran Tagihan Kuliah secara online
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Dengan virtual account (VA) 
                    melalui channel pembayaran bank dan e-commerce ternama"></i>
                  </td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>2 channel</td>
                  <td class="default" style="font-weight: bold">2 channel</td>
                  <td>2 channel</td>
                  <td>3 channel</td>
                  <td>3 channel</td>
                  <td>4 channel</td>
                  <td>5 channel</td>
                  <td>6 channel</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Perwalian/Dosen Penasehat serta Konsultasi Bimbingan</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                <td class="fitur">Cicilan Tagihan Kuliah
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Split payment dari sisi mahasiswa sedang dalam development"></i>
                  </td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Laporan Analisis Keuangan</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!---- 5 ----->
              <tbody>
                <tr>
                  <td class="sep">SKPI - Modul Surat Keterangan Pendamping Ijazah</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">TRACER - Manajemen Tracer Study</td>
                  <td>Terbatas</td>
                  <td>Terbatas</td>
                  <td class="default" style="font-weight: bold">Terbatas</td>
                  <td>Terbatas</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">TRACER - Manajemen Tracer Study</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Penyebaran email untuk Alumni</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Dashboard Outcome Perguruan Tinggi Sesuai APT dan APS</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!---- 6 ----->
              
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Portal Info Karir, Lowongan, Event (Web & Mobile)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Daftar Riwayat Hidup Lulusan (CV)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle<tbody>
                <tr>
                  <td class="sep">Karirlink - Modul Career Center</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Personalized (*)</td>
                  <td>Whitelabel (*)</td>
                  <td>Whitelabel (*)</td>
                </tr>
              </tbody>'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Melamar pekerjaan melalui aplikasi</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Post & Monitoring Lowongan Kerja (Untuk Perusahaan Rekanan PT)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!---- 7 ---->
              <tbody>
                <tr>
                  <td class="sep">Modul Pengelolaan Kepegawaian</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Data Kepegawaian</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Presensi online / integrasi fingerprint oleh Pegawai dan Dosen</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Monitoring dan Laporan Kehadiran serta Kegiatan Pegawai</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-child">
                  <td class="fitur-child">- Manajemen pengajuan dan validasi ijin, cuti, & kehadiran pegawai</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Layanan SISTER online</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Integrasi dengan SISTER</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Data Penelitian dan Pengabdian Masyarakat</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">BKD - Modul Beban Kinerja Dosenn</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">PAK - Modul Perhitungan Angka Kredit</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              
              <!----- 8 ----->
              <tbody>
                <tr>
                  <td class="sep">Manajemen Akreditasi</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Termasuk Simulasi Akreditasi</td>
                  <td>Termasuk Simulasi Akreditasi</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Berdasarkan BAN-PT</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody><tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Berdasarkan Lembaga Akreditasi Mandiri (LAM)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>4 LAM</td>
                  <td>4 LAM</td>
                  <td>6 LAM</td>
                </tr>
              </tbody>

              <!----- 9 ----->
              <tbody>
                <tr>
                  <td class="sep">MBKM - Modul Merdeka Belajar Kampus Merdeka</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>Termasuk Perhitungan Pencapaian IKU</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen pertukaran pelajar antar prodi mahasiswa internal dan mahasiswa eksternal</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen 8 aktivitas kampus merdeka sesuai dengan IKU</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen konversi mata kuliah</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen logbook dan evaluasi aktivitas mahasiswa</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Penawaran aktivitas MBKM</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Manajemen Mitra Perguruan Tinggi</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!----- 10 ----->
              <tbody>
                <tr>
                  <td class="sep">Smart Dashboard bagi Pimpinan Universitas</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td>Report</td>
                  <td>Report</td>
                  <td>Report & Dashboard (*)</td>
                  <td>Report, Dashboard, Forecast (*)</td>
                  <td>Report, Dashboard, Forecast (*)</td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Maukuliah</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td>CRM CAMABA (*)</td>
                  <td>CRM CAMABA (*)</td>
                  <td>CRM CAMABA (*)</td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Tes Minat Bakat </td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Try out seleksi persiapan masuk perguruan tinggi negeri</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!------ 11 ------->
              <tbody>
                <tr>
                  <td class="sep">Modul Tata Usaha	Modul Tata Usaha</td>
                  <td>Lebih Lengkap
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Maksimal 5 Laporan"></i>
                  </td>
                  <td>Lebih Lengkap</td>
                  <td class="default" style="font-weight: bold">Lebih Lengkap</td>
                  <td>Lebih Lengkap</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">KTM, KRS, KHS</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Transkrip Lulusan</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>  
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Transkrip Sementara</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Surat Keterangan Pendamping Ijazah (SKPI)</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Ijazah</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody class="accordion-row">
                <tr class="accordion-header">
                  <td class="fitur">Daftar Hadir & Kartu Ujian</td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>

              <!----- 12 ----->
              <tbody>
                <tr>
                  <td class="sep">Perpustakaan Online (sLims)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Manajemen Layanan Kuesioner</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Rekognisi Pembelajaran lampau (RPL)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Rekognisi Pembelajaran lampau (RPL)</td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="fitur">Pembayaran Tagihan Kuliah secara online
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Sedang dalam pengembangan"></i>
                  </td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td class="default" style="font-weight: bold"><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-times-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              </tbody>
              <!-- add-on -->
              <tbody class="accordion-row bonus">
                <tr>
                  <td colspan="10" class="sep">Add-On</td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur">Pelaporan PPSDM (Pusat Pengembangan Sumber Daya Manusia Minyak dan Gas)</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur">Pelaporan EMIS KEMENAG (Master mahasiswa, Dosen, lulusan, riwayat dosen)</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur">Manejemen Uji Kompetensi (UKOM) & kepaniteraan klinik</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur">Integrasi SIMPONI KEMENKEU</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
                <tr class="accordion-header">
                  <td class="fitur">Laporan Evaluasi Pembelajaran Khusus Politeknik</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                  <td><i class='uil uil-check-circle'></i></td>
                </tr>
              <tbody>
                <tr>
                  <td class="sep">Fakultas Kedokteran</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td colspan="3">Dengan kontrak terpisah (*)
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Rp 20.000.000"></i>
                  </td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Manajemen Persuratan dan Disposisi (e-Office)</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td colspan="3">Dengan kontrak terpisah (*)
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Rp 20.000.000"></i>
                  </td>
                </tr>
              </tbody>
              <tbody>
                <tr>
                  <td class="sep">Tanda Tangan Ijazah Elektronik (e-Sign)</td>
                  <td></td>
                  <td></td>
                  <td class="default" style="font-weight: bold"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td colspan="2">Dengan kontrak terpisah (*)
                    <i class="uil uil-info-circle" data-toggle="tooltip" data-placement="right" title="Rp 15.000 / sign"></i>
                  </td>
                </tr>
              </tbody>
              
              <tfoot>
                <tr>

                  <th style="vertical-align: middle; font-size: 1.25rem">
                    <p>Harga</p>
                  </th>
                  <th>
                    <h6 class="item">Silver</h6>
                    <p class="harga">Rp7JT<br><small>per-Bulan</small></p>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </th>
                  <th>
                    <h6 class="item">Gold</h6>
                    <p class="harga">Rp10JT<br><small>per-Bulan</small></p>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </th>
                  <th class="gold">
                    <h6 class="item">Titanium</h6>
                    <p class="harga">Rp15JT<br><small>per-Bulan</small></p>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </th>
                  <th>
                    <h6 class="item">Platinum</h6>
                    <p class="harga">Rp18JT<br><small>per-Bulan</small></p>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </th>
                  <th>
                    <h6 class="item">Palladium</h6>
                    <p class="harga">Rp25JT<br><small>per-Bulan</small></p>
                    <a class="btn btn-kontak" href="<?php echo home_url(); ?>/form-siakadcloud" role="button">Hubungi Sales</a>
                  </th>
                </tr>
                <tr class="d-none d-lg-table-row">
                  <td style="background: #fff; font-size: 1.125rem; text-align: center;">
                    <p>Jumlah Mahasiswa</p>
                  </td>
                  <td>
                    < 2.000 mhs <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
                      <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,- per Mahasiswa tiap Bulannya"></i>
          </div>
          </td>
          <td>
            < 3.000 mhs <div class="alert-success">Investasi<br>±Rp4.000,- /mhs
              <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp4.000,- per Mahasiswa tiap Bulannya"></i>
      </div>
      </td>
      <td class="default" style="font-weight: bold;">
        < 5.000 mhs <div class="alert-success">Investasi<br>±Rp3.750,- /mhs
          <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp3.750,- per Mahasiswa tiap Bulannya"></i>
    </div>
    </td>
    <td>
      < 10.000 mhs <div class="alert-success">Investasi<br>±Rp2.400,- /mhs
        <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp2.400,- per Mahasiswa tiap Bulannya"></i>
  </div>
  </td>
  <td>
    < 20.000 mhs <div class="alert-success">Investasi<br>±Rp1.667,- /mhs
      <i class="uil uil-question-circle" data-toggle="tooltip" data-placement="right" title="Kampus Anda Hanya Investasi Sekitar Rp1.667,- per Mahasiswa tiap Bulannya"></i>
      </div>
  </td>
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
    <a class="btn btn-download" href="https://sevima.com/pricing-siakadcloud-2/" target="_blank" role="button">
      <i class="uil uil-file-download"></i>
      <p>Download Sebagai PDF</p>
    </a>
  </div>
  </div>
  </div>
  </div>
</section>
<!-- END PRICING NEW -->

<?php
// get_footer();
?>