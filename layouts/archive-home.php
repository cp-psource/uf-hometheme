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
  'row' => 114,
  'background_type' => 'color',
  'background_color' => 'rgba(255,255,255,1)',
  'version' => '1.0.0',
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
  'use_padding' => 0,
  'sub_regions' => 
  array (
    0 => false,
  ),
  'bg_padding_type' => 'varied',
  'top_bg_padding_slider' => 0,
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_slider' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_slider' => 0,
  'bg_padding_num' => 0,
  'expand_lock' => false,
  'region_role' => false,
)
			);

$main->add_element("PlainTxt", array (
  'columns' => '24',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698665587492-1008',
  'id' => 'module-1698665587492-1008',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p>[eab_calendar network="yes" navigation="yes" footer="yes&nbsp;show_old="yes" with_thumbnail="yes" show_excerpt="yes" excerpt_length="326" show_old="yes"]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1698665587491-1863',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'default',
    'current_preset' => 'default',
    'breakpoint_presets' => 
    array (
    ),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt default" id="text-object-1698665587491-1863" style="min-height: 145px; padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		
<div class="plain-text-container">


<p>[eab_calendar network="yes" navigation="yes" footer="yes&nbsp;show_old="yes" with_thumbnail="yes" show_excerpt="yes" excerpt_length="326" show_old="yes"]</p>


</div>


	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'breakpoint' => 
    (object) array(
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'use_padding',
       'tablet' => 
      (object) array(
         'use_padding' => 'yes',
      ),
    ),
    'is_edited' => true,
    'row' => 29,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698665733243-1086',
  'new_line' => true,
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
));

$regions->add($main);

$startcontent = upfront_create_region(
			array (
  'name' => 'startcontent',
  'title' => 'StartContent',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'startcontent',
  'position' => 20,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'row' => 60,
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
  'background_type' => 'color',
  'background_color' => 'rgba(59,56,56,0.95)',
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => false,
)
			);

$startcontent->add_element("Posts", array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698670348579-1557',
  'id' => 'module-1698670348579-1557',
  'options' => 
  array (
    'type' => 'PostsModel',
    'view_class' => 'PostsView',
    'has_settings' => 1,
    'class' => 'c24 uposts-object',
    'id_slug' => 'posts',
    'display_type' => 'list',
    'list_type' => 'generic',
    'offset' => 1,
    'taxonomy' => '',
    'term' => '',
    'content' => 'excerpt',
    'limit' => '9',
    'pagination' => '',
    'sticky' => '',
    'posts_list' => '',
    'thumbnail_size' => 'large',
    'custom_thumbnail_width' => 200,
    'custom_thumbnail_height' => 200,
    'post_parts' => 
    array (
      0 => 'featured_image',
      1 => 'date_posted',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
      5 => 'categories',
    ),
    'enabled_post_parts' => 
    array (
      0 => 'date_posted',
      1 => 'featured_image',
      2 => 'title',
      3 => 'content',
      4 => 'read_more',
      5 => 'categories',
    ),
    'default_parts' => 
    array (
      0 => 'date_posted',
      1 => 'author',
      2 => 'gravatar',
      3 => 'comment_count',
      4 => 'featured_image',
      5 => 'title',
      6 => 'content',
      7 => 'read_more',
      8 => 'tags',
      9 => 'categories',
      10 => 'meta',
    ),
    'date_posted_format' => 'j. F Y',
    'categories_limit' => 3,
    'tags_limit' => 3,
    'comment_count_hide' => 0,
    'content_length' => '30',
    'resize_featured' => '1',
    'gravatar_size' => 200,
    'preset' => 'beitragsarchiv',
    'post-part-date_posted' => '<div class="uposts-part date_posted">
	Veröffentlicht am <span class="datetime">{{datetime}}</span></div>',
    'post-part-author' => '<div class="uposts-part author">
	Von <a href="{{url}}">{{name}}</a></div>',
    'post-part-gravatar' => '<div class="uposts-part gravatar">
	{{gravatar}}
</div>',
    'post-part-comment_count' => '<div class="uposts-part comment_count">
	{{comment_count||Keine Kommentare}}
</div>',
    'post-part-featured_image' => '<div class="uposts-part thumbnail" data-resize="{{resize}}">
	{{thumbnail}}
</div>',
    'post-part-title' => '<div class="uposts-part title">
	<h3><a href="{{permalink}}" title="{{title}}">{{title}}</a></h3>
</div>',
    'post-part-content' => '<div class="uposts-part content {{content_type}}">
	{{content}}
</div>',
    'post-part-read_more' => '<div class="uposts-part read_more">
	<a href="{{permalink}}">Weiterlesen<span class="screen-reader-text">{{title}}</span></a></div>',
    'post-part-tags' => '<div class="uposts-part post_tags">
	{{tags}}
</div>',
    'post-part-categories' => '<div class="uposts-part post_categories">
	{{categories}}
</div>',
    'post-part-meta' => '<div class="uposts-part meta">
	
</div>
',
    'element_id' => 'posts-object-1698670348577-1362',
    'current_preset' => 'beitragsarchiv',
    'breakpoint_presets' => 
    (object) array(
       'desktop' => 
      (object) array(
         'preset' => 'beitragsarchiv',
      ),
    ),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'usingNewAppearance' => true,
    'anchor' => '',
    'theme_style' => '',
    'breakpoint' => 
    (object) array(
       'tablet' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'lock_padding',
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
      ),
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698670492949-1664',
  'new_line' => true,
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
));

$regions->add($startcontent);

$region_container = 'startcontent';
$region_sub = 'right';
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'portalmarktplatz.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'portalmarktplatz.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

