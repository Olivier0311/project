<?php
// URI:       design/admin2/templates/details.tpl
// Filename:  design/admin2/templates/details.tpl
// Timestamp: 1335946328 (Wed May 2 10:12:08 CEST 2012)
$oldSetArray_c0d898025effebe41c427c4e775700c7 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="block">


<table class="list" cellspacing="0" summary="Détail du nœud et de l\'objet comme son créateur, sa date de création, la section à laquelle il appartient, nombre de versions et de traductions, ID du nœud et de l\'objet.">
<tr>
    <th>Créateur</th>
    <th>Créé</th>
    <th>Section</th>
    <th class="tight">Versions</th>
    <th class="tight">Traductions</th>
    <th class="tight">ID du Nœud </th>
    <th class="tight">ID de l\'objet </th>
</tr>
<tr class="bglight">
    <td><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'main_node' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'owner' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a></td>
    <td>';
unset( $var );
// l10nTransformation begin
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'published' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
    <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'section_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZSectionFunctionCollection(), 'fetchSectionObject' ),
  array(     'section_id' => $var1,
    'identifier' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['section_object'] = $var;
unset( $var );
unset( $show );
unset( $show );
$show = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section_object'] : null;
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'section_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( '/section/view/' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

eZURI::transformURI( $var1, false, eZURI::getTransformURIMode() );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section_object'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>';
}
else
{

unset( $show );

$text .= '<i>Inconnu</i>';
}

unset( $vars[$currentNamespace]['section_object'] );
$text .= '</td>
    <td class="number" align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'versions' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
    <td class="number" align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'contentobject_version_object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
    <td class="number" align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
    <td class="number" align="right">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</td>
</tr>
</table>
</div>

<div class="block">
<table class="list" cellspacing="0" summary="ID externe du nœud et ID externe de l\'objet">
    <tr>
        <th>ID externe du nœud</th>
        <th>ID externe de l\'objet</th>
    </tr>
    <tr>
         <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'remote_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
         <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'remote_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
    </tr>
</table>
</div>

<br />

<div class="block">
<h3>État du contenu</h3>


<form name="statesform" method="post" action="/ezpublish/index.php/site_admin/state/assign">
<input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
<input type="hidden" name="RedirectRelativeURI" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />

<table id="tab-details-states-list" class="list" cellspacing="0" summary="États et groupes d\'états du l\'objet courant.">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <tr>
        <th class="tight">Groupe d\'états</th>
        <th class="wide">États disponibles</th>
    </tr>

    ';
// foreach begins
$skipDelimiter = true;
// creating sequence variables for \{foreach} loop
$foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 = array (
  0 => 'bglight',
  1 => 'bgdark',
);
$foreach_sequence_var_e0c1a825dc8e300075bc150462a8b4ec_6 = current( $foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 );

if ( !isset( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6 ) ) $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6 = array();
$fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6[] = compact( 'fe_array_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_i_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_key_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_val_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_max_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_6', 'fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6' );
unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 );
unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 );
$fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states'] : null;
if (! isset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 ) ) $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 = NULL;
while ( is_object( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 ) and method_exists( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6, 'templateValue' ) )
    $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6->templateValue();

$fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_6 = is_array( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 ) ? array_keys( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 ) : array();
$fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 = count( $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_6 );
$fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_6 = 0;
$fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 = 0;
$fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6;
$fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6 = false;
if ( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 < 0 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 >= $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 )
{
    $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 = ( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 < 0 ) ? 0 : $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6;
    if ( $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6'. Array count: $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6");   
}
}
if ( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 < 0 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 + $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 > $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 )
{
    if ( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6");
    $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6;
}
if ( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6 )
{
    $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 - 1 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6;
    $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6  = 0;
}
else
{
    $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6;
    $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6  = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 - 1;
}
// foreach
for ( $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_6; $fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_6 < $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 && ( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6 ? $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6 >= $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6 : $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6 <= $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6 ); $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6 ? $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6-- : $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6++ )
{
$fe_key_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_6[$fe_i_e0c1a825dc8e300075bc150462a8b4ec_6];
$fe_val_e0c1a825dc8e300075bc150462a8b4ec_6 = $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6[$fe_key_e0c1a825dc8e300075bc150462a8b4ec_6];
$vars[$rootNamespace]['allowed_assign_state_info'] = $fe_val_e0c1a825dc8e300075bc150462a8b4ec_6;
// setting current sequence value
$vars[$rootNamespace]['sequence'] = $foreach_sequence_var_e0c1a825dc8e300075bc150462a8b4ec_6;
$text .= '    <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sequence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sequence'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
        <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'group' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
        <td>
            <select name="SelectedStateIDList[]" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'states' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '>
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5 ) ) $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5 = array();
$fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5[] = compact( 'fe_array_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_i_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_key_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_val_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_max_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_5', 'fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5' );
unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 );
unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 );
$fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$fe_array_e0c1a825dc8e300075bc150462a8b4ec_51 = compiledFetchAttribute( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5, 'states' );
unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 );
$fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_array_e0c1a825dc8e300075bc150462a8b4ec_51;
if (! isset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 ) ) $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 = NULL;
while ( is_object( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 ) and method_exists( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5, 'templateValue' ) )
    $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5->templateValue();

$fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_5 = is_array( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 ) ? array_keys( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 ) : array();
$fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 = count( $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_5 );
$fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_5 = 0;
$fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 = 0;
$fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5;
$fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5 = false;
if ( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 < 0 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 >= $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 )
{
    $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 = ( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 < 0 ) ? 0 : $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5;
    if ( $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5'. Array count: $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5");   
}
}
if ( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 < 0 || $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 + $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 > $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 )
{
    if ( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5");
    $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5;
}
if ( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5 )
{
    $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 - 1 - $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5;
    $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5  = 0;
}
else
{
    $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5;
    $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5  = $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 - 1;
}
// foreach
for ( $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_5; $fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_5 < $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 && ( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5 ? $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5 >= $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5 : $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5 <= $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5 ); $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5 ? $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5-- : $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5++ )
{
$fe_key_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_5[$fe_i_e0c1a825dc8e300075bc150462a8b4ec_5];
$fe_val_e0c1a825dc8e300075bc150462a8b4ec_5 = $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5[$fe_key_e0c1a825dc8e300075bc150462a8b4ec_5];
$vars[$rootNamespace]['state'] = $fe_val_e0c1a825dc8e300075bc150462a8b4ec_5;
$text .= '                <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'object' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'state_id_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
            ';
$fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5 ) ) extract( array_pop( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5 ) );

else
{

unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_i_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_key_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_val_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_5 );

unset( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_5 );

}

// foreach ends
$text .= '            </select>
        </td>
    </tr>
    ';
// sequence iteration
if ( ( $foreach_sequence_var_e0c1a825dc8e300075bc150462a8b4ec_6 = next( $foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 ) ) === false )
{
   reset( $foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 );
   $foreach_sequence_var_e0c1a825dc8e300075bc150462a8b4ec_6 = current( $foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 );
}

$fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_6++;
} // foreach
unset( $foreach_sequence_array_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $foreach_sequence_var_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $vars[$rootNamespace]['sequence'] );
$skipDelimiter = false;
if ( count( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6 ) ) extract( array_pop( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6 ) );

else
{

unset( $fe_array_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_array_keys_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_n_items_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_n_items_processed_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_i_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_key_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_val_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_offset_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_max_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_reverse_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_first_val_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_last_val_e0c1a825dc8e300075bc150462a8b4ec_6 );

unset( $fe_variable_stack_e0c1a825dc8e300075bc150462a8b4ec_6 );

}

// foreach ends
}
else
{
$text .= '    <tr class="bgdark">
    <td colspan="2">
    <em>';
unset( $var );
unset( $var2 );
unset( $var3 );
$var3 = ( '<a href=' . '"/ezpublish/index.php/site_admin/state/groups"' . '>' );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%urlstart' => $var3, '%urlend' => "</a>" );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Aucun état d\'objet de contenu n\'est configuré. Ceci peut être fait %urlstart ici%urlend.', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</em>
    </td>
    </tr>';
}
unset( $if_cond );
// if ends

$text .= '</table>

<div class="block">
<div class="button-left">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="submit" id="tab-details-set-states" value="Définir les états" name="AssignButton" class="button" title="Appliquer les états de la liste ci-dessus." />
    ';
}
else
{
$text .= '    <input type="submit" id="tab-details-set-states" value="Définir les états" name="AssignButton" class="button-disabled" disabled="disabled" title="Aucun état ne peut être appliqué à cet objet de contenu. Vous avez peut-être besoin d\'accès plus permissifs."/>
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>
<div class="break"></div>
</div>

</form>
</div>
<script type="text/javascript">

(function( $ )
{
    $(\'#tab-details-states-list select\').change(function()
    {
        var btn = $(\'#tab-details-set-states\');
        if ( !btn.attr(\'disabled\') )
        {
            btn.removeClass(\'button\').addClass(\'defaultbutton\');
        }
    });
})( jQuery );

</script>
';

$setArray = $oldSetArray_c0d898025effebe41c427c4e775700c7;
$tpl->Level--;
?>
