<?php
/*
Template Name: Authorized Sales Partner
*/
?>
<?php get_header(); ?>
<div class="bg-grey">
	<section id="asp">
		<div class="container">
			<div class="row">
				<h3><?php the_title() ?></h3>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<p><?php the_content(); ?></p>
				<?php endwhile; endif; ?>
				<?php 
				    query_posts( array(
					'post_type' => 'sales_partner',
					'orderby' => 'date',
					'posts_per_page' => -1
					));
				    if (have_posts()) : while (have_posts()) : the_post(); 
				    if ( has_post_thumbnail() ) {
					$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-sponsor');
					$news_src = $src[0];
					}
				?>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="card-asp">
						<img src="<?php
                                  if ( has_post_thumbnail() ) {
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>">
						<h4><?php the_title() ?></h4>
						<span><?php echo get_field('id_partner');?></span>
						<a href="<?php the_permalink(); ?>"><div class="btn-partner">Lihat Selengkapnya</div></a>
					</div>
				</div>
				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>