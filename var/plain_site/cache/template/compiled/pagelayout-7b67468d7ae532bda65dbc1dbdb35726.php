<?php
// URI:       design:pagelayout.tpl
// Filename:  design/admin2/templates/pagelayout.tpl
// Timestamp: 1335946327 (Wed May 2 10:12:07 CEST 2012)
$oldSetArray_b7be237c7529d9441ac12f56e21c4aef = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html>
<html lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
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

$text .= '">
<head>
';
// def $ui_context_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( ( $var1 ) == ( 'edit' ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'ui_context_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'ui_context_edit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'ui_context_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'ui_context_edit', $var, $rootNamespace );
}

// def $content_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( ( $var3 ) == ( 'content' ) );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( !$var1 )
    $var = false;
else if ( !$var2 )
    $var = false;
else
    $var = $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_edit' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'content_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_edit', $var, $rootNamespace );
}

// def $hide_left_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "left_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_left_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_left_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_left_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_left_menu', $var, $rootNamespace );
}

// def $hide_right_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "extra_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "ui_context_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["ui_context_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_right_menu', $var, $rootNamespace );
}

// def $collapse_right_menu
unset( $var );
unset( $var1 );
$var1 = eZPreferences::value( "admin_right_menu_show" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'collapse_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'collapse_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'collapse_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'collapse_right_menu', $var, $rootNamespace );
}

// def $admin_left_size
unset( $var );
$var = eZPreferences::value( "admin_left_menu_size" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_left_size', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_left_size' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_left_size', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_left_size', $var, $rootNamespace );
}

// def $admin_theme
unset( $var );
$var = eZPreferences::value( "admin_theme" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_theme', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_theme', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme', $var, $rootNamespace );
}

// def $left_size_hash
if ( $tpl->hasVariable( 'left_size_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_size_hash' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_size_hash', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_size_hash', 0, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 0,
    2 => 150,
  ),
  1 => 
  array (
    0 => 14,
    1 => 0,
    2 => 905,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'collapse_right_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['collapse_right_menu'] = false;
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( $if_cond3 )
    $if_cond2 = $if_cond3;
else if ( $if_cond4 )
    $if_cond2 = $if_cond4;
else
    $if_cond2 = false;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<style type="text/css">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    div#page div#rightmenu  { width: 18px; }    div#page div#maincolumn { margin-right: 17px; }';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $left_menu_widths
if ( $tpl->hasVariable( 'left_menu_widths', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_widths' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 4,
    2 => 1259,
  ),
  1 => 
  array (
    0 => 26,
    1 => 79,
    2 => 1334,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'left_size_hash', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['left_size_hash'] = $var;
    unset( $var );
}
$text .= '        div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }        div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }    ';
}
else
{
$text .= '        div#page div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
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

$text .= '; }        div#page div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
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

$text .= '; }    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $left_menu_widths
$tpl->unsetLocalVariable( 'left_menu_widths', $rootNamespace );

}
unset( $if_cond );
// if ends

$text .= '</style>';
}
unset( $if_cond );
// if ends

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "42_0_42_180_design/admin2/templates/pagelayout.tpl", "site_admin" );

list($cacheHandler_e15390a72debbf21148f5d6b4b672bd5, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$oldRestoreIncludeArray_18da912f704c48ae7b7441475f8c3eb2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_head-61c43153f95a5bcca4b6b9960607010e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_head.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_head-61c43153f95a5bcca4b6b9960607010e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_18da912f704c48ae7b7441475f8c3eb2;

$oldRestoreIncludeArray_5e244fc50306e1ad8af0bbfabf291f57 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_head_style-498fa4c04b5b21f5f01b078a787e57de.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_head_style.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_head_style-498fa4c04b5b21f5f01b078a787e57de.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_5e244fc50306e1ad8af0bbfabf291f57;

$oldRestoreIncludeArray_606e117cfe138b75230d870db0e8c9d6 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_head_script-2deaf36c486825b4e367d59d16af5901.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_head_script.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_head_script-2deaf36c486825b4e367d59d16af5901.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_606e117cfe138b75230d870db0e8c9d6;

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "50_0_50_174_design/admin2/templates/pagelayout.tpl", "site_admin" );

