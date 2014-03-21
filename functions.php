<?php

function tomjnwidgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Sidebar', 'tomjn' ),
			'id' => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="grid__item  one-whole  lap-one-half  desk-one-third widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		)
	);
}
add_action( 'widgets_init', 'tomjnwidgets_init' );