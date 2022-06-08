<?php
/* Smarty version 3.1.43, created on 2022-06-08 18:31:26
  from '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62a0c0ce837b56_48973816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f425cf3b166eb57c2de7c22584d489ce1b790e9b' => 
    array (
      0 => '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1654582947,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62a0c0ce837b56_48973816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/vhosts/prestadev.soliduskodas.lt/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/f4/25/cf/f425cf3b166eb57c2de7c22584d489ce1b790e9b_2.file.helpers.tpl.php',
    'uid' => 'f425cf3b166eb57c2de7c22584d489ce1b790e9b',
    'call_name' => 'smarty_template_function_renderLogo_134623147462a0c0ce832383_36085523',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_134623147462a0c0ce832383_36085523 */
if (!function_exists('smarty_template_function_renderLogo_134623147462a0c0ce832383_36085523')) {
function smarty_template_function_renderLogo_134623147462a0c0ce832383_36085523(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_134623147462a0c0ce832383_36085523 */
}
