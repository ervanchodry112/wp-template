<?php
/*
Template Name: Home-Test-Searchbox
*/
?>
<!DOCTYPE html>
<html>

<head>
    <?php //$blog_title = get_bloginfo( 'name' ); 
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <!-- <title><?php //echo $blog_title 
                ?></title> -->
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
    <meta expr:content='data:blog.metaDescription' property='og:description' />
    <meta property="og:description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sevima.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta property="fb:pages" content="121536427929291" />
    <meta name="google-site-verification" content="c3jNIdvM08_y0lw9p7Ik0aACqKV5VcTkqkrKfPqG8vY" />
    <meta name="yandex-verification" content="41b66e120e46b231" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
    <meta content='sevima, sevima siakad, sistem informasi akademik, sistem informasi manajemen, perusahaan it, surabaya, pt sentra vidya utama, konsultan it, e-office, berita teknologi, teknologi informasi, cara membuat website, siakad online, PDDikti, pelaporan feeder, forlap, e-learning, blanded learning, SEO, aplikasi, software, jasa pembuatan website, aplikasi online, android, mobile, digital library, wordpress, HTML, CSS, php, progremmer, blog sevima, desain website, layout, panduan, tips, trik,' name='keywords' />
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
    <!--<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/57f61c3a8bab9a1c1133399b/1aucndn4q';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>-->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <script src="https://use.fontawesome.com/6ae1c35383.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); 
                                                        ?>/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); 
                                                        ?>/css/animate.min.css"> -->
    <!-- <script src="<?php //echo get_template_directory_uri(); 
                        ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modal-video.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lg-transitions.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lg-transitions.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- javascript -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/vendors/jquery.min.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6HHP5J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="head-sevima">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left-content">
                        <div class="promo-btn">
                            <a href="<?php echo home_url(); ?>/promo/">Promo Terbaru</a>
                        </div>
                        <?php echo do_shortcode('[ivory-search id="8635" title="Default Search Form"]'); ?>
                        <!--      
                <div class="link-top">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon" style="padding:6px 6px;border: 1px solid #ced4da;border-top-left-radius: 4px;border-bottom-left-radius: 4px;border-right: none;"><i class="uil uil-search"></i></div>
                        <input type="text" class="form-control" id="NewCari" placeholder="Cari sesuatu..."
                        style="
                        border-left:none;
                        padding-left:0px;
                        ">  
                    </div>
                </div>
                </div>
                -->
                    </div>

                    <div class="right-content">
                        <div class="email">
                            <a href="mailto:support@sevima.com">support@sevima.com</a>
                        </div>
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
        </div>
    </div>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                </a>
                <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-sevima" aria-controls="navbar-sevima" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse-sevima" id="navbar-sevima">
                    <div class="container navbar-480">
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevima.png" alt="">
                        </a>
                        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbar-sevima" aria-controls="navbar-sevima" aria-expanded="true" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="navigation-res">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>">Beranda</a></li>
                                <li><a href="#" class="produk-click">Produk <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="<?php echo home_url(); ?>/testimoni/">Testimoni</a></li>
                                <li><a href="<?php echo home_url(); ?>/berita/">Berita</a></li>
                                <li><a href="#" class="produk-click-3">Karir <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="<?php echo home_url(); ?>/kontak-kami/">Kontak</a></li>
                            </ul>
                            <form>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="form-control" id="NewCari" placeholder="Ketik untuk mencari..." style="
                    padding: 20px 14px;
                    margin-top: 14px;
                    border: 1px solid #E2E7FF;
                    box-sizing: border-box;
                    box-shadow: 2px 2px 0px rgba(226, 231, 255, 0.35);
                    border-radius: 6px;
                ">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="navigation-res">
                            <ul>
                                <li class="promo-mobile"><a href="<?php echo home_url(); ?>/promo/">Promo Terbaru <i class="uil uil-angle-right"></i></a></li>
                                <li><a href="<?php echo home_url(); ?>/tentang/">Tentang Kami</a></li>
                                <li><a href="<?php echo home_url(); ?>/portofolio/">Portofolio</a></li>
                                <!--<li><a href="#">Komunitas</a></li>
                <li><a href="#">One Stop Solution</a></li>-->
                                <li><a href="mailto:support@sevima.com">support@sevima.com</a></li>
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
                                <li><a href="<?php echo home_url(); ?>/karir/">Job Vacancy</a></li>
                                <li><a href="<?php echo home_url(); ?>/internship/">Internship</a></li>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png" alt="" width="140px">
                                            <p>Solusi sistem akademik kampus.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://gofeedercloud.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png" alt="" width="140px">
                                            <p>Akademik beres, pelaporan feeder beres, akreditasi sukses.</p>
                                        </div>
                                    </a>
                                </div>
                                <!-- <div class="col-md-12">
                    <a href="https://financecloud.id/" target="_blank">
                        <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png" alt="" width="140px">
                            <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                        </div>
                    </a>
                </div> -->
                                <div class="col-md-12">
                                    <a href="http://akreditasicloud.com" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png" alt="" width="160px">
                                            <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="http://profeeder.sevima.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png" alt="" width="120px">
                                            <p>Satu kali klik, pelaporan beres</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://sevimapay.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png" alt="" width="120px">
                                            <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <h4>Mahasiswa</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://edlink.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png" alt="" width="100px">
                                            <p>Metode baru menjalankan perkuliahan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <a href="https://maukuliah.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png" alt="" width="100px">
                                            <p>Cari dan Bandingkan Informasi Kampus</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>">Beranda</a>
                        </li>
                        <li class="nav-item dropdown" style="position: static;">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Produk</a>
                            <div class="dropdown-menu w-100 dropdown-produk">
                                <div class="produk">
                                    <h3>Solusi Perguruan Tinggi</h3>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="https://siakadcloud.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png" alt="" width="140px">
                                                    <p>Solusi sistem akademik kampus.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://gofeedercloud.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png" alt="" width="140px">
                                                    <p>Akademik beres, pelaporan feeder beres, akreditasi sukses.</p>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- <div class="col-md-4">
                                    <a href="https://financecloud.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png" alt="" width="140px">
                                            <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                                        </div>
                                    </a>
                                </div> -->
                                        <div class="col-md-4">
                                            <a href="http://akreditasicloud.com" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png" alt="" width="160px">
                                                    <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="http://profeeder.sevima.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png" alt="" width="120px">
                                                    <p>Satu kali klik, pelaporan beres</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://sevimapay.com/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png" alt="" width="120px">
                                                    <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-12">
                                            <h3>Mahasiswa</h3>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://edlink.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png" alt="" width="100px">
                                                    <p>Metode baru menjalankan perkuliahan</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="https://maukuliah.id/" target="_blank">
                                                <div class="card">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png" alt="" width="100px">
                                                    <p>Cari dan Bandingkan Informasi Kampus</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>/testimoni/"></i>Testimoni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>/berita/"></i>Berita</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Karir</a>
                            <div class="dropdown-menu" style="top: 2.1rem;">
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/karir/">Job Vacancy</a>
                                <a class="dropdown-item" href="<?php echo home_url(); ?>/internship/">Internship</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url(); ?>/kontak-kami/"></i>Kontak</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-right ml-auto hide-xs">
                    <div class="icons">
                        <span class="email">via Email</span>
                        <a href="<?php echo home_url(); ?>/kontak-kami/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png" class="img-fluid gbr-icon" alt=""></a>
                    </div>

                    <div class="icons">
                        <span class="wa">chat WA</span>
                        <a href="https://api.whatsapp.com/send?phone=6282261610404&text=Saya%20ingin%20bertanya%20tentang%20layanan%20SEVIMA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" class="img-fluid gbr-icon" alt=""> </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- Slider -->

    <!-- HERO -->
    <section id="section-hero">
        <div class="cs-hero-layout cs-hero-layout-fullwidth cs-hero-right-column">
            <?php
            query_posts(array(
                'post_type' => 'post',
                'orderby' => 'date',
                'posts_per_page' => 1,
            ));
            if (have_posts()) : while (have_posts()) : the_post();
                    if (has_post_thumbnail()) {
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-slider');
                        $news_src = $src[0];
                    }
            ?>
                    <div class="background-image">
                        <img src="<?php
                                    if (has_post_thumbnail()) {
                                        echo $news_src;
                                    } else {
                                        echo " ", get_template_directory_uri(), "/img/default.png ";
                                    } ?>" class="img-fluid" alt="">
                    </div>
                    <div class="cs-hero-container">
                        <div class="cs-hero">
                            <div class="hero-title">
                                <div class="hero-konten">
                                    <?php
                                    $postcategories = get_the_category();
                                    if ($postcategories) {
                                        $output = array();
                                        foreach ($postcategories as $category) {
                                            $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                            unset($category);
                                        }
                                        echo implode(" | ", $output);
                                    }
                                    ?>
                                    <h2 class="hero-title-berita">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </h2>
                                    <ul class="post-meta">
                                        <li class="meta-author">by <span><a class="author" href="#">&nbsp
                                                    <?php the_author(); ?></a></span>
                                        </li>
                                        <li class="meta-date"><?php the_time(' d F Y', '', ''); ?></li>
                                    </ul>
                                    <p><?php the_excerpt() ?></p>
                                    <div class="navigasi d-none d-md-block">
                                        <a href="#section-tentang-v3"><img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/cursor.png" class="animated bounce" alt=""></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                endwhile;
            endif;
                    ?>
                    <div class="hero-list">
                        <div class="pinned-tittle">
                            #TRENDING
                        </div>

                        <div id="carousel-listberita" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php
                                the_post();
                                query_posts(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 4,
                                ));

                                ?>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <li data-target="#carousel-listberita" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"></li>
                                <?php $i++;
                                    endwhile;
                                endif; ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="carousel-item active">
                                    <?php
                                    the_post();
                                    query_posts(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
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
                                                        <?php
                                                        $postcategories = get_the_category();
                                                        if ($postcategories) {
                                                            $output = array();
                                                            foreach ($postcategories as $category) {
                                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                                unset($category);
                                                            }
                                                            echo implode(" | ", $output);
                                                        }
                                                        ?>
                                                        <h5 class="cs-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h5>
                                                        <ul class="post-meta">
                                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                                            </li>
                                                            <li class="meta-date"><?php the_time(' d F Y', '', ''); ?></li>
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

                                <div class="carousel-item">
                                    <?php
                                    the_post();
                                    query_posts(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'offset' => 3
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
                                                        <?php
                                                        $postcategories = get_the_category();
                                                        if ($postcategories) {
                                                            $output = array();
                                                            foreach ($postcategories as $category) {
                                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                                unset($category);
                                                            }
                                                            echo implode(" | ", $output);
                                                        }
                                                        ?>
                                                        <h5 class="cs-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h5>
                                                        <ul class="post-meta">
                                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                                            </li>
                                                            <li class="meta-date"><?php the_time(' d F Y', '', ''); ?></li>
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

                                <div class="carousel-item">
                                    <?php
                                    the_post();
                                    query_posts(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'offset' => 6
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
                                                        <?php
                                                        $postcategories = get_the_category();
                                                        if ($postcategories) {
                                                            $output = array();
                                                            foreach ($postcategories as $category) {
                                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                                unset($category);
                                                            }
                                                            echo implode(" | ", $output);
                                                        }
                                                        ?>
                                                        <h5 class="cs-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h5>
                                                        <ul class="post-meta">
                                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                                            </li>
                                                            <li class="meta-date"><?php the_time(' d F Y', '', ''); ?></li>
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

                                <div class="carousel-item">
                                    <?php
                                    the_post();
                                    query_posts(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 3,
                                        'offset' => 9
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
                                                        <?php
                                                        $postcategories = get_the_category();
                                                        if ($postcategories) {
                                                            $output = array();
                                                            foreach ($postcategories as $category) {
                                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                                unset($category);
                                                            }
                                                            echo implode(" | ", $output);
                                                        }
                                                        ?>
                                                        <h5 class="cs-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h5>
                                                        <ul class="post-meta">
                                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                                            </li>
                                                            <li class="meta-date"><?php the_time(' d F Y', '', ''); ?></li>
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
                            </div>
                        </div>
                        <div class="link-more-berita text-center">
                            <a href="https://sevima.com/berita/">Baca artikel lainnya . . .</a>
                        </div>
                    </div>
                        </div>
                    </div>
        </div>
    </section>
    <!--
<section id="tentang-kami">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-md-1">
				<div class="row">
					<div class="col-lg-5 col-12">
						<div class="tentang-kami">
							<h3 class="wow fadeInUp">Tentang Sevima</h3>
							<div class="border-red wow fadeInUp" data-wow-delay="0.1s"></div>
							<p class="wow fadeInUp" data-wow-delay="0.150s">PT Sentra Vidya Utama (SEVIMA) merupakan 
								perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004.
								SEVIMA telah berpengalam lebih dari 18 tahun dalam mengimplementasikan sistem informasi di perguruan tinggi dan telah membantu 400+ perguruan tinggi.
							</p>
							<div class="wow fadeInUp">
								<a href="<?php the_permalink(1801) ?>" title="" class="btn-selengkapnya ">Selengkapnya</a>
							</div>
							
						</div>
					</div>
					<div class="col-lg-7 col-12">
						<div class="img-tentang-kami hide-780">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pinloc.png" alt="">
						</div>
						<div class="img-hidden">
							<img src="<?php echo get_template_directory_uri(); ?>/img/pinloc.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->

    <!-- TENTANG V3 -->
    <section id="section-tentang-v3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 text-konten wow slideInLeft" data-wow-duration="1s">
                    <div class="title">
                        <h2><span class="underline--magical">Konsultan Teknologi</span> Informasi Perguruan Tinggi</h2>
                    </div>
                    <p>
                        PT Sentra Vidya Utama (SEVIMA) merupakan
                        perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004.
                        SEVIMA telah berpengalam lebih dari 18 tahun dalam mengimplementasikan sistem informasi di perguruan
                        tinggi dan telah membantu 400+ perguruan tinggi.
                    </p>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://sevima.com/tentang-sevima/">Cari tau SEVIMA</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 gambar-konten wow slideInRight" data-wow-duration="1s" data-wow-delay=".5s">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/gbr-kisah6.jpg" class="img-fluid gambar-sevima" alt="">
                    <div class="img-pattern"></div>
                </div>
            </div>
        </div>
    </section>

    <!--PRODUK-->
    <section id="section-produk-v2">
        <div class="sp-wrapper-layout">
            <div class="sp-container-produk">
                <div class="title">
                    <h2>Mengelola Kampus Jadi Lebih Mudah dengan <span class="underline--magical">Solusi dari SEVIMA</span>
                    </h2>
                </div>
                <div class="item-produk">
                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-siakad.png" alt="">
                            <h4>siAkadCloud</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Penerimaan Mahasiswa Baru</p>
                                    </li>
                                    <li>
                                        <p>Computer Based Test</p>
                                    </li>
                                    <li>
                                        <p>Tracer study</p>
                                    </li>
                                    <li>
                                        <p>Dashboard pimpinan</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://siakadcloud.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-gofeeder.png" alt="">
                            <h4>GoFeederCloud</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Integrasi SevimaPay</p>
                                    </li>
                                    <li>
                                        <p>Custom laporan</p>
                                    </li>
                                    <li>
                                        <p>Presensi online</p>
                                    </li>
                                    <li>
                                        <p>Kuesioner evaluasi dosen</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://gofeedercloud.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-edlin.png" alt="">
                            <h4>EdLink</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Video conference</p>
                                    </li>
                                    <li>
                                        <p>Kuis Online</p>
                                    </li>
                                    <li>
                                        <p>Integrasi dengan siakad</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://edlink.id/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-sevimapay.png" alt="">
                            <h4>SevimaPay</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Monitoring pembayaran mahasiswa</p>
                                    </li>
                                    <li>
                                        <p>Integrasi tokopedia</p>
                                    </li>
                                    <li>
                                        <p>Integrasi indomaret</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://sevimapay.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>



                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-akreditasi.png" alt="">
                            <h4>AkreditasiCloud</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Export excel SAPTO</p>
                                    </li>
                                    <li>
                                        <p>Tarik Data dari Feeder</p>
                                    </li>
                                    <li>
                                        <p>Data Kepegawaian</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="http://akreditasicloud.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                    <div class="card-title d-flex align-items-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-finance.png" alt="">
                        <h4>Finance Cloud</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="konten">
                            <h6>Fitur unggulan:</h6>
                            <ul>
                                <li>
                                    <p>Pencatatan Anggaran</p>
                                </li>
                                <li>
                                    <p>Laporan keuangan</p>
                                </li>
                                <li>
                                    <p>Integrasi dengan keuangan mahasiswa</p>
                                </li>
                            </ul>
                        </div>
                        <div class="button-selengkapnya">
                            <a class="btn btn-primary btn-block" href="https://financecloud.id/" role="button" target="_blank">Berlangganan</a>
                        </div>
                    </div>
                </div> -->

                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-profedeer.png" alt="">
                            <h4>ProFeeder</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Compare data & one-click process</p>
                                    </li>
                                    <li>
                                        <p>Dashboard status pelaporan</p>
                                    </li>
                                    <li>
                                        <p>Integrasi dengan siakad</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="http://profeeder.sevima.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-produk wow zoomIn" data-wow-delay=".5s">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-maukuliah.png" alt="">
                            <h4>MauKuliah</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Pencarian kampus</p>
                                    </li>
                                    <li>
                                        <p>Komparasi kampus</p>
                                    </li>
                                    <li>
                                        <p>Jurusan populer</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://maukuliah.id/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG PETA -->
    <section id="section-peta">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-6">
                    <div class="title">
                        <h2><span style=" color: #EF2427; "><b>700+</b></span> Perguruan Tinggi di Indonesia
                            <br><span class="underline--magical"> Telah Membuktikan</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp-container-peta">
            <div class="sp-row-peta">
                <div class="peta-mobile d-lg-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/peta-mobile.png" class="img-fluid" alt="">
                </div>

                <div id="image-map" class="d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/fix-peta.png" class="img-peta img-fluid" alt="Our Locations">
                    <ul>
                        <li class="button-glow" id="aceh-new">
                            <div class="content">
                                <h4>NAD </h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/135003.png" alt=""></td>
                                                <td>Politeknik Aceh Selatan</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/202037.png" alt=""></td>
                                                <td>IAIN Lhokseumawe</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="sumatra-new">
                            <div class="content">
                                <h4>Sumatera</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/013131.png" alt=""></td>
                                                <td>STIPAP - Medan</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005025.png" alt=""></td>
                                                <td>Politeknik Pertanian Negeri Payakumbuh</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/213517.png" alt=""></td>
                                                <td>STEBIS Indo Global Mandiri - Palembang</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/405007.png" alt=""></td>
                                                <td>Poltekkes Kemenkes - Palembang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="riau-new">
                            <div class="content">
                                <h4>Kep. Riau </h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/101007.png" alt=""></td>
                                                <td>Universitas Lancang Kuning - Pekanbaru</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="lampung-new">
                            <div class="content">
                                <h4>Lampung </h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/023013.png" alt=""></td>
                                                <td>STKIP PGRI Bandar Lampung</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/021035.png" alt=""></td>
                                                <td>Universitas Muhammadiyah Kotabumi</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="banten-new">
                            <div class="content">
                                <h4>Banten & DKI Jakarta</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/032022.png" alt=""></td>
                                                <td>Institut Teknologi dan Bisnis Bank Rakyat Indonesia</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/032021.png" alt=""></td>
                                                <td>Institut Teknologi Calvin</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/031001.png" alt=""></td>
                                                <td>Universitas Ibnu Chaldun</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/031009.png" alt=""></td>
                                                <td>Universitas Kristen Indonesia</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005021.png" alt=""></td>
                                                <td>Universitas Mpu Tantular</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/033068.png" alt=""></td>
                                                <td>Sekolah Tinggi Manajemen Ipmi</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/033001.png" alt=""></td>
                                                <td>Sekolah Tinggi Filsafat Driyarkara</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005020.png" alt=""></td>
                                                <td>Insititut Bisnis Nusantara - Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/034118.png" alt=""></td>
                                                <td>Akademi Televisi Indonesia - Jakarta</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/212027.png" alt=""></td>
                                                <td>Institut PTIQ - Jakarta</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="jabar-new">
                            <div class="content">
                                <h4>Jawa Barat</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/212003.png" alt=""></td>
                                                <td>IAILM Suryalaya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/043170.png" alt=""></td>
                                                <td>STIE Latifah Mubarok</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/041067.png" alt=""></td>
                                                <td>Universitas Nusa Putra - Sukabumi</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/045020.png" alt=""></td>
                                                <td>Politeknik Sukabumi</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/041052.png" alt=""></td>
                                                <td>Universitas BSI Bandung</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/383002.png" alt=""></td>
                                                <td>Sekolah Tinggi Pariwisata Bandung</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/041016.png" alt=""></td>
                                                <td>Universitas Bandung Raya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/041061.png" alt=""></td>
                                                <td>Universitas Muhammadiyah Tasikmalaya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/043014.png" alt=""></td>
                                                <td>STIA YPPT Priatim Tasikmalaya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005040.png" alt=""></td>
                                                <td>Politeknik Negeri Subang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="jateng-new">
                            <div class="content">
                                <h4>Jawa Tengah</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/063104.png" alt=""></td>
                                                <td>STIKES Mamba ul Ulum - Surakarta</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/063049.png" alt=""></td>
                                                <td>STEKOM - Semarang</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/063013.png" alt=""></td>
                                                <td>STIE Bank BPD - Semarang</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/434009.png" alt=""></td>
                                                <td>Akademi Komunitas Industri Tekstil dan Produk Tekstil Surakarta</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/063072.png" alt=""></td>
                                                <td>STIKes Muhammadiyah Klaten</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/063025.png" alt=""></td>
                                                <td>STIE Semarang</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="jatim-new">
                            <div class="content">
                                <h4>Jawa Timur</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/074080.png" alt=""></td>
                                                <td>Akper Pemkab Ngawi</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/071006.png" alt=""></td>
                                                <td>Universitas Merdeka Surabaya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/073178.png" alt=""></td>
                                                <td>STIKes Panti Waluya Malang</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/073049.png" alt=""></td>
                                                <td>STKIP PGRI Bangkalan</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/072022.png" alt=""></td>
                                                <td>Institut Ilmu Kesehatan STRADA Indonesia - Kediri</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/071026.png" alt=""></td>
                                                <td>Universitas Katolik Widya Karya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/071041.png" alt=""></td>
                                                <td>Universitas Tulungagung</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/071070.png" alt=""></td>
                                                <td>Universitas Islam Balitar</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/073137.png" alt=""></td>
                                                <td>STIKes Banyuwangi</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/071019.png" alt=""></td>
                                                <td>Universitas Katolik Darma Cendika</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="bali-new">
                            <div class="content">
                                <h4>Bali, NTB & NTT</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/084002.png" alt=""></td>
                                                <td>Akademi Pariwisata Denpasar</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="papua-new">
                            <div class="content">
                                <h4>Papua</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/143013.png" alt=""></td>
                                                <td>Sekolah Tinggi Ilmu Ekonomi Jambatan Bulan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="maluku-new">
                            <div class="content">
                                <h4>Maluku</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/202009.png" alt=""></td>
                                                <td>Institut Agama Islam Negeri Ambon</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="sulawesi-new">
                            <div class="content">
                                <h4>Sulawesi</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/202020.png" alt=""></td>
                                                <td>Institut Agama Islam Negeri Manado</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/385001.png" alt=""></td>
                                                <td>Politeknik Pariwisata Makassar</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/091041.png" alt=""></td>
                                                <td>Universitas Teknologi Sulawesi Utara</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/095011.png" alt=""></td>
                                                <td>Politeknik Kesehatan Muhammadiyah Makassar</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                        <li class="button-glow" id="kalimantan-new">
                            <div class="content">
                                <h4>Kalimantan</h4>
                                <div class="list-kampus">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005038.png" alt=""></td>
                                                <td>Politeknik Negeri Sambas</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/005041.png" alt=""></td>
                                                <td>Politeknik Negeri Ketapang</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/405023.png" alt=""></td>
                                                <td>Poltekkes Kemenkes Palangka Raya</td>
                                            </tr>
                                            <tr>
                                                <td><img src="<?php echo get_template_directory_uri(); ?>/img/Logo-pt/405021.png" alt=""></td>
                                                <td>Poltekkes Kemenkes Pontianak</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <hr>
                                <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="grid-konten-peta">
                    <div class="item-peta wow zoomIn" data-wow-delay=".5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/icon-univ.png" alt="">
                        <h3>700+</h3>
                        <p>Perguruan tinggi dan terus bertambah</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay=".75s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/icon-dosen.png" alt="">
                        <h3>26.857+ </h3>
                        <p>Dosen dan Petugas kampus dimudahkan</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay="1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/icon-mhs.png" alt="">
                        <h3>1.103.494+ </h3>
                        <p>Mahasiswa terbantu</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay="1.25s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/icon-modul.png" alt="">
                        <h3>100+</h3>
                        <p>Partnership</p>
                    </div>
                </div>

                <div class="button-selengkapnya">
                    <a class="btn btn-primary" href="https://sevima.com/portofolio/">Portofolio SEVIMA</a>
                </div>
            </div>
        </div>
    </section>

    <!--
<section id="berita-home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="row">
					<div class="col-lg-12">
						<div class="title">
							<h3>Berita Terbaru</h3>
							<p>Jangan sampai ketinggalan informasi terbaru dari kami</p>
						</div>
						<div class="border-red2"></div>
					</div>
					<div class="owl-carousel" id="owl-berita">
						<?php
                        query_posts(array(
                            'post_type' => 'post',
                            'posts_per_page' => 10
                        ));
                        if (have_posts()) : while (have_posts()) : the_post();
                                if (has_post_thumbnail()) {
                                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-news');
                                    $news_src = $src[0];
                                }
                        ?>
						<a href="<?php the_permalink(); ?>">
							<div class="card-berita">
									<img src="<?php
                                                if (has_post_thumbnail()) {
                                                    echo $news_src;
                                                } else {
                                                    echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                } ?>" alt="">
							<div class="desc">
								<h3><?php the_title(); ?></h3>
								<span><i class='uil uil-calendar-alt'></i><?php the_time(' d F Y', '', ''); ?></span>
								<p><?php the_excerpt(); ?></p>
							</div>
							</div>
						</a>
						<?php
                            endwhile;
                        endif;
                        ?>
					</div>
					<div class="col-md-12" style="margin-left: auto; margin-right: auto; text-align: center;">
						<div class="button-selengkapnya wow fadeInUp">
							<a class="btn btn-primary" href="https://sevima.com/portofolio/">Lihat Berita & Tips Menarik Lainnya</a>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->

    <!--
<section id="produk-sevima">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="produk-sevima">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="wow fadeInUp">Mengelola Kampus Tidak Pernah Semudah Ini!</h3>
							<div class="border-red2 wow fadeInUp" data-wow-delay="0.1s"></div>
							<p class="wow fadeInUp" data-wow-delay="0.150s">Dengan update teknologi terkini, SEVIMA memberikan banyak kemudahan <br>dalam pengelolaan administrasi.</p>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
							<a href="https://siakadcloud.com/" title="" target="_blank" style="text-decoration: none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/siakadcloud.png" alt="">
									</div>								
								<p>Sistem Akademik Powerfull berbasis SaaS</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
							<a href="https://sevima.com/siakad/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/siakadenterprise.png" alt="">
									</div>								
								<p>Sistem Akademik Lengkap & Terintegrasi</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
							<a href="https://gofeedercloud.com/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/gofeeder.png" alt="">
									</div>								
								<p>Sistem Akademik Mudah & Praktis</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="https://sevimapay.com/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/sevimapay.png" alt="">
									</div>								
								<p>Better Payment For Education</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="http://akreditasicloud.com/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/akreditasicloud.png" alt="">
									</div>								
								<p>Akreditasi mudah dan beres</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="https://edlink.id/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/edlink.png" alt="">
									</div>								
								<p>Mobile Apps for Education</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="https://financecloud.id/" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/financecloud.png" alt="">
									</div>								
								<p>Sistem Keuangan Khusus Perguruan Tinggi</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="http://profeeder.sevima.com" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/profeeder.png" alt="">
									</div>								
								<p>Sekali klik, Pelaporan Feeder Beres</p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay="0.150s">
							<a href="https://maukuliah.id" title="" target="_blank" style="text-decoration:none">
							<div class="info-produk">
									<div class="info-produk-image">
										<img src="img/logo-produk/maukuliah.png" alt="">
									</div>								
								<p>Cari dan Bandingkan Informasi Kampus </p>
								<div class="overlay-produk">
									<div class="text-overlay">
										Kunjungi Website <i class='uil uil-angle-right-b'></i>
									</div>
								</div>
							</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->

    <!--VIDEO-->
    <section id="section-video-v2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="title">
                        <h2>SEVIMA Mengedepankan Layanan dan Membentuk <span class="underline--magical"> "Long Term
                                Partnership"</span> dengan Para Klien.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4 testimoni-slider">
                    <div class="owl-carousel owl-theme" id="owl-testimoni-video">
                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p>Seandainya dulu saya mengerjakan akreditasi dan ada Sistem dari SEVIMA dan ITS
                                        menggunakan, itu pasti nyamanya luar biasa</p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Prof. Ir. MOSES LAKSONO SINGGIH, MSc, MRegSc, PhD, IPU</h3>
                                    <h4>Asesor BAN-PT untuk progam studi AIPT dan Ketua Pusat Jaminan Mutu ITS 2009-2013
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p>Sistem yang dikembangkan SEVIMA sesuai yang kami butuhkan, sekarang pelaporan sudah
                                        bisa online. Untuk pelayananya juga sangat bagus.</p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Sulaiman Permana</h3>
                                    <h4>Kepala DPISTI Universitas Esa Unggul Jakarta</h4>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p> Selama kami menggunakan siAkadCloud kami merasakan sangat besar manfaatnya dan
                                        kesulitan-kesulitan kami selama ini dalam kegiatan administrasi, keuangan, dan yang
                                        berhubungan dengan kemahasiswaan telah mendapatkan solusi dari siAkadCloud.</p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Ir. Larisang, M.T.,</h3>
                                    <h4>Ketua STT Ibnu Sina Batam</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 p-0 order-lg-last order-md-first wow slideInRight" data-wow-delay=".5s">
                    <div class="video-wrapper">
                        <div class="video-player">
                            <div class="video-trigger" id="video-trigger">
                                <a id="play-video" href="#">
                                    <div class="text">
                                        <div class="btn-play">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/play.png " class="img-fluid d-none d-md-block" alt="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/play-mobile.png" class="img-fluid d-md-none" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="video-inner">
                                <iframe id="video" width="521" height="293" src="https://www.youtube.com/embed/gTlzmcs_IAI?rel=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KISAH SUKSES -->
    <section id="section-kisah-sukses">
        <div class="sks-wrapper-layout">
            <div class="sks-container">

                <div class="owl-carousel artikel-portofolio" id="owl-kisah-sukses-tes">
                    <?php
                    query_posts(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'category_name' => 'success-story',
                        'posts_per_page' => 10
                    ));
                    if (have_posts()) : while (have_posts()) : the_post();
                            if (has_post_thumbnail()) {
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-news');
                                $news_src = $src[0];
                            }
                    ?>
                            <div class="item">
                                <article>
                                    <div class="card mb-3">
                                        <img src="<?php
                                                    if (has_post_thumbnail()) {
                                                        echo $news_src;
                                                    } else {
                                                        echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                    } ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <?php
                                            $postcategories = get_the_category();
                                            if ($postcategories) {
                                                $output = array();
                                                foreach ($postcategories as $category) {
                                                    $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                    unset($category);
                                                }
                                                echo implode(" | ", $output);
                                            }
                                            ?>
                                            <h5 class="cs-title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                            </h5>
                                            <ul class="post-meta">
                                                <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                                </li>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

                <div class="owl-carousel owl-theme artikel-portofolio-mobile" id="owl-kisahsukses-home">
                    <?php
                    query_posts(array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'category_name' => 'success-story',
                        'posts_per_page' => 10
                    ));
                    if (have_posts()) : while (have_posts()) : the_post();
                            if (has_post_thumbnail()) {
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-news');
                                $news_src = $src[0];
                            }
                    ?>
                            <div class="item">
                                <div class="card">
                                    <img src="<?php
                                                if (has_post_thumbnail()) {
                                                    echo $news_src;
                                                } else {
                                                    echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                } ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <?php
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach ($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                                unset($category);
                                            }
                                            echo implode(" | ", $output);
                                        }
                                        ?>
                                        <h5 class="cs-title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                        </h5>
                                        <ul class="post-meta">
                                            <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section-komunitas-v2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="title">
                        <h2><span style=" color: #EF2427; "><b>2000+</b></span> Perguruan Tinggi telah Bergabung
                            dengan <span class="underline--magical">Komunitas SEVIMA</span></h2>
                    </div>
                </div>
            </div>
            <div class="konten wow zoomIn" data-wow-delay="1s">
                <div class="kosong"></div>
                <div class="text-konten">
                    <h4>Anda punya masalah terkait proses akademik dan pelaporan PDDIKTI?</h4>
                    <p>Yuk bergabung di komunitas SEVIMA</p>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://www.facebook.com/groups/sevimagofeeder/" target="_blank"> <i class="uil uil-facebook"></i> | Gabung grup SEVIMA Community</a>
                    </div>
                </div>
            </div>
            <div class="background wow zoomIn" data-wow-delay="1s"></div>
            <div class="konten-mobile">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/gbr-komuniti-mobile.png" class="img-fluid" alt="">
                <div class="text-konten">
                    <h4>Anda punya masalah terkait proses akademik dan pelaporan PDDIKTI?</h4>
                    <p>Yuk bergabung di komunitas SEVIMA</p>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://www.facebook.com/groups/sevimagofeeder/" target="_blank"> <i class="uil uil-facebook-f"></i> | Gabung grup SEVIMA Community</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--
 <section id="perguruan-tinggi">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                <div class="row konten justify-content-center">
                    <div class="col-12 text-center">
                        <h1><span style="color: #E31E21;"><b>2000+</b></span> Perguruan Tinggi telah bergabung
                            <br>dengan komunitas SEVIMA</h1>
                        <h4>Anda punya masalah terkait proses akademik dan pelaporan PDDIKTI ?<br>yuk bergabung di
                            komunitas SEVIMA</h4>
                        <a href="https://www.facebook.com/groups/sevimagofeeder/" class="btn btn-merah my-5"> <span
                                style="border-right: 1px solid #fff; margin-right: .75rem; padding-right: .75rem;"><i
                                    class='uil uil-facebook-f'></i></span> Gabung grup SEVIMA Community</a>
                    </div>
                    <div class="col-12 text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/client.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->

    <!--
<section id="kata-mereka">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="kata-mereka">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="wow fadeInUp">Apa Kata Mereka ?</h3>
							<div class="border-red2 wow fadeInUp" data-wow-delay="0.1s"></div>
							<p class="wow fadeInUp" data-wow-delay="0.150s">SEVIMA mengedepankan layanan dan berusaha membentuk "long term partnership" dengan para klien. <br> Berikut klien dan testimoni dari mereka yang puas menggunakan produk dan layanan SEVIMA.</p>
						</div>
						<div class="col-lg-5 col-12">
							<iframe allowfullscreen="" frameborder="0" height="350px" src="https://www.youtube.com/embed/videoseries?list=PL2lzyUIyTKXLtJXxNAq-AWj3afc3yq88w" width="100%"></iframe>
						</div>
						<div class="col-lg-7 col-12">
							<div id="owl-testimoni" class="owl-carousel" >
								<?php
                                query_posts(array(
                                    'post_type' => 'testimoni',
                                    'posts_per_page' => 3,
                                    'orderby' => 'date'
                                ));
                                if (have_posts()) : while (have_posts()) : the_post();
                                        if (has_post_thumbnail()) {
                                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-slider');
                                            $news_src = $src[0];
                                        }
                                ?>
								<div class="item">
									<div class="testimoni-scroll">
										<div class="row">
											<div class="col-lg col-12">
												<img src="<?php
                                                            if (has_post_thumbnail()) {
                                                                echo $news_src;
                                                            } else {
                                                                echo " ", get_template_directory_uri(), "/img/default.png ";
                                                            } ?>" alt="">
											</div>
											<div class="col-lg-10 col-12">
												<div class="card-testimoni tri-right left-in">
													<h3><?php the_title() ?></h3>
													<span><?php echo get_field('jabatan'); ?></span>
													<p><?php the_excerpt() ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
                                    endwhile;
                                endif;
                                ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->


    <section id="section-cta-v2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 offset-lg-1 text-konten wow fadeInUp" data-wow-duration="1s">
                    <h2>Kelola kampus menuju <span class="underline--magical">"Revolutionize
                            Education"</span> bersama SEVIMA</h2>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://sevima.com/kontak-kami/">Hubungi Sales</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 gambar-konten">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/gbr-cta.png" class="gbr-cta img-fluid " alt="">
                    <div class="pattern-cta">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tes-homepage/aksen-cta.png" class="aksen-cta d-none d-md-block" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
<section id="kontak-kami">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-12 padding-0">
                <div class="maps-overlay"></div>
                <div class="maps wow fadeInLeft">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.234159166876!2d112.79237461438154!3d-7.32757637409662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fabc4f299e59%3A0x2c2f04621ff5e501!2sSEVIMA!5e0!3m2!1sid!2sid!4v1534154675996"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="kontak-kami">
                    <h3 class="wow fadeInUp" data-wow-delay="0.1s">Kontak Kami</h3>
                    <div class="border-red wow fadeInUp" data-wow-delay="0.150s"></div>
                    <p class="wow fadeInUp" data-wow-delay="0.170s">Kirim pesan anda, data dengan tanda (*) wajib diisi.
                    </p>
                   
                    <?php echo do_shortcode('[contact-form-7 id="1348" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
-->

    <?php get_footer(); ?>