<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '2.5.5' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to latest version.
 */
define( 'ASTRA_EXT_MIN_VER', '2.6.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';
/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';


/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';


/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


//carga de stilos del framework bootstrap
function bootstrap_css() {
    wp_enqueue_style( 'bootstrap_css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        array(),
        '4.5.2'
    );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

//carga de js del framework bootstrap
function bootstrap_js() {
    wp_enqueue_script( 'popper_js',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        array(),
        '1.16.1',
        true);
    wp_enqueue_script( 'bootstrap_js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
        array('jquery','popper_js'),
        '4.5.2',
        true);
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');


// Registrar la taxonomia para los hashtags
function fgr_gallery_taxonomia() {




    // Función WordPress para registrar la taxonomía
    register_taxonomy(
        'hashtags',
        array('zm_gallery'), // Tipos de Post a los que asociaremos la taxonomía
        array(
            'label'                 => 'Hashtags',
            'hierarchical'          => false,
            'public'                => false,
            'show_ui'               => true,
            'update_count_callback' => '_update_post_term_count',
            'rewrite'               => false,
        )
    );

}
add_action( 'init', 'fgr_gallery_taxonomia', 0 );

//agrego el CPT para la galería de imágenes
add_action( 'init', 'add_gallery_post_type' );
function add_gallery_post_type() {
    register_post_type( 'zm_gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' ),
                'all_items' => __( 'All Images')
            ),
            'public' => true,
            'has_archive' => false,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'gallery-item'),
            'supports' => array( 'title', 'thumbnail','author' ),
            'taxonomies' => array( 'hashtags' ),
            'menu_position' => 4,
            'show_in_admin_bar'   => false,
            'show_in_nav_menus'   => false,
            'publicly_queryable'  => false,
            'query_var'           => false
        )
    );
}


function zm_get_backend_preview_thumb($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id($post_ID);
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src($post_thumbnail_id, 'thumbnail');
        return $post_thumbnail_img[0];
    }
}

function zm_preview_thumb_column_head($defaults) {
    $defaults['featured_image'] = 'Image';
    return $defaults;
}
add_filter('manage_posts_columns', 'zm_preview_thumb_column_head');

function zm_preview_thumb_column($column_name, $post_ID) {
    if ($column_name == 'featured_image') {
        $post_featured_image = zm_get_backend_preview_thumb($post_ID);
        if ($post_featured_image) {
            echo '<img src="' . $post_featured_image . '" />';
        }
    }
}
add_action('manage_posts_custom_column', 'zm_preview_thumb_column', 10, 2);

//solo se muestran los usuarios que tienen el rol "Gallery author"
add_filter('wp_dropdown_users', 'addAuthorsToSelect');
function addAuthorsToSelect($output)
{
    global $post;

    if($post->post_type == 'zm_gallery')
    {
        $users = get_users(array('role__in'=>array('gallery_author')));
        $output = "<select id='post_author_override' name='post_author_override' class=''>";
        foreach($users as $user)
        {
            $output .= "<option value='".$user->ID."' ".(($post->post_author==$user->ID)?'selected="selected"':'').">".$user->display_name." (".$user->user_login.")</option>";
        }
        $output .= "</select>";
    }
    return $output;
}

//llamo al JS donde se van a ejecutar los AJAX
add_action( 'wp_enqueue_scripts', 'ajax_test_enqueue_scripts' );

function ajax_test_enqueue_scripts() {
    wp_enqueue_script( 'scripts.js', get_stylesheet_directory_uri(). '/assets/js/scripts.js', array('jquery'), '1.0', true );

    wp_localize_script('scripts.js', 'ajax_object', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' )
    ));
}

//cargo la llamada a cargar las imágenes por ajax tanto para usuarios logueados como NO logueados
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );
function load_more_posts(){
    global $post;

    if($_POST['search']){//si se realiza una búsqueda como en tax_query no puedo usar el operador LIKE, debo recorrer todos los hashtags y compararlos con el string buscado, si el string es parte del hashtag se inserta el hashtag en un array para filtrarlo por tax_query
        $arrTerms = [];
        $terms = get_terms( array(
            'taxonomy' => 'hashtags',
            'hide_empty' => false,
        ) );
        foreach ($terms as $term) {

            if(stripos(strval($term->slug), $_POST['search'])!== FALSE){

                $arrTerms[] = $term->term_id;
            }
        }
        $args = array('post_type'=>'zm_gallery','meta_key' => '_thumbnail_id', 'posts_per_page'=> 6,'offset'=> $_POST['offset'],'tax_query' => array( array(
            'taxonomy' => 'hashtags',
            'terms' => $arrTerms
        )
        ));
    }
    else{
        $args = array('post_type'=>'zm_gallery','meta_key' => '_thumbnail_id', 'posts_per_page'=> 6,'offset'=> $_POST['offset']);
    }



    $rst=[];
    $query = new WP_Query($args);
    if($query->have_posts()):
        while($query->have_posts()):$query->the_post();
            $imagePost['src']='';
            $imagePost['alt']='';
            if ( has_post_thumbnail() ) {
                // store the URL of featured image.

                $image_id = get_post_thumbnail_id(get_the_ID());
                $alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);
                $imgSrc = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                $imagePost['src']=$imgSrc;
                $imagePost['alt']=$alt_text;
            }
            $nameAuthor = get_the_author_meta('display_name', $post->post_author);

            $avatar = get_avatar( $post->post_author );

            $doc = new DOMDocument();
            @$doc->loadHTML($avatar);

            $imagenes = $doc->getElementsByTagName('img');

            foreach ($imagenes as $imagen) {
                $alt   = $imagen->getAttribute('alt');
                $src   = $imagen->getAttribute('src');
                //$title = $imagen->getAttribute('title');
            }

            $hashtagsTerms = get_the_terms( $post, 'hashtags');
            $hashtags='';
            foreach ($hashtagsTerms as $hashtag){
                $hashtags.='#'.$hashtag->name.' ';
            }
            $hashtags = substr($hashtags, 0, -1);


            $author['name']=$nameAuthor;
            $author['src']=$src;
            $author['alt']=$alt;
            $fullPost['post']=$post;
            $fullPost['image']=$imagePost;
            $fullPost['author']=$author;
            $fullPost['hashtags']=$hashtags;
            $rst[] = $fullPost;
        endwhile;
        wp_reset_postdata();
        $offset = $_POST['offset']+6;
    endif;
    wp_send_json_success(array('post'=>$rst, 'offset'=>$offset));
}
