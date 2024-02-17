<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Hauptbereich',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'color',
  'background_color' => 'rgba(255,255,255,1)',
  'breakpoint' => 
  (object) array(
     'tablet' => 
    (object) array(
       'edited' => false,
       'col' => 24,
    ),
     'mobile' => 
    (object) array(
       'edited' => false,
       'col' => 24,
    ),
  ),
  'expand_lock' => false,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => 'main',
  'version' => '1.0.0',
)
			);

$main->add_element("PostData", array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_top' => '0',
  'class' => 'upfront-post_data_module',
  'id' => 'module-1698905801554-1648',
  'options' => 
  array (
    'data_type' => 'post_data',
    'row' => 40,
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'type_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
      2 => 'content',
    ),
    'date_posted_format' => 'j. F Y G:i',
    'content' => 'content',
    'post-part-date_posted' => '<div class="upostdata-part date_posted">
	Veröffentlicht am <span class="date">{{date}}</span></div>',
    'post-part-title' => '<div class="upostdata-part title">
	<h1>{{title}}</h1>
</div>
',
    'post-part-content' => '<div class="upostdata-part content">
	{{content}}
</div>',
    'preset' => 'default',
    'static-date_posted-use-typography' => '',
    'static-date_posted-font-family' => 'Georgia',
    'static-date_posted-weight' => '400',
    'static-date_posted-fontstyle' => '400 normal',
    'static-date_posted-style' => 'normal',
    'static-date_posted-font-size' => '18',
    'static-date_posted-line-height' => '1.4',
    'static-date_posted-font-color' => '#000000',
    'static-title-use-typography' => '',
    'static-title-font-family' => 'Arial',
    'static-title-weight' => '400',
    'static-title-fontstyle' => '400 normal',
    'static-title-style' => 'normal',
    'static-title-font-size' => '72',
    'static-title-line-height' => '1',
    'static-title-font-color' => '#000000',
    'preset_style' => '#page .default.upost-data-object-post_data .title {
    text-align: center;
}
#page .default.upost-data-object-post_data  .date_posted {
    text-align: center;
}
#page .default.upost-data-object-post_data  .content {
    overflow:hidden;
    word-break: break-word;
    display: block;
}
#page .default.upost-data-object-post_data  .is-layout-flex {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    margin: 0;
}
#page .default.upost-data-object-post_data  img {
    border: 0;
    width: 100%;
    max-width: 550px;
    min-width: 380px;
    height: auto;
    position: relative;
    display: inline-flex;
    padding: 0px;
}
',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
      1 => 'title',
    ),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'theme_preset' => 'true',
    'element_id' => 'post-data-object-1698905801553-1200',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
  ),
  'row' => 40,
  'wrapper_id' => 'wrapper-1698905946149-1173',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
  ),
  'breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
    ),
  ),
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1698905801552-1137',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698905801553-1914',
      'padding_slider' => 15,
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'clear' => true,
          'col' => 12,
          'order' => 1,
        ),
        'current_property' => 
        array (
          0 => 'order',
        ),
        'mobile' => 
        array (
          'clear' => true,
          'col' => 7,
          'order' => 1,
        ),
      ),
      'breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'current_property' => 
        array (
          0 => 'col',
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
    ),
  ),
));

$regions->add($main);

$region_container = 'main';
$region_sub = 'right';
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

