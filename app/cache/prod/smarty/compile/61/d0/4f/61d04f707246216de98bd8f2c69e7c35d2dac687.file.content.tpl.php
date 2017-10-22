<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 16:51:49
         compiled from "C:\wamp64\www\prestashop2\admin759tvsajh\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1349459ecb085073dc5-26591622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d04f707246216de98bd8f2c69e7c35d2dac687' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\admin759tvsajh\\themes\\default\\template\\content.tpl',
      1 => 1507667369,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1349459ecb085073dc5-26591622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb08508b6d4_99680579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb08508b6d4_99680579')) {function content_59ecb08508b6d4_99680579($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
