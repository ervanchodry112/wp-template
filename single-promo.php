<?php get_header(); ?>
<section id="single-promo">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
				wpb_get_post_views(get_the_ID());
				if ( has_post_thumbnail() ) {
						$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
						$news_src = $src[0];
						}
			?>
			<div class="col-md-8">
				<div class="card-single">
					<div class="nav-bread">
						<p class="active">Daftar Promo &nbsp;<i class="uil uil-angle-right"></i>&nbsp;</p>
						<p>Detail Promo</p>
					</div>
					<div class="title">
						<h3><?php the_title(); ?></h3>
					</div>
					<div class="thumb">
						<img src="<?php
                              if ( has_post_thumbnail() ) {
                              echo $news_src;
                              }  else {
                              echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                                                       }?>">
					</div>
					<div class="content-promo">
						<?php the_content();  ?>
					</div>
					<div class="sub-content">
						<div class="row">
							<div class="col-md-4 col-xs-4">
								<label>Tanggal mulai</label>
								<h4><?php echo the_field('tanggal_mulai'); ?></h4>
							</div>
							<div class="col-md-4 col-xs-4">
								<label>Tanggal berakhir</label>
								<h4><?php echo the_field('tanggal_berakhir'); ?></h4>
							</div>
							<div class="col-md-4 col-xs-4">
								<label>Produk</label>
								<h4><?php echo the_field('produk'); ?></h4>
							</div>
						</div>
					</div>
					<?php
                        if( have_rows('kupon') ):
                        while ( have_rows('kupon') ) : the_row();
                        $judul = get_sub_field('judul_kupon');
                        $kode = get_sub_field('kode_kupon');
                    ?>
					<div class="tiket-promo">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<h3><?php echo $judul; ?></h3>
							</div>
							<div class="col-md-4">
								<div class="kode-kupon">
									<label>Kode</label>
									<?php echo $kode; ?>
								</div>
							</div>
						</div>
					</div>
					<div class="tiket-promo-res">
						<div class="row">
							<div class="col-md-8 col-xs-7">
								<h3><?php echo $judul; ?></h3>
							</div>
							<div class="col-md-4 col-xs-5">
								<div class="kode-kupon">
									<label>Kode</label>
									<?php echo $kode; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
                    <?php endif; ?>
                    <div class="syarat-ketentuan">
                    	<div class="panel-group" id="accordion">
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						        Syarat & Ketentuan</a>
						      </h4>
						    </div>
						    <div id="collapse1" class="panel-collapse collapse in">
						      <div class="panel-body"><?php echo the_field('syarat_dan_ketentuan'); ?></div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						        Disclaimer</a>
						      </h4>
						    </div>
						    <div id="collapse2" class="panel-collapse collapse">
						      <div class="panel-body"><?php echo the_field('disclaimer'); ?></div>
						    </div>
						  </div>
						</div>
                    </div>
                    <div class="inputcode">
                    	<ul class="tabs-code primary-code">
                    		<!-- <li class="tabs-item" onclick="fitur(event, 'email')"><a href="#" class="tabs-link">Promo via Email</a></li> -->
							<!-- KODE DI WORDPRESS:
							<div class="row">
<div class="col-md-12">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="nama">Nama*</label>
[text* nama id:nama class:form-control]
</div>
</div>
<div class="col-md-6">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="email">Email*</label>
[email* email id:email class:form-control]
</div>
</div>
<div class="col-md-6">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="telp">No Telepon*</label>
[number* telp id:telp class:form-control]
</div>
</div>
<div class="col-md-12">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="namapt">Nama Perguruan Tinggi*</label>
[text* namapt id:namapt class:form-control]
</div>
</div>
<div class="col-md-12">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="jabatan">Jabatan di perguruan tinggi*</label>
[select* jabatan id:jabatan class:form-control first_as_label "-- Pilih Jabatan Anda --" "Rektor" "Kepala Bagian" "Dosen" "Admin IT"]
</div>
</div>
<div class="col-md-12">
<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
<label for="pesan">Deskripsi - Copy-paste kode promo mu di sini*</label>
[textarea pesan id:pesan class:form-control]
</div>
</div>
<div class="col-md-12">
[recaptcha]
</div>
<div class="col-md-12">
[submit class:btn-ambil-promo class:fadeInRight "Ambil Promo"]
</div>
</div>-->
                    		<li class="tabs-item" onclick="fitur(event, 'wa')"><a href="#" class="tabs-link">Promo via WhatsApp</a></li>
                    	</ul>
                    </div>
                    <div class="detail-tabs" id="email">
                    	<div class="row">
	                    	<?php echo do_shortcode( '[contact-form-7 id="6589" title="Promo"]' ); ?>
                    	</div>
	                </div>
	                <div class="detail-tabs" id="wa">
	                    <div class="row">
	                    	<div class="col-md-12">
								<div class="form-group form-kontak wow fadeInRight">
								<label for="nama">Kode Promo*</label>
									<input type="text" name="kodepromo" id="kodepromo" class="form-control">
								</div>
							</div>
							<div class="col-md-12" style="margin-top: 2rem;">
								<a href="" id="btn-ambil-promo" class="btn-ambil-promo-wa fadeInRight" onclick="changeText2()">Ambil Promo</a>
							</div>
	                    </div>
	                </div>
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php include 'sidebar-promo.php'; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>