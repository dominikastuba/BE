<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 16:49:57
         compiled from "module:ps_customtext/ps_customtext.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1259059ecb015aa8a82-64562570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8654b2ba7ef103395c5eb0a4a12ed7463d291bc8' => 
    array (
      0 => 'module:ps_customtext/ps_customtext.tpl',
      1 => 1507667521,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1259059ecb015aa8a82-64562570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_infos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb015ab4113_52391299',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb015ab4113_52391299')) {function content_59ecb015ab4113_52391299($_smarty_tpl) {?>

<div id="custom-text">
  <?php echo $_smarty_tpl->tpl_vars['cms_infos']->value['text'];?>

</div>
<?php }} ?>
