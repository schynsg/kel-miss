<?php
/* Smarty version 3.1.43, created on 2023-02-20 22:03:19
  from 'C:\wamp64\www\kelmiss-prestashop\themes\custom\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_63f3e017686195_82302655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3fac0d014532439434731fed062c1274097f018' => 
    array (
      0 => 'C:\\wamp64\\www\\kelmiss-prestashop\\themes\\custom\\templates\\index.tpl',
      1 => 1676926984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f3e017686195_82302655 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145921247863f3e01765b854_17028104', 'hook_home');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'parent:index.tpl');
}
/* {block 'hook_home'} */
class Block_145921247863f3e01765b854_17028104 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_home' => 
  array (
    0 => 'Block_145921247863f3e01765b854_17028104',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayHome'),$_smarty_tpl ) );?>

    <div class="extras">
        <h2 class="hidden">Nos extras</h2>
        <ul>
            <li>
                <div>
                    <!--<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
returns.svg" alt="Retours" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Retours</span> sous 10 jours</h3>
                </div>
            </li>
            <li>
                <div>
                   <!--<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
delivery.svg" alt="Livraisons" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Livraisons</span> par Bpost</h3>
                </div>
            </li>
            <li>
                <div>
                    <!--<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
drive-in.svg" alt="Retraits" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Retraits</span> en magasin</h3>
                </div>
            </li>
            <li>
                <div>
                    <!--<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
secure.svg" alt="Paiements sécurisés" height="120" width="150">-->
                    <h3 class="color"><span class="h3_title">Paiements</span> sécurisés</h3>
                </div>
            </li>
        </ul>
    </div>
    <div class="intro">
        <div class="intro_images"
             data-aos="fade-right"
             data-aos-delay="50"
             data-aos-duration="1000">
            <div class="intro_first-image">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
kel-miss-aline-2.jpg" alt="Kel'miss, notre magasin à La Calamine" height="400" width="500">
            </div>
            <div class="intro_back-image"></div>
            <div class="intro_second-image">
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
kel-miss-aline.jpg" alt="Bienvenue chez Kelmiss à La Calamine" height="500" width="375">
            </div>
        </div>
        <div class="intro__content"
             data-aos="fade-left"
             data-aos-delay="50"
             data-aos-duration="1000">
            <h2>KEL'MISS, votre <span class="color">magasin de prêt-à-porter</span> dans votre région</h2>
            <div>
                <p>Depuis début d'année 2020, le centre esthétique de Kel'Miss s'est agrandi et vous propose depuis cela son magasin de prêt-à-porter à <b>La Calamine</b>. Ce magasin vous propose des <b>vêtements, chaussures et accessoires</b> pour toutes les tailles et pour tous les goûts.</p>
                <p>Pour pouvoir faire votre shopping chez Kel'Miss sans sortir de chez vous, nous avons le plaisir de vous accueillir sur notre <b>boutique en ligne</b>.</p>
            </div>
            <a href="http://localhost/kelmiss-prestashop/fr/3-vetements" class="cta cta_first-color cta_hover"  title="Découvrir nos vêtements">Découvrir nos vétements</a>
        </div>
    </div>
<?php
}
}
/* {/block 'hook_home'} */
}
