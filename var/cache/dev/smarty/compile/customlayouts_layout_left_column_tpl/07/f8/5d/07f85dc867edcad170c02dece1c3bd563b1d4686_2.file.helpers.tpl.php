<?php
/* Smarty version 3.1.43, created on 2022-11-02 14:37:58
  from 'C:\wamp64\www\kelmiss-prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636272b6ad5943_86050582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07f85dc867edcad170c02dece1c3bd563b1d4686' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1667383725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636272b6ad5943_86050582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\kelmiss-prestashop\\var\\cache\\dev\\smarty\\compile\\customlayouts_layout_left_column_tpl\\07\\f8\\5d\\07f85dc867edcad170c02dece1c3bd563b1d4686_2.file.helpers.tpl.php',
    'uid' => '07f85dc867edcad170c02dece1c3bd563b1d4686',
    'call_name' => 'smarty_template_function_renderLogo_1483053712636272b6aafdc3_43522097',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1483053712636272b6aafdc3_43522097 */
if (!function_exists('smarty_template_function_renderLogo_1483053712636272b6aafdc3_43522097')) {
function smarty_template_function_renderLogo_1483053712636272b6aafdc3_43522097(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1483053712636272b6aafdc3_43522097 */
}