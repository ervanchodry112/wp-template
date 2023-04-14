<?php //$blog_title = get_bloginfo( 'name' ); 
?>
<title><?php wp_title('|', true, 'right'); ?></title>
<!-- <title><?php //echo $blog_title 
            ?></title> -->
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?>" />
<meta expr:content='data:blog.metaDescription' property='og:description' />
<!-- <meta property="og:description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." /> -->
<meta property="og:image" content="<?php $post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                        echo $post_thumbnail[0]; ?>" />
<meta property="og:image:width" content="640" />
<meta property="og:image:height" content="360" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://sevima.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta charset="<?php bloginfo('charset'); ?>">
<meta property="fb:pages" content="121536427929291" />
<meta name="google-site-verification" content="c3jNIdvM08_y0lw9p7Ik0aACqKV5VcTkqkrKfPqG8vY" />
<meta name="yandex-verification" content="41b66e120e46b231" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta name="description" content="Sevima merupakan perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004 dengan didukung oleh tenaga ahli dan professional yang berpengalaman di bidangnya baik dari sisi teknis maupun sisi bisnis." /> -->
<meta content='sevima, sevima siakad, sistem informasi akademik, sistem informasi manajemen, perusahaan it, surabaya, pt sentra vidya utama, konsultan it, e-office, berita teknologi, teknologi informasi, cara membuat website, siakad online, PDDikti, pelaporan Neo Feeder, forlap, e-learning, blanded learning, SEO, aplikasi, software, jasa pembuatan website, aplikasi online, android, mobile, digital library, wordpress, HTML, CSS, php, progremmer, blog sevima, desain website, layout, panduan, tips, trik,' name='keywords' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/404/css/style.css?<?= md5(rand(100, 999)); ?>" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main2.css?<?= md5(rand(100, 999)); ?>" />
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

<!-- TRACKING CURSOR VISITOR -->
<!-- Hotjar Tracking Code for https://sevima.com/ -->
<!-- <script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2494997,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script> -->
<!-- -->

<!-- 
    Solve Render Blocking Resource 
    Devva Maulana 210106
    Landing Page Optimization
    -->
<link rel="preconnect" href="https://stackpath.bootstrapcdn.com" crossorigin="anonymous">
<link rel="preconnect" href="https://cdnjs.cloudflare.com">
<link rel="preconnect" href="https://unicons.iconscout.com">
<link rel="dns-prefetch" href="https://connect.facebook.net">

<link rel="preload" as="style" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preload" as="style" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<link rel="preload" as="style" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
<!-- <link rel="preload" as="style" href="<?php echo content_url(); ?>/cache/minify/37d99.css">
    <link rel="preload" as="style" href="<?php echo content_url(); ?>/cache/minify/38e6c.css">
    <link rel="preload" as="style" href="<?php echo content_url(); ?>/cache/minify/d1126.css">
    <link rel="preload" as="style" href="<?php echo content_url(); ?>/cache/minify/a27c2.css"> -->

<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
<link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
<!-- <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="<?php echo content_url(); ?>/cache/minify/37d99.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="<?php echo content_url(); ?>/cache/minify/38e6c.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="<?php echo content_url(); ?>/cache/minify/d1126.css">
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="<?php echo content_url(); ?>/cache/minify/a27c2.css"> -->

<noscript>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css">
    <!-- <link rel="stylesheet" href="<?php echo content_url(); ?>/cache/minify/37d99.css">
        <link rel="stylesheet" href="<?php echo content_url(); ?>/cache/minify/38e6c.css">
        <link rel="stylesheet" href="<?php echo content_url(); ?>/cache/minify/d1126.css">
        <link rel="stylesheet" href="<?php echo content_url(); ?>/cache/minify/a27c2.css"> -->
</noscript>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css?<?= md5(rand(100, 999)); ?>">
<script src="https://use.fontawesome.com/6ae1c35383.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); 
                                                    ?>/font-awesome/css/font-awesome.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); 
                                                    ?>/css/animate.min.css"> -->
<!-- <script src="<?php //echo get_template_directory_uri(); 
                    ?>/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
<script async src="<?php echo get_template_directory_uri(); ?>/js/wow.js" type="text/javascript"></script>
<!-- <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.7/css/unicons.css"> -->
<!-- Owl Stylesheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css?<?= md5(rand(100, 999)); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css?<?= md5(rand(100, 999)); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/modal-video.min.css?<?= md5(rand(100, 999)); ?>">

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css?<?= md5(rand(100, 999)); ?>">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- javascript -->
<!-- <script src="<?php echo get_template_directory_uri(); ?>/vendors/jquery.min.js"></script> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6HHP5J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<body>
    <br>

    <nav class="navbar navbar-expand-lg navbar-light" id="second-nav">
        <div class="container">
            <a class="navbar-brand" href="http://help.sevima.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sevimacare.png" class="img-fluid logo-nav" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Topik Bantuan</a>
                        <div class="dropdown-menu" style="top: 2.1rem;">
                            <a class="dropdown-item" href="http://help.sevima.com/index.php/detailfaq/#anchor1">Akademik</a>
                            <a class="dropdown-item" href="http://help.sevima.com/index.php/detailfaq/#anchor2">Pendaftaran Mahasiswa Baru</a>
                            <a class="dropdown-item" href="http://help.sevima.com/index.php/detailfaq/#anchor3">Kuliah Online</a>
                            <a class="dropdown-item" href="http://help.sevima.com/index.php/detailfaq/#anchor4">Akreditas Kampus</a>
                            <a class="dropdown-item" href="http://help.sevima.com/index.php/detailfaq/#anchor5/">Pelaporan PDDIKTI</a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="http://help.sevima.com/index.php/detailfaq">FAQ</a>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="http://support.sevima.com" target="_blank">Livechat</a>
                </li>               -->
                </ul>

                <a class="btn btn-tuliskendala" href="https://sevima.com/form-mahasiswa/" role="button">Tulis Kendala Anda</a>
            </div>
        </div>
    </nav>
    <!-- Slider -->