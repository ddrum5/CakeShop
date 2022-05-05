<?php
/* Smarty version 3.1.30, created on 2022-04-29 03:59:53
  from "C:\xampp\htdocs\Projects\shop_hoa\views\v_dang_ki.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_626b4699721ff8_08380157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1c558ab326201764a7122069a96f57803f9475a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Projects\\shop_hoa\\views\\v_dang_ki.tpl',
      1 => 1651195238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/dang_ki/v_thanh_danh_muc.tpl' => 1,
    'file:views/dang_ki/v_dang_ki.tpl' => 1,
  ),
),false)) {
function content_626b4699721ff8_08380157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_thanh_danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:views/dang_ki/v_dang_ki.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
