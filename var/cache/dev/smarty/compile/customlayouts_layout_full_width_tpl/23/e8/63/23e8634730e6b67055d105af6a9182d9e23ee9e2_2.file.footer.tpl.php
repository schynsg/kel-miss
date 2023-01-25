<?php
/* Smarty version 3.1.43, created on 2023-01-25 22:07:40
  from 'C:\wamp64\www\kelmiss-prestashop\themes\custom\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63d19a1c644678_98511371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e8634730e6b67055d105af6a9182d9e23ee9e2' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\themes\\custom\\templates\\_partials\\footer.tpl',
      1 => 1667578167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d19a1c644678_98511371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144185631463d19a1c62cc85_53145662', 'hook_footer_before');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51173914063d19a1c62fd68_52471640', 'hook_footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201281482863d19a1c63c466_93789276', 'hook_footer_after');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176249584063d19a1c640c11_47203444', 'copyright_link');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:_partials/footer.tpl');
}
/* {block 'hook_footer_before'} */
class Block_144185631463d19a1c62cc85_53145662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_144185631463d19a1c62cc85_53145662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_51173914063d19a1c62fd68_52471640 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_51173914063d19a1c62fd68_52471640',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer>
        <div>
            <div class="footer_left">
                <h2 class="hidden">Nos coordonées</h2>
                <a href="http://localhost/kelmiss-prestashop/fr/" title="Home">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
kelmiss-logo.svg" alt="Kel'miss beauty and fashion" width="370" height="120">
                </a>
                <p>Rue Haute 8, 4720 La Calamine</p>
                <ul class="contact_links">
                    <li>
                        <a href="0032475970005" title="Nous téléphoner" itemprop="telephone">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
phone.svg" alt="Téléphone" height="40" width="40">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/KelMissBeauty/" title="Notre page Facebook">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
facebook.svg" alt="Facebook" height="40" width="40">
                        </a>
                    </li>
                    <li>
                        <a href="mailto:aline.geelen@yahoo.fr" title="Nous contacter par mail">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
mail.svg" alt="Mail" height="40" width="40">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer_right">
                <h2>Horaire</h2>
                <p itemprop="openingHours">Ouvert tous les jours</p>
            </div>
            <div class="footer_bottom">
                <p class="copyright"><span itemprop="name">KEL'MISS</span> | Copyright 2021 | <a href="http://localhost/kelmiss-prestashop/fr/content/2-mentions-legales" title="Nos mentions légales" target="_blank">Mentions légales</a></p>
                <p class="created-by">Créé par <a href="http://www.goran-schyns.com/" title="Site web de Goran Schyns">Goran Schyns</a></p>
            </div>
        </div>
    </footer>
<?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_201281482863d19a1c63c466_93789276 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_201281482863d19a1c63c466_93789276',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_176249584063d19a1c640c11_47203444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_176249584063d19a1c640c11_47203444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<span  itemprop="name">KEL'MISS</span> | Copyright 2021 | <a href="http://localhost/kelmiss-prestashop/fr/content/2-mentions-legales" title="Nos mentions légales" target="_blank">Mentions légales</a> <span class="created_by">Créé par <a href="http://www.goran-schyns.com/" title="Site web de Goran Schyns">Goran Schyns</a></span>
<?php
}
}
/* {/block 'copyright_link'} */
}
