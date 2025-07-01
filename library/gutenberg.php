<?php
function foundationforwp_acf_input_admin_footer() { ?>
    <script type="text/javascript">
        (function($) {
        acf.add_filter('color_picker_args', function( args, $field ){
        // add the hexadecimal codes here for theme colors you want to appear as swatches
        args.palettes = ['#1779ba', '#767676', '#fefefe' , '#e6e6e6', '#cacaca', '#8a8a8a', '#0a0a0a', '#3adb76', '#ffae00', '#cc4b37']
        return args;
        });
    })(jQuery);
    </script>
<?php }
add_action('acf/input/admin_footer', 'foundationforwp_acf_input_admin_footer');

if ( ! function_exists( 'foundationforwp_gutenberg_support' ) ) :
	function foundationforwp_gutenberg_support() {

        // Add foundation color palette to the editor
        add_theme_support( 'editor-color-palette', array(
            array(
                'name' => __( 'Primary Color', 'foundationpress' ),
                'slug' => 'primary',
                'color' => '#1779ba',
            ),
            array(
                'name' => __( 'Secondary Color', 'foundationpress' ),
                'slug' => 'secondary',
                'color' => '#767676',
            ),
            array(
                'name' => __( 'White', 'foundationpress' ),
                'slug' => 'white',
                'color' => '#fefefe',
            ),
            array(
                'name' => __( 'Light Gray', 'foundationpress' ),
                'slug' => 'light-gray',
                'color' => '#e6e6e6',
            ),
            array(
                'name' => __( 'Medium Gray', 'foundationpress' ),
                'slug' => 'medium-gray',
                'color' => '#cacaca',
            ),
            array(
                'name' => __( 'Dark Gray', 'foundationpress' ),
                'slug' => 'dark-gray',
                'color' => '#8a8a8a',
            ),
            array(
                'name' => __( 'Black', 'foundationpress' ),
                'slug' => 'black',
                'color' => '#0a0a0a',
            ),
            array(
                'name' => __( 'Success Color', 'foundationpress' ),
                'slug' => 'success',
                'color' => '#3adb76',
            ),
            array(
                'name' => __( 'Warning color', 'foundationpress' ),
                'slug' => 'warning',
                'color' => '#ffae00',
            ),
            array(
                'name' => __( 'Alert color', 'foundationpress' ),
                'slug' => 'alert',
                'color' => '#cc4b37',
            )
        ) );

        add_theme_support(
            'editor-gradient-presets',
            array(
                array(
                    'name'     => __( 'Primary', 'foundationforwp' ),
                    'gradient' => 'linear-gradient(90deg,rgba(23, 121, 186, 1) 0%, rgba(16, 84, 130, 1) 100%)',
                    'slug'     => 'primary',
                ),
                array(
                    'name'     => __( 'Primary to Semi-Transparent', 'foundationforwp' ),
                    'gradient' => 'linear-gradient(90deg,rgba(23, 121, 186, 1) 0%, rgba(23, 121, 186, 0.65) 100%)',
                    'slug'     => 'primary-to-semi-transparent',
                ),
                array(
                    'name'     => __( 'Secondary', 'foundationforwp' ),
                    'gradient' => 'linear-gradient(90deg,rgba(118, 118, 118, 1) 0%, rgba(82, 82, 82, 1) 100%)',
                    'slug'     => 'secondary',
                ),
                array(
                    'name'     => __( 'Secondary to Semi-Transparent', 'foundationforwp' ),
                    'gradient' => 'linear-gradient(90deg,rgba(118, 118, 118, 1) 0%, rgba(118, 118, 118, 0.65) 100%)',
                    'slug'     => 'secondary-to-semi-transparent',
                ),
            )
        );

        // removes a text box where users can enter custom pixel sizes
        add_theme_support('disable-custom-font-sizes');

        // forces the dropdown for font sizes to only contain "normal"
        add_theme_support('editor-font-sizes', array(
            array(
                'name' => 'Default',
                'size' => 16,
                'slug' => 'default'
            ),
            array(
                'name' => 'Lead',
                'size' => 20,
                'slug' => 'lead'
            ),
            array(
                'name' => 'H1',
                'size' => 48,
                'slug' => 'h1'
            ),
            array(
                'name' => 'H2',
                'size' => 40,
                'slug' => 'h2'
            ),
            array(
                'name' => 'H3',
                'size' => 31,
                'slug' => 'h3'
            ),
            array(
                'name' => 'H4',
                'size' => 25,
                'slug' => 'h4'
            ),
            array(
                'name' => 'H5',
                'size' => 20,
                'slug' => 'h5'
            ),
            array(
                'name' => 'H6',
                'size' => 16,
                'slug' => 'h6'
            )
        ) );

	}

	add_action( 'after_setup_theme', 'foundationforwp_gutenberg_support' );
endif;


function foundationforwp_gutenberg_scripts() {
    // $editor_css_version = filemtime( get_stylesheet_directory_uri() . '/dist/assets/css/editor.css' );
    $editor_css_version = '1.0.0'; // Use a static version for now, or you can use filemtime if you prefer
    wp_enqueue_style( 
        'block-editor', 
        get_stylesheet_directory_uri() . '/dist/assets/css/editor.css', 
        false, 
        $editor_css_version, 
        'all' 
    );

    // $editor_js_version = filemtime( get_stylesheet_directory_uri() . '/dist/assets/js/editor.js' );
    $editor_js_version = '1.0.0'; // Use a static version for now, or you can use filemtime if you prefe
    wp_enqueue_script(
        'foundationwp-editor-script', 
        get_stylesheet_directory_uri() . '/dist/assets/js/editor.js',
        array( 'wp-blocks', 'wp-dom' ), 
        $editor_js_version,
        true
    );
}
add_action( 'enqueue_block_editor_assets', 'foundationforwp_gutenberg_scripts' );


//browser sync for editor
function foundationforwp_admin_browsersync_js() {
    if (strpos(get_bloginfo('url'), '.local') || strpos(get_bloginfo('url'), '.gwdev')) {
        echo '<script id="__bs_script__">//<![CDATA[
        document.write(\'<script async src="http://HOST:3000/browser-sync/browser-sync-client.js?v=2.27.9"><\/script>\'.replace("HOST", location.hostname));
        //]]></script>';
    }
}
// add_action('admin_footer', 'foundationforwp_admin_browsersync_js');


