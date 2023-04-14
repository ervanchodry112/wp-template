<?php
/*
Template Name: Jurusan Kuliah
*/
?>

<?php get_header(); ?>

<section class="hero-jurusan">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="hero-jurusan-text">
                <h1>Info Jurusan Kuliah & Prospek Kerjanya</h1>
                <p>Mengenal jurusan kuliah / program studi di perguruan tinggi, dari mata kuliah, prospek kerja, hingga rekomendasi universitas terbaik, serta mengetahui daftar jurusan saintek dan soshum.</p>
            </div>
            <div class="hero-jurusan-img d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/img/jurusan-model.png" />
            </div>
        </div>
    </div>
</section>
12345
<section id="section-all-berita" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6>Jurusan Kuliah</h6>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="grid-all-berita mb-4">
                    <?php 
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        query_posts( array(
							'post_type' => 'jurusan',
							'posts_per_page' => -1,
							'orderby' => 'date',
							'paged'=> $paged
							));
						    if (have_posts()) : while (have_posts()) : the_post(); 
                        if ( has_post_thumbnail() ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
                        $news_src = $src[0];
                        }
                    ?>
                    <div class="card">
                        <img class="card-img-top" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                        <div class="card-body">
                        <?php
                                $posttags = get_the_terms($post->ID, 'jurusan_kategori');    
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                    echo '<span><a class="category" href="' . get_term_link($tag->term_id) . '">' .$tag->name. '</a></span>'; 
                                    }
                                }
                        ?> 
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="title-berita"><?php the_title() ?></h5>
                            </a>
                            <ul class="post-meta">
                                <li class="meta-date"><i
                                        class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?></li>
                            </ul>
                            <p>
                                <?php the_excerpt() ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="<?php the_permalink(); ?>">Baca Selengkapnya <i
                                    class="uil uil-arrow-right"></i></a>
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

<?php get_footer(); ?>

