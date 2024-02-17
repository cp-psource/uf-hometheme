<?php
$seitenleiste_container = ( !empty($region_container) ? $region_container : "main" );
$seitenleiste_sub = ( !empty($region_sub) ? $region_sub: "right" );

/* START_REGION_OUTPUT */
$seitenleiste = upfront_create_region(
			array (
  'name' => 'seitenleiste',
  'title' => 'Seitenleiste',
  'type' => 'wide',
  'scope' => 'global',
  'container' => $seitenleiste_container,
  'sub' => $seitenleiste_sub,
  'position' => 1,
  'allow_sidebar' => true,
),
			array (
  'version' => '1.0.0',
  'col' => 5,
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
  'sub_regions' => 
  array (
    0 => false,
  ),
  'background_type' => 'color',
  'background_color' => '#ufc7',
  'bg_padding_type' => 'equal',
  'top_bg_padding_num' => 0,
  'bottom_bg_padding_num' => 0,
  'bg_padding_num' => 0,
  'region_role' => 'complementary',
  'background_style' => 'full',
  'background_position_y' => '50',
  'background_position_x' => '50',
  'origin_position_y' => '50',
  'origin_position_x' => '50',
  'use_background_size_percent' => '',
  'background_size_percent' => '100',
  'background_default' => 'hide',
  'featured_fallback_background_color' => '#ffffff',
  'background_image' => '{{upfront:style_url}}/images/global-regions/seitenleiste/Piestingtal.jpg',
  'featured_image_url' => '{{upfront:style_url}}/images/global-regions/seitenleiste/Piestingtal.jpg',
  'background_image_ratio' => 0.56,
)
			);

