<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__fd4da52c642f08df666aed365c341d02268c5d570057962b13197afab3eb9584 */
class __TwigTemplate_78cf37e1266ea3c0cee602da3c869ffa9ddc9e18776ff5706be4ae013ee09339 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__fd4da52c642f08df666aed365c341d02268c5d570057962b13197afab3eb9584"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__fd4da52c642f08df666aed365c341d02268c5d570057962b13197afab3eb9584"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/kelmiss-prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/kelmiss-prestashop/img/app_icon.png\" />

<title>Performances • Kel'Miss</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'BE';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'd399ec5d39239f54e81a8b40ca48364a';
    var token_admin_orders = tokenAdminOrders = '0ecd92850c2a167acf311798e16b5296';
    var token_admin_customers = 'c8ba6eb0baedc12adfcc4c2d10195a84';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'aa742709bcb46e957f295aaaa7a3a3c1';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '1a0a8a8c67e9db6b470276ef59357b92';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/catalog/recommended?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk';
    var admin_notification_get_link = '/kelm";
        // line 42
        echo "iss-prestashop/admin782inhb6f/index.php/common/notifications?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk';
    var admin_notification_push_link = adminNotificationPushLink = '/kelmiss-prestashop/admin782inhb6f/index.php/common/notifications/ack?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/admin782inhb6f/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/kelmiss-prestashop\\/admin782inhb6f\\/\";
var baseDir = \"\\/kelmiss-prestashop\\/\";
var changeFormLanguageUrl = \"\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[";
        // line 63
        echo "\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/kel";
        // line 82
        echo "miss-prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/kelmiss-prestashop/admin782inhb6f/index.php/common/notifications?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php?controller=AdminGamification&token=9bf751dc25b15b656731a6a66257d21f\";
            var current_id_tab = 105;
        </script>

