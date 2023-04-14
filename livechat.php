<?php
/*
Template Name: Livechat
*/
?>
<?php get_header(); ?>
<section class="livechat">
    <div class="container">
        <div class="title">
            <h2 class="title-header">Livechat SEVIMA</h2>
            <p class="desc">Support untuk klien pengguna SEVIMA. Silahkan pilih produk yang Anda gunakan</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/SEVI - LOGOUT 1.png" class="img-mobile img-fluid" alt="">
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="grid-livechat">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/produk/siakadcloud.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SEVIMA-siAkadCloud</h5>
                            <a href="http://support.sevima.com/siakadcloud" target="_blank" class="btn btn-livechat">Chat Sekarang</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/produk/gofeeder.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SEVIMA-GOfeedercloud</h5>
                            <a href="http://support.sevima.com/gofeedercloud" target="_blank" class="btn btn-livechat">Chat Sekarang</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/produk/profeeder.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SEVIMA-PROfeeder</h5>
                            <a href="http://support.sevima.com/profeeder" target="_blank" class="btn btn-livechat">Chat Sekarang</a>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/produk/sevimapay.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SEVIMA-SevimaPAY</h5>
                            <a href="http://support.sevima.com/sevimapay" target="_blank" class="btn btn-livechat">Chat Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>