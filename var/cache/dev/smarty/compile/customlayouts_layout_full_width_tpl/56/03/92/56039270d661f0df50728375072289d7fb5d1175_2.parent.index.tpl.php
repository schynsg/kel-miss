<?php
/* Smarty version 3.1.43, created on 2022-11-02 14:39:22
  from 'parent:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6362730a58ba59_12997170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56039270d661f0df50728375072289d7fb5d1175' => 
    array (
      0 => 'parent:index.tpl',
      1 => 1667383725,
      2 => 'parent',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6362730a58ba59_12997170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl -->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12295761506362730a56fe33_05349810', 'page_content_container');
?>

<!-- end C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18549807306362730a572e01_32640042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14855167516362730a57a660_63478343 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_4038230406362730a577826_02201597 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14855167516362730a57a660_63478343', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12295761506362730a56fe33_05349810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_12295761506362730a56fe33_05349810',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18549807306362730a572e01_32640042',
  ),
  'page_content' => 
  array (
    0 => 'Block_4038230406362730a577826_02201597',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14855167516362730a57a660_63478343',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18549807306362730a572e01_32640042', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4038230406362730a577826_02201597', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
