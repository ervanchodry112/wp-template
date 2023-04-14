<?php get_header(); ?>
<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "https://campuspedia.id/kabar/wp-json/wp/v2/posts?caregories[]=berita&per_page=4",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_SSL_VERIFYPEER => 0,
	CURLOPT_HTTPHEADER => array(
		"cache-control: no-cache"
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true);
?>
<div class="bg-grey">
<section id="single-berita">
	<div class="container">
		<div class="row">
				<div class="col-md-9">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
						wpb_get_post_views(get_the_ID());
						if ( has_post_thumbnail() ) {
								$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
								$news_src = $src[0];
								}
					?>

					<div class="card-detail-berita">
						<div class="title-detail-berita">
							<br>
							
							<h3><?php the_title() ?></h3>
							
							<?php
										$posttags = get_the_category();
										$i=0;
										if ($posttags) {
											foreach($posttags as $tag) {
												echo '<span class="tag tag-red"><a href="' . get_category_link($tag->term_id) . '">' .$tag->name.'</a></span>'; 
											}
										}
							?>
							<div class="date">
								<i class="fa fa-user">&nbsp;</i><p><?php the_author(); ?></p>
								<i class="fa fa-calendar">&nbsp;</i><p><?php the_time(' d F Y', '', ''); ?></p>
							</div>
							
						</div>
						<div class="thumbnail-detail">
							<img src="<?php
									if ( has_post_thumbnail() ) {
									$image_alt = get_post_meta( get_post_thumbnail_id( $post->ID ), ‘_wp_attachment_image_alt’, TRUE);
									$image_title = get_the_title(get_post_thumbnail_id( $post->ID ));
									$image_caption = get_post(get_post_thumbnail_id( $post->ID ))->post_excerpt;
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default.png ";
																							}?>">
							<center><i><?php echo $image_caption; ?></i></center>
						</div>
						<div class="content-detail-berita">
							<?php the_content(); ?>
						</div>
						<!-- <div class="line-hr"></div> -->
						<div class="iklan-sevima">
							<?php 
								$args = array(
										'post_type' => 'iklan',
										'iklan_kategori' =>'bawah'
										);
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
								if ( has_post_thumbnail() ) {
								$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
								$news_src = $src[0];
								}  
							?>
							<a href="<?php echo get_field('link_iklan'); ?>" title="" target="_blank"><img src="<?php
									if ( has_post_thumbnail() ) {
									echo $news_src;
									}  else {
									echo " ", get_template_directory_uri(), "/img/default.png ";
																							}?>" alt="<?php echo strip_tags( get_the_excerpt() ); ?>"></a>

							<?php endwhile; wp_reset_postdata(); ?>
						</div>
						<div class="baca-juga">
							<h4 style="text-transform: uppercase; margin-bottom: 40px;">Info Menarik Lainnya : </h4>
								<div class="row">
									<?php $posts = get_field('baca_juga'); ?>
									<?php if( $posts ): ?>
									<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
										<?php 
										setup_postdata($post); 
										if ( has_post_thumbnail() ) {
										$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
										$news_src = $src[0];
										}
										?>
									<div class="col-md-6 col-6" style="margin-bottom: 15px;">
										<div class="baca-content">
											<div class="row">
												<div class="col-md-4">
													<img src="<?php
													if ( has_post_thumbnail() ) { //cek apakah memiliki featured image
													echo $news_src;
													}  else {
													echo " ", get_template_directory_uri(), "/img/default.png ";
																											}?>" alt="">
												</div>
												<div class="col-md-8">
													<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>
													<p><?php the_time(' d F Y', '', ''); ?></p>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>
									<?php endif; ?>
								</div><br>
							<!-- <h4>Sevima Take IT Easy</h4> -->
						</div>
						<?php
						$pagelist = get_posts('sort_column=menu_order&sort_order=desc&posts_per_page=-1');
						$pages = array();
						foreach ($pagelist as $page) {
						$pages[] += $page->ID;

						}

						$current = array_search(get_the_ID(), $pages);
						$prevID = $pages[$current-1];
						$nextID = $pages[$current+1];
						?>

						<div class="next-back">
						<?php if (!empty($prevID)) { ?>
						<div class="left">
							<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>"><i class="fa fa-arrow-left">&nbsp;&nbsp;</i>Sebelumnya</a>
						</div>
						<?php }
						if (!empty($nextID)) { ?>
						<div class="right">
							<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">Selanjutnya&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></a>
						</div>
						<?php } ?>
						</div>

						
					</div>
					<div class="card-berita-campuspedia">
					<h3>Berita dari CampusPedia :</h3>
					<hr>
					<div class="card-konten-camp">
					<?php 
					if(is_array($response)){
					foreach ($response as $value) { ?>
					<div id="campuspedia">
						<div class="d-flex flex-row bd-highlight">
							<div class="p-2 bd-highlight">
								<a href="<?php echo $value['link'] ?>"><img src="<?php echo $value['fimg_url'] ?>" alt="<?php $value['title']['rendered'] ?>" style="width:70px;height:70px;object-fit:cover;border-radius:4px;"></a>
							</div>
							<div class="p-2 bd-highlight">
								<a href="<?php echo $value['link'] ?>" style="font-size:18px;font-family:'Cabin',sans-serif;color:#0C1325"><?php echo $value['title']['rendered'] ?></a>
							</div>
						</div>
					</div>
					<?php 
					}
				 	} ?>
					</div>
					</div>
					<div class="card-berita-terkait">
								<h3>Berita Penting Lainnya :</h3>
								<hr>
								<div class="berita-terkait">
									<div class="row">
										<?php
											$related = get_posts( 
											array( 
												'category__in' => wp_get_post_categories( $post->ID ), 
												'numberposts'  => 4, 
												'post__not_in' => array( $post->ID ) 
											) 
										);
											
										?>
											<?php 
											if( $related ) { 
												foreach( $related as $post ) {
													setup_postdata($related);
											?>
										<?php 
										$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-news');
										$related_src = $src[0];
										?>
										<div class="col-md-6 col-6">
											<a href="<?php the_permalink(); ?>">
											<div class="berita-item">
												<img src="<?php
												if ( has_post_thumbnail() ) { 
												echo $related_src;
												}  else {
												echo " ", get_template_directory_uri(), "/img/default.png ";
																										}?>" alt="">
												<h4 class=""><?php the_title() ?></h4>
											</div>
											</a>
										</div>
										<?php }
											wp_reset_postdata();
										} ?>
									</div>
								</div>
						</div>

						<div class="card-komentar">
							<h3>Komentar :</h3>
							<hr>
							<div class="row">
								<div class="col-md-12">
									<div id="disqus_thread"></div>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<?php include 'sidebar-detail-berita.php'; ?>
			</div>
	</div>
</section>

</div>

  <script async>(function(s,u,m,o,j,v){j=u.createElement(m);v=u.getElementsByTagName(m)[0];j.async=1;j.src=o;j.dataset.sumoSiteId='3d0c811e6f651c76f772b956ad69586e51670daa0027d0b608556eaac16e3141';v.parentNode.insertBefore(j,v)})(window,document,'script','//load.sumo.com/');</script>
<script>
(function($){
    setInterval(() => {
        $.each($('iframe'), (arr,x) => {
            let src = $(x).attr('src');
            if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                $(x).remove();
            }
        });
    }, 300);
})(jQuery);
</script>

<script src="https://cdn.jsdelivr.net/npm/clamp-js@0.7.0/clamp.min.js"></script>
<script>
    var beritaTerkait = $('.berita-terkait-title').get(0);
    $(function(){
        $clamp(beritaTerkait, {clamp: 2});
    });
</script>
<?php get_footer(); ?>