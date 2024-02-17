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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698787817197-1063 upfront-module-spacer',
  'id' => 'module-1698787817197-1063',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698787817197-1936',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698787817197-1953',
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

$main->add_element("PlainTxt", array (
  'columns' => '17',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698787796066-1842',
  'id' => 'module-1698787796066-1842',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2>Gestellte Fragen - Antworten</h2><p>Wenn uns Fragen gestellt werden, kann es sein, das wir diese, so sie Hilfreich sind, hier in der FAQ veröffentlichen.<br>Wähle aus den jeweiligen Kategorien um alle dazu gestellten Antworten einzusehen. Wenn nicht wende Dich bitte an das <a href="{{upfront:home_url}}/support-hilfe-team/">Support &amp; Hilfe Team</a>, wir werden es dann eventuell auch hier aufnehmen.</p><hr><p>[support-system-faqs]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1698787796065-1923',
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
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt default" id="text-object-1698787796065-1923" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		
<div class="plain-text-container">


<h2>Gestellte Fragen - Antworten</h2><p>Wenn uns Fragen gestellt werden, kann es sein, das wir diese, so sie Hilfreich sind, hier in der FAQ veröffentlichen.<br>Wähle aus den jeweiligen Kategorien um alle dazu gestellten Antworten einzusehen. Wenn nicht wende Dich bitte an das <a href="{{upfront:home_url}}/support-hilfe-team/">Support &amp; Hilfe Team</a>, wir werden es dann eventuell auch hier aufnehmen.</p><hr><p>[support-system-faqs]</p>


</div>


	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'is_edited' => true,
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698787811543-1620',
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

$main->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698787819374-1509 upfront-module-spacer',
  'id' => 'module-1698787819374-1509',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698787819374-1138',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698787819373-1288',
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

$regions->add($main);

$region_container = 'main';
$region_sub = 'right';
if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'seitenleiste.php');

if (file_exists(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php')) include(get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'global-regions' . DIRECTORY_SEPARATOR . 'footer.php');

