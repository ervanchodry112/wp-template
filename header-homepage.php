<!DOCTYPE html>
<html lang="en">

<head>
    <?php //$blog_title = get_bloginfo( 'name' ); 
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
    <meta expr:content='data:blog.metaDescription' property='og:description' />
    <meta property="og:description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sevima.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/Home.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta property="fb:pages" content="121536427929291" />
    <meta name="google-site-verification" content="c3jNIdvM08_y0lw9p7Ik0aACqKV5VcTkqkrKfPqG8vY" />
    <meta name="yandex-verification" content="41b66e120e46b231" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
    <meta content='Edutech, Edutech Institution, Edutech perguruan tinggi, Edutech kampus, digital learning, Educational Technology, learning management system, lms, sevima, sevima siakad, sistem informasi akademik, sistem informasi manajemen, perusahaan it, pt sentra vidya utama, konsultan it, teknologi informasi, siakad online, PDDikti, pelaporan Neo Feeder, forlap, e-learning, blended learning, SEO, aplikasi, software, aplikasi online, mobile, akreditasi kampus, akreditasi prodi, pin, penomoran ijazah nasional, pin eligible' name='keywords' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />

    <!-- Google Tag Manager edit by Febri 270220-->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K6HHP5J');
    </script>
    <!-- End Google Tag Manager -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "https://sevima.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://sevima.com/search?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>


    <!-- 
    Solve Render Blocking Resource 
    Devva Maulana 210106
    Landing Page Optimization
    -->
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com" crossorigin="anonymous">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://unicons.iconscout.com">

    <link rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
    <link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="preload" as="style" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">

    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">

    <noscript>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
    </noscript>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/homepage.min.css?<?= md5(rand(100, 999)); ?>">
    <script src="https://use.fontawesome.com/6ae1c35383.js"></script>
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css?<?= md5(rand(100, 999)); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css?<?= md5(rand(100, 999)); ?>">
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet" />



    <script>
        theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body style="overflow-x:hidden;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6HHP5J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="head-sevima">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-content align-items-center">
                        <div class="promo-btn">
                            <a href="<?php echo home_url(); ?>/promo/">Promo Terbaru</a>
                        </div>
                        <div style="margin-left:24px;">
                            <?php echo do_shortcode('[ivory-search id="8635" title="Default Search Form"]'); ?>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="email">
                            <a href="mailto:marketing@sevima.co.id">marketing@sevima.co.id</a>
                        </div>
                        <div class="link-sosmed">
                            <a href="https://www.facebook.com/SentraVidyaUtama/" aria-label="Facebook"><i class='uil uil-facebook-f'></i></a>
                            <a href="https://www.twitter.com/sevima_official/" aria-label="Twitter"><i class='uil uil-twitter'></i></a>
                            <a href="https://www.instagram.com/sevima_official/" aria-label="Instagram"><i class='uil uil-instagram'></i></a>
                            <a href="https://www.youtube.com/channel/UCDcvqZbhsdaDCnmUURz54uw" aria-label="Youtube"><i class='uil uil-youtube'></i></a>
                            <a href="https://www.linkedin.com/company/pt-sentra-vidya-utama" aria-label="Linkedin"><i class='uil uil-linkedin'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?php echo home_url(); ?>" aria-label="Sevima">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-sevima" aria-controls="navbar-sevima" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse-sevima" id="navbar-sevima">
                    <div class="container navbar-480">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>" aria-label="Sevima">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-sevima" aria-controls="navbar-sevima" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <div class="search-box">
                                <div style="">
                                    <?php echo do_shortcode('[ivory-search id="8635" title="Default Search Form"]'); ?>
                                </div>
                            </div>
                            <ul>
                                <li><a href="<?php echo home_url(); ?>">Beranda <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="#" class="produk-click">Produk <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="#" class="produk-click-2">Klien Kami <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="#" class="produk-click-1">Berita <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="#" class="produk-click-3">Karir <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="<?php echo home_url(); ?>/event-sevima/">Event</a></li>
                                <li><a href="<?php echo home_url(); ?>/tentang-sevima/">Tentang Kami</a></li>
                            </ul>
                            <a href="<?php echo home_url(); ?>/kontak-kami/" aria-label="Kontak">
                                <div class="btn-kontak btn-email d-flex align-items-center">
                                    <i class="uil uil-envelope"></i>
                                    <h4>Kontak Kami</h4>
                                </div>
                            </a>

                            <a href="https://wa.me/6282261610404?text=[SVM3204]%20Halo,%20saya%20ingin%20tanya%20layanan%20dan%20produk%20SEVIMA" aria-label="Kontak WA">
                                <div class="btn-kontak btn-wa d-flex align-items-center mt-2">
                                    <i class='uil uil-whatsapp'></i>
                                    <h4>Chat WA</h4>
                                </div>
                            </a>
                        </div>
                        <div class="navigation-res">
                            <ul>
                                <li class="promo-mobile"><a href="<?php echo home_url(); ?>/promo/">Promo Terbaru <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="mailto:marketing@sevima.co.id">marketing@sevima.co.id</a></li>
                            </ul>
                            <div class="link-sosmed">
                                <a href="https://www.facebook.com/SentraVidyaUtama/"><i class='uil uil-facebook-f'></i></a>
                                <a href="https://www.twitter.com/sevima_official/"><i class='uil uil-twitter'></i></a>
                                <a href="https://www.instagram.com/sevima_official/"><i class='uil uil-instagram'></i></a>
                                <a href="https://www.youtube.com/channel/UCDcvqZbhsdaDCnmUURz54uw"><i class='uil uil-youtube'></i></a>
                                <a href="https://www.linkedin.com/company/pt-sentra-vidya-utama"><i class='uil uil-linkedin'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-collapse-sevima-3" id="navbar-sevima-3">
                    <div class="container navbar-480">
                        <a href="#" class="nav-back produk-click-2"><i class='uil uil-arrow-left'></i></a>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler produk-click-2" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/portofolio/">Portofolio</a></li>
                                <li><a href="<?php echo home_url(); ?>/testimoni/">Testimoni</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar-collapse-sevima-1" id="navbar-sevima-1">
                    <div class="container navbar-480">
                        <a href="#" class="nav-back produk-click-1"><i class='uil uil-arrow-left'></i></a>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler produk-click-1" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/artikel-blog/">Artikel & Blog</a></li>
                                <li><a href="<?php echo home_url(); ?>/ebook/">Ebook</a></li>
                                <li><a href="<?php echo home_url(); ?>/jurusan/">Jurusan Kuliah</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar-collapse-sevima-5" id="navbar-sevima-5">
                    <div class="container navbar-480">
                        <a href="#" class="nav-back produk-click-3"><i class='uil uil-arrow-left'></i></a>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler produk-click-3" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/karir/">Lowongan Kerja</a></li>
                                <li><a href="<?php echo home_url(); ?>/internship/">Magang</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="navbar-collapse-sevima-2" id="navbar-sevima-2">
                    <div class="container navbar-480">
                        <a href="#" class="nav-back produk-click"><i class='uil uil-arrow-left'></i></a>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler produk-click" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <h4>Solusi Perguruan Tinggi</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://siakadcloud.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png" class="img-fluid">
                                            <p>Solusi sistem akademik kampus.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://gofeedercloud.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png" class="img-fluid">
                                            <p>Akademik beres, pelaporan Neo Feeder beres, akreditasi sukses.</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-md-12">
                                    <a href="https://siakadcloud.com/financecloud/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png"
                                                class="img-fluid">
                                            <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                                        </div>
                                    </a>
                                </div> -->
                                <div class="col-md-12">
                                    <a href="https://siakadcloud.com/akreditasicloud/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png" class="img-fluid">
                                            <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://profeeder.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png" class="img-fluid">
                                            <p>Satu kali klik, pelaporan beres</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://sevimapay.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png" class="img-fluid">
                                            <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://karirlink.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/karirlink-logo.png" class="img-fluid">
                                            <p>Cara mudah dan cepat untuk dapatkan pekerjaan pertamamu</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://persuratan.integrasolusi.com//" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/Persuratan Logo-09.png" class="img-fluid">
                                            <p>Sistem persuratan online yang membantu proses surat masuk, keluar, disposisi dan informasi agar lebih mudah dan cepat </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <h4>Mahasiswa</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://edlink.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png" class="img-fluid">
                                            <p>Metode baru menjalankan perkuliahan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://maukuliah.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png" class="img-fluid">
                                            <p>Cari dan bandingkan informasi kampus</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item dropdown" style="position: static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Produk</a>
                            <div class="dropdown-menu w-100 dropdown-produk">
                                <div class="produk">
                                    <h3>Solusi Perguruan Tinggi</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="https://siakadcloud.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png" class="img-fluid">
                                                    <p>Solusi sistem akademik kampus.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://gofeedercloud.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png" class="img-fluid">
                                                    <p>Akademik beres, pelaporan Neo Feeder beres, akreditasi sukses.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- <div class="col-md-4">
                                            <a href="https://siakadcloud.com/financecloud/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png"
                                                            class="img-fluid">
                                                    <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                                                </div>
                                            </a>
                                        </div> -->
                                        <div class="col-md-4">
                                            <a href="https://siakadcloud.com/akreditasicloud/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png" class="img-fluid">
                                                    <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://profeeder.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png" class="img-fluid">
                                                    <p>Satu kali klik, pelaporan beres</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://sevimapay.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png" class="img-fluid">
                                                    <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://karirlink.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/karirlink-logo.png" class="img-fluid">
                                                    <p>Cara mudah dan cepat untuk dapatkan pekerjaan pertamamu</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://persuratan.integrasolusi.com//" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/Persuratan Logo-09.png" class="img-fluid">
                                                    <p>Sistem persuratan online yang membantu proses surat masuk, keluar, disposisi dan informasi agar lebih mudah dan cepat </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Mahasiswa</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://edlink.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png" class="img-fluid">
                                                    <p>Metode baru menjalankan perkuliahan</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://maukuliah.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png" class="img-fluid">
                                                    <p>Cari dan bandingkan informasi kampus</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Klien Kami</a>
                            <div class="dropdown-menu" style="top: 2.1rem;">
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/portofolio/">Portofolio</a>
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/testimoni/">Testimoni</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Berita</a>
                            <div class="dropdown-menu" style="top: 2.1rem;">
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/artikel-blog/">Artikel & Blog</a>
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/ebook/">Ebook</a>
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/jurusan/">Jurusan Kuliah</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Karir</a>
                            <div class="dropdown-menu" style="top: 2.1rem;">
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/karir/">Lowongan Kerja</a>
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/internship/">Magang</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>/event-sevima/"></i>Event</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>/tentang-sevima/"></i>Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right ml-auto hide-xs">
                    <div class="icons">
                        <span class="email">Kontak Kami</span>
                        <a href="<?php echo home_url(); ?>/kontak-kami/" target="_blank" aria-label="Kontak"> <img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png" class="img-fluid gbr-icon" alt=""></a>
                    </div>

                    <div class="icons">
                        <span class="wa">Chat WA</span>
                        <a href="https://wa.me/6282261610404?text=[SVM3204]%20Halo,%20saya%20ingin%20tanya%20layanan%20dan%20produk%20SEVIMA" target="_blank" aria-label="Kontak WA"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" class="img-fluid gbr-icon" alt=""> </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Slider -->