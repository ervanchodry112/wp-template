<!DOCTYPE html>
<html>
<head>
     <?php //$blog_title = get_bloginfo( 'name' ); ?>
     <title><?php wp_title( '|', true, 'right' ); ?></title>
     <!-- <title><?php //echo $blog_title ?></title> -->
            <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>" />
            <meta expr:content='data:blog.metaDescription' property='og:description'/>
            <meta property="og:description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
            <meta property="og:type" content="website" />
            <meta property="og:url" content="https://sevima.com<?php echo $_SERVER['REQUEST_URI']; ?>"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta property="fb:pages" content="121536427929291" />
    <meta name="google-site-verification" content="c3jNIdvM08_y0lw9p7Ik0aACqKV5VcTkqkrKfPqG8vY" />
    <meta name="yandex-verification" content="41b66e120e46b231" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." />
    <meta content='sevima, sevima siakad, sistem informasi akademik, sistem informasi manajemen, perusahaan it, surabaya, pt sentra vidya utama, konsultan it, e-office, berita teknologi, teknologi informasi, cara membuat website, siakad online, PDDikti, pelaporan feeder, forlap, e-learning, blanded learning, SEO, aplikasi, software, jasa pembuatan website, aplikasi online, android, mobile, digital library, wordpress, HTML, CSS, php, progremmer, blog sevima, desain website, layout, panduan, tips, trik,' name='keywords'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"/>
<!-- Google Tag Manager edit by Febri 270220-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6HHP5J');</script>
<!-- End Google Tag Manager -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "http://sevima.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "http://sevima.com/search?q={search_term_string}",
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
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/css/animate.min.css"> -->
    <!-- <script src="<?php //echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modal-video.min.css">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">  
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- javascript -->
    <!-- <script src="<?php echo get_template_directory_uri(); ?>/vendors/jquery.min.js"></script> --> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6HHP5J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="head-sevima">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="left-content">
                <div class="promo-btn">
                  <a href="<?php echo home_url(); ?>/promo/">Promo Terbaru</a>
                </div>     
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
              <div class="right-content">
                  <div class="email">
                    <a href="mailto:marketing@sevima.co.id">marketing@sevima.co.id</a>
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
                <li><a href="<?php echo home_url(); ?>">Beranda <i class="uil uil-angle-right"></i></a></li>
                <li><a href="#" class="produk-click">Produk <i class="uil uil-angle-right"></i></a></li>
                <li><a href="#" class="produk-click-2">Klien Kami <i class="uil uil-angle-right"></i></a></li>   
                <li><a href="<?php echo home_url(); ?>/berita-event/">Berita</a></li>
                <li><a href="#" class="produk-click-3">Karir <i class="uil uil-angle-right"></i></a></li>             
                <li><a href="<?php echo home_url(); ?>/tentang/">Tentang Kami</a></li>
              </ul>
              <a href="<?php echo home_url(); ?>/kontak-kami/">
                <div class="btn-kontak btn-email d-flex align-items-center">
                <i class="uil uil-envelope"></i>     
                  <h4>Kontak via Email</h4>
                </div>
              </a>

              <a href="https://api.whatsapp.com/send?phone=6282261610404&text=Saya%20ingin%20bertanya%20tentang%20layanan%20SEVIMA">
                <div class="btn-kontak btn-wa d-flex align-items-center mt-2">
                  <i class='uil uil-whatsapp'></i>
                  <h4>Kontak via chat WA</h4>
                </div>
              </a>
            </div>
            <div class="navigation-res">
              <ul>
                <li class="promo-mobile"><a href="<?php echo home_url(); ?>/promo/">Promo Terbaru <i class="uil uil-angle-right"></i></a></li>                            
                <!--<li><a href="#">Komunitas</a></li>
                <li><a href="#">One Stop Solution</a></li>-->
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
                            <a href="http://siakadcloud.com/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png"
                                        class="img-fluid">
                                    <p>Solusi sistem akademik kampus.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://gofeeder.sevima.com/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png"
                                        class="img-fluid">
                                    <p>Akademik beres, pelaporan feeder beres, akreditasi sukses.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://financecloud.id/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png"
                                        class="img-fluid">
                                    <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://akreditasicloud.com" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png"
                                        class="img-fluid">
                                    <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://profeeder.sevima.com/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png"
                                        class="img-fluid">
                                    <p>Satu kali klik, pelaporan beres</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://sevimapay.com/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png"
                                        class="img-fluid">
                                    <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <h4>Mahasiswa</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="http://edlink.id/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png"
                                        class="img-fluid">
                                    <p>Metode baru menjalankan perkuliahan</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="http://maukuliah.id/" target="_blank">
                                <div class="card">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png"
                                        class="img-fluid">
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
              <li class="nav-item dropdown" style="position: static;">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Produk</a>
                    <div class="dropdown-menu w-100 dropdown-produk"> 
                        <div class="produk">
                            <h3>Solusi Perguruan Tinggi</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="http://siakadcloud.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/siakadcloud.png" class="img-fluid">
                                            <p>Solusi sistem akademik kampus.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://gofeeder.sevima.com/" target="_blank" >
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/gofeeder.png" class="img-fluid">
                                            <p>Akademik beres, pelaporan feeder beres, akreditasi sukses.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://financecloud.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/financecloud.png" class="img-fluid">
                                            <p>Keuangan Lancar, Perguruan Tinggi Berkembang.</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://akreditasicloud.com" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/akreditasicloud.png" class="img-fluid">
                                            <p>Akreditasi Mudah , Beres dan Menyenangkan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://profeeder.sevima.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/profeeder.png" class="img-fluid">
                                            <p>Satu kali klik, pelaporan beres</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://sevimapay.com/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/sevimapay.png" class="img-fluid">
                                            <p>Integrasi Pembayaran Keuangan Mahasiswa secara online </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-12">
                                    <h3>Mahasiswa</h3>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://edlink.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/edlink.png" class="img-fluid">
                                            <p>Metode baru menjalankan perkuliahan</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="http://maukuliah.id/" target="_blank">
                                        <div class="card">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-produk/maukuliah.png" class="img-fluid">
                                            <p>Cari dan Bandingkan Informasi Kampus</p>
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
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/berita-event/"></i>Berita</a>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Karir</a>
                  <div class="dropdown-menu" style="top: 2.1rem;">
                      <a class="dropdown-item" href="<?php echo home_url(); ?>/karir/">Lowongan Kerja</a>
                      <a class="dropdown-item" href="<?php echo home_url(); ?>/internship/">Magang</a>
                  </div>
              </li>         
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo home_url(); ?>/tentang/"></i>Tentang Kami</a>
              </li>
          </ul>
      </div>
      <div class="navbar-right ml-auto hide-xs">
        <div class="icons">
            <span class="email">via Email</span>
            <a href="<?php echo home_url(); ?>/kontak-kami/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png" alt=""></a>          
        </div>
        
        <div class="icons">
            <span class="wa">chat WA</span>
            <a href="https://api.whatsapp.com/send?phone=6282261610404&text=Saya%20ingin%20bertanya%20tentang%20layanan%20SEVIMA" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.png" alt="">   </a>
        </div>               
      </div>
    </nav>
  </div>
</header>
<!-- Slider -->