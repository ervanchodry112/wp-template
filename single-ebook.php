<?php get_header(); ?>

<!-- 
<div class="alert alert-success alert-ebook fade show" role="alert">
    <strong>Berhasil mengisi form.</strong> Ebook akan dikirimkan ke email Anda.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->

<main class="ebook-page">

    <section id="header-single-ebook">
        <div class="container">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post();
                        wpb_get_post_views(get_the_ID());
                        if (has_post_thumbnail()) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $news_src = $src[0];
                        }
                ?>
                        <div class="col col-12 col-sm-4 left">
                            <img class="cover-image" src="<?php
                                                            if (has_post_thumbnail()) {
                                                                $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', TRUE);
                                                                $image_title = get_the_title(get_post_thumbnail_id($post->ID));
                                                                $image_caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
                                                                echo $news_src;
                                                            } else {
                                                                echo " ", get_template_directory_uri(), "/img/default.png ";
                                                            } ?>">

                        </div>
                        <div class="col col-12 col-sm-8 right">
                            <h1 class="title-ebook"><?php the_title() ?></h1>
                            <p class="abstrak-ebook"><?php echo get_field('abstrak_ebook'); ?></p>
                            <div class="button-selengkapnya">
                                <a class="btn btn-red" href="#form-download">Download Ebook</a>
                            </div>
                        </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>

    <section id="ebook-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="content-section">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rekomendasi-ebook">
        <div class="container">
            <div class="title-section">
                <h3>Rekomendasi Ebook Lainnya</h3>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row rekomendasi-ebook">
                        <?php
                        $related = get_posts(
                            array(
                                'post_type' => 'ebook',
                                'category__in' => wp_get_post_categories($post->ID),
                                'orderby' => 'rand',
                                'numberposts'  => 3,
                                'post__not_in' => array($post->ID)
                            )
                        );
                        if ($related) {
                            foreach ($related as $post) {
                                setup_postdata($related);
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-ebook');
                                $related_src = $src[0];
                        ?>
                                <div class="card col-6 col-md-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="card-img-top" src="<?php
                                                                        if (has_post_thumbnail()) {
                                                                            echo $related_src;
                                                                        } else {
                                                                            // echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                        } ?>" alt="">
                                    </a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" target="blank">
                                            <h3 class="title-ebook"><?php the_title() ?></h3>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="link-list">
                <a href="https://sevima.com/ebook/">
                    <h4>Lihat Ebook Premium Lainnya</h4>
                </a>
            </div>
    </section>


    <!-- CTA -->
    <section id="cta-siakadcloud">
        <div class="container">
            <div class="row">
                <!-- <img id="topleft"src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/topleft.svg" alt=""> -->
                <img id="topright" src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/topright.svg" alt="">
                <img id="botright" src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/botright.svg" alt="">
                <div class="col-lg-5 left">
                    <div class="mockup">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/mockup-siakadcloud.png" alt="Mockup">
                    </div>
                </div>
                <div class="col-lg-7 right">
                    <h2>Kesulitan Mengelola Kampus?</h2>
                    <p>Dapatkan Sistem Informasi Akademik (SiakadCloud) yang dapat memudahkan Anda dalam mengelola administrasi akademik di pendidikan tinggi (Universitas, Sekolah Tinggi, Institut, Politeknik, Akademi, dll.) dengan 99% keberhasilan implementasi.</p>
                    <div class="cta-button">
                        <a href="https://siakadcloud.com/" class="btn btn-primary"><span class="d-none d-sm-block">Lebih lanjut tentang SiakadCloud</span><span class="d-sm-none">Lihat SiakadCloud</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/pages/ebook.js?20220311"></script>