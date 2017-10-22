<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 17:47:42
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:648359ecbd9e3baa35-72061284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1916cee4535ace2ca8108d9fa8f7040f3f5dd6b7' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1507667387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '648359ecbd9e3baa35-72061284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecbd9e416f69_00704879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecbd9e416f69_00704879')) {function content_59ecbd9e416f69_00704879($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
