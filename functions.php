<?php
add_theme_support('post-thumbnails');
add_image_size('album-home', 250, 250, true);
add_image_size('thumb-news', 295, 179, true);
add_image_size('thumb-slider', 1920, 1080, true);
add_image_size('slider-news', 852, 512, true);
add_image_size('thumb-sponsor', 250, 250, true);
add_image_size('thumb-portofolio', 263, 200, true);
add_image_size('thumb-partnership', 300, 150, true);
add_image_size('thumb-ebook', 360, 450, true);

add_image_size('thumb-news-home', 300, 200);

remove_filter('the_excerpt', 'wpautop');

/*Pagination*/
function sevima_pagination($pages = '', $range = 2)
{
	$showitems = ($range * 2) + 1;
	global $paged;
	if (empty($paged)) $paged = 1;
	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	}
	if (1 != $pages) {
		echo '<ul class="pagination">';
		if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link(1) . "'>&laquo;</a></li>";
		if ($paged > 1 && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a></li>";
		for ($i = 1; $i <= $pages; $i++) {
			if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				echo ($paged == $i) ? "<li class='page-item active'><a class='page-link'>" . $i . "</a></li>" : "<li><a class='page-link' href='" . get_pagenum_link($i) . "' class='inactive' >" . $i . "</a></li>";
			}
		}
		if ($paged < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a></li>";
		if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($pages) . "'>&raquo;</a></li>";
		echo "</ul>\n";
	}
}
/*end Pagination*/

require_once('wp_bootstrap_navwalker.php');
function wpb_theme_setup()
{
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'faq_career' => __('FAQ Career'), // custom
		'faq_internship' => __('FAQ Internship') // custom
	));
}
add_action('after_setup_theme', 'wpb_theme_setup');

