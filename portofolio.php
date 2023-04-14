<?php
/*
Template Name: Portofolio
*/
?>
<?php get_header(); ?>
<div class="bg-grey">
	<section id="kisah-sukses">
		<div class="container">
			<div class="row">
				<div class="heading">
					<div class="col-md-3 col-sm-12">
						<span>Portofolio</span>
						<h3>Kisah <br>Sukses.</h3>
					</div>
					<div class="col-md-9 col-sm-12">
						<p>Mendukung terlaksananya Good Governance di Dunia Pendidikan adalah misi kami, berikut ini
							adalah
							success story atau buah kerja keras SEVIMA selama 18 tahun kami melayani berbagai institusi
							dan
							perguruan tinggi di seluruh Indonesia. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 mt-5">
					<div id="owl-kisah-sukses" class="owl-carousel owl-theme">
						<?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'success-story',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
						<a href="<?php the_permalink(); ?>">
							<div class="card">
								<img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" class="img-fluid card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title"><?php the_title() ?></h5>
									<p><?php the_excerpt() ?></p>
								</div>
								<div class="card-footer">
									<small class="text-muted"><?php the_time(' d F Y', '', ''); ?> &nbsp; . &nbsp;oleh
										<?php the_author(); ?></small>
								</div>
							</div>
						</a>
						<?php
							endwhile;
							endif;
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="studi-kasus">
		<div class="container">
			<div class="row">
				<div class="heading">
					<div class="col-md-3 col-sm-12">
						<span>Portofolio</span>
						<h3>Studi <br>Kasus.</h3>
					</div>
					<div class="col-md-9 col-sm-12">
						<p>Kami membantu perguruan tinggi atau universitas dalam menciptakan pengalaman digital yang
							memudahkan dan menyenangkan dalam mengelola administrasi kampus, kami juga telah bekerjasama
							dengan beberapa kampus favorit seperti: ITS, UNAIR, UPN Veteran Jakarta, Universitas Mercu
							Buana Jakarta, UNIPA dan masih banyak lagi:</p>
					</div>
				</div>
			</div>
			<div class="row">
				<?php 
			    query_posts( array(
				'post_type' => 'portofolio',
				'orderby' => 'date',
				'posts_per_page' => 4
				));
			    if (have_posts()) : while (have_posts()) : the_post(); 
			    if ( has_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-portofolio');
				$news_src = $src[0];
				}
			?>
				<div class="col-md-12">
					<div class="well-custom">
						<div class="row">
							<div class="col-md-10">
								<h3><a href="<?php the_permalink(); ?>" target="_blank"><?php echo get_field('studi_kasus'); ?></a></h3>
								<p><?php echo get_field('ringkasan'); ?></p>
							</div>
							<div class="col-md-2">
								<img src="<?php
									if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default.png ";
																							}?>">
							</div>
						</div>
					</div>
				</div>
				<?php
				endwhile;
				endif;
			?>
			</div>
		</div>
	</section>
	<section id="klien-kami">
		<div class="container">
			<div class="row">
				<div class="heading">
					<div class="col-md-3 col-sm-12">
						<span>Portofolio</span>
						<h3>Klien <br>Sevima.</h3>
					</div>
					<div class="col-md-9 col-sm-12">
						<p>Mendukung terlaksananya Good Governance di Dunia Pendidikan adalah misi kami, berikut adalah
							beberapa perguruan tinggi yang telah terbantu dan merasakan kemudahan prouk SEVIMA dalam
							pengelolaan administrasi.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="nav-menu">
						<ul class="nav nav-pills">
							<li class="nav-item"><a href="#semua" data-toggle="tab" class="nav-link active"
									style="text-transform: capitalize"><?php echo $term->name; ?>Semua</a></li>
							<?php
			              $taxonomy = 'ctg_portofolio';
			              $terms = get_terms($taxonomy);

			              if ( $terms && !is_wp_error( $terms ) ) :
			              ?>
							<?php foreach ( $terms as $term ) { ?>
							<li class="nav-item"><a class="nav-link" href="#<?php echo $term->slug; ?>"
									data-toggle="tab"><?php echo $term->name; ?></a>
							</li>
							<?php } ?>
							<?php endif;?>
						</ul>
					</div>
					<div class="tab-content clearfix">
						<div class="tab-pane active" id="semua">
							<div class="content-porto">
								<div class="row">
									<?php
					                  query_posts( array(
					                  'post_type' => 'portofolio',
					                  'posts_per_page' => -1 
					                  ) );
					                  if ( have_posts() ) :
					              ?>
									<?php while ( have_posts() ) : the_post(); 
					              	if ( has_post_thumbnail() ) {
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-portofolio');
									$news_src = $src[0];
									}
					              ?>
									<div class="col-md-3 col-6">
										<img src="<?php
                                  if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>" alt="">
									</div>
									<?php endwhile; ?>
									<?php else : ?>
									<div align="center">
										Post yang sesuai dengan kriteria anda tidak ditemukan.
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php
		              $taxonomy = 'ctg_portofolio';
		              $terms = get_terms($taxonomy);

		              if ( $terms && !is_wp_error( $terms ) ) :
		              ?>
						<?php foreach ( $terms as $term ) { ?>
						<div class="tab-pane" id="<?php echo $term->slug; ?>">
							<div class="content-porto">
								<div class="row">
									<?php
					                  query_posts( array(
					                  'post_type' => 'portofolio',
									  'posts_per_page' => -1,
					                  'ctg_portofolio' => $term->slug
					                  ) );
					                  if ( have_posts() ) :
					              ?>
									<?php while ( have_posts() ) : the_post(); 
					              	if ( has_post_thumbnail() ) {
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-portofolio');
									$news_src = $src[0];
									}
					              ?>
									<div class="col-md-3 col-6">
										<img src="<?php
                                  if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default.png ";
                                                                                           }?>" alt="">
									</div>
									<?php endwhile; ?>
									<?php else : ?>
									<div align="center">
										Post yang sesuai dengan kriteria anda tidak ditemukan.
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>