<?php get_header(); ?>
<div class="bg-grey">
<section id="single-asp">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					wpb_get_post_views(get_the_ID());
					if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-sponsor');
							$news_src = $src[0];
							}
				?>
			<div class="col-md-8 col-md-offset-2 col-xs-12 col-sm-12">
				<div class="single-asp">
					<img class="img-bg" src="<?php echo get_template_directory_uri(); ?>/img/id-temp.jpg">
					<img class="img-sales-partner" src="<?php
                                  if ( has_post_thumbnail() ) {
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>">
				</div>
				<div class="information-partner">
					<div class="left-name">
                    	<!-- <h4><?php the_title() ?></h4> -->
                    	<h4><?php the_title() ?></h4>
                    	<p><?php echo get_field('id_partner');?></p>
                    </div>
					<div class="img-qr">
                    	<?php 
						$image = get_field('qr_code');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<?php endif; ?>
                    </div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>