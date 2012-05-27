<?php
// URI:       design/admin2/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1335946335 (Wed May 2 10:12:15 CEST 2012)
$oldSetArray_29f8de13dfc03281421f873f09d78323 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit menu -->
<script type="text/javascript">
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/ezpublish/index.php/site_admin/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/ezpublish/index.php/site_admin/content/edit/%objectID%/a" };
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">Nouvelle traduction</a>
</div>';

$setArray = $oldSetArray_29f8de13dfc03281421f873f09d78323;
$tpl->Level--;
?>
