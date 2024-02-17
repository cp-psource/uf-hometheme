<?php
/**
 * Template Name: Event Editor Page template
 *
 * @package ClassicPress
 * @subpackage event-editor
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-event-editor'));

get_header();
echo $layout->apply_layout();
get_footer();