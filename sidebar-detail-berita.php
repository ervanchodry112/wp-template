<div class="col-md-3 col-12">
    <div class="card-iklan">
        <?php 
        query_posts( array(
        'post_type' => 'iklan',
        'iklan_kategori' => 'kanan',
        'orderby' => 'date'
        ));
        if (have_posts()) : while (have_posts()) : the_post(); 
        if ( has_post_thumbnail() ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
        $news_src = $src[0];
        }
    ?>
    <div class="list-iklan">
        <a href="<?php echo get_field('link_iklan'); ?>" title="" target="_blank">
            <img src="<?php
                if ( has_post_thumbnail() ) {
                echo $news_src;
                }  else {
                echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                        }?>" alt="<?php echo strip_tags( get_the_excerpt() ); ?>">
        </a>
    </div>
    <?php
        endwhile;
        endif;
    ?>
    </div>
    <div class="card-berita-kanan">
        <h3>Terpopuler</h3>
        <hr>
        <?php
        $popularpost = new WP_Query(array('posts_per_page' => 7, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
        while ($popularpost->have_posts()) : $popularpost->the_post();
            if (has_post_thumbnail()) {
                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $news_src = $src[0];
            }
        ?>
            <div class="berita-populer">
                <div class="row">
                    <div class="col-md-4 col-4">
                        <img src="<?php
                                            if (has_post_thumbnail()) {
                                                echo $news_src;
                                            } else {
                                                echo " ", get_template_directory_uri(), "/img/default.png";
                                            } ?>" alt="">
                    </div>
                    <div class="col-md-8 col-8">
                        <a href="<?php the_permalink(); ?>" title="">
                            <h4><?php the_title(); ?></h4>
                        </a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
