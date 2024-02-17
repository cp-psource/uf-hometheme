<?php
$layout_version = '1.0.0';

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'header.php');

$main = upfront_create_region(
			array (
  'name' => 'main',
  'title' => 'Main Area',
  'type' => 'wide',
  'scope' => 'local',
  'container' => 'main',
  'position' => 10,
  'allow_sidebar' => true,
),
			array (
  'row' => 140,
  'background_type' => 'image',
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
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'origin_position_y' => '50',
  'origin_position_x' => '50',
  'use_background_size_percent' => '',
  'background_size_percent' => '100',
  'background_default' => 'hide',
  'featured_fallback_background_color' => '#ffffff',
  'background_image' => '{{upfront:style_url}}/images/single-404_page/Piestingtal.jpg',
  'featured_image_url' => '{{upfront:style_url}}/images/single-404_page/Piestingtal.jpg',
  'background_image_ratio' => 0.56,
)
			);

$main->add_element("Uimage", array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698941385261-1315',
  'id' => 'module-1698941385261-1315',
  'options' => 
  array (
    'src' => '{{upfront:style_url}}/images/single-404_page/oops-1432954_1280-825x880-7793.png',
    'srcFull' => '{{upfront:style_url}}/images/single-404_page/oops-1432954_1280.png',
    'srcOriginal' => '{{upfront:style_url}}/images/single-404_page/oops-1432954_1280.png',
    'image_title' => '',
    'alternative_text' => '',
    'include_image_caption' => true,
    'image_caption' => '<p>Meine tolle Bildbeschriftung</p>',
    'caption_position' => false,
    'caption_alignment' => false,
    'caption_trigger' => 'always_show',
    'image_status' => 'ok',
    'size' => 
    (object) array(
       'width' => 925,
       'height' => 925,
    ),
    'fullSize' => 
    (object) array(
       'width' => 1280,
       'height' => 1280,
    ),
    'position' => 
    (object) array(
       'top' => 0,
       'left' => 50,
    ),
    'marginTop' => 0,
    'element_size' => 
    (object) array(
       'width' => 825,
       'height' => 880,
    ),
    'rotation' => 0,
    'color' => '#ffffff',
    'background' => '#000000',
    'captionBackground' => '0',
    'image_id' => '37727',
    'align' => 'center',
    'stretch' => true,
    'vstretch' => true,
    'quick_swap' => false,
    'is_locked' => true,
    'gifImage' => 0,
    'placeholder_class' => '',
    'preset' => 'default',
    'display_caption' => 'showCaption',
    'type' => 'UimageModel',
    'view_class' => 'UimageView',
    'has_settings' => 1,
    'class' => 'c24 upfront-image',
    'id_slug' => 'image',
    'when_clicked' => false,
    'image_link' => '',
    'link' => 
    (object) array(
       'type' => false,
       'url' => '',
       'target' => false,
    ),
    'element_id' => 'image-1698941385259-1140',
    'current_preset' => 'default',
    'breakpoint_presets' => 
    array (
    ),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => 0,
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-image default" id="image-1698941385259-1140" style="min-height: 910px; padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-image">
		<div class="default">
	
	<div class="upfront-image-wrapper uimage uimage- uimage-status-ok uimage-caption-- uimage-stretch " style="text-align: center;">
	
		<div class="upfront-image-caption-container" style="margin-top:0px">
			
			
			<div class="upfront-image-container" style="width: 825px; overflow: hidden; position: relative; height: 880px;">
				<img src="{{upfront:style_url}}/images/single-404_page/oops-1432954_1280.png" alt="" title="" style="width: 925px; height: 925px; position: absolute; top: 0px; left: -50px; margin-top: 0px; max-height: none; max-width: none;">
			</div>
			
	
		
		
		

		
	</div>
</div>
</div>



	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-ui upfront-entity-size-hint uimage-resize-hint"></div>',
    'usingNewAppearance' => true,
    'valign' => 'top',
    'isDotAlign' => false,
    'row' => 182,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698941897184-1718',
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

$main->add_group(array (
  'columns' => '19',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => '',
  'id' => 'module-group-1698942307081-1850',
  'type' => 'ModuleGroup',
  'wrapper_id' => 'default-main-text-wrapper',
  'original_col' => 19,
  'top_padding_num' => 0,
  'left_padding_num' => 0,
  'right_padding_num' => 0,
  'bottom_padding_num' => 0,
  'lock_padding' => 'yes',
  'use_padding' => 'yes',
  'background_color' => '#ufc7',
  'background_style' => 'full',
  'background_position_y' => 50,
  'background_position_x' => 50,
  'origin_position_y' => 50,
  'origin_position_x' => 50,
  'use_background_size_percent' => '',
  'background_size_percent' => 100,
  'background_default' => 'hide',
  'featured_fallback_background_color' => '#ffffff',
  'background_type' => 'color',
  'anchor' => '',
  'left_padding_use' => 'yes',
  'left_padding_slider' => 0,
  'bottom_padding_use' => 'yes',
  'bottom_padding_slider' => 0,
  'right_padding_use' => 'yes',
  'right_padding_slider' => 0,
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'col' => 12,
      'clear' => true,
      'order' => 2,
    ),
    'mobile' => 
    array (
      'col' => 7,
      'clear' => true,
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
));

$main->add_element("PlainTxt", array (
  'columns' => '19',
  'margin_left' => '1',
  'margin_right' => '0',
  'margin_top' => '1',
  'margin_bottom' => '0',
  'class' => 'default-main-text',
  'id' => 'default-main-text',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plaintxt',
    'content' => '<h2 class="" style="text-align: center;">Error 404 - Der angeforderte Inhalt wurde nicht gefunden!​</h2><p class="" style="text-align: center;"><strong data-redactor-tag="strong" data-verified="redactor"><span class="upfront_theme_color_0"></span></strong><span class="upfront_theme_color_0"><span class="upfront_theme_color_0"><strong data-redactor-tag="strong" data-verified="redactor">Das tut uns sehr leid, wir sind zuversichtlich das Du noch fündig wirst!</strong></span></span></p>',
    'class' => 'c24 upfront-plain_txt',
    'element_id' => 'default-main-text-object',
    'type' => 'PlainTxtModel',
    'padding_slider' => 15,
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt " id="default-main-text-object" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plaintxt ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		


<h2 class="" style="text-align: center;">Error 404 - Der angeforderte Inhalt wurde nicht gefunden!​</h2><p class="" style="text-align: center;"><strong data-redactor-tag="strong" data-verified="redactor"><span class="upfront_theme_color_0"></span></strong><span class="upfront_theme_color_0"><span class="upfront_theme_color_0"><strong data-redactor-tag="strong" data-verified="redactor">Das tut uns sehr leid, wir sind zuversichtlich das Du noch fündig wirst!</strong></span></span></p>




	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'has_settings' => 1,
    'preset' => 'default',
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'current_preset' => 'default',
    'breakpoint_presets' => 
    array (
    ),
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698942307082-1148',
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
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1698942307081-1850',
));

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698942219996-1143 upfront-module-spacer',
  'id' => 'module-1698942219996-1143',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698942219996-1226',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698942307083-1735',
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
  'group' => 'module-group-1698942307081-1850',
));

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698942036350-1070',
  'id' => 'module-1698942036350-1070',
  'options' => 
  array (
    'content' => 'Zurück zur Startseite?',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1698942036350-1869',
    'link' => 
    (object) array(
       'type' => 'homepage',
       'url' => '{{upfront:home_url}}',
       'target' => '',
       'display_url' => 'https://piestingtal.onlin...',
    ),
    'breakpoint_presets' => 
    array (
    ),
    'padding_slider' => 15,
    'top_padding_num' => '5',
    'left_padding_num' => '5',
    'right_padding_num' => '5',
    'bottom_padding_num' => '5',
    'lock_padding' => 'yes',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-button default" id="button-object-1698942036350-1869" style="min-height: 65px; padding: 5px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-ubutton">
		<a href="{{upfront:home_url}}" target="" style="text-align: center;" class="button-style upfront_cta button-preset-default ueditable-inactive uf-click-to-edit-text" title="Double click to edit the text">Zurück zur Startseite?</a>
	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'left_padding_use' => 'yes',
    'left_padding_slider' => '5',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '5',
    'right_padding_use' => 'yes',
    'right_padding_slider' => '5',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '5',
    'row' => 13,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698942307087-1977',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
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
      'col' => 6,
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1698942307081-1850',
));

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698941385337-1831',
  'id' => 'module-1698941385337-1831',
  'options' => 
  array (
    'content' => 'Zum Piestingtal.Funk?',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1698941385336-1284',
    'link' => 
    (object) array(
       'type' => 'unlink',
       'url' => '{{upfront:home_url}}/talfunk/piestingtal-funk/',
       'target' => '',
       'display_url' => '',
    ),
    'breakpoint_presets' => 
    array (
    ),
    'padding_slider' => 15,
    'top_padding_num' => '5',
    'left_padding_num' => '5',
    'right_padding_num' => '5',
    'bottom_padding_num' => '5',
    'lock_padding' => 'yes',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-button default" id="button-object-1698941385336-1284" style="min-height: 65px; padding: 5px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-ubutton">
		<a href="{{upfront:home_url}}/talfunk/piestingtal-funk/" target="" style="text-align: center;" class="button-style upfront_cta button-preset-default ueditable-inactive uf-click-to-edit-text" title="Double click to edit the text">Zum Piestingtal.Funk?</a>
	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'left_padding_use' => 'yes',
    'left_padding_slider' => '5',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '5',
    'right_padding_use' => 'yes',
    'right_padding_slider' => '5',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '5',
    'row' => 13,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698942307089-1461',
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
      'col' => 6,
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
      'col' => 6,
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1698942307081-1850',
));

