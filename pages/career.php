<?php
/*
Template Name: Career
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
?>

  <section class="svm-grid svm-hero-section svm-content-end svm-bg-white svm-pb-0 md:svm-pb-20 svm-bg-no-repeat svm-bg-center svm-bg-cover" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'career_hero_background', true))); ?>');">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-max-w-2xl svm-mx-auto svm-p-4 svm-text-center">
        <?php echo (get_post_meta(get_the_ID(), 'career_hero_tagline', true) ? '<span class="svm-badge svm-mb-2 svm-bg-red-main svm-text-white">' . esc_html(get_post_meta(get_the_ID(), 'career_hero_tagline', true)) . '</span>' : ''); ?>
        <h1 class="svm-hero-title svm-text-white svm-mb-4 svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_hero_title', true)); ?></h1>
        <?php echo (get_post_meta(get_the_ID(), 'career_hero_subtitle', true) ? '<p class="svm-text-sm md:svm-text-base svm-text-gray-100 svm-mb-4 md:svm-mb-8">' . esc_html(get_post_meta(get_the_ID(), 'career_hero_subtitle', true)) . '</p>' : ''); ?>
        <div>
          <?php
            if( have_rows('career_hero_primary_button') ) :
              while( have_rows('career_hero_primary_button') ) : the_row();
                echo (get_sub_field('career_hero_primary_button_enabled') ? '<a href="' . (get_sub_field('career_hero_primary_button_link') ? esc_url(get_sub_field('career_hero_primary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-red-main svm-text-white svm-mr-0 md:svm-mr-2 svm-mb-2 md:svm-mb-0 svm-w-full md:svm-w-auto">' . (get_sub_field('career_hero_primary_button_label') ? esc_html(get_sub_field('career_hero_primary_button_label')) : 'Primary Button') . '</button></a>' : '');
              endwhile;
            endif;

            if( have_rows('career_hero_secondary_button') ) :
              while( have_rows('career_hero_secondary_button') ) : the_row();
                echo (get_sub_field('career_hero_secondary_button_enabled') ? '<a href="' . (get_sub_field('career_hero_secondary_button_link') ? esc_url(get_sub_field('career_hero_secondary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-transparent svm-text-white svm-border svm-border-white svm-w-full md:svm-w-auto">' . (get_sub_field('career_hero_secondary_button_label') ? esc_html(get_sub_field('career_hero_secondary_button_label')) : 'Secondary Button') . '</button></a>' : '');
              endwhile;
            endif;
          ?>
        </div>
      </div>
    </div>
  </section>
  
  <section class="svm-bg-white svm-py-12 md:svm-py-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-2 svm-gap-4 svm-p-4">
        <div class="svm-order-2 svm-self-center">
          <h2 class="svm-section-title svm-mb-2"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_about_title', true)); ?></h2>
          <?php echo (get_post_meta(get_the_ID(), 'career_about_tagline', true) ? '<span class="svm-font-semibold svm-inline-block svm-mb-4 svm-text-blue-main">' . esc_html(get_post_meta(get_the_ID(), 'career_about_tagline', true)) . '</span>' : ''); ?>
          <?php echo (get_post_meta(get_the_ID(), 'career_about_description', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-mb-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'career_about_description', true)) . '</p>' : ''); ?>
          <div>
            <?php
              if( have_rows('career_about_primary_button') ) :
                while( have_rows('career_about_primary_button') ) : the_row();
                  echo (get_sub_field('career_about_primary_button_enabled') ? '<a href="' . (get_sub_field('career_about_primary_button_link') ? esc_url(get_sub_field('career_about_primary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-red-main svm-text-white svm-mr-0 md:svm-mr-2 svm-mb-2 md:svm-mb-0 svm-w-full md:svm-w-auto">' . (get_sub_field('career_about_primary_button_label') ? esc_html(get_sub_field('career_about_primary_button_label')) : 'Primary Button') . '</button></a>' : '');
                endwhile;
              endif;

              if( have_rows('career_about_secondary_button') ) :
                while( have_rows('career_about_secondary_button') ) : the_row();
                  echo (get_sub_field('career_about_secondary_button_enabled') ? '<a href="' . (get_sub_field('career_about_secondary_button_link') ? esc_url(get_sub_field('career_about_secondary_button_link')) : '#') . '"><button class="svm-base-button svm-bg-transparent svm-text-black svm-border svm-border-gray-300 svm-w-full md:svm-w-auto">' . (get_sub_field('career_about_secondary_button_label') ? esc_html(get_sub_field('career_about_secondary_button_label')) : 'Secondary Button') . '</button></a>' : '');
                endwhile;
              endif;
            ?>
          </div>
        </div>

        <?php if( have_rows('career_about_youtube_video') ) : ?>
        <?php while( have_rows('career_about_youtube_video') ) : the_row(); ?>
        <div class="svm-order-1 md:svm-order-2 svm-self-center svm-mb-4 md:svm-mb-0 svm-relative">
          <?php if(get_sub_field('career_about_youtube_video_thumbnail')) { ?>
          <?php if(get_sub_field('career_about_youtube_video_link')) { ?>
          <svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo esc_url(get_sub_field('career_about_youtube_video_link')); ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="32" cy="32" r="32" fill="currentColor"></circle>
            <path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
          </svg>
          <?php } ?>

          <img class="svm-w-full svm-h-auto svm-object-cover" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('career_about_youtube_video_thumbnail'))); ?>" alt="youtube video" loading="lazy">
          <?php } ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="svm-bg-gradient-to-b svm-from-slate-100 svm-to-white svm-pt-12 md:svm-pt-20 svm-pb-6 md:svm-pb-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-mb-2 svm-max-w-[17rem] svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_culture_title', true)); ?></h2>
            <?php echo (get_post_meta(get_the_ID(), 'career_culture_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-2xl svm-mx-auto svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'career_culture_subtitle', true)) . '</p>' : ''); ?>
          </div>
        </div>
      </div>
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-3 svm-gap-4 svm-p-4">
        <div>
          <?php if( have_rows('career_culture_item_1') ) : ?>
          <?php while( have_rows('career_culture_item_1') ) : the_row(); ?>
          <div class="svm-text-center svm-px-4 svm-mb-12">
            <?php echo (get_sub_field('career_culture_item_1_icon') ? '<img class="svm-w-16 svm-h-16 svm-mx-auto svm-mb-2" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_culture_item_1_icon'))) . '" alt="culture" loading="lazy">' : ''); ?>
            <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4"><?php echo esc_html(get_sub_field('career_culture_item_1_title')); ?></h3>
            <p class="svm-text-gray-600 svm-leading-8 svm-max-w-lg svm-mx-auto svm-text-base"><?php echo esc_html(get_sub_field('career_culture_item_1_description')); ?></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_culture_item_2') ) : ?>
          <?php while( have_rows('career_culture_item_2') ) : the_row(); ?>
          <div class="svm-text-center svm-px-4 svm-mb-12">
            <?php echo (get_sub_field('career_culture_item_2_icon') ? '<img class="svm-w-16 svm-h-16 svm-mx-auto svm-mb-2" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_culture_item_2_icon'))) . '" alt="culture" loading="lazy">' : ''); ?>
            <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4"><?php echo esc_html(get_sub_field('career_culture_item_2_title')); ?></h3>
            <p class="svm-text-gray-600 svm-leading-8 svm-max-w-lg svm-mx-auto svm-text-base"><?php echo esc_html(get_sub_field('career_culture_item_2_description')); ?></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="svm-self-center svm-hidden md:svm-block">
          <img class="svm-w-full svm-h-auto svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'career_culture_thumbnail', true))); ?>" alt="culture" loading="lazy">
        </div>
        <div>
          <?php if( have_rows('career_culture_item_3') ) : ?>
          <?php while( have_rows('career_culture_item_3') ) : the_row(); ?>
          <div class="svm-text-center svm-px-4 svm-mb-12">
            <?php echo (get_sub_field('career_culture_item_3_icon') ? '<img class="svm-w-16 svm-h-16 svm-mx-auto svm-mb-2" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_culture_item_3_icon'))) . '" alt="culture" loading="lazy">' : ''); ?>
            <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4"><?php echo esc_html(get_sub_field('career_culture_item_3_title')); ?></h3>
            <p class="svm-text-gray-600 svm-leading-8 svm-max-w-lg svm-mx-auto svm-text-base"><?php echo esc_html(get_sub_field('career_culture_item_3_description')); ?></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_culture_item_4') ) : ?>
          <?php while( have_rows('career_culture_item_4') ) : the_row(); ?>
          <div class="svm-text-center svm-px-4 svm-mb-12">
            <?php echo (get_sub_field('career_culture_item_4_icon') ? '<img class="svm-w-16 svm-h-16 svm-mx-auto svm-mb-2" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_culture_item_4_icon'))) . '" alt="culture" loading="lazy">' : ''); ?>
            <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4"><?php echo esc_html(get_sub_field('career_culture_item_4_title')); ?></h3>
            <p class="svm-text-gray-600 svm-leading-8 svm-max-w-lg svm-mx-auto svm-text-base"><?php echo esc_html(get_sub_field('career_culture_item_4_description')); ?></p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <section class="svm-bg-white svm-py-6 md:svm-py-10 svm-hiring-section">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">    
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_hiring_title', true)); ?></h2>
          </div>
        </div>
      </div>
      <div id="proses-recruitment" data-gap="16" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style">
        <div class="svm-flex svm-flex-nowrap svm-gap-4">
          <?php if( have_rows('career_hiring_item_1') ) : ?>
          <?php while( have_rows('career_hiring_item_1') ) : the_row(); ?>
          <div class="svm-w-72 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-blue-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_1_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_1_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_1_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_1_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
          
          <?php if( have_rows('career_hiring_item_2') ) : ?>
          <?php while( have_rows('career_hiring_item_2') ) : the_row(); ?>
          <div class="svm-w-72 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-green-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_2_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_2_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_2_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_2_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_hiring_item_3') ) : ?>
          <?php while( have_rows('career_hiring_item_3') ) : the_row(); ?>
          <div class="svm-w-72 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-pink-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_3_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_3_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_3_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_3_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_hiring_item_4') ) : ?>
          <?php while( have_rows('career_hiring_item_4') ) : the_row(); ?>
          <div class="svm-w-72 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-yellow-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_4_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_4_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_4_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_4_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_hiring_item_5') ) : ?>
          <?php while( have_rows('career_hiring_item_5') ) : the_row(); ?>
          <div class="svm-w-72 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-red-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_5_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_5_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_5_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_5_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>

          <?php if( have_rows('career_hiring_item_6') ) : ?>
          <?php while( have_rows('career_hiring_item_6') ) : the_row(); ?>
          <div class="svm-w-80 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-h-96 svm-rounded-3xl svm-bg-skyblue-main svm-text-white svm-shadow-xl svm-slide-item">
              <h3 class="svm-text-xl md:svm-text-2xl svm-font-semibold svm-mb-4 svm-h-8"><?php echo esc_html(get_sub_field('career_hiring_item_6_title')); ?></h3>
              <p class="svm-text-gray-100 svm-text-sm md:svm-text-base svm-line-height-2"><?php echo esc_html(get_sub_field('career_hiring_item_6_subtitle')); ?></p>

              <?php echo (get_sub_field('career_hiring_item_6_icon') ? '<img class="svm-w-56 svm-h-56 svm-bottom-0 svm-left-1/2 -svm-ml-28 svm-absolute" src="' . esc_url(wp_get_attachment_url(get_sub_field('career_hiring_item_6_icon'))) . '" alt="hiring process" loading="lazy">' : ''); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <svg class="svm-svg-icon svm-prev-hiring-item svm-hidden svm-prev-button" viewBox="0 0 22 20" data-target="#proses-recruitment">
        <path d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
      </svg>

      <svg class="svm-svg-icon svm-next-hiring-item svm-hidden svm-next-button" viewBox="0 0 22 20" data-target="#proses-recruitment">
        <path d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
      </svg>
    </div>
  </section>

  <?php $faq_career = wp_get_nav_menu_items(wp_get_nav_menu_name('faq_career')); ?>
  <section class="svm-bg-gradient-to-b svm-from-white svm-to-slate-100 <?php echo (count($faq_career) > 0 ? 'svm-pb-12 md:svm-pb-20' : ''); ?> svm-pt-6 md:svm-pt-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <?php if(count($faq_career) > 0) : ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo wp_get_nav_menu_name('faq_career'); ?></h2>
          </div>
        </div>
      </div>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4">
        <div>
          <div class="svm-max-w-2xl svm-mx-auto">
            <div id="accordion-faq" class="svm-accordion" data-accordion="collapse" data-active-classes="svm-text-blue-main" data-inactive-classes="svm-text-black">
              <?php
                $i = 1;

                foreach($faq_career as $row) :
              ?>
              <h3 id="<?php echo "accordion-faq-heading-" . $i; ?>">
                <button type="button" class="svm-flex svm-justify-between svm-items-center <?php echo ($i === 1 ? 'svm-pb-6' : 'svm-py-6'); ?> svm-w-full svm-font-semibold svm-text-xl md:svm-text-2xl svm-line-height-1-5 svm-text-left <?php echo ($i === 1 ? 'svm-text-blue-main' : 'svm-text-black'); ?> svm-border-b svm-border-gray-300" data-group="svm-faq" data-accordion-target="<?php echo "#accordion-faq-body-" . $i; ?>" aria-expanded="true" aria-controls="<?php echo "accordion-faq-body-" . $i; ?>">
                  <span><?php echo esc_html($row->post_title); ?></span>
                  <svg data-accordion-icon class="svm-w-8 svm-h-8 svm-rotate-180 svm-shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              </h3>
              <div id="<?php echo "accordion-faq-body-" . $i; ?>" class="<?php echo ($i === 1 ? 'svm-faq' : 'svm-hidden svm-faq'); ?>" aria-labelledby="<?php echo "accordion-faq-heading-" . $i; ?>">
                <div class="svm-py-6 svm-border-b svm-border-gray-300">
                  <p class="svm-text-gray-600 svm-leading-8 svm-text-base"><?php echo $row->post_content; ?></p>
                </div>
              </div>
              <?php 
                  $i++;
                endforeach;
              ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="svm-bg-white <?php echo (get_post_meta(get_the_ID(), 'career_superhero_enabled', true) ? 'svm-pt-12 md:svm-pt-20' : ''); ?> svm-pb-6 md:svm-pb-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <?php if(get_post_meta(get_the_ID(), 'career_superhero_enabled', true)) : ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div class="svm-text-center">
          <h2 class="svm-section-title svm-max-w-[17rem] svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_title', true)); ?></h2>
        </div>
      </div>
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-2 svm-gap-4 svm-p-4">
        <div class="svm-self-center svm-mb-4 md:svm-mb-0 svm-relative svm-text-center md:svm-text-left">
          <img class="svm-mb-4 md:svm-mb-0 svm-h-64 md:svm-h-96 svm-object-cover svm-rounded-full svm-mx-auto svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'career_superhero_photo', true))); ?>" alt="superhero of the month" loading="lazy">
          
          <div class="svm-flex svm-flex-nowrap svm-justify-center svm-items-center -svm-mt-24 md:-svm-mt-32 svm-absolute svm-left-1/2 -svm-ml-[56px] md:-svm-ml-[80px]">
            <div class="svm-bg-blue-main svm-p-2 svm-rounded-l-lg svm-shadow-lg">
              <svg class="svm-svg-icon svm-w-8 md:svm-w-12 svm-h-8 md:svm-h-12" viewBox="0 0 20 20">
                <path fill="#ffffff" d="M15.94,10.179l-2.437-0.325l1.62-7.379c0.047-0.235-0.132-0.458-0.372-0.458H5.25c-0.241,0-0.42,0.223-0.373,0.458l1.634,7.376L4.06,10.179c-0.312,0.041-0.446,0.425-0.214,0.649l2.864,2.759l-0.724,3.947c-0.058,0.315,0.277,0.554,0.559,0.401l3.457-1.916l3.456,1.916c-0.419-0.238,0.56,0.439,0.56-0.401l-0.725-3.947l2.863-2.759C16.388,10.604,16.254,10.22,15.94,10.179M10.381,2.778h3.902l-1.536,6.977L12.036,9.66l-1.655-3.546V2.778z M5.717,2.778h3.903v3.335L7.965,9.66L7.268,9.753L5.717,2.778zM12.618,13.182c-0.092,0.088-0.134,0.217-0.11,0.343l0.615,3.356l-2.938-1.629c-0.057-0.03-0.122-0.048-0.184-0.048c-0.063,0-0.128,0.018-0.185,0.048l-2.938,1.629l0.616-3.356c0.022-0.126-0.019-0.255-0.11-0.343l-2.441-2.354l3.329-0.441c0.128-0.017,0.24-0.099,0.295-0.215l1.435-3.073l1.435,3.073c0.055,0.116,0.167,0.198,0.294,0.215l3.329,0.441L12.618,13.182z"></path>
              </svg>
            </div>

            <?php
              $superhero_periode_month = date('M', strtotime(get_post_meta(get_the_ID(), 'career_superhero_period', true)));
              $superhero_periode_year = date('Y', strtotime(get_post_meta(get_the_ID(), 'career_superhero_period', true)));
            ?>
            <div class="svm-pt-[3px] svm-pb-[3px] md:svm-py-2 svm-w-16 md:svm-w-24 svm-bg-white svm-shadow-lg svm-rounded-r-lg svm-border svm-border-gray-100 svm-text-center">
              <span class="svm-block svm-text-sm md:svm-text-base svm-font-medium"><?php echo $superhero_periode_month; ?></span>
              <span class="svm-block svm-text-sm md:svm-text-base svm-font-semibold"><?php echo $superhero_periode_year; ?></span>
            </div>
          </div>

          <span class="svm-block md:svm-hidden">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
          </span>
          <h3 class="svm-text-blue-main svm-font-semibold svm-text-xl md:svm-text-3xl svm-mt-4 svm-mb-1 svm-block md:svm-hidden"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_name', true)); ?></h3>
          <span class="svm-text-base md:svm-text-lg svm-inline-block md:svm-hidden"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_position', true)); ?></span>
        </div>
        <div class="svm-self-center svm-text-center md:svm-text-left">
          <div class="svm-pb-0 md:svm-pb-8 svm-mb-0 md:svm-mb-8 svm-border-0 md:svm-border-b svm-border-gray-300">
            <img class="svm-absolute svm-w-16 svm-h-16 -svm-mt-3 -svm-ml-0 md:-svm-ml-12 svm-opacity-50" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/quote.png'; ?>" alt="quote" loading="lazy">
            <blockquote class="svm-text-gray-600 svm-mb-0 md:svm-mb-4 svm-text-base md:svm-text-lg svm-line-height-2 svm-max-w-xl lg:svm-max-w-2xl svm-mx-auto"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_quote', true)); ?></blockquote>
          </div>
          <span class="svm-hidden md:svm-block">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
            <img class="svm-w-5 svm-h-5 svm-inline-block" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/star-rating.png'; ?>" alt="star" loading="lazy">
          </span>
          <h3 class="svm-text-blue-main svm-font-semibold svm-text-xl md:svm-text-3xl svm-mt-4 svm-mb-1 svm-hidden md:svm-block"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_name', true)); ?></h3>
          <span class="svm-text-base md:svm-text-lg svm-hidden md:svm-inline-block"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_superhero_position', true)); ?></span>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="svm-bg-white svm-py-6 md:svm-py-10 svm-hidden">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-m-4 svm-rounded-3xl svm-relative svm-bg-cover svm-bg-no-repeat svm-bg-center svm-shadow-xl" style="background-image: url('<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'general_banner_video_thumbnail', true))); ?>');">
        <?php if(get_post_meta(get_the_ID(), 'general_banner_video_youtube_link', true)) : ?>
        <svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo esc_url(get_post_meta(get_the_ID(), 'general_banner_video_youtube_link', true)); ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="32" cy="32" r="32" fill="currentColor"></circle>
          <path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
        </svg>
        <?php endif; ?>
        
        <div class="svm-col-span-2 svm-px-14 md:svm-px-16 svm-pt-16 svm-pb-8 md:svm-py-40 svm-mt-48 md:svm-mt-0 svm-bg-blue-main svm-rounded-full svm-rounded-tl-[8787px] md:svm-rounded-tl-[999px] svm-rounded-bl-[999px] svm-rounded-br-[999px] md:svm-rounded-br-full">
          <h2 class="svm-section-title svm-text-white"><?php echo esc_html(get_post_meta(get_the_ID(), 'general_banner_video_title', true)); ?></nobr></h2>
        </div>
      </div>
    </div>
  </section>

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
      <div id="testimoni-karyawan" data-gap="32" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style">
        <div class="svm-flex svm-flex-nowrap svm-gap-4 svm-match-height">
          <?php while($employee_testimonials->have_posts()) : $employee_testimonials->the_post(); ?>
          <div class="svm-w-full md:svm-w-1/2 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-min-h-[384px] svm-rounded-3xl svm-bg-white svm-shadow-xl svm-match-item svm-slide-item">
              <div class="svm-flex svm-flex-nowrap svm-items-center svm-gap-4 svm-mb-6 md:svm-mb-8">
                <?php if(has_post_thumbnail(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true))) : ?>
                <div class="svm-flex-none">
                  <img class="svm-w-16 svm-h-16 svm-object-cover svm-rounded-full" src="<?php echo esc_url(get_the_post_thumbnail_url(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true))); ?>" alt="employee" loading="lazy">
                </div>
                <?php endif; ?>

                <div>
                  <h3 class="svm-font-medium svm-text-lg md:svm-text-xl"><?php echo esc_html(get_the_title(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true))); ?></h3>
                  <span class="svm-inline-block svm-font-semibold svm-text-blue-main"><?php echo esc_html(get_post_meta(get_post_meta(get_the_ID(), 'employee_testimonial_detail', true), 'jabatan', true)); ?></span>
                </div>
              </div>

              <img class="svm-absolute svm-w-12 svm-h-12 -svm-mt-2 -svm-ml-4 svm-opacity-50" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/career/quote.png'; ?>" alt="quote" loading="lazy">
              <blockquote class="svm-text-gray-600 svm-leading-8"><?php echo esc_html(get_post_meta(get_the_ID(), 'employee_testimonial_content', true)); ?></blockquote>
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

  <?php
    $all_testimonials = array_map('intval', get_post_meta(get_the_ID(), 'general_video_testimonial_playlist', true));
    $general_video_testimonial_title = get_post_meta(get_the_ID(), 'general_video_testimonial_title', true);

    $args = array(
      'post_type' => 'employee_testimonial',
      'post_status' => 'publish',
      'post__in' => $all_testimonials,
      'posts_per_page' => -1,
      'orderby' => 'date',
      'order' => 'DESC',
			'meta_query' => array(
				array(
					'key' => 'employee_testimonial_video',
					'value' => true,
					'compare' => '='
				)
			)
    );

    $employee_testimonials = new WP_Query($args);

    if($employee_testimonials->have_posts()) :
  ?>
  <section class="svm-bg-gray-900 svm-py-12 md:svm-py-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">    
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-gap-4 svm-items-center">
        <?php
          $j = 1;
          $first_url = "";
          $first_thumbnail = "";
          
          while($employee_testimonials->have_posts()) : $employee_testimonials->the_post();
            if( have_rows('employee_testimonial_youtube_video') ) :
              while( have_rows('employee_testimonial_youtube_video') ) : the_row();
                if($j === 1) :
                  $first_url =  esc_url(get_sub_field('employee_testimonial_youtube_video_link'));
                  $first_thumbnail = esc_url(wp_get_attachment_url(get_sub_field('employee_testimonial_youtube_video_thumbnail')));
                endif;
              endwhile;
            endif;
            
            $j++;  
          endwhile;
        ?>
				<div class="svm-relative svm-col-span-3 svm-self-center">
					<div class="svm-flex svm-flex-nowrap svm-gap-4 svm-match-height">
            <div class="svm-w-full svm-flex-none last:svm-pr-4 svm-relative svm-playlist-preview">
              <svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo $first_url; ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="32" cy="32" r="32" fill="currentColor"></circle>
                <path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
              </svg>
              <img class="svm-w-full svm-h-96 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo $first_thumbnail; ?>" alt="testimoni" loading="lazy">
            </div>
				  </div>
				</div>
        <div class="svm-col-span-2 svm-px-4">
					<div class="svm-pr-0 md:svm-pr-16">
						<h2 class="svm-section-title svm-text-white svm-mb-2"><?php echo esc_html($general_video_testimonial_title); ?></h2>
            <div class="svm-max-h-72 svm-overflow-y-scroll svm-overflow-style svm-vertical svm-pr-2 svm-pb-2">
              <?php $i = 1; ?>
              <?php while($employee_testimonials->have_posts()) : $employee_testimonials->the_post(); ?>
              <?php if( have_rows('employee_testimonial_youtube_video') ) : ?>
							<?php while( have_rows('employee_testimonial_youtube_video') ) : the_row(); ?>
              <div class="svm-bg-white svm-rounded-lg svm-px-5 svm-py-3 svm-mt-2 svm-truncate hover:svm-bg-red-main hover:svm-text-white svm-cursor-pointer svm-playlist-item <?php echo ($i === 1 ? 'svm-playlist-item-active' : ''); ?>" data-url="<?php echo esc_url(get_sub_field('employee_testimonial_youtube_video_link')); ?>" data-thumbnail="<?php echo esc_url(wp_get_attachment_url(get_sub_field('employee_testimonial_youtube_video_thumbnail'))); ?>" title="<?php echo esc_html(get_the_title()); ?>"><?php echo esc_html(get_the_title()); ?></div>
              <?php endwhile; ?>
							<?php endif; ?>
              <?php $i++; ?>
              <?php endwhile; ?>
            </div>
					</div>
				</div>
			</div>
    </div>
  </section>
  <?php
      wp_reset_query();
    endif;
  ?>

  <?php
    $args = array(
      'post_type' => 'gallery',
      'post_status' => 'publish',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
          'taxonomy' => 'post_tag',
          'field' => 'term_id',
          'terms' => array( get_post_meta(get_the_ID(), 'career_workplace_gallery_bookmark', true) )
        )
      )
    );

    $workplace = new WP_Query($args);
  ?>
  <section class="svm-bg-white <?php echo ($workplace->have_posts() ? 'svm-pb-12 md:svm-pb-20' : ''); ?> svm-pt-6 md:svm-pt-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">
      <?php if($workplace->have_posts()) : ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div class="svm-text-center">
          <h2 class="svm-section-title svm-mb-2 svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_workplace_title', true)); ?></h2>
          <?php echo (get_post_meta(get_the_ID(), 'career_workplace_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-3xl svm-mx-auto svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'career_workplace_subtitle', true)) . '</p>' : ''); ?>
        </div>
      </div>

      <div class="md:svm-flex md:svm-flex-wrap svm-hidden">
        <?php $i = 1; ?>
        <?php while($workplace->have_posts()) : $workplace->the_post(); ?>
        <div class="svm-w-full <?php echo ($i <= 2 ? 'lg:svm-w-1/2' : 'lg:svm-w-1/3'); ?> svm-p-4">
          <img class="svm-w-full svm-h-96 svm-object-cover svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="gallery" loading="lazy">
        </div>
        <?php $i++; ?>
        <?php endwhile; ?>
      </div>

      <div class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style svm-block md:svm-hidden">
        <div class="svm-flex svm-flex-nowrap svm-gap-4">
          <?php while($workplace->have_posts()) : $workplace->the_post(); ?>
          <div class="svm-w-full svm-flex-none last:svm-pr-4 svm-relative">
            <img class="svm-w-full svm-h-96 svm-object-cover svm-rounded-3xl svm-cursor-pointer svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="gallery" loading="lazy">
          </div>
          <?php endwhile; ?>
        </div>
      </div>
      <?php wp_reset_query(); ?>
      <?php endif; ?>
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

  <section class="svm-grid svm-wrap-media svm-h-screen svm-content-center svm-bg-slate-100 svm-fixed svm-top-0 svm-left-0 svm-w-full svm-z-50 svm-invisible">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-p-4">
        <div class="svm-relative svm-w-[330px] md:svm-w-[660px] svm-h-[330px] md:svm-h-[440px] svm-mx-auto">
          <div class="svm-content-media"></div>
          
          <div class="svm-grid svm-content-center svm-text-center svm-absolute svm-top-0 svm-right-0 -svm-mr-3 -svm-mt-3 svm-h-10 svm-w-10 svm-bg-black/50 hover:svm-bg-black/80 svm-rounded-full svm-cursor-pointer svm-close-media">
            <svg class="svm-svg-icon" viewBox="0 0 20 20">
              <path fill="#f8fafc" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
endwhile;

get_footer();
?>