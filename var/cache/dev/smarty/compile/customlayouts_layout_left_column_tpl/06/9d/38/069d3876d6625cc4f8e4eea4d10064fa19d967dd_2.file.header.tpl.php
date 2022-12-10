<?php
/* Smarty version 3.1.43, created on 2022-11-28 20:35:15
  from 'C:\wamp64\www\kelmiss-prestashop\themes\custom\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63850d7351e564_44606055',
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
function content_63850d7351e564_44606055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31786150263850d734edcf9_13878568', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82583334063850d735186b7_17124110', 'header_top');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:_partials/header.tpl');
}
/* {block 'header_nav'} */
class Block_31786150263850d734edcf9_13878568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_31786150263850d734edcf9_13878568',
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
class Block_82583334063850d735186b7_17124110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_82583334063850d735186b7_17124110',
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
