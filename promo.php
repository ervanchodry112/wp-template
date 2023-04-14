<?php
/*
Template Name: Promo
*/
?>
<?php get_header(); ?>
<div class="bg-grey2">
	<section id="hero-promo">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="desc">
						<!-- <label>Our Offering for You</label> -->
						<h3>PROMO & DISKON</h3>
						<p>Mau Bangun Sistem Informasi Kampus <br>Tapi Harus Hemat? Tenang!! <br><br>Ada Promo Menarik Untuk Anda. </p>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<div class="image-hero">
						<img src="<?php echo get_template_directory_uri(); ?>/img/illu-promo.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="promo">
		<div class="container">
			<div class="row">
				<?php 
				    query_posts( array(
					'post_type' => 'promo',
					'orderby' => 'date',
					'posts_per_page' => -1
					));
				    if (have_posts()) : while (have_posts()) : the_post(); 
				    if ( has_post_thumbnail() ) {
					$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
					$news_src = $src[0];
					}
				?>
				<?php 
					$kadaluarsa = get_field('tanggal_berakhir', false, false);
				    $datetime1 = new DateTime($kadaluarsa);//Pass resignation date as a parameter.
				    $datetime2 = new DateTime('now');
				    $unix1 = strtotime( $datetime1->format( 'Y-m-d' ) );
				    $unix2 = strtotime( $datetime2->format( 'Y-m-d' ) );
				    $interval = $datetime1->diff($datetime2);
				?>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="card-promo">
						<?php if($unix2 <= $unix1): ?>
						<img src="<?php
                                  if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default-promo.png";
                                                                                           }?>">
						<?php elseif($unix2 > $unix1): ?>
						<img class="img-disabled" src="<?php
                                  if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default-promo.png";
                                                                                           }?>">
						<?php endif; ?>
						
						<div class="head">
							<label><?php echo get_field('produk'); ?></label>
							<h3><?php the_title(); ?></h3>
						</div>
						<div class="desc">
							<div class="row">
								<div class="col-md-6 col-xs-6">
									<label>Tanggal mulai</label>
									<h4><?php echo the_field('tanggal_mulai'); ?></h4>
								</div>
								<div class="col-md-6 col-xs-6">
									<label>Tanggal berakhir</label>
									<h4><?php echo the_field('tanggal_berakhir'); ?></h4>
								</div>
							</div>
						</div>
						
						<?php if($unix2 <= $unix1): ?>
						<div class="button">
							<a href="<?php the_permalink(); ?>" class="btn-promo">Lihat Detail</a>
						</div>
						<?php elseif($unix2 > $unix1): ?>
						<div class="button">
							<a class="btn-disabled" disabled>Promo sudah berakhir</a>
						</div>
						<?php endif; ?>
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