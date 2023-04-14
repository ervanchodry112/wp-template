<?php
/*
Template Name: Berita
*/
?>
<?php get_header(); ?>

    <section id="section-header-listberita">
        <div class="container">
            <div class="row">
                <div class="col-12 text-left title-listberita">                    
                    <h3>Berita & Artikel </h3>                
                </div>
            </div>

            <div class="row">
                <div class="col-12">
				<?php 
						    query_posts( array(
							'post_type' => 'post',
							'posts_per_page' => 10,
							'orderby' => 'date',
							'paged'=> $paged
							));
						    if (have_posts()) : while (have_posts()) : the_post(); 
						    if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-slider');
							$news_src = $src[0];
							}
						?>
                    <div class="card-listberita">
                        <div class="date-berita">
                            <p><?php the_time(' M ', '', ''); ?></p>
                            <h3><?php the_time(' d ', '', ''); ?></h3>
                            <p><?php the_time(' Y', '', ''); ?></p>
                        </div>
                        <div class="img-berita">
                            <img src="<?php
                                  if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>" class="card-img" alt="...">
                        </div>
                        <div class="konten-berita">
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
                                <h5 class="title-berita"><a href="<?php the_permalink(); ?>"><?php the_title() ?>
                                </a></h5>
                                <ul class="post-meta">
                                    <li class="meta-author">by <span><a class="author" href="#">&nbsp
                                            <?php the_author(); ?></a></span>
                                    </li>
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
                    </div>
					<?php
						endwhile;
						endif;
					?>
					<?php sevima_pagination(); ?>              
                </div>
            </div>

           
        </div>
    </section>

    <section id="section-populerberita">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="title-section">
                        <h6>Terpopuler</h6>
                    </div>
                    <?php $count = 0; ?>
                    <?php
                        $popularpost = new WP_Query(array('posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count',
                        'orderby' => 'meta_value_num', 'order' => 'DESC'));
                        while ($popularpost->have_posts()) : $popularpost->the_post();
                        if (has_post_thumbnail()) {
                        $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                        $news_src = $src[0];
                        }
                        ?>
                    <?php $count++; ?>  
                    <div class="list-terpopuler">
                        <div class="card-list d-flex align-item-start">
                            <div class="circle">
                            <?php if ($count==1) {
                                    echo "1";
                                }
                                elseif ($count==2) {
                                    echo "2";
                                }
                                elseif ($count==3) {
                                    echo "3";
                                }
                                elseif ($count==4) {
                                    echo "4";
                                }
                                elseif ($count==5) {
                                    echo "5";
                                } ?>
                            </div>
                            <div class="title-populer">
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
                                <h5 class="title-berita"><a href="<?php the_permalink(); ?>"><?php the_title() ?>
                                    </a></h5>
                                <ul class="post-meta">
                                    <li class="meta-author">by <span><a class="author" href="#">&nbsp
                                                <?php the_author(); ?></a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="col-12 col-md-6">
                    <div class="title-section">
                        <h6>Jelajah Kategori</h6>
                    </div>
                    <div class="list-kategori">
                        <?php
                            $categories = get_categories();
                            foreach ($categories as $category) {
                                echo '<p><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></p>';
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--<div class="conten-tambahan">
        <section id="section-campuspedia-instagram" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="title-section">
                            <h6>Instagram</h6>
                        </div>
                        <?php // echo do_shortcode('[instagram-feed]'); ?>
                    </div>
                </div>
            </div>
        </section>                     
    </div>    -->

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

<!-- <script>
	$(function(){
    $(".list-berita").slice(0, 10).show();
    var loadmorebtn = document.querySelector('.loadmore');
    
    loadmorebtn.addEventListener("click", function() {
        loadmorebtn.innerHTML = "Tunggu Sebentar...";
        loadmorebtn.classList.add('disabled');
        
      setTimeout( 
            function  (){  
                loadmorebtn.classList.remove('disabled');
                loadmorebtn.innerHTML = "Selanjutnya..";
                $(".list-berita:hidden").slice(0, 5).slideDown();
        		if ($(".list-berita:hidden").length == 0) {
            	$("#load").fadeOut('slow');
        }
                
            }, 2000);
    }, false);
    
});
</script> -->
<?php get_footer(); ?>