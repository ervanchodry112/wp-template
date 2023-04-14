<?php
/*
Template Name: Job
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
	$page_id = get_the_ID();

	$keyword = (isset($_GET['keyword']) && sanitize_text_field( $_GET['keyword'] ) != '' ? sanitize_text_field( $_GET['keyword'] ) : '');
	$team_kategori_slug = (isset($_GET['filter']) && sanitize_text_field( $_GET['filter'] ) != '' ? sanitize_text_field( $_GET['filter'] ) : '');
?>

	<section class="svm-grid svm-hero-section svm-content-end svm-bg-white svm-pb-0 md:svm-pb-20 svm-bg-no-repeat svm-bg-center svm-bg-cover" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo esc_url(wp_get_attachment_url(get_post_meta(get_the_ID(), 'job_hero_background', true))); ?>');">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-bg-white svm-p-6 md:svm-p-8 svm-m-4 svm-rounded-3xl svm-shadow-xl">
				<h1 class="svm-section-title svm-mb-4 svm-max-w-[17rem] md:svm-max-w-none"><?php echo esc_html(get_post_meta(get_the_ID(), 'job_hero_title', true)); ?></h1>
				<form method="GET" action="<?php echo home_url('/' . get_post_field('post_name', get_the_ID()) . '/'); ?>" class="svm-flex svm-flex-wrap svm-gap-4">
					<?php if($team_kategori_slug != '') : ?>
					<input type="hidden" name="filter" value="<?php echo esc_html($team_kategori_slug); ?>">
					<?php endif; ?>

					<div class="svm-flex-grow">
						<input type="search" name="keyword" class="svm-bg-transparent svm-border svm-border-gray-300 svm-rounded-full svm-px-6 md:svm-px-8 svm-py-4 md:svm-py-6 svm-w-full svm-text-sm md:svm-text-xl" placeholder="<?php echo esc_html(get_post_meta(get_the_ID(), 'job_hero_placeholder_search', true)); ?>" required="required" value="<?php echo ($keyword != '' ? esc_html($keyword) : ''); ?>">
					</div>

					<div class="svm-flex-grow md:svm-flex-none">
						<button type="submit" class="svm-base-button svm-bg-red-main svm-text-white svm-border svm-w-full md:svm-w-60 svm-px-4 md:svm-px-8 svm-py-3 md:svm-py-6 svm-text-base md:svm-text-xl"><?php echo esc_html(get_post_meta(get_the_ID(), 'job_hero_label_button', true)); ?></button>
					</div>
				</form>
			</div>
    </div>
  </section>

	<?php
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$posts_per_page = 10;

		$args = array(
			'post_type' => 'lowongan',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'ASC',
			'posts_per_page' => $posts_per_page	,
			'paged' => $paged,
			'meta_query' => array()
		);

		if($keyword != '') {
			$args['s'] = $keyword;
		}
		
		if($team_kategori_slug != '') {
			$team_kategori = get_term_by('slug', $team_kategori_slug, 'team_kategori');
			$team_kategori_id = $team_kategori->term_id;

			$args['meta_query'][] = array(
				'key' => 'job_detail_team',
				'value' => $team_kategori_id,
				'compare' => 'LIKE'
			);
		}

		$jobs = new WP_Query($args);
		$total_jobs = $jobs->found_posts;
		$total_pages = $jobs->max_num_pages;
		$range = 4;
	?>
	<section class="svm-bg-white svm-py-12 md:svm-py-20">
		<div class="svm-container svm-max-w-6xl svm-mx-auto">
			<div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-4">
        <div>
          <h2 class="svm-line-height-1-5 svm-text-lg md:svm-text-xl">
						<?php echo esc_html(str_replace('%total', $total_jobs, get_post_meta(get_the_ID(), 'job_list_title', true))); ?>

						<?php echo (isset($_GET['filter']) || isset($_GET['keyword']) ? '&nbsp;<a href="' . home_url('/' . get_post_field('post_name', get_the_ID()) . '/') . '" style="color: rgb(238, 39, 55);">' . esc_html(get_post_meta(get_the_ID(), 'job_list_label_remove_filter', true)) . '</a>' : ''); ?>
					</h2>
        </div>
      </div>

			<?php if($jobs->have_posts()) : ?>
			<div class="svm-px-4 svm-mb-4">
				<?php $i = 1; ?>
				<?php while($jobs->have_posts()) : $jobs->the_post(); ?>
				<div class="svm-flex svm-flex-wrap svm-items-center svm-px-4 md:svm-px-8 svm-py-6 <?php echo ($i % 2 === 0 ? '' : 'svm-bg-gray-100'); ?> svm-rounded-lg">
					<div class="svm-w-full md:svm-w-auto svm-mr-auto svm-mb-4 md:svm-mb-0">
						<h3 class="svm-text-lg md:svm-text-xl svm-font-medium"><?php echo esc_html(get_the_title()); ?></h3>
					</div>
					<div class="svm-w-full md:svm-w-auto lg:svm-mr-10 svm-mb-4 md:svm-mb-0">
						<div class="svm-flex svm-flex-wrap">
							<?php if(get_post_meta(get_the_ID(), 'job_detail_work_system', true)) : ?>
							<div class="svm-inline-flex svm-w-full lg:svm-w-40 svm-mb-2 lg:svm-mb-0 svm-items-center">
								<span class="svm-font-medium svm-text-sm md:svm-text-base svm-mx-0 md:svm-mx-auto"><?php echo esc_html(get_post_meta(get_the_ID(), 'job_detail_work_system', true)); ?></span>
							</div>
							<?php endif; ?>

							<?php if(get_post_meta(get_the_ID(), 'job_detail_work_type', true)) : ?>
							<div class="svm-inline-flex svm-w-full lg:svm-w-40 svm-items-center">
								<span class="svm-font-medium svm-text-sm md:svm-text-base svm-mx-0 md:svm-mx-auto"><?php echo esc_html(get_post_meta(get_the_ID(), 'job_detail_work_type', true)); ?></span>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="svm-w-full md:svm-w-auto">
						<a href="<?php echo esc_url(get_the_permalink()); ?>">
							<button class="svm-base-button svm-bg-blue-main svm-text-white svm-border svm-w-full"><?php echo esc_html(get_post_meta($page_id, 'job_list_label_button', true)); ?></button>
						</a>
					</div>
				</div>
				<?php $i++; ?>
				<?php endwhile; ?>
			</div>

			<?php
				$showitems = ($range * 2) + 1;

				if(!$total_pages) {
					$total_pages = 1;
				}

				if(1 != $total_pages) :
			?>
			<div class="svm-flex svm-flex-wrap svm-gap-2 svm-p-4 svm-justify-center">
        <div class="svm-mr-4 md:svm-mr-0">
          <a href="<?php echo get_pagenum_link(1); ?>">
						<button type="button" class="svm-p-2 svm-pagination-button svm-disabled">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="ic_fluent_arrow_previous_24_regular" fill="#212121" fill-rule="nonzero">
										<path d="M5.75,3 C5.37030423,3 5.05650904,3.28215388 5.00684662,3.64822944 L5,3.75 L5,20.25 C5,20.6642136 5.33578644,21 5.75,21 C6.12969577,21 6.44349096,20.7178461 6.49315338,20.3517706 L6.5,20.25 L6.5,3.75 C6.5,3.33578644 6.16421356,3 5.75,3 Z M18.7803301,3.21966991 C18.5140635,2.95340335 18.0973998,2.9291973 17.8037883,3.14705176 L17.7196699,3.21966991 L9.46966991,11.4696699 C9.20340335,11.7359365 9.1791973,12.1526002 9.39705176,12.4462117 L9.46966991,12.5303301 L17.7196699,20.7803301 C18.0125631,21.0732233 18.4874369,21.0732233 18.7803301,20.7803301 C19.0465966,20.5140635 19.0708027,20.0973998 18.8529482,19.8037883 L18.7803301,19.7196699 L11.0606602,12 L18.7803301,4.28033009 C19.0732233,3.98743687 19.0732233,3.51256313 18.7803301,3.21966991 Z" id="🎨-Color"/>
									</g>
								</g>
							</svg>
						</button>
					</a>
        </div>

				<?php if($paged > 1 && $showitems < $total_pages) : ?>
				<div class="svm-mr-8 svm-hidden md:svm-block">
					<a href="<?php echo get_pagenum_link($paged - 1); ?>">
						<button type="button" class="svm-p-2 svm-pagination-button svm-disabled">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 48 48" fill="none">
								<path d="M31.8839 8.36612C32.372 8.85427 32.372 9.64573 31.8839 10.1339L18.0178 24L31.8839 37.8661C32.372 38.3543 32.372 39.1457 31.8839 39.6339C31.3957 40.122 30.6043 40.122 30.1161 39.6339L15.3661 24.8839C14.878 24.3957 14.878 23.6043 15.3661 23.1161L30.1161 8.36612C30.6043 7.87796 31.3957 7.87796 31.8839 8.36612Z" fill="#212121"/>
								</svg>
						</button>
					</a>
        </div>
				<?php endif; ?>

				<?php for ($i=1; $i <= $total_pages; $i++) : ?>
        <?php if (1 != 10 &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || 10 <= $showitems )) : ?>
        <?php if($paged == $i) : ?>
				<div>
          <a href="#">
						<button type="button" class="svm-p-2 svm-pagination-button svm-current">
							<span class="svm-inline-block svm-w-[24px] svm-h-[24px]"><?php echo $i; ?></span>
						</button>
					</a>
        </div>
				<?php else: ?>
				<div>
          <a href="<?php echo get_pagenum_link($i); ?>">
						<button type="button" class="svm-p-2 svm-pagination-button">
							<span class="svm-inline-block svm-w-[24px] svm-h-[24px]"><?php echo $i; ?></span>
						</button>
					</a>
        </div>
				<?php endif; ?>
				<?php endif; ?>
				<?php endfor; ?>
				
				<?php if ($paged < $total_pages && $showitems < $total_pages) : ?>
				<div class="svm-ml-8 svm-hidden md:svm-block">
          <a href="<?php echo get_pagenum_link($paged + 1); ?>">
						<button type="button" class="svm-p-2 svm-pagination-button">
							<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 48 48" fill="none">
								<path d="M16.1161 39.6339C15.628 39.1457 15.628 38.3543 16.1161 37.8661L29.9822 24L16.1161 10.1339C15.628 9.64573 15.628 8.85427 16.1161 8.36612C16.6043 7.87796 17.3957 7.87796 17.8839 8.36612L32.6339 23.1161C33.122 23.6043 33.122 24.3957 32.6339 24.8839L17.8839 39.6339C17.3957 40.122 16.6043 40.122 16.1161 39.6339Z" fill="#212121"/>
								</svg>
						</button>
					</a>
        </div>
				<?php endif; ?>
				
				<div class="svm-ml-4 md:svm-ml-0">
          <a href="<?php echo get_pagenum_link($total_pages); ?>">
						<button type="button" class="svm-p-2 svm-pagination-button">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<g id="ic_fluent_arrow_next_24_regular" fill="#212121" fill-rule="nonzero">
										<path d="M18.25,3 C18.6296958,3 18.943491,3.28215388 18.9931534,3.64822944 L19,3.75 L19,20.25 C19,20.6642136 18.6642136,21 18.25,21 C17.8703042,21 17.556509,20.7178461 17.5068466,20.3517706 L17.5,20.25 L17.5,3.75 C17.5,3.33578644 17.8357864,3 18.25,3 Z M5.21966991,3.21966991 C5.48593648,2.95340335 5.90260016,2.9291973 6.19621165,3.14705176 L6.28033009,3.21966991 L14.5303301,11.4696699 C14.7965966,11.7359365 14.8208027,12.1526002 14.6029482,12.4462117 L14.5303301,12.5303301 L6.28033009,20.7803301 C5.98743687,21.0732233 5.51256313,21.0732233 5.21966991,20.7803301 C4.95340335,20.5140635 4.9291973,20.0973998 5.14705176,19.8037883 L5.21966991,19.7196699 L12.9393398,12 L5.21966991,4.28033009 C4.9267767,3.98743687 4.9267767,3.51256313 5.21966991,3.21966991 Z" id="🎨-Color"/>
									</g>
								</g>
							</svg>
						</button>
					</a>
        </div>
      </div>
			<?php endif; ?>
			<?php endif; ?>
		</div>
	</section>
	<?php wp_reset_query(); ?>

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