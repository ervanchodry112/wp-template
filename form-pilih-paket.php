<?php
/*
Template Name: Pilih Paket
*/

if (isset($_POST['submit'])) {

    $_POST['ip'] = $_SERVER["REMOTE_ADDR"];
    $data = submit_form_berlangganan($_POST, "Formulir Berlangganan");
    if (!$data) {
        ?>
        <script>
            window.location = "/thankyou";
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


<?= $error ?>

<section id="hero-mitra">
    <div class="container">
        <div class="row header">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h1 class="mb-3">Siap Menjadi Kampus Berbasis Digital?</h1>
                <p style="color: #fff; font-size: 20px; width: 80%;">Jadwalkan demo pelatihan Sevima Platform
                    untuk mulai
                    mengelola seluruh kegiatan dan operasional kampus Anda sendiri hari ini</p>
            </div>
        </div>
    </div>
</section>

<section id="form-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12 col-lg-8">
                <div class="pf-contactForm">
                    <!-- <?php // echo do_shortcode('[contact-form-7 id="1841" title="Pilih Paket"]'); ?> -->

                    <div class="wpcf7 no-js" id="wpcf7-f22377-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/form-berlangganan" method="post" class="wpcf7-form init"
                            aria-label="Contact form" novalidate="novalidate" data-status="init">
                            <input type="hidden" name="rand1" value="<?php echo $rand1 ?>">
                            <input type="hidden" name="rand2" value="<?php echo $rand2 ?>">
                            <div style="display: none;">
                            </div>
                            <h6 class="subheading">Bantu Kami Menghubungi Anda
                            </h6>
                            <p class="lead"><br>
                                Isi form di bawah untuk mendapatkan penawaran produk SEVIMA yang sesuai dengan<br>
                                kebutuhan perguruan tinggi Anda.
                            </p>
                            <div class="form-group">
                                <p><label for="id:nama-lengkap">Nama Lengkap*</label><br>
                                    <span class="wpcf7-form-control-wrap" data-name="nama-lengkap">
                                        <input size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                            id="nama-lengkap" autocomplete="off" aria-required="true"
                                            aria-invalid="false" value="" type="text" name="nama-lengkap"
                                            value="<?= $error ? $data['nama-lengkap'] : '' ?>">
                                    </span>
                                </p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <p><label for="id:email">Email*</label><br>
                                        <span class="wpcf7-form-control-wrap" data-name="email">
                                            <input size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                id="email" autocomplete="off" aria-required="true" aria-invalid="false"
                                                value="" type="email" name="email"
                                                value="<?= $error ? $data['email'] : '' ?>">
                                        </span>
                                    </p>
                                </div>
                                <div class="form-group col-md-6">
                                    <p><label for="telp">No Telepon*</label><br>
                                        <span class="wpcf7-form-control-wrap" data-name="telp">
                                            <input size="40"
                                                class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                                id="telp" autocomplete="off" aria-required="true" aria-invalid="false"
                                                value="" type="tel" name="telp"
                                                value="<?= $error ? $data['telp'] : '' ?>">
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="form-group">
                                <p><label for="select2-pt">Nama Perguruan Tinggi*</label>
                                    <span class="wpcf7-form-control-wrap" data-name="select2-pt">
                                        <select
                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible"
                                            id="select2-pt" autocomplete="off" aria-required="true" aria-invalid="false"
                                            name="select2-pt" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-select2-pt">
                                        </select>
                                        <input type="hidden" name="nama-pt" id="nama-pt">
                                        <input type="hidden" name="kode-pt" id="kode-pt">
                                    </span>
                                </p>
                            </div>
                            <div class="form-group">
                                <p><label for="inputState">Jabatan di Perguruan Tinggi*</label><br>
                                    <span class="wpcf7-form-control-wrap" data-name="jabatan">
                                        <select
                                            class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible"
                                            id="select2-jabatan" autocomplete="off" aria-required="true"
                                            aria-invalid="false" name="jabatan"
                                            data-select2-id="select2-data-select2-jabatan" tabindex="-1"
                                            aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-4-v566"></option>
                                            <option value="Rektor/Direktur/Ketua">Rektor/Direktur/Ketua</option>
                                            <option value="Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)">Wakil
                                                Rektor/Direktur/Ketua Bidang 1 (Akademik)</option>
                                            <option value="Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)">Wakil
                                                Rektor/Direktur/Ketua Bidang 2 (Keuangan)</option>
                                            <option value="Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)">Wakil
                                                Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)</option>
                                            <option
                                                value="Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)">
                                                Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)
                                            </option>
                                            <option value="Pimpinan Yayasan">Pimpinan Yayasan</option>
                                            <option value="Kepala Biro/Bagian/Subbagian Akademik">Kepala
                                                Biro/Bagian/Subbagian Akademik</option>
                                            <option value="Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder">
                                                Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder</option>
                                            <option value="Senat Perguruan Tinggi">Senat Perguruan Tinggi</option>
                                            <option value="Ketua Penjaminan Mutu">Ketua Penjaminan Mutu</option>
                                            <option value="Dekan/Kajur/Kaprodi">Dekan/Kajur/Kaprodi</option>
                                            <option value="Dosen">Dosen</option>
                                            <option value="Tenaga Kependidikan/Staf/Admin Akademik">Tenaga
                                                Kependidikan/Staf/Admin Akademik</option>
                                            <option value="Humas Perguruan Tinggi">Humas Perguruan Tinggi</option>
                                            <option value="Operator ; Tim IT Perguruan Tinggi">Operator ;
                                                Tim IT Perguruan Tinggi</option>
                                            <option value="Mahasiswa/Penulis">Mahasiswa/Penulis</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <p><label for="select2-jmlmhs">Berapa jumlah mahasiswa di kampus Anda?*</label><br>
                                        <span class="wpcf7-form-control-wrap" data-name="jumlah-mahasiswa">
                                            <select
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible"
                                                id="select2-jmlmhs" autocomplete="off" aria-required="true"
                                                aria-invalid="false" name="jumlah-mahasiswa"
                                                data-select2-id="select2-data-select2-jmlmhs" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-6-nvzb"></option>
                                                <option value="< 800">800</option>
                                                <option value="800 - 1500">800 - 1500</option>
                                                <option value="1500 - 4000">1500 - 4000</option>
                                                <option value="4000 - 10000">4000 - 10000</option>
                                            </select>
                                        </span>
                                    </p>
                                </div>
                                <div class="form-group col-md-6">
                                    <p><label for="select2-sumberInfo">Sumber info SEVIMA*</label><br>
                                        <span class="wpcf7-form-control-wrap" data-name="sumberInfo">
                                            <select
                                                class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible"
                                                id="select2-sumberInfo" autocomplete="off" aria-required="true"
                                                aria-invalid="false" name="sumberInfo"
                                                data-select2-id="select2-data-select2-sumberInfo" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="" data-select2-id="select2-data-8-4edd"></option>
                                                <option value="Rekomendasi Teman / Rekan">Rekomendasi Teman / Rekan
                                                </option>
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
                            <div class="row">
                                <div class="col-12 form-group">
                                    <p>
                                        <label for="custom-captcha">Kerjakan penjumlahan berikut: <br>
                                            <?php echo "$rand1 + $rand2"
                                                ?>
                                        </label><br>

                                        <span class="wpcf7-form-control-wrap">
                                            <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                id="custom-captcha" autocomplete="off" aria-required="true"
                                                aria-invalid="false" value="" type="text" name="custom-captcha">
                                        </span>
                                    </p>
                                </div>
                            </div>

                            <p>
                                <input class="wpcf7-form-control has-spinner btn btn-kirim btn-lg btn-block"
                                    type="submit" value="Kirim Permintaan" name="submit">
                            </p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>