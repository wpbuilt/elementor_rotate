<?php
/**
 * Plugin Name:     Elementor Rotate
 * Plugin URI:      #
 * Description:     Simply makes the elements rotate without writing a single line of code.
 * Version:         1.0
 * Author:          Dale
 * Author URI:      #
 **/
 
 if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}
 
add_action( 'elementor/element/before_section_end', function( $element, $section_id, $args ) {
    
    if ( 'image' === $element->get_name() && 'section_image' === $section_id ) {

        $element->add_responsive_control(
            'rotate',
            [
                'label' => __( 'Rotate', 'elementor-rotate' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 360,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ' => 'transform: rotate({{SIZE}}deg);',
				],
            ]
        );
    }
    if ( 'heading' === $element->get_name() && 'section_title' === $section_id ) {

        $element->add_responsive_control(
            'rotate',
            [
                'label' => __( 'Rotate', 'elementor-rotate' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 360,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ' => 'transform: rotate({{SIZE}}deg);',
				],
            ]
        );
        
    }
}, 10, 3 );