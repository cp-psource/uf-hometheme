<?php
/**
 * Template Name: Support Hilfe Team Page template
 *
 * @package ClassicPress
 * @subpackage support-hilfe-team
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-support-hilfe-team'));

get_header();
echo $layout->apply_layout();
get_footer();