<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 19:03:30
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\helpers\tree\subtree_associated_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1454659eccf62b988c8-77431928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bc95e55795f0f191dc299292cc08d6c391584e1' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\helpers\\tree\\subtree_associated_categories.tpl',
      1 => 1507667387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454659eccf62b988c8-77431928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nodes' => 0,
    'selected_categories' => 0,
    'imploded_selected_categories' => 0,
    'id_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59eccf62bdee05_84284963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eccf62bdee05_84284963')) {function content_59eccf62bdee05_84284963($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

<?php }?>

<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['selected_categories']->value)&&!empty($_smarty_tpl->tpl_vars['selected_categories']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['imploded_selected_categories'] = new Smarty_variable(implode('","',$_smarty_tpl->tpl_vars['selected_categories']->value), null, 0);?>
	var selected_categories = new Array("<?php echo $_smarty_tpl->tpl_vars['imploded_selected_categories']->value;?>
");

	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').tree('collapseAll');
	$('#<?php echo $_smarty_tpl->tpl_vars['id_tree']->value;?>
').find(":input").each(
		function()
		{
			if ($.inArray($(this).val(), selected_categories) != -1)
			{
				$(this).prop("checked", true);
				$(this).parent().addClass("tree-selected");
				$(this).parents("ul.tree").each(
					function()
					{
						$(this).children().children().children(".icon-folder-close")
							.removeClass("icon-folder-close")
							.addClass("icon-folder-open");
						$(this).show();
					}
				);
			}
		}
	);
<?php }?>
</script>
<?php }} ?>
