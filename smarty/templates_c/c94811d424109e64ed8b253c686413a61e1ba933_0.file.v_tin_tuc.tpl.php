<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:55:20
  from "C:\xampp\htdocs\Projects\shop_hoa\views\v_tin_tuc.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b45881f6816_47322868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c94811d424109e64ed8b253c686413a61e1ba933' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\views\\v_tin_tuc.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/tin_tuc/v_thanh_danh_muc.tpl' => 1,
    'file:views/tin_tuc/v_ds_tin_tuc.tpl' => 1,
  ),
),false)) {
function content_626b45881f6816_47322868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender("file:views/tin_tuc/v_ds_tin_tuc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<?php }
}
