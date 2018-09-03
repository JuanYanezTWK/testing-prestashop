<?php /* Smarty version Smarty-3.1.19, created on 2018-08-20 17:42:18
         compiled from "/var/www/html/prestashop/admin/themes/default/template/content-legacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10015178745b7ae15a044759-23438462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1d6bc065d7587bf1a8645748ecb43ada6975655' => 
    array (
      0 => '/var/www/html/prestashop/admin/themes/default/template/content-legacy.tpl',
      1 => 1508782756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10015178745b7ae15a044759-23438462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b7ae15a0467f2_28603367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7ae15a0467f2_28603367')) {function content_5b7ae15a0467f2_28603367($_smarty_tpl) {?>
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
