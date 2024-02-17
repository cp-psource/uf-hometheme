<?php
/* START_REGION_OUTPUT */
$portalmarktplatz = upfront_create_region(
			array (
  'name' => 'portalmarktplatz',
  'title' => 'PortalMarktPlatz',
  'type' => 'wide',
  'scope' => 'global',
  'container' => 'portalmarktplatz',
  'position' => 1,
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
  'background_color' => 'transparent',
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => false,
)
			);

$portalmarktplatz->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698672828057-1083 upfront-module-spacer',
  'id' => 'module-1698672828057-1083',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698672828056-1308',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698672828056-1684',
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

$portalmarktplatz->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698671811856-1105',
  'id' => 'module-1698671811856-1105',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p>[mp_list_global_products paginate="1" per_page="9" order_by="rand" list_view="0"]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1698671811856-1418',
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
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt default" id="text-object-1698671811856-1418" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		
<div class="plain-text-container">


<p>[mp_list_global_products paginate="1" per_page="9" order_by="rand" list_view="0"]</p>


</div>


	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'breakpoint' => 
    (object) array(
       'tablet' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'use_padding',
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
  'wrapper_id' => 'wrapper-1698671825249-1076',
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

$portalmarktplatz->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698672830113-1087 upfront-module-spacer',
  'id' => 'module-1698672830113-1087',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698672830113-1045',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698672830113-1873',
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

$portalmarktplatz->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698672069372-1412 upfront-module-spacer',
  'id' => 'module-1698672069372-1412',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698672069372-1681',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698672069371-1182',
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

$portalmarktplatz->add_element("PlainTxt", array (
  'columns' => '22',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698671825855-1967',
  'id' => 'module-1698671825855-1967',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p>[jbp-landing-page]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1698671825853-1116',
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
    'lock_padding' => 'yes',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt default" id="text-object-1698671825853-1116" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		
<div class="plain-text-container">


<p>[jbp-landing-page]</p>


</div>


	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'left_padding_use' => 'yes',
    'left_padding_slider' => 15,
    'bottom_padding_use' => 'yes',
    'bottom_padding_slider' => 15,
    'right_padding_use' => 'yes',
    'right_padding_slider' => 15,
    'breakpoint' => 
    (object) array(
       'tablet' => 
      (object) array(
         'use_padding' => 'yes',
         'left_padding_use' => 'yes',
         'left_padding_slider' => 15,
         'left_padding_num' => 15,
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => 15,
         'bottom_padding_num' => 15,
         'right_padding_use' => 'yes',
         'right_padding_slider' => 15,
         'right_padding_num' => 15,
         'lock_padding' => 'yes',
      ),
       'current_property' => 'use_padding',
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
         'left_padding_use' => 'yes',
         'left_padding_slider' => 15,
         'left_padding_num' => 15,
         'bottom_padding_use' => 'yes',
         'bottom_padding_slider' => 15,
         'bottom_padding_num' => 15,
         'right_padding_use' => 'yes',
         'right_padding_slider' => 15,
         'right_padding_num' => 15,
         'lock_padding' => 'yes',
      ),
    ),
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698671828190-1073',
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
));

$portalmarktplatz->add_element("Uspacer", array (
  'columns' => '1',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698672073058-1120 upfront-module-spacer',
  'id' => 'module-1698672073058-1120',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698672073058-1958',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698672073057-1006',
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

$regions->add($portalmarktplatz);

/* END_REGION_OUTPUT */
