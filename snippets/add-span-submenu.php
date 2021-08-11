<?php
//---------------------------------------------------------------------------------------
// Adiciona um span nos links de menu com sub-menu
//---------------------------------------------------------------------------------------
class SH_Arrow_Walker_Nav_Menu extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = array()) {
        $indent = str_repeat("\t", $depth);
        if('primary' == $args->theme_location && $depth ==0){
            $output .='<span class="arrow"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>';
        }
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
}