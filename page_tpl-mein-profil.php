<?php
/**
 * Template Name: Mein Profil Page template
 *
 * @package ClassicPress
 * @subpackage mein-profil
 */

the_post();
$layout = Upfront_Output::get_layout(array('specificity' => 'single-page-mein-profil'));

get_header();
echo $layout->apply_layout();
get_footer();