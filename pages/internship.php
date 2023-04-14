<?php
/*
Template Name: Internship
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
?>

  <section class="svm-bg-white svm-pt-12 md:svm-pt-20 svm-pb-6 md:svm-pb-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-max-w-2xl svm-mx-auto svm-p-4 svm-text-center svm-mb-4">
        <?php echo (get_post_meta(get_the_ID(), 'internship_hero_tagline', true) ? '<span class="svm-badge svm-text-white svm-bg-red-main svm-mb-2">' . esc_html(get_post_meta(get_the_ID(), 'internship_hero_tagline', true)) . '</span>' : ''); ?>
        <h1 class="svm-hero-title svm-mb-4 svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_hero_title', true)); ?></h1>
        <?php echo (get_post_meta(get_the_ID(), 'internship_hero_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'internship_hero_subtitle', true)) . '</p>' : ''); ?>
      </div>

			<div class="svm-max-w-3xl svm-mx-auto svm-p-4 svm-relative svm-hidden">
        <?php if(get_post_meta(get_the_ID(), 'internship_hero_youtube_link', true)) : ?>
				<svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo esc_url(get_post_meta(get_the_ID(), 'internship_hero_youtube_link', true)); ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="32" cy="32" r="32" fill="currentColor"></circle>
          <path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
        </svg>
        <?php endif; ?>

				<img class="svm-w-full svm-h-[18rem] md:svm-h-[21rem] svm-rounded-3xl svm-object-cover svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'internship_hero_thumbnail', true))); ?>" alt="internship" loading="lazy">
			</div>

      <?php
        $all_testimonials = array_map('intval', get_post_meta(get_the_ID(), 'general_student_testimonial_playlist', true));
        $general_student_testimonial_title = get_post_meta(get_the_ID(), 'general_student_testimonial_title', true);

        $args = array(
          'post_type' => 'student_testimonial',
          'post_status' => 'publish',
          'post__in' => $all_testimonials,
          'posts_per_page' => -1,
          'orderby' => 'date',
          'order' => 'DESC',
          'meta_query' => array(
            array(
              'key' => 'student_testimonial_video',
              'value' => true,
              'compare' => '='
            )
          )
        );

        $student_testimonials = new WP_Query($args);

        if($student_testimonials->have_posts()) :
      ?>
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-gap-4 svm-items-center">
        <?php
          $j = 1;
          $first_url = "";
          $first_thumbnail = "";
          
          while($student_testimonials->have_posts()) : $student_testimonials->the_post();
            if( have_rows('student_testimonial_youtube_video') ) :
              while( have_rows('student_testimonial_youtube_video') ) : the_row();
                if($j === 1) :
                  $first_url =  esc_url(get_sub_field('student_testimonial_youtube_video_link'));
                  $first_thumbnail = esc_url(wp_get_attachment_url(get_sub_field('student_testimonial_youtube_video_thumbnail')));
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
              <img class="svm-w-full svm-h-[18rem] md:svm-h-[21rem] svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo $first_thumbnail; ?>" alt="testimoni" loading="lazy">
            </div>
				  </div>
				</div>
        <div class="svm-col-span-2 svm-px-4">
					<div class="svm-pr-0 md:svm-pr-16">
						<h2 class="svm-section-title svm-mb-2"><?php echo esc_html($general_student_testimonial_title); ?></h2>
            <div class="svm-max-h-60 svm-overflow-y-scroll svm-overflow-style svm-vertical svm-pr-2 svm-pb-2">
              <?php $i = 1; ?>
              <?php while($student_testimonials->have_posts()) : $student_testimonials->the_post(); ?>
              <?php if( have_rows('student_testimonial_youtube_video') ) : ?>
							<?php while( have_rows('student_testimonial_youtube_video') ) : the_row(); ?>
              <div class="svm-bg-slate-50 svm-rounded-lg svm-px-5 svm-py-3 svm-mt-2 svm-truncate hover:svm-bg-red-main hover:svm-text-white svm-cursor-pointer svm-playlist-item <?php echo ($i === 1 ? 'svm-playlist-item-active' : ''); ?>" data-url="<?php echo esc_url(get_sub_field('student_testimonial_youtube_video_link')); ?>" data-thumbnail="<?php echo esc_url(wp_get_attachment_url(get_sub_field('student_testimonial_youtube_video_thumbnail'))); ?>" title="<?php echo esc_html(get_the_title()); ?>"><?php echo esc_html(get_the_title()); ?></div>
              <?php endwhile; ?>
							<?php endif; ?>
              <?php $i++; ?>
              <?php endwhile; ?>
            </div>
					</div>
				</div>
			</div>
      <?php
          wp_reset_query();
        endif;
      ?>
    </div>
  </section>

	<section class="svm-bg-white svm-pt-6 md:svm-pt-10 svm-pb-12 md:svm-pb-20">
		<div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center svm-relative">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_benefit_title', true)); ?></h2>
          </div>
        </div>
      </div>
			<div class="svm-flex svm-flex-wrap svm-justify-center">
        <?php if( have_rows('internship_benefit_item_1') ) : ?>
        <?php while( have_rows('internship_benefit_item_1') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_1_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8 svm-mb-4 md:svm-mb-0">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_1_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_1_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        
        <?php if( have_rows('internship_benefit_item_2') ) : ?>
        <?php while( have_rows('internship_benefit_item_2') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_2_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8 svm-mb-4 md:svm-mb-0">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_2_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_2_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('internship_benefit_item_3') ) : ?>
        <?php while( have_rows('internship_benefit_item_3') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_3_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8 svm-mb-4 md:svm-mb-0">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_3_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_3_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('internship_benefit_item_4') ) : ?>
        <?php while( have_rows('internship_benefit_item_4') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_4_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8 svm-mb-4 md:svm-mb-0">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_4_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_4_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('internship_benefit_item_5') ) : ?>
        <?php while( have_rows('internship_benefit_item_5') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_5_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8 svm-mb-4 md:svm-mb-0">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_5_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_5_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('internship_benefit_item_6') ) : ?>
        <?php while( have_rows('internship_benefit_item_6') ) : the_row(); ?>
        <?php if(get_sub_field('internship_benefit_item_6_enabled')) : ?>
				<div class="svm-w-full md:svm-w-1/3 svm-p-4 md:svm-p-8">
					<img class="svm-w-20 svm-h-20 svm-mx-auto svm-mb-4" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('internship_benefit_item_6_icon'))); ?>" alt="mentor" loading="lazy">
					<h3 class="svm-text-center svm-text-lg md:svm-text-xl svm-font-semibold svm-leading-8 svm-max-w-[16rem] md:svm-max-w-[18rem] svm-mx-auto"><?php echo esc_html(get_sub_field('internship_benefit_item_6_label')); ?></h3>
				</div>
        <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
			</div>
		</div>
	</section>

  <?php
    $args = array(
      'post_type' => 'student_testimonial',
      'post_status' => 'publish',
      'posts_per_page' => 5,
      'orderby' => 'date',
      'order' => 'DESC'
    );

    $student_testimonials = new WP_Query($args);

    if($student_testimonials->have_posts()) :
  ?>
	<section class="svm-bg-slate-100 svm-py-12 md:svm-py-20 svm-testimonial-section">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">
      <?php if( have_rows('internship_section_student_testimonial') ) : ?>
      <?php while( have_rows('internship_section_student_testimonial') ) : the_row(); ?>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center svm-relative">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_sub_field('internship_section_student_testimonial_title')); ?></h2>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>

      <div id="testimoni-magang" data-gap="32" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style">
        <div class="svm-flex svm-flex-nowrap svm-gap-4 svm-match-height">
          <?php while($student_testimonials->have_posts()) : $student_testimonials->the_post(); ?>
          <div class="svm-w-full md:svm-w-1/2 svm-flex-none last:svm-pr-4 svm-relative">
            <div class="svm-p-6 md:svm-p-8 svm-min-h-[384px] svm-rounded-3xl svm-bg-white svm-shadow-xl svm-match-item svm-slide-item">
              <div class="svm-flex svm-flex-nowrap svm-items-center svm-gap-4 svm-mb-6 md:svm-mb-8">
                <div class="svm-flex-none">
                  <img class="svm-w-16 svm-h-16 svm-object-cover svm-rounded-full" src="<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'student_testimonial_photo', true))); ?>" alt="student" loading="lazy">
                </div>
                <div>
                  <h3 class="svm-font-medium svm-text-lg md:svm-text-xl"><?php echo esc_html(get_post_meta(get_the_ID(), 'student_testimonial_name', true)); ?></h3>
                  <span class="svm-block svm-font-semibold svm-text-blue-main"><?php echo esc_html(get_post_meta(get_the_ID(), 'student_testimonial_job', true)); ?> <nobr><?php echo esc_html('(' . get_post_meta(get_the_ID(), 'student_testimonial_origin', true) . ')'); ?></nobr></span>
                </div>
              </div>

              <img class="svm-absolute svm-w-12 svm-h-12 -svm-mt-2 -svm-ml-4 svm-opacity-50" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/internship/quote.png'; ?>" alt="quote" loading="lazy">
              <blockquote class="svm-text-gray-600 svm-leading-8 svm-text-base"><?php echo esc_html(get_post_meta(get_the_ID(), 'student_testimonial_content', true)); ?></blockquote>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>

      <?php if($student_testimonials->found_posts > 1) : ?>
      <svg class="svm-svg-icon svm-prev-testimonial-item svm-hidden svm-prev-button" viewBox="0 0 22 20" data-target="#testimoni-magang">
        <path d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
      </svg>

      <svg class="svm-svg-icon svm-next-testimonial-item svm-hidden svm-next-button" viewBox="0 0 22 20" data-target="#testimoni-magang">
        <path d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
      </svg>
      <?php endif; ?>
    </div>
  </section>
  <?php
      wp_reset_query();
    endif;
  ?>

  <?php $faq_internship = wp_get_nav_menu_items(wp_get_nav_menu_name('faq_internship')); ?>
  <?php if(count($faq_internship) > 0) : ?>
  <section class="svm-bg-white svm-py-12 md:svm-py-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo wp_get_nav_menu_name('faq_internship'); ?></h2>
          </div>
        </div>
      </div>
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4">
        <div>
          <div class="svm-max-w-2xl svm-mx-auto">
            <div id="accordion-faq" class="svm-accordion" data-accordion="collapse" data-active-classes="svm-text-blue-main" data-inactive-classes="svm-text-black">
              <?php
                $i = 1;

                foreach($faq_internship as $row) :
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
    </div>
  </section>
  <?php endif; ?>

  <section class="svm-bg-blue-main svm-py-12 md:svm-py-20 svm-relative svm-overflow-hidden">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative svm-z-10">
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-p-4">
        <div class="svm-col-span-3">
          <h2 class="svm-section-title svm-mb-2 svm-text-white"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_cta_title', true)); ?></h2>
          
          <?php echo (get_post_meta(get_the_ID(), 'internship_cta_line_text_1', true) ? '<p class="svm-text-gray-100 svm-leading-8 svm-text-base svm-mb-4">' . esc_html(get_post_meta(get_the_ID(), 'internship_cta_line_text_1', true)) . '</p>' : ''); ?>

          <?php echo (get_post_meta(get_the_ID(), 'internship_cta_line_text_2', true) ? '<p class="svm-text-gray-100 svm-leading-8 svm-text-base svm-mb-8 md:svm-mb-0">' . esc_html(get_post_meta(get_the_ID(), 'internship_cta_line_text_2', true)) . '</p>' : ''); ?>
        </div>

        <?php if( have_rows('internship_cta_button') ) : ?>
        <?php while( have_rows('internship_cta_button') ) : the_row(); ?>
        <div class="svm-col-span-2 svm-self-center svm-text-center">
          <a href="<?php echo esc_url(get_sub_field('internship_cta_button_link')); ?>">
            <button class="svm-base-button svm-bg-red-main svm-text-white svm-mr-0 md:svm-mr-2 svm-mb-2 md:svm-mb-0 svm-w-full md:svm-w-auto"><?php echo esc_html(get_sub_field('internship_cta_button_label')); ?></button>
          </a>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
    <img class="svm-hidden lg:svm-block svm-absolute svm-left-0 svm-top-0 svm-h-[842px] svm-w-auto -svm-mt-48 svm-pb-16" src="<?php echo get_stylesheet_directory_uri() . '/assets/static/img/internship/square.png'; ?>" alt="background square" loading="lazy">
  </section>

  <?php
    $args_1 = array(
      'post_type' => 'gallery',
      'post_status' => 'publish',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
          'taxonomy' => 'post_tag',
          'field' => 'term_id',
          'terms' => array( get_post_meta(get_the_ID(), 'internship_gallery_1_bookmark', true) )
        )
      )
    );

    $args_2 = array(
      'post_type' => 'gallery',
      'post_status' => 'publish',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC',
      'tax_query' => array(
        array(
          'taxonomy' => 'post_tag',
          'field' => 'term_id',
          'terms' => array( get_post_meta(get_the_ID(), 'internship_gallery_2_bookmark', true) )
        )
      )
    );

    $gallery_1 = new WP_Query($args_1);
    $gallery_2 = new WP_Query($args_2);

    if($gallery_1->have_posts() || $gallery_2->have_posts()) :
  ?>
  <section class="svm-bg-white svm-py-12 md:svm-py-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_partnership_title', true)); ?></h2>
          </div>
        </div>
      </div>
      <div class="svm-mb-8 svm-border-b svm-border-gray-200">
        <ul class="svm-flex svm-flex-wrap svm-justify-center -svm-mb-px svm-tab" id="myTab" role="tablist">
          <?php if($gallery_1->have_posts()) : ?>
          <li class="svm-mr-2" role="presentation">
            <button class="svm-inline-block svm-py-4 svm-px-4 svm-text-lg md:svm-text-xl svm-font-semibold svm-text-center svm-text-gray-500 svm-border-b-2 svm-border-transparent hover:svm-text-gray-600 hover:svm-border-gray-300 svm-active" id="visitation-tab" data-tabs-toggle="#myTabContent" data-tabs-target="#visitation" type="button" role="tab" aria-controls="visitation" aria-selected="false"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_gallery_1_label', true)); ?></button>
          </li>
          <?php endif; ?>
          
          <?php if($gallery_2->have_posts()) : ?>
          <li class="svm-mr-2" role="presentation">
            <button class="svm-inline-block svm-py-4 svm-px-4 svm-text-lg md:svm-text-xl svm-font-semibold svm-text-center svm-text-gray-500 svm-border-b-2 svm-border-transparent hover:svm-text-gray-600 hover:svm-border-gray-300 <?php echo (!$gallery_1->have_posts() ? 'svm-active' : ''); ?>" id="magang-tab" data-tabs-toggle="#myTabContent" data-tabs-target="#magang" type="button" role="tab" aria-controls="magang" aria-selected="true"><?php echo esc_html(get_post_meta(get_the_ID(), 'internship_gallery_2_label', true)); ?></button>
          </li>
          <?php endif; ?>
        </ul>
      </div>
      <div id="myTabContent">
        <?php if($gallery_1->have_posts()) : ?>
        <div id="visitation" role="tabpanel" aria-labelledby="visitation-tab">
          <div class="md:svm-flex md:svm-flex-wrap svm-hidden">
            <div class="svm-w-full md:svm-w-1/2 svm-p-4">
              <div class="svm-flex svm-flex-wrap -svm-m-4">
                <?php if($gallery_1->posts[0]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-object-top svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[0]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[0]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_1->posts[1]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[1]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[1]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_1->posts[2]) : ?>
                <div class="svm-w-full svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-[28rem] svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[2]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[2]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>

            <?php if(count($gallery_1->posts) > 3) : ?>
            <div class="svm-w-full md:svm-w-1/2 svm-p-4">
              <div class="svm-flex svm-flex-wrap -svm-m-4">
                <?php if($gallery_1->posts[3]) : ?>
                <div class="svm-w-full svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-[28rem] svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[3]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[3]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_1->posts[4]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[4]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[4]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_1->posts[5]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[5]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_1->posts[5]->ID)); ?>" alt="visitation" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>

          <div class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style svm-block md:svm-hidden">
            <div class="svm-flex svm-flex-nowrap svm-gap-4">
              <?php while($gallery_1->have_posts()) : $gallery_1->the_post(); ?>
              <div class="svm-w-full svm-flex-none last:svm-pr-4 svm-relative">
                <img class="svm-w-full svm-h-96 svm-object-cover svm-shadow-xl svm-rounded-3xl svm-cursor-pointer svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="visitation" loading="lazy">
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <?php if($gallery_2->have_posts()) : ?>
        <div class="svm-hidden" id="magang" role="tabpanel" aria-labelledby="magang-tab">
          <div class="md:svm-flex md:svm-flex-wrap svm-hidden">
            <div class="svm-w-full md:svm-w-1/2 svm-p-4">
              <div class="svm-flex svm-flex-wrap -svm-m-4">
                <?php if($gallery_2->posts[0]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-object-top svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[0]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[0]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_2->posts[1]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[1]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[1]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_2->posts[2]) : ?>
                <div class="svm-w-full svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-[28rem] svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[2]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[2]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            
            <?php if(count($gallery_2->posts) > 3) : ?>
            <div class="svm-w-full md:svm-w-1/2 svm-p-4">
              <div class="svm-flex svm-flex-wrap -svm-m-4">
              <?php if($gallery_2->posts[3]) : ?>
                <div class="svm-w-full svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-[28rem] svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[3]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[3]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_2->posts[4]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[4]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[4]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>

                <?php if($gallery_2->posts[5]) : ?>
                <div class="svm-w-full lg:svm-w-1/2 svm-p-4">
                  <img class="svm-rounded-3xl svm-transition svm-ease-in-out hover:svm-scale-105 svm-cursor-pointer svm-w-full svm-h-64 svm-object-cover svm-shadow-xl svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[5]->ID)); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url($gallery_2->posts[5]->ID)); ?>" alt="internship" loading="lazy">
                </div>
                <?php endif; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>

          <div class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style svm-block md:svm-hidden">
            <div class="svm-flex svm-flex-nowrap svm-gap-4">
              <?php while($gallery_2->have_posts()) : $gallery_2->the_post(); ?>
              <div class="svm-w-full svm-flex-none last:svm-pr-4 svm-relative">
                <img class="svm-w-full svm-h-96 svm-object-cover svm-shadow-xl svm-rounded-3xl svm-cursor-pointer svm-open-media" data-type="image" data-url="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="magang" loading="lazy">
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <?php wp_reset_query(); ?>
  <?php endif; ?>

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