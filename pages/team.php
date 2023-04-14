<?php
/*
Template Name: Team
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
?>

  <section class="svm-py-12 md:svm-py-20 svm-bg-cover svm-bg-no-repeat svm-bg-bottom" style="background-image: url('<?php echo get_stylesheet_directory_uri() . '/assets/static/img/team/half-circle.png'; ?>');">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-max-w-2xl svm-mx-auto svm-p-4 svm-text-center svm-mb-8">
        <h1 class="svm-hero-title svm-mb-4 svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'team_hero_title', true)); ?></h1>
				<?php echo (get_post_meta(get_the_ID(), 'team_hero_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'team_hero_subtitle', true)) . '</p>' : ''); ?>
      </div>
			<?php if( have_rows('team_hero_avatar') ) : ?>
			<?php while( have_rows('team_hero_avatar') ) : the_row(); ?>
			<div class="svm-flex svm-flex-wrap svm-justify-center">
				<?php if(get_sub_field('team_hero_avatar_item_1') || get_sub_field('team_hero_avatar_item_10')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="3">
					<?php if(get_sub_field('team_hero_avatar_item_1')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_1'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_10')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_10'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if(get_sub_field('team_hero_avatar_item_2') || get_sub_field('team_hero_avatar_item_7')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="6">
					<?php if(get_sub_field('team_hero_avatar_item_2')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_2'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_7')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_7'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if(get_sub_field('team_hero_avatar_item_3') || get_sub_field('team_hero_avatar_item_11')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="2">
					<?php if(get_sub_field('team_hero_avatar_item_3')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_3'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_11')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_11'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if(get_sub_field('team_hero_avatar_item_4') || get_sub_field('team_hero_avatar_item_8')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="5">
					<?php if(get_sub_field('team_hero_avatar_item_4')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_4'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_8')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_8'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if(get_sub_field('team_hero_avatar_item_5') || get_sub_field('team_hero_avatar_item_12')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="4">
					<?php if(get_sub_field('team_hero_avatar_item_5')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_5'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_12')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_12'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>

				<?php if(get_sub_field('team_hero_avatar_item_6') || get_sub_field('team_hero_avatar_item_9')) : ?>
				<div class="svm-w-1/3 md:svm-w-1/6 svm-p-4 svm-h-16 md:svm-h-20 svm-relative svm-spinner svm-mb-8" data-interval="6">
					<?php if(get_sub_field('team_hero_avatar_item_6')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_6'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
					
					<?php if(get_sub_field('team_hero_avatar_item_9')) : ?>
					<img class="svm-spinner-item svm-absolute svm-h-16 md:svm-h-20 svm-w-16 md:svm-w-20 svm-top-0 svm-left-1/2 -svm-ml-8 md:-svm-ml-10 svm-grayscale-0 svm-hidden" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('team_hero_avatar_item_9'))); ?>" alt="hero" loading="lazy">
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
      <?php endif; ?>
    </div>
  </section>

	<?php
		$top_heroes = array_map('intval', get_post_meta(get_the_ID(), 'team_top_heroes_list', true));

		if(count($top_heroes) > 0) :
	?>
	<section class="svm-bg-white svm-pt-12 md:svm-pt-20 svm-pb-6 md:svm-pb-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-p-4 svm-mb-8">
        <div>
          <h2 class="svm-section-title svm-text-center md:svm-text-left"><?php echo esc_html(get_post_meta(get_the_ID(), 'team_top_heroes_title', true)); ?></h2>
        </div>
      </div>
			<div class="svm-relative svm-flex svm-flex-wrap svm-border-b svm-pb-12 md:svm-pb-20 svm-border-gray-300 svm-p-4">
				<?php foreach($top_heroes as $team_id) : ?>
				<div class="svm-w-full md:svm-w-1/2 lg:svm-w-1/4 svm-px-4 svm-bg-white">
					<img class="svm-rounded-full svm-mb-4 svm-shadow-lg svm-mx-auto md:svm-mx-0 svm-h-24 md:svm-h-32 svm-w-24 md:svm-w-32 svm-object-cover" src="<?php echo esc_url(get_the_post_thumbnail_url($team_id)); ?>" alt="<?php echo esc_html(get_the_title($team_id)); ?>" loading="lazy">
					<h3 class="svm-text-lg md:svm-text-xl svm-font-semibold svm-text-center md:svm-text-left svm-mb-1"><?php echo esc_html(get_the_title($team_id)); ?></h3>
					<p class="svm-mb-8 md:svm-mb-0 svm-text-md md:svm-text-lg svm-text-center md:svm-text-left svm-text-base"><?php echo esc_html(get_post_meta($team_id, 'jabatan', true)); ?></p>
				</div>
				<?php endforeach; ?>
			</div>
    </div>
  </section>
	<?php endif; ?>

	<section class="svm-bg-white svm-py-6 md:svm-py-10">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-8">
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-font-semibold svm-text-2xl md:svm-text-3xl svm-mb-2 svm-max-w-[17rem] svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'team_all_team_title', true)); ?></h2>
						<?php echo (get_post_meta(get_the_ID(), 'team_all_team_line_text_1', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-3xl svm-mx-auto svm-mb-4 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'team_all_team_line_text_1', true)) . '</p>' : ''); ?>
						<?php echo (get_post_meta(get_the_ID(), 'team_all_team_line_text_2', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-2xl svm-mx-auto svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'team_all_team_line_text_2', true)) . '</p>' : ''); ?>
          </div>
        </div>
      </div>

			<?php
				$all_teams = get_post_meta(get_the_ID(), 'team_all_team_position', true);
				$page_details = get_post(get_post_meta(get_the_ID(), 'team_all_team_page_detail', true));
				$page_details_slug = $page_details->post_name;

				$label_employee = __('Karyawan', 'sevima');
				$label_quota = __('Kuota', 'sevima');
				$label_button = __('Lihat Pekerjaan', 'sevima');

				if( have_rows('team_all_team_label') ) :
					while( have_rows('team_all_team_label') ) : the_row();
						$label_employee = __(esc_html(get_sub_field('team_all_team_label_employee')), 'sevima');
						$label_quota = __(esc_html(get_sub_field('team_all_team_label_quota')), 'sevima');
						$label_button = __(esc_html(get_sub_field('team_all_team_label_button')), 'sevima');
					endwhile;
				endif;
			?>
			<div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-3 svm-gap-4 svm-p-4">
				<?php foreach($all_teams as $team_id) : ?>
				<?php
					$team = get_term($team_id);

					$args = array(
						'post_type' => 'team',
						'post_status' => 'publish',
						'posts_per_page' => 3,
						'orderby' => 'title',
						'order' => 'ASC',
						'tax_query' => array(
							array(
								'taxonomy' => 'team_kategori',
								'field' => 'term_id',
								'terms' => array( $team->term_id )
							)
						)
					);
			
					$all_heroes = new WP_Query($args);
					$total_heroes = $all_heroes->found_posts;
					$count_diff = $total_heroes - 3;

					$args_2 = array(
						'post_type' => 'lowongan',
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'meta_query' => array(
							array(
								'key' => 'job_detail_team',
								'value' => $team->term_id,
								'compare' => 'LIKE'
							)
						)
					);

					$all_jobs = new WP_Query($args_2);
					$total_quota = 0;

					if($all_jobs->have_posts()) :
						while($all_jobs->have_posts()) : $all_jobs->the_post();
							$total_quota += (int) get_post_meta(get_the_ID(), 'kuota', true);
						endwhile;
					endif;
				?>
				<div>
					<div class="svm-bg-white svm-rounded-3xl svm-shadow-xl">
						<div class="svm-border-b svm-border-gray-300 svm-p-6 md:svm-p-8">
							<h4 class="svm-text-xl svm-font-semibold svm-mb-2 svm-h-auto svm-grid svm-content-end"><?php echo esc_html($team->name); ?></h4>
							<?php echo ($team->description ? '<p class="svm-text-gray-600 svm-leading-8 svm-text-base">' . esc_html(wp_trim_words($team->description, 8, '..')) . '</p>' : ''); ?>
						</div>
						<div class="svm-p-6 md:svm-p-8 svm-pb-2 md:svm-pb-4">
							<div class="svm-flex -svm-mx-2">
								<?php if($all_heroes->have_posts()) : ?>
								<div class="svm-w-1/2 svm-px-2">
									<p class="svm-mb-2 svm-font-medium svm-text-base"><?php echo $label_employee; ?></p>
									<div class="svm-flex">
										<?php $i = 1; ?>
										<?php while($all_heroes->have_posts()) : $all_heroes->the_post(); ?>
										<img class="svm-w-8 svm-h-8 <?php echo ($i > 1 ? '-svm-ml-2' : ''); ?> svm-rounded-full svm-object-cover" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php echo esc_html(get_the_title()); ?>" loading="lazy">
										<?php $i++; ?>
										<?php endwhile; ?>
										<?php wp_reset_query(); ?>

										<?php if($count_diff > 0) : ?>
										<div class="svm-flex svm-items-center svm-justify-center svm-w-8 svm-h-8 -svm-ml-2 svm-rounded-full svm-text-xs svm-bg-blue-100 svm-text-blue-main svm-font-semibold"><?php echo "+" . $count_diff; ?></div>
										<?php endif; ?>
									</div>
								</div>
								<?php endif; ?>

								<div class="svm-w-1/2 svm-px-2">
									<p class="svm-mb-2 svm-font-medium svm-text-base"><?php echo $label_quota; ?></p>
									<span class="svm-inline-block svm-mt-1 svm-py-1 svm-px-2 svm-rounded-full svm-text-xs svm-text-blue-main svm-bg-blue-100 svm-font-semibold"><?php echo "Tersedia " . $total_quota . " kuota"; ?></span>
								</div>
							</div>
						</div>
						<div class="svm-p-6 md:svm-p-8 svm-pt-2 md:svm-pt-4">
							<!-- <a href="#">
								<button class="svm-inline-block svm-base-button svm-bg-transparent svm-border svm-border-gray-300 svm-mb-3 md:svm-mb-4 svm-w-full">Lihat Selengkapnya</button>
							</a> -->

							<a href="<?php echo esc_url(home_url('/' . $page_details_slug . '/?filter=' . $team->slug, 'https')); ?>">
								<button class="svm-inline-block svm-base-button svm-bg-blue-main svm-text-white svm-border svm-w-full"><?php echo $label_button; ?></button>
							</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
    </div>
  </section>

	<section class="svm-bg-white svm-py-6 md:svm-py-10">
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
        <div>
          <div class="svm-max-w-4xl svm-mx-auto svm-text-center">
            <h2 class="svm-section-title svm-mb-2 svm-max-w-[17rem] svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'career_workplace_title', true)); ?></h2>
						<?php echo (get_post_meta(get_the_ID(), 'career_workplace_subtitle', true) ? '<p class="svm-text-gray-600 svm-leading-8 svm-max-w-xl lg:svm-max-w-3xl svm-mx-auto svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'career_workplace_subtitle', true)) . '</p>' : ''); ?>
          </div>
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

	<?php
		$all_tips = array_map('intval', get_post_meta(get_the_ID(), 'team_employee_tips_playlist', true));

    $args = array(
      'post_type' => 'employee_testimonial',
      'post_status' => 'publish',
			'post__in' => $all_tips,
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
	<section class="svm-bg-gray-900 svm-py-12 md:svm-py-20 svm-story-section">
    <div class="svm-container svm-max-w-6xl svm-mx-auto svm-relative">    
      <div class="svm-grid svm-grid-cols-1 md:svm-grid-cols-5 svm-gap-4">
				<div class="svm-self-center svm-col-span-2 svm-p-4">
					<div class="svm-pr-0 md:svm-pr-16">
						<h2 class="svm-section-title svm-mb-2 svm-text-white"><?php echo esc_html(get_post_meta(get_the_ID(), 'team_employee_tips_title', true)); ?></h2>
						<?php echo (get_post_meta(get_the_ID(), 'team_employee_tips_subtitle', true) ? '<p class="svm-text-gray-100 svm-leading-8 svm-text-base">' . esc_html(get_post_meta(get_the_ID(), 'team_employee_tips_subtitle', true)) . '</p>' : ''); ?>
					</div>
				</div>

				<div class="svm-relative svm-col-span-3">
					<div id="cerita-karyawan" data-gap="16" class="svm-relative svm-rounded-xl svm-overflow-x-auto svm-p-4 svm-pt-0 svm-pb-8 svm-overflow-style svm-dark">
						<div class="svm-flex svm-flex-nowrap svm-gap-4 svm-match-height">
							<?php while($employee_testimonials->have_posts()) : $employee_testimonials->the_post(); ?>
							<?php if( have_rows('employee_testimonial_youtube_video') ) : ?>
							<?php while( have_rows('employee_testimonial_youtube_video') ) : the_row(); ?>
							<div class="svm-w-full svm-flex-none last:svm-pr-4 svm-relative svm-slide-item">
								<svg class="svm-animate-play-button svm-text-red-main svm-open-media" data-type="video" data-url="<?php echo esc_url(get_sub_field('employee_testimonial_youtube_video_link')); ?>" width="84" height="84" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="32" cy="32" r="32" fill="currentColor"></circle>
									<path class="svm-text-white" d="M40.5 31.13L26.5 23.05C26.348 22.9622 26.1755 22.916 26 22.916C25.8245 22.916 25.652 22.9622 25.5 23.05C25.3474 23.1381 25.2208 23.265 25.133 23.4177C25.0452 23.5705 24.9993 23.7438 25 23.92V40.08C24.9993 40.2562 25.0452 40.4295 25.133 40.5822C25.2208 40.735 25.3474 40.8619 25.5 40.95C25.652 41.0378 25.8245 41.084 26 41.084C26.1755 41.084 26.348 41.0378 26.5 40.95L40.5 32.87C40.6539 32.7828 40.7819 32.6563 40.871 32.5035C40.96 32.3506 41.007 32.1769 41.007 32C41.007 31.8231 40.96 31.6494 40.871 31.4965C40.7819 31.3437 40.6539 31.2172 40.5 31.13ZM27 38.35V25.65L38 32L27 38.35Z" fill="currentColor"></path>
								</svg>
								<img class="svm-w-full svm-h-96 svm-object-cover svm-rounded-3xl svm-shadow-xl" src="<?php echo esc_url(wp_get_attachment_url(get_sub_field('employee_testimonial_youtube_video_thumbnail'))); ?>" alt="testimoni" loading="lazy">
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
							<?php endwhile; ?>
						</div>
					</div>
		
					<?php if($employee_testimonials->found_posts > 1) : ?>
					<svg class="svm-svg-icon svm-prev-story-item svm-hidden svm-prev-button" viewBox="0 0 22 20" data-target="#cerita-karyawan">
						<path d="M8.388,10.049l4.76-4.873c0.303-0.31,0.297-0.804-0.012-1.105c-0.309-0.304-0.803-0.293-1.105,0.012L6.726,9.516c-0.303,0.31-0.296,0.805,0.012,1.105l5.433,5.307c0.152,0.148,0.35,0.223,0.547,0.223c0.203,0,0.406-0.08,0.559-0.236c0.303-0.309,0.295-0.803-0.012-1.104L8.388,10.049z"></path>
					</svg>
		
					<svg class="svm-svg-icon svm-next-story-item svm-hidden svm-next-button" viewBox="0 0 22 20" data-target="#cerita-karyawan">
						<path d="M11.611,10.049l-4.76-4.873c-0.303-0.31-0.297-0.804,0.012-1.105c0.309-0.304,0.803-0.293,1.105,0.012l5.306,5.433c0.304,0.31,0.296,0.805-0.012,1.105L7.83,15.928c-0.152,0.148-0.35,0.223-0.547,0.223c-0.203,0-0.406-0.08-0.559-0.236c-0.303-0.309-0.295-0.803,0.012-1.104L11.611,10.049z"></path>
					</svg>
					<?php endif; ?>
				</div>
			</div>
    </div>
  </section>
	<?php
      wp_reset_query();
    endif;
  ?>

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