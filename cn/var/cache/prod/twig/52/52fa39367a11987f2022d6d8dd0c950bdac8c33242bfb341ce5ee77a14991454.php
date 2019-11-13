<?php

/* __string_template__ba83b8d47628d161dbbb2786f00f0a0bbea368a82ba440e43228592e4b51fab9 */
class __TwigTemplate_af346b878950c712dd81ed98a01a1c1d8cf47e1fa77c2d776ba98c7df356aff1 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/cn/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/cn/img/app_icon.png\" />

<title>单件商品 • Deoliver</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'zh';
    var lang_is_rtl = '0';
    var full_language_code = 'zh-cn';
    var full_cldr_language_code = 'zh-Hans-CN';
    var country_iso_code = 'CN';
    var _PS_VERSION_ = '1.7.4.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = '新订单已放置于您的店铺。';
    var order_number_msg = '订单编号: ';
    var total_msg = '总计： ';
    var from_msg = '自： ';
    var see_order_msg = '查看此订单';
    var new_customer_msg = '新客户注册在您的店铺。';
    var customer_name_msg = '客户姓名: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = '阅读留言';
    var token = '356aebbc463a3ef99f39f5b2c2ff9e31';
    var token_admin_orders = 'e6ce3d8886fec73c70e32cfd2e78c3a4';
    var token_admin_customers = '736b67bdc1e2d32e0a5ae827d6e75e1c';
    var token_admin_customer_threads = 'bb35bd186f28ad08db943068c7641ad2';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '09ef462c77b9bfcb63aa7f9e5c8a33fe';
    var choose_language_translate = '选择语言：';
    var default_language = '5';
    var admin_modules_link = '/cn/backoffice/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE';
    var tab_modules_list = 'prestagiftvouchers,dmuassocprodcat,etranslation,apiway,prestashoptoquickbooks';
    var update_success_msg = '更新成功';
    var errorLogin = 'PrestaShop was unable to log in to Addons. Please check your credentials and your Internet connection.';
    var search_product_msg = '查询商品';
  </script>

      <link href=\"/cn/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cn/backoffice/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cn/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cn/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/cn/backoffice/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/cn\\/backoffice\\/\";
