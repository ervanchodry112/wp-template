<?php
/*
Template Name: Development Pendaftaran Event
*/
?>
<?php get_header(); ?>
<?php
// $page = 3;
// $url = 'https://campuspedia.id/kabar/wp-json/wp/v2/posts?caregories[]=berita&per_page='.$page;
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_TIMEOUT, 10);
// curl_setopt($ch, CURLOPT_POST, false);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

// $response = curl_exec($ch);
// $err = curl_error($ch);

// curl_close($ch);

// $response = json_decode($response, true);
?>

<section id="header-detailberita">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <?php if (have_posts()):
                    while (have_posts()):
                        the_post();
                        wpb_get_post_views(get_the_ID());
                        if (has_post_thumbnail()) {
                            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                            $news_src = $src[0];
                        }
                        ?>
                        <div class="title-header">
                            <?php
                            $postcategories = get_the_category();
                            if ($postcategories) {
                                $output = array();
                                foreach ($postcategories as $category) {
                                    $output[] = '<span><a class="category" href="' . get_category_link($category->term_id) . '">' . $category->name . ' </a></span>';
                                    unset($category);
                                }
                                echo implode(" | ", $output);
                            }
                            ?>
                            <h2 class="title">
                                <?php the_title() ?>
                            </h2>
                            <ul class="post-meta">
                                <li class="meta-date"><i class="uil uil-schedule"></i>
                                    <?php the_time(' d F Y', '', ''); ?> &nbsp; . &nbsp;oleh
                                    <?php the_author(); ?></small>
                                </li>
                            </ul>
                        </div>
                        <img class="img-fluid" src="<?php
                        if (has_post_thumbnail()) {
                            $image_alt = get_post_meta(get_post_thumbnail_id($post->ID), ‘_wp_attachment_image_alt’, TRUE);
                            $image_title = get_the_title(get_post_thumbnail_id($post->ID));
                            $image_caption = get_post(get_post_thumbnail_id($post->ID))->post_excerpt;
                            echo $news_src;
                        } else {
                            echo " ";
                        } ?>">
                    <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="content-detail">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-12 ">
                <div class="content-section">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="conten-tambahan">
    <section id="section-kolom-comment">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-section">
                        <h6>Komentar</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[gs-fb-comments]'); ?>
                </div>
            </div>
        </div>
    </section>
</div>

<script async>
    (function (s, u, m, o, j, v) {
        j = u.createElement(m);
        v = u.getElementsByTagName(m)[0];
        j.async = 1;
        j.src = o;
        j.dataset.sumoSiteId = '3d0c811e6f651c76f772b956ad69586e51670daa0027d0b608556eaac16e3141';
        v.parentNode.insertBefore(j, v)
    })(window, document, 'script', '//load.sumo.com/');
</script>
<script>
    (function ($) {
        setInterval(() => {
            $.each($('iframe'), (arr, x) => {
                let src = $(x).attr('src');
                if (src && src.match(/(ads-iframe)|(disqusads)/gi)) {
                    $(x).remove();
                }
            });
        }, 300);
    })(jQuery);
</script>

<script src="https://cdn.jsdelivr.net/npm/clamp-js@0.7.0/clamp.min.js"></script>

<?php get_footer(); ?>