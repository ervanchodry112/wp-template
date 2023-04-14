<?php
/*
Template Name: Berita & Event Staging
*/
?>
<?php get_header(); ?>
<section id="section-berita-terbaru">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-section">
                    <h6>Update Terbaru</h6>
                    <a href="https://sevima.com/berita/">Lihat semua <i class="uil uil-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="grid-card-beritaterbaru">
                   

                    
                    <?php 
                        query_posts( array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'posts_per_page' => 4,
                        'offset' => 1
                        ));
                        if (have_posts()) : while (have_posts()) : the_post(); 
                        if ( has_post_thumbnail() ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-slider');
                        $news_src = $src[0];
                        }
                    ?>
                    <div class="konten">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <img class="card-img-top" src="<?php
                                    if ( has_post_thumbnail() ) {
                                    echo $news_src;
                                    }  else {
                                    echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                            }?>" alt="">
                                <div class="card-body">
                                    <?php
                                            $postcategories = get_the_category();
                                            if ($postcategories) {
                                                $output = array();
                                                foreach($postcategories as $category) {
                                                    $output[] = '<span><a class="category" href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                    unset($category);
                                                }
                                                echo implode(" | ", $output);
                                            }
                                        ?>

                                    <h5 class="title-berita"><a
                                            href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>

                                    <ul class="post-meta">
                                        <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                        <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>

<?php 
                        query_posts( array(
                        'post_type' => 'post',
                        'orderby' => 'date',
                        'posts_per_page' => 1                        
                        ));
                        if (have_posts()) : while (have_posts()) : the_post(); 
                        if ( has_post_thumbnail() ) {
                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-slider');
                        $news_src = $src[0];
                        }
                    ?>
                    <div class="utama">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <img class="card-img-top" src="<?php
                                    if ( has_post_thumbnail() ) {
                                    echo $news_src;
                                    }  else {
                                    echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                            }?>" alt="">
                                <div class="card-body">
                                    <?php
                                            $postcategories = get_the_category();
                                            if ($postcategories) {
                                                $output = array();
                                                foreach($postcategories as $category) {
                                                    $output[] = '<span><a class="category" href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                    unset($category);
                                                }
                                                echo implode(" | ", $output);
                                            }
                                        ?>

                                    <h5 class="title-berita"><a
                                            href="<?php the_permalink(); ?>"><?php the_title() ?></a> </h5>

                                    <ul class="post-meta">
                                        <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                        <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
                                    </ul>
                                    <p>
                                        <?php the_excerpt() ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more">Baca Selengkapnya <i
                                            class="uil uil-arrow-right"></i></a>
                                </div>
                            </div>
                        </a>
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

<section id="section-kisah-sukses">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="title-section">
                    <h6>Kisah Sukses</h6>
                    <a href="https://sevima.com/category/success-story/">Lihat semua <i
                            class="uil uil-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">

            </div>
            <div class="owl-carousel artikel-portofolio" id="owl-kisah-sukses-tes">
                <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'success-story',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                <div class="item">
                    <article>
                        <div class="card mb-3">
                            <img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <?php
                                                    $postcategories = get_the_category();
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                            unset($category);
                                                        }
                                                        echo implode(" | ", $output);
                                                    }
                                                ?>
                                <h5 class="cs-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                </h5>
                                <ul class="post-meta">
                                    <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                    <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'success-story',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                <div class="item">
                    <div class="card">
                        <img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <?php
                                                    $postcategories = get_the_category();
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                            unset($category);
                                                        }
                                                        echo implode(" | ", $output);
                                                    }
                                                ?>
                            <h5 class="cs-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h5>
                            <ul class="post-meta">
                                <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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

<section id="section-dunia-kampus">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="title-section">
                    <h6>Dunia Kampus</h6>
                    <a href="https://sevima.com/category/berita/dunia-kampus/">Lihat semua artikel <i
                            class="uil uil-angle-right"></i></a>
                </div>
                <div class="content-section">
                    <?php 
                                query_posts( array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'category_name' => 'dunia-kampus',
                                'posts_per_page' => 4
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
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                unset($category);
                                            }
                                            echo implode(" | ", $output);
                                        }
                                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="title-berita"><?php the_title() ?></h5>
                            </a>
                            <ul class="post-meta">
                                <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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
            <div class="col-12 col-lg-4">
                <div class="sidebar-item">
                    <div class="make-me-sticky">
                        <div class="title-section">
                            <h6>Tips & Trik</h6>
                        </div>

                        <div class="list-campuspedia">
                            <?php 
                                query_posts( array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'category_name' => 'tips-trik',
                                'posts_per_page' => 3
                                ));
                                if (have_posts()) : while (have_posts()) : the_post(); 
                                if ( has_post_thumbnail() ) {
                                $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
                                $news_src = $src[0];
                                }
                            ?>
                            <div class="card-list d-flex align-item-start">
                                <img class="img-fluid gbr-list" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                                <div class="title-campuspedia">
                                    <?php
                                            $postcategories = get_the_category();
                                            if ($postcategories) {
                                                $output = array();
                                                foreach($postcategories as $category) {
                                                    $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                    unset($category);
                                                }
                                                echo implode(" | ", $output);
                                            }
                                        ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <h5 class="title-berita"><?php the_title() ?></h5>
                                    </a>
                                    <ul class="post-meta">
                                        <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                        <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php
                                endwhile;
                                endif;
                            ?>
                        </div>

                        <div class="cta-all pt-3">
                            <a href="https://sevima.com/category/berita/tips-trik/">Lihat semua artikel <i
                                    class="uil uil-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-event-berita">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6>Event Terbaru</h6>
                    <a href="https://sevima.com/category/event/">Lihat semua event <i
                            class="uil uil-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="owl-event-berita">
                    <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'event',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                            <div class="card-body">
                                <?php
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                unset($category);
                                            }
                                            echo implode(" | ", $output);
                                        }
                                    ?>
                                <a href="<?php the_permalink(); ?>">
                                    <h5 class="title-berita"><?php the_title() ?></h5>
                                </a>
                                <ul class="post-meta">
                                    <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?></li>
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

<section id="section-all-berita" class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6>Semua Berita </h6>
                    <a href="https://sevima.com/berita/">Lihat semua berita <i class="uil uil-angle-right"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="grid-all-berita mb-4">
                    <?php 
                                query_posts( array(
                                'post_type' => 'post',
                                'orderby' => 'rand',                                
                                'posts_per_page' => 6
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
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                unset($category);
                                            }
                                            echo implode(" | ", $output);
                                        }
                                    ?>
                            <a href="<?php the_permalink(); ?>">
                                <h5 class="title-berita"><?php the_title() ?></h5>
                            </a>
                            <ul class="post-meta">
                                <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d M Y', '', ''); ?></li>
                                <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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
    </div>
</section>
<section id="section-event-berita" style="margin-bottom: 7rem">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6>Liputan Media</h6>
                    <!--<a href="https://sevima.com/category/liputan-media/">Lihat semua liputan<i class="uil uil-angle-right"></i></a>-->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="owl-event-media">
                    <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'liputan-media',
							'posts_per_page' => 4
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                            <div class="card-body">
                                <?php
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
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
                                    <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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

<section id="section-event-berita" style="margin-bottom: 7rem">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-section">
                    <h6>Jurusan Kuliah</h6>
                    <a href="https://sevima.com/jurusan-kuliah/">Lihat semua jurusan kuliah<i class="uil uil-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="owl-event-media">
                    <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'saintek',
							'posts_per_page' => 4
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                            <div class="card-body">
                                <?php
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
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
                                    <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
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

<?php get_footer(); ?>