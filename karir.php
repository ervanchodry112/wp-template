<?php
/*
Template Name: Karir
*/
?>
<?php get_header(); ?>
<div class="bg-grey">
<section id="karir">
	<div class="container">
		<div class="row">
			<div class="card-karir">
				<h3><?php echo get_the_title(); ?></h3>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<p><?php echo the_content(); ?></p>
				<div class="foto-tim">
					<div class="row">
						<div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/1.jpg" alt="">
						</div>
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/2.jpg" alt="">
						</div>
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/3.jpg" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/4.jpg" alt="">
						</div>
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/5.jpg" alt="">
						</div>
						<div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/logo-tim.png" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/6.jpg" alt="">
						</div>
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/7.jpg" alt="">
						</div>
						<div class="col-md-3">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tim/8.jpg" alt="">
						</div>
					</div>
				</div>
				<?php endwhile;?>
            	<?php endif; ?>
            	<div class="bekerja-di-sevima">
            		<h3>Kesempatan Yang Akan Kamu Dapat</h3>
            		<div class="row">
            			<div class="col-md-6">
							<div class="kerjasevima">
								<div class="row">
            						<div class="col-md-4">
            							<img src="<?php echo get_template_directory_uri(); ?>/img/icon/1.png" alt="">
	            				    </div>
	            				    <div class="col-md-8">
	            				    	<h4>Berkolaborasi Dengan Tim yang Profesional</h4>
	            				    	<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>-->
	            				    </div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6">
							<div class="kerjasevima">
								<div class="row">
            						<div class="col-md-4">
            							<img src="<?php echo get_template_directory_uri(); ?>/img/icon/2.png" alt="">
	            				    </div>
	            				    <div class="col-md-8">
	            				    	<h4>Jenjang Karir yang Menantang</h4>
<!--	            				    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>-->
	            				    </div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6">
							<div class="kerjasevima">
								<div class="row">
            						<div class="col-md-4">
            							<img src="<?php echo get_template_directory_uri(); ?>/img/icon/3.png" alt="">
	            				    </div>
	            				    <div class="col-md-8">
	            				    	<h4>Kekeluargaan dan Kebersamaan</h4>
<!--	            				    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>-->
	            				    </div>
            					</div>
            				</div>
            			</div>
            			<div class="col-md-6">
							<div class="kerjasevima">
								<div class="row">
            						<div class="col-md-4">
            							<img src="<?php echo get_template_directory_uri(); ?>/img/icon/4.png" alt="">
	            				    </div>
	            				    <div class="col-md-8">
	            				    	<h4>Fasilitas dan Gaji Insentiv</h4>
<!--	            				    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>-->
	            				    </div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</div>
            	<div class="lowongan-tersedia">
            		<h3>Lowongan Kerja</h3>
            		<p>Jadilah bagian dari orang-orang yang percaya pada misi yang sama, saling mendukung dan membantu satu sama lain dengan menciptakan lingkungan kerja yang paling berarti. Jika kita harus menghabiskan sebagian besar waktu kita di tempat kerja, mengapa tidak mengubahnya untuk bermanfaat bagi sesama. Apakah kamu memilik keyakinan yang sama?</p>
            		<p>Bergabunglah bersama kami dan bersama-sama mendukung terlaksananya Good Governance di Dunia Pendidikan.</p>
            		<div class="row" style="margin-top: 20px;">
            			<?php 
						    query_posts( array(
							'post_type' => 'lowongan',
							'orderby' => 'date',
							'post_per_page' => -1
							));
						    if (have_posts()) : while (have_posts()) : the_post(); 
						    if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-slider');
							$news_src = $src[0];
							}
						?>
            			<div class="col-md-4">
            				<div class="card-lowongan">
            					<h4><?php the_title() ?></h4>
            					<p><?php the_excerpt() ?></p>
            					<div class="location">
            						<p><i class="fa fa-map-marker">&nbsp;&nbsp;</i><?php echo get_field('lokasi'); ?></p>
            					</div>
            					<div class="lowongan-footer">
            						<a href="<?php the_permalink(); ?>" title="" class="btn-karir">Lihat Selengkapnya</a>
            					</div>
            				</div>
            			</div>
            			<?php
							endwhile;
							endif;
						?>
            		</div>
            	</div>
            	<div class="team-sevima">
            		<h4>Siapa Saja Mereka</h4>
            		<p style="font-size: 20px;">Tidak dapat di sangkal bahwa kita semua berbeda dalam banyak hal , tetapi kita bergerak menuju arah yang sama. Kami merangkul keberagaman dan disitulah keajaiban terjadi.</p>
            		<div class="owl-carousel" id="owl-team" style="margin-top: 50px;">
            			<?php 
						    query_posts( array(
							'post_type' => 'team',
								'orderby' => 'rand',
								'posts_per_page' => -1
							));
						    if (have_posts()) : while (have_posts()) : the_post(); 
						    if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-slider');
							$news_src = $src[0];
							}
						?>
					    <div class="item" style="text-align: center;">
					    	<img src="<?php
                                  if ( has_post_thumbnail() ) {
                                  echo $news_src;
                                  }  else {
                                  echo " ", get_template_directory_uri(), "/img/default-avatar.png ";
                                                                                           }?>" alt="">
					    	<h3><?php the_title() ?></h3>
					    	<span><?php echo get_field('jabatan'); ?></span>
					    	<p><?php the_content() ?></p>
					    </div>
					    <?php
							endwhile;
							endif;
						?>
					</div>
            	</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>