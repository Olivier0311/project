<?php
// URI:       design/admin2/templates/page_copyright.tpl
// Filename:  design/admin2/templates/page_copyright.tpl
// Timestamp: 1335946326 (Wed May 2 10:12:06 CEST 2012)
$oldSetArray_45214b5d0e4a74afdfd38287b6ed9a81 = isset( $setArray ) ? $setArray : array();
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
<a href="http://ez.no/ezpublish" title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">eZ Publish</a> Copyright &copy; 1999-2012 <a href="http://ez.no/">eZ Systems AS</a> and others. For more information see <a href="/ezpublish/index.php/site_admin/ezinfo/about">ezinfo/about</a>.
';

$setArray = $oldSetArray_45214b5d0e4a74afdfd38287b6ed9a81;
$tpl->Level--;
?>
