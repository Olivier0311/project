<?php
// URI:       design/admin2/templates/popupmenu/popup_sub_editclass_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_sub_editclass_menu.tpl
// Timestamp: 1335946324 (Wed May 2 10:12:04 CEST 2012)
$oldSetArray_aad887b7cc9c8f9b5bf3e4e25fd23968 = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/plain_site/cache/template/compiled/common.php' );

$text .= '<!-- Edit class submenu -->
<script type="text/javascript">
menuArray[\'EditClassSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditClassSubmenu\'][\'elements\'] = {};
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'content\'] = \'<a href="/ezpublish/index.php/site_admin/class/edit/%classID%/(language)/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditClassSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'] = { \'url\': "/ezpublish/index.php/site_admin/class/edit/%classID%" };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'disabled_class\'] = \'menu-item-disabled\';
</script>

<div class="popupmenu" id="EditClassSubmenu">
    <div id="edit-class-languages"></div>
    <hr />
    <!-- <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Autre langue</a> -->
    <!-- <div id="edit-class-another-language"></div> -->
    <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Nouvelle traduction</a>
</div>';

$setArray = $oldSetArray_aad887b7cc9c8f9b5bf3e4e25fd23968;
$tpl->Level--;
?>
