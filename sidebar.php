<?php
$ch = curl_init();

// curl_setopt_array($ch, array(
// CURLOPT_URL => "https://campuspedia.id/kabar/wp-json/wp/v2/posts?caregories[]=berita&per_page=5",
// CURLOPT_RETURNTRANSFER => true,
// CURLOPT_TIMEOUT => 3000,
// CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
// CURLOPT_CUSTOMREQUEST => "GET",
// CURLOPT_HTTPHEADER => array(
// 	"cache-control: no-cache"
// ),
// ));
curl_setopt($ch, CURLOPT_URL, "https://campuspedia.id/kabar/wp-json/wp/v2/posts?caregories[]=berita&per_page=5");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

$response = curl_exec($ch);
$err = curl_error($ch);

curl_close($ch);

$response = json_decode($response, true);
?>

<div class="col-md-4 col-12">
	<div class="row" style="margin-left: 0 !important;">
		<div class="card-pencarian">
			<h3>Pencarian</h3>
			<hr>
			<div class="form-search">
				<form action="<?php echo home_url('/'); ?>">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Cari.." name="s" id="s">
						<input type="hidden" name="post_type" value="post">
						<div class="input-group-btn">
							<button class="btn btn-danger" type="submit">
								<i class='uil uil-search'></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card-iklan">
			<?php
			query_posts(
				array(
					'post_type' => 'iklan',
					'iklan_kategori' => 'kanan',
					'orderby' => 'date'
				)
			);
			if (have_posts()):
				while (have_posts()):
					the_post();
					if (has_post_thumbnail()) {
						$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
						$news_src = $src[0];
					}
					?>
					<div class="list-iklan">
						<a href="<?php echo get_field('link_iklan'); ?>" title="" target="_blank">
							<img src="<?php
							if (has_post_thumbnail()) {
								echo $news_src;
							} else {
								echo " ", get_template_directory_uri(), "/img/default.png ";
							} ?>" alt="<?php echo strip_tags(get_the_excerpt()); ?>">
						</a>
					</div>
					<?php
				endwhile;
			endif;
			?>
		</div>
		<div class="card-berita-kanan">
			<h3>Terpopuler</h3>
			<hr>
			<?php
			$popularpost = new WP_Query(array('posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'));
			while ($popularpost->have_posts()):
				$popularpost->the_post();
				if (has_post_thumbnail()) {
					$src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
					$news_src = $src[0];
				}
				?>
				<div class="berita-populer">
					<div class="row">
						<div class="col-md-4 col-4">
							<img src="<?php
							if (has_post_thumbnail()) {
								echo $news_src;
							} else {
								echo " ", get_template_directory_uri(), "/img/default.png";
							} ?>" alt="">
						</div>
						<div class="col-md-8 col-8">
							<a href="<?php the_permalink(); ?>" title="">
								<h4>
									<?php the_title(); ?>
								</h4>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="card-berita-campuspedia" style="margin-left:-15px; padding: 15px 20px 15px 20px;">
			<h3>Info Populer di CampusPedia</h3>
			<hr>
			<?php foreach ($response as $value) { ?>
				<div id="campuspedia" class="d-flex flex-row bd-highlight">
					<div class="p-2 bd-highlight">
						<a href="<?php echo $value['link'] ?>"><img src="<?php echo $value['fimg_url'] ?>"
								alt="<?php $value['title']['rendered'] ?>"
								style="width:70px;height:70px;object-fit:cover;border-radius:4px;"></a>
					</div>
					<div class="p-2 bd-highlight">
						<a href="<?php echo $value['link'] ?>"
							style="font-size:18px;font-family:'Cabin',sans-serif;color:#0C1325"><?php echo $value['title']['rendered'] ?></a>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="card-kategori">
			<h3>Kategori</h3>
			<hr>
			<div class="list-kategori">
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					echo '<p><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></p>';
				}
				?>
			</div>
		</div>

	</div>
</div>