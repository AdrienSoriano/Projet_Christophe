<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function wpb_hook_javascript_footer() {
    ?>
    <script>
       
    </script>
        <?php
      }
    add_action('wp_footer', 'wpb_hook_javascript_footer');