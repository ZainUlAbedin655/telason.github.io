<?php

/* __string_template__b5e084ae7544552457ed11088f58981db96e4da5073eda9869eee3a9ffa5ae4b */
class __TwigTemplate_651de4c356a8691506d9343d0ebb75d8b722dbda7b675d6cf9a04e255448e875 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0182cb44bf3239d48afc9d44dedde87e48a4df4396a1daf186a0fb8a69428c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0182cb44bf3239d48afc9d44dedde87e48a4df4396a1daf186a0fb8a69428c57->enter($__internal_0182cb44bf3239d48afc9d44dedde87e48a4df4396a1daf186a0fb8a69428c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__b5e084ae7544552457ed11088f58981db96e4da5073eda9869eee3a9ffa5ae4b"));

        $__internal_052235686697ca03258fd7d3f6212893dcb6738ba6b0d63239ce7acf212f5539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052235686697ca03258fd7d3f6212893dcb6738ba6b0d63239ce7acf212f5539->enter($__internal_052235686697ca03258fd7d3f6212893dcb6738ba6b0d63239ce7acf212f5539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__b5e084ae7544552457ed11088f58981db96e4da5073eda9869eee3a9ffa5ae4b"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Performance • Telason Backshells & Accessories</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'NZ';
    var _PS_VERSION_ = '1.7.4.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'ffe5e57e238b29919c1d9e964e94add2';
    var token_admin_orders = 'cd56dff73a0d0f07dc1f5a45dee48698';
    var token_admin_customers = '91f47179feae10ef0be0445a7ae445e3';
    var token_admin_customer_threads = '99cffe3bda8f84a0cba1cdd09d639d7d';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'd6af5646168b626a3c8bd4793712b342';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/admin590yzbdua/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin590yzbdua/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/anthemeblocks/views/css/icon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin590yzbdua/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin590yzbdua\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://www.telason.com/admin590yzbdua/index.php?controller=AdminGamification&token=993d0855c72405065d4238368e9a0b6f';
\t\t\t\tvar current_id_tab = 98;
\t\t\t</script>

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-en adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\"></a>
    <span id=\"shop_version\">1.7.4.4</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=65dbce3cfdf230b321e8b0ee2cfa0df3\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php/module/manage?token=a66b93543686aaed7b12e57307a2ab9a\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCategories&amp;addcategory&amp;token=b4dc30e556892eeef661bc23ee17b410\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php/product/new?token=a66b93543686aaed7b12e57307a2ab9a\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=73068a40d8207b2968c3c969c3a423c9\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"123\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminQuickAccesses&token=af8470c9a0f131cca32eb094dffbdeb0\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminQuickAccesses&token=af8470c9a0f131cca32eb094dffbdeb0\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin590yzbdua/index.php?controller=AdminSearch&amp;token=8572babf031433f9b3bed06744dcb171\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
           title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
           href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Debug mode</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://www.telason.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you sent any acquisition email lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              No news is good news, isn't it?
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/ahsandev.creative%40gmail.com.jpg\" />
      <span>Ahsan creative</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmployees&amp;token=d6af5646168b626a3c8bd4793712b342&amp;id_employee=3&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Your profile
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLogin&amp;token=b0c14f36b55a180bb6ff9afd72514fb7&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminInvoices&amp;token=e8102985aab8a3d7fa9fd0b146242a47\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSlip&amp;token=95c7fcd0b835a7a5a1a27caa6d96d39a\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDeliverySlip&amp;token=8fc197aca33f742540bf960d26a9d0e7\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarts&amp;token=9495082b01941b995209d36d4673533d\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin590yzbdua/index.php/product/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin590yzbdua/index.php/product/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCategories&amp;token=b4dc30e556892eeef661bc23ee17b410\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTracking&amp;token=f47c2b73408c90ca386fbfbc6632fcf8\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAttributesGroups&amp;token=824a2a460baa44abfbbdb82a126bff3c\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminManufacturers&amp;token=0494e226be2615ded6a25a7010a4ccd0\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAttachments&amp;token=cd36b1219703b09a36de8756d1478cfd\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCartRules&amp;token=73068a40d8207b2968c3c969c3a423c9\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin590yzbdua/index.php/stock/?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomers&amp;token=91f47179feae10ef0be0445a7ae445e3\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomers&amp;token=91f47179feae10ef0be0445a7ae445e3\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAddresses&amp;token=4e47535124f7e5be9fb6b3391a1843a5\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomerThreads&amp;token=99cffe3bda8f84a0cba1cdd09d639d7d\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomerThreads&amp;token=99cffe3bda8f84a0cba1cdd09d639d7d\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrderMessage&amp;token=ef9e4957ff707f7ba1fbe1b1ba29f433\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminReturn&amp;token=4bbdde57185fba00d58f3f79f999149c\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminStats&amp;token=65dbce3cfdf230b321e8b0ee2cfa0df3\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin590yzbdua/index.php/module/manage?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin590yzbdua/index.php/module/manage?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin590yzbdua/index.php/module/addons-store?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemes&amp;token=eac59d56c273518c06039b360eb4e69c\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemes&amp;token=eac59d56c273518c06039b360eb4e69c\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemesCatalog&amp;token=dac0caab397da22a41a370cfc512d7e6\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCmsContent&amp;token=afb28d791d13ec8e11923f24e7f7351f\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminModulesPositions&amp;token=a1815149cd524e61090cb920c8ed39c9\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminImages&amp;token=47c964c1c09fe842e8bd81aa3a1cb737\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLinkWidget&amp;token=ea3bb32c04297bfee40291f6cce68385\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarriers&amp;token=c27cfa4de5c4edc43c39f3c1117acb89\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarriers&amp;token=c27cfa4de5c4edc43c39f3c1117acb89\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminShipping&amp;token=9c134a3861818194e4294df9a0e40793\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPayment&amp;token=1f83d59a9f3e72fbcb31ea47a630a366\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPayment&amp;token=1f83d59a9f3e72fbcb31ea47a630a366\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPaymentPreferences&amp;token=3dd47b9abf69901965230634e82f7e4c\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLocalization&amp;token=07023db0c5caf1826b019880be0b92ee\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLocalization&amp;token=07023db0c5caf1826b019880be0b92ee\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminZones&amp;token=ba93a90e1ed53559aacaf8bc17e2ac84\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTaxes&amp;token=19ac861f80097bad5c7c2afab5983b65\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTranslations&amp;token=6e551bcbbdd4238d153c87b1d1fd4693\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"125\" id=\"subtab-AdminThemeBlocks\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemeBlocks&amp;token=2f27656888da0c17e92359b0991a8591\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    AN Theme Blocks
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin590yzbdua/index.php/configure/shop/preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrderPreferences&amp;token=f9ac4ef60698718d49661cf4bbc5d1d2\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/product_preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/customer_preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminContacts&amp;token=044c3da25fd175874bafa7bfcd62287b\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminMeta&amp;token=493211c437e227900bc56a68ae08492e\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSearchConf&amp;token=47156e3c6b5dc43e6e17a0191c686624\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminGamification&amp;token=993d0855c72405065d4238368e9a0b6f\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin590yzbdua/index.php/configure/advanced/system_information?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/system_information?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/administration?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmails&amp;token=f5898167e8f1c29e4c2ffebd422c3842\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/import?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmployees&amp;token=d6af5646168b626a3c8bd4793712b342\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminRequestSql&amp;token=74b4b6b7d4d3c895b266f5e40ce6dc39\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLogs&amp;token=8d07626562aa9a8a37d1724d83877be6\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminWebservice&amp;token=0f855fdc2e85dd7a2f8aedf5ed61b8f5\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"114\" id=\"tab-DEFAULT\">
              <span class=\"title\">More</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"122\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSelfUpgrade&amp;token=ce34b400f338c386827dfede3a4c28e0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin590yzbdua/index.php/configure/advanced/clear_cache?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Clear cache
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin590yzbdua/index.php/module/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin590yzbdua/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.4.4%2526country%253Den/Help?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin590yzbdua/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success content-tpl-content\" style=\"display: none;\"></div>



  ";
        // line 1180
        $this->displayBlock('content_header', $context, $blocks);
        // line 1181
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1182
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1183
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1184
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin590yzbdua/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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
        // line 1293
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_0182cb44bf3239d48afc9d44dedde87e48a4df4396a1daf186a0fb8a69428c57->leave($__internal_0182cb44bf3239d48afc9d44dedde87e48a4df4396a1daf186a0fb8a69428c57_prof);

        
        $__internal_052235686697ca03258fd7d3f6212893dcb6738ba6b0d63239ce7acf212f5539->leave($__internal_052235686697ca03258fd7d3f6212893dcb6738ba6b0d63239ce7acf212f5539_prof);

    }

    // line 83
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ede7e44c69b3755520a5df98bd3139a34afdc1c6055554cd7f9b93ada01cf8ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede7e44c69b3755520a5df98bd3139a34afdc1c6055554cd7f9b93ada01cf8ab->enter($__internal_ede7e44c69b3755520a5df98bd3139a34afdc1c6055554cd7f9b93ada01cf8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_713056fb9a521c9f8dd5324bba5336637ff32d0e39614b7205ad4583b55f3a14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713056fb9a521c9f8dd5324bba5336637ff32d0e39614b7205ad4583b55f3a14->enter($__internal_713056fb9a521c9f8dd5324bba5336637ff32d0e39614b7205ad4583b55f3a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_713056fb9a521c9f8dd5324bba5336637ff32d0e39614b7205ad4583b55f3a14->leave($__internal_713056fb9a521c9f8dd5324bba5336637ff32d0e39614b7205ad4583b55f3a14_prof);

        
        $__internal_ede7e44c69b3755520a5df98bd3139a34afdc1c6055554cd7f9b93ada01cf8ab->leave($__internal_ede7e44c69b3755520a5df98bd3139a34afdc1c6055554cd7f9b93ada01cf8ab_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_a064ea7820dad82d7f11931244efd96e6a022dc3c7aaa6583d21baad02580feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a064ea7820dad82d7f11931244efd96e6a022dc3c7aaa6583d21baad02580feb->enter($__internal_a064ea7820dad82d7f11931244efd96e6a022dc3c7aaa6583d21baad02580feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_13cd42b87eba49c034155b72f5a86d0df49417ddebc2bf9cf18b8c74ee9b9806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13cd42b87eba49c034155b72f5a86d0df49417ddebc2bf9cf18b8c74ee9b9806->enter($__internal_13cd42b87eba49c034155b72f5a86d0df49417ddebc2bf9cf18b8c74ee9b9806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_13cd42b87eba49c034155b72f5a86d0df49417ddebc2bf9cf18b8c74ee9b9806->leave($__internal_13cd42b87eba49c034155b72f5a86d0df49417ddebc2bf9cf18b8c74ee9b9806_prof);

        
        $__internal_a064ea7820dad82d7f11931244efd96e6a022dc3c7aaa6583d21baad02580feb->leave($__internal_a064ea7820dad82d7f11931244efd96e6a022dc3c7aaa6583d21baad02580feb_prof);

    }

    // line 1180
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_ac603fe890d0a14c6e05f7f7ad75a9dfdd982d54eaaab505db2d52a1b728184e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac603fe890d0a14c6e05f7f7ad75a9dfdd982d54eaaab505db2d52a1b728184e->enter($__internal_ac603fe890d0a14c6e05f7f7ad75a9dfdd982d54eaaab505db2d52a1b728184e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_769573fb9ce9d0b8b4b3e741c4433c9acce3b112e94659cefea6f7ee135139a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769573fb9ce9d0b8b4b3e741c4433c9acce3b112e94659cefea6f7ee135139a1->enter($__internal_769573fb9ce9d0b8b4b3e741c4433c9acce3b112e94659cefea6f7ee135139a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_769573fb9ce9d0b8b4b3e741c4433c9acce3b112e94659cefea6f7ee135139a1->leave($__internal_769573fb9ce9d0b8b4b3e741c4433c9acce3b112e94659cefea6f7ee135139a1_prof);

        
        $__internal_ac603fe890d0a14c6e05f7f7ad75a9dfdd982d54eaaab505db2d52a1b728184e->leave($__internal_ac603fe890d0a14c6e05f7f7ad75a9dfdd982d54eaaab505db2d52a1b728184e_prof);

    }

    // line 1181
    public function block_content($context, array $blocks = array())
    {
        $__internal_8e25778f0d937635fa5d878a7b641ee8c80d34f22573dde91efd591502a7a76b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e25778f0d937635fa5d878a7b641ee8c80d34f22573dde91efd591502a7a76b->enter($__internal_8e25778f0d937635fa5d878a7b641ee8c80d34f22573dde91efd591502a7a76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5fdf235d53f5f2eadebfdb7afd3018fd18f9edd01aef4a359d11300bf17802d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf235d53f5f2eadebfdb7afd3018fd18f9edd01aef4a359d11300bf17802d6->enter($__internal_5fdf235d53f5f2eadebfdb7afd3018fd18f9edd01aef4a359d11300bf17802d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_5fdf235d53f5f2eadebfdb7afd3018fd18f9edd01aef4a359d11300bf17802d6->leave($__internal_5fdf235d53f5f2eadebfdb7afd3018fd18f9edd01aef4a359d11300bf17802d6_prof);

        
        $__internal_8e25778f0d937635fa5d878a7b641ee8c80d34f22573dde91efd591502a7a76b->leave($__internal_8e25778f0d937635fa5d878a7b641ee8c80d34f22573dde91efd591502a7a76b_prof);

    }

    // line 1182
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_34519ccbb8ff0f9566afd2d348173ecc18c26e0cc9942399e4858024cf578922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34519ccbb8ff0f9566afd2d348173ecc18c26e0cc9942399e4858024cf578922->enter($__internal_34519ccbb8ff0f9566afd2d348173ecc18c26e0cc9942399e4858024cf578922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_4500c94cebbd8ceccdb8618a8b9f770e85b33505aed580db958de4b7dede5b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4500c94cebbd8ceccdb8618a8b9f770e85b33505aed580db958de4b7dede5b25->enter($__internal_4500c94cebbd8ceccdb8618a8b9f770e85b33505aed580db958de4b7dede5b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_4500c94cebbd8ceccdb8618a8b9f770e85b33505aed580db958de4b7dede5b25->leave($__internal_4500c94cebbd8ceccdb8618a8b9f770e85b33505aed580db958de4b7dede5b25_prof);

        
        $__internal_34519ccbb8ff0f9566afd2d348173ecc18c26e0cc9942399e4858024cf578922->leave($__internal_34519ccbb8ff0f9566afd2d348173ecc18c26e0cc9942399e4858024cf578922_prof);

    }

    // line 1183
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_e203bfcebcc40a6ea7eb48c292b68fbf635a92eabac1ccb146508927ef3e5b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e203bfcebcc40a6ea7eb48c292b68fbf635a92eabac1ccb146508927ef3e5b95->enter($__internal_e203bfcebcc40a6ea7eb48c292b68fbf635a92eabac1ccb146508927ef3e5b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_b80264a4ba7bf9e480d40affce377844e9707866417e5577e9537aab3e4f4dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80264a4ba7bf9e480d40affce377844e9707866417e5577e9537aab3e4f4dc9->enter($__internal_b80264a4ba7bf9e480d40affce377844e9707866417e5577e9537aab3e4f4dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_b80264a4ba7bf9e480d40affce377844e9707866417e5577e9537aab3e4f4dc9->leave($__internal_b80264a4ba7bf9e480d40affce377844e9707866417e5577e9537aab3e4f4dc9_prof);

        
        $__internal_e203bfcebcc40a6ea7eb48c292b68fbf635a92eabac1ccb146508927ef3e5b95->leave($__internal_e203bfcebcc40a6ea7eb48c292b68fbf635a92eabac1ccb146508927ef3e5b95_prof);

    }

    // line 1293
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9907c163b4ff7c15d39e2b58bcda7d778e7e449cada310e624cc4d8702e3633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9907c163b4ff7c15d39e2b58bcda7d778e7e449cada310e624cc4d8702e3633->enter($__internal_b9907c163b4ff7c15d39e2b58bcda7d778e7e449cada310e624cc4d8702e3633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_10e74631be3abc33a042cedfe14f0b6304c9e0a2ed7a8a7574556b4f70e1301f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e74631be3abc33a042cedfe14f0b6304c9e0a2ed7a8a7574556b4f70e1301f->enter($__internal_10e74631be3abc33a042cedfe14f0b6304c9e0a2ed7a8a7574556b4f70e1301f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10e74631be3abc33a042cedfe14f0b6304c9e0a2ed7a8a7574556b4f70e1301f->leave($__internal_10e74631be3abc33a042cedfe14f0b6304c9e0a2ed7a8a7574556b4f70e1301f_prof);

        
        $__internal_b9907c163b4ff7c15d39e2b58bcda7d778e7e449cada310e624cc4d8702e3633->leave($__internal_b9907c163b4ff7c15d39e2b58bcda7d778e7e449cada310e624cc4d8702e3633_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_d72f5226e9d5549d17fb195a9bf5d7c8338d55884060ada5ff9639f77bcbedd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72f5226e9d5549d17fb195a9bf5d7c8338d55884060ada5ff9639f77bcbedd2->enter($__internal_d72f5226e9d5549d17fb195a9bf5d7c8338d55884060ada5ff9639f77bcbedd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_c6effad4a37dab71b127a26246beab66599c8fa5c667693374e659972e981772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6effad4a37dab71b127a26246beab66599c8fa5c667693374e659972e981772->enter($__internal_c6effad4a37dab71b127a26246beab66599c8fa5c667693374e659972e981772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_c6effad4a37dab71b127a26246beab66599c8fa5c667693374e659972e981772->leave($__internal_c6effad4a37dab71b127a26246beab66599c8fa5c667693374e659972e981772_prof);

        
        $__internal_d72f5226e9d5549d17fb195a9bf5d7c8338d55884060ada5ff9639f77bcbedd2->leave($__internal_d72f5226e9d5549d17fb195a9bf5d7c8338d55884060ada5ff9639f77bcbedd2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_c348ba5c2a353fa5fdae0351784bbcce5809c30d7bbb773813ead185a2a310f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c348ba5c2a353fa5fdae0351784bbcce5809c30d7bbb773813ead185a2a310f9->enter($__internal_c348ba5c2a353fa5fdae0351784bbcce5809c30d7bbb773813ead185a2a310f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_095aadf060c6fc813e439be7b52b5c131997c2821ebb6c4a381505240179aa5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095aadf060c6fc813e439be7b52b5c131997c2821ebb6c4a381505240179aa5e->enter($__internal_095aadf060c6fc813e439be7b52b5c131997c2821ebb6c4a381505240179aa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_095aadf060c6fc813e439be7b52b5c131997c2821ebb6c4a381505240179aa5e->leave($__internal_095aadf060c6fc813e439be7b52b5c131997c2821ebb6c4a381505240179aa5e_prof);

        
        $__internal_c348ba5c2a353fa5fdae0351784bbcce5809c30d7bbb773813ead185a2a310f9->leave($__internal_c348ba5c2a353fa5fdae0351784bbcce5809c30d7bbb773813ead185a2a310f9_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__b5e084ae7544552457ed11088f58981db96e4da5073eda9869eee3a9ffa5ae4b";
    }

    public function getDebugInfo()
    {
        return array (  1456 => 1293,  1439 => 1183,  1422 => 1182,  1405 => 1181,  1388 => 1180,  1355 => 83,  1341 => 1293,  1230 => 1184,  1227 => 1183,  1224 => 1182,  1221 => 1181,  1219 => 1180,  118 => 83,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Performance • Telason Backshells & Accessories</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'NZ';
    var _PS_VERSION_ = '1.7.4.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'ffe5e57e238b29919c1d9e964e94add2';
    var token_admin_orders = 'cd56dff73a0d0f07dc1f5a45dee48698';
    var token_admin_customers = '91f47179feae10ef0be0445a7ae445e3';
    var token_admin_customer_threads = '99cffe3bda8f84a0cba1cdd09d639d7d';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = 'd6af5646168b626a3c8bd4793712b342';
    var choose_language_translate = 'Choose language';
    var default_language = '1';
    var admin_modules_link = '/admin590yzbdua/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Update successful';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = 'Search for a product';
  </script>

      <link href=\"/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin590yzbdua/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/anthemeblocks/views/css/icon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin590yzbdua/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin590yzbdua\\/\";
var baseDir = \"\\/\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":\"\\u00a4#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=1.7.4.4\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin590yzbdua/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://www.telason.com/admin590yzbdua/index.php?controller=AdminGamification&token=993d0855c72405065d4238368e9a0b6f';
\t\t\t\tvar current_id_tab = 98;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-en adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\"></a>
    <span id=\"shop_version\">1.7.4.4</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=65dbce3cfdf230b321e8b0ee2cfa0df3\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php/module/manage?token=a66b93543686aaed7b12e57307a2ab9a\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCategories&amp;addcategory&amp;token=b4dc30e556892eeef661bc23ee17b410\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php/product/new?token=a66b93543686aaed7b12e57307a2ab9a\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=73068a40d8207b2968c3c969c3a423c9\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item\"
         href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"123\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminQuickAccesses&token=af8470c9a0f131cca32eb094dffbdeb0\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminQuickAccesses&token=af8470c9a0f131cca32eb094dffbdeb0\">
      <i class=\"material-icons\">settings</i>
      Manage quick accesses
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/admin590yzbdua/index.php?controller=AdminSearch&amp;token=8572babf031433f9b3bed06744dcb171\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, SKU, reference...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, name...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice Number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
           title=\"<p class='text-left'><strong>Your shop is in debug mode.</strong></p><p class='text-left'>All the PHP errors and messages are displayed. When you no longer need it, <strong>turn off</strong> this mode.</p>\"
           href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Debug mode</span>
        </a>
      </div>
            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://www.telason.com/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      View my shop
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Customers<span id=\"_nb_new_customers_\"></span>
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
              No new order for now :(<br>
              Did you check your conversion rate lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Have you sent any acquisition email lately?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              No news is good news, isn't it?
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
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/ahsandev.creative%40gmail.com.jpg\" />
      <span>Ahsan creative</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmployees&amp;token=d6af5646168b626a3c8bd4793712b342&amp;id_employee=3&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Your profile
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLogin&amp;token=b0c14f36b55a180bb6ff9afd72514fb7&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Sell</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Orders
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrders&amp;token=cd56dff73a0d0f07dc1f5a45dee48698\" class=\"link\"> Orders
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminInvoices&amp;token=e8102985aab8a3d7fa9fd0b146242a47\" class=\"link\"> Invoices
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSlip&amp;token=95c7fcd0b835a7a5a1a27caa6d96d39a\" class=\"link\"> Credit Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDeliverySlip&amp;token=8fc197aca33f742540bf960d26a9d0e7\" class=\"link\"> Delivery Slips
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarts&amp;token=9495082b01941b995209d36d4673533d\" class=\"link\"> Shopping Carts
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/admin590yzbdua/index.php/product/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/admin590yzbdua/index.php/product/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Products
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCategories&amp;token=b4dc30e556892eeef661bc23ee17b410\" class=\"link\"> Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTracking&amp;token=f47c2b73408c90ca386fbfbc6632fcf8\" class=\"link\"> Monitoring
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAttributesGroups&amp;token=824a2a460baa44abfbbdb82a126bff3c\" class=\"link\"> Attributes &amp; Features
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminManufacturers&amp;token=0494e226be2615ded6a25a7010a4ccd0\" class=\"link\"> Brands &amp; Suppliers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAttachments&amp;token=cd36b1219703b09a36de8756d1478cfd\" class=\"link\"> Files
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCartRules&amp;token=73068a40d8207b2968c3c969c3a423c9\" class=\"link\"> Discounts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/admin590yzbdua/index.php/stock/?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomers&amp;token=91f47179feae10ef0be0445a7ae445e3\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Customers
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomers&amp;token=91f47179feae10ef0be0445a7ae445e3\" class=\"link\"> Customers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminAddresses&amp;token=4e47535124f7e5be9fb6b3391a1843a5\" class=\"link\"> Addresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomerThreads&amp;token=99cffe3bda8f84a0cba1cdd09d639d7d\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Customer Service
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCustomerThreads&amp;token=99cffe3bda8f84a0cba1cdd09d639d7d\" class=\"link\"> Customer Service
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrderMessage&amp;token=ef9e4957ff707f7ba1fbe1b1ba29f433\" class=\"link\"> Order Messages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminReturn&amp;token=4bbdde57185fba00d58f3f79f999149c\" class=\"link\"> Merchandise Returns
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminStats&amp;token=65dbce3cfdf230b321e8b0ee2cfa0df3\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Stats
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Improve</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/admin590yzbdua/index.php/module/manage?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/admin590yzbdua/index.php/module/manage?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Modules &amp; Services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"46\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/admin590yzbdua/index.php/module/addons-store?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Modules Catalog
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"47\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemes&amp;token=eac59d56c273518c06039b360eb4e69c\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-47\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminThemes\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemes&amp;token=eac59d56c273518c06039b360eb4e69c\" class=\"link\"> Theme &amp; Logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemesCatalog&amp;token=dac0caab397da22a41a370cfc512d7e6\" class=\"link\"> Theme Catalog
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"50\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCmsContent&amp;token=afb28d791d13ec8e11923f24e7f7351f\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"51\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminModulesPositions&amp;token=a1815149cd524e61090cb920c8ed39c9\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminImages\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminImages&amp;token=47c964c1c09fe842e8bd81aa3a1cb737\" class=\"link\"> Image Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLinkWidget&amp;token=ea3bb32c04297bfee40291f6cce68385\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarriers&amp;token=c27cfa4de5c4edc43c39f3c1117acb89\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Shipping
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminCarriers&amp;token=c27cfa4de5c4edc43c39f3c1117acb89\" class=\"link\"> Carriers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminShipping\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminShipping&amp;token=9c134a3861818194e4294df9a0e40793\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentPayment\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPayment&amp;token=1f83d59a9f3e72fbcb31ea47a630a366\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Payment
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminPayment\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPayment&amp;token=1f83d59a9f3e72fbcb31ea47a630a366\" class=\"link\"> Payment Methods
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminPaymentPreferences&amp;token=3dd47b9abf69901965230634e82f7e4c\" class=\"link\"> Preferences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminInternational\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLocalization&amp;token=07023db0c5caf1826b019880be0b92ee\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLocalization&amp;token=07023db0c5caf1826b019880be0b92ee\" class=\"link\"> Localization
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminZones&amp;token=ba93a90e1ed53559aacaf8bc17e2ac84\" class=\"link\"> Locations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"69\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTaxes&amp;token=19ac861f80097bad5c7c2afab5983b65\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminTranslations\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminTranslations&amp;token=6e551bcbbdd4238d153c87b1d1fd4693\" class=\"link\"> Translations
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"125\" id=\"subtab-AdminThemeBlocks\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminThemeBlocks&amp;token=2f27656888da0c17e92359b0991a8591\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    AN Theme Blocks
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"73\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configure</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"74\" id=\"subtab-ShopParameters\">
                  <a href=\"/admin590yzbdua/index.php/configure/shop/preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Shop Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-74\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> General
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminOrderPreferences&amp;token=f9ac4ef60698718d49661cf4bbc5d1d2\" class=\"link\"> Order Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/product_preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Product Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/shop/customer_preferences?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Customer Settings
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"86\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminContacts&amp;token=044c3da25fd175874bafa7bfcd62287b\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentMeta\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminMeta&amp;token=493211c437e227900bc56a68ae08492e\" class=\"link\"> Traffic &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSearchConf&amp;token=47156e3c6b5dc43e6e17a0191c686624\" class=\"link\"> Search
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"119\" id=\"subtab-AdminGamification\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminGamification&amp;token=993d0855c72405065d4238368e9a0b6f\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"96\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/admin590yzbdua/index.php/configure/advanced/system_information?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Advanced Parameters
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-96\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"97\" id=\"subtab-AdminInformation\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/system_information?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Information
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"98\" id=\"subtab-AdminPerformance\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Performance
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"99\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/administration?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminEmails\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmails&amp;token=f5898167e8f1c29e4c2ffebd422c3842\" class=\"link\"> E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminImport\">
                              <a href=\"/admin590yzbdua/index.php/configure/advanced/import?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" class=\"link\"> Import
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminEmployees&amp;token=d6af5646168b626a3c8bd4793712b342\" class=\"link\"> Team
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminRequestSql&amp;token=74b4b6b7d4d3c895b266f5e40ce6dc39\" class=\"link\"> Database
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminLogs\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminLogs&amp;token=8d07626562aa9a8a37d1724d83877be6\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"110\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminWebservice&amp;token=0f855fdc2e85dd7a2f8aedf5ed61b8f5\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"114\" id=\"tab-DEFAULT\">
              <span class=\"title\">More</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"122\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminSelfUpgrade&amp;token=ce34b400f338c386827dfede3a4c28e0\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/admin590yzbdua/index.php/configure/advanced/performance?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/admin590yzbdua/index.php/configure/advanced/clear_cache?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"                  title=\"Clear cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Clear cache
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/admin590yzbdua/index.php/module/catalog?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin590yzbdua/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fen%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.4.4%2526country%253Den/Help?_token=9h3p3i5Ud0zqBwxu0wBNqBOHou7v6jUWCLeb2icptN0\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin590yzbdua/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success content-tpl-content\" style=\"display: none;\"></div>



  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"https://www.telason.com/admin590yzbdua/index.php?controller=AdminDashboard&amp;token=ab80f3ac731c8215d271e2987047a2a4\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Back
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-EN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/admin590yzbdua/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connect your shop to PrestaShop's marketplace in order to automatically import all your Addons purchases.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Don't have an account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Discover the Power of PrestaShop Addons! Explore the PrestaShop Official Marketplace and find over 3 500 innovative modules and themes that optimize conversion rates, increase traffic, build customer loyalty and maximize your productivity</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connect to PrestaShop Addons</h4>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/en/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/en/login?email=ahsandev.creative%40gmail.com&amp;firstname=Ahsan&amp;lastname=creative&amp;website=https%3A%2F%2Fwww.telason.com%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Sign in
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

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__b5e084ae7544552457ed11088f58981db96e4da5073eda9869eee3a9ffa5ae4b", "");
    }
}
