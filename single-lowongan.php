<?php get_header(); ?>
<div class="bg-grey">
<section id="single-berita">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
					if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
							$news_src = $src[0];
							}
				?>

				<div class="card-detail-berita">
					<div class="title-detail-berita">
						<br>
						<?php
									$posttags = get_the_category();
									if ($posttags) {
										foreach($posttags as $tag) {
											echo '<span class="tag tag-red"><a href="' . get_category_link($category->term_id) . '">' .$tag->name. '</a></span>'; 
										}
									}
						?>
						<h3><?php the_title() ?></h3>
						<div class="date">
							<i class="fa fa-user">&nbsp;</i><p><?php the_author(); ?></p>
							<i class="fa fa-calendar">&nbsp;</i><p><?php the_time(' d F Y', '', ''); ?></p>
							<i class="fa fa-map-marker">&nbsp;</i><p><?php echo get_field('lokasi'); ?></p>
						</div>
						
					</div>
					<div class="thumbnail-detail-karir">
						<img src="<?php
                                  if ( has_post_thumbnail() ) {
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/tim/tes.jpg ";
                                                                                           }?>">
					</div>
					<div class="content-detail-berita">
						<?php the_content(); ?>
					</div>
					<!-- <div class="line-hr"></div> -->
					<div class="iklan-sevima">
						<?php 
							$args = array(
							        'post_type' => 'iklan',
							        'iklan_kategori' =>'bawah'
							        );
							$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large');
							$news_src = $src[0];
							}  
						?>
						<a href="<?php echo get_field('link_iklan'); ?>" title="" target="_blank"><img src="<?php
                                  if ( has_post_thumbnail() ) {
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>" alt="<?php echo strip_tags( get_the_excerpt() ); ?>"></a>

						<?php endwhile; wp_reset_postdata(); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>

		</div>
	</div>
</section>

</div>
<?php get_footer(); ?>