$main->add_element("Button", array (
  'columns' => '6',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698942051081-1618',
  'id' => 'module-1698942051081-1618',
  'options' => 
  array (
    'content' => 'Ein Problem melden?',
    'href' => '',
    'linkTarget' => '',
    'align' => 'center',
    'type' => 'ButtonModel',
    'view_class' => 'ButtonView',
    'class' => 'c24 upfront-button',
    'has_settings' => 1,
    'id_slug' => 'ubutton',
    'preset' => 'default',
    'element_id' => 'button-object-1698942051081-1709',
    'link' => 
    (object) array(
       'type' => 'entry',
       'url' => '{{upfront:home_url}}/support-hilfe-team/',
       'target' => '',
       'display_url' => '',
       'title' => 'Support & Hilfe Team',
       'object' => 'page',
       'object_id' => 21125,
    ),
    'breakpoint_presets' => 
    array (
    ),
    'padding_slider' => 15,
    'top_padding_num' => '5',
    'left_padding_num' => '5',
    'right_padding_num' => '5',
    'bottom_padding_num' => '5',
    'lock_padding' => 'yes',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-button default" id="button-object-1698942051081-1709" style="min-height: 65px; padding: 5px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-ubutton">
		<a href="{{upfront:home_url}}/support-hilfe-team/" target="" style="text-align: center;" class="button-style upfront_cta button-preset-default ueditable-inactive uf-click-to-edit-text" title="Double click to edit the text">Ein Problem melden?</a>
	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'left_padding_use' => 'yes',
    'left_padding_slider' => '5',
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => '5',
    'right_padding_use' => 'yes',
    'right_padding_slider' => '5',
    'top_padding_use' => 'yes',
    'top_padding_slider' => '5',
    'row' => 13,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698942307091-1961',
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
      'edited' => false,
    ),
    'current_property' => 
    array (
      0 => 'col',
    ),
    'mobile' => 
    array (
      'col' => 7,
      'edited' => false,
    ),
  ),
  'group' => 'module-group-1698942307081-1850',
));

$regions->add($main);

$region_container = 'main';
$region_sub = 'right';
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

