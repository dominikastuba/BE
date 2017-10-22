<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 17:34:30
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\helpers\list\list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2367159ecba8605b2d4-79267196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47bca3cf5cdd0b00ec4f4c05f6b9cbdf1aa0083e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\helpers\\list\\list_action_view.tpl',
      1 => 1507667386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2367159ecba8605b2d4-79267196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecba8607a951_36065512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecba8607a951_36065512')) {function content_59ecba8607a951_36065512($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
