<?php /* Smarty version Smarty-3.1.19, created on 2017-10-22 16:51:50
         compiled from "C:\wamp64\www\prestashop2\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:935859ecb0864f9731-29029126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '723f848b107f3769909c7535aadde385a22b04b9' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop2\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1507667539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '935859ecb0864f9731-29029126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ecb08651cd99_15755496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ecb08651cd99_15755496')) {function content_59ecb08651cd99_15755496($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
