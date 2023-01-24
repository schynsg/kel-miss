<?php
/* Smarty version 3.1.43, created on 2023-01-24 21:18:25
  from 'parent:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63d03d1134a399_62416419',
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
function content_63d03d1134a399_62416419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl -->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149032844563d03d113422b7_12488836', 'page_content_container');
?>

<!-- end C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8973071163d03d11343425_80241455 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_147984758663d03d113460f8_71362236 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_180374455863d03d11344ea5_07589084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147984758663d03d113460f8_71362236', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_149032844563d03d113422b7_12488836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_149032844563d03d113422b7_12488836',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8973071163d03d11343425_80241455',
  ),
  'page_content' => 
  array (
    0 => 'Block_180374455863d03d11344ea5_07589084',
  ),
  'hook_home' => 
  array (
    0 => 'Block_147984758663d03d113460f8_71362236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8973071163d03d11343425_80241455', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180374455863d03d11344ea5_07589084', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
