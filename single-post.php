<?php get_header(); ?>

<section id="header-detailberita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						wpb_get_post_views(get_the_ID());
						if ( has_post_thumbnail() ) {
								$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
								$news_src = $src[0];
								}
					?>
                <div class="title-header">
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
                    <h2 class="title"><?php the_title() ?></h2>
                    <ul class="post-meta">
                                            <li class="meta-date"><i class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?>
                                            </li>
                                            <li class="author">oleh&nbsp;<?php the_author(); ?></li>
                                            <li class="meta-read-time"><i class="uil uil-stopwatch"></i><?php echo estimated_reading_time( get_the_content() ); ?></li>
                                        </ul>
                </div>
                <img class="img-fluid" src="<?php
									if ( has_post_thumbnail() ) {
									//$image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), ‘_wp_attachment_image_alt’, TRUE);
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
                <div class="about-us-blog">
                    <p class="title">Mengenal SEVIMA</p>    
                    <p class="text">SEVIMA merupakan perusahaan Edutech (education technology) yang telah berkomitmen selama 18 tahun dalam menyelesaikan kendala kerumitan administrasi akademik di pendidikan tinggi (Universitas, Sekolah Tinggi, Institut, Politeknik, Akademi, dll.) dengan 99% keberhasilan implementasi melalui sistem informasi <a href="https://siakadcloud.com/?utm_source=sevima_com&utm_medium=artikel&utm_campaign=organic">siAkadCloud</a></p>
                    </div>
                <div class="tag d-flex">
                    <h6><b><i class="uil uil-tag-alt"></i>TAGS :</b></h6>
                    <?php
                                                    $tags = get_the_tags();
                                                    if ($tags) {
                                                        $output = array();
                                                        foreach($tags as $tag) {
                                                            $output[] = '<a href="' . get_tag_link( $tag->term_id ) . '">' .$tag->name.' </a>';
                                                            unset($tag);
                                                        }
                                                        echo implode("", $output);
                                                    }
                                                ?>
                </div>
                <hr>

                <?php
						$pagelist = get_posts('sort_column=menu_order&sort_order=desc&posts_per_page=-1');
						$pages = array();
						foreach ($pagelist as $page) {
						$pages[] += $page->ID;

						}

						$current = array_search(get_the_ID(), $pages);
						$prevID = $pages[$current-1];
						$nextID = $pages[$current+1];
						?>
                <div class="nav-berita">
                    <?php if (!empty($prevID)) { ?>
                    <div class="nav-prev pr-5">
                        <a href="<?php echo get_permalink($prevID); ?>">
                            <span><i class="uil uil-angle-left"></i> Artikel Sebelumnya</span>
                        </a>
                        <div class="title-berita">
                            <a href="<?php echo get_permalink($prevID); ?>">
                                <h6><?php echo get_the_title($prevID); ?></h6>
                            </a>
                        </div>
                    </div>
                    <?php }
                    if (!empty($nextID)) { ?>
                    <div class="nav-next text-right pl-5">
                        <a href="<?php echo get_permalink($nextID); ?>">
                            <span>Artikel Selanjutnya <i class="uil uil-angle-right"></i></span>
                        </a>
                        <div class="title-berita">
                            <a href="<?php echo get_permalink($nextID); ?>">
                                <h6><?php echo get_the_title($nextID); ?></h6>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="conten-tambahan">
    <section id="section-kolom-comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Komentar</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode ('[gs-fb-comments]'); ?>
                </div>
            </div>
        </div>
    </section>                    

    <section id="section-artikel-menarik">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Artikel Terkait</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="list-artikelterkait">
                        <?php
											$related = get_posts( 
											array( 
												'category__in' => wp_get_post_categories( $post->ID ), 
												'numberposts'  => 4, 
												'post__not_in' => array( $post->ID ) 
											) 
										);
											
										?>
                        <?php 
											if( $related ) { 
												foreach( $related as $post ) {
													setup_postdata($related);
											?>
                        <?php 
										$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
										$related_src = $src[0];
										?>
                        <div class="item">
                            <a href="<?php the_permalink(); ?>">
                                <div class="card">
                                    <img class="card-img-top" src="<?php
												if ( has_post_thumbnail() ) { 
												echo $related_src;
												}  else {
												echo " ", get_template_directory_uri(), "/img/default.png ";
																										}?>" alt="">

                                    <div class="card-body">
                                        <?php
                                                    $postcategories = get_the_category();
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a class="kategori" href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
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
                        <?php }
				wp_reset_postdata();
                        } ?>
                    </div>

                </div>
            </div>
    </section>

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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<section id="section-campuspedia-instagram">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title-section">
                        <h6>Instagram</h6>
                    </div>
                    <?php //echo do_shortcode(' [wp_my_instagram username="sevima_official" limit="6" layout="3" size="thumbnail"] '); ?>
                    <?php // echo do_shortcode('[instagram-feed]'); ?>
                </div>
            </div>
        </div>
    </section>-->
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

<script src="https://cdn.jsdelivr.net/npm/clamp-js@0.7.0/clamp.min.js"></script>
<script>
    var beritaTerkait = $('.berita-terkait-title').get(0);
    $(function () {
        $clamp(beritaTerkait, {
            clamp: 2
        });
    });
</script>
<script>
    window.onload = function() {
        $( ".about-us-blog" ).insertBefore( $('.heateorSssClear').first() );
    }
</script>
<?php get_footer(); ?>
