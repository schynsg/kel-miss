<?php
/* Smarty version 3.1.43, created on 2023-01-25 22:07:39
  from 'C:\wamp64\www\kelmiss-prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63d19a1b546df0_15799571',
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
function content_63d19a1b546df0_15799571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\kelmiss-prestashop\\var\\cache\\dev\\smarty\\compile\\customlayouts_layout_full_width_tpl\\07\\f8\\5d\\07f85dc867edcad170c02dece1c3bd563b1d4686_2.file.helpers.tpl.php',
    'uid' => '07f85dc867edcad170c02dece1c3bd563b1d4686',
    'call_name' => 'smarty_template_function_renderLogo_1084155863d19a1b50c818_89879660',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1084155863d19a1b50c818_89879660 */
if (!function_exists('smarty_template_function_renderLogo_1084155863d19a1b50c818_89879660')) {
function smarty_template_function_renderLogo_1084155863d19a1b50c818_89879660(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_1084155863d19a1b50c818_89879660 */
}
