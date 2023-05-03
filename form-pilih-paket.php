<?php
/*
Template Name: Pilih Paket
*/
?>
<?php get_header(); ?>

<section id="form-section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-12 col-lg-6">
                <div class="title">
                    <h3> Siap Menjadi Kampus Berbasis Digital?</h3>
                    <p style="font-size: 1.25rem; line-height: 1.5; color: #000a12; opacity: 0.8;">
                        Jadwalkan demo
                        pelatihan penggunaan Sevima Platform untuk mulai mengelola seluruh kegiatan dan
                        operasional
                        kampus Anda sendiri hari ini
                    </p>
                </div>
                <hr class="dash" align="left">
                <div id="testimonial-slider" class="owl-carousel owl-theme">
                    <?php
                    query_posts(
                        array(
                            'post_type' => 'testimoni',
                            'posts_per_page' => 3,
                            'orderby' => 'date'
                        )
                    );
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            if (has_post_thumbnail()) {
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-slider');
                                $news_src = $src[0];
                            }
                            ?>
                            <div class="testimonial">
                                <p class="description">
                                    <?php the_content(); ?>
                                </p>
                                <h3 class="title">
                                    <?php echo get_field('nama'); ?>
                                </h3>
                                <span class="post">
                                    <?php the_title() ?>
                                </span>
                            </div>

                            <?php
                        endwhile;
                    endif;
                    ?>
                </div>
                <hr class="dash" align="left">
            </div> -->
            <div class="col-12 col-lg-8">
                <div class="pf-contactForm">
                    <?php echo do_shortcode('[contact-form-7 id="1841" title="Pilih Paket"]'); ?>
                </div>

            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>