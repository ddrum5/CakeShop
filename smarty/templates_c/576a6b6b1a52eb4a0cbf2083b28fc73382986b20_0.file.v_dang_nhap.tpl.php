<?php
/* Smarty version 3.1.30, created on 2022-04-29 10:25:25
  from "C:\xampp\htdocs\Projects\shop_hoa\views\v_dang_nhap.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626ba0f532ea30_67387025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576a6b6b1a52eb4a0cbf2083b28fc73382986b20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\views\\v_dang_nhap.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_nhap/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_nhap/v_dang_nhap.tpl' => 1,
  ),
),false)) {
function content_626ba0f532ea30_67387025 (Smarty_Internal_Template $_smarty_tpl) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->_subTemplateRender("file:views/dang_nhap/v_dang_nhap.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}