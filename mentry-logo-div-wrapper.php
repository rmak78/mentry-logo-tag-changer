<?php
/*
Plugin Name: Mentry Logo H1 to Div
Plugin URI: https://github.com/rmak78/mentry-logo-tag-changer/
Description: Replaces H1 with DIV in Mentry theme's logo output.
Version: 1.0
Author: Rana Mansoor Akbar Khan
Author URI: https://github.com/rmak78
*/

if ( ! function_exists( 'thsn_logo' ) ) :
function thsn_logo( $inneronly = '' ) {
    $return             = '';
    $logo_img           = '';
    $main_logo          = thsn_get_base_option( 'logo' );
    $sticky_logo        = thsn_get_base_option( 'sticky-logo' );
    $responsive_logo    = thsn_get_base_option( 'responsive-logo' );

    // Logo images (unchanged from original)
    if( ! empty( $main_logo ) ){
        $logo_img .= '<img class="thsn-main-logo" src="' . esc_url( $main_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
    }
    if( ! empty( $sticky_logo ) ){
        $logo_img .= '<img class="thsn-sticky-logo" src="' . esc_url( $sticky_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
    }
    if( ! empty( $responsive_logo ) ){
        $logo_img .= '<img class="thsn-responsive-logo" src="' . esc_url( $responsive_logo ) . '" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
    }

    // Modified wrapper tags: H1 → DIV
    if( ! empty( $logo_img ) ){
        if( $inneronly == 'yes' ){
            $return .= '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . thsn_esc_kses( $logo_img ) . '</a>';
        } else {
            // Changed from <h1> to <div> here
            $return .= ( is_front_page() ) ? '<div class="site-title">' : '<div class="site-title">' ;
            $return .= '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
            $return .= ( is_front_page() ) ? '<span class="site-title-text">' . get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) . '</span>' : '' ;
            $return .= thsn_esc_kses( $logo_img );
            $return .= '</a>';
            $return .= '</div>'; // Changed from </h1> to </div>
        }
    }
    return thsn_esc_kses( $return );
}
endif;
