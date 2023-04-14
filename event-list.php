<?php
/*
Template Name: List Event
*/
?>
<?php get_header(); ?>

<section id="section-card-event">
		<div class="container mb-5">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-8 text-center">
					<div class="title">
						<h2>LIST SEMUA EVENT SEVIMA</h2>
						<p>Lihat seluruh event yang pernah diselenggarakan oleh SEVIMA bersama komunitas.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="grid-all-berita mb-4">					
					<?php 
						query_posts( array(
						'post_type' => 'post',
						'orderby' => 'date',
						'category_name' => 'pendaftaran',
						'posts_per_page' => 12,
                        'paged'=> $paged
						));
						if (have_posts()) : while (have_posts()) : the_post(); 
						if ( has_post_thumbnail() ) {
						$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
						$news_src = $src[0];
						}
					?>
					<?php 
						$kadaluarsa = get_field('tanggal_acara', false, false);
						$datetime1 = new DateTime($kadaluarsa);//Pass resignation date as a parameter.
						$datetime2 = new DateTime();
						$unix1 = strtotime( $datetime1->format( 'Y-m-d' ) );
						$unix2 = strtotime( $datetime2->format( 'Y-m-d' ) );
						$interval = $datetime1->diff($datetime2);
					?>					
						<div class="card">
							<a href="<?php the_permalink()?>">
								<div class="card-img-top">
									<?php if($unix2 <= $unix1): ?>
										<img class="img-event" src="<?php
										if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
										echo $news_src;
										}  else {
										echo " ", get_template_directory_uri(), "/img/default-promo.png";
																								}?>">
									<?php elseif($unix2 > $unix1): ?>
										<img class="img-event" src="<?php
										if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
										echo $news_src;
										}  else {
										echo " ", get_template_directory_uri(), "/img/default-promo.png";
																								}?>">
									<?php endif; ?>
									<span class="kategori"><?php echo get_field('produk'); ?></span>
								</div>							
								<div class="card-body">
									<span><?php echo the_field('tanggal_acara'); ?></span>
									<h5 class="title-berita"><?php the_title(); ?></h5>
									<p class="card-text">
										<i class="uil uil-user-location"></i><?php echo get_field('lokasi'); ?>
									</p>

									<?php if($unix2 <= $unix1): ?>
									<a class="btn button-selengkapnya btn-block" href="<?php the_permalink()?>" role="button">Gabung Event</a>										
									
									<?php elseif($unix2 > $unix1): ?>
									<a class="btn btn-block btn-disabled">Event Selesai</a>
									<?php endif; ?>
								</div>		
							</a>					
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

<?php get_footer(); ?>