list($cacheHandler_714e62b9c13cb3ab4e9a97b5745c9886, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
</head>
<body>

<div id="page" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' section_id_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var2 = compiledFetchAttribute( $var1, "section_id" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">

<div id="header">
<div id="header-design" class="float-break">

';
$oldRestoreIncludeArray_833074d1c5f2930d82a62dadcc2bc06f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_header-76196c0bceffff6a9bdebb0418ef162b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_header.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_header-76196c0bceffff6a9bdebb0418ef162b.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_833074d1c5f2930d82a62dadcc2bc06f;

$text .= '
';
$oldRestoreIncludeArray_ff0589d78b47d36344f0af54899713a2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_topmenu-a21d8950754e8d9b766b5d63103d1c1f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_topmenu.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_topmenu-a21d8950754e8d9b766b5d63103d1c1f.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_ff0589d78b47d36344f0af54899713a2;

$text .= '
</div>
</div>';
$cachedText = $text;
$cacheHandler_714e62b9c13cb3ab4e9a97b5745c9886->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_714e62b9c13cb3ab4e9a97b5745c9886 );
}

$text .= '

<hr class="hide" />';
$cachedText = $text;
$cacheHandler_e15390a72debbf21148f5d6b4b672bd5->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_e15390a72debbf21148f5d6b4b672bd5 );
}

$text .= '

<div id="columns"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="hide-rightmenu"';
}
unset( $if_cond );
// if ends

$text .= '>


