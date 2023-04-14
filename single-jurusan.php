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
                            $posttags = get_the_terms($post->ID, 'jurusan_kategori');    
                            if ($posttags) {
                                foreach($posttags as $tag) {
                                echo '<span><a class="category" href="'. get_term_link($tag->term_id) .'">' .$tag->name. '</a></span>'; 
                                }
                            }
                    ?> 
                    <h1 class="title"><?php the_title() ?></h1>
                    <ul class="post-meta">
                                            <li class="meta-date">
                                                <i class="uil uil-schedule"></i><?php the_time(' d F Y', '', ''); ?></small>
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
            </div>
        </div>
    </div>
</div>

<div class="conten-tambahan">                  
    <section id="section-artikel-menarik">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Jurusan Terkait</h6>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="list-artikelterkait">
                        <?php
											$related = get_posts( 
											array(
                                                'post_type' => 'jurusan',
												'category__in' => wp_get_post_categories( $post->ID ), 
                                                'orderby' => 'rand',
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
                                                    $postcategories = get_the_terms($post->ID, 'jurusan_kategori');
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a class="kategori" href="' . get_term_link($category->term_id) . '">' .$category->name.' </a></span>';
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
                        <?php }
											wp_reset_postdata();
                                        } ?>
                    </div>

                </div>
            </div>
    </section>
</div>


<?php get_footer(); ?>