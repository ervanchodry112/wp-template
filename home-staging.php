<?php
/*
Template Name: Beranda Staging
*/
?>
<?php get_header('homepage-staging'); ?>

<main id="beranda-staging">
    <!-- HERO -->
    <section id="section-hero" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/bg-hero-mobile.png')">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/stock-hero-mobile.png" alt="" class="bg-image-mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/banner-sevima.png" alt="" class="bg-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/kampus-merdeka.png" alt="" id="logo-kampus-merdeka">
            <h1 class="page-title">sevima.com<br>staging</h1>
            <h4 class="page-subtitle">Solusi Teknologi Perguruan Tinggi Termutakhir Sesuai dengan Regulasi KEMDIKBUDRISTEK</h4>
            <!-- nolink -->
            <a class="btn-sevima btn-sevima-primary" href="#section-produk">
                <p>Mulai Bertransformasi<span class="material-icons-round"> south </span></p>
            </a>
            <div class="rating">
                <div class="stars">
                    <span class="material-icons-round">grade</span>
                    <span class="material-icons-round">grade</span>
                    <span class="material-icons-round">grade</span>
                    <span class="material-icons-round">grade</span>
                    <span class="material-icons-round">grade</span>
                </div>
                <h5 class="rating-caption">
                    Dipercaya oleh <span>700+</span> Perguruan Tinggi di Seluruh Indonesia.
                </h5>
            </div>
        </div>
    </section>

    <section id="section-produk">
        <div class="container">
            <h2 class="section-title">Mulai Transformasi Digital Kampus Anda Bersama SEVIMA</h2>
            <p class="section-desc">Kini, pekerjaan para <i>stakeholder</i> perguruan tinggi menjadi lebih cepat, efektif, dan efisien dengan bantuan platform manajemen operasional akademik yang telah teruji dan dapat diandalkan.</p>
            <h4 class="owl-title">Beragam Solusi Sesuai Kebutuhan Perguruan Tinggi Anda</h4>
            <div class="item-produk-grid" id="owl-produk-mobile">
                <div class="item">
                    <div class="card-slide" id="card-siakadcloud">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/siakadcloud.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">siAkadCloud</h2>
                                <p class="product-desc">Sistem Informasi Akademik terlengkap dengan fleksibiltas role dan kedalaman fitur yang canggih.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/siakadcloud-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Penerimaan Mahasiswa Baru
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Computer Based Test
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Dashboard Pimpinan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    AkreditasiCloud
                                </p>
                            </div>
                            <a class="more-btn" href="https://siakadcloud.com/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-gofeedercloud">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/gofeedercloud.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">GoFeederCloud</h2>
                                <p class="product-desc">SIAKAD yang mengakomodasi universitas menengah kebawah untuk memudahkan manajemen kampus.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/gofeedercloud-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Integrasi SevimaPay
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Custom Laporan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Presensi Online
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    AkreditasiCloud
                                </p>
                            </div>
                            <a class="more-btn" href="https://gofeedercloud.com/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-edlink">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/edlink.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">EdLink</h2>
                                <p class="product-desc">Solusi platform pembelajaran jarak jauh dengan fitur lengkap dan terintegrasi dengan SIAKAD.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/edlink-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Video Conference
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Kuis Online
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Integrasi dengan SIAKAD
                                </p>
                            </div>
                            <a class="more-btn" href="https://edlink.id/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-sevimapay">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/sevimapay.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">SevimaPay</h2>
                                <p class="product-desc">Solusi integrasi pembayaran keuangan mahasiswa secara online tanpa ribet, aman, dan praktis.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/sevimapay-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Monitoring Pembayaran Mahasiswa
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Pembayaran Instan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Integrasi dengan SIAKAD
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Laporan Lengkap dan Akurat
                                </p>
                            </div>
                            <a class="more-btn" href="https://sevimapay.com/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-maukuliah">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/maukuliah.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">MauKuliah</h2>
                                <p class="product-desc">Membantu siswa mencari dan membandingkan informasi perguruan tinggi di seluruh Indonesia.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/maukuliah-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Pencarian Kampus
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Komparasi Kampus
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Jurusan Populer
                                </p>
                            </div>
                            <a class="more-btn" href="https://maukuliah.id/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-akreditasicloud">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/akreditasicloud.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">AkreditasiCloud</h2>
                                <p class="product-desc">Permudah persiapan akreditasi perguruan tinggi dan prodi hanya dengan tarik data.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/akreditasicloud-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Export excel SAPTO
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Tarik Data dari Neo Feeder
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Data Kepegawaian
                                </p>
                            </div>
                            <a class="more-btn" href="https://akreditasicloud.com/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-karirlink">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/karirlink.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">Karirlink</h2>
                                <p class="product-desc">Solusi bagi mahasiwa dalam mencari pekerjaan, dan perusahaan dalam menemukan kandidat terbaik.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/karirlink-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Posting Lowongan Pekerjaan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Cari dan Lamar Lowongan Pekerjaan Bagi Lulusan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Tracer Studi Alumni Kampus
                                </p>
                            </div>
                            <a class="more-btn" href="https://karirlink.id/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-profeeder">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/profeeder.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">ProFeeder</h2>
                                <p class="product-desc">Solusi mempermudah import data dan pelaporan data perguruan tinggi ke PD-DIKTI sesuai standar RISTEKDIKTI</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/profeeder-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Compare Data & One-Click Process
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Dashboard Status Pelaporan
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Integrasi dengan SIAKAD
                                </p>
                            </div>
                            <a class="more-btn" href="https://profeeder.id/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card-slide" id="card-integraoffice">
                        <div class="front">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/integraoffice.png" alt=""></img>
                            <div class="product-text">
                                <h2 class="product-name">integraOffice Persuratan</h2>
                                <p class="product-desc">Naikkan kualitas birokasi persuratan (naskah dinas) lebih efektif, cepat dan termonitor dengan baik.</p>
                            </div>
                            <span class="more-feat">
                                <p>
                                    <span>Fitur Unggulan</span>
                                    <span class="material-icons-round">keyboard_double_arrow_down</span>
                                </p>
                            </span>
                        </div>
                        <div class="back">
                            <img class="product-logo" src="<?php echo get_template_directory_uri(); ?>/img/homepage/logo-produk/integraoffice-bw.png" alt=""></img>
                            <div class="list">
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Draft Surat
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Tracking Surat & Disposisi
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Penomoran Surat Otomatis
                                </p>
                                <p><span class="material-icons-round">check_circle_outline</span>
                                    Aplikasi Mobile Android + iOS
                                </p>

                            </div>
                            <a class="more-btn" href="https://persuratan.integrasolusi.com/" target="_blank">
                                <p>
                                    Pelajari Selengkapnya <span class="material-icons-round">chevron_right</span>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <h3 class="section-subtitle">Bingung Memilih Layanan yang Cocok?</h3>
                <p class="section-desc">Mari Konsultasikan dengan Executive Consultant Kami Sekarang</p>
                <!-- nolink -->
                <a class="btn-sevima btn-sevima-primary" href="https://klikwa.net/sevima">
                    <p>Chat Untuk Konsultasi <span class="material-icons-round"> chat</span></p>
                </a>
            </div>
        </div>
    </section>

    <section id="section-testimoni-event" class="mt-0">
        <div class="wrapper">
            <div class="ornamen1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event3.png" class="event1" alt="">
            </div>
            <div class="ornamen2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event1.png" class="event2" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5 title-kolom">
                        <div class="title">
                            <h3>Konsultan Teknologi Informasi Perguruan Tinggi</h3>
                            <p>PT Sentra Vidya Utama (SEVIMA) merupakan
                                perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004.
                                SEVIMA telah berpengalam lebih dari 18 tahun dalam mengimplementasikan sistem informasi di perguruan
                                tinggi dan telah membantu 700+ perguruan tinggi.</p>
                        </div>
                        <a class="btn-sevima btn-sevima-primary" href="https://sevima.com/tentang-sevima/">
                            <p>Cari Tahu SEVIMA<span class="material-icons-round">chevron_right</span></p>
                        </a>
                    </div>
                    <div class="col-12 col-lg-7 kotak-testi">
                        <div id="inner">
                            <div class="owl-carousel owl-theme">
                                <?php
                                query_posts(array(
                                    'post_type' => 'testimoni_new',
                                    'orderby' => 'date',
                                    'posts_per_page' => 3
                                ));
                                if (have_posts()) :
                                ?>
                                    <?php while (have_posts()) : the_post();
                                        if (has_post_thumbnail()) {
                                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                            $news_src = $src[0];
                                        }
                                    ?>
                                        <div class="cederholm" id="quote-wrapper">
                                            <div class="profpic">
                                                <img src="<?php
                                                            if (has_post_thumbnail()) {
                                                                echo $news_src;
                                                            } else {
                                                                echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                            } ?>" class="img-profil" alt="...">
                                            </div>
                                            <div class="quote">
                                                <blockquote id="quote-quote"><?php the_content(); ?></blockquote>
                                                <div class="quote-desc">
                                                    <p id="quote-attrib"><?php echo get_field('nama_testimoni'); ?></p>
                                                    <span id="quote-univ"><?php the_title() ?></span>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endwhile;
                                endif;
                                ?>
                            </div>

                            <div class="owl-theme">
                                <div class="owl-controls">
                                    <div class="custom-nav owl-nav"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-testimoni-mobile">
        <div class="mask" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/mask-section-testi-mobile.png')">
            <div class="owl-carousel owl-theme" id="owl-testi-mobile">
                <?php
                query_posts(array(
                    'post_type' => 'testimoni_new',
                    'orderby' => 'date',
                    'posts_per_page' => 3
                ));
                if (have_posts()) :
                ?>
                    <?php while (have_posts()) : the_post();
                        if (has_post_thumbnail()) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $news_src = $src[0];
                        }
                    ?>
                        <div class="quote-wrapper">
                            <div class="profpic">
                                <h4 id="quotation">“</h4>
                                <img src="<?php
                                            if (has_post_thumbnail()) {
                                                echo $news_src;
                                            } else {
                                                echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                            } ?>" class="img-profil" alt="...">
                            </div>
                            <h3 class="nama-testimoni"><?php echo get_field('nama_testimoni'); ?></h3>
                            <h5 class="jabatan"><?php the_title() ?></h5>
                            <div class="quote-testimoni"><?php the_content(); ?></div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>

            <div class="btns">
                <span class="PreviousBtn" id="PreviousBtn">
                    <span class="material-icons-round">chevron_left</span>
                </span>
                <span class="NextBtn" id="NextBtn">
                    <span class="material-icons-round">chevron_right</span>
                </span>
            </div>
        </div>
    </section>

    <!-- TENTANG PETA -->
    <section id="section-peta">
        <div class="container-fluid">
            <div class="title">
                <h2><span style=" color: #EF2427; "><b>700+</b></span> Perguruan Tinggi di Indonesia Telah Membuktikan
                </h2>
            </div>
        </div>
        <div class="sp-container-peta">
            <div class="sp-row-peta">
                <div class="peta-mobile d-lg-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/peta-mobile.png" class="img-fluid" alt="">
                </div>

                <div id="image-map" class="d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fix-peta.png" class="img-peta img-fluid" alt="Our Locations">
                </div>

                <div class="grid-konten-peta-mobile">
                    <div class="frame">
                        <div class="box" id="box-1">
                            <div class="top">
                                <div class="icon">
                                    <span class="material-icons-outlined">groups</span>
                                </div>
                                <h3 class="number">26.857+</h3>
                            </div>
                            <p class="text">
                                Dosen & Petugas Kampus Dimudahkan
                            </p>
                        </div>
                        <div class="box" id="box-2">
                            <div class="top">
                                <div class="icon">
                                    <span class="material-icons-outlined">account_circle</span>
                                </div>
                                <h3 class="number">2.5 juta+</h3>
                            </div>
                            <p class="text">
                                Mahasiswa Terbantu Dalam Perkuliahan
                            </p>
                        </div>
                        <div class="box" id="box-3">
                            <div class="top">
                                <div class="icon">
                                    <span class="material-icons-outlined">handshake</span>
                                </div>
                                <h3 class="number">100+</h3>
                            </div>
                            <p class="text">
                                Partnership Terjalin
                            </p>
                        </div>
                    </div>
                </div>
                <a class="btn-sevima btn-sevima-primary" href="https://sevima.com/portofolio/">
                    <p>Portofolio SEVIMA<span class="material-icons-round">chevron_right</span></p>
                </a>
            </div>
        </div>
    </section>


    <!--VIDEO-->
    <section id="section-video-v2">
        <div class="title">
            <h3>SEVIMA Mengedepankan Layanan dan Membentuk "Long Term
                Partnership" dengan Para Klien.</h3>
        </div>
        <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
            <div class="background-video">
                <div class="row">
                    <div class="col-md-7 col-12">
                        <div class="hero-video" id="youtubeplayer">
                            <iframe title="Youtube Player" width="100%" height="360" src="" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">

                        <div class="title-list mb-4">
                            <h6>Playlist</h6>
                            <h5>Testimoni SEVIMA</h5>
                        </div>
                        <div class="list-video" style="display:flex;">
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
                                        $iframe = get_field('embed_video');
                                        $match = explode("embed/", $iframe);
                                        ?>
                                        <li youtubeid="<?php the_field('embed_video'); ?>"><?php the_title(); ?></li>
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
    </section>

    <section class="section-template" id="section-logo-partnership">
        <div class="container">
            <div class="title">
                <h2>Partner SEVIMA untuk Memberikan Pelayanan Terbaik</h2>
            </div>
            <div class="grid-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/bni.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/bri.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/telkomsel.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/indosat.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/shopee.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/tokped.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/linkaja.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/campuspedia.png" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/harukaedu.png" class="img-fluid" alt="">
            </div>
            <a class="btn-sevima btn-sevima-primary" href="https://sevima.com/partnership/">
                <p>Lihat Partnership SEVIMA<span class="material-icons-round">chevron_right</span></p>
            </a>
        </div>
    </section>
    <section class="section-template" id="section-media">
        <div class="title">
            <h2>Diliput Berbagai <span class="underline--magical">Media Massa</span></h2>
        </div>
        <div class="grid-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/kompas.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/kumparan.png" class="img-fluid" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/idx.png" class="img-fluid" alt="">
        </div>
    </section>
    <section id="section-berita-trending">
        <div class="bg">

        </div>
        <div class="container">
            <div class="hero-list">
                <div class="pinned-tittle">
                    #TRENDING
                </div>
                <div class="list-berita-trending">
                    <?php
                    the_post();
                    query_posts(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    ));

                    ?>
                    <?php if (have_posts()) : while (have_posts()) : the_post();
                            if (has_post_thumbnail()) {
                                $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', TRUE);
                                $image_title = get_the_title(get_post_thumbnail_id($post->ID));
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-slider');
                                $news_src = $src[0];
                            }
                    ?>
                            <article>
                                <div class="cs-post">
                                    <div class="cs-post-thumbnail">
                                        <h5 class="cs-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h5>
                                        <ul class="post-meta">
                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                            </li>
                                            <li class="meta-date"><?php the_time(' d M Y', '', ''); ?></li>
                                            <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time(get_the_content()); ?></li>
                                        </ul>
                                    </div>
                                    <div class="cs-post-pict">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php
                                                        if (has_post_thumbnail()) {
                                                            echo $news_src;
                                                        } else {
                                                            echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                        } ?>" alt="">
                                        </a>
                                    </div>
                                </div>
                            </article>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <a class="link-more-berita text-center" href="https://sevima.com/artikel-blog">
                    <h5>Lihat Semua Artikel</h5>
                </a>
            </div>
        </div>
    </section>

    <section class="section-template" id="section-dibalik-layar">
        <div class="container">
            <div class="title">
                <h2>Di Balik Layar <span class="underline--magical">Para SEVIMA Heroes</span></h2>
            </div>
            <p class="teks">
                Bekerja di SEVIMA sangat seru! Berjuang bersama mewujudkan mimpi besar membangun <i>good governance</i> di dunia pendidikan Indonesia
            </p>
            <div class="grid-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/baliklayar-1.jpeg" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/baliklayar-2.jpeg" class="img-fluid" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/baliklayar-3.jpeg" class="img-fluid" alt="">
            </div>
            <a class="btn-sevima btn-sevima-primary" href="https://sevima.com/karir/">
                <p>Bergabung jadi Heroes<span class="material-icons-round">chevron_right</span></p>
            </a>
        </div>
    </section>


    <section id="section-komunitas">
        <div class="container">
            <div class="title">
                <h2><span style=" color: #EF2427; ">3900+</span> Civitas Perguruan Tinggi telah Bergabung dengan Komunitas SEVIMA</h2>
            </div>
            <div class="row konten">
                <div class="img col-12 col-md-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-komuniti-mobile.png" alt="">
                </div>
                <div class="text-konten col-12 col-md-6">
                    <div class="desktop d-none d-md-block">
                        <h4>Anda punya masalah terkait proses akademik dan pelaporan PDDIKTI?</h4>
                        <p>Yuk bergabung di komunitas SEVIMA</p>
                    </div>
                    <div class="mobile d-md-none">
                        <p>Wadah untuk saling sharing berbagai permasalahan & pengalaman seputar PDDIKTI serta manajemen operasional perguruan tinggi</p>
                    </div>
                    <a class="btn-sevima btn-sevima-primary" href="https://www.facebook.com/groups/sevimagofeeder/">
                        <p>Gabung grup SEVIMA Community<span class="material-icons-round"> facebook </span></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-outline">
        <div class="container">
            <div class="outline-section">
                <h2 class="">Sistem Informasi Akademik Terlengkap dan Aman</h2>
                <p>
                    SEVIMA siAkad Cloud merupakan sistem informasi akademik online dan terintegrasi yang lengkap dan aman. Siakad online ini dapat memudahkan kegiatan atau manajemen akademik terintegrasi di perguruan tinggi, seperti pengisian KRS, KHS, Nilai, Transkrip, tugas akhir, yudisium sampai kelulusan.dan sebagainya.
                </p>
                <p>
                    siAkad Cloud juga menjadi sistem informasi akademik berbasis komputasi awan pertama di Indonesia dengan model layanan Software as a Service (SaaS). Model layanan ini memungkinkan perguruan tinggi memanfaatkan sistem tanpa harus melakukan pengembangan dan perawatan sistem serta berinvestasi data center sendiri. Sehingga Siakad ini bisa langsung digunakan oleh kampus tanpa harus menunggu lama. Untuk harga siakad berbasis cloud tentu saja lebih terjangkau serta lebih hemat.
                </p>
                <p>
                    Sistem Informasi Akademik (SIAKAD) siAkad Cloud ini sudah terintegrasi dengan modul/sistem lain seperti Sistem Informasi Kepegawaian Perguruan Tinggi untuk pelaporan SISTER, Sistem Informasi Penerimaan Mahasiswa Baru (SIM PMB), sistem keuangan mahasiswa, sistem computer based test, Pelaporan Feeder Pangkalan Data Pendidikan Tinggi (PDDIKTI), Pelaporan Education Management Information System (EMIS) dan sistem informasi lainnya yang digunakan dalam ruang lingkup perguruan tinggi.
                </p>
            </div>
            <div id="hidden">
                <div id="collapse-wrapper">
                    <div class="outline-section">
                        <h2 class="">Sistem Informasi Akademik Terlengkap dan Aman</h2>
                        <p>
                            SEVIMA siAkad Cloud merupakan sistem informasi akademik online dan terintegrasi yang lengkap dan aman. Siakad online ini dapat memudahkan kegiatan atau manajemen akademik terintegrasi di perguruan tinggi, seperti pengisian KRS, KHS, Nilai, Transkrip, tugas akhir, yudisium sampai kelulusan.dan sebagainya.
                        </p>
                        <p>
                            siAkad Cloud juga menjadi sistem informasi akademik berbasis komputasi awan pertama di Indonesia dengan model layanan Software as a Service (SaaS). Model layanan ini memungkinkan perguruan tinggi memanfaatkan sistem tanpa harus melakukan pengembangan dan perawatan sistem serta berinvestasi data center sendiri. Sehingga Siakad ini bisa langsung digunakan oleh kampus tanpa harus menunggu lama. Untuk harga siakad berbasis cloud tentu saja lebih terjangkau serta lebih hemat.
                        </p>
                        <p>
                            Sistem Informasi Akademik (SIAKAD) siAkad Cloud ini sudah terintegrasi dengan modul/sistem lain seperti Sistem Informasi Kepegawaian Perguruan Tinggi untuk pelaporan SISTER, Sistem Informasi Penerimaan Mahasiswa Baru (SIM PMB), sistem keuangan mahasiswa, sistem computer based test, Pelaporan Feeder Pangkalan Data Pendidikan Tinggi (PDDIKTI), Pelaporan Education Management Information System (EMIS) dan sistem informasi lainnya yang digunakan dalam ruang lingkup perguruan tinggi.
                        </p>
                    </div>
                    <div class="outline-section">
                        <h2 class="">Sistem Informasi Akademik Terlengkap dan Aman</h2>
                        <p>
                            SEVIMA siAkad Cloud merupakan sistem informasi akademik online dan terintegrasi yang lengkap dan aman. Siakad online ini dapat memudahkan kegiatan atau manajemen akademik terintegrasi di perguruan tinggi, seperti pengisian KRS, KHS, Nilai, Transkrip, tugas akhir, yudisium sampai kelulusan.dan sebagainya.
                        </p>
                        <p>
                            siAkad Cloud juga menjadi sistem informasi akademik berbasis komputasi awan pertama di Indonesia dengan model layanan Software as a Service (SaaS). Model layanan ini memungkinkan perguruan tinggi memanfaatkan sistem tanpa harus melakukan pengembangan dan perawatan sistem serta berinvestasi data center sendiri. Sehingga Siakad ini bisa langsung digunakan oleh kampus tanpa harus menunggu lama. Untuk harga siakad berbasis cloud tentu saja lebih terjangkau serta lebih hemat.
                        </p>
                        <p>
                            Sistem Informasi Akademik (SIAKAD) siAkad Cloud ini sudah terintegrasi dengan modul/sistem lain seperti Sistem Informasi Kepegawaian Perguruan Tinggi untuk pelaporan SISTER, Sistem Informasi Penerimaan Mahasiswa Baru (SIM PMB), sistem keuangan mahasiswa, sistem computer based test, Pelaporan Feeder Pangkalan Data Pendidikan Tinggi (PDDIKTI), Pelaporan Education Management Information System (EMIS) dan sistem informasi lainnya yang digunakan dalam ruang lingkup perguruan tinggi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <span id="read-more-button">
                    <p><span class="material-icons-round">
                            keyboard_double_arrow_down
                        </span> Lebih Lengkap </p>
                    <p style="display:none;"><span class="material-icons-round">
                            keyboard_double_arrow_up
                        </span> Sembunyikan </p>
                </span>
            </div>
        </div>
    </section>

    <section id="section-contact-mobile" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/bg-hero-mobile.png')">
        <img src="<?php echo get_template_directory_uri(); ?>/img/homepage/mobile/bg-kontak-mobile.png" alt="">
        <div class="text">

            <h2 class="section-title">
                Cari Tahu Solusi Yang Tepat Untuk Perguruan Tinggi Anda
            </h2>
            <a class="btn-sevima btn-sevima-primary" href="https://klikwa.net/sevima">
                <p>Konsultasi Sekarang<span class="material-icons-round"> chat </span></p>
            </a>
        </div>
    </section>

</main>


<?php get_footer('homepage'); ?>