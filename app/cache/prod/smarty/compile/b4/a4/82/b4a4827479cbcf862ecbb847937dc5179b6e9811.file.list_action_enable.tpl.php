<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 17:18:45
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\helpers\list\list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191059ecb6d523dd66-57737703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a4827479cbcf862ecbb847937dc5179b6e9811' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\helpers\\list\\list_action_enable.tpl',
      1 => 1507667386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191059ecb6d523dd66-57737703',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ajax' => 0,
    'enabled' => 0,
    'url_enable' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb6d52b9021_18239761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb6d52b9021_18239761')) {function content_59ecb6d52b9021_18239761($_smarty_tpl) {?>
<a class="list-action-enable<?php if (isset($_smarty_tpl->tpl_vars['ajax']->value)&&$_smarty_tpl->tpl_vars['ajax']->value) {?> ajax_table_link<?php }?><?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> action-enabled<?php } else { ?> action-disabled<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['url_enable']->value,'html','UTF-8');?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?><?php echo smartyTranslate(array('s'=>'Enabled','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Disabled','d'=>'Admin.Global'),$_smarty_tpl);?>
<?php }?>">
	<i class="icon-check<?php if (!$_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
	<i class="icon-remove<?php if ($_smarty_tpl->tpl_vars['enabled']->value) {?> hidden<?php }?>"></i>
</a>
<?php }} ?>
