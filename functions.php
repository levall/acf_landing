<?php
/* INCLUDE CUSTOM FUNCTIONS
   ========================================================================== */
// Recommended plugins installer
require_once 'include/plugins/init.php';
// Custom functionality
require_once 'include/core.php';
require_once 'include/acf/acf-settings.php';
require_once('include/gutenberg.php');
require_once 'include/classes/maf.inc';
require_once 'include/classes/MafList.inc';
require_once 'include/classes/Ajax.inc';

global $mafList;
$mafList = new MafList();
$ajax = new Ajax();

function set_default_image_sizes() {
	update_option( 'thumbnail_size_w', 400 );
	update_option( 'thumbnail_size_h', 400 );
	update_option( 'medium_size_w', 800 );
	update_option( 'medium_size_h', 800 );
	update_option( 'large_size_w', 2048 );
	update_option( 'large_size_h', 2048 );
}

add_action( 'after_switch_theme', 'set_default_image_sizes' );


/* REGISTER MENUS
   ========================================================================== */
register_nav_menus( array(
	'main_menu'   => 'Main navigation',
	'second_menu' => 'Second navigation',
	'foot_menu'   => 'Footer navigation'
) );

function wp_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}


add_filter('wp_check_filetype_and_ext', 'ignore_upload_ext', 10, 4);
function ignore_upload_ext($checked, $file, $filename, $mimes)
{
    //we only need to worry if WP failed the first pass
    if (!$checked['type']) {
        //rebuild the type info
        $wp_filetype = wp_check_filetype($filename, $mimes);
        $ext = $wp_filetype['ext'];
        $type = $wp_filetype['type'];
        $proper_filename = $filename;
        //preserve failure for non-svg images
        if ($type && 0 === strpos($type, 'image/') && $ext !== 'svg') {
            $ext = $type = false;
        }
        //everything else gets an OK, so e.g. we've disabled the error-prone finfo-related checks WP just went through. whether or not the upload will be allowed depends on the <code>upload_mimes</code>, etc.
        $checked = compact('ext', 'type', 'proper_filename');
    }
    return $checked;
}

/**
 * Add file support for media
 *
 */
function svg_myme_types($mime_types)
{
    $mime_types['svg'] = 'image/svg+xml'; //Adding svg extension
    return $mime_types;
}

add_filter('upload_mimes', 'svg_myme_types', 1, 1);

//add_filter('acf/settings/show_admin', '__return_false');
function imgSvg($term_img)
{
    $url = $term_img;
    $arrContextOptions = array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
        ),
    );
    $response = file_get_contents($url, false, stream_context_create($arrContextOptions));
    echo $response;
}

function my_acf_admin_head() {
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.layout').not('.clones .layout').addClass('-collapsed');
        });
    </script>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

//Remove custom gutenberg blocks
add_filter('allowed_block_types', 'theme_allowed_block_types');

function theme_allowed_block_types($allowed_blocks)
{
    return array(
        'acf/best-propositions',
        'acf/product-catalog',
        'acf/modules-banner',
        'acf/banner',
        'acf/maf-resposibilities',
        'acf/maf-ordering',
        'acf/maf-thankyou'
    );
}

