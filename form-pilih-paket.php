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
                    <?php echo do_shortcode('[wpforms id="144"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>