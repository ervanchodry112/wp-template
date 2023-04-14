<div class="col-md-4 col-12" style="margin-top: 4rem;">
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
        
</div>
