<?php
/*
Template Name: Benefit
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
?>

  <section class="svm-grid svm-hero-section svm-content-center svm-bg-gradient-to-b svm-from-slate-100 svm-to-white svm-pt-12 md:svm-pt-20 svm-pb-6 md:svm-pb-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 lg:svm-grid-cols-2 svm-gap-4 svm-p-4">
        <div class="svm-self-center">
          <h1 class="svm-hero-title svm-mb-2"><?php echo esc_html(get_post_meta(get_the_ID(), 'benefit_info_top_title', true)); ?></h1>
          <?php echo (get_post_meta(get_the_ID(), 'benefit_info_top_description', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-mb-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'benefit_info_top_description', true)) . '</p>' : ''); ?>
          
          <?php if(get_post_meta(get_the_ID(), 'benefit_info_top_list', true)) : ?>
          <?php $benefit = explode(PHP_EOL, get_post_meta(get_the_ID(), 'benefit_info_top_list', true)); ?>
          <ul>
            <?php foreach($benefit as $value) : ?>
            <li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-2 svm-mt-[1px] svm-w-5 svm-h-5 svm-flex-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#00880D">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span class="svm-text-gray-600 svm-font-semibold svm-text-sm md:svm-text-base"><?php echo $value; ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>

        <?php
          if( have_rows('benefit_info_top_gallery') ) :
            while( have_rows('benefit_info_top_gallery') ) : the_row();
        ?>
        <div class="svm-self-center svm-hidden lg:svm-block">
          <div class="svm-mb-4 svm-flex svm-flex-wrap svm-items-end">
            <div class="svm-mb-4 lg:svm-mb-0 svm-w-full lg:svm-w-2/3 svm-px-2">
              <img class="svm-w-full svm-h-32 lg:svm-h-48 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_top_gallery_image_1'))); ?>" alt="gallery" loading="lazy">
            </div>
            <div class="svm-w-full lg:svm-w-1/3 svm-px-2">
              <img class="svm-w-full svm-h-32 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_top_gallery_image_2'))); ?>" alt="gallery" loading="lazy">
            </div>
          </div>
          <div class="svm-flex svm-flex-wrap svm-items-start">
            <div class="svm-mb-4 lg:svm-mb-0 svm-w-full lg:svm-w-1/3 svm-px-2">
              <img class="svm-w-full svm-h-32 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_top_gallery_image_3'))); ?>" alt="gallery" loading="lazy">
            </div>
            <div class="svm-w-full lg:svm-w-2/3 svm-px-2">
              <img class="svm-w-full svm-h-32 lg:svm-h-48 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_top_gallery_image_4'))); ?>" alt="gallery" loading="lazy">
            </div>
          </div>
        </div>
        <?php
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>

  <?php
    $args = array(
      'post_type' => 'development_program',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC'
    );

    $development_programs = new WP_Query($args);

    if($development_programs->have_posts()) :
  ?>
  <section class="svm-bg-white svm-py-6 md:svm-py-10 svm-facility-section">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">
      <?php
        if( have_rows('benefit_section_development_program') ) :
          while( have_rows('benefit_section_development_program') ) : the_row();
      ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-mb-2"><?php echo esc_html(get_sub_field('benefit_section_development_program_title')); ?></h2>
            <?php echo (get_sub_field('benefit_section_development_program_subtitle') ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-2xl svm-mx-auto svm-text-base">' . esc_html(get_sub_field('benefit_section_development_program_subtitle')) . '</p>' : ''); ?>
          </div>
        </div>
      </div>
      <?php
          endwhile;
        endif;
      ?>

      <div id="fasilitas-karyawan" data-gap="32" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style">
        <div class="svm-flex svm-flex-nowrap svm-gap-4">
          <?php while($development_programs->have_posts()) : $development_programs->the_post(); ?>
          <div class="svm-w-full md:svm-w-2/3 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 md:svm-h-[440px] svm-grid svm-content-end svm-rounded-3xl svm-shadow-xl svm-bg-cover svm-bg-no-repeat svm-bg-center svm-slide-item" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo esc_url(get_the_post_thumbnail_url()); ?>');">
              <h3 class="svm-font-semibold svm-text-xl md:svm-text-2xl svm-mb-2 svm-text-white"><?php echo esc_html(get_the_title()); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-leading-6 md:svm-leading-8 svm-max-w-none md:svm-max-w-2xl"><?php echo esc_html(get_the_excerpt()); ?></p>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

      <?php if($development_programs->found_posts > 1) : ?>
      <svg class="svm-svg-icon svm-prev-facility-item svm-hidden svm-prev-button" viewBox="0 0 22 20" data-target="#fasilitas-karyawan">
        <path d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
      </svg>

      <svg class="svm-svg-icon svm-next-facility-item svm-hidden svm-next-button" viewBox="0 0 22 20" data-target="#fasilitas-karyawan">
        <path d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
      </svg>
      <?php endif; ?>
    </div>
  </section>
  <?php
      wp_reset_query();
    endif;
  ?>

  <?php
    $args = array(
      'post_type' => 'employee_testimonial',
      'post_status' => 'publish',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC'
    );

    $employee_testimonials = new WP_Query($args);

    if($employee_testimonials->have_posts()) :
  ?>
  <section class="svm-bg-white svm-py-6 md:svm-py-10 svm-testimonial-section">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">
      <?php
        if( have_rows('benefit_section_employee_testimonial') ) :
          while( have_rows('benefit_section_employee_testimonial') ) : the_row();
      ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center svm-relative">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_sub_field('benefit_section_employee_testimonial_title')); ?></h2>
          </div>
        </div>
      </div>    
      <?php
          endwhile;
        endif;
      ?>

      <div id="testimoni-karyawan" data-gap="32" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style">
        <div class="svm-flex svm-flex-nowrap svm-gap-4 svm-match-height">
          <?php while($employee_testimonials->have_posts()) : $employee_testimonials->the_post(); ?>
          <div class="svm-w-full md:svm-w-1/2 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-min-h-[384px] svm-rounded-3xl svm-bg-white svm-shadow-xl svm-match-item svm-slide-item">
              <div class="svm-flex svm-flex-nowrap svm-items-center svm-gap-4 svm-mb-6 md:svm-mb-8">
                <div class="svm-flex-none">
                  <img class="svm-w-16 svm-h-16 svm-object-cover svm-rounded-full" src="<?php echo esc_url(get_the_post_thumbnail_url(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true))); ?>" alt="employee" loading="lazy">
                </div>
                <div>
                  <h3 class="svm-font-medium svm-text-lg md:svm-text-xl"><?php echo esc_html(get_the_title(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true))); ?></h3>
                  <span class="svm-inline-block svm-font-semibold svm-text-blue-main"><?php echo esc_html(get_post_meta(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true), 'jabatan', true)); ?></span>
                </div>
              </div>

              <img class="svm-absolute svm-w-12 svm-h-12 -svm-mt-2 -svm-ml-4 svm-opacity-50" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/quote.png'; ?>" alt="quote" loading="lazy">
              <blockquote class="svm-text-gray-600 svm-leading-8 svm-text-base"><?php echo esc_html(get_post_meta(get_the_ID(), 'employee_testimonial_content', true)); ?></blockquote>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

      <?php if($employee_testimonials->found_posts > 1) : ?>
      <svg class="svm-svg-icon svm-prev-testimonial-item svm-hidden svm-prev-button" viewBox="0 0 22 20" data-target="#testimoni-karyawan">
        <path d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
      </svg>

      <svg class="svm-svg-icon svm-next-testimonial-item svm-hidden svm-next-button" viewBox="0 0 22 20" data-target="#testimoni-karyawan">
        <path d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
      </svg>
      <?php endif; ?>
    </div>
  </section>
  <?php
      wp_reset_query();
    endif;
  ?>

  <section class="svm-bg-white svm-py-6 md:svm-py-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 lg:svm-grid-cols-2 svm-gap-4 svm-p-4">
        <?php
          if( have_rows('benefit_info_bottom_gallery') ) :
            while( have_rows('benefit_info_bottom_gallery') ) : the_row();
        ?>
        <div class="svm-self-center svm-hidden lg:svm-block">
          <div class="svm-mb-4 svm-flex svm-flex-wrap svm-items-end">
            <div class="svm-mb-4 lg:svm-mb-0 svm-w-full lg:svm-w-2/3 svm-px-2">
              <img class="svm-w-full svm-h-32 lg:svm-h-48 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_bottom_gallery_image_1'))); ?>" alt="gallery" loading="lazy">
            </div>
            <div class="svm-w-full lg:svm-w-1/3 svm-px-2">
              <img class="svm-w-full svm-h-32 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_bottom_gallery_image_2'))); ?>" alt="gallery" loading="lazy">
            </div>
          </div>
          <div class="svm-flex svm-flex-wrap svm-items-start">
            <div class="svm-mb-4 lg:svm-mb-0 svm-w-full lg:svm-w-1/3 svm-px-2">
              <img class="svm-w-full svm-h-32 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_bottom_gallery_image_3'))); ?>" alt="gallery" loading="lazy">
            </div>
            <div class="svm-w-full lg:svm-w-2/3 svm-px-2">
              <img class="svm-w-full svm-h-32 lg:svm-h-48 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('benefit_info_bottom_gallery_image_4'))); ?>" alt="gallery" loading="lazy">
            </div>
          </div>
        </div>
        <?php
            endwhile;
          endif;
        ?>

        <div class="svm-self-center">
          <h2 class="svm-section-title svm-mb-8"><?php echo esc_html(get_post_meta(get_the_ID(), 'benefit_info_bottom_title', true)); ?></h2>
          
          <?php if(get_post_meta(get_the_ID(), 'benefit_info_bottom_list', true)) : ?>
          <?php $benefit = explode(PHP_EOL, get_post_meta(get_the_ID(), 'benefit_info_bottom_list', true)); ?>
          <ul class="svm-mb-8">
            <?php foreach($benefit as $value) : ?>
              <li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-2 svm-mt-[1px] svm-w-5 svm-h-5 svm-flex-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#00880D">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
              </svg>
              <span class="svm-text-gray-600 svm-font-semibold svm-text-sm md:svm-text-base"><?php echo $value; ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

          <?php echo (get_post_meta(get_the_ID(), 'benefit_info_top_description', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'benefit_info_bottom_description', true)) . '</p>' : ''); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="svm-bg-white svm-pb-12 md:svm-pb-20 svm-pt-6 md:svm-pt-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-m-4 svm-rounded-3xl svm-relative svm-bg-cover svm-bg-no-repeat svm-bg-center svm-shadow-xl" style="background-image: url('<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'general_banner_video_thumbnail', true))); ?>');">
				<?php if(get_post_meta(get_the_ID(), 'general_banner_video_youtube_link', true)) : ?>
        <svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo esc_url(get_post_meta(get_the_ID(), 'general_banner_video_youtube_link', true)); ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="32" cy="32" r="32" fill="currentColor"></circle>
          <path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
        </svg>
				<?php endif; ?>

        <div class="svm-col-span-2 svm-col-start-4 svm-px-4 svm-pl-6 md:svm-px-16 svm-pt-16 svm-pb-8 md:svm-py-40 svm-mt-48 md:svm-mt-0 svm-bg-blue-main svm-rounded-full svm-rounded-tl-[8787px] md:svm-rounded-tl-full svm-rounded-bl-[999px] md:svm-rounded-bl-full svm-rounded-tr-full md:svm-rounded-tr-[999px] svm-rounded-br-[999px] svm-text-left md:svm-text-right">
          <h2 class="svm-font-semibold svm-text-xl md:svm-text-4xl svm-line-height-1-5 svm-text-white svm-mb-6"><?php echo esc_html(get_post_meta(get_the_ID(), 'general_banner_video_title', true)); ?></h2>

          <?php if(get_post_meta(get_the_ID(), 'general_banner_video_enabled_cta', true)) : ?>
          <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'general_banner_video_link_cta', true)); ?>">
            <button class="svm-base-button svm-bg-white svm-text-black svm-w-full md:svm-w-auto"><?php echo esc_html(get_post_meta(get_the_ID(), 'general_banner_video_label_cta', true)); ?></button>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  
  <section class="svm-bg-slate-50 svm-py-12 svm-cta-footer">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-2 svm-gap-4 svm-p-4">
        <div class="svm-order-2 svm-self-center">
          <h2 class="svm-section-title svm-mb-2"><?php echo esc_html(get_post_meta(get_the_ID(), 'general_cta_footer_title', true)); ?></h2>
          <?php echo (get_post_meta(get_the_ID(), 'general_cta_footer_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-mb-8 svm-max-w-none lg:svm-max-w-sm svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'general_cta_footer_subtitle', true)) . '</p>' : ''); ?>
          <div>
            <?php
              if( have_rows('general_cta_footer_primary_button') ) :
                while( have_rows('general_cta_footer_primary_button') ) : the_row();
                  echo (get_sub_field('general_cta_footer_primary_button_enabled') ? '<a href="' . (get_sub_field('general_cta_footer_primary_button_link') ? esc_url(get_sub_field('general_cta_footer_primary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-red-main svm-text-white svm-mr-0 md:svm-mr-2 svm-mb-2 md:svm-mb-0 svm-w-full md:svm-w-auto">' . (get_sub_field('general_cta_footer_primary_button_icon') ? '<img class="svm-h-8 svm-w-8 svm-inline-block svm-absolute -svm-mt-[6px] lg:-svm-mt-[4px] -svm-ml-[4px]" src="' . esc_url(wp_get_attachment_url(get_sub_field('general_cta_footer_primary_button_icon'))) . '" alt="icon" loading="lazy" /><span class="svm-ml-8">' : '<span>') . (get_sub_field('general_cta_footer_primary_button_label') ? esc_html(get_sub_field('general_cta_footer_primary_button_label')) : 'Primary Button') . '</span></button></a>' : '');
                endwhile;
              endif;

              if( have_rows('general_cta_footer_secondary_button') ) :
                while( have_rows('general_cta_footer_secondary_button') ) : the_row();
                  echo (get_sub_field('general_cta_footer_secondary_button_enabled') ? '<a href="' . (get_sub_field('general_cta_footer_secondary_button_link') ? esc_url(get_sub_field('general_cta_footer_secondary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-transparent svm-text-black svm-border svm-border-gray-300 svm-w-full md:svm-w-auto">' . (get_sub_field('general_cta_footer_secondary_button_icon') ? '<img class="svm-h-8 svm-w-8 svm-inline-block svm-absolute -svm-mt-[6px] lg:-svm-mt-[4px] -svm-ml-[4px]" src="' . esc_url(wp_get_attachment_url(get_sub_field('general_cta_footer_secondary_button_icon'))) . '" alt="icon" loading="lazy" /><span class="svm-ml-8">' : '<span>') . (get_sub_field('general_cta_footer_secondary_button_label') ? esc_html(get_sub_field('general_cta_footer_secondary_button_label')) : 'Secondary Button') . '</span></button></a>' : '');
                endwhile;
              endif;
            ?>
          </div>
        </div>
        <div class="svm-order-1 md:svm-order-2 svm-self-center svm-mb-4 md:svm-mb-0 svm-relative">
          <img class="svm-w-full svm-h-auto svm-object-cover" src="<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'general_cta_footer_image', true))); ?>" alt="cta image" loading="lazy">
        </div>
      </div>
    </div>
  </section>
  
<?php
endwhile;

get_footer();
?>