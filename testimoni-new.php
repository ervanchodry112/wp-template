<?php
/*
Template Name: Testimoni New
*/
?>

<?php get_header(); ?>
<section id="section-header-testimoni">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="title-header">
                    <span>— Testimoni</span>
                    <h2>Surat Cinta
                        <br>dari Mitra.</h2>
                    <p>
                        Kami sangat mengapresiasi segala bentuk kerjasama
                        yang ada antara SEVIMA dengan Perguruan Tinggi
                        di Indonesia.
                        <br>
                        <br>
                        Dan sudah menjadi misi kami untuk merevolusi Pendidikan di Indonesia melalui Teknologi.
                    </p>
                    <div class="button-selengkapnya">
                        <a class="btn btn-primary" href="#section-video-testimoni">Apa kata mereka tentang SEVIMA?</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 nopading">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-header-testimoni.png" class="gbr-header img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

<section id="section-video-testimoni" style="padding-top: 7rem; padding-bottom: 4rem">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-10">
                <div class="title">
                    <h2>Simak kata mereka tentang SEVIMA</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="video-testimoni">
                    <div class="video">
                        <div class="btn-playvideo">
                            <button type="button" class="video-btn" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/4rZ1TKrlteQ" data-target="#myModal">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/play.png"
                                    class="img-fluid gbr-yutub" alt="">
                            </button>

                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/its.jpg"
                            class="img-fluid gbr-yutub" alt="">
                    </div>
                    <div class="text">
                        <blockquote>
                            <p class="pt-5">
                                Memiliki sekitar 22.000 mahasiswa, dalam urusan pelaporan ke PDDikti sangat terbantu
                                oleh  SEVIMA ProFeeder. Selain itu, ProFeeder juga memberikan kemudahan dalam menangani
                                studi kasus data akademik alumni.
                            </p>
                        </blockquote>
                        <br>
                        <div class="desc">
                            <h6 class="nama-testimoni">Inayati Fajriyah</h6>
                            <p class="universitas-testimoni">ITS Surabaya</p>
                        </div>
                    </div>
                </div>            
            </div>
       
            <div class="col-12">
            <div class="video-testimoni">
                
                    <div class="video">
                        <div class="btn-playvideo">
                            <button type="button" class="video-btn" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/sE6GyChI_R4" data-target="#myModal">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/play.png"
                                    class="img-fluid gbr-yutub" alt="">
                            </button>

                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/uinsa.jpg"
                            class="img-fluid gbr-yutub" alt="">
                    </div>
                    <div class="text">
                        <blockquote>
                            <p class="pt-5">
                                siAkad Enterprise termasuk didalamnya Sistem PMB Online, sangat membantu di tengah pandemi COVID-19. 
                                Mahasiswa tidak perlu ke kampus lagi. Selain itu, komunikasi yang baik juga merupakan kunci sukses pelaksanaan PMB Online.
                            </p>
                        </blockquote>
                        <br>
                        <div class="desc">
                            <h6 class="nama-testimoni">Dr. Imas Maesaroh, Dip,IM-Lib., M.Lib., Ph.D.</h6>
                            <p class="universitas-testimoni">Kepala PUSTIPD UIN Sunan Ampel Surabaya</p>
                        </div>
                    </div>
                </div>  
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">


                        <div class="modal-body">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-tab-testimoni">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="pt-5">
                    <!-- Lined tabs-->
                    <ul id="myTab2" role="tablist"
                        class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                        <li class="nav-item flex-sm-fill">
                            <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2"
                                aria-selected="true" class="nav-link mr-sm-3 rounded-0 active"><?php echo $term->name; ?>Semua produk</a>
                        </li>
                        <?php
                            $taxonomy = 'ctg_testimoninew';
                            $terms = get_terms($taxonomy);

                            if ( $terms && !is_wp_error( $terms ) ) :
                            ?>
			                    <?php foreach ( $terms as $term ) { ?>
			                        <li class="nav-item flex-sm-fill"><a class="nav-link  mr-sm-3 rounded-0" href="#<?php echo $term->slug; ?>" data-toggle="tab"><?php echo $term->name; ?></a></li>
			                    <?php } ?>
			            <?php endif;?>
                    </ul>

                    <div id="myTab2Content" class="tab-content">                        
                        <div id="home2" role="tabpanel" aria-labelledby="home-tab"
                            class="tab-pane fade px-4 py-5 show active">
                            <div class="grid-card" id="video-gallery">                        
                                <?php
					                  query_posts( array(
                                        'post_type' => 'testimoni_new',	
                                        'orderby' => 'date',  
                                        'posts_per_page' => -1
					                  ) );
					                  if ( have_posts() ) :
					              ?>
									<?php while ( have_posts() ) : the_post(); 
					              	if ( has_post_thumbnail() ) {
									$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
									$news_src = $src[0];
									}
                                  ?>
                                  
                                  <?php 
                                    $iframe = get_field('link_video');
                                    $match = explode("embed/",$iframe);
                                ?>
                                <div class="card">
                                    <div class="card-body text-center">    
                                        <?php
                                            $posttags = get_the_terms($post->ID, 'ctg_testimoninew');    
                                            if ($posttags) {
                                              foreach($posttags as $tag) {
                                                echo '<span class="tag tag-blue">' .$tag->name. '</span>'; 
                                              }
                                            }
                                        ?>                                                          
                                        <p class="card-text"><?php the_content();?></p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="pentagon-shape">
                                            <img src="<?php
                                                    if ( has_post_thumbnail() ) {
                                                    echo $news_src;
                                                    }  else {
                                                    echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                                                                                }?>" class="img-fluid gbr-profpic"
                                                alt="...">
                                        </div>
                                        <div class="desc">                                        
                                            <h6 class="nama-testimoni"><?php echo get_field('nama_testimoni'); ?></h6>
                                            <p class="universitas-testimoni"><?php the_title() ?></p>
                                            <button type="button" class="video-btn" data-toggle="modal"
													data-src="<?php echo get_field('link_video'); ?>" data-target="#myModal">
													<span class="mr-2"><i class="fa fa-play-circle"></i></span>Lihat video
											</button>
                                        </div>                                       
                                    </div>
                                </div>
                                <?php endwhile; ?>
									<?php else : ?>
									<div align="center">
										Post yang sesuai dengan kriteria anda tidak ditemukan.
									</div>
								<?php endif; ?>
                            </div>
                        </div>
                        
                        <?php
                            $taxonomy = 'ctg_testimoninew';
                            $terms = get_terms($taxonomy);

                            if ( $terms && !is_wp_error( $terms ) ) :
                        ?>    

                        <?php foreach ( $terms as $term ) { ?>
                            <div id="<?php echo $term->slug; ?>" role="tabpanel" aria-labelledby="home-tab"
                            class="tab-pane fade px-4 py-5 show">
                                <div class="grid-card" id="video-gallery">                                                            
                                    <?php
                                        query_posts( array(
                                        'post_type' => 'testimoni_new',
                                        'ctg_testimoninew' => $term->slug
                                        ) );
                                        if ( have_posts() ) :
					                ?>
                                        <?php while ( have_posts() ) : the_post(); 
                                        if ( has_post_thumbnail() ) {
                                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                        $news_src = $src[0];
                                        }
                                    ?>
                                    
                                    <?php 
                                        $iframe = get_field('link_video');
                                        $match = explode("embed/",$iframe);
                                    ?>
                                    <div class="card">
                                        <div class="card-body text-center"> 
                                        <?php
                                                        $posttags = get_the_terms($post->ID, 'ctg_testimoninew');
                                                        if ($posttags) {
                                                        foreach($posttags as $tag) {
                                                            echo '<span class="tag tag-blue">' .$tag->name. '</span>'; 
                                                            }
                                                        }
                                                    ?>
                                            <p class="card-text"><?php the_content();?></p>
                                        </div>
                                        <div class="card-footer">                                            
                                                <div class="pentagon-shape">
                                                <img src="<?php
                                                    if ( has_post_thumbnail() ) {
                                                    echo $news_src;
                                                    }  else {
                                                    echo " ", get_template_directory_uri(), "/img/default-promo.png ";
                                                                                                                }?>" class="img-fluid gbr-profpic"
                                                alt="...">
                                                </div>
                                                <div class="desc">                                                   
                                                    <h6 class="nama-testimoni"><?php echo get_field('nama_testimoni'); ?></h6>
                                                    <p class="universitas-testimoni"><?php the_title() ?></p>
                                                    <button type="button" class="video-btn" data-toggle="modal"
                                                            data-src="<?php echo get_field('link_video'); ?>" data-target="#myModal">
                                                            <span class="mr-2"><i class="fa fa-play-circle"></i></span>Lihat video
                                                    </button>
                                                </div> 
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                        <?php else : ?>
                                        <div align="center">
                                            Post yang sesuai dengan kriteria anda tidak ditemukan.
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php } ?>
                        <?php endif;?>                        
                    </div>
                    <!-- End lined tabs -->
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-gambar-testimoni">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <div class="title">
                    <h2>Masih Banyak Cerita dari Mereka bersama SEVIMA</h2>
                </div>
            </div>
            <div class="grid-gambar-testimoni">
                    <?php 
                            query_posts( array(
                            'post_type' => 'testimoni_gambar',
                            'posts_per_page' => 3              
                            ));
                            if (have_posts()) : while (have_posts()) : the_post(); 
                            if ( has_post_thumbnail() ) {
                            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-testimoni-gambar');
                            $news_src = $src[0];
                            }
                        ?>
                    <div class="card-gambartestimoni">
                    <img class="img-fluid" src="<?php
                                if ( has_post_thumbnail() ) { 
                                echo $news_src;
                                }  else {
                                echo " ", get_template_directory_uri(), "/img/logo.png";
                                }?>" alt="">
                                <div class="caption">
                                    <p><?php the_title() ?></p>
                                </div>
                    </div>
                    <?php
                            endwhile;
                            endif;
                        ?>
                </div>
        </div>
    </div>
