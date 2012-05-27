<?php
// URI:       design:node/oocontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextmenu.tpl
// Timestamp: 1335477855 (Fri Apr 27 0:04:15 CEST 2012)
$oldSetArray_4a255696d68dcaa386be67ff0683d26b = isset( $setArray ) ? $setArray : array();
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

$text .= '<script type="text/javascript">
menuArray[\'OpenOffice\'] = [];
menuArray[\'OpenOffice\'][\'depth\'] = 1;
menuArray[\'OpenOffice\'][\'elements\'] = [];
</script>

<hr />
<a id="menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'menu-openoffice\' ); return false;">OpenOffice.org</a>


<form id="menu-form-export-ooo" method="post" action="/ezpublish/index.php/site_admin/ezodf/export">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-pdf" method="post" action="/ezpublish/index.php/site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="PDF" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-export-word" method="post" action="/ezpublish/index.php/site_admin/ezodf/export">
  <input type="hidden" name="ExportType" value="Word" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>


<form id="menu-form-import-ooo" method="post" action="/ezpublish/index.php/site_admin/ezodf/import">
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>



<form id="menu-form-replace-ooo" method="post" action="/ezpublish/index.php/site_admin/ezodf/import">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="%nodeID%" />
  <input type="hidden" name="ObjectID" value="%objectID%" />
  <input type="hidden" name="CurrentURL" value="%currentURL%" />
</form>
';

$setArray = $oldSetArray_4a255696d68dcaa386be67ff0683d26b;
$tpl->Level--;
?>
