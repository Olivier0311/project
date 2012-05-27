<?php
// URI:       design:dashboard/maintenance.tpl
// Filename:  design/standard/templates/dashboard/maintenance.tpl
// Timestamp: 1335946334 (Wed May 2 10:12:14 CEST 2012)
$oldSetArray_646c4ddd44677f5316738cf225517d44 = isset( $setArray ) ? $setArray : array();
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

$text .= '<h2>Mise à jour et maintenance</h2>

<p>';
unset( $var );
$var = 'Your installation: <span id="ez-version">%1</span>';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/admin/dashboard/maintenance',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'fetch',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'setup',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'version',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
<p>Si vous n\'avez pas souscrit à eZ Publish Enterprise, votre installation n\'est peut-être pas à jour. Contactez eZ Systems.</p>';

$setArray = $oldSetArray_646c4ddd44677f5316738cf225517d44;
$tpl->Level--;
?>