</section>

<section id="section-kisah-sukses">
    <div class="sks-wrapper-layout">
        <div class="sks-container">

            <div class="owl-carousel artikel-portofolio" id="owl-kisah-sukses-tes">
                <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'success-story',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                <div class="item">
                    <article>
                        <div class="card mb-3">
                            <img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <?php
                                                    $postcategories = get_the_category();
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                            unset($category);
                                                        }
                                                        echo implode(" | ", $output);
                                                    }
                                                ?>
                                <h5 class="cs-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                                </h5>
                                <ul class="post-meta">
                                    <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                    </li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <?php
							endwhile;
							endif;
						?>
            </div>

            <div class="owl-carousel owl-theme artikel-portofolio-mobile" id="owl-kisahsukses-home">
                <?php 
							query_posts( array(
							'post_type' => 'post',
							'orderby' => 'date',
							'category_name' => 'success-story',
							'posts_per_page' => 10
							));
							if (have_posts()) : while (have_posts()) : the_post(); 
							if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
							$news_src = $src[0];
							}
						?>
                <div class="item">
                    <div class="card">
                        <img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default-promo.png ";
																								}?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <?php
                                                    $postcategories = get_the_category();
                                                    if ($postcategories) {
                                                        $output = array();
                                                        foreach($postcategories as $category) {
                                                            $output[] = '<span><a href="' . get_category_link($category->term_id) . '">' .$category->name.' </a></span>';
                                                            unset($category);
                                                        }
                                                        echo implode(" | ", $output);
                                                    }
                                                ?>
                            <h5 class="cs-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                            </h5>
                            <ul class="post-meta">
                                <li class="meta-author">by <span>&nbsp <?php the_author(); ?></span>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
							endwhile;
							endif;
						?>
            </div>
        </div>
    </div>
