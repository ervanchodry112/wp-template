<?php get_header(); ?>

<section id="header-detailberita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						if ( has_post_thumbnail() ) {
								$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
								$news_src = $src[0];
								}
					?>
                <div class="title-header">
                    <span><a class="category" href="<?php echo home_url(); ?>/portofolio">Portofolio |</span></a>
                    <span><a class="category" href="<?php echo home_url(); ?>/portofolio"> Studi Kasus |</span></a>
                    <?php
                                            $posttags = get_the_terms($post->ID, 'ctg_portofolio');    
                                            if ($posttags) {
                                              foreach($posttags as $tag) {
                                                echo '<span><a class="category" href="#">' .$tag->name. '</a></span>'; 
                                              }
                                            }
                                        ?>   
                    <h2 class="title"><?php echo get_field('studi_kasus'); ?></h2>
                    <ul class="post-meta">
                        <li class="meta-date">
                            <?php the_title() ?> &nbsp; | &nbsp; <i class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?>
                        </li>
                    </ul>
                </div>
                <img class="img-fluid" src="<?php
									if ( has_post_thumbnail() ) {
									$image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', TRUE);
									$image_title = get_the_title(get_post_thumbnail_id( $post->ID ));
									$image_caption = get_post(get_post_thumbnail_id( $post->ID ))->post_excerpt;
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                        }?>">
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="content-detail">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <div class="content-section">
                    <?php the_content(); ?>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>

<div class="conten-tambahan">                  

    <section id="section-berita-penting">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Berita Lainnya</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="list-beritapenting">
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
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card-list d-flex align-item-start">
                                    <img class=" gbr-list" src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" alt="...">
                                    <div class="title-beritapenting">
                                        <?php
                                        $postcategories = get_the_category();
                                        if ($postcategories) {
                                            $output = array();
                                            foreach($postcategories as $category) {
                                                $output[] = '<span><a  class="category" href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                unset($category);
                                            }
                                            echo implode(" | ", $output);
                                        }
                                    ?>
                                        <h5 class="title-berita"><a
                                                href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
                                                <ul class="post-meta">
                                                    <li class="meta-date"><i
                                                            class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?>
                                                    </li>
                                                </ul>
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
</div>

<script async>
    (function (s, u, m, o, j, v) {
        j = u.createElement(m);
        v = u.getElementsByTagName(m)[0];
        j.async = 1;
        j.src = o;
        j.dataset.sumoSiteId = '3d0c811e6f651c76f772b956ad69586e51670daa0027d0b608556eaac16e3141';
        v.parentNode.insertBefore(j, v)
    })(window, document, 'script', '//load.sumo.com/');
</script>
<script>
    (function ($) {
        setInterval(() => {
            $.each($('iframe'), (arr, x) => {
                let src = $(x).attr('src');
                if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                    $(x).remove();
                }
            });
        }, 300);
    })(jQuery);
</script>
<?php get_footer(); ?>
