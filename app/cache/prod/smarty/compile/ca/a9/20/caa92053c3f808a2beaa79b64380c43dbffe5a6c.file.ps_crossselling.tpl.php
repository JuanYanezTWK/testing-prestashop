<?php /* Smarty version Smarty-3.1.19, created on 2018-08-20 17:42:16
         compiled from "/var/www/html/prestashop/themes/classic/modules/ps_crossselling/views/templates/hook/ps_crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14734615235b7ae158acd8e8-90608186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caa92053c3f808a2beaa79b64380c43dbffe5a6c' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/modules/ps_crossselling/views/templates/hook/ps_crossselling.tpl',
      1 => 1508782756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14734615235b7ae158acd8e8-90608186',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b7ae158ad08f1_45631948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b7ae158ad08f1_45631948')) {function content_5b7ae158ad08f1_45631948($_smarty_tpl) {?>

<section class="featured-products clearfix mt-3">
  <h2><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h2>
  <div class="products">
    <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
      <?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

    <?php } ?>
  </div>
</section>
<?php }} ?>
