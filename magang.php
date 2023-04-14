
    <?php
    /*
    Template Name: Magang
    */
    ?>
    <?php get_header(); ?>

    <section id="hero-image-magang">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-11 offset-xl-1 col-lg-10 offset-lg-1 col-md-12">
            <div class="row">
              <div class="col-12 col-lg-5 title">
                <h4>#revolutionizeEducation</h4>
                <h2>Karir Internship 
                  <br>Program</h2>
                <p>
                  SEVIMA memberikan kesempatan bagi kamu siswa/mahasiswa tingkat akhir untuk mempraktekkan pengetahuan
                  akademis dan mengembangkan skill dan kompetensimu.
                </p>
                  <div class="arrow d-none d-lg-block">
                    <p style="width: 100%;">Pelajari lebih lanjut</p>
                    <div class="animated bounce">
                      <a href="#magang-beneran"><img src="<?php echo get_template_directory_uri(); ?>/img/cursor.png" alt=""></a>
                    </div>                    
                  </div>
              </div>
              <div class="col-12 col-lg">                
                <div class="video_wrapper video_wrapper_full js-videoWrapper">
                  <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/ZFkKwfYNSHo"></iframe>
                  <button class="videoPoster js-videoPoster"></button>
                </div>
              </div>       
            </div>
          </div>          
        </div>
      </div>
    </section>

    <section id="magang-beneran">
      <div class="container">
        <div class="row">
          <div class="col-12 title">
            <h2>Kamu siap? #MagangBeneran</h2>
          </div>
          <div class="col-12 col-md-10 offset-md-1">
            <div class="grid-gambar">
              <div class="gambar horizontal">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gambar-a.JPG" class="img-full img-fluid" alt="">
              </div>
              <div class="gambar">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gambar-b.JPG" class="img-full img-fluid" alt="">
              </div>
              <div class="gambar">
                <img src="<?php echo get_template_directory_uri(); ?>/img/gambar-c.JPG" class="img-full img-fluid" alt="">
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <p>
              Di SEVIMA, kamu dapat merasakan pengalaman bekerja yang seru dan menarik di lingkungan yang dinamis.
              Karena di sini kamu bakalan #MagangBeneran. <b><i>Say goodbye</i> pada magang yang sekedar disuruh fotokopi atau
              disuruh bikinin kopi, di sini kamu bakal dibimbing oleh mentor magang yang berpengalaman dan siap kamu
              gali ilmunya.</b> Jadi tunggu apalagi?
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="menang-banyak">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg offset-lg-0">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menang-banyak.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-12 col-lg-5">
            <div class="title">
              <h2>#MenangBanyak</h2>
            </div>
            <p style="color: #6D717C;">
              Berdasarkan cerita dari teman kamu, magang di SEVIMA itu #MenangBanyak. Kenapa? karena di sini kamu bakal:
            </p>
     
            <ul class="list-unstyled">
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-1.png" alt="">
                Dibimbing oleh mentor yang sudah berpengalaman
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.png" alt="">                
                Bekerja dengan tim yang ramah dan terbuka
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-3.png" alt="">              
                Pekerjaan sesuai dengan minat dan expnertise yang ingin kamu tekuni                
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-4.png" alt="">              
                Lingkungan kerja yang dinamis              
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-5.png" alt="">              
                Kesempatan mendapatkan kontrak kerja              
              </li>
              <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-6.png" alt="">              
                Fasilitas kesehatan dan makan siang             
              </li>
            </ul>          
          </div>
        </div>
      </div>
    </section>

    <section id="KataTemanMagang">
      <div class="container"> 
        <div class="row title">
          <div class="col-12 col-md-8 col-lg-6">        
            <h2>#KataTemanKamu</h2>
            <p>
              Teman-teman magang sebelumnya, punya pesan dan kesan yang ingin disampaikan untuk kamu lho.
            </p>
          </div>          
        </div>
        <!-- <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="video_wrapper video_wrapper_full js-videoWrapper">
              <iframe class="videoIframe js-videoIframe" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/ZFkKwfYNSHo"></iframe>
              <button class="videoPoster js-videoPoster"></button>
            </div>
          </div>
        </div> --> 

        <section id="section-video-v2">
         <div class="col-xl-12 col-lg-10 col-md-12">
            <div class="background-video">
            <div class="row">
                <div class="col-md-7 col-12">
                <div class="hero-video" id="youtubeplayer">
                    <iframe width="100%" height="360" src="" frameborder="0" allowfullscreen></iframe>
                </div>
                </div>
                <div class="col-md-5 col-12">

                <div class="title-list mb-4">
                    <h6>Playlist</h6>
                    <h5>Testimoni Magang</h5>
                </div>
                <div class="list-video">
                    <ul id="youtubevideotabs">
                    <?php 
                                            query_posts( array(
                                            'post_type' => 'video_magang',
                                            'posts_per_page' => -1,       
                                            'orderby' => 'date',
                                            'order' => 'ASC',                                  
                                            ));
                                            if (have_posts()) : while (have_posts()) : the_post(); 
                                            if ( has_post_thumbnail() ) {
                                            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
                                            $news_src = $src[0];
                                            }
                                    ?>
                    <?php 
                                        $iframe = get_field('video_magang');
                                        $match = explode("embed/",$iframe);
                                    ?>
                    <li youtubeid="<?php the_field ('video_magang'); ?>"><?php the_title(); ?></li>
                    <?php
                                        endwhile;
                                        endif;
                                    ?>
                    </ul>
                </div>
                </div>
            </div>
            </div>
        </div>

  
     



        <div class="row" style="margin-top:3rem;">
          <div class="col-12">
            <div class="owl-carousel" id="owl-magang">
              <div class="item">
                <figure class="snip1167">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/masinta.JPG" alt="sq-sample3" />
                  <div class="card">
                    <blockquote>Selama magang di SEVIMA saya merasakan kekeluargaan yang erat, kerja tim yang tinggi dan
                      daya saing untuk lebih maju kuat. Sejauh ini belajar dari senior-senior di SEVIMA sangat luar
                      biasa bagi kami mahasiswa untuk perubahan yang besar.</blockquote>
                    <div class="author">
                      <h5>Masinta - Riau<span> Software Implementator</span></h5>
                    </div>
                  </div>
                </figure>
              </div>
              <div class="item">
                <figure class="snip1167">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/melisa.JPG" alt="sq-sample27" />
                  <div class="card">
                    <blockquote>Saya banyak mendapat ilmu hard skill maupun soft skill, dan saya juga lebih paham bekerja sebagai Tim di SEVIMA.</blockquote>
                    <div class="author">
                      <h5>Melisa - Singapura<span> Digital Marketing</span></h5>
                    </div>
                  </div>                  
                </figure>
              </div>
              <div class="item">
                <figure class="snip1167">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/nish.JPG" alt="sq-sample17" />
                  <div class="card">
                    <blockquote>Ini kali pertama saya bekerja di perusahaan seperti ini lingkungan yang kompetitif. Saya juga banyak belajar tentang beradaptasi yang mana saya belajar keluar dari zona nyaman</blockquote>
                      <div class="author">
                        <h5>Nis - India<span> Digital Marketing</span></h5>
                      </div>
                  </div>
                </figure>
              </div>
              <div class="item">
                <figure class="snip1167">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/adit.JPG" alt="sq-sample3" />
                  <div class="card">
                    <blockquote>Saya di SEVIMA ketemu banyak teman baru, dari sini saya sadar harus belajar lebih banyak lagi.
                    </blockquote>
                    <div class="author">
                      <h5>Adit - Riau<span> Programmer</span></h5>
                    </div>
                  </div>
                </figure>
              </div>              
            </div>
            <div class="owl-theme d-none d-lg-block">
              <div class="owl-controls">
                <div class="custom-nav owl-nav"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    
    <section id="kontak-kami-magang">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 title-magang text-center">
            <h2>Siap untuk #MagangBeneran
              <br>di <span style="color: #EF2427;">SE</span><span style="color: #3754A4;">VI</span><span style="color: #EF2427;">MA?</span></h2>
              <p>Gabung sekarang dan dapatkan pengalaman bekerja yang tak ternilai.
                Kirim email ke <span><a href="mailto:hr@sevima.co.id"><b>hr@sevima.co.id</b></a></span></p>
              <P>Dapatkan info terkini dari SEVIMA: <span><a href="https://www.instagram.com/sevima_official/">
                <br><b><i class='uil uil-instagram'></i> sevima_official</b></a></P>
          </div>
        </div>
      </div>
    </section>
    
    <?php get_footer(); ?>