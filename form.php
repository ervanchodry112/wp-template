<?php
/*
Template Name: Form-new
*/
if (isset($_POST['submit'])) {
	$_POST['Submitted From'] = $_SERVER["REMOTE_ADDR"];
	$data = daftar_event($_POST, 1348);
	if (!$data) {
?>
		<script>
			window.location = "/terima-kasih-telah-mendaftar-bimtek-sevima";
		</script>
<?php
	}
	$error = true;
}


$rand1 = random_int(1, 9);
$rand2 = random_int(1, 9);
$hasil = $rand1 + $rand2;

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
					<?php //echo do_shortcode('[contact-form-7 id="1348" title="Contact form 1"]');
					?>
					<div class="no-js" lang="en-US" dir="ltr">
						<div class="screen-reader-response">
							<p role="status" aria-live="polite" aria-atomic="true"></p>
							<ul></ul>
						</div>
						<form action="/kontak-kami" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">
							<div style="display: none;"></div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="nama">Nama*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="nama">
												<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="nama" autocomplete="off" aria-required="true" aria-invalid="false" value="" type="text" name="nama"></span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="source-info">Mengetahui info SEVIMA dari*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="source-info">
												<select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2" id="select2-source-info" autocomplete="off" aria-required="true" aria-invalid="false" name="source-info">
													<option value=""></option>
													<option value="Rekomendasi Teman / Rekan">Rekomendasi Teman / Rekan</option>
													<option value="Website SEVIMA">Website SEVIMA</option>
													<option value="Penelurusan Google">Penelurusan Google</option>
													<option value="Facebook">Facebook</option>
													<option value="Instagram">Instagram</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="nama">Email*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="email-95">
												<input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" autocomplete="off" aria-required="true" aria-invalid="false" value="" type="email" name="email-95"></span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="telp">No Telp*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="telp"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="telp" autocomplete="off" aria-required="true" aria-invalid="false" value="" type="tel" name="telp"></span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="select-kampus">Perguruan Tinggi*</label>
											<input class="wpcf7-form-control wpcf7-hidden" id="kode-pt" value="" type="hidden" name="kode-pt">
											<input class="wpcf7-form-control wpcf7-hidden" id="nama-pt" value="" type="hidden" name="nama-pt">
											<span class="wpcf7-form-control-wrap" data-name="select2-pt">
												<select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible" id="select2-pt" autocomplete="off" aria-required="true" aria-invalid="false" name="select2-pt" data-select2-id="select2-data-select2-pt">
												</select>
											</span>
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
										<p><label for="jabatan ">Jabatan*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="jabatan"><select class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible" id="select2-jabatan" autocomplete="off" aria-required="true" aria-invalid="false" name="jabatan" data-select2-id="select2-data-select2-jabatan">
													<option value="" data-select2-id="select2-data-4-7xtt"></option>
													<option value="Rektor/Direktur/Ketua">Rektor/Direktur/Ketua</option>
													<option value="Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)">Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)</option>
													<option value="Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)">Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)</option>
													<option value="Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)">Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)</option>
													<option value="Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)">Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)</option>
													<option value="Pimpinan Yayasan">Pimpinan Yayasan</option>
													<option value="Kepala Biro/Bagian/Subbagian Akademik">Kepala Biro/Bagian/Subbagian Akademik</option>
													<option value="Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder">Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder</option>
													<option value="Senat Perguruan Tinggi">Senat Perguruan Tinggi</option>
													<option value="Ketua Penjaminan Mutu">Ketua Penjaminan Mutu</option>
													<option value="Dekan/Kajur/Kaprodi">Dekan/Kajur/Kaprodi</option>
													<option value="Dosen">Dosen</option>
													<option value="Tenaga Kependidikan/Staf/Admin Akademik">Tenaga Kependidikan/Staf/Admin Akademik</option>
													<option value="Humas Perguruan Tinggi">Humas Perguruan Tinggi</option>
													<option value="Operator &amp; Tim IT Perguruan Tinggi">Operator &amp; Tim IT Perguruan Tinggi</option>
													<option value="Mahasiswa/Penulis">Mahasiswa/Penulis</option>
													<option value="Lainnya">Lainnya</option>
												</select>
											</span>
										</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.6s">
										<p><label for="nama">Pesan*</label><br>
											<span class="wpcf7-form-control-wrap" data-name="pesan">
												<textarea cols="40" rows="5" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" id="pesan" autocomplete="off" aria-required="true" aria-invalid="false" name="pesan"></textarea>
											</span>
										</p>
									</div>
								</div>
								<div class="col-12 form-group">
									<p>
										<label for="custom-captcha">Kerjakan penjumlahan berikut: <br>
											<?php echo "$rand1 + $rand2"
											?>
										</label><br>

										<span class="wpcf7-form-control-wrap">
											<input size="40" class="wpcf7-form-control wpcf7-text form-control" id="custom-captcha" autocomplete="off" aria-required="true" aria-invalid="false" value="" type="text" name="custom-captcha">
										</span>
										<input type="hidden" name="rand1" value="<?php echo $rand1 ?>">
										<input type="hidden" name="rand2" value="<?php echo $rand2 ?>">
									</p>
								</div>
								<div class="col-md-12">
									<p><input class="wpcf7-form-control has-spinner wpcf7-submit btn-selengkapnya2 fadeInRight" type="submit" value="Kirim">
									</p>
								</div>
							</div>
							<div class="wpcf7-response-output" aria-hidden="true"></div>
							<input type="hidden" name="USOURCE" value="">
							<input type="hidden" name="UMEDIUM" value="">
							<input type="hidden" name="UCAMPAIGN" value="">
							<input type="hidden" name="UCONTENT" value="">
							<input type="hidden" name="UTERM" value="">
							<input type="hidden" name="IUSOURCE" value="">
							<input type="hidden" name="IUMEDIUM" value="">
							<input type="hidden" name="IUCAMPAIGN" value="">
							<input type="hidden" name="IUCONTENT" value="">
							<input type="hidden" name="IUTERM" value="">
							<input type="hidden" name="IGCLID" value="">
							<input type="hidden" name="IMSCLKID" value="">
							<input type="hidden" name="IFBCLID" value="">
							<input type="hidden" name="IPLACE" value="">
							<input type="hidden" name="INET" value="">
							<input type="hidden" name="IMATCH" value="">
							<input type="hidden" name="IREFERRER" value="direct">
							<input type="hidden" name="LREFERRER" value="direct">
							<input type="hidden" name="ILANDPAGE" value="https%3A//sevima.com/kontak-kami/">
							<input type="hidden" name="VISITS" value="1">
						</form>
					</div>
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