";
        // line 103
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminperformance\"
  data-base-url=\"/kelmiss-prestashop/admin782inhb6f/index.php\"  data-token=\"SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminOrders&amp;token=0ecd92850c2a167acf311798e16b5296\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20aa53b264630a980ef978e7921542eb\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5c99c520a89659f307e01faa9ad";
        // line 137
        echo "cea50\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products/new?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/categories/new?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"25\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminQuickAccesses&token=91df743378bb6e672117bc008a08e199\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminQuickAccesses&token=91df743378bb6e672117bc008a08e199\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminSearch&amp;token=fd1fab5809d657670412e756424ec7d6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_se";
        // line 176
        echo "arch_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
  ";
        // line 192
        echo "      <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
             href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/kelmiss-prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notif";
        // line 234
        echo "ications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=68296b26e5e031b9170f22991010ae06\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <";
        // line 285
        echo "div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu";
        // line 335
        echo "-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/kelmiss-prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Goran</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/1/edit?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"drop";
        // line 353
        echo "down-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminLogin&amp;logout=1&amp;token=da60cad26cecb8b1307b16d62cbc18c4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/toggle-navigation?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commande";
        // line 398
        echo "s
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/invoices/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/credit-slips/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Avoirs
                                </a>
                              </li>

                  ";
        // line 429
        echo "                                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/delivery-slips/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarts&amp;token=68296b26e5e031b9170f22991010ae06\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            ";
        // line 459
        echo "</i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/categories?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/monitoring/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParen";
        // line 489
        echo "tAttributesGroups\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminAttributesGroups&amp;token=781eba47aa2d9f305c55bf776530044b\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/brands/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/attachments/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCartRules&amp;token=5c99c520a89659f307e01faa9adcea50\" class=\"link\"> Réductions
                                </a>
                              </li>

                                  ";
        // line 518
        echo "                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/stocks/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customers/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customers/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" c";
        // line 547
        echo "lass=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/addresses/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCustomerThreads&amp;token=aa742709bcb46e957f295aaaa7a3a3c1\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submen";
        // line 579
        echo "u=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCustomerThreads&amp;token=aa742709bcb46e957f295aaaa7a3a3c1\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customer-service/order-messages/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminReturn&amp;token=5cd1c04a6d4dcfa69bfd3d25697b7a5e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminStats&amp;token=20aa53b264630a980ef978e7921542eb\" class=\"link\">
                      <i class=\"material-icons mi";
        // line 608
        echo "-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/";
        // line 646
        echo "kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/catalog?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\"";
        // line 674
        echo ">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes-catalog/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/mail_theme/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/im";
        // line 703
        echo "prove/design/cms-pages/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/modules/positions/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminImages&amp;token=c080bc9f5fc4dbd087679f526717a217\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/modules/link-widget/list?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                ";
        // line 734
        echo "  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarriers&amp;token=05aea06530465f58d9b7ac4abea45e44\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarriers&amp;token=05aea06530465f58d9b7ac4abea45e44\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/shipping/preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Préférences
                                </a>
                              </li>

     ";
        // line 764
        echo "                                                                         </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/payment/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/payment/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improv";
        // line 793
        echo "e/payment/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/localization/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/localization/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
 ";
        // line 825
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/zones/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/taxes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/translations/settings?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                 ";
        // line 860
        echo "                     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/preferences/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/preferences/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/order-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Commandes
                                </a>
                              </li";
        // line 887
        echo ">

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/product-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/customer-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/contacts/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/kelmiss-prestashop/admi";
        // line 917
        echo "n782inhb6f/index.php/configure/shop/seo-urls/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminSearchConf&amp;token=d7509adc0b5f9f2193bdf9244cfb964b\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminGamification&amp;token=9bf751dc25b15b656731a6a66257d21f\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/system-information/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-sett";
        // line 945
        echo "ings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/system-information/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index";
        // line 974
        echo ".php/configure/advanced/administration/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/emails/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/import/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 1005
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/sql-requests/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/logs/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/webservice-keys/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/feature-flags/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa";
        // line 1030
        echo "9wAw_4wbl3ffHk\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/clear-cache?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"                  title=\"Vider le cache\" ";
        // line 1089
        echo "               >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/clear-cache?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252";
        // line 1129
        echo "Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Bienvenue chez vous !<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Bonjour ! ";
        // line 1181
        echo "Je m'appelle Preston et je suis l\\u00e0 pour vous pr\\u00e9senter l'interface.<\\/p>\\n    <p>Vous d\\u00e9couvrirez les quelques \\u00e9tapes essentielles avant de lancer votre boutique :\\n    ajouter votre premier produit, personnaliser votre boutique, param\\u00e9trer vos transporteurs et modes de paiement...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>C'est parti !<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Plus tard<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">D\\u00e9marrer<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php?controller=AdminDashboard&token=9cfa975dc88a9f4020398b9af65a914a\"}]},{\"name\":\"product\",\"title\":\"Cr\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\u00e0 ce que vos clients aimeraient savoir \\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d'inqui\\u00e9tude, vous pourrez toujours le modifier apr\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php\\/sell\\/catalog\\/products\\/new?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\u00e9rer les options plus avanc\\u00e9es.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voul";
        echo "ez-vous le vendre ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Donnez \\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu'elle soit ?\",\"2\":\"Personnalisez votre th\\u00e8me ou choisissez parmi les nombreux mod\\u00e8les de notre catalogue de th\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php\\/improve\\/design\\/themes\\/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\u00e8mes.\",\"page\":\"\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Soyez pr\\u00eat \\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\u00eatre pay\\u00e9 par vos clients ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces modes de paiement sont d\\u00e9j\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php\\/improve\\/payment\\/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(";
        echo "0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici les m\\u00e9thodes de livraisons disponibles sur votre boutique aujourd'hui.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php?controller=AdminCarriers&token=05aea06530465f58d9b7ac4abea45e44\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">\\u00c0 vous de jouer !<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Vous avez vu l'essentiel, mais il y en a bien plus \\u00e0 d\\u00e9couvrir.<br \\/>\\n          Ces ressources vous aideront \\u00e0 aller plus loin :\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guide de d\\u00e9marrage<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Forum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-";
        echo "link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Formation<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutoriels Vid\\u00e9o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Je suis pr\\u00eat<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/kelmiss-prestashop\\/admin782inhb6f\\/index.php?controller=AdminDashboard&token=9cfa975dc88a9f4020398b9af65a914a\"}]}]}, 1, \"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminWelcome&token=d92d2b96e0b10dab2274000278334617\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <di";
        // line 1185
        echo "v class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Suivant</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1221
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=schynsg%40hotmail.com&amp;firstname=Goran&amp;lastname=Schyns&amp;website=http%3A%2F%2Flocalhost%2Fkelmiss-prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos acha";
        // line 1267
        echo "ts.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=schynsg%40hotmail.com&amp;firstname=Goran&amp;lastname=Schyns&amp;website=http%3A%2F%2Flocalhost%2Fkelmiss-prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class";
        // line 1308
        echo "=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1329
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1221
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1329
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__fd4da52c642f08df666aed365c341d02268c5d570057962b13197afab3eb9584";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1578 => 1329,  1513 => 1221,  1480 => 103,  1465 => 1329,  1442 => 1308,  1399 => 1267,  1347 => 1221,  1309 => 1185,  1300 => 1181,  1246 => 1129,  1204 => 1089,  1143 => 1030,  1116 => 1005,  1083 => 974,  1052 => 945,  1022 => 917,  990 => 887,  961 => 860,  924 => 825,  890 => 793,  859 => 764,  827 => 734,  794 => 703,  763 => 674,  733 => 646,  693 => 608,  662 => 579,  628 => 547,  597 => 518,  566 => 489,  534 => 459,  502 => 429,  469 => 398,  422 => 353,  402 => 335,  350 => 285,  297 => 234,  253 => 192,  235 => 176,  194 => 137,  155 => 103,  132 => 82,  111 => 63,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/kelmiss-prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/kelmiss-prestashop/img/app_icon.png\" />

