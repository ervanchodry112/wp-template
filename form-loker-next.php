<?php
/*
Template Name: Form Loker Next
*/
?>
<?php get_header(); ?>
    <section class="header-text-loker">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6">
					<h1 class="title">Form Pelamar PT Sentra Vidya Utama</h1>
					<p>Selamat datang pelamar PT Sentra Vidya Utama (Sevima). PT Sentra Vidya Utama
						(SEVIMA) merupakan perusahaan konsultan dan pengembang teknologi informasi yang
						didirikan pada tahun 2004. Didukung oleh tenaga ahli muda yang kompeten, inovatif dan
						profesional yang berpengalaman di bidangnya. SEVIMA memiliki bidang fokus dalam
						sektor Edukasi dan sektor Pemerintahan.
					</p>
					<br>
					<p>Silahkan isi data diri anda pada form yang telah kami sediakan. Pastikan kembali seluruh
						informasi yang ada berikan sebelum melakukan submit jawaban anda. Jika anda lolos
						seleksi akan kami hubungi melalui email <a href=""><b> hr@sevima.co.id</b></a>
					</p>
					<br>
					<p>Seluruh proses seleksi SEVIMA gratis tanpa dipungut biaya. Harap berhati-hati dengan
						pihak lain yang mengatas namakan PT Sentra Vidya Utama (SEVIMA) dan meminta
						sejumlah uang dan bentuk lainnya.
					</p>
					<br>
					<p><b>Semoga Sukses</b></p>
				</div>
				<div class="col-12 col-lg-6 mt-5">
					<img src="<?php echo get_template_directory_uri(); ?>/img/untung-karir.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="form-lamaran">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-5">
					<div class="sidebar-item">
						<div class="make-me-sticky">
						  <img src="<?php echo get_template_directory_uri(); ?>/img/untung-karir.png" class="img-fluid" alt="">
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-7">				
                    <?php echo do_shortcode( '[contact-form-7 id="12905" title="Loker-step2"]' ); ?>					
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>