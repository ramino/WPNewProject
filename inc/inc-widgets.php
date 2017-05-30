<?php
function wpnewproject_widgets_init() {
	register_sidebar( array(
		'name'		  => __( 'Footer About', 'wpnewproject' ),
		'id'			  => 'widget-footer-1',
		'description'	  => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title--footer">',
		'after_title'	  => '</h3>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Footer Bottom', 'wpnewproject' ),
		'id'			  => 'widget-footer-2',
		'description'	  => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="title--footer">',
		'after_title'	  => '</h3>',
	) );
	
	register_sidebar( array(
		'name'		  => __( 'MailPoet Newsletter', 'wpnewproject' ),
		'id'			  => 'widget-newsletter',
		'description'	  => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<div class="card-block widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="card-title box-title--event">',
		'after_title'	  => '</h3>',
	) );
}

add_action( 'widgets_init', 'wpnewproject_widgets_init' );
