<?php
/*
Template Name: Form-new
*/
?>
<?php get_header(); ?>

<section id="kontak-kami">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-12 maps-form">
				<div class="maps-overlay"></div>
				<div class="maps wow fadeInLeft">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.234159166876!2d112.79237461438154!3d-7.32757637409662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fabc4f299e59%3A0x2c2f04621ff5e501!2sSEVIMA!5e0!3m2!1sid!2sid!4v1534154675996" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-lg-7 col-12 order-first order-md-last">
				<div class="kontak-kami">
					<h3 class="wow fadeInUp" data-wow-delay="0.1s">Kontak Kami</h3>
					<div class="border-red wow fadeInUp" data-wow-delay="0.150s"></div>
					<p class="wow fadeInUp" data-wow-delay="0.170s">Kirim pesan anda, data dengan tanda (*) wajib diisi.
					</p>
					<!-- <form action="" method="get" accept-charset="utf-8">
							<div class="col-md-6">
								<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.2s">
									<label for="nama">Nama*</label>
									<input type="text" class="form-control" id="nama" name="nama">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.3s">
									<label for="nama">Email*</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.4s">
									<label for="nama">Instansi*</label>
									<input type="text" class="form-control" id="instansi" name="instansi">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.5s">
									<label for="nama">No Telp*</label>
									<input type="text" class="form-control" id="telp" name="telp">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.6s">
									<label for="nama">Pesan*</label>
									<textarea class="form-control" rows="5" id="pesan"></textarea>
								</div>
							</div>
							<button type="input" class="btn-selengkapnya2 fadeInRight" data-wow-delay="0.7s">Kirim</button>
						</form> -->
					<?php echo do_shortcode('[contact-form-7 id="1348" title="Contact form 1"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
<script>
	$(document).ready(function() {
		$('input').on("cut copy paste", function(e) {
			e.preventDefault();
		});
	});
</script>