<?php 
/**
 * All the widgets are registered here
 * Output templates are in another template
 */

function vibranium_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'vibranium' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'vibranium' ),
		'before_widget' => '<div id="%1$s" class="vbm__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'vibranium' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'vibranium' ),
		'before_widget' => '<div id="%1$s" class="vbm__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'vibranium' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'vibranium' ),
		'before_widget' => '<div id="%1$s" class="vbm__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'vibranium' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'vibranium' ),
		'before_widget' => '<div id="%1$s" class="vbm__widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'vibranium_widgets_init' );