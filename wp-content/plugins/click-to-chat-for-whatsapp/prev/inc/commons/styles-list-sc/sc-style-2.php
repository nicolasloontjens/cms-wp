<?php

if ( ! defined( 'ABSPATH' ) ) exit;

$s2_text_color = esc_attr($a['s2_text_color']);
$s2_text_color_onhover = esc_attr($a['s2_text_color_onhover']);
$s2_decoration = esc_attr($a['s2_decoration']);
$s2_decoration_onhover = esc_attr($a['s2_decoration_onhover']);


$s2_text_color = $s2_text_color;
$s2_text_color_onhover = $s2_text_color_onhover;
$s2_decoration = $s2_decoration;
$s2_decoration_onhover = $s2_decoration_onhover;

$input_onhover = "this.style.color= '$s2_text_color_onhover', this.style.textDecoration= '$s2_decoration_onhover'; ";
$input_onhover_out = "this.style.color= '$s2_text_color', this.style.textDecoration= '$s2_decoration'; ";

$o .= '<div class="ccw_plugin inline style2-sc sc_item '.$inline_issue.' " style=" '.$css.' " >';
$o .= '<a class="nofocus ccw-analytics" rel="noreferrer" data-ccw="style-2-sc" href="'.$redirect_a.'" target="_blank" style=" color:'.$s2_text_color.'; text-decoration: '.$s2_decoration.'; "  onmouseover= " '.$input_onhover.' "  onmouseout= " '.$input_onhover_out.' " >'.esc_attr($a["val"]).'</a>';
$o .= '</div>';