<?php
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'material_block',
        array(
            'labels' => array(
                'name' => __( 'Blocks' ),
                'singular_name' => __( 'Block' )
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('category')
        )
    );
}
function show_last_news( $atts ){
    $recent_posts = new WP_Query(['posts_per_page' => $atts['count'],'post_type' => 'post']);
    include get_template_directory() . '/template-parts/news.php';
/*    return "<div style='height: 500px;width: 500px; background-color: red'> </div>";*/
}
add_shortcode( 'news', 'show_last_news' );
