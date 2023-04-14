<?php
/*
Template Name: Katalog eBook
*/
?>

<?php get_header(); ?>
<main class="ebook-page">
    <section class="hero-ebook">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="hero-ebook-text">
                    <h1>Download Ebook Premium Gratis</h1>
                    <p>Sevima.com memiliki banyak ebook yang dapat Anda download secara gratis untuk melengkapi referensi dalam mengelola dan memajukan perguruan tinggi Anda. Mulai dari bacaan yang membantu dosen, operator/admin, bagian akademik hingga rektor ada di sini.</p>
                </div>
                <div class="hero-ebook-img d-none d-md-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ebook/stock-banner-ebook.png" />
                </div>
            </div>
        </div>
    </section>

    <section id="section-all-ebook" class="py-5">
        <div class="container">
            <div class="title-section">
                <h2>Kumpulan Ebook Pendidikan</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row  grid-all-ebook">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts(array(
                            'post_type' => 'ebook',
                            'posts_per_page' => -1,
                            'orderby' => 'date',
                            'paged' => $paged
                        ));
                        if (have_posts()) : while (have_posts()) : the_post();
                            if (has_post_thumbnail()) {
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-ebook');
                                $news_src = $src[0];
                            }        
                        ?>
                        <div class="card col-6 col-md-3">
                            <a href="<?php the_permalink(); ?>" target="blank">
                                <img 
                                    class="card-img-top" 
                                    src="
                                        <?php if (has_post_thumbnail()) {
                                                echo $news_src;
                                            } else {
                                                echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                        }?>
                                    "
                                    alt="...">
                            </a>
                            <div class="card-body">
                                <a href="<?php the_permalink(); ?>" target="blank">
                                    <h3 class="title-ebook"><?php the_title() ?></h3>
                                    <!-- <h5>Reading Time: <?php echo estimated_reading_time( get_the_content() ); ?></h5> -->
                                </a>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        endif;

                        ?>
                    </div>
                </div>
            </div>
            <?php sevima_pagination(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>