<?php
/*
Template Name: Coba Event
*/
?>
<?php get_header(); ?>
<section id="section-card-event">
	<div class="container">
		<div class="row justify-content-center" style="margin-bottom:-2em; margin-top: -3em;">
			<div class="col-12 col-lg-8 text-center">

				<?php
				if (has_post_thumbnail()) {
					$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
					$news_src = $src[0];

				}
				?>

				<img class="img-fluid" src="<?php
					echo " ", get_template_directory_uri(), "/img/Banner-Event-Sevima.png ";
					
				?>">

			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-lg-8 text-center">
				<div class="title">
					<h2>SEVIMA EVENT</h2>
					<p> Ikuti berbagai event menarik dari SEVIMA dengan topik bahasan terhangat dan insight terbaru dalam Dunia Pendidikan yang dibawakan langsung oleh para pakar di bidangnya. Yuk klik gabung event dan dapatkan ilmu dan insight terbaru.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="grid-all-berita mb-4">
					<?php
					query_posts(array(
						'post_type' => 'post',
						'orderby' => 'date',
						'category_name' => 'pendaftaran',
						'posts_per_page' => 6
					));
					if (have_posts()) : while (have_posts()) : the_post();
							if (has_post_thumbnail()) {
								$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
								$news_src = $src[0];
							}
					?>
							<?php
							$kadaluarsa = get_field('tanggal_acara', false, false);
							$datetime1 = new DateTime($kadaluarsa); //Pass resignation date as a parameter.
							$datetime2 = new DateTime();
							$unix1 = strtotime($datetime1->format('Y-m-d'));
							$unix2 = strtotime($datetime2->format('Y-m-d'));
							$interval = $datetime1->diff($datetime2);
							?>
							<div class="card">
								<a href="<?php the_permalink() ?>">
									<div class="card-img-top">
										<?php if ($unix2 <= $unix1) : ?>
											<img class="img-event" src="<?php
																		if (has_post_thumbnail()) { //cek apakah memiliki featured image
																			echo $news_src;
																		} else {
																			echo " ", get_template_directory_uri(), "/img/default-promo.png";
																		} ?>">
										<?php elseif ($unix2 > $unix1) : ?>
											<img class="img-event" src="<?php
																						if (has_post_thumbnail()) { //cek apakah memiliki featured image
																							echo $news_src;
																						} else {
																							echo " ", get_template_directory_uri(), "/img/default-promo.png";
																						} ?>">
										<?php endif; ?>
										<span class="kategori"><?php echo get_field('produk'); ?></span>
									</div>
									<div class="card-body">
										<span><?php echo the_field('tanggal_acara'); ?></span>
										<h5 class="title-berita"><?php the_title(); ?></h5>
										<p class="card-text">
											<i class="uil uil-user-location"></i><?php echo get_field('lokasi'); ?>
										</p>

										<?php if ($unix2 <= $unix1) : ?>
											<a class="btn button-selengkapnya btn-block" href="<?php echo get_field('link_pendaftaran'); ?>" role="button">Gabung Event</a>

										<?php elseif ($unix2 > $unix1) : ?>
											<a class="btn btn-block btn-disabled">Event Selesai</a>
										<?php endif; ?>
									</div>
								</a>
							</div>
					<?php
						endwhile;
					endif;
					?>
				</div>
			</div>
			<div class="col-12 text-center">
				<div class="button-selengkapnya-all">
					<a class="btn btn-primary text-white" href="<?php echo home_url(); ?>/event-sevima/list-event">Lihat Semua Event SEVIMA</a>
				</div>
			</div>
		</div>
</section>

<img src="<?php echo get_template_directory_uri(); ?>/img/base.png" class="img-fluid" alt="">

<section id="section-gabung-event" style="margin-bottom: 7rem;">
	<div class="ornamen1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event2.png" class="event2" alt="">
	</div>
	<div class="ornamen2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event3.png" class="event3" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 order-md-1 order-2">
				<div class="item">
					<div class="card">
						<div class="text">
							<div class="point">
								8+
							</div>
							<div class="desc">
								Event offline
							</div>
						</div>
					</div>
					<div class="card">
						<div class="text">
							<div class="point">
								10+
							</div>
							<div class="desc">
								Event Online
							</div>
						</div>
					</div>
					<div class="card">
						<div class="text">
							<div class="point">
								5000+
							</div>
							<div class="desc">
								Peserta yang telah
								mengikuti event
							</div>
						</div>
					</div>
					<div class="card">
						<div class="text">
							<div class="point">
								200+
							</div>
							<div class="desc">
								Perguruan tinggi yang
								telah mengikuti event
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-7 title-kolom order-1">
				<div class="title">
					<h2>Dukung Event Kami, atau Ingin Berkolaborasi?</h2>
					<p> Ingin berkolaborasi mengadakan event dengan SEVIMA tentang dunia pendidikan tinggi. Kami
						membuka kesempatan bekerjasama event untuk mendukung kemajuan pendidikan di Indonesia.</p>
				</div>
				<div class="button-selengkapnya">
					<a class="btn btn-primary" href="https://sevima.com/tentang-sevima/">Cari tau SEVIMA</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section id="section-testimoni-event" class="testi-event">
	<div class="ornamen1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event3.png" class="event1" alt="">
	</div>
	<div class="ornamen2">
		<img src="<?php echo get_template_directory_uri(); ?>/img/ornamen-event1.png" class="event2" alt="">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-5 title-kolom">
				<div class="title">
					<h2>Cerita menarik peserta dan perguran tinggi di Event SEVIMA</h2>
				</div>
				<div class="button-selengkapnya">
					<a class="btn btn-primary" href="https://sevima.com/pendaftaran-event">Ikut Event SEVIMA</a>
				</div>
			</div>
			<div class="col-12 col-lg-7 kotak-testi">
				<div id="inner">
					<div class="owl-carousel owl-theme">
						<?php
						query_posts(array(
							'post_type' => 'testimoni_new',
							'orderby' => 'date',
							'posts_per_page' => 3
						));
						if (have_posts()) :
						?>
							<?php while (have_posts()) : the_post();
								if (has_post_thumbnail()) {
									$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
									$news_src = $src[0];
								}
							?>
								<div class="cederholm" id="quote-wrapper">
									<div class="profpic">
										<img src="<?php
													if (has_post_thumbnail()) {
														echo $news_src;
													} else {
														echo " ", get_template_directory_uri(), "/img/default-promo.png ";
													} ?>" class="img-profil" alt="...">
									</div>
									<div class="quote">
										<blockquote id="quote-quote"><?php the_content(); ?></blockquote>
										<div class="quote-desc">
											<p id="quote-attrib"><?php echo get_field('nama_testimoni'); ?></p>
											<span id="quote-univ"><?php the_title() ?></span>
										</div>
									</div>
								</div>
						<?php
							endwhile;
						endif;
						?>
					</div>

					<div class="owl-theme">
						<div class="owl-controls">
							<div class="custom-nav owl-nav"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<script type="text/javascript">
	if (window.location.href === "https://sevima.com/livechat/") {
		console.log('livechat');
		$('.wptwa-container').hide();
	}
</script>
<?php get_footer(); ?>