<?php /*%%SmartyHeaderCode:805659ecb017434cd7-90444748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinks/ps_customeraccountlinks.tpl',
      1 => 1507667577,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '805659ecb017434cd7-90444748',
  'variables' => 
  array (
    'urls' => 0,
    'my_account_urls' => 0,
    'my_account_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb017510bf0_34631647',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb017510bf0_34631647')) {function content_59ecb017510bf0_34631647($_smarty_tpl) {?>
<div id="block_myaccount_infos" class="col-md-2 links wrapper">
  <h3 class="myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost/prestashop2/moje-konto" rel="nofollow">
      Twoje konto
    </a>
  </h3>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li>
          <a href="http://localhost/prestashop2/adresy" title="Adresy" rel="nofollow">
            Adresy
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop2/dane-osobiste" title="Dane osobowe" rel="nofollow">
            Dane osobowe
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop2/potwierdzenie-zwrotu" title="Moje pokwitowania - korekty płatności" rel="nofollow">
            Moje pokwitowania - korekty płatności
          </a>
        </li>
            <li>
          <a href="http://localhost/prestashop2/historia-zamowien" title="Zamówienia" rel="nofollow">
            Zamówienia
          </a>
        </li>
        
	</ul>
</div>
<?php }} ?>
