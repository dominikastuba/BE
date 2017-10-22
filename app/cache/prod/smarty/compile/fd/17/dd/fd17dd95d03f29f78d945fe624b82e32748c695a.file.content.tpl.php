<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 17:19:06
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\new-theme\template\controllers\addons_catalog\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:704459ecb6ea3556c7-19208643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd17dd95d03f29f78d945fe624b82e32748c695a' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\new-theme\\template\\controllers\\addons_catalog\\content.tpl',
      1 => 1507667392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704459ecb6ea3556c7-19208643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_addons_content' => 0,
    'addons_content' => 0,
    'iso_lang' => 0,
    'iso_currency' => 0,
    'iso_country' => 0,
    'parent_domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb6ea3f13b6_73387435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb6ea3f13b6_73387435')) {function content_59ecb6ea3f13b6_73387435($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['display_addons_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['addons_content']->value;?>

<?php } else { ?>
	<iframe class="clearfix" style="margin:0px;padding:0px;width:100%;height:920px;overflow:hidden;border:none" src="//addons.prestashop.com/iframe/search.php?isoLang=<?php echo $_smarty_tpl->tpl_vars['iso_lang']->value;?>
&amp;isoCurrency=<?php echo $_smarty_tpl->tpl_vars['iso_currency']->value;?>
&amp;isoCountry=<?php echo $_smarty_tpl->tpl_vars['iso_country']->value;?>
&amp;parentUrl=<?php echo $_smarty_tpl->tpl_vars['parent_domain']->value;?>
"></iframe>
<?php }?>
<?php }} ?>
