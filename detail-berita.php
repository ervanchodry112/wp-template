<?php
/*
Template Name: Detail Berita
*/
?>
<?php get_header(); ?>

<div class="zoom-me">
    <div class="img-header">
        <div class="background"></div>
        <img src="https://unsplash.it/1200/800?image=838" class="gbr-header"> 
    </div>
    <div class="title-header">
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
        <h1 class="title"><?php the_title() ?></h1>
        <span><i class="uil uil-schedule"></i> <?php the_time(' d F Y', '', ''); ?></span>
    </div>

</div>
<div class="content-detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="sidebar-item">
                    <div class="make-me-sticky">
                        <h3>tes</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 offset-lg-2">
                <div class="content-section">
                    <?php the_content(); ?>
                </div>
                <div class="tag d-flex align-items-center">
                    <h6><b><i class="uil uil-tag-alt"></i>TAGS :</b></h6>
                    <a href="">Dunia Dosen</a>
                    <a href="">Tips & Trik</a>
                    <a href="">E-Learning</a>
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
                <div class="nav-berita d-flex justify-content-between">
                    <?php if (!empty($prevID)) { ?>
                    <div class="nav-prev pr-5">                       
                        <a href="<?php echo get_permalink($prevID); ?>">
                            <span><i class="uil uil-angle-left"></i> Artikel Sebelumnya</span>
                        </a>
                        <div class="title-berita">
                            <h6><?php echo get_the_title($prevID); ?></h6>
                        </div>
                    </div>
                    <?php }
                    if (!empty($nextID)) { ?>
                    <div class="nav-next text-right pl-5">
                        <a href="<?php echo get_permalink($nextID); ?>">
                            <span>Artikel Selanjutnya <i class="uil uil-angle-right"></i></span>
                        </a>
                        <div class="title-berita">
                            <h6><?php echo get_the_title($nextID); ?></h6>
                        </div>
                    </div>
                    <?php } ?>
                </div>

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
                        <h6>Artikel Menarik Lainnya</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel owl-theme" id="owl-artikel-menarik">
                    <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',							
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
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>" alt="">                                
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
                                    <h5 class="title-berita"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
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

    <section id="section-campuspedia-detail">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Terpopuler</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="list-campuspedia">

                        <div class="card-list d-flex align-item-start">
                            <img src="img/img1.jpg" class="img-fluid gbr-list" alt="">
                            <div class="title-campuspedia">
                                <span><a href="#">siAakad | Dunia Kampus</a></span>
                                <h5 class="title-berita">How I Became Strong After a Lifetime of Being Bullied</h5>
                                <span><i class="uil uil-schedule"></i> 16 Juni 2020</span>
                            </div>
                        </div>

                        <div class="card-list d-flex align-item-start">
                            <img src="img/img3.jpg" class="img-fluid gbr-list" alt="">
                            <div class="title-campuspedia">
                                <span><a href="#">siAakad | Dunia Kampus</a></span>
                                <h5 class="title-berita">How I Became Strong After a Lifetime of Being Bullied</h5>
                                <span><i class="uil uil-schedule"></i> 16 Juni 2020</span>
                            </div>
                        </div>

                        <div class="card-list d-flex align-item-start">
                            <img src="img/img2.jpg" class="img-fluid gbr-list" alt="">
                            <div class="title-campuspedia">
                                <span><a href="#">siAakad | Dunia Kampus</a></span>
                                <h5 class="title-berita">Where to Find Real Mexican-American Food in San Antonio</h5>
                                <span><i class="uil uil-schedule"></i> 16 Juni 2020</span>
                            </div>
                        </div>

                        <div class="card-list d-flex align-item-start">
                            <img src="img/img4.jpg" class="img-fluid gbr-list" alt="">
                            <div class="title-campuspedia">
                                <a href="#">siAakad | Dunia Kampus</a>
                                <h5 class="title-berita">Consectetur adipisicing elit sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua.</h5>
                                <span><i class="uil uil-schedule"></i> 16 Juni 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
