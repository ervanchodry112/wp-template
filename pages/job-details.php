<?php
/*
Template Name: Job Details
Template Post Type: page
*/

get_header();

while(have_posts()) : the_post();
?>

  <section class="svm-grid svm-h-[200px] md:svm-h-[250px] svm-content-end svm-bg-white svm-pb-0 md:svm-pb-10 svm-bg-no-repeat svm-bg-center svm-bg-cover" style="background-image: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0)), url('<?php echo esc_url(get_the_post_thumbnail_url(16294)); ?>');">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
      <div class="svm-p-4">
        <h1 class="svm-section-title svm-text-white svm-max-w-xs svm-mx-auto md:svm-max-w-none"><?php echo esc_html(get_the_title(16294)); ?></h1>
      </div>
    </div>
  </section>
	
	<section class="svm-bg-white svm-py-12 md:svm-py-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
			<article class="svm-flex svm-flex-wrap svm-content-section">
				<div class="svm-w-full md:svm-w-1/4 svm-p-4 svm-order-2">
					<ul style="padding-left: 0 !important; margin-bottom: 2rem !important;">
            <li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-4 svm-mt-[2px] svm-w-5 svm-h-5 svm-flex-none" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<path fill="none" stroke="#000" stroke-width="2" d="M12,22 C12,22 4,16 4,10 C4,5 8,2 12,2 C16,2 20,5 20,10 C20,16 12,22 12,22 Z M12,13 C13.657,13 15,11.657 15,10 C15,8.343 13.657,7 12,7 C10.343,7 9,8.343 9,10 C9,11.657 10.343,13 12,13 L12,13 Z"/>
							</svg>
              <span class="svm-text-gray-600 svm-text-sm md:svm-text-base"><?php echo esc_html(get_post_meta(16294, 'lokasi', true)); ?></span>
            </li>
						<li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-4 svm-mt-[2px] svm-w-5 svm-h-5 svm-flex-none" width="24px" height="24px" viewBox="0 0 24 24" id="magicoon-Regular" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#000000;}</style></defs><g id="users-Regular"><path id="users-Regular-2" data-name="users-Regular" class="cls-1" d="M16.75,17.639v.507a3.505,3.505,0,0,1-.909,2.358A.75.75,0,1,1,14.729,19.5a2,2,0,0,0,.521-1.35v-.507a2.936,2.936,0,0,0-2.226-2.861.9.9,0,0,0-.657.083,5.976,5.976,0,0,1-5.726,0,.909.909,0,0,0-.664-.088A2.938,2.938,0,0,0,3.75,17.639v.507A2.009,2.009,0,0,0,4.271,19.5.75.75,0,0,1,3.159,20.5a3.5,3.5,0,0,1-.909-2.357v-.507a4.434,4.434,0,0,1,3.364-4.317,2.425,2.425,0,0,1,1.757.232,4.461,4.461,0,0,0,4.266,0,2.421,2.421,0,0,1,1.75-.228A4.434,4.434,0,0,1,16.75,17.639Zm1.636-4.317a.75.75,0,1,0-.362,1.456,2.936,2.936,0,0,1,2.226,2.861v.507a2,2,0,0,1-.521,1.35A.75.75,0,0,0,20.841,20.5a3.505,3.505,0,0,0,.909-2.358v-.507A4.434,4.434,0,0,0,18.386,13.322ZM4.75,8A4.75,4.75,0,1,1,9.5,12.75,4.756,4.756,0,0,1,4.75,8Zm1.5,0A3.25,3.25,0,1,0,9.5,4.75,3.254,3.254,0,0,0,6.25,8Zm13,0a4.753,4.753,0,0,0-4.157-4.713.75.75,0,0,0-.186,1.488,3.251,3.251,0,0,1,1.624,5.763.75.75,0,0,0,.939,1.17A4.735,4.735,0,0,0,19.25,8Z"/></g></svg>
              <span class="svm-text-gray-600 svm-text-sm md:svm-text-base">
								<?php echo esc_html(str_replace('%total', get_post_meta(16294, 'kuota', true), get_post_meta(18693, 'job_detail_label_quota', true))); ?>
							</span>
            </li>
						<li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-4 svm-mt-[2px] svm-w-5 svm-h-5 svm-flex-none" width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><g><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm1-8h4v2h-6V7h2v5z"/></g></svg>
              <span class="svm-text-gray-600 svm-text-sm md:svm-text-base"><?php echo esc_html(get_post_meta(16294, 'job_detail_work_type', true)); ?></span>
            </li>
						<li class="svm-mb-4 svm-flex svm-flex-nowrap">
              <svg class="svm-mr-4 svm-mt-[2px] svm-w-5 svm-h-5 svm-flex-none" width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><defs><style>.cls-1{fill:#000000;}.cls-2{fill:#000000;}</style></defs><g data-name="2. Briefcase" id="_2._Briefcase"><path class="cls-1" d="M29,6H26a1,1,0,0,0,0,2h3a1,1,0,0,1,1,1v5.171a1,1,0,0,1-.293.708l-2.828,2.828a1,1,0,0,1-.708.293H5.829a1,1,0,0,1-.708-.293L2.293,14.879A1,1,0,0,1,2,14.171V9A1,1,0,0,1,3,8H22a1,1,0,0,0,1-1V4a3,3,0,0,0-3-3H12A3,3,0,0,0,9,4V6H3A3,3,0,0,0,0,9v5.171a2.978,2.978,0,0,0,.879,2.122l2.828,2.828A2.978,2.978,0,0,0,5.829,20H26.171a2.978,2.978,0,0,0,2.122-.879L29,18.414V28a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V21a1,1,0,0,0-2,0v7a3.009,3.009,0,0,0,3,3H28a3.009,3.009,0,0,0,3-3V16.414l.121-.121A2.978,2.978,0,0,0,32,14.171V9A3,3,0,0,0,29,6ZM11,4a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1V6H11Z"/><rect class="cls-2" height="6" rx="1" width="4" x="7" y="16"/><rect class="cls-2" height="6" rx="1" width="4" x="21" y="16"/></g></svg>
              <span class="svm-text-gray-600 svm-text-sm md:svm-text-base"><?php echo esc_html(get_post_meta(16294, 'job_detail_work_system', true)); ?></span>
            </li>
          </ul>

					<a href="<?php echo esc_html(get_post_meta(16294, 'job_detail_link', true)); ?>" target="_blank" rel="nofollow">
						<button class="svm-inline-block svm-base-button svm-bg-red-main svm-text-white svm-border svm-w-full"><?php echo esc_html(get_post_meta(18693, 'job_detail_label_submit', true)); ?></button>
					</a>
				</div>
				<div class="svm-w-full md:svm-w-3/4 svm-p-4 svm-order-1 md:svm-order-2">
					<?php
						$content_post = get_post(16294);
						$content = $content_post->post_content;
						$content = apply_filters('the_content', $content);
						$content = str_replace(']]>', ']]&gt;', $content);

						echo $content;
					?>
				</div>
			</article>
		</div>
	</section>

	<?php
		$job_detail_team = array_map('intval', get_post_meta(16294, 'job_detail_team', true));
		$posts_per_page = 5;

		$args = array(
			'post_type' => 'lowongan',
			'post_status' => 'publish',
			'post__not_in' => array(16294),
			'orderby' => 'date',
			'order' => 'ASC',
			'posts_per_page' => $posts_per_page,
			'meta_query' => array(
				array(
					'key' => 'job_detail_team',
					'value' => $job_detail_team,
					'compare' => 'LIKE'
				)
			)
		);

		$related_jobs = new WP_Query($args);

		if($related_jobs->have_posts()) :
	?>
	<section class="svm-bg-white svm-pb-12 md:svm-pb-20">
    <div class="svm-container svm-max-w-6xl svm-mx-auto">
			<div class="svm-grid svm-grid-cols-1 svm-gap-4 svm-p-4 svm-mb-2 svm-pt-12 md:svm-pt-20 svm-border-t svm-border-gray-300">
        <div class="svm-text-left">
          <h2 class="svm-section-title"><?php echo esc_html(get_post_meta(18693, 'job_detail_label_related_jobs', true)); ?></h2>
        </div>
      </div>
			<div class="svm-px-4 svm-mb-4">
				<?php $i = 1; ?>
				<?php while($related_jobs->have_posts()) : $related_jobs->the_post(); ?>
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
							<button class="svm-base-button svm-bg-blue-main svm-text-white svm-border svm-w-full"><?php echo esc_html(get_post_meta(18693, 'job_detail_label_button_related_jobs', true)); ?></button>
						</a>
					</div>
				</div>
				<?php $i++; ?>
				<?php endwhile; ?>
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
  
<?php
endwhile;

get_footer();
?>