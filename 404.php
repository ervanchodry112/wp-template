<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<div class="header mb-5">
        <div class="container">
            <div class="row" >
                <div class="col-md-6">
                    <div class="header__media" style="width: 80%; height: 80%;">
                        <img src="<?php echo get_template_directory_uri(); ?>/404/img/notfound.png" alt="">
                    </div>
                </div>
    
                <div class="col-md-6" style="padding-top: 8rem;">
					<h1 class="main-color font-weight-bold" style="font-size: 48px;">Tujuanmu tidak ditemukan | Error 404</h1>
                    
                    <p class="my-4 lead" style="font-size: 24px;">
                        Maaf, halaman yang kamu tuju tidak ditemukan<br>
						Periksa kembali link yang kamu tuju atau kembali ke halaman utama
                    </p>
    
                    <a href="<?php echo home_url(); ?>"> <button type="button" class="btn btn__custom btn__custom__outline py-2 px-5">Halaman Utama</button></a>

                    
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>