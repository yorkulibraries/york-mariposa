<?php
function neat_trim($string, $max=100, $delim=' ...') {
    if (strlen($string) > $max) {
        $string = substr($string, 0, $max);
        $end = strrpos($string, ' ');
        if ($end === false) {
            $end = $max;
        }
        $string = substr($string, 0, $end) . $delim;
    }
    return $string;
}

function random_featured_item($hasImage = null, $collection_id = 1) {
    $random = get_random_featured_items(50, $hasImage);
    foreach ($random as $item) { 
        if ($item->collection_id == $collection_id && metadata($item, 'has files')) {
            return $item;
        }
    }
    return null;
}

function get_exhibit_sections($exhibit) {
    $sections = array();
    foreach($exhibit->Pages as $page) {
        if (!$page->parent_id) {
            $sections[] = $page;
        }
    }
    return $sections;
}

function pages_in_section_nav($currentPage) {
    $section = $currentPage->parent_id ? $currentPage->getParent() : $currentPage;
    $pages = array();
    $pages = $section->getChildPages();
    $exhibit = $currentPage->getExhibit();
    
    $html = '<ul class="exhibit-page-nav navigation">' . "\n";
    
    foreach ($pages as $page) {
        $html .= '<li' . ($currentPage->id == $page->id ? ' class="current"' : '') . '>';
        $html .= '<a class="exhibit-page-title" href="' . html_escape(exhibit_builder_exhibit_uri($exhibit, $page)) . '">';
        $html .= html_escape($page->title) . "</a></li>\n";
    }
    $html .= '</ul>' . "\n";
    $html = apply_filters('exhibit_builder_page_nav', $html);
    return $html;
}
?>