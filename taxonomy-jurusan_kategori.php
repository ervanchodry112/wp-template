<?php get_header(); ?>

<section class="hero-jurusan">
    <div class="container">
        <div class="d-flex justify-content-center align-items-center">
            <div class="hero-jurusan-text">
                <h1>Kategori Jurusan "<?php single_cat_title(); ?>"</h1>
                <p><a href="<?php echo home_url(); ?>/jurusan">Jurusan Kuliah</a> / <?php single_cat_title(); ?></p>
            </div>
            <div class="hero-jurusan-img d-none d-md-block">
                <img src="<?php echo get_template_directory_uri(); ?>/img/jurusan-model.png" />
            </div>
        </div>
    </div>
</section>

<section id="section-all-berita" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6><?php single_cat_title(); ?></h6>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-12">
                <div class="grid-all-berita mb-4">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
                        $news_src = null;
                        if ( has_post_thumbnail() ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
                        $news_src = $src[0];
                     } ?>

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
                                    echo '<span><a class="category" href="#">' .$tag->name. '</a></span>'; 
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
                    else : echo "<h5>Tidak Ada Data Ditemukan</h5>";
                    endif;
                    
                    ?>
                </div>
            </div>
        </div>
        <?php sevima_pagination(); ?>
    </div>
</section>

<?php get_footer(); ?>