<title>Performances • Kel\\'Miss</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminPerformance\\';
    var iso_user = \\'fr\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'fr\\';
    var full_cldr_language_code = \\'fr-FR\\';
    var country_iso_code = \\'BE\\';
    var _PS_VERSION_ = \\'1.7.8.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'Une nouvelle commande a été passée sur votre boutique.\\';
    var order_number_msg = \\'Numéro de commande : \\';
    var total_msg = \\'Total : \\';
    var from_msg = \\'Du \\';
    var see_order_msg = \\'Afficher cette commande\\';
    var new_customer_msg = \\'Un nouveau client s\\\\\\'est inscrit sur votre boutique\\';
    var customer_name_msg = \\'Nom du client : \\';
    var new_msg = \\'Un nouveau message a été posté sur votre boutique.\\';
    var see_msg = \\'Lire le message\\';
    var token = \\'d399ec5d39239f54e81a8b40ca48364a\\';
    var token_admin_orders = tokenAdminOrders = \\'0ecd92850c2a167acf311798e16b5296\\';
    var token_admin_customers = \\'c8ba6eb0baedc12adfcc4c2d10195a84\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'aa742709bcb46e957f295aaaa7a3a3c1\\';
    var currentIndex = \\'index.php?controller=AdminPerformance\\';
    var employee_token = \\'1a0a8a8c67e9db6b470276ef59357b92\\';
    var choose_language_translate = \\'Choisissez la langue :\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/catalog/recommended?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\\';
    var admin_notification_get_link = \\'/kelm' | raw }}{{ 'iss-prestashop/admin782inhb6f/index.php/common/notifications?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/kelmiss-prestashop/admin782inhb6f/index.php/common/notifications/ack?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Mise à jour réussie\\';
    var errorLogin = \\'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.\\';
    var search_product_msg = \\'Rechercher un produit\\';
  </script>

      <link href=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/admin782inhb6f/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/kelmiss-prestashop/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/\";
var baseDir = \"\\\\/kelmiss-prestashop\\\\/\";
var changeFormLanguageUrl = \"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[' | raw }}{{ '\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/kel' | raw }}{{ 'miss-prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/kelmiss-prestashop/modules/welcome/public/module.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/kelmiss-prestashop/admin782inhb6f/index.php/common/notifications?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php?controller=AdminGamification&token=9bf751dc25b15b656731a6a66257d21f\";
            var current_id_tab = 105;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-fr adminperformance\"
  data-base-url=\"/kelmiss-prestashop/admin782inhb6f/index.php\"  data-token=\"SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminOrders&amp;token=0ecd92850c2a167acf311798e16b5296\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=20aa53b264630a980ef978e7921542eb\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=5c99c520a89659f307e01faa9ad' | raw }}{{ 'cea50\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products/new?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/categories/new?token=d60fd6adb2ce161865a2baffc37c3134\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"25\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminQuickAccesses&token=91df743378bb6e672117bc008a08e199\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l\\'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminQuickAccesses&token=91df743378bb6e672117bc008a08e199\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminSearch&amp;token=fd1fab5809d657670412e756424ec7d6\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_se' | raw }}{{ 'arch_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
  ' | raw }}{{ '      <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Votre boutique est en mode de débogage.</strong></p><p class=\\'text-left\\'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n\\'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
             href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Mode debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/kelmiss-prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notif' | raw }}{{ 'ications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=68296b26e5e031b9170f22991010ae06\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s\\'y trouve peut-être !
            </p>
            <' | raw }}{{ 'div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l\\'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l\\'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu' | raw }}{{ '-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/kelmiss-prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Goran</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/1/edit?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Place de marché de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d\\'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"drop' | raw }}{{ 'down-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminLogin&amp;logout=1&amp;token=da60cad26cecb8b1307b16d62cbc18c4\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/toggle-navigation?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commande' | raw }}{{ 's
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/invoices/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/credit-slips/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Avoirs
                                </a>
                              </li>

                  ' | raw }}{{ '                                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/orders/delivery-slips/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarts&amp;token=68296b26e5e031b9170f22991010ae06\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            ' | raw }}{{ '</i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/products?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/categories?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/monitoring/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParen' | raw }}{{ 'tAttributesGroups\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminAttributesGroups&amp;token=781eba47aa2d9f305c55bf776530044b\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/catalog/brands/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/attachments/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCartRules&amp;token=5c99c520a89659f307e01faa9adcea50\" class=\"link\"> Réductions
                                </a>
                              </li>

                                  ' | raw }}{{ '                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/stocks/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customers/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customers/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" c' | raw }}{{ 'lass=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/addresses/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCustomerThreads&amp;token=aa742709bcb46e957f295aaaa7a3a3c1\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submen' | raw }}{{ 'u=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCustomerThreads&amp;token=aa742709bcb46e957f295aaaa7a3a3c1\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/sell/customer-service/order-messages/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminReturn&amp;token=5cd1c04a6d4dcfa69bfd3d25697b7a5e\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminStats&amp;token=20aa53b264630a980ef978e7921542eb\" class=\"link\">
                      <i class=\"material-icons mi' | raw }}{{ '-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/' | raw }}{{ 'kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/manage?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/modules/catalog?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catalogue de modules
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\"' | raw }}{{ '>
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminThemesCatalog\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/themes-catalog/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/mail_theme/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/im' | raw }}{{ 'prove/design/cms-pages/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/design/modules/positions/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminImages&amp;token=c080bc9f5fc4dbd087679f526717a217\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/modules/link-widget/list?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                ' | raw }}{{ '  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarriers&amp;token=05aea06530465f58d9b7ac4abea45e44\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminCarriers&amp;token=05aea06530465f58d9b7ac4abea45e44\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/shipping/preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Préférences
                                </a>
                              </li>

     ' | raw }}{{ '                                                                         </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/payment/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/payment/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improv' | raw }}{{ 'e/payment/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/localization/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/localization/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
 ' | raw }}{{ '                             <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/zones/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/taxes/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/improve/international/translations/settings?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                 ' | raw }}{{ '                     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/preferences/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/preferences/preferences?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/order-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Commandes
                                </a>
                              </li' | raw }}{{ '>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/product-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/customer-preferences/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/shop/contacts/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/kelmiss-prestashop/admi' | raw }}{{ 'n782inhb6f/index.php/configure/shop/seo-urls/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminSearchConf&amp;token=d7509adc0b5f9f2193bdf9244cfb964b\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminGamification&amp;token=9bf751dc25b15b656731a6a66257d21f\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/system-information/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\">
                      <i class=\"material-icons mi-sett' | raw }}{{ 'ings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/system-information/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index' | raw }}{{ '.php/configure/advanced/administration/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/emails/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/import/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/employees/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ' | raw }}{{ '                   <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/sql-requests/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/logs/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/webservice-keys/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/feature-flags/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa' | raw }}{{ '9wAw_4wbl3ffHk\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lancez votre boutique !
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Reprendre</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Quitter le tutoriel</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/clear-cache?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"                  title=\"Vider le cache\" ' | raw }}{{ '               >
                  <i class=\"material-icons\">delete</i>                  Vider le cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/kelmiss-prestashop/admin782inhb6f/index.php/configure/advanced/performance/clear-cache?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"              title=\"Vider le cache\"            >
              Vider le cache
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/kelmiss-prestashop/admin782inhb6f/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252' | raw }}{{ 'Ffr%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.7%2526country%253Dfr/Aide?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 45.454545454545%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 9.0909090909091%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 18.181818181818%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuer</button>
  <a class=\"onboarding-button-shut-down\">Passer le tutoriel</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"name\":\"dashboard\",\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\\\"onboarding-welcome\\\\\">\\\\n  <i class=\\\\\"material-icons onboarding-button-shut-down\\\\\">close<\\\\/i>\\\\n  <p class=\\\\\"welcome\\\\\">Bienvenue chez vous !<\\\\/p>\\\\n  <div class=\\\\\"content\\\\\">\\\\n    <p>Bonjour ! ' | raw }}{{ 'Je m\\'appelle Preston et je suis l\\\\u00e0 pour vous pr\\\\u00e9senter l\\'interface.<\\\\/p>\\\\n    <p>Vous d\\\\u00e9couvrirez les quelques \\\\u00e9tapes essentielles avant de lancer votre boutique :\\\\n    ajouter votre premier produit, personnaliser votre boutique, param\\\\u00e9trer vos transporteurs et modes de paiement...<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"started\\\\\">\\\\n    <p>C\\'est parti !<\\\\/p>\\\\n  <\\\\/div>\\\\n  <div class=\\\\\"buttons\\\\\">\\\\n    <button class=\\\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\\\">Plus tard<\\\\/button>\\\\n    <button class=\\\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\\\">D\\\\u00e9marrer<\\\\/button>\\\\n  <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php?controller=AdminDashboard&token=9cfa975dc88a9f4020398b9af65a914a\"}]},{\"name\":\"product\",\"title\":\"Cr\\\\u00e9ons votre premier produit\",\"subtitle\":{\"1\":\"Que souhaitez-vous en dire ? Pensez \\\\u00e0 ce que vos clients aimeraient savoir \\\\u00e0 propos de ce produit.\",\"2\":\"Ajoutez un contenu clair et attrayant. Pas d\\'inqui\\\\u00e9tude, vous pourrez toujours le modifier apr\\\\u00e8s !\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Donnez un nom accrocheur \\\\u00e0 votre produit.\",\"options\":[\"savepoint\"],\"page\":[\"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php\\\\/sell\\\\/catalog\\\\/products\\\\/new?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Renseignez les informations essentielles dans cet onglet. Les autres onglets vous permettront de g\\\\u00e9rer les options plus avanc\\\\u00e9es.\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Ajoutez une ou plusieurs images pour montrer votre produit sous son meilleur jour !\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Combien voul' | raw }}{{ 'ez-vous le vendre ?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\\\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Bravo ! Vous venez de cr\\\\u00e9er votre premier produit. Pas mal, non ?\",\"page\":\"index.php\\\\/sell\\\\/catalog\\\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"name\":\"theme\",\"title\":\"Donnez \\\\u00e0 votre boutique sa touche personnelle\",\"subtitle\":{\"1\":\"Qu\\'est-ce qui rend votre boutique si unique ? Comment voudriez-vous qu\\'elle soit ?\",\"2\":\"Personnalisez votre th\\\\u00e8me ou choisissez parmi les nombreux mod\\\\u00e8les de notre catalogue de th\\\\u00e8mes.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Commencez par ajouter votre propre logo ici !\",\"options\":[\"savepoint\"],\"page\":\"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php\\\\/improve\\\\/design\\\\/themes\\\\/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\"#form_shop_logos_header_logo, #form_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Si vous cherchez quelque chose de vraiment unique, consultez notre catalogue de th\\\\u00e8mes.\",\"page\":\"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php\\\\/improve\\\\/design\\\\/themes-catalog\\\\/?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"name\":\"payment\",\"title\":\"Soyez pr\\\\u00eat \\\\u00e0 recevoir des paiements\",\"subtitle\":{\"1\":\"Comment souhaitez-vous \\\\u00eatre pay\\\\u00e9 par vos clients ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Ces modes de paiement sont d\\\\u00e9j\\\\u00e0 disponibles sur votre boutique.\",\"options\":[\"savepoint\"],\"page\":\"\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php\\\\/improve\\\\/payment\\\\/payment_methods?_token=SNEX73Tuc6mhRcAuasMAQHrq5ZrLa9wAw_4wbl3ffHk\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(' | raw }}{{ '0)\",\"position\":\"right\"}]},{\"name\":\"shipping\",\"title\":\"Choisissez vos transporteurs\",\"subtitle\":{\"1\":\"Comment souhaitez-vous livrer vos produits ?\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Voici les m\\\\u00e9thodes de livraisons disponibles sur votre boutique aujourd\\'hui.\",\"options\":[\"savepoint\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php?controller=AdminCarriers&token=05aea06530465f58d9b7ac4abea45e44\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\\\"onboarding-welcome\\\\\" class=\\\\\"modal-body\\\\\">\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <button class=\\\\\"onboarding-button-next pull-right close\\\\\" type=\\\\\"button\\\\\">&times;<\\\\/button>\\\\n        <h2 class=\\\\\"text-center text-md-center\\\\\">\\\\u00c0 vous de jouer !<\\\\/h2>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"col-12\\\\\">\\\\n        <p class=\\\\\"text-center text-md-center\\\\\">\\\\n          Vous avez vu l\\'essentiel, mais il y en a bien plus \\\\u00e0 d\\\\u00e9couvrir.<br \\\\/>\\\\n          Ces ressources vous aideront \\\\u00e0 aller plus loin :\\\\n        <\\\\/p>\\\\n        <div class=\\\\\"container-fluid\\\\\">\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"http:\\\\/\\\\/doc.prestashop.com\\\\/display\\\\/PS17\\\\/Getting+Started\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"starter-guide\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Guide de d\\\\u00e9marrage<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/forums\\\\/\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"forum\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Forum<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n          <div class=\\\\\"row\\\\\">\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-' | raw }}{{ 'link\\\\\" href=\\\\\"https:\\\\/\\\\/www.prestashop.com\\\\/en\\\\/training-prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"training\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Formation<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n            <div class=\\\\\"col-md-6 text-center text-md-center link-container\\\\\">\\\\n              <a class=\\\\\"final-link\\\\\" href=\\\\\"https:\\\\/\\\\/www.youtube.com\\\\/user\\\\/prestashop\\\\\" target=\\\\\"_blank\\\\\">\\\\n                <div class=\\\\\"video-tutorial\\\\\"><\\\\/div>\\\\n                <span class=\\\\\"link\\\\\">Tutoriels Vid\\\\u00e9o<\\\\/span>\\\\n              <\\\\/a>\\\\n            <\\\\/div>\\\\n          <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n    <div class=\\\\\"modal-footer\\\\\">\\\\n        <div class=\\\\\"col-12\\\\\">\\\\n            <div class=\\\\\"text-center text-md-center\\\\\">\\\\n                <button class=\\\\\"btn btn-primary onboarding-button-next\\\\\">Je suis pr\\\\u00eat<\\\\/button>\\\\n            <\\\\/div>\\\\n        <\\\\/div>\\\\n    <\\\\/div>\\\\n<\\\\/div>\\\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\\\/\\\\/localhost\\\\/kelmiss-prestashop\\\\/admin782inhb6f\\\\/index.php?controller=AdminDashboard&token=9cfa975dc88a9f4020398b9af65a914a\"}]}]}, 1, \"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminWelcome&token=d92d2b96e0b10dab2274000278334617\", baseAdminDir);

          onBoarding.addTemplate(\\'lost\\', \\'<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Vous êtes perdu ?</p>    <p>Pour continuer, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuer</button>    </div>    <p>Pour quitter le tutoriel de façon définitive, cliquez ici :</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Quitter le tutoriel de bienvenue</button>    </div>  </div></div>\\');
          onBoarding.addTemplate(\\'popup\\', \\'<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>\\');
          onBoarding.addTemplate(\\'tooltip\\', \\'<div class=\"onboarding-tooltip\">  <di' | raw }}{{ 'v class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Étape <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Suivant</button></div>\\');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is(\\'.with-spinner\\')) {
        if (!\$(this).is(\\'.animated\\')) {
          \$(this).addClass(\\'animated\\');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n\\'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/kelmiss-prestashop/admin782inhb6f/index.php?controller=AdminDashboard&amp;token=9cfa975dc88a9f4020398b9af65a914a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=schynsg%40hotmail.com&amp;firstname=Goran&amp;lastname=Schyns&amp;website=http%3A%2F%2Flocalhost%2Fkelmiss-prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/kelmiss-prestashop/admin782inhb6f/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d\\'importer automatiquement tous vos acha' | raw }}{{ 'ts.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n\\'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=schynsg%40hotmail.com&amp;firstname=Goran&amp;lastname=Schyns&amp;website=http%3A%2F%2Flocalhost%2Fkelmiss-prestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class' | raw }}{{ '=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__fd4da52c642f08df666aed365c341d02268c5d570057962b13197afab3eb9584", "");
    }
}
