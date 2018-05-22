<?php
// Categories walker
class Walker_Categories_Template extends Walker_Category {



    function start_lvl(&$output, $depth=1, $args=array()) {
        $output .= "\n<ul class=\"list-group\">\n";
    }

    function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</ul>\n";
    }

    function start_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "<li class=\"list-group-item button\" data-filter=\"$item->slug\" >
        <a href=\"#".esc_attr( $item->slug ) ."\" title=\"".esc_attr( $item->name )."\">".esc_attr( $item->name );
    }

    function end_el(&$output, $item, $depth=0, $args=array()) {
        $output .= "</a></li>\n";
   }
}


 ?>
