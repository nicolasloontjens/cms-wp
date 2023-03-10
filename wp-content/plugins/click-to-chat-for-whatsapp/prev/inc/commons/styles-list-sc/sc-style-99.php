<?php

if ( ! defined( 'ABSPATH' ) ) exit;

$s_99_img_height_desktop = esc_attr($a['s99_img_height_desktop']);
$s_99_img_width_desktop = esc_attr($a['s99_img_width_desktop']);
$s_99_img_height_mobile = esc_attr($a['s99_img_height_mobile']);
$s_99_img_width_mobile = esc_attr($a['s99_img_width_mobile']);
$s_99_desktop_img = esc_attr($a['s99_desktop_img']);
$s_99_mobile_img = esc_attr($a['s99_mobile_img']);

// img url
// image - width, height based on device
$img_css = "";

if( 1 == $is_mobile ) {
    $own_image = $s_99_mobile_img;

    if ( '' !== $s_99_img_height_mobile ) {
        $img_css .= "height: $s_99_img_height_mobile; ";
    }
    if ( '' !== $s_99_img_width_mobile ) {
        $img_css .= "width: $s_99_img_width_mobile; ";
    }
} else {
    $own_image = $s_99_desktop_img;

    if ( '' !== $s_99_img_height_desktop ) {
        $img_css .= "height: $s_99_img_height_desktop; ";
    }
    
    if ( '' !== $s_99_img_width_desktop ) {
        $img_css .= "width: $s_99_img_width_desktop; ";
    }
}

if ( '' == $own_image ) {
    $own_image = plugins_url( './new/inc/assets/img/whatsapp-logo.svg', HT_CTC_PLUGIN_FILE );
}


$o .= '<div class="ccw_plugin pointer '.$inline_issue.' " style='.$css.'>';
$o .= '<img class="own-img-sc inline ccw-analytics" id="style-99-sc" data-ccw="style-99-sc-own-image" style=" '.$img_css.' " src=" '.$own_image.' " onclick="'.$img_click_link.'" alt="WhatsApp chat">';
$o .= '</div>';