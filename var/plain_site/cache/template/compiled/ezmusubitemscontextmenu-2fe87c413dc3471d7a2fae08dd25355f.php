<?php
// URI:       design:node/ezmusubitemscontextmenu.tpl
// Filename:  extension/ezmultiupload/design/standard/templates/node/ezmusubitemscontextmenu.tpl
// Timestamp: 1333360276 (Mon Apr 2 11:51:16 CEST 2012)
$oldSetArray_43ec65dba1912908b2f18c3a6ffeb751 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<hr/>
<script type="text/javascript">
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'] = new Array();
menuArray[\'SubitemsContextMenu\'][\'elements\'][\'child-menu-multiupload\'][\'url\'] = "/ezpublish/index.php/site_admin/ezmultiupload/upload/%nodeID%";
</script>

<a id="child-menu-multiupload" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" >Envoyer plusieurs fichiers</a>
';

$setArray = $oldSetArray_43ec65dba1912908b2f18c3a6ffeb751;
$tpl->Level--;
?>
