<?php
/*
Template Name: Pendaftaran Kelas Operator
*/


if (isset($_POST['submit'])) {
    $_POST['Submitted From'] = $_SERVER["REMOTE_ADDR"];
    $data = daftar_event($_POST, 21882);
    if (!$data) {
        ?>
        <script>
            window.location = "/terimakasih-expertclassoperator";
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

<section id="header-detailberita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        wpb_get_post_views(get_the_ID());
                        if (has_post_thumbnail()) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $news_src = $src[0];
                        }
                        ?>
                        <div class="title-header">
                            <?php
                            $postcategories = get_the_category();
                            if ($postcategories) {
                                $output = array();
                                foreach ($postcategories as $category) {
                                    $output[] = '<span><a class="category" href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                    unset($category);
                                }
                                echo implode(" | ", $output);
                            }
                            ?>
                            <h2 class="title">
                                <?php the_title() ?>
                            </h2>
                            <ul class="post-meta d-none">
                                <li class="meta-date"><i class="uil uil-schedule"></i>
                                    <?php the_time(' d F Y', '', ''); ?> &nbsp; . &nbsp;oleh
                                    <?php the_author(); ?></small>
                                </li>
                            </ul>
                        </div>
                        <?php
                        if (has_post_thumbnail()) { ?>
                            <img class="img-fluid" src="<?php
                            $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', TRUE);
                            $image_title = get_the_title(get_post_thumbnail_id($post->ID));
                            $image_caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
                            echo $news_src;
                            ?>"><?php } ?>
                    <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="content-detail">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <div class="content-section">
                    <?php //the_content(); ?>
                    <div class="no-js" lang="en-US" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/kelas-operator" method="post" class="init" aria-label="Contact form"
                            novalidate="novalidate" data-status="init">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                        <p>
                                            <label for="nama">Nama Lengkap & Gelar Peserta*</label><br>
                                            <span class="wpcf7-form-control-wrap" data-name="nama">
                                                <input size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                    id="nama" value="" type="text" name="nama">
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                        <p>
                                            <label for="email">Email*</label><br>
                                            <span class="wpcf7-form-control-wrap" data-name="email">
                                                <input size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                    id="email" value="" type="email" name="email">
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                        <p>
                                            <label for="nomorwa">Nomor Telephone / Whatsapp*</label><br>
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
                                            <label for="select-kampus">Nama Perguruan Tinggi (Tidak Disingkat)*</label>
                                            <input class="wpcf7-form-control wpcf7-hidden" id="kode-pt" value=""
                                                type="hidden" name="kode-pt">
                                            <input class="wpcf7-form-control wpcf7-hidden" id="nama-pt" value=""
                                                type="hidden" name="nama-pt">
                                            <span class="wpcf7-form-control-wrap" data-name="select2-pt">
                                                <select
                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required wp-select2 select2-hidden-accessible"
                                                    id="select2-pt" aria-required="true" aria-invalid="false"
                                                    name="select2-pt" data-select2-id="select2-data-select2-pt">
                                                </select>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group form-kontak wow fadeInRight" data-wow-delay="0.1s">
                                        <p>
                                            <label for="jabatan">Jabatan*</label><br>
                                            <span class="wpcf7-form-control-wrap" data-name="jabatan">
                                                <select
                                                    class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required form-control"
                                                    id="jabatan" name="jabatan">
                                                    <option value="">-- Pilih Jabatan Anda --</option>
                                                    <option value="Rektor/Direktur/Ketua">Rektor/Direktur/Ketua</option>
                                                    <option value="Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)">
                                                        Wakil Rektor/Direktur/Ketua Bidang 1 (Akademik)</option>
                                                    <option value="Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)">
                                                        Wakil Rektor/Direktur/Ketua Bidang 2 (Keuangan)</option>
                                                    <option
                                                        value="Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)">
                                                        Wakil Rektor/Direktur/Ketua Bidang 3 (Kemahasiswaan)</option>
                                                    <option
                                                        value="Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)">
                                                        Wakil Rektor/Direktur/Ketua Bidang 4 (Kerjasama/Inovasi/Lainnya)
                                                    </option>
                                                    <option value="Pimpinan Yayasan">Pimpinan Yayasan</option>
                                                    <option value="Kepala Biro/Bagian/Subbagian Akademik">Kepala
                                                        Biro/Bagian/Subbagian Akademik</option>
                                                    <option
                                                        value="Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder">
                                                        Kepala Bagian IT/Komputer/Data Informasi/PDDIKTI Feeder</option>
                                                    <option value="Senat Perguruan Tinggi">Senat Perguruan Tinggi
                                                    </option>
                                                    <option value="Ketua Penjaminan Mutu">Ketua Penjaminan Mutu</option>
                                                    <option value="==============================" disabled="disabled">
                                                        ==============================</option>
                                                    <option value="Dekan/Kajur/Kaprodi">Dekan/Kajur/Kaprodi</option>
                                                    <option value="Dosen">Dosen</option>
                                                    <option value="Tenaga Kependidikan/Staf/Admin Akademik">Tenaga
                                                        Kependidikan/Staf/Admin Akademik</option>
                                                    <option value="Humas Perguruan Tinggi">Humas Perguruan Tinggi
                                                    </option>
                                                    <option value="Operator & Tim IT Perguruan Tinggi">Operator
                                                        & Tim IT Perguruan Tinggi</option>
                                                    <option value="Mahasiswa/Penulis">Mahasiswa/Penulis</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
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
                                            <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                id="custom-captcha" autocomplete="off" aria-required="true"
                                                aria-invalid="false" value="" type="text" name="custom-captcha">
                                        </span>
                                        <input type="hidden" name="rand1" value="<?php echo $rand1 ?>">
                                        <input type="hidden" name="rand2" value="<?php echo $rand2 ?>">
                                    </p>
                                </div>


                                <div class="col-md-12 d-flex justify-content-center mt-4">
                                    <p><input
                                            class="wpcf7-form-control has-spinner wpcf7-submit btn-selengkapnya2 fadeInRight"
                                            type="submit" value="Daftar" name="submit">
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <p><label for="info" class="info"><br>
                                            <!-- Klik link di bawah ini jika mengalami kendala dalam pendaftaran
<a href="http://bit.ly/daftar-bimtek-profeeder">Daftar Bimtek Profeeder</a> 
//--><br>
                                        </label>
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
</div>
<div class="conten-tambahan">
    <section id="section-kolom-comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Komentar</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[gs-fb-comments]'); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    window.onload = function () {
        var $option = $('option:contains("==============================")');
        $option.attr('disabled', true);
    }
</script>

<script async>
        (function (s, u, m, o, j, v) {
            j = u.createElement(m);
            v = u.getElementsByTagName(m)[0];
            j.async = 1;
            j.src = o;
            j.dataset.sumoSiteId = '3d0c811e6f651c76f772b956ad69586e51670daa0027d0b608556eaac16e3141';
            v.parentNode.insertBefore(j, v)
        })(window, document, 'script', '//load.sumo.com/');
</script>
<script>
    (function ($) {
        setInterval(() => {
            $.each($('iframe'), (arr, x) => {
                let src = $(x).attr('src');
                if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                    $(x).remove();
                }
            });
        }, 300);
    })(jQuery);
</script>

<script src="https://cdn.jsdelivr.net/npm/clamp-js@0.7.0/clamp.min.js"></script>

<?php get_footer(); ?>

<script>

</script>