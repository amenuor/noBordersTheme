<?php
	
add_action( 'customize_register' , 'noborders_options' );

function noborders_options( $wp_customize ) {
	$wp_customize->add_section( 
		'noborders_frontpage_options', 
		array(
			'title'       => __( 'FrontPage Settings', 'noborders' ),
			'priority'    => 100,
			'capability'  => 'edit_theme_options',
			'description' => __('Change front page options here.', 'noborders'), 
		) 
	);
	
	$wp_customize->add_setting( 'noborders_theme_options[fp_no_of_slides]',
		array(
			'default' => 4
		)
	);      

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'frontpage_no_of_slides_control',
		array(
			'label'    => __( 'Number of slides', 'noborders' ), 
			'section'  => 'noborders_frontpage_options',
			'settings' => 'number_of_slides',
			'type'     => 'text',
			'priority' => 10
		) 
	));	
}
