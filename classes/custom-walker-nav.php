<?php 

class Certification_240_Custom_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '<ul class="sub-menu" aria-labelledby="navbarDropdown">';
    }

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $is_current_item = '';
        if(array_search('current-menu-item', $item->classes) != 0)
        {
            $is_current_item = ' active-link';
        }
        $output .= '<li class="nav-item dropdown">';
        $output .= $args->before;
        $output .= '<a class="nav-link' . $is_current_item .'" href="'. $item->url .'">';
        $output .= $args->link_before . $item->title . $args->link_after;
        $output .= '</a>';
        $output .= $args->after;
    }

    public function end_el(&$output, $item, $depth = 0, $args = \null)
    {
        $output .= '</li>';
    }

    public function end_lvl(&$output, $depth = 0, $args = [])
    {
        $output .= '</ul>';
    }
}