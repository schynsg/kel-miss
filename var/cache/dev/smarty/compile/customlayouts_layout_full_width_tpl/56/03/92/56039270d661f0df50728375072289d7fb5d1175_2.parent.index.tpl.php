<?php
/* Smarty version 3.1.43, created on 2023-01-25 22:07:39
  from 'parent:index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63d19a1b294962_53475981',
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
function content_63d19a1b294962_53475981 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl -->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170655036663d19a1b27d190_58084785', 'page_content_container');
?>

<!-- end C:\wamp64\www\kelmiss-prestashop/themes/classic/templates/index.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_186842251363d19a1b27fdd2_38769087 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_127679403963d19a1b2866a5_19227767 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_103824592063d19a1b2836c1_31142754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127679403963d19a1b2866a5_19227767', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_170655036663d19a1b27d190_58084785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_170655036663d19a1b27d190_58084785',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_186842251363d19a1b27fdd2_38769087',
  ),
  'page_content' => 
  array (
    0 => 'Block_103824592063d19a1b2836c1_31142754',
  ),
  'hook_home' => 
  array (
    0 => 'Block_127679403963d19a1b2866a5_19227767',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186842251363d19a1b27fdd2_38769087', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103824592063d19a1b2836c1_31142754', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
