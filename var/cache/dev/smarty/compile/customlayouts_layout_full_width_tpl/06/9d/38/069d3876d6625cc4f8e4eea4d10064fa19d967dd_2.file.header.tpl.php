<?php
/* Smarty version 3.1.43, created on 2023-01-24 21:18:25
  from 'C:\wamp64\www\kelmiss-prestashop\themes\custom\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63d03d11719cf7_37002544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069d3876d6625cc4f8e4eea4d10064fa19d967dd' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\themes\\custom\\templates\\_partials\\header.tpl',
      1 => 1667742344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d03d11719cf7_37002544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20820985563d03d11700cf6_82555633', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_85930052663d03d11715be2_60358956', 'header_top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:_partials/header.tpl');
}
/* {block 'header_nav'} */
class Block_20820985563d03d11700cf6_82555633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_20820985563d03d11700cf6_82555633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-content">
	    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
          <h1>
            <a href="http://localhost/kelmiss-prestashop/fr/" title="Home" class="header-logo">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120" itemprop="logo">
            </a>
          </h1>
        <?php } else { ?>
            <a href="http://localhost/kelmiss-prestashop/fr/" title="Home">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120" itemprop="logo">
            </a>
        <?php }?>
	    <div class="header_search-form" id="searchForm">
      		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

	    </div>
	    <div class="personal_links">
      		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

	    </div>
	</div>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_85930052663d03d11715be2_60358956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_85930052663d03d11715be2_60358956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header_menu">
  		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav'),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'header_top'} */
}
