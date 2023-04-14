<?php
/*
Template Name: Beranda old
*/
?>
<?php get_header('homepage-draft'); ?>

<main id="beranda-live">

    <!-- HERO -->
    <section id="section-hero">
        <div class="cs-hero-layout cs-hero-layout-fullwidth cs-hero-right-column">
            <?php
            query_posts(array(
                'post_type' => 'post',
                'orderby' => 'date',
                // 'category_name' => 'kompetisi-menulis',
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
                                    <h1 class="hero-title-berita">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title() ?>
                                        </a>
                                    </h1>
                                    <ul class="post-meta">
                                        <li class="meta-author">by <span><a class="author" href="#">&nbsp
                                                    <?php the_author(); ?></a></span>
                                        </li>
                                        <li class="meta-date"><?php the_time(' d M Y', '', ''); ?></li>
                                        <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time(get_the_content()); ?></li>
                                    </ul>
                                    <p><?php the_excerpt() ?></p>
                                    <div class="navigasi d-none d-md-block">
                                        <a href="#section-testimoni-event"><img src="<?php echo get_template_directory_uri(); ?>/img/cursor.png" class="animated bounce" alt=""></a>
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
                            <!--<ol class="carousel-indicators">
                                <?php
                                /* the_post();
                                        query_posts( array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 4,                                    
                                        ));*/

                                ?>
                                <?php /*if (have_posts()) : while (have_posts()) : the_post(); */ ?>
                                <li data-target="#carousel-listberita" data-slide-to="<?php /*echo $i;*/ ?>"
                                    class="<?php /*if($i == 0) echo 'active'; */ ?>"></li>
                                <?php /*$i++; endwhile; endif;*/ ?>
                            </ol>-->

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
                            </div>
                        </div>
                        <div class="link-more-berita text-center">
                            <a href="https://sevima.com/artikel-blog">Baca artikel lainnya . . .</a>
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
    <!-- <section id="section-tentang-v3">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-kisah6.jpg"
                        class="img-fluid gambar-sevima" alt="">
                    <div class="img-pattern"></div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="section-testimoni-event" class="mt-0" style="background: none; background-color: #F1F3FA;">
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
                        <h1><span class="underline--magical">Konsultan Teknologi</span> Informasi Perguruan Tinggi</h1>
                        <p>PT Sentra Vidya Utama (SEVIMA) merupakan
                            perusahaan konsultan dan pengembang teknologi informasi yang didirikan pada tahun 2004.
                            SEVIMA telah berpengalam lebih dari 18 tahun dalam mengimplementasikan sistem informasi di perguruan
                            tinggi dan telah membantu 700+ perguruan tinggi.</p>
                    </div>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://sevima.com/tentang-sevima/">Cari Tahu SEVIMA</a>
                    </div>
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
    </section>

    <!--PRODUK-->
    <section id="section-produk-v2" class="section-produk">
        <div class="sp-wrapper-layout">
            <div class="sp-container-produk">
                <div class="title">
                    <h2>Mengelola Kampus Jadi Lebih Mudah dengan <span class="underline--magical">Solusi dari SEVIMA</span>
                    </h2>
                </div>
                <div class="item-produk">
                    <div class="card-produk">
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

                    <div class="card-produk">
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

                    <div class="card-produk">
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

                    <div class="card-produk">
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

                    <div class="card-produk">
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
                                        <p>Tarik Data dari Neo Feeder</p>
                                    </li>
                                    <li>
                                        <p>Data Kepegawaian</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://akreditasicloud.com/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card-produk">
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

                    <div class="card-produk">
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
                                <a class="btn btn-primary btn-block" href="https://profeeder.id/" role="button" target="_blank">Berlangganan</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-produk">
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
                                <a class="btn btn-primary btn-block" href="https://maukuliah.id/" role="button" target="_blank">Buka Website</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-produk">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon-karirlink.png" alt="">
                            <h4>Karirlink</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Posting lowongan pekerjaan</p>
                                    </li>
                                    <li>
                                        <p>Cari dan lamar lowongan pekerjaan bagi lulusan</p>
                                    </li>
                                    <li>
                                        <p>Tracer Studi alumni Kampus</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://karirlink.id/" role="button" target="_blank">Unduh Aplikasi</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-produk">
                        <div class="card-title d-flex align-items-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/integraOffice-Cloud.png" alt="">
                            <h4>integraOffice Cloud</h4>
                        </div>
                        <hr>
                        <div class="card-body">
                            <div class="konten">
                                <h6>Fitur unggulan:</h6>
                                <ul>
                                    <li>
                                        <p>Notifikasi surat di Whatsapp</p>
                                    </li>
                                    <li>
                                        <p>Tracking Surat & disposisi</p>
                                    </li>
                                    <li>
                                        <p>Penomoran surat otomatis</p>
                                    </li>
                                    <li>
                                        <p>Aplikasi mobile Android</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="button-selengkapnya">
                                <a class="btn btn-primary btn-block" href="https://persuratan.integrasolusi.com//" role="button" target="_blank">Berlangganan</a>
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/peta-mobile.png" class="img-fluid" alt="">
                </div>

                <div id="image-map" class="d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/fix-peta.png" class="img-peta img-fluid" alt="Our Locations">
                    <!--<ul>
                            <li class="button-glow" id="aceh-new">
                                <div class="content">
                                    <h4>NAD </h4>
                                    <div class="list-kampus">
                                        <table>
                                            <tbody>
                                                <tr>                                                
                                                    <td>Politeknik Aceh Selatan</td>
                                                </tr>  
                                                <tr>                                                
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
                                                    <td>STIPAP - Medan</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Politeknik Pertanian Negeri Payakumbuh</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>STEBIS Indo Global Mandiri - Palembang</td>
                                                </tr>    
                                                <tr>                                                
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
                                                    <td>STKIP PGRI Bandar Lampung</td>
                                                </tr>  
                                                <tr>                                                
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
                                                    <td>Institut Teknologi dan Bisnis Bank Rakyat Indonesia</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Institut Teknologi Calvin</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Universitas Ibnu Chaldun</td>
                                                </tr>
                                                <tr>                                                
                                                    <td>Universitas Kristen Indonesia</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Universitas Mpu Tantular</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Sekolah Tinggi Manajemen Ipmi</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Sekolah Tinggi Filsafat Driyarkara</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Insititut Bisnis Nusantara - Jakarta</td>
                                                </tr>     
                                                <tr>                                                
                                                    <td>Akademi Televisi Indonesia - Jakarta</td>
                                                </tr> 
                                                <tr>                                                
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
                                                    <td>IAILM Suryalaya</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>STIE Latifah Mubarok</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Universitas Nusa Putra - Sukabumi</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Politeknik Sukabumi</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Universitas BSI Bandung</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Sekolah Tinggi Pariwisata Bandung</td>
                                                </tr>
                                                <tr>                                                
                                                    <td>Universitas Bandung Raya</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Universitas Muhammadiyah Tasikmalaya</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>STIA YPPT Priatim Tasikmalaya</td>
                                                </tr>   
                                                <tr>                                                
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
                                                    <td>STIKES Mamba ul Ulum - Surakarta</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>STEKOM - Semarang</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>STIE Bank BPD - Semarang</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Akademi Komunitas Industri Tekstil dan Produk Tekstil Surakarta</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>STIKes Muhammadiyah Klaten</td>
                                                </tr> 
                                                <tr>                                                
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
                                                    <td>Akper Pemkab Ngawi</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Universitas Merdeka Surabaya</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>STIKes Panti Waluya Malang</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>STKIP PGRI Bangkalan</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Institut Ilmu Kesehatan STRADA Indonesia - Kediri</td>
                                                </tr> 
                                                <tr>                                                
                                                    <td>Universitas Katolik Widya Karya</td>
                                                </tr>
                                                <tr>                                                
                                                    <td>Universitas Tulungagung</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Universitas Islam Balitar</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>STIKes Banyuwangi</td>
                                                </tr>   
                                                <tr>                                                
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
                                                    <td>Institut Agama Islam Negeri Manado</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Politeknik Pariwisata Makassar</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Universitas Teknologi Sulawesi Utara</td>
                                                </tr>  
                                                <tr>                                                
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
                                                    <td>Politeknik Negeri Sambas</td>
                                                </tr>   
                                                <tr>                                                
                                                    <td>Politeknik Negeri Ketapang</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Poltekkes Kemenkes Palangka Raya</td>
                                                </tr>  
                                                <tr>                                                
                                                    <td>Poltekkes Kemenkes Pontianak</td>
                                                </tr>                                                                                
                                            </tbody>
                                        </table>                                                                    
                                    </div> 
                                    <hr>
                                    <a href="https://sevima.com/portofolio/#klien-kami" class="lihat-mitra">Lihat mitra lainnya</a> 
                                </div>
                            </li>                         
                        </ul>-->
                </div>

                <div class="grid-konten-peta">
                    <div class="row">
                        <div class="col-6 col-lg">
                            <div class="item-peta">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-univ.png" alt="">
                                <h3>700+</h3>
                                <p>Perguruan tinggi dan terus bertambah</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg">
                            <div class="item-peta">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-dosen.png" alt="">
                                <h3>26.857+ </h3>
                                <p>Dosen dan Petugas kampus dimudahkan</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg">
                            <div class="item-peta">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-mhs.png" alt="">
                                <h3>1.103.494+ </h3>
                                <p>Mahasiswa terbantu</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg">
                            <div class="item-peta">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-modul.png" alt="">
                                <h3>100+</h3>
                                <p>Partnership</p>
                            </div>
                        </div>
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
                                    <p>Sekali klik, Pelaporan Neo Feeder Beres</p>
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
            <!-- <div class="row">
                <div class="col-12 col-lg-4 testimoni-slider">
                    <div class="owl-carousel owl-theme" id="owl-testimoni-video">
                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p>
                                        Adanya pandemi Covid-19 menuntut semua harus serba online, akhrinya IBN dengan cepat mempelajari e-learning menggunakan SEVIMA EdLink sehingga perkuliahan tetap bisa dilaksanakan. Tim SEVIMA EdLink juga selalu siap membantu dosen dan mahasiswa yang mengalami kesulitan.
                                    </p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Dr. M.F. Christiningrum, Ak, CA</h3>
                                    <h4>Rektor Institut Bisnis Nusantara
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p>Proses pelaporan ini kami lakukan dengan membuat SOP mengenai pelaporan PDDIKTI. Tidak hanya itu saja, kami juga membuat timeline yang jelas dan dibantu dengan aplikasi dari SEVIMA yaitu ProFeeder.</p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Ir. Agus Gunaryo</h3>
                                    <h4>Ketua Satgas PDDIKTI ITS, Kepala Biro Administrasi Pembelajaran dan Kesejahteraan Mahasiswa</h4>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="card-body">
                                <blockquote>
                                    <p> Sebelumnya kampus menggunakan sistem manual sehingga banyak delay dalam proses kegiatan akademik. Setelah menggunakan siAkadCloud, validitas data dari awal sampai akhir sinkron semua, tidak ada kendala. Dan dari segi pelayanan lebih cepat ke semua stakeholder yaitu mahasiswa dan dosen.</p>
                                </blockquote>
                            </div>
                            <div class="data-diri">
                                <div class="info">
                                    <h3>Abdurrahman, S.Kom</h3>
                                    <h4>Kasubag Administrasi Akademik Direktorat IAIN Ternate</h4>
                                </div>
                            </div>
                        </div>
                    </div>                
                    
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://sevima.com/testimoni/">Testimoni SEVIMA</a>
                    </div>

                </div>
                <div class="col-12 col-lg-8 p-0 order-lg-last order-md-first wow slideInRight" data-wow-delay=".5s">
                    <div class="video-wrapper">
                        <div class="video-player">
                            <div class="video-trigger" id="video-trigger">
                                <a id="play-video" href="#">
                                    <div class="text">
                                        <div class="btn-play">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/play.png " class="img-fluid btn-play-home d-none d-md-block"
                                                alt="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-mobile.png" class="img-fluid d-md-none" alt="">
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="video-inner">
                                <iframe id="video" width="521" height="293"
                                    src="https://www.youtube.com/embed/gTlzmcs_IAI?rel=0" frameborder="0"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
                <div class="background-video">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <div class="hero-video" id="youtubeplayer">
                                <iframe width="100%" height="360" src="" frameborder="0" allowfullscreen></iframe>
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
                        <h2><span style=" color: #EF2427; "><b>3800+</b></span> Civitas Perguruan Tinggi telah Bergabung
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
                <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-komuniti-mobile.png" class="img-fluid" alt="">
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

    <section id="section-logo-partnership">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        <h2><span class="underline--magical">Partner SEVIMA</span> untuk Memberikan Pelayanan Terbaik</h2>
                    </div>
                    <div class="grid-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/bni.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/bri.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/telkomsel.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/indosat.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/shopee.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/tokped.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/linkaja.png" class="img-fluid" style="width: 75px;" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/campuspedia.png" class="img-fluid" alt="">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/partnership/harukaedu.png" class="img-fluid" alt="">
                    </div>

                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="https://sevima.com/partnership/">Lihat Partnership SEVIMA</a>
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
    <section id="section-event-berita">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="title">
                        <h2>Berbagai Kabar SEVIMA dalam <br /><span class="underline--magical">Liputan Media</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="owl-event-media">
                        <?php
                        query_posts(array(
                            'post_type' => 'post',
                            'orderby' => 'date',
                            'category_name' => 'liputan-media',
                            'posts_per_page' => 4
                        ));
                        if (have_posts()) : while (have_posts()) : the_post();
                                if (has_post_thumbnail()) {
                                    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-news');
                                    $news_src = $src[0];
                                }
                        ?>
                                <div class="item">
                                    <div class="card">
                                        <img class="card-img-top" src="<?php
                                                                        if (has_post_thumbnail()) {
                                                                            echo $news_src;
                                                                        } else {
                                                                            echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                                        } ?>" alt="...">
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
                                            <a href="<?php the_permalink(); ?>" target="_blank">
                                                <h5 class="title-berita"><?php the_title() ?></h5>
                                            </a>
                                            <ul class="post-meta">
                                                <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                                <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time(get_the_content()); ?></li>
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
        </div>
    </section>

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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-cta.png" class="gbr-cta img-fluid " alt="">
                    <div class="pattern-cta">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/aksen-cta.png" class="aksen-cta d-none d-md-block" alt="">
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

</main>


<?php get_footer(); ?>