<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 17:18:45
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\controllers\cms_content\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2085559ecb6d53abac1-48715556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a16b8fe716fb422f90eb14960d9a6dd4d03a0ff' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\controllers\\cms_content\\content.tpl',
      1 => 1507667373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2085559ecb6d53abac1-48715556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb6d53d32c8_27832602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb6d53d32c8_27832602')) {function content_59ecb6d53d32c8_27832602($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
