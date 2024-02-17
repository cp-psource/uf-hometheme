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
  'region_role' => false,
  'version' => '1.0.0',
)
			);

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859521816-1248 upfront-module-spacer',
  'id' => 'module-1698859521816-1248',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698859521815-1163',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698859521815-1513',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '9',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859095138-1395',
  'id' => 'module-1698859095138-1395',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-featured_image',
    'id_slug' => 'post-data',
    'data_type' => 'featured_image',
    'preset' => 'postbild',
    'row' => 56,
    'type_parts' => 
    array (
      0 => 'featured_image',
    ),
    'full_featured_image' => '0',
    'hide_featured_image' => '0',
    'fallback_image' => '0',
    'fallback_color' => '#f00',
    'fallback_hide' => 0,
    'fallback_option' => 'hide',
    'post-part-featured_image' => '<div class="upostdata-part thumbnail" {{fallback}} data-resize="{{resize}}">
	{{thumbnail}}
</div>',
    'element_id' => 'post-data-object-1698859095137-1588',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'postbild',
    'breakpoint_presets' => 
    (object) array(
       'desktop' => 
      (object) array(
         'preset' => 'postbild',
      ),
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698859187271-1918',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 1,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 1,
    ),
    'current_property' => 
    array (
      0 => 'order',
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
      'columns' => '9',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-featured_image',
      'view_class' => 'PostDataPartView',
      'part_type' => 'featured_image',
      'wrapper_id' => 'wrapper-1698859095137-1670',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698859095137-1028',
      'row' => 40,
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
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
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

$main->add_element("PostData", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859643006-1630',
  'id' => 'module-1698859643006-1630',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'default',
    'row' => 18,
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
    'preset_style' => '',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
    ),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'element_id' => 'post-data-object-1698859643005-1320',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
    'theme_preset' => 'true',
    'trigger_splitters' => 
    array (
      0 => '1',
    ),
    'allow_splitting' => 
    array (
      0 => '1',
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698859201025-1770',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 2,
    ),
    'current_property' => 
    array (
      0 => 'order',
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
  'close_wrapper' => false,
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-title',
      'view_class' => 'PostDataPartView',
      'part_type' => 'title',
      'wrapper_id' => 'wrapper-1698863242686-1596',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698863242688-1674',
      'padding_slider' => 15,
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => 0,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'new_line' => true,
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

$main->add_element("PostData", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859230206-1076',
  'id' => 'module-1698859230206-1076',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'default',
    'row' => 10,
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
    'preset_style' => '',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
    ),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'element_id' => 'post-data-object-1698859230203-1331',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
    'theme_preset' => 'true',
    'trigger_splitters' => 
    array (
      0 => '1',
    ),
    'allow_splitting' => 
    array (
      0 => '1',
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698859201025-1770',
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
  'close_wrapper' => false,
  'objects' => 
  array (
    0 => 
    array (
      'columns' => '24',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-date_posted',
      'view_class' => 'PostDataPartView',
      'part_type' => 'date_posted',
      'wrapper_id' => 'wrapper-1698859648246-1996',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698859648246-1706',
      'padding_slider' => 15,
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => 0,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'new_line' => true,
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

$main->add_element("PostData", array (
  'columns' => '8',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859095130-1602',
  'id' => 'module-1698859095130-1602',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-taxonomy',
    'id_slug' => 'post-data',
    'data_type' => 'taxonomy',
    'preset' => 'default',
    'row' => 29,
    'type_parts' => 
    array (
      0 => 'tags',
      1 => 'categories',
    ),
    'categories_limit' => 3,
    'tags_limit' => 3,
    'post-part-tags' => '<div class="upostdata-part post_tags">
	{{tags}}
</div>',
    'post-part-categories' => '<div class="upostdata-part post_categories">
	{{categories}}
</div>',
    'element_id' => 'post-data-object-1698859095127-1348',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
    'static-tags-use-typography' => '',
    'static-tags-font-family' => 'Oxygen',
    'static-tags-weight' => 'inherit',
    'static-tags-fontstyle' => 'inherit inherit',
    'static-tags-style' => 'inherit',
    'static-tags-font-size' => '18',
    'static-tags-line-height' => '1.4',
    'static-tags-font-color' => '#00CE8D',
    'static-categories-use-typography' => '',
    'static-categories-font-family' => 'Oxygen',
    'static-categories-weight' => 'inherit',
    'static-categories-fontstyle' => 'inherit inherit',
    'static-categories-style' => 'inherit',
    'static-categories-font-size' => '18',
    'static-categories-line-height' => '1.4',
    'static-categories-font-color' => '#00CE8D',
    'preset_style' => '#page .default.upost-data-object-taxonomy .post_tags {
    text-align: center;
}
#page .default.upost-data-object-taxonomy .post_categories {
    text-align: center;
}
',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698859201025-1770',
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
      'columns' => '8',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-tags',
      'view_class' => 'PostDataPartView',
      'part_type' => 'tags',
      'wrapper_id' => 'wrapper-1698859095126-1181',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698859095127-1045',
      'padding_slider' => 15,
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => 0,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
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
    1 => 
    array (
      'columns' => '8',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-categories',
      'view_class' => 'PostDataPartView',
      'part_type' => 'categories',
      'wrapper_id' => 'wrapper-1698859095127-1205',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698859095127-1863',
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
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859519151-1186 upfront-module-spacer',
  'id' => 'module-1698859519151-1186',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698859519151-1124',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698859519151-1284',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698861592086-1869 upfront-module-spacer',
  'id' => 'module-1698861592086-1869',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698861592086-1520',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698861592086-1955',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698859095110-1692',
  'id' => 'module-1698859095110-1692',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-post_data',
    'id_slug' => 'post-data',
    'data_type' => 'post_data',
    'preset' => 'seitenbeitrag',
    'row' => 40,
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
    'preset_style' => '',
    'hidden_parts' => 
    array (
      0 => 'date_posted',
    ),
    'calculated_left_indent' => 0,
    'calculated_right_indent' => 0,
    'element_id' => 'post-data-object-1698859095109-1804',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'seitenbeitrag',
    'theme_preset' => 'true',
    'trigger_splitters' => 
    array (
      0 => '1',
    ),
    'allow_splitting' => 
    array (
      0 => '1',
    ),
    'theme_style' => '',
    'breakpoint_presets' => 
    (object) array(
       'desktop' => 
      (object) array(
         'preset' => 'seitenbeitrag',
      ),
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698859229401-1224',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 3,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 3,
    ),
    'current_property' => 
    array (
      0 => 'order',
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
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-content',
      'view_class' => 'PostDataPartView',
      'part_type' => 'content',
      'wrapper_id' => 'wrapper-1698869356636-1025',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1698869356636-1483',
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
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'new_line' => true,
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698862399286-1283 upfront-module-spacer',
  'id' => 'module-1698862399286-1283',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698862399286-1024',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698862399285-1259',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 1,
    ),
    'mobile' => 
    array (
      'col' => 1,
    ),
  ),
));

$main->add_element("PostData", array (
  'columns' => '18',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1467787537282-1320',
  'id' => 'module-1467787537282-1320',
  'options' => 
  array (
    'type' => 'PostDataModel',
    'view_class' => 'PostDataView',
    'has_settings' => 1,
    'class' => 'c24 upost-data-object upost-data-object-comments',
    'id_slug' => 'post-data',
    'data_type' => 'comments',
    'preset' => 'default',
    'row' => 40,
    'type_parts' => 
    array (
      0 => 'comment_count',
      1 => 'comments',
      2 => 'comments_pagination',
      3 => 'comment_form',
    ),
    'comment_count_hide' => 0,
    'disable_showing' => 
    array (
      0 => 'trackbacks',
    ),
    'disable' => 
    array (
      0 => 'trackbacks',
      1 => 'comments',
    ),
    'order' => 'comment_date_gmt',
    'direction' => 'DESC',
    'limit' => 50,
    'paginated' => 0,
    'post-part-comment_count' => '<div class="upostdata-part comment_count">
	{{comment_count||No comments}}
</div>',
    'post-part-comments' => '<div class="upostdata-part comments">
	{{comments}}
</div>',
    'post-part-comments_pagination' => '<div class="upostdata-part comments comments_pagination">
	{{pagination}}
</div>',
    'post-part-comment_form' => '<div class="upostdata-part comment_form">
	{{comment_form}}
</div>',
    'element_id' => 'post-data-object-1467787537281-1775',
    'top_padding_num' => 15,
    'bottom_padding_num' => 15,
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'lock_padding' => '',
    'anchor' => '',
    'current_preset' => 'default',
    'static-comment_count-use-typography' => '',
    'static-comment_count-font-family' => 'Oxygen',
    'static-comment_count-weight' => 'inherit',
    'static-comment_count-fontstyle' => 'inherit inherit',
    'static-comment_count-style' => 'inherit',
    'static-comment_count-font-size' => '18',
    'static-comment_count-line-height' => '1.4',
    'static-comment_count-font-color' => '#000000',
    'static-comments-use-typography' => '',
    'static-comments-font-family' => 'Oxygen',
    'static-comments-weight' => 'inherit',
    'static-comments-fontstyle' => 'inherit inherit',
    'static-comments-style' => 'inherit',
    'static-comments-font-size' => '18',
    'static-comments-line-height' => '1.4',
    'static-comments-font-color' => '#000000',
    'static-comments_pagination-use-typography' => '',
    'static-comments_pagination-font-family' => 'Oxygen',
    'static-comments_pagination-weight' => 'inherit',
    'static-comments_pagination-fontstyle' => 'inherit inherit',
    'static-comments_pagination-style' => 'inherit',
    'static-comments_pagination-font-size' => '18',
    'static-comments_pagination-line-height' => '1.4',
    'static-comments_pagination-font-color' => '#00CE8D',
    'static-comment_form-use-typography' => '',
    'static-comment_form-font-family' => 'Oxygen',
    'static-comment_form-weight' => 'inherit',
    'static-comment_form-fontstyle' => 'inherit inherit',
    'static-comment_form-style' => 'inherit',
    'static-comment_form-font-size' => '18',
    'static-comment_form-line-height' => '1.4',
    'static-comment_form-font-color' => '#000000',
    'preset_style' => '#page .default.upost-data-object-comments form#commentform {
    border: 2px dashed grey;
    padding: 10px;
}
#page .default.upost-data-object-comments textarea {
    overflow: auto;
    border: 1px solid lightgrey;
    width: 80%;
    display: block;
    position: relative;
    padding: 5px;
}
#page .default.upost-data-object-comments input#submit {
    padding: 5px;
    background: /*#ufc7*/#3b3838;
    color: #38c2bb;
}
',
    'hidden_parts' => 
    array (
      0 => 'comments_pagination',
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1467787557685-1082',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 12,
      'order' => 4,
    ),
    'mobile' => 
    array (
      'clear' => true,
      'col' => 7,
      'order' => 4,
    ),
    'current_property' => 
    array (
      0 => 'order',
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
      'columns' => '18',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comment_count',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_count',
      'wrapper_id' => 'wrapper-1698862751421-1930',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537280-1490',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'edited' => true,
      'row' => 8,
      'new_line' => true,
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
    1 => 
    array (
      'columns' => '18',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comment_form',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comment_form',
      'wrapper_id' => 'wrapper-1698862730687-1637',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537281-1359',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'edited' => true,
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
    2 => 
    array (
      'columns' => '18',
      'margin_left' => '0',
      'margin_right' => '0',
      'margin_top' => '0',
      'margin_bottom' => '0',
      'class' => 'upfront-post-data-part part-comments',
      'view_class' => 'PostDataPartView',
      'part_type' => 'comments',
      'wrapper_id' => 'wrapper-1698862730696-1625',
      'type' => 'PostDataPartModel',
      'id_slug' => 'post-data-part',
      'element_id' => 'post-data-part-object-1467787537280-1798',
      'padding_slider' => 15,
      'use_padding' => 'yes',
      'wrapper_breakpoint' => 
      array (
        'tablet' => 
        array (
          'col' => 12,
        ),
        'mobile' => 
        array (
          'col' => 7,
        ),
      ),
      'top_padding_num' => 15,
      'left_padding_num' => 15,
      'right_padding_num' => 15,
      'bottom_padding_num' => 15,
      'lock_padding' => '',
      'edited' => true,
      'new_line' => true,
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