$seitenleiste->add_element("Login", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698667411557-1690',
  'id' => 'module-1698667411557-1690',
  'options' => 
  array (
    'preset' => 'default',
    'style' => 'form',
    'behavior' => 'click',
    'appearance' => 'icon',
    'label_image' => 'Login',
    'login_button_label' => 'Einloggen',
    'logout_link' => 'Ausloggen',
    'trigger_text' => 'Einloggen',
    'logged_in_preview' => '',
    'type' => 'LoginModel',
    'view_class' => 'LoginView',
    'class' => 'c24 upfront-login_element-object',
    'has_settings' => 1,
    'id_slug' => 'upfront-login_element',
    'logout_style' => 'link',
    'top_offset' => 0,
    'left_offset' => 0,
    'username_label' => 'Nutzername',
    'password_label' => 'Passwort',
    'remember_label' => 'Angemeldet bleiben',
    'lost_password_text' => 'Passwort verloren?',
    'lost_password_link' => 'Klicke hier zum zurückzusetzen',
    'element_id' => 'upfront-login_element-object-1698667411556-1270',
    'current_preset' => 'default',
    'breakpoint_presets' => 
    (object) array(
       'desktop' => 
      (object) array(
         'preset' => 'default',
      ),
    ),
    'padding_slider' => 15,
    'top_padding_num' => 15,
    'left_padding_num' => 15,
    'right_padding_num' => 15,
    'bottom_padding_num' => 15,
    'lock_padding' => '',
    'use_padding' => 'yes',
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-login_element-object default" id="upfront-login_element-object-1698667411556-1270" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-upfront-login_element">
		<div class="upfront_login upfront_login-block" role="form">
	<div class="upfront_login-form-wrapper">
		<div class="upfront_login-form">
			
		<form name="loginform" id="loginform" action="{{upfront:home_url}}/wp-login.php" method="post">
			
			<p class="login-username">
				<input type="text" class="upfront-input-labels" value="Nutzername">
				<input type="text" name="log" id="user_login" class="input" value="" size="20">
			</p>
			<p class="login-password">
				<input type="text" class="upfront-input-labels" value="Passwort">
				<input type="password" name="pwd" id="user_pass" class="input" value="" size="20">
			</p>
			
			<p class="login-remember"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever"><input type="text" class="upfront-input-labels" value=" Angemeldet bleiben"></label></p>
			<p class="login-submit">
				<input type="text" class="upfront-input-labels" value="Einloggen">
				<input type="hidden" name="redirect_to" value="{{upfront:home_url}}/wp-admin/admin-ajax.php">
			</p>
			
		</form>			<p class="login-lostpassword">
				<small>
					<input type="text" class="upfront-input-labels" value="Passwort verloren?">
					<input type="text" class="upfront-input-labels lostpassword-link" value="Klicke hier zum zurückzusetzen">
				</small>
			</p>
							<p>
					<a href="{{upfront:home_url}}/register-3/">Registrieren</a>
				</p>
					</div>
	</div>
</div>
	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'anchor' => '',
    'breakpoint' => 
    (object) array(
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'lock_padding',
       'tablet' => 
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
  'wrapper_id' => 'wrapper-1698667599405-1188',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => true,
      'col' => 6,
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
      'col' => 6,
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

$seitenleiste->add_element("Uwidget", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1698673028247-1585',
  'id' => 'module-1698673028247-1585',
  'options' => 
  array (
    'id_slug' => 'uwidget',
    'type' => 'UwidgetModel',
    'view_class' => 'UwidgetView',
    'class' => 'c24 upfront-widget',
    'has_settings' => 1,
    'preset' => 'default',
    'widget' => 'psourcechatstatuswidget-5',
    'element_id' => 'uwidget-object-1698673028247-1007',
    'current_widget' => 'psourcechatstatuswidget-5',
    'current_widget_specific_settings' => 
    (object) array(
       'widget-psourcechatstatuswidget-__i__-id' => 
      (object) array(
         'name' => 'id',
         'type' => 'hidden',
         'value' => '',
      ),
       'widget-psourcechatstatuswidget-__i__-box_title' => 
      (object) array(
         'label' => 'Widgettitel:',
         'name' => 'box_title',
         'type' => 'text',
         'value' => '',
      ),
    ),
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
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-widget default" id="uwidget-object-1698673028247-1007" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-uwidget">
		<div class="widget PSOURCEChatStatusWidget"><select id="psource-chat-status-widget-5" class="psource-chat-status-widget"><option class=" available" value="available" selected="selected">Online</option><option class="" value="unavailable">Abwesend</option><option class="" value="away">Offline</option></select></div>
	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'anchor' => '',
    'current_preset' => 'default',
    'current_widget_specific_fields' => 
    (object) array(
       'widget-psourcechatstatuswidget-__i__-id' => 
      (object) array(
         'name' => 'id',
         'type' => 'hidden',
         'value' => '',
      ),
       'widget-psourcechatstatuswidget-__i__-box_title' => 
      (object) array(
         'label' => 'Widgettitel:',
         'name' => 'box_title',
         'type' => 'text',
         'value' => '',
      ),
    ),
    'box_title' => '',
    'widget_specific_fields' => 
    (object) array(
       'widget-psourcechatstatuswidget-__i__-id' => 
      (object) array(
         'name' => 'id',
         'type' => 'hidden',
         'value' => '',
      ),
       'widget-psourcechatstatuswidget-__i__-box_title' => 
      (object) array(
         'label' => 'Widgettitel:',
         'name' => 'box_title',
         'type' => 'text',
         'value' => '',
      ),
    ),
    'breakpoint' => 
    (object) array(
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'lock_padding',
       'tablet' => 
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
  'wrapper_id' => 'wrapper-1698673387081-1668',
  'new_line' => true,
  'wrapper_breakpoint' => 
  array (
    'tablet' => 
    array (
      'clear' => false,
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

$seitenleiste->add_element("PlainTxt", array (
  'columns' => '5',
  'margin_left' => '0',
  'margin_right' => '0',
  'margin_top' => '0',
  'margin_bottom' => '0',
  'class' => 'module-1701781319500-1153',
  'id' => 'module-1701781319500-1153',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<p>[cpc-alerts-activity]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1701781319499-1803',
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
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt default" id="text-object-1701781319499-1803" style="padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text default" title="Double click to edit the text">
		
<div class="plain-text-container">


<p>[cpc-alerts-activity]</p>


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
  'wrapper_id' => 'wrapper-1701781336610-1588',
  'new_line' => true,
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
));

$regions->add($seitenleiste);

/* END_REGION_OUTPUT */
