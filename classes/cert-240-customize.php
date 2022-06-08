<?php
/**
 * Customizer settings for this theme.
 *
 */

if ( ! class_exists( 'Cert_240_Customize' ) ) {

    class Cert_240_Customize {

        public function __construct() {
            add_action( 'customize_register', array( $this, 'register' ));
        }

        public function register( $wp_customize ) {
            // $wp_customize->remove_control('blogdescription');
            /**
            * Add Navigation Button Link and Button Text
            */
			$wp_customize->add_section(
				'nav_btn',
				array(
					'title'         => esc_html__( 'Navigation Button Link', 'cert-240-theme' ),
					'capability'    => 'edit_theme_options',
                    'priority'      => 60,
				)
			);
            $wp_customize->add_setting(
                'nav_btn_link',
                array(
                    'type'        => 'theme_mod',
                )
            );
            $wp_customize->add_control(
                'nav_btn_link',
                array(
                    'type'    => 'textarea',
                    'section' => 'nav_btn',
                    'label'   => __( 'Add Navigation Button Link', 'cert-240-theme' ),
                    'default'     => '',
                    'priority' => 10,
                )
            );
            $wp_customize->add_setting(
                'nav_btn_title',
                array(
                    'type'        => 'theme_mod',
                )
            );
            $wp_customize->add_control(
                'nav_btn_title',
                array(
                    'type'    => 'text',
                    'section' => 'nav_btn',
                    'label'   => __( 'Add Navigation Button Title', 'cert-240-theme' ),
                    'default'     => '',
                    'priority' => 10,
                )
            );
              /**
            * Include Site Title Meta
            */ 
            $wp_customize->add_setting(
                'site_meta_description',
                array(
                    'type'        => 'theme_mod',
                )
            );
            $wp_customize->add_control(
                'site_meta_description',
                array(
                    'type'    => 'textarea',
                    'section' => 'title_tagline',
                    'label'   => __( 'Site Meta Description', 'cert-240-theme' ),
                    'default'     => '',
                    'priority' => 10,
                )
            );

        }

    }

}