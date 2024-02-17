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
  'class' => 'module-1698787501791-1833 upfront-module-spacer',
  'id' => 'module-1698787501791-1833',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698787501790-1666',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698787501790-1380',
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
  'class' => 'module-1698787350512-1961',
  'id' => 'module-1698787350512-1961',
  'options' => 
  array (
    'view_class' => 'PlainTxtView',
    'id_slug' => 'plain_text',
    'content' => '<h2>Herzlich Willkommen beim Support-Team</h2><p>Wir sind meist Wochentags-Tagsüber aktiver, sind aber stets Bemüht uns möglichst fix um eingehende Tickets zu kümmern.</p><h3>Einige Tipps von uns:</h3><p>Emotionen sind oft nicht hilfreich bei einer Problemlösungs-Findung, leider arbeitet das Emotionale Denkzentrum schneller, das erschwert oft eine schnelle und aktive Hilfestellung. Lies Dir bitte vor dem Absenden des Tickets, dieses noch einmal durch und überlege noch einmal ob Du uns wirklich alle Notwendigen Informationen zu Deinem Anliegen möglichst präzise geschildert hast.<br>Screenshots sagen oft mehr als tausend Worte - Ok, die Metapher ist zugegeben übertrieben, jedoch kann ein Screenshot schon viel beitragen ein Anliegen zu lösen. Nutze die Funktion wenn möglich bitte.</p><h4>Manchmal ist die Antwort schon vorhanden</h4><p>Wir erweitern beständig unseren FAQ-Bereich, eventuell findest Du dort bereits eine Antwort. Wähle einfach eine passende Kategorie aus, wenn jemand schon die selbe Frage hatte, so wurde sie wahrscheinlich schon beantwortet.<br><a href="{{upfront:home_url}}/support-hilfe-team/fragen-antworten-zu-piestingtal-online/">ZUM PIESTINGTAL.ONLINE FAQ</a></p><hr><h3>Hier kannst Du Deine erstellten Tickets einsehen, sowie ein neues Ticket erstellen.</h3><p>[support-system-tickets-index]​</p><h3>Erstelle bitte ein Ticket und teile uns Dein Anliegen möglichst Detailliert mit</h3><p>[support-system-submit-ticket-form]</p>',
    'type' => 'PlainTxtModel',
    'element_id' => 'text-object-1698787350512-1969',
    'class' => 'c24 upfront-plain_txt',
    'has_settings' => 1,
    'preset' => 'supportbox',
    'current_preset' => 'supportbox',
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
    'cached_html' => '<div class="upfront-editable_entity upfront-object c24 upfront-plain_txt supportbox" id="text-object-1698787350512-1969" style="min-height: 630px; padding: 15px;">
	<b class="upfront-entity_meta upfront-ui">
		<!--  <a href="#" class="upfront-icon-button upfront-icon-button-setting upfront-entity-settings_trigger"></a>  -->
        
		<!--<a href="#" class="upfront-icon-button upfront-icon-button-delete upfront-entity-delete_trigger"></a>-->
	</b>
	
	<div class="upfront-object-content upfront-output-plain_text ueditable-inactive uf-click-to-edit-text supportbox" title="Double click to edit the text">
		
<div class="plain-text-container">


<h2>Herzlich Willkommen beim Support-Team</h2><p>Wir sind meist Wochentags-Tagsüber aktiver, sind aber stets Bemüht uns möglichst fix um eingehende Tickets zu kümmern.</p><h3>Einige Tipps von uns:</h3><p>Emotionen sind oft nicht hilfreich bei einer Problemlösungs-Findung, leider arbeitet das Emotionale Denkzentrum schneller, das erschwert oft eine schnelle und aktive Hilfestellung. Lies Dir bitte vor dem Absenden des Tickets, dieses noch einmal durch und überlege noch einmal ob Du uns wirklich alle Notwendigen Informationen zu Deinem Anliegen möglichst präzise geschildert hast.<br>Screenshots sagen oft mehr als tausend Worte - Ok, die Metapher ist zugegeben übertrieben, jedoch kann ein Screenshot schon viel beitragen ein Anliegen zu lösen. Nutze die Funktion wenn möglich bitte.</p><h4>Manchmal ist die Antwort schon vorhanden</h4><p>Wir erweitern beständig unseren FAQ-Bereich, eventuell findest Du dort bereits eine Antwort. Wähle einfach eine passende Kategorie aus, wenn jemand schon die selbe Frage hatte, so wurde sie wahrscheinlich schon beantwortet.<br><a href="{{upfront:home_url}}/support-hilfe-team/fragen-antworten-zu-piestingtal-online/">ZUM PIESTINGTAL.ONLINE FAQ</a></p><hr><h3>Hier kannst Du Deine erstellten Tickets einsehen, sowie ein neues Ticket erstellen.</h3><p>[support-system-tickets-index]​</p><h3>Erstelle bitte ein Ticket und teile uns Dein Anliegen möglichst Detailliert mit</h3><p>[support-system-submit-ticket-form]</p>


</div>


	</div>
<b class="upfront-resize-handle-element"></b><b class="upfront-resize-handle-element upfront-resize-handle-element-right"></b></div>
<div class="upfront-entity-size-hint upfront-ui"></div>',
    'usingNewAppearance' => true,
    'is_edited' => true,
    'row' => 126,
    'breakpoint' => 
    (object) array(
       'mobile' => 
      (object) array(
         'use_padding' => 'yes',
      ),
       'current_property' => 'use_padding',
    ),
    'anchor' => '',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 0,
  'hide' => 0,
  'toggle_hide' => 1,
  'wrapper_id' => 'wrapper-1698787368429-1962',
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
  'class' => 'module-1698787603444-1617 upfront-module-spacer',
  'id' => 'module-1698787603444-1617',
  'options' => 
  array (
    'type' => 'UspacerModel',
    'view_class' => 'UspacerView',
    'class' => 'c24 upfront-object-spacer',
    'has_settings' => 0,
    'id_slug' => 'uspacer',
    'element_id' => 'spacer-object-1698787603444-1027',
    'current_preset' => 'default',
    'preset' => 'default',
  ),
  'row' => 6,
  'sticky' => false,
  'default_hide' => 1,
  'hide' => 0,
  'toggle_hide' => 0,
  'wrapper_id' => 'wrapper-1698787603444-1679',
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