</section>

<section id="section-jumlah-universitas">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="grid-konten-peta">
                    <div class="item-peta wow zoomIn" data-wow-delay=".5s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-univ.png" alt="">
                        <h3>700+</h3>
                        <p>Perguruan tinggi dan terus bertambah</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay=".75s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-dosen.png" alt="">
                        <h3>26.857+ </h3>
                        <p>Dosen dan Petugas kampus dimudahkan</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay="1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-mhs.png" alt="">
                        <h3>1.103.494+ </h3>
                        <p>Mahasiswa terbantu</p>
                    </div>
                    <div class="item-peta wow zoomIn" data-wow-delay="1.25s">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icon-modul.png" alt="">
                        <h3>100+</h3>
                        <p>Partnership</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-cta-v2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 text-konten wow fadeInUp" data-wow-duration="1s">
                <h2>Siap bergabung dengan 700+ perguruan tinggi?</h2>                
                <div class="button-selengkapnya d-flex justify-content-start align-items-center">
                    <a class="btn btn-primary" href="https://sevima.com/kontak-kami/">Hubungi Sales</a>
                    <a class="link-wa" href="<?php echo home_url() ?>/#section-produk-v2" role="button">Lihat produk</a>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 gambar-konten">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gbr-cta.png" class="gbr-cta img-fluid " alt="">
                <div class="pattern-cta">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/aksen-cta.png" class="aksen-cta d-none d-md-block" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>