<?php
/* Smarty version 3.1.43, created on 2022-11-04 14:42:20
  from 'C:\wamp64\www\kelmiss-prestashop\admin782inhb6f\themes\default\template\helpers\tree\tree_toolbar_link.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636516bc076570_60042076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23a568af3cbe8751f5115632d776a5d2142041bd' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\admin782inhb6f\\themes\\default\\template\\helpers\\tree\\tree_toolbar_link.tpl',
      1 => 1667383722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636516bc076570_60042076 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if ((isset($_smarty_tpl->tpl_vars['action']->value))) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['id']->value))) {?> id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
"<?php }?> class="btn btn-default">
	<?php if ((isset($_smarty_tpl->tpl_vars['icon_class']->value))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl ) );?>

</a>
<?php }
}