<div id="rightmenu">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Afficher / Cacher le menu de droite" href="/ezpublish/index.php/site_admin/user/preferences/set/admin_right_menu_show/1">&laquo;</a>
    <div id="rightmenu-design"></div>';
}
else
{
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Cacher / Afficher le menu de droite" href="/ezpublish/index.php/site_admin/user/preferences/set/admin_right_menu_show/0">&raquo;</a>
    <div id="rightmenu-design">
        ';
$oldRestoreIncludeArray_57adf421f63d03ba8b9c41314f734c9a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_current_user_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/admin_current_user-465418ef446d3a2f8839b758123d7208.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_current_user.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/admin_current_user-465418ef446d3a2f8839b758123d7208.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_current_user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_57adf421f63d03ba8b9c41314f734c9a;

$oldRestoreIncludeArray_86f682876ec16619732ee33efbca1cea = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_bookmarks_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/admin_bookmarks-e272057afcff10a305781a90d38cf4fc.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_bookmarks.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/admin_bookmarks-e272057afcff10a305781a90d38cf4fc.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_bookmarks.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_86f682876ec16619732ee33efbca1cea;

$text .= '        ';
$oldRestoreIncludeArray_0d348db589a8f262554bf51d3a2503a1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_clear_cache_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/admin_clear_cache-6e105ee714b24456c0cd3a41110f72ae.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_clear_cache.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/admin_clear_cache-6e105ee714b24456c0cd3a41110f72ae.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_clear_cache.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_0d348db589a8f262554bf51d3a2503a1;

$oldRestoreIncludeArray_5e5e8c0651813a0585928c2644d2eb9c = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_quick_settings_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/admin_quick_settings-35f5f0ddccffa10e14eacd89360d16a3.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_quick_settings.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/admin_quick_settings-35f5f0ddccffa10e14eacd89360d16a3.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_quick_settings.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_5e5e8c0651813a0585928c2644d2eb9c;

$text .= '    </div>
    <script type="text/javascript">
    

    YUI(YUI3_config).use(\'ezcollapsiblemenu\', \'event\', \'io-ez\', function (Y) {

        Y.on(\'domready\', function () {
            var rightmenu = new Y.eZ.CollapsibleMenu({
                link: \'#rightmenu-showhide\',
                content: [\'&raquo;\', \'&laquo;\'],
                collapsed: 0,
                elements:[{
                    selector: \'#rightmenu\',
                    duration: 0.4,
                    fullStyle: {width: \'181px\'},
                    collapsedStyle: {width: \'18px\'}
                },{
                    selector: \'#maincolumn\',
                    duration: 0.4,
                    fullStyle: {marginRight: \'180px\'},
                    collapsedStyle: {marginRight: \'17px\'}
                }],
                callback: function () {
                    var p = 1;
                    if ( this.conf.collapsed )
                        p = 0;
                    Y.io.ez.setPreference(\'admin_right_menu_show\', p);
                }
            });
        });
    });

    
    </script>';
}
unset( $if_cond );
// if ends

$text .= '</div>


<div id="maincolumn">

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "126_0_126_161_design/admin2/templates/pagelayout.tpl", "site_admin" );

list($cacheHandler_55be0267f21530fc8551966717ff7142, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '
<div id="path">
<div id="path-design">
    ';
$oldRestoreIncludeArray_70bf90298cad30ebec7a0fd6d12215a9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_toppath-9c7535eea079e0ebd1cc65f0ced1c2cf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_toppath.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_toppath-9c7535eea079e0ebd1cc65f0ced1c2cf.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_toppath.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_70bf90298cad30ebec7a0fd6d12215a9;

$text .= '</div>
</div>

<hr class="hide" />

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
}
else
{
$text .= '    ';
$oldRestoreIncludeArray_02202cbe7e829accc0e2d05ecdaff163 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_leftmenu-abdc3eaa08ceb2c2aa72e067b184815e.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_leftmenu.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_leftmenu-abdc3eaa08ceb2c2aa72e067b184815e.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_leftmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_02202cbe7e829accc0e2d05ecdaff163;

}
unset( $if_cond );
// if ends

$cachedText = $text;
$cacheHandler_55be0267f21530fc8551966717ff7142->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_55be0267f21530fc8551966717ff7142 );
}

$text .= '

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_f30c2e2226a5c11b5f26fce62733b1b8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_mainarea-721f3783cf268f4eedaac15d2fa568ff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_mainarea.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_mainarea-721f3783cf268f4eedaac15d2fa568ff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_f30c2e2226a5c11b5f26fce62733b1b8;

}
else
{
$text .= '    <div id="maincontent">
    <div id="maincontent-design" class="float-break"><div id="fix">
    <!-- Maincontent START -->
    ';
$oldRestoreIncludeArray_3dfc090e32bb05f19515a49940528b99 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_mainarea-721f3783cf268f4eedaac15d2fa568ff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_mainarea.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_mainarea-721f3783cf268f4eedaac15d2fa568ff.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_3dfc090e32bb05f19515a49940528b99;

$text .= '    <!-- Maincontent END -->
    </div>
    <div class="break"></div>
    </div></div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>


<div class="break"></div>
</div><!-- div id="columns" -->

<hr class="hide" />

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
$cacheKeys = array( $cacheKeys1 );unset( $cacheKeys1 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
$cacheKeys = array( $cacheKeys, "167_0_167_60_design/admin2/templates/pagelayout.tpl", "site_admin" );

list($cacheHandler_c3c40d995d916d4a4ed46470f59969cf, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '<div id="footer" class="float-break">
<div id="footer-design">
    ';
$oldRestoreIncludeArray_10387dc7653ff21dd8977255953d64fb = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/page_copyright-2dbf347df1b5a1cbbbff15131fbf9462.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_copyright.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/page_copyright-2dbf347df1b5a1cbbbff15131fbf9462.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/page_copyright.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_10387dc7653ff21dd8977255953d64fb;

$text .= '</div>
</div>

<div class="break"></div>

';
$oldRestoreIncludeArray_96946c9ee3df65ad5b19e2e3a0da76de = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/plain_site/cache/template/compiled/popup_menu-49c1f2c5ebec92b9da54beeeab3c4e55.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/popupmenu/popup_menu.tpl' );
include( '' . 'var/plain_site/cache/template/compiled/popup_menu-49c1f2c5ebec92b9da54beeeab3c4e55.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/popupmenu/popup_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_96946c9ee3df65ad5b19e2e3a0da76de;

$cachedText = $text;
$cacheHandler_c3c40d995d916d4a4ed46470f59969cf->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_c3c40d995d916d4a4ed46470f59969cf );
}

$text .= '
<script type="text/javascript">
document.getElementById(\'header-usermenu-logout\').innerHTML += \'<span class="header-usermenu-name">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'login' );
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

$text .= '<\\/span>\';


(function( $ )
{
    var searchtext = document.getElementById(\'searchtext\');
    if ( !searchtext || searchtext.disabled )
        return;

    jQuery( searchtext ).val( searchtext.title
    ).addClass(\'passive\'
    ).focus(function(){
        if ( this.value === this.title )
        {
            jQuery( this ).removeClass(\'passive\').val(\'\');
        }
    }).blur(function(){
        if ( this.value === \'\' )
        {
            jQuery( this ).addClass(\'passive\').val( this.title );
        }
    });
})( jQuery );

</script>


<!--DEBUG_REPORT-->
</div><!-- div id="page" -->


<div id="overlay-mask" style="display:none;"></div>
<img src="/ezpublish/design/admin2/images/2/loader.gif" id="ajaxuploader-loader" style="display:none;" alt="Chargement ..." />


</body>
</html>
';

$setArray = $oldSetArray_b7be237c7529d9441ac12f56e21c4aef;
$tpl->Level--;
?>