var baseDir = \"\\/cn\\/\";
var currency = {\"iso_code\":\"CAD\",\"sign\":\"\$\",\"name\":\"\\u52a0\\u62ff\\u5927\\u5143\",\"format\":\"\\u00a4\\u00a0#,##0.00\"};
var host_mode = false;
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/cn/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/cn/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/cn/backoffice/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/admin.js?v=1.7.4.3\"></script>
<script type=\"text/javascript\" src=\"/cn/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/tools.js?v=1.7.4.3\"></script>
<script type=\"text/javascript\" src=\"/cn/backoffice/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/cn/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/cn/backoffice/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'https://www.deoliver.com/cn/backoffice/index.php?controller=AdminGamification&token=888764acf7de9d8cee138a21ac981680';
\t\t\t\tvar current_id_tab = 10;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-zh adminproducts\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminDashboard&amp;token=cae0087431d597bfcdc8dc838aebf7c5\"></a>
    <span id=\"shop_version\">1.7.4.3</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    快速通道
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=52a0cfa63bddb812000cf037c838d6c7\"
                 data-item=\"产品评估\"
      >产品评估</a>
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php/module/manage?token=4b17617637da5eaaada0ef210a3e54fe\"
                 data-item=\"已安装的模块\"
      >已安装的模块</a>
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCategories&amp;addcategory&amp;token=ec8f0e7297c8eac836ecd8fc614cc46b\"
                 data-item=\"新分类\"
      >新分类</a>
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php/product/new?token=4b17617637da5eaaada0ef210a3e54fe\"
                 data-item=\"新商品\"
      >新商品</a>
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=e66b58fd2ded522f364a2b2d3ed1a2af\"
                 data-item=\"新的优惠券\"
      >新的优惠券</a>
          <a class=\"dropdown-item\"
         href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminOrders&amp;token=e6ce3d8886fec73c70e32cfd2e78c3a4\"
                 data-item=\"订单\"
      >订单</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"53\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/product/catalog?-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\"
        data-post-link=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminQuickAccesses&token=047eabef3a1444e926f32c590196fa43\"
        data-prompt-text=\"请命名此快捷方式\"
        data-link=\"单件商品 - 列表\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminQuickAccesses&token=047eabef3a1444e926f32c590196fa43\">
      <i class=\"material-icons\">settings</i>
      管理快速访问
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/cn/backoffice/index.php?controller=AdminSearch&amp;token=0846bbb1aee8774a3ed1f54022b7c120\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"搜寻（例如：产品参考，客户名字)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        全部
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"全部\" href=\"#\" data-value=\"0\" data-placeholder=\"您在找什么？\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> 全部</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"分类\" href=\"#\" data-value=\"1\" data-placeholder=\"商品名称，库存，编码...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> 分类</a>
        <a class=\"dropdown-item\" data-item=\"客户 名\" href=\"#\" data-value=\"2\" data-placeholder=\"电子邮箱，名称...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> 客户 名</a>
        <a class=\"dropdown-item\" data-item=\"客户 IP地址\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> 客户 依IP地址</a>
        <a class=\"dropdown-item\" data-item=\"订单\" href=\"#\" data-value=\"3\" data-placeholder=\"订单号\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> 订单</a>
        <a class=\"dropdown-item\" data-item=\"发票\" href=\"#\" data-value=\"4\" data-placeholder=\"发票编号：\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> 发票</a>
        <a class=\"dropdown-item\" data-item=\"购物车\" href=\"#\" data-value=\"5\" data-placeholder=\"信用卡号码\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> 购物车</a>
        <a class=\"dropdown-item\" data-item=\"模块\" href=\"#\" data-value=\"7\" data-placeholder=\"模块名称\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> 模块</a>
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

            <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.deoliver.com/cn/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      浏览店铺
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
              订单 #<span id=\"_nb_new_orders_\"> (</span>
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
              客户<span id=\"_nb_new_customers_\"></span>
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
              信息<span id=\"_nb_new_messages_\"><span id=\"_nb_new_messages_\">
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没新订单：（<br>
              你查看了你<strong><a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCarts&token=4a4c7aab9aaa9a2f5b2be972cf8341ff&action=filterOnlyAbandonedCarts\">放弃购物车</a></strong>了吗？<br>你的下个订单可能隐藏在哪里。
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没新客户：（<br>
              你最近发出采购邮件吗？
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              现在没有新信息<br>
              看起来你所有的顾客都很开心：）
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
      从 <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - 已注册 <strong>_date_add_</strong>
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
      <img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/admin%40deoliver.com.jpg\" />
      <span>Ruolin ZHENG</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminEmployees&amp;token=09ef462c77b9bfcb63aa7f9e5c8a33fe&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Your profile
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminLogin&amp;token=13f2dfea2a04be38135726c28cc79a88&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>登出</span>
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
            <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminDashboard&amp;token=cae0087431d597bfcdc8dc838aebf7c5\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>仪表盘</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">出售</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminOrders&amp;token=e6ce3d8886fec73c70e32cfd2e78c3a4\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    订单设置
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminOrders&amp;token=e6ce3d8886fec73c70e32cfd2e78c3a4\" class=\"link\"> 订单设置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminInvoices&amp;token=c5c51abd4ac99612e3604ac5da39b4e3\" class=\"link\"> 发票
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminSlip&amp;token=29f6959b5eb640a96e3d047f47b88e59\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminDeliverySlip&amp;token=9c89ab4925e83048e4641bec2701d3c2\" class=\"link\"> 交货单
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCarts&amp;token=4a4c7aab9aaa9a2f5b2be972cf8341ff\" class=\"link\"> 购物车
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/cn/backoffice/index.php/product/catalog?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    分类
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/cn/backoffice/index.php/product/catalog?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 单件商品
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCategories&amp;token=ec8f0e7297c8eac836ecd8fc614cc46b\" class=\"link\"> 分类
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminTracking&amp;token=09b4529e9c8e3486261d1d6d9eebd0af\" class=\"link\"> 监测
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminAttributesGroups&amp;token=f51e6a4ecf658841bbe550fe5f723370\" class=\"link\"> 属性和功能
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminManufacturers&amp;token=44756b11cd1d9033108d552883609ffc\" class=\"link\"> 品牌 &amp; 供应商
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminAttachments&amp;token=4d32e5890b2909dc45cce80ab2e78a26\" class=\"link\"> 文件
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCartRules&amp;token=e66b58fd2ded522f364a2b2d3ed1a2af\" class=\"link\"> 折扣
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/cn/backoffice/index.php/stock/?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCustomers&amp;token=736b67bdc1e2d32e0a5ae827d6e75e1c\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    客户设置
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCustomers&amp;token=736b67bdc1e2d32e0a5ae827d6e75e1c\" class=\"link\"> 客户设置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminAddresses&amp;token=8f80ff82b98e435623d848480cdf55fa\" class=\"link\"> 地址
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCustomerThreads&amp;token=bb35bd186f28ad08db943068c7641ad2\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    客户服务
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCustomerThreads&amp;token=bb35bd186f28ad08db943068c7641ad2\" class=\"link\"> 客户服务
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminOrderMessage&amp;token=40fb6f449f364f508955ff624bd37161\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminReturn&amp;token=7e993bd373184309fb24d85b52daea61\" class=\"link\"> Retours produit
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminStats&amp;token=52a0cfa63bddb812000cf037c838d6c7\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    统计信息
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">改进</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/cn/backoffice/index.php/module/manage?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    模块
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/cn/backoffice/index.php/module/manage?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 模块和服务
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/cn/backoffice/index.php/module/addons-store?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 模块目录
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminThemes&amp;token=82d47e87b380970555cd4642f612743f\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    设计
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminThemes&amp;token=82d47e87b380970555cd4642f612743f\" class=\"link\"> 主题&amp;商标
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminThemesCatalog&amp;token=c87fe6dcaa9bab839cbed3c3279c785f\" class=\"link\"> 主题分类
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCmsContent&amp;token=f39c573210b2a424a7fc9f7928f28411\" class=\"link\"> 网页
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminModulesPositions&amp;token=fd3f810876908bc2d89da4cd112c237f\" class=\"link\"> 位置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminImages&amp;token=ba9f6fbf71f41554443c8fd8e813c82f\" class=\"link\"> 图像设置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminLinkWidget&amp;token=488f922b08e75b559b3c73809266651a\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCarriers&amp;token=c221c03db91e5317ee0b9bfb37d2e475\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    配送
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminCarriers&amp;token=c221c03db91e5317ee0b9bfb37d2e475\" class=\"link\"> 货运商
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminShipping&amp;token=2af4e0cf37ce7998a630629df627e0c7\" class=\"link\"> 选项
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminPayment&amp;token=7fca92686c8c786811815379cd04e06e\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    付款
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminPayment&amp;token=7fca92686c8c786811815379cd04e06e\" class=\"link\"> 付款方法
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminPaymentPreferences&amp;token=ef403cb0052c371c59d38f20a4a2bb26\" class=\"link\"> 选项
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminLocalization&amp;token=4c1086edad1d24bd7ffb542e5ab835d0\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    国际
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminLocalization&amp;token=4c1086edad1d24bd7ffb542e5ab835d0\" class=\"link\"> 本地化
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminZones&amp;token=ee0bcd694c72852b616a132cefd46091\" class=\"link\"> 地点
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminTaxes&amp;token=6f1c1bfc31e8e3467ce7404ccae911b5\" class=\"link\"> 税
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminTranslations&amp;token=df8fc1ea4546995fcaa88bbbb8485a19\" class=\"link\"> 翻译
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">配置</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/cn/backoffice/index.php/configure/shop/preferences?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    商店的参数
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/cn/backoffice/index.php/configure/shop/preferences?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 一般
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminOrderPreferences&amp;token=192da1d774255ada2410a3a01d962d0a\" class=\"link\"> 订单设置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/cn/backoffice/index.php/configure/shop/product_preferences?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 单件商品
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/cn/backoffice/index.php/configure/shop/customer_preferences?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 客户设置
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminContacts&amp;token=c163a2b6158ad9fa7ef1e966bd9c9c8f\" class=\"link\"> 联系我们
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminMeta&amp;token=2195998266299792c44350ce6b55c8cb\" class=\"link\"> 流量&amp;SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminSearchConf&amp;token=8f20697e32faf9290ad730f70fa99a2d\" class=\"link\"> 搜索
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminGamification&amp;token=888764acf7de9d8cee138a21ac981680\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/cn/backoffice/index.php/configure/advanced/system_information?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    高级参数
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/cn/backoffice/index.php/configure/advanced/system_information?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 信息
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/cn/backoffice/index.php/configure/advanced/performance?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 性能
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/cn/backoffice/index.php/configure/advanced/administration?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 行政
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminEmails&amp;token=f7eb2e02a6760fab79c222800d1c73c3\" class=\"link\"> 邮箱
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/cn/backoffice/index.php/configure/advanced/import?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" class=\"link\"> 上传
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminEmployees&amp;token=09ef462c77b9bfcb63aa7f9e5c8a33fe\" class=\"link\"> Employees
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminRequestSql&amp;token=c9484ada2834d2f71214c14a649a1731\" class=\"link\"> 数据库
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminLogs&amp;token=f54eb93a0fc44b33b5644d0f1be467be\" class=\"link\"> 日志
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminWebservice&amp;token=9ee9318953c8de88e663d0f2e1d15cd8\" class=\"link\"> Web服务
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"127\" id=\"tab-JMS-MODULES\">
              <span class=\"title\">Jms Modules</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"128\" id=\"subtab-AdminJmsmegamenuDashboard\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsmegamenuManager&amp;token=90d6a6683b4f6917a1cbb0488e4caac7\" class=\"link\">
                    <i class=\"material-icons mi-menu\">menu</i>
                    <span>
                    Jms MegaMenu
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-128\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-AdminJmsmegamenuManager\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsmegamenuManager&amp;token=90d6a6683b4f6917a1cbb0488e4caac7\" class=\"link\"> Menu Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminJmsmegamenuStyle\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsmegamenuStyle&amp;token=f7c66efcaae3ac2f3ffd633f7db2c4df\" class=\"link\"> Menu Style
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-AdminJmsblogDashboard\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsblogCategories&amp;token=91cd04b5471f3f37826be44d6e6e380a\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-131\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"132\" id=\"subtab-AdminJmsblogCategories\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsblogCategories&amp;token=91cd04b5471f3f37826be44d6e6e380a\" class=\"link\"> 分类
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"133\" id=\"subtab-AdminJmsblogPost\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsblogPost&amp;token=1db02bf15125b22be34281f07663b959\" class=\"link\"> Post
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminJmsblogComment\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsblogComment&amp;token=42cf502746ab7ec74172c206b9b7e286\" class=\"link\"> Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"135\" id=\"subtab-AdminJmsblogSetting\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmsblogSetting&amp;token=b3e0af0bb1223e246d67aa2f148192b9\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"136\" id=\"subtab-AdminJmspagebuilderDashboard\">
                  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmspagebuilderHomepages&amp;token=5165e677393349b90bfd457c6eb35194\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Jms Page Builder
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-136\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminJmspagebuilderHomepages\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmspagebuilderHomepages&amp;token=5165e677393349b90bfd457c6eb35194\" class=\"link\"> Home Pages
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"139\" id=\"subtab-AdminJmspagebuilderSetting\">
                              <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminJmspagebuilderSetting&amp;token=475123037b63a616cf30789b243fa7a8\" class=\"link\"> Setting
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">分类</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/cn/backoffice/index.php/product/catalog?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\" aria-current=\"page\">单件商品</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            单件商品          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/cn/backoffice/index.php/product/new?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\"                  title=\"创建新商品： CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add</i>
                  新商品
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/cn/backoffice/index.php/module/catalog?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\"                title=\"推荐模块\"
                              >
                推荐模块
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"帮助\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/cn/backoffice/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fzh%252Fdoc%252FAdminProducts%253Fversion%253D1.7.4.3%2526country%253Dzh/%E5%B8%AE%E5%8A%A9?_token=gVpD-GUYBu5VijB44vzQGdRlxKQEMmA2NMFStrng2KE\"
                   id=\"product_form_open_help\"
                >
                  帮助
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ZH&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/zh/login?email=admin%40deoliver.com&amp;firstname=Ruolin&amp;lastname=ZHENG&amp;website=http%3A%2F%2Fwww.deoliver.com%2Fcn%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/cn/backoffice/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/zh/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/zh/login?email=admin%40deoliver.com&amp;firstname=Ruolin&amp;lastname=ZHENG&amp;website=http%3A%2F%2Fwww.deoliver.com%2Fcn%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> 登录
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
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1251
        $this->displayBlock('content_header', $context, $blocks);
        // line 1252
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1253
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1254
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1255
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>哦，不！</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    谢谢。
  </p>
  <a href=\"https://www.deoliver.com/cn/backoffice/index.php?controller=AdminDashboard&amp;token=cae0087431d597bfcdc8dc838aebf7c5\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    返回
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
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ZH&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/zh/login?email=admin%40deoliver.com&amp;firstname=Ruolin&amp;lastname=ZHENG&amp;website=http%3A%2F%2Fwww.deoliver.com%2Fcn%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/cn/backoffice/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
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
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/zh/forgot-your-password\">I forgot my password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/zh/login?email=admin%40deoliver.com&amp;firstname=Ruolin&amp;lastname=ZHENG&amp;website=http%3A%2F%2Fwww.deoliver.com%2Fcn%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ZH&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCreate an Account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> 登录
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
        // line 1364
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
    }

    // line 1251
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 1252
    public function block_content($context, array $blocks = array())
    {
    }

    // line 1253
    public function block_content_footer($context, array $blocks = array())
    {
    }

    // line 1254
    public function block_sidebar_right($context, array $blocks = array())
    {
    }

    // line 1364
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "__string_template__ba83b8d47628d161dbbb2786f00f0a0bbea368a82ba440e43228592e4b51fab9";
    }

    public function getDebugInfo()
    {
        return array (  1443 => 1364,  1438 => 1254,  1433 => 1253,  1428 => 1252,  1423 => 1251,  1414 => 82,  1406 => 1364,  1295 => 1255,  1292 => 1254,  1289 => 1253,  1286 => 1252,  1284 => 1251,  111 => 82,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__ba83b8d47628d161dbbb2786f00f0a0bbea368a82ba440e43228592e4b51fab9", "");
    }
}
