<?php
/* Smarty version 3.1.43, created on 2022-11-04 14:42:20
  from 'C:\wamp64\www\kelmiss-prestashop\admin782inhb6f\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_636516bc0a0836_82034689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e8acc6988fb9572b6706dce65d33ee472dc62e' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\admin782inhb6f\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1667383722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636516bc0a0836_82034689 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
