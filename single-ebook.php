<?php

if (isset($_POST['submit'])) {

    $_POST['Submit From'] = $_SERVER["REMOTE_ADDR"];
    $form_name = the_title('', '', false);
    $data = submit_form_berlangganan($_POST, $form_name);
    if (!$data) {
        ?>
        <script>

            // $('#download_ebook').click();
            var a = document.createElement('a');
            a.href = "<?php echo get_field('file_ebook') ?>";
            a.download = '<?php echo $form_name ?>';

            a.click();
            window.location.href = "/thankyou";
        </script>
        <?php
    }
    $error = true;
}

$rand1 = random_int(1, 9);
$rand2 = random_int(1, 9);
$hasil = $rand1 + $rand2;

get_header();
?>

<!-- 
<div class="alert alert-success alert-ebook fade show" role="alert">
    <strong>Berhasil mengisi form.</strong> Ebook akan dikirimkan ke email Anda.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div> -->

<main class="ebook-page">

    <section id="header-single-ebook">
        <div class="container">
            <div class="row">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        wpb_get_post_views(get_the_ID());
                        if (has_post_thumbnail()) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $news_src = $src[0];
                        }
                        ?>
                        <div class="col col-12 col-sm-4 left">
                            <img class="cover-image" src="<?php
                            if (has_post_thumbnail()) {
                                $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', TRUE);
                                $image_title = get_the_title(get_post_thumbnail_id($post->ID));
                                $image_caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
                                echo $news_src;
                            } else {
                                echo " ", get_template_directory_uri(), "/img/default.png ";
                            } ?>">

                        </div>
                        <div class="col col-12 col-sm-8 right">
                            <h1 class="title-ebook">
                                <?php the_title() ?>
                            </h1>
                            <p class="abstrak-ebook">
                                <?php echo get_field('abstrak_ebook'); ?>
                            </p>
                            <div class="button-selengkapnya">
                                <a class="btn btn-red" href="#form-download">Download Ebook</a>
                            </div>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </div>
    </section>

    <section id="ebook-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12">
                    <div class="content-section">
                        <?php the_content(); ?>
                        <h3 class="title-form" id="form-download">TERIMA KASIH atas kontribusi Anda dalam memajukan
                            pendidikan di
                            Indonesia!<br>Yuk, download Ebooknya. GRATIS!</h3>
                        <div class="no-js" id="wpcf7-f21203-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" class="wpcf7-form init"
                                aria-label="Contact form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                            <p>
                                                <label for="nama">Nama Lengkap & Gelar*</label><br>
                                                <span class="wpcf7-form-control-wrap" data-name="nama">
                                                    <input size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                        id="nama" aria-required="true" aria-invalid="false" value=""
                                                        type="text" name="nama">
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                            <p><label for="email">Email*</label><br>
                                                <span class="wpcf7-form-control-wrap" data-name="email">
                                                    <input size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                        id="email" aria-required="true" aria-invalid="false" value=""
                                                        type="email" name="email">
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                            <p><label for="nomorwa">Nomor Telephone / Whatsapp*</label><br>
                                                <span class="wpcf7-form-control-wrap" data-name="no-wa">
                                                    <input size="40"
                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                                        id="no-wa" aria-required="true" aria-invalid="false" value=""
                                                        type="tel" name="no-wa">
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                            <p>
                                                <label for="select-kampus">Perguruan Tinggi*</label>
                                                <input class="wpcf7-form-control wpcf7-hidden" id="kode-pt" value=""
                                                    type="hidden" name="kode-pt">
                                                <input class="wpcf7-form-control wpcf7-hidden" id="nama-pt" value=""
                                                    type="hidden" name="nama-pt">
                                                <span class="wpcf7-form-control-wrap" data-name="select2-pt">
                                                    <select
                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control wp-select2"
                                                        id="select2-pt" aria-required="true" aria-invalid="false"
                                                        name="select2-pt" data-select2-id="select2-data-select2-pt">
                                                    </select>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                            <p><label for="jabatan">Jabatan*</label><br>
                                                <span class="wpcf7-form-control-wrap" data-name="jabatan">
                                                    <select
                                                        class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                        id="jabatan" aria-required="true" aria-invalid="false"
                                                        name="jabatan">
                                                        <option value="">-- Pilih Jabatan Anda --</option>
                                                        <option value="Rektor/Direktur/Ketua">Rektor/Direktur/Ketua
                                                        </option>
                                                        <option value="Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)">
                                                            Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)</option>
                                                        <option value="Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)">
                                                            Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)</option>
                                                        <option
                                                            value="Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)">
                                                            Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)
                                                        </option>
                                                        <option
                                                            value="Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)">
                                                            Wakil Rektor/Direktur/Ketua Bidang 4
                                                            (Kerjasama/Inovasi/Lainnya)</option>
                                                        <option value="Pimpinan Yayasan">Pimpinan Yayasan</option>
                                                        <option value="Kepala Biro/Bagian/Subbagian Akademik">Kepala
                                                            Biro/Bagian/Subbagian Akademik</option>
                                                        <option
                                                            value="Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder">
                                                            Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder
                                                        </option>
                                                        <option value="Senat Perguruan Tinggi">Senat Perguruan Tinggi
                                                        </option>
                                                        <option value="Ketua Penjaminan Mutu">Ketua Penjaminan Mutu
                                                        </option>
                                                        <option value="Dekan/Kajur/Kaprodi">Dekan/Kajur/Kaprodi</option>
                                                        <option value="Dosen">Dosen</option>
                                                        <option value="Tenaga Kependidikan/Staf/Admin Akademik">Tenaga
                                                            Kependidikan/Staf/Admin Akademik</option>
                                                        <option value="Humas Perguruan Tinggi">Humas Perguruan Tinggi
                                                        </option>
                                                        <option value="Operator; Tim IT Perguruan Tinggi">Operator; Tim
                                                            IT Perguruan Tinggi</option>
                                                        <option value="Mahasiswa/Penulis">Mahasiswa/Penulis</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" name="rand1" value="<?php echo $rand1 ?>">
                                        <input type="hidden" name="rand2" value="<?php echo $rand2 ?>">
                                    </div>

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

                                    <div class="col-md-12 d-flex justify-content-center">
                                        <p>
                                            <input
                                                class="wpcf7-form-control has-spinner wpcf7-submit btn-selengkapnya2 fadeInRight"
                                                type="submit" name="submit" value="Download Ebook">
                                        </p>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="rekomendasi-ebook">
        <div class="container">
            <div class="title-section">
                <h3>Rekomendasi Ebook Lainnya</h3>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row rekomendasi-ebook">
                        <?php
                        $related = get_posts(
                            array(
                                'post_type' => 'ebook',
                                'category__in' => wp_get_post_categories($post->ID),
                                'orderby' => 'rand',
                                'numberposts' => 3,
                                'post__not_in' => array($post->ID)
                            )
                        );
                        if ($related) {
                            foreach ($related as $post) {
                                setup_postdata($related);
                                $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumb-ebook');
                                $related_src = $src[0];
                                ?>
                                <div class="card col-6 col-md-3">
                                    <a href="<?php the_permalink(); ?>">
                                        <img class="card-img-top" src="<?php
                                        if (has_post_thumbnail()) {
                                            echo $related_src;
                                        } else {
                                            // echo " ", get_template_directory_uri(), "/img/default.png ";
                                        } ?>" alt="">
                                    </a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" target="blank">
                                            <h3 class="title-ebook">
                                                <?php the_title() ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="link-list">

                <a href="https://sevima.com/ebook/">
                    <h4>Lihat Ebook Premium Lainnya</h4>
                </a>
            </div>
    </section>


    <!-- CTA -->
    <section id="cta-siakadcloud">
        <div class="container">
            <div class="row">
                <!-- <img id="topleft"src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/topleft.svg" alt=""> -->
                <img id="topright" src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/topright.svg"
                    alt="">
                <img id="botright" src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/botright.svg"
                    alt="">
                <div class="col-lg-5 left">
                    <div class="mockup">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ebook/siakad-ad/mockup-siakadcloud.png"
                            alt="Mockup">
                    </div>
                </div>
                <div class="col-lg-7 right">
                    <h2>Kesulitan Mengelola Kampus?</h2>
                    <p>Dapatkan Sistem Informasi Akademik (SiakadCloud) yang dapat memudahkan Anda dalam mengelola
                        administrasi akademik di pendidikan tinggi (Universitas, Sekolah Tinggi, Institut, Politeknik,
                        Akademi, dll.) dengan 99% keberhasilan implementasi.</p>
                    <div class="cta-button">
                        <a href="https://siakadcloud.com/" class="btn btn-primary"><span class="d-none d-sm-block">Lebih
                                lanjut tentang SiakadCloud</span><span class="d-sm-none">Lihat SiakadCloud</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/pages/ebook.js?20220311"></script>