//REGIST Testimoni
function testimoni_event()
{
	$labels = array(
		'name' => _x("Testimoni Event", "post type general name"),
		'singular_name' => _x("Testimoni Event", "post type singular name"),
		'menu_name' => 'Testimoni Event',
		'add_new' => _x("Tambah baru", "List Testimoni Event"),
		'add_new_item' => __("Tambahkan Testimoni Event"),
		'edit_item' => __("Edit Testimoni Event"),
		'new_item' => __("Tambah Testimoni Event"),
		'view_item' => __("Lihat Testimoni Event"),
		'search_items' => __("Cari Testimoni Event"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('testimoni_event', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'testimoni_event', 0);

// -------VIDEO WEBINAR -------//
function videowebinar_post()
{
	$labels = array(
		'name' => _x("Video Webinar", "post type general name"),
		'singular_name' => _x("Video Webinar", "post type singular name"),
		'menu_name' => 'Video Webinar',
		'add_new' => _x("Tambah baru", "List Webinar"),
		'add_new_item' => __("Tambahkan Webinar"),
		'edit_item' => __("Edit Webinar"),
		'new_item' => __("Tambah Webinar"),
		'view_item' => __("Lihat Webinar"),
		'search_items' => __("Cari Webinar"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('video_webinar', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'videowebinar_post', 0);

// -------VIDEO WEBINAR -------//


// ---------- NEW TESTIMONI ---------------//
function testimoninew_post()
{
	$labels = array(
		'name' => _x("Testimoni New", "post type general name"),
		'singular_name' => _x("Testimoni", "post type singular name"),
		'menu_name' => 'Testimoni All',
		'add_new' => _x("Tambah baru", "List Testimoni"),
		'add_new_item' => __("Tambahkan Testimoni"),
		'edit_item' => __("Edit Testimoni"),
		'new_item' => __("Tambah Testimoni"),
		'view_item' => __("Lihat Testimoni"),
		'search_items' => __("Cari Testimoni"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('testimoni_new', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'testimoninew_post', 0);

function testimoninew_taxonomies()
{
	register_taxonomy(
		'ctg_testimoninew',
		'testimoni_new',
		array(
			'labels' => array(
				'name' => 'Kategori Testimoni',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'testimoninew_taxonomies', 0);

function testimonigambar_post()
{
	$labels = array(
		'name' => _x("Testimoni Gambar", "post type general name"),
		'singular_name' => _x("Testimoni Gambar", "post type singular name"),
		'menu_name' => 'Testimoni Gambar',
		'add_new' => _x("Tambah baru", "List Testimoni"),
		'add_new_item' => __("Tambahkan Testimoni"),
		'edit_item' => __("Edit Testimoni"),
		'new_item' => __("Tambah Testimoni"),
		'view_item' => __("Lihat Testimoni"),
		'search_items' => __("Cari Testimoni"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('testimoni_gambar', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'testimonigambar_post', 0);

function videoPlaylist()
{
	$labels = array(
		'name' => _x("Playlist Testimoni", "post type general name"),
		'singular_name' => _x("Playlist Testimoni", "post type singular name"),
		'menu_name' => 'Playlist Testimoni',
		'add_new' => _x("Tambah baru", "List Playlist"),
		'add_new_item' => __("Tambahkan Playlist"),
		'edit_item' => __("Edit Playlist"),
		'new_item' => __("Tambah Playlist"),
		'view_item' => __("Lihat Playlist"),
		'search_items' => __("Cari Playlist"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('video_playlist', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-video-alt',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'videoPlaylist', 0);
// END TESTIMONI NEW//



// ---------- NEW TESTIMONI magang---------------//
function testimonimagang_post()
{
	$labels = array(
		'name' => _x("Testimoni Magang", "post type general name"),
		'singular_name' => _x("Testimoni", "post type singular name"),
		'menu_name' => 'Testimoni All',
		'add_new' => _x("Tambah baru", "List Testimoni"),
		'add_new_item' => __("Tambahkan Testimoni"),
		'edit_item' => __("Edit Testimoni"),
		'new_item' => __("Tambah Testimoni"),
		'view_item' => __("Lihat Testimoni"),
		'search_items' => __("Cari Testimoni"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('testimoni_magang', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'testimonimagang_post', 0);

function testimonimagang_taxonomies()
{
	register_taxonomy(
		'ctg_testimonimagang',
		'testimoni_magang',
		array(
			'labels' => array(
				'name' => 'Kategori Testimoni',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'testimonimagang_taxonomies', 0);

function testimonigbr_post()
{
	$labels = array(
		'name' => _x("Testimoni Gambar", "post type general name"),
		'singular_name' => _x("Testimoni Gambar", "post type singular name"),
		'menu_name' => 'Testimoni Gambar',
		'add_new' => _x("Tambah baru", "List Testimoni"),
		'add_new_item' => __("Tambahkan Testimoni"),
		'edit_item' => __("Edit Testimoni"),
		'new_item' => __("Tambah Testimoni"),
		'view_item' => __("Lihat Testimoni"),
		'search_items' => __("Cari Testimoni"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('testimoni_gbr', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'testimonigbr_post', 0);

function videoMagang()
{
	$labels = array(
		'name' => _x("Playlist Magang", "post type general name"),
		'singular_name' => _x("Playlist Testimoni", "post type singular name"),
		'menu_name' => 'Playlist Magang',
		'add_new' => _x("Tambah baru", "List Playlist"),
		'add_new_item' => __("Tambahkan Playlist"),
		'edit_item' => __("Edit Playlist"),
		'new_item' => __("Tambah Playlist"),
		'view_item' => __("Lihat Playlist"),
		'search_items' => __("Cari Playlist"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('video_magang', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-video-alt',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'videoMagang', 0);
// END TESTIMONI magang


// ----------- PARTNERSHIP ------------//
function partnership_post()
{
	$labels = array(
		'name' => _x("Partnership", "post type general name"),
		'singular_name' => _x("Partnership", "post type singular name"),
		'menu_name' => 'Partnership',
		'add_new' => _x("Tambah baru", "List Partnership"),
		'add_new_item' => __("Tambahkan Partnership"),
		'edit_item' => __("Edit Partnership"),
		'new_item' => __("Tambah Partnership"),
		'view_item' => __("Lihat Partnership"),
		'search_items' => __("Cari Partnership"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('partnership_new', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-thumbs-up',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'partnership_post', 0);


//REGIST Banner Iklan
function iklan_post()
{
	$labels = array(
		'name' => _x("Iklan", "post type general name"),
		'singular_name' => _x("Iklan", "post type singular name"),
		'menu_name' => 'Iklan',
		'add_new' => _x("Tambah baru", "List Iklan"),
		'add_new_item' => __("Tambahkan Iklan"),
		'edit_item' => __("Edit Iklan"),
		'new_item' => __("Tambah Iklan"),
		'view_item' => __("Lihat Iklan"),
		'search_items' => __("Cari Iklan"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('Iklan', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-feedback',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'iklan_post', 0);

function iklan_taxonomies()
{
	register_taxonomy(
		'iklan_kategori',
		'iklan',
		array(
			'labels' => array(
				'name' => 'Kategori Iklan',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'iklan_taxonomies', 0);

//REGIST Lowongan
function lowongan_post()
{
	$labels = array(
		'name' => _x("Lowongan Pekerjaan", "post type general name"),
		'singular_name' => _x("Lowongan", "post type singular name"),
		'menu_name' => 'Lowongan Pekerjaan',
		'add_new' => _x("Tambah baru", "Lowongan Pekerjaan"),
		'add_new_item' => __("Tambahkan Lowongan"),
		'edit_item' => __("Edit Lowongan Pekerjaan"),
		'new_item' => __("Tambah Lowongan Pekerjaan"),
		'view_item' => __("Lihat Lowongan Pekerjaan"),
		'search_items' => __("Cari Lowongan Pekerjaan"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('lowongan', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-businessman',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'lowongan_post', 0);

function lowongan_taxonomies()
{
	register_taxonomy(
		'lowongan_kategori',
		'lowongan',
		array(
			'labels' => array(
				'name' => 'Kategori Lowongan',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'lowongan_taxonomies', 0);

//REGIST Sales Partner
function sales_partner()
{
	$labels = array(
		'name' => _x("Authorized Sales Partner", "post type general name"),
		'singular_name' => _x("Sales Partner", "post type singular name"),
		'menu_name' => 'Authorized Sales Partner',
		'add_new' => _x("Tambah baru", "Sales Partner"),
		'add_new_item' => __("Tambahkan Sales Partner"),
		'edit_item' => __("Edit Sales Partner"),
		'new_item' => __("Tambah Sales Partner"),
		'view_item' => __("Lihat Sales Partner"),
		'search_items' => __("Cari Sales Partner"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('sales_partner', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-id',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'sales_partner')
	));
}
add_action('init', 'sales_partner', 0);

function sales_taxonomies()
{
	register_taxonomy(
		'asp_kategori',
		'sales_partner',
		array(
			'labels' => array(
				'name' => 'Jenis Sales Partner',
				'add_new_item' => 'Tambah Jenis Sales Partner',
				'new_item_name' => "Tambahkan Jenis Sales Partner"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'sales_taxonomies', 0);

//REGIST Tim Sevima
function team_post()
{
	$labels = array(
		'name' => _x("Tim Sevima", "post type general name"),
		'singular_name' => _x("Tim", "post type singular name"),
		'menu_name' => 'Tim Sevima',
		'add_new' => _x("Tambah baru", "Tim Sevima"),
		'add_new_item' => __("Tambahkan Lowongan"),
		'edit_item' => __("Edit Tim Sevima"),
		'new_item' => __("Tambah Tim Sevima"),
		'view_item' => __("Lihat Tim Sevima"),
		'search_items' => __("Cari Tim Sevima"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('team', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-groups',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'team_post', 0);

function team_taxonomies()
{
	register_taxonomy(
		'team_kategori',
		'team',
		array(
			'labels' => array(
				'name' => 'Kategori team',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'team_taxonomies', 0);

//REGIST WIDGET
function widget_regist()
{
	// register_sidebar( array(
	// 'name' => 'Sidebar Popular Post',
	// 'id' => 'popular',
	// 'description' => 'Popular Post',
	// 'before_widget' => '',
	// 'after_widget' => '',
	// 'before_title' => '',
	// 'after_title' => '',
	// ) );
}
add_action('widgets_init', 'widget_regist');
//END REGIST WIDGET
function wpb_get_post_views($postID)
{
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count . ' Views';
}

//REGIST Lowongan
function portofolio_post()
{
	$labels = array(
		'name' => _x("Portofolio", "post type general name"),
		'singular_name' => _x("Portofolio", "post type singular name"),
		'menu_name' => 'Portofolio',
		'add_new' => _x("Tambah baru", "Portofolio"),
		'add_new_item' => __("Tambahkan Portofolio"),
		'edit_item' => __("Edit Portofolio"),
		'new_item' => __("Tambah Portofolio"),
		'view_item' => __("Lihat Portofolio"),
		'search_items' => __("Cari Portofolio"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('portofolio', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-star-filled',
		'rewrite' => array(
			"with_front" => true
		), 'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'portofolio_post', 0);

function portofolio_taxonomies()
{
	register_taxonomy(
		'ctg_portofolio',
		'portofolio',
		array(
			'labels' => array(
				'name' => 'Kategori Portofolio',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'portofolio_taxonomies', 0);

//REGIST PROMO
function promo_post()
{
	$labels = array(
		'name' => _x("Promo", "post type general name"),
		'singular_name' => _x("Promo", "post type singular name"),
		'menu_name' => 'Promo',
		'add_new' => _x("Tambah baru", "Promo"),
		'add_new_item' => __("Tambahkan Promo"),
		'edit_item' => __("Edit Promo"),
		'new_item' => __("Tambah Promo"),
		'view_item' => __("Lihat Promo"),
		'search_items' => __("Cari Promo"),
		'not_found' => __("Tidak Ditemukan"),
		'not_found_in_trash' => __("Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('promo', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-tickets-alt',
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'promo_post', 0);

function promo_taxonomies()
{
	register_taxonomy(
		'ctg_promo',
		'promo',
		array(
			'labels' => array(
				'name' => 'Kategori Promo',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'promo_taxonomies', 0);

//REGIST POST TYPE "JURUSAN"
function jurusan_post()
{
	$labels = array(
		'name' => _x("Jurusan Kuliah", "post type general name"),
		'singular_name' => _x("Jurusan", "post type singular name"),
		'menu_name' => 'Jurusan Kuliah',
		'add_new' => _x("Tambah baru", "Jurusan Kuliah"),
		'add_new_item' => __("Tambah Jurusan Baru"),
		'edit_item' => __("Edit Jurusan"),
		'new_item' => __("Tambah Jurusan"),
		'view_item' => __("Lihat Jurusan"),
		'search_items' => __("Cari Jurusan"),
		'not_found' => __("Jurusan Tidak Ditemukan"),
		'not_found_in_trash' => __("Jurusan Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('jurusan', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-welcome-learn-more',
		'rewrite' => array(
			"with_front" => true
		),
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'jurusan_post', 0);

function jurusan_taxonomies()
{
	register_taxonomy(
		'jurusan_kategori',
		'jurusan',
		array(
			'labels' => array(
				'name' => 'Kategori Jurusan',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'jurusan_taxonomies', 0);
//END OF POST TYPE "JURUSAN"

//REGIST POST TYPE "EBOOK"
function ebook_post()
{
	$labels = array(
		'name' => _x("Katalog eBook", "post type general name"),
		'singular_name' => _x("eBook", "post type singular name"),
		'menu_name' => 'Katalog eBook',
		'add_new' => _x("Tambah baru", "eBook"),
		'add_new_item' => __("Tambah eBook"),
		'edit_item' => __("Edit eBook"),
		'new_item' => __("Tambah eBook"),
		'view_item' => __("Lihat eBook"),
		'search_items' => __("Cari eBook"),
		'not_found' => __("eBook Tidak Ditemukan"),
		'not_found_in_trash' => __("eBook Tidak Ditemukan"),
		'parent_item_colon' => ''
	);
	register_post_type('ebook', array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'menu_icon' => 'dashicons-book',
		'rewrite' => array(
			"with_front" => true
		),
		'supports' => array('title', 'editor', 'thumbnail'),
	));
}
add_action('init', 'ebook_post', 0);

function ebook_taxonomies()
{
	register_taxonomy(
		'ebook_kategori',
		'ebook',
		array(
			'labels' => array(
				'name' => 'Kategori eBook',
				'add_new_item' => 'Tambah Baru Kategori',
				'new_item_name' => "Tambahkan Kategori"
			),
			'show_ui' => true,
			'show_tagcloud' => false,
			'hierarchical' => true
		)
	);
}
add_action('init', 'ebook_taxonomies', 0);
// flush_rewrite_rules( false );

//END OF POST TYPE "EBOOK"

// Remove wpcf7 script 
add_filter('wpcf7_load_js', '__return_false');

function pine_scripts()
{
	wp_dequeue_script('google-recaptcha');
	if (is_page_template('form.php') || is_page_template('form-mhs.php') || is_page('pendaftaran-event')) {
		if (function_exists('wpcf7_enqueue_scripts')) {
			wpcf7_enqueue_scripts();
			wp_enqueue_script('google-recaptcha');
		}
	}
}
// add_action( 'wp_enqueue_scripts', 'pine_scripts' );

?>

<?php
// 	function custom_excerpt_length( $length ) {
// 		return 500;
// 	}
// 	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// 	function autocomplete_scripts() {
// 		wp_enqueue_style('awesomepletecss', get_template_directory_uri() . '/css/awesomplete.css');
//     	wp_enqueue_script('awesompletejs', get_template_directory_uri() . '/js/awesomplete.js');
//         wp_enqueue_script('autocomplete', get_template_directory_uri() . '/js/wp-autocomplete.js', ['awesompletejs']);
// //         wp_localize_script('autocomplete', 'wp_autocomplete', array('ajax_url' => admin_url('admin-ajax.php')));
// 	}

//     add_action('wp_enqueue_scripts', 'autocomplete_scripts');
?>

<?php
add_filter('cfdb7_before_save_data', 'cfdb7_filter_before_save');
function cfdb7_filter_before_save($form_data)
{
	unset($form_data['select2-pt']);
	return $form_data;
}
?>


<?php
function estimated_reading_time($content = '')
{
	$wpm = 250;          // Word Per Minute (250 Average)
	$text_content = strip_shortcodes($content);     // Remove Shortcodes
	$str_content = strip_tags($text_content);       // Remove Tags
	$word_count = str_word_count($str_content);
	$readtime = ceil($word_count / $wpm);
	$postfix = " Menit";
	// if ($readtime == 1) {
	// 	$postfix = " Minute";
	// } else {
	// 	$postfix = " Minutes";
	// }
	$readingtime = $readtime . $postfix;
	return $readingtime;
}
?>