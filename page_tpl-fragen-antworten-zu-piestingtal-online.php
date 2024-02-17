<?php
/**
 * Template Name: Fragen Antworten Zu Piestingtal Online Page template
 *
 * @package ClassicPress
 * @subpackage fragen-antworten-zu-piestingtal-online
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-fragen-antworten-zu-piestingtal-online'));

get_header();
echo $layout->apply_layout();
get